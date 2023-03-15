<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Restaurant;
use App\Models\Category;
use App\Models\Dish;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        $categories = Category::all();

        $restaurant = Restaurant::where('user_id', auth()->id())->first();
        $restaurants = Restaurant::all();

        $user_id = auth()->user()->id;
        $dishes = Dish::where('restaurant_id', $user_id)
        ->orderBy('name', 'asc')
        ->get();

        return view("dashboard", compact('users', 'categories', 'restaurant', 'dishes', 'restaurants'));
    }

    public function search(Request $request)
{   
    $user = Auth::user();
    $query = $request->get('name');
    $restaurant = Restaurant::where('user_id', auth()->id())->first();
    $dishes = [];
    if(isset($restaurant)) {
        $dishes = Dish::where('restaurant_id', $restaurant->id)
              ->where('name', 'like', '%'.$query.'%')
              ->get();
    }
    return view('dishes.show', compact('dishes'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        $restaurants = Restaurant::all();

        return view("restaurants.create", compact('categories', 'restaurants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRestaurantRequest $request)
    {
        // validated() usa le regole indicate nella funzione rules dello StorePostRequest e ci ritorna i dati validati
        $user = Auth::user();
        $data = $request->validated();
        $restaurant = Restaurant::create($data);

        // Salviamo il file nello storage e recuperiamo il path
        // carico il file solo se ne ricevo uno
        if (key_exists("image", $data)) {
            // salvo in una variabile temporanea il percorso del nuovo file
            $path = Storage::put("restaurants", $data["image"]);
            $restaurant->image = $path;
        }
        /* $restaurant->user_id = Auth::user()->id; */
        $restaurant->user_id = $user->id;
        $restaurant->save();

        // Controlla che nei dati che il server sta ricevendo, ci sia un valore per la chiave "categories".
        if ($request->has("categories")) {
            // if (key_exists("technologies", $data)) {
            $restaurant->categories()->attach($data["categories"]);
        }

        return redirect()->route('restaurants.show', $restaurant->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        $this->authorize('view', $restaurant);

        return view('restaurants.show', compact('restaurant'));
    }

    public function showOrders(Restaurant $restaurant){
        $this->authorize('view', $restaurant);
       
        $orders = Order::where('restaurant_id', $restaurant->id)
                    ->with('dishes')
                    ->orderBy('created_at', 'desc')
                    ->get();
        return view('restaurants.showOrders', compact('orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $restaurant = Restaurant::findOrFail($id);

        $categories = Category::all();

        return view('admin.edit', compact('restaurant', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRestaurantRequest $request, Restaurant $restaurant)
    {
        // validated() usa le regole indicate nella funzione rules dell'UpdateRestaurantRequest e ci ritorna i dati validati
        $data = $request->validated();

        // $restaurant = Restaurant::findOrFail($id);
        $restaurant->update($data);

        // carico il file solo se ne ricevo uno
        if (key_exists("image", $data)) {
            // salvo in una variabile temporanea il percorso del nuovo file
            $path = Storage::put("restaurants", $data["image"]);
            // Dopo aver caricato la nuova immagine, prima di aggiornare il db,
            // cancelliamo dallo storage il vecchio file.
            Storage::delete($restaurant->image);

            $restaurant->image = $path;
        }

        $restaurant->save();

        $restaurant->categories()->sync($data["categories"]);

        return redirect()->route('projects.show', $restaurant->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restaurant = Restaurant::findOrFail($id);
    
        if ($restaurant->image) {
            Storage::delete($restaurant->image);
        }

        $restaurant->categories()->detach();
    
        $restaurant->delete();

        return redirect()->route("dashboard");
    }
}