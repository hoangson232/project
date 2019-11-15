<?php 
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Auth;

/**
 * summary
 */
class Main_adminController extends Controller
{
    /**
     * summary
     */
    public function __construct()
    {

        $this->middleware(function($request,$next){
        	// dd(Auth::user());
        
            if (Auth::user()->status == 0) {
                return redirect()->route('home');
            }else{
                return $next($request);
            }
        });
    }
}


 ?>