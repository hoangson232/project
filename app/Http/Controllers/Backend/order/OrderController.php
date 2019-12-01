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
   
    public function order_list(Request $req)
    {   
    	$orders= Order::orderBy('created_at','desc')->get();
        $order_count=Order::count();
        $date_from= '';
        $date_to= '';

        if ($req->order_search) {
            $ord= Order::where('name','like','%'.$req->order_search.'%')
                            ->orWhere('id',$req->order_search);
            $orders=$ord->get();
            $order_count=Order::where('name','like','%'.$req->order_search.'%')
                                ->orWhere('id',$req->order_search)
                                ->count();
                if (request()->date_from && request()->date_to) {
                $ords=$ord->whereBetween('created_at',[request()->date_from,request()->date_to])
                        ->orderBy('created_at','desc');
                $orders=$ords->get();
                $order_count=Order::where('name','like','%'.$req->order_search.'%')
                                    ->orWhere('id',$req->order_search)
                                    ->whereBetween('created_at',[request()->date_from,request()->date_to])
                                    ->count();
                $date_from=request()->date_from;
                $date_to=request()->date_to;
                }
        }

        if (request()->date_from && request()->date_to) {
            $ord=Order::whereBetween('created_at',[request()->date_from,request()->date_to])->orderBy('created_at','desc');
            $orders=$ord->get();
            $order_count=$ord->count();
            $date_from=request()->date_from;
            $date_to=request()->date_to;
            if ($req->order_search) {
            $ord=Order::where('name','like','%'.$req->order_search.'%')
                        ->orWhere('id',$req->order_search)
                        ->whereBetween('created_at',[request()->date_from,request()->date_to])
                        ->orderBy('created_at','desc');      
            $orders=$ord->get();
            $order_count=$ord->count();
            }
        }
        return view('backend.order.list',compact('orders','order_count','date_from','date_to','orders','req'));
    }
     public function new_order_list(Request $req)
    {   $date_from= '';
        $date_to= '';
        $orders=Order::where('status',0)->orderBy('created_at','asc')->get();
        $order_count=Order::where('status',0)->count();
        if ($req->order_search) {
            $ord= Order::where('status',0)
                        ->where('name','like','%'.$req->order_search.'%')
                        ->orWhere('id',$req->order_search);
            $orders=$ord->get();
            $order_count=$ord->count();
                if (request()->date_from && request()->date_to) {
                $ords=$ord->whereBetween('created_at',[request()->date_from,request()->date_to])
                        ->orderBy('created_at','desc');
                $orders=$ords->get();
                $order_count=$ords->count();
                $date_from=request()->date_from;
                $date_to=request()->date_to;
                }
        }

        if (request()->date_from && request()->date_to) {
            $ord=Order::where('status',0)->whereBetween('created_at',[request()->date_from,request()->date_to])->orderBy('created_at','desc');
            $orders=$ord->get();
            $order_count=$ord->count();
            $date_from=request()->date_from;
            $date_to=request()->date_to;
            if ($req->order_search) {
            $ord=Order::where('name','like','%'.$req->order_search.'%')
                        ->orWhere('id',$req->order_search)
                        ->whereBetween('created_at',[request()->date_from,request()->date_to])
                        ->orderBy('created_at','desc');      
            $orders=$ord->get();
            $order_count=$ord->count();
            }
        }

        return view('backend.order.list',compact('orders','order_count','date_from','date_to','req'));
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