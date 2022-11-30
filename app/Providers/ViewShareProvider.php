<?php

namespace App\Providers;

use App\Models\Features;
use App\Models\Page;
use App\Models\PageCategory;
use App\Models\ProductCategory;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewShareProvider extends ServiceProvider
{

    public function boot()
    {

       $Pages = Cache::remember('pages',now()->addYear(1), function () {
            return Page::with('getCategory')->get();
        });

        $PageCategory = Cache::remember('page_category',now()->addYear(1), function () {
            return PageCategory::all();
        });

        $Service = Cache::remember('service',now()->addYear(1), function () {
            return Service::all();
        });

        $ServiceCategory = Cache::remember('service_categories',now()->addYear(1), function () {
            return ServiceCategory::with('getService')->where('status', '=', 1)->get();
        });

        $ProductCategory = Cache::remember('product_categories',now()->addYear(1), function () {
            return ProductCategory::with('getProduct')->where('status', '=', 1)->get();
        });

        //dd($ProductCategory);

        View::share([
            'Pages' => $Pages,
            'ServiceCategory' => $ServiceCategory,
            'Service' => $Service,
            'ProductCategory' => $ProductCategory,
            'PageCategory' => $PageCategory
        ]);
    }
}
