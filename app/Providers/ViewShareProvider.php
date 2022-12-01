<?php

namespace App\Providers;

use App\Models\Features;
use App\Models\Page;
use App\Models\PageCategory;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewShareProvider extends ServiceProvider
{

    public function boot()
    {


        if (! app()->runningInConsole()) {
            Paginator::useBootstrap();
            config()->set('settings', Setting::pluck('value','item')->all());

           $Pages = Cache::remember('pages',now()->addYear(1), function () {
                return Page::with('getCategory')->get();
            });

            $ProductCategory = Cache::remember('product_categories',now()->addYear(1), function () {
                return ProductCategory::with('getProduct')->where('status', '=', 1)->get();
            });
            $Product = Product::with(['getCategory'])->get();

            View::share([
                'Pages' => $Pages,
                'ProductCategory' => $ProductCategory,
                'Product' => $Product,
            ]);
       }
    }
}
