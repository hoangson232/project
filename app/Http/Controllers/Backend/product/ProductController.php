<?php 
namespace App\Http\Controllers\Backend\product;
use App\Models\Product;
use App\Models\Category;
use App\Models\OrderDetail;
use Illuminate\http\Request;
use App\Models\ImgProduct;
use App\Http\Controllers\Backend\Main_adminController;
use App\Models\Wishlist;
use App\Models\Comment;

/**
 * 
 */
class ProductController extends Main_adminController
{
	
	public function index(Request $req){
		$product= Product::paginate(3);
		if ($req->pro_search) {
			$product= Product::where('name','like','%'.$req->pro_search.'%')->paginate(3);
		}
		return view('Backend/product/list',compact('product'));
	}

	public function edit_pro($id){
		$cate=Category::all();
		$pro = Product::find($id);
		$imgPro=ImgProduct::where('product_id',$pro->id)-> get();
		return view('Backend/product/edit',compact('cate','pro','imgPro'));

	}

	public function edit_pro_post($id,Request $request){
		$this->validate($request,[
		'name'=>'required',
		'slug'=>'required',
		'price'=>'required|numeric|not_in:0|min:0',
		'sale_price'=>'numeric|min:0|lt:price',
		'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		// 'images'=>'required',
		'images.*'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		],
		[
		'name.required'=>'Tên sản phẩm không được để rỗng',
		'price.required'=>'Giá không được để rỗng',
		'price.numeric'=>'Chỉ nhập kiểu số',
		'price.min'=>'Giá phải >0',
		'sale_price.min'=>'Giá phải > hoặc = 0',
		'price.not_in'=>'Giá phải >0',
		'sale_price.lt'=>'Giá khuyến mãi phải < giá gốc',
		'slug.required'=>'Slug không được để rỗng',
		// 'image.required'=>'Phần ảnh không được rỗng',
		'image.image' =>'Tệp tải lên phải là ảnh',
    	'image.mimes' =>'Định dạng ảnh là jpeg,jpg,png,gif hoặc svg',
    	'image.max' =>'Kích thước ảnh tối đa 2048kb',
		// 'images.required'=>'Phần nhóm ảnh không được rỗng',
		'images.*.mimes'=>'Định dạng ảnh là jpeg,jpg,png,gif hoặc svg',
		'images.*.image'=>'Các tệp tải lên phải là ảnh',
		'images.*.max' =>'Kích thước ảnh tối đa 2048kb',
		]);
		if($request->hasFile('image')){
			$name = $request->image->getClientOriginalname();	
			$request->image->move('uploads/',$name);
		}
		else {
			$name=Product::find($id)->image;
		}


		if(Product::where('id',$id)->update([
			'name'=>$request->name,
			'price'=>$request->price,
			'category_id'=>$request->category_id,
			'sale_price'=>$request->sale_price,
			'status'=>$request->status,
			'description'=>$request->description,
			'slug'=>$request->slug,
			'image'=>$name,
		])){


		if($request->hasFile('images')){
			ImgProduct::where('product_id',$id)->delete();
			foreach ($request->images as $value) {
				$names = $value->getClientOriginalname();
				$value->move('uploads/',$names);
				ImgProduct::create([
					'product_id'=>$id,
					'link'=>$names
				]);		
			}
		}

		return redirect()-> route('pro')->with('mess','Cập nhật thành công');
		}else{
		return redirect()-> route('pro')->with('error','Cập nhật không thành công');
		}

	}
	public function delete($id){
		$order=OrderDetail::where('product_id',$id)->count();
		$comment=Comment::where('product_id',$id)->count();
		
		if ($order == 0 && $comment==0) {
		ImgProduct::where('product_id',$id)->delete();
		Wishlist::where('product_id',$id)->delete();
		Product::find($id)->delete();	
		return redirect()->back()->with('mess','Xóa thành công');//quay lại trang trước đó
		}else{
		return redirect()->back()->with('error','Xóa không thành công');
		}

		
	}
	public function add(){
		$cate=Category::all();
		return view('Backend/product/add',compact('cate'));
	}
	public function post_add(Request $request){
		$this->validate($request,[
		'name'=>'required|unique:product,name',
		'slug'=>'required|unique:product,slug',
		'price'=>'required|numeric|not_in:0|min:0',
		'sale_price'=>'required|numeric|min:0|lt:price',
		'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		'images'=>'required',
		'images.*'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		],
		[
		'name.required'=>'Tên sản phẩm không được để rỗng',
		'price.required'=>'Giá không được để rỗng',
		'price.numeric'=>'Chỉ nhập kiểu số',
		'price.min'=>'Giá phải >0',
		'sale_price.min'=>'Giá phải > hoặc = 0',
		'price.not_in'=>'Giá phải >0',
		'sale_price.required'=>'Giá khuyến mãi không được để rỗng',
		'sale_price.lt'=>'Giá khuyến mãi phải < giá gốc',
		'name.unique'=>'Tên sản phẩm đã có trong CSDL',
		'slug.required'=>'Slug không được để rỗng',
		'slug.unique'=>'Tên slug đã có trong CSDL',
		'image.required'=>'Phần ảnh không được rỗng',
		'image.image' =>'Tệp tải lên phải là ảnh',
    	'image.mimes' =>'Định dạng ảnh là jpeg,jpg,png,gif hoặc svg',
    	'image.max' =>'Kích thước ảnh tối đa 2048kb',
		'images.required'=>'Phần nhóm ảnh không được rỗng',
		'images.*.mimes'=>'Định dạng ảnh là jpeg,jpg,png,gif hoặc svg',
		'images.*.image'=>'Các tệp tải lên phải là ảnh',
		'images.*.max' =>'Kích thước ảnh tối đa 2048kb',
		]);
		if($request->hasFile('image')){
			
			$name = $request->image->getClientOriginalname();	
			$request->image->move('uploads/',$name);
			$pro=Product::create([
			'name'=>$request->name,
			'price'=>$request->price,
			'category_id'=>$request->category_id,
			'sale_price'=>$request->sale_price,
			'status'=>$request->status,
			'description'=>$request->description,
			'slug'=>$request->slug,
			'image'=>$name,
			
			]);

			if($request->hasFile('images')){
				foreach ($request->images as $value) {
				$names = $value->getClientOriginalname();
				$value->move('uploads/',$names);
				ImgProduct::create([
					'product_id'=>$pro->id,
					'link'=>$names
				]);		
				}
			}
			return redirect()-> route('pro')->with('mess','Thêm mới thành công');
		}else{
			return redirect()-> route('pro')->with('error','Thêm mới không thành công');
		}	
		
	}
}

 ?>