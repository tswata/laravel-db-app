<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Validators\UserValidator;

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
        $validator = $this->app['validator'];
        $validator->resolver(function($translator, $data, $rules, $messages) {
            return new UserValidator($translator, $data, $rules, $messages);
        });
    }
}
