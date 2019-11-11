<?php 
namespace App\Http\Controllers\Backend\order;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Controllers\HomeController;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Account;
use Illuminate\http\Request;

class OrderController extends Controller
{
   
    public function order_list()
    {
    	$orders=Order::all();
    	// dd($orders);
        return view('backend.order.list',compact('orders'));
    }
    public function order_detail($id){
    	$order=Order::find($id);
    	$us=Account::find($order->account_id);
    	/*$pro=OrderDetail::where('order_id',$id)->get();
    	dd($pro);*/
    	// dd($order->all());
    	return view('backend.order.detail',compact('us','order'));
    }
    public function order_update(Request $req){
    	// dd($req->all());
    	$od=Order::find($req->id)->update([
    		'status'=>$req->status
    	]);
    	
    	return redirect()->route('order_list');
    }
}




 ?>