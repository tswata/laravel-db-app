<?php
namespace App\Http\Composers;

use Illuminate\View\View;

class GreetingComposer {
    public function compose (View $view){
        $hour = date('H');
        if ( $hour < 3 || $hour > 18) {
            $greeting = 'こんばんは';
        } elseif ( $hour >=3 && $hour < 9) {
            $greeting = 'おはようございます';
        } else {
            $greeting = 'こんにちは';
        }
        $view -> with('greeting', $greeting);
    }
}