<?php 
			namespace App\Http\Controllers\Backend\blog;
			use App\Http\Controllers\Backend\Main_adminController;
			use Illuminate\Http\Request;
			use App\Models\Blog;
			use Illuminate\Support\Str;

			/**
			 * 
			 */
			class BlogController extends Main_adminController
			{
				 public function list_blog(){
				 	$blog = Blog::paginate(6);
				 	return view('backend.blog.list',compact('blog'));
				 }
				public function add(){
				return view('backend.blog.add');
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
							$req->image->move('uploads/blog/',$file);
						}
						$str = Str::limit($req->content,200);
						
						$blg =Blog::create([
							'name' => $req->name,
							'slug' =>$req->slug,
							'content' => $req->content,
							'short_content'=>$str,
							'status' => $req->status,
							'image' => $file,
							

						]);
						return redirect()->route('list-blog')->with('bl','Thêm blog thành công');
				}
				public function edit($id){
					$blogs = Blog::find($id);
					return view('backend.blog.edit',compact('blogs'));
				}
				public function edit_post(Request $req,$id){
					$this->validate($req,[
						'name'=>'required',
						'content'=>'required',
						'slug'=>'required',
						'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
						],
						[
						'name.required'=>'Tên sản phẩm không được để rỗng',
						'content.required'=>'Slug không được để rỗng',
						// 'image.required'=>'Phần ảnh không được rỗng',
						'image.image' =>'Tệp tải lên phải là ảnh',
						'slug.required'=>'Slug không được để rỗng',
						'image.mimes' =>'Định dạng ảnh là jpeg,jpg,png,gif hoặc svg',
						'image.max' =>'Kích thước ảnh tối đa 2048kb',
						]);
					if($req->hasFile('image')){
						$file = $req ->image->getClientOriginalName();
							$req->image->move('uploads/blog/',$file);
					}
					else{
						$file = Blog::find($id)->image;
					}
					$blgs = Blog::find($id)->update([
						'name' => $req->name,
						'slug' =>$req->slug,
						'content' =>$req->content,
						'status' => $req->status,
					]);

					return redirect()->route('list-blog')->with('bl','cập nhập thành công');
				}
				public function delete($id){
					Blog::find($id)->delete();
					return redirect()->route('list-blog')->with('bl','xóa thành công');
				}
			}
			
 ?>