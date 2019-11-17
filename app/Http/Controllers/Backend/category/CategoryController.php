<?php 
namespace App\Http\Controllers\Backend\category;
use App\Models\Category;
use App\Models\Product;
use Illuminate\http\Request;
use App\Http\Controllers\Backend\Main_adminController;
/**
 * 
 */
class CategoryController extends Main_adminController
{
	public function index(){
		return view('welcome');
	}
	public function category(Request $req){
		$cates= Category::paginate(3);
		if ($req->search) {
			$cates= Category::where('name','like','%'.$req->search.'%')->paginate(3);
		}
		return view('Backend/category/category',compact('cates'));
	}

	public function edit_cate($id){
		$cate = Category::find($id);
		return view('Backend/category/edit',[
			'model'=>$cate
		]);

	}
		public function edit_cate_post($id,Request $request){
		$request->offsetUnset('_token');
		// $this->validate($request,[
		// 'name'=>'required|unique:category,name',
		// 'slug'=>'required|unique:category,slug',
		// ],
		// [
		// 'name.required'=>'Danh mục không được để rỗng',
		// 'name.unique'=>'Tên danh mục đã có trong CSDL',
		// 'slug.required'=>'Slug không được để rỗng',
		// 'slug.unique'=>'Tên slug đã có trong CSDL',
		// ]);
		Category::where('id',$id)->update($request->all());
		return redirect()-> route('cat')->with('mes','Cập nhật thành công');

	}
	public function delete($id){
		$model=Category::find($id);
		$pros=Product::where('category_id',$id)->count();
		if($pros == 0){
		Category::find($id)->delete();
		return redirect()->back()->with('mes','Xóa thành công');//quay lại trang trước đó
		}else{
		return redirect()->back()->with('error','Xóa không thành công');//quay lại trang trước đó
		}
	}
	public function add(){
		return view('Backend/category/add');
	}
	public function post_add(Request $request){
		$this->validate($request,[
		'name'=>'required|unique:category,name',
		'slug'=>'required|unique:category,slug',
		],
		[
		'name.required'=>'Danh mục không được để rỗng',
		'name.unique'=>'Tên danh mục đã có trong CSDL',
		'slug.required'=>'Slug không được để rỗng',
		'slug.unique'=>'Tên slug đã có trong CSDL',
		]);
		Category::create($request->all()); 
		return redirect()-> route('cat')->with('mes','Thêm mới thành công');
	}
}

 ?>