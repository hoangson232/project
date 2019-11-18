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