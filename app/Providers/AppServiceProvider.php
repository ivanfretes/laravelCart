<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\ProductCategory;
use Illuminate\Http\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        Schema::defaultStringLength(191);

        // Listado de categorias
        $categories = ProductCategory::orderBy('name','asc')->get();
        View::share('categories', $categories);

        // Si existe una session activa
        //View::share('orderActive', $categories);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
