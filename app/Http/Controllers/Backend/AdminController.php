<?php 
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\http\Request;
use Auth;
use Illuminate\Support\Str;
/**
 * 
 */
class AdminController extends Controller
{
	public function index(){
	return view('Backend/index');
	}
	
	public function login(){
	return view ('Backend/login');
	}

	public function post_login(Request $request){
	$this->validate($request,[
		'email'=>'required|email',
		'password'=>'required'
	],[
		'email.email'=>'Email nhập không đúng định dạng',
		'email.required'=>'Email không được để rỗng',
		'password.required'=>'Password không được để rỗng'
	]);
	
	if(Auth::attempt($request->only('email','password'),($request->has('remember')))){
		return redirect()->route('admin')->with('mess','Chào mừng quay trở lại');
		}
	else { 
		return redirect()->back()->with('error','Tài khoản không hợp lệ');
		}
	}

	public function logout(){
	 	Auth::logout();
	 	return redirect()->route('login'); 
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
	 		return redirect()->route('login')->with('mess','Đổi mật khẩu thành công, đăng nhập lại để tiếp tục');
	 	}else{
	 		return back()->with('error','Đổi mật khẩu không thành công');
	 	}
	 }

	 public function forgot(Request $req){
	 	if($req->email){
	 		$this->validate($req,[
	 			'email'=>'exists:account,email'
	 		],[
	 			'email.exists'=>'Email không tồn tại trong dữ liệu'
	 		]);
	 		$token = Str::random(50);
	 		
	 	}
	 	return view('Backend.account.forgot_pass');
	 }
}

 ?>