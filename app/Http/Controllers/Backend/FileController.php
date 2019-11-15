<?php 
namespace App\Http\Controllers\Backend;

use Illuminate\http\Request;
use App\Http\Controllers\Backend\Main_adminController;
/**
 * 
 */
class FileController extends Main_adminController
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