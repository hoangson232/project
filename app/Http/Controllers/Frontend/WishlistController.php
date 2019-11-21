<?php 	
namespace App\Http\Controllers\Frontend;
use Auth;
use App\Http\Controllers\Controller;
use App\Models\Wishlist;

/**
 * 
 */
class WishlistController extends Controller
{
	
public function show(){
	if(Auth::check()){
		$list=Wishlist::where('account_id',Auth::user()->id)->orderBy('created_at','desc')->get();
		return view('frontend.wishlist',compact('list'));
	}else{
		return view('frontend.wishlist');
	}
	
	}

public function add($account_id,$product_id){
	$same=Wishlist::where('account_id',$account_id)->where('product_id',$product_id)->count();
	if($same==0){
		$add=Wishlist::create([
			'account_id'=> $account_id,
			'product_id'=> $product_id,
		]);
		return back()->with('mess','thêm ưa thích thành công!');
	}else{
		return back()->with('error','sản phẩm đã có trong mục ưa thích');
	}
	
	}

public function delete($id){
	if(	$delete=Wishlist::find($id)->delete()){
		return redirect()->back()->with('mess','Xóa thành công!');
	}else{
		return redirect()->back()->with('error','Xóa không thành công!');
	}

	
	}

public function deleteAll(){
	if($deleteAll=Wishlist::where('account_id',Auth::user()->id)->delete()){
		return redirect()->back()->with('mess','Xóa thành công!');
	}else{
		return redirect()->back()->with('error','Xóa không thành công!');
	}
	
	
	}
}


 ?>