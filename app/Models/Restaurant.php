<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = ["name", "image", "vat", "address", "user_id"];

    public function categories() {
        return $this->belongsToMany(Category::class);
    }
    public function dishes() {
        return $this->belongsTo(Dish::class);
    }
    public function user() {
        return $this->belongsToMany(User::class);
    }
}