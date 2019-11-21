<?php 
namespace App\Http\Controllers\Backend;
use App\Models\Order;

/**
 * 
 */
class Home_adminController extends Main_adminController
{
	public function index(){
		$order_count=Order::where('status',0)->count();
		$revenue=Order::where('status',2)->get();
		
		$t=0;
		foreach($revenue as $item){
				$t += $item->total_price;
		}
		
	return view('Backend/index',compact('order_count','t'));
	}
}

 ?>