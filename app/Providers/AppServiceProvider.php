<?php

namespace App\Providers;

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

            ]);

        });

    }
}
