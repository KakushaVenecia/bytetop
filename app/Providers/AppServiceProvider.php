<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Models\Cart;

use Illuminate\Support\ServiceProvider;

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
        // Define a view composer for the navbar partial
    View::composer('partials.navbar', function ($view) {
        // Check if the user is authenticated
        if (Auth::check()) {
            $cartCount = Cart::where('user_id', auth()->id())->count();
        } else {
            $cartCount = 0; // or any default value you prefer
        }
        
        // Pass the cart count to the navbar partial
        $view->with('cartCount', $cartCount);
    });
    }
}
