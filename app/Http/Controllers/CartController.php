<?php 	
namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Helper\CartHelper;
use Illuminate\http\Request;

/**
 * 
 */
class CartController extends Controller
{
	
public function show(){
	$cart= session('cart') ? session('cart') : [];
	// dd($cart);
	return view('show-cart',compact('cart'));
	}

public function add(CartHelper $cart,$id){
	$product = Product::find($id);
	$cart->add($product);
	// dd($cart);
	return redirect()->route('show-cart');
	}

public function update(Request $reg, CartHelper $cart, $id){
	// dd($id);
	$quantity= $reg->quantity;
	$cart->update($id, $quantity);
	return redirect()->back();
	}

public function delete(CartHelper $cart, $id){
	$cart->delete($id);
	return redirect()->back();
	}

public function deleteAll(CartHelper $cart){
	$cart->deleteAll();
	return redirect()->back();
	}
}


 ?>