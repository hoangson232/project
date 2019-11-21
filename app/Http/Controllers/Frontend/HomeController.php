<?php 	
namespace App\Http\Controllers\Frontend;
use App\Models\Product;
use App\Models\Category;
use App\Models\ImgProduct;
use App\Models\Comment;
use Auth;
use Illuminate\http\Request;
use App\Helper\CartHelper;
use App\Models\Order;
use App\Models\OrderDetail;
use Mail;
use App\Models\Account;
use App\Models\Blog;
use App\Models\Banner;
use App\Http\Controllers\Controller;
/**
 * 
 */
class HomeController extends Controller
{
	
public function index(){

	$product = Product::where('status',1)
			-> orderBy('created_at','ASC')-> get();
	$productNew = Product::where('status',1)
			-> orderBy('created_at','DESC') ->limit(4)-> get();
	$productSale = Product::where('status',1)
			->where('sale_price','>',0)
			-> orderBy('created_at','DESC')-> get();
	$category = Category::where('status',1)->orderBy('name','asc')->get();
	$bannernew = Banner::where('status',1)->orderBy('name','ASC')->get();
	return view('home',compact('product','category','productNew','productSale','bannernew'));
	}
public function pro_detail($slug){
	$pro=Product::where('slug',$slug)-> first();
	$imgPro=ImgProduct::where('product_id',$pro->id)-> get();
	$show=Comment::where('product_id',$pro->id)->orderBy('created_at','desc')->get();
	
	return view('frontend/pro_detail',compact('pro','imgPro','show'));	
	}


public function add_comment(Request $req,$slug){
	$pro=Product::where('slug',$slug)-> first();
	$imgPro=ImgProduct::where('product_id',$pro->id)-> get();
	$show=Comment::where('product_id',$pro->id)->orderBy('created_at','desc')->get();
	$comment=Comment::create([
		'comment'=>$req->comment,
		'product_id'=>$pro->id,
		'account_id'=>Auth::user()->id,
		'status'=>1,
	]);
	$show=Comment::where('product_id',$pro->id)->orderBy('created_at','desc')->get();
	return view('frontend/pro_detail',compact('pro','imgPro','show'));
}


public function shop($slug){
	// $shop=Category::where('status',1)-> orderBy('name','ASC')-> get();
	$cate= Category::where('slug',$slug)->first();
	$product= Product::where('category_id',$cate->id)->get();
	// dd($category);
	return view('frontend/shop',compact('product','cate'));

	}

public function add(){
		return view('frontend/customer_register');
	}
	public function post_add(Request $request){
		$this->validate($request,[
		'name'=>'required',
		'email'=>'required|email|unique:account,email',
		'password'=>'required',
		'confirm_password'=>'required|same:password',
		'phone'=>'required',
		'address'=>'required',
		],
		[
		'name.required'=>'Tên tài khoản không được để rỗng',
		'phone.required'=>'Số điện thoại không được để rỗng',
		'address.required'=>'Địa chỉ không được để rỗng',
		'password.required'=>'Mật khẩu không được để rỗng',
		'confirm_password.required'=>'xác nhận mật khẩu không được để rỗng',
		'confirm_password.same'=>'xác nhận mật khẩu không chính xác',
		
		'email.required'=>'email không được để rỗng',
		'email.unique'=>'email đã có trong CSDL',
		'email.email'=>'Nhập không đúng định dạng email',
		]);
		$password=bcrypt($request->password);
		
		$request->merge(['password'=>$password],['status'=>0]);
		if(Account::create($request->all())){ 
			return redirect()-> route('cus_login')-> with('mess','Đăng ký tài khoản thành công!');
		}else{
			return redirect()-> route('cus_account_add')-> with('mess','Đăng ký tài khoản xảy ra lỗi!');
		}
	}

public function cus_login(){
	Auth::logout();
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

public function cus_logout(){
	 	Auth::logout();
	 	return redirect()->route('home'); 
}


public function shop_checkout(){
	return view('frontend.shop_checkout');
	}	

public function post_checkout(Request $req, CartHelper $cart){
	$order=Order::create([
		'name'=>$req->name,
		'phone'=>$req->phone,
		'address'=>$req->address,
		'email'=>$req->email,
		'account_id'=>Auth::user()->id,
		'total_price'=>$req->total_price,
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
		'id'=>$order->id,
		'total_price'=>$order->total_price,
	];
	
	$email=[
		'ph1906ij@gmail.com',
		$data['email'],
		'hoangson232@gmail.com'
	];
	// dd($data['id']);die();
	Mail::send('email.viewemail', $data, function ($message) use($data,$email) {
	    $message->from('ph1906ij@gmail.com', 'Lezada');
	
	    $message->to($email, 'email.viewemail');
	
	    $message->subject('Xác nhận đơn hàng đã đặt');
	
	});

	Session(['cart'=>[]]);
	return redirect()->route('complete');
	}	

	public function change_pass(){
	 	return view('Backend.account.change_pass');
	 }

	 public function post_pass(Request $req){
	 	$this->validate($req,[
	 		'old_password'=> 'required|check_old_pass',
	 		'new_password'=>'required|different:old_password',
			'confirm_password'=>'required|same:new_password'
	 	],[
	 		'old_password.required'=>'Chưa điền mật khẩu cũ',
	 		'old_password.check_old_pass'=>'Mật khẩu cũ không đúng',
	 		'new_password.required'=>'Mật khẩu mới không được để rỗng',
	 		'new_password.different'=>'Mật khẩu mới không được giống mật khẩu cũ',
			'confirm_password.required'=>'Xác nhận mật khẩu không được để rỗng',
			'confirm_password.same'=>'Xác nhận mật khẩu không chính xác',
	 	]);
	 	if(Auth::user()->update([
	 		'password'=>bcrypt($req->new_password)
	 	])){
	 		Auth::logout();
	 		return redirect()->route('cus_login')->with('mess','Đổi mật khẩu thành công, đăng nhập lại để tiếp tục');
	 	}else{
	 		return back()->with('error','Đổi mật khẩu không thành công');
	 	}
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

	public function complete(){
		return view('frontend.complete');
	}
	public function blog_index(){
		$blognew = Blog::where('status',1)->orderBy('created_at','desc')->get();
		$blgs = Blog::paginate(5);
		
		// dd($blognew);
		return view('frontend.blog',compact('blognew','blgs'));
	}
	public function blog_detail($slug){
			$blogssd = Blog::where('status',1)->limit(4)->orderBy('created_at','desc')->get();
			$blogd = Blog::where('slug',$slug)->first();
			return view('frontend.blog-detail',compact('blogd','blogssd'));
	}
	public function about(){
		return view('frontend.about');
	}
}


 ?>