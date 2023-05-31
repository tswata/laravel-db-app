<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Validators\UserValidator;


class ValidationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $validator = $this->app['validator'];
        
        $validator->resolver(function($translator, $data, $rules, $messages) {
            return new UserValidator($translator, $data, $rules, $messages); 
        });
    }
}