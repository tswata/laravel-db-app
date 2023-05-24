<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class GreetingServiceProvider extends ServiceProvider
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
    public function boot()
    {
        View::composer('users.index',function($view)
        {       
        $hour = date('H');
        if ( $hour < 3 || $hour > 18) {
            $greeting = 'こんばんは';
        } elseif ( $hour >=3 && $hour < 9) {
            $greeting = 'おはようございます';
        } else {
            $greeting = 'こんにちは';
        }
        //  $greeting = $hour < 12 ? '午前です' : '午後です';
        $view->with('greeting', $greeting);
        });
    }
}
