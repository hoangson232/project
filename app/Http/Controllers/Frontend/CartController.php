<?php 	
namespace App\Http\Controllers\Frontend;
use App\Models\Product;
use App\Helper\CartHelper;
use Illuminate\http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;

/**
 * 
 */
class CartController extends Controller
{
	
public function show(){
	$cart= session('cart') ? session('cart') : [];
	// dd($cart);
	return view('frontend.show-cart',compact('cart'));
	}

public function add(CartHelper $cart,$id){
	$product = Product::find($id);
	$cart->add($product);
	// dd($cart);
	return back()->with('mess','Thêm sản phẩm vào giỏ thành công!');
	}

public function update(Request $reg, CartHelper $cart, $id){
	// dd($id);
	$quantity= $reg->quantity;
	$cart->update($id, $quantity);
	return redirect()->back()->with('mess','Cập nhật thành công!');
	}

public function delete(CartHelper $cart, $id){
	$cart->delete($id);
	return redirect()->back()->with('mess','Xóa thành công!');
	}

public function deleteAll(CartHelper $cart){
	$cart->deleteAll();
	return redirect()->back()->with('mess','Xóa thành công!');
	}
public function cart_history(){
	$history=Order::where('account_id',Auth::user()->id)->orderBy('created_at','desc')->paginate(5);
	return view('frontend.cart_history',compact('history'));
}
public function history_detail($id){
	$detail=OrderDetail::where('order_id',$id)->get();
	return view('frontend.history_detail',compact('detail'));
}
}


 ?>