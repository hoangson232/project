<?php 
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\http\Request;
use Auth;
use Illuminate\Support\Str;
use Mail;
use App\Models\Account;
use App\Models\Product;
use App\Models\Order;
use App\Models\Category;
/**
 * 
 */
class Home_adminController extends Main_adminController
{
	public function index(){
		$order_count=Order::where('status',0)->count();
	return view('Backend/index',compact('order_count'));
	}
}

 ?>