<?php 
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\http\Request;
use Auth;
use Illuminate\Support\Str;
use Mail;
use App\Models\Account;
/**
 * 
 */
class Home_adminController extends Main_adminController
{
	public function index(){
	return view('Backend/index');
	}
}

 ?>