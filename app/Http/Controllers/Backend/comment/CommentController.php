<?php 	
namespace App\Http\Controllers\Backend\comment;
use App\Models\Product;
use App\Models\Comment;
use Auth;
use Illuminate\http\Request;
use App\Models\Account;
use App\Http\Controllers\Backend\Main_adminController;


/**
 * 
 */
class CommentController extends Main_adminController
{
	public function index(Request $req){
		$comments=Comment::orderBy('created_at','desc');
		$comment=$comments->paginate(5);
		$comment_count=$comments->count();
		
		return view('Backend.comment.list',compact('comment','comment_count'));
	}
	public function delete($id){
		$delete=Comment::find($id)->delete();
		return redirect()->route('comment')->with('mes','xóa thành công');
	}

}


 ?>