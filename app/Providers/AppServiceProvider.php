<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Product;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Str;


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

        Product::creating(function ($product) {
            $product->slug = Str::slug($product->name);
        });

        Product::updating(function ($product) {
            $product->slug = Str::slug($product->name);
        });
    }
}
