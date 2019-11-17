<?php

namespace App\Providers;
use App\Models\Order;
use App\Models\Account;
use App\Models\Product;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Helper\CartHelper;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Validator::extend('check_old_pass', function ($attribute, $value, $parameters, $validator) {

            return \Hash::check($value, \Auth::user()->password);

            });
        view()->composer('*',function($view){
            $view->with([
                'category'=>Category::where('status',1)->orderBy('name','ASC')->get(),
                 'carts'=> new CartHelper(),
                 'od_count'=>Order::where('status',0)->count(),
                 'od_count_all'=>Order::count(),
                 'user_count'=>Account::where('status',0)->count(),
                 'admin_count'=>Account::where('status',1)->count(),
                 'product_count'=>Product::count(),

            ]);

        });

    }
}
