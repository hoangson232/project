<?php 
			namespace App\Http\Controllers\Backend\banner;
			use App\Http\Controllers\Backend\Main_adminController;
			use Illuminate\Http\Request;
			use App\Models\Banner;
			/**
			 * 
			 */
			class BannerController extends Main_adminController
			{
				
				public function index(){
					$banner = Banner::paginate(6);
					return view('backend.banner.list',compact('banner'));
				}
				public function add(){
					return view('backend.banner.add');
				}
				public function post_add(Request $req){
					$this->validate($req,[
						'name'=>'required',
						'content'=>'required',
						'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
						],
						[
						'name.required'=>'Tên sản phẩm không được để rỗng',
						'content.required'=>'Slug không được để rỗng',
						'image.required'=>'Phần ảnh không được rỗng',
						'image.image' =>'Tệp tải lên phải là ảnh',
						'image.mimes' =>'Định dạng ảnh là jpeg,jpg,png,gif hoặc svg',
						'image.max' =>'Kích thước ảnh tối đa 2048kb',
						]);
						if($req ->hasFile('image')){
							$file = $req ->image->getClientOriginalName();
							$req->image->move('uploads/banner/',$file);
						}
						$Bn =Banner::create([
							'name' => $req->name,
							'content' => $req->content,
							'status' => $req->status,
							'image' => $file,
							

						]);
						return redirect()->route('list-banner')->with('bn','Thêm banner thành công');
				}
				public function edit($id){
					
					$banners = Banner::find($id);
					return view('backend.banner.edit',compact('banners'));
				}
				public function edit_post(Request $req,$id){
					$this->validate($req,[
						'name'=>'required',
						'content'=>'required',
						'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
						],
						[
						'name.required'=>'Tên sản phẩm không được để rỗng',
						'content.required'=>'Slug không được để rỗng',
						// 'image.required'=>'Phần ảnh không được rỗng',
						'image.image' =>'Tệp tải lên phải là ảnh',
						'image.mimes' =>'Định dạng ảnh là jpeg,jpg,png,gif hoặc svg',
						'image.max' =>'Kích thước ảnh tối đa 2048kb',
						]);
						if($req ->hasFile('image')){
							$file = $req ->image->getClientOriginalName();
							$req->image->move('uploads/banner/',$file);
						}
						else{
							$file = Banner::find($id)->image;
						}
						$bnn = Banner::find($id)->update([
							'name' => $req->name,
							'image' =>$file,
							'content' =>$req->content,
							'status' =>$req->status,
						]);

						return redirect()->route('list-banner')->with('bn','sửa thành công');
				}
				public function delete($id){
						Banner::find($id)->delete();
						return redirect()->back()->with('bn','xóa thành công');
				}
	}

?>