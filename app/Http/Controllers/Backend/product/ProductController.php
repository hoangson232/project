<?php 
namespace App\Http\Controllers\Backend\product;
use App\Models\Product;
use App\Models\Category;
use Illuminate\http\Request;
use App\Http\Controllers\Controller;
use App\Models\ImgProduct;
/**
 * 
 */
class ProductController extends Controller
{
	
	public function index(Request $req){
		$product= Product::paginate(3);
		if ($req->search) {
			$product= Product::where('name','like','%'.$req->search.'%')->paginate(3);
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
		'sale_price'=>'numeric|min:0|lt:price'
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
		
		]);
		if($request->hasFile('image')){
			$name = $request->image->getClientOriginalname();	
			$request->image->move('uploads/',$name);
		}
		else {
			$name=Product::find($id)->image;
		}


		Product::where('id',$id)->update([
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

		return redirect()-> route('pro')->with('mes','Cập nhật thành công');

	}
	public function delete($id){
		ImgProduct::where('product_id',$id)->delete();
		Product::find($id)->delete();

		return redirect()->back()->with('mes','Xóa thành công');//quay lại trang trước đó
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
		'sale_price'=>'required|numeric|min:0|lt:price'
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
		]);
		if($request->hasFile('image')){
			$name = $request->image->getClientOriginalname();	
			$request->image->move('uploads/',$name);
		}
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

		foreach ($request->images as $value) {
			$names = $value->getClientOriginalname();
			$value->move('uploads/',$names);
			ImgProduct::create([
				'product_id'=>$pro->id,
				'link'=>$names
			]);		
		}
		return redirect()-> route('pro')->with('mes','Thêm mới thành công');
	}
}

 ?>