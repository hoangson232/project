<?php 
namespace App\Http\Controllers\Backend;
use App\Models\Account;
use Illuminate\http\Request;
use App\Http\Controllers\Backend\Main_adminController;

/**
 * 
 */
class AccountController extends Main_adminController
{

	public function index(){
		$account= Account::paginate(3);
		return view('Backend/account/index',compact('account'));
	}
	
	public function add(){
		return view('Backend/account/add');
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
		
		$request->merge(['password'=>$password]);
		Account::create($request->all()); 
		return redirect()-> route('account');
	}
}

 ?>