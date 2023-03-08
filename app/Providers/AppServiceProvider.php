<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Braintree\Gateway;

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

    // Il singleton è un design pattern creazionale che ha lo scopo di garantire che di una determinata classe venga creata una e una sola istanza,
    // e di fornire un punto di accesso globale a tale istanza.
    public function boot()
    {
        $this->app->singleton(Gateway::class, function($app){
            return new Gateway(
                [
                    'environment' => 'sandbox',
                    'merchantId' => 'r82zbvpdvhnpw3jc',
                    'publicKey' => 'jr4v7cxpdkfg43sm',
                    'privateKey' => 'd12b60eeafa387da244ab4ef1adda523'
                ]
            );
        });
    }
}