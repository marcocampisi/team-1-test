<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Braintree\Gateway;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->singleton(Gateway::class, function($app) {
            return new Gateway(
                [
                    'environment' => 'sandbox',
                    'merchantId' => env("BRAINTREE_MERCHANT_ID"),
                    'publicKey' => env("BRAINTREE_PUBLIC_ID"),
                    'privateKey' => env("BRAINTREE_PRIVATE_ID"),
                ]
            );
        });
    }
}
