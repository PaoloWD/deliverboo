<?php

namespace App\Providers;
use Braintree\Gateway;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(Gateway::class, function($app){
            return new Gateway([
                'environment' => 'sandbox',
                'merchantId' => 'h28c6qmktphjvv8n',
                'publicKey' => 'dwtyb5mnk99xw2zh',
                'privateKey' => '6493a6e3523806bce0070db5d33999f2'
            ]);
        });
    }
}