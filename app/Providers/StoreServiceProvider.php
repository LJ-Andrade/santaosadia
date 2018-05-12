<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class StoreServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
    }
    
    public function register()
    {
        $this->composeStore();
    }
    
    public function composeStore()
    {
        View::composer([
            'store.index', 
            'store.checkout-checkdata', 
            'store.checkout-shipping',
            'store.checkout-payment',
            'store.checkout-review',
            'store.customer-active-cart',
            'store.customer-account',
            'store.customer-wishlist',
            'store.customer-orders',
            'store.show',
            'store.cartdetail',
            'store.checkout-mp',
            'store.wishlist'

        ], 'App\Http\ViewComposers\StoreComposer');
        
    }
}

