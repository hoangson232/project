<?php 
namespace App\Http\Controllers\Backend\order;
use Auth;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Account;
use Illuminate\http\Request;
use App\Http\Controllers\Backend\Main_adminController;

class OrderController extends Main_adminController
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