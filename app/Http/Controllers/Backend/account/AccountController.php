<?php 
namespace App\Http\Controllers\Backend\account;
use App\Models\Account;
use App\Models\Order;
use Illuminate\http\Request;
use App\Http\Controllers\Backend\Main_adminController;

/**
 * 
 */
class AccountController extends Main_adminController
{

	public function index(Request $req){
		$account= Account::where('status',1)->paginate(3);
		$acc_count='';
		if ($req->account_search) {
			$accounts= Account::where('status',1)
					->where('name','like','%'.$req->account_search.'%')
					->orWhere('phone',$req->account_search)
					->orWhere('email',$req->account_search);
			$account= $accounts->paginate(3);
			dd($account);die();
			$acc_count=$accounts->count();
		}
		return view('Backend/account/index',compact('account','acc_count','req'));
	}

	public function cus_index(Request $req){
		$account= Account::where('status',0)->paginate(3);
		$acc_count='';
		if ($req->account_search) {
			$accounts= Account::where('status',0)
					->where('name','like','%'.$req->account_search.'%')
					->orWhere('phone',$req->account_search)
					->orWhere('email',$req->account_search);
			$account= $accounts->paginate(3);
			$acc_count=$accounts->count();
		}
		return view('Backend/account/index',compact('account','acc_count','req'));
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
		
		$request->merge(['password'=>$password,'status'=>1]);
		if(Account::create($request->all())){ 
		return redirect()-> route('account')->with('mess','Thêm mới tài khoản thành công!');
		}else{
		return redirect()-> route('account')->with('error','Thêm mới tài khoản không thành công!');
		}
	}

	public function cus_add(){
		return view('Backend/account/add');
	}
	public function cus_post_add(Request $request){
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
		
		$request->merge(['password'=>$password,'status'=>0]);
		if(Account::create($request->all())){ 
		return redirect()-> route('cus_account')->with('mess','Thêm mới tài khoản thành công!');
		}else{
		return redirect()-> route('cus_account')->with('error','Thêm mới tài khoản không thành công!');
		}
	}

	public function delete($id){
		$count=Order::where('account_id',$id)->count();
		if($count==0){
			$comment_delete=Comment::where('account_id',$id)->delete();
			$delete=Account::find($id)->delete();
			return redirect()->back()->with('mess','Xóa tài khoản thành công!');
		}else{
			return redirect()->back()->with('error','Xóa tài khoản không thành công');
		}
		if($delete=Account::find($id)->delete()){
		return redirect()->back()->with('mess','Xóa tài khoản thành công!');
		}else{
		return redirect()->back()->with('error','Xóa tài khoản không thành công');
		}
	}
}

 ?>