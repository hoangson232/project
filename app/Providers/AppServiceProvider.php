<?php

namespace App\Providers;
use App\Models\Order;
use App\Models\Account;
use App\Models\Product;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Helper\CartHelper;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

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
            $data=[
                'category'=>Category::where('status',1)->orderBy('name','ASC')->get(),
                'carts'=> new CartHelper(),
                'od_count'=>Order::where('status',0)->count(),
                'od_count_all'=>Order::count(),
                'user_count'=>Account::where('status',0)->count(),
                'admin_count'=>Account::where('status',1)->count(),
                'product_count'=>Product::count(),
                'wishlist_count'=>0,
            ];
            
            if(Auth::check()){
                $auth=['wishlist_count'=>Wishlist::where('account_id',Auth::user()->id)->count(),];
                $auth_check=array_merge($data,$auth);
                $view->with($auth_check);
            }else{
                $view->with($data);
            }
            //Phần trên là tối ưu lại cho phần dưới
            // if(Auth::check()){
            //     $view->with([
            //         'category'=>Category::where('status',1)->orderBy('name','ASC')->get(),
            //         'carts'=> new CartHelper(),
            //         'od_count'=>Order::where('status',0)->count(),
            //         'od_count_all'=>Order::count(),
            //         'user_count'=>Account::where('status',0)->count(),
            //         'admin_count'=>Account::where('status',1)->count(),
            //         'product_count'=>Product::count(),
            //         'wishlist_count'=>Wishlist::where('account_id',Auth::user()->id)->count(),
            //    ]);
            // }else{
            //     $view->with([
            //         'category'=>Category::where('status',1)->orderBy('name','ASC')->get(),
            //         'carts'=> new CartHelper(),
            //         'od_count'=>Order::where('status',0)->count(),
            //         'od_count_all'=>Order::count(),
            //         'user_count'=>Account::where('status',0)->count(),
            //         'admin_count'=>Account::where('status',1)->count(),
            //         'product_count'=>Product::count(),
            //         'wishlist_count'=>0,
            //    ]);
            // }
            

        });

    }
}
