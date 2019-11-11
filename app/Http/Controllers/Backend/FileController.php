<?php 
namespace App\Http\Controllers\Backend;

use Illuminate\http\Request;
use App\Http\Controllers\Controller;
/**
 * 
 */
class FileController extends Controller
{
	public function index(){
		return view('Backend/upfile');
	}
	public function upload(Request $req){
		// dd($req->all());
		if($req->hasFile('file')){
			$name = $req->file->getClientOriginalname();
			$req->file->move('uploads/',$name);
		}
	}
}

 ?>