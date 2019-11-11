<?php 	
namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\ImgProduct;
use Auth;
use Illuminate\http\Request;
use App\Helper\CartHelper;
use App\Models\Order;
use App\Models\OrderDetail;
use Mail;
/**
 * 
 */
class HomeController extends Controller
{
	
public function index(){

	$productNew = Product::where('status',1)-> orderBy('created_at','DESC')-> get();
	$category = Category::where('status',1)->orderBy('name','asc')->get();
	return view('home',compact('productNew','category'));
	}
public function pro_detail($slug){
	$pro=Product::where('slug',$slug)-> first();
	$imgPro=ImgProduct::where('product_id',$pro->id)-> get();
	return view('frontend/pro_detail',compact('pro','imgPro'));	
	}
public function shop($slug){
	// $shop=Category::where('status',1)-> orderBy('name','ASC')-> get();
	$cate= Category::where('slug',$slug)->first();
	$product= Product::where('category_id',$cate->id)->get();
	// dd($category);
	return view('frontend/shop',compact('product','cate'));

	}
public function cus_login(){
	return view('frontend/customer_login');
	}
public function post_login(Request $reg){
	if (Auth::attempt($reg->only('email','password'),($reg->has('remember')))){
		return redirect()->route('home');
	}
	else{
		return redirect()->back()->with('mess','Nhập không đúng hoặc tài khoản không tồn tại');
	}
	}

public function shop_checkout(){
	return view('shop_checkout');
	}	

public function post_checkout(Request $req, CartHelper $cart){
	$order=Order::create([
		'name'=>$req->name,
		'phone'=>$req->phone,
		'address'=>$req->address,
		'email'=>$req->email,
		'account_id'=>Auth::user()->id,
	]);
	// dd($order->id);
	foreach ($cart->items as $value) {
		$od=OrderDetail::create([
			'order_id'=> $order->id,
			'product_id'=> $value['id'],
			'quantity'=> $value['quantity'],
			'price'=> $value['price'],
		]);
	}
	$data=[
		'name'=>$req->name,
		'email'=>$req->email,
	];
	$email=[
		'ph1906ij@gmail.com',
		$data['email'],
		'hoangson232@gmail.com'
	];
	Mail::send('viewemail', $data, function ($message) use($data,$email) {
	    $message->from('ph1906ij@gmail.com', 'Lezada');
	
	    $message->to($email, 'viewemail');
	
	    $message->subject('Xác nhận đơn hàng đã đặt');
	
	});

	Session(['cart'=>[]]);
	return redirect()->route('home')->with('mes','Chúc mừng bạn đã đặt hàng thành công!');
	}	
	public function search_product(Request $req){
		$product=Product::where([
			['status',1],
			['name','like','%'.$req->search.'%']
		])		
						->orWhere([
			['status',1],
			['price',$req->search]
		])
						->orWhere([
			['status',1],
			['sale_price',$req->search],
			['sale_price','>',0]
		])

						->get();
		return view('frontend.search_result',compact('product','req'));
	}
}


 ?>