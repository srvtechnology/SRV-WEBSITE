<?php

namespace App\Http\Controllers\Admin\Srv\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\BlogModel;
use Image;


class BlogController extends Controller
{
     






     public function blog_list(){
        $data['blogs']=BlogModel::where('status','!=','D')->orderBy('id','desc')->paginate(10);
        return view('admin.pages.blog.blog_list')->with($data);
    }



    public function blog_add_page(){
        return view('admin.pages.blog.blog_add');
    }
    


    public function blog_ins(Request $request){
        // dd($request->all());
            $request->validate([
            'blog_name' => 'required',
            'user_name' => 'required',
            'title'=>'required',
            'short_desc' => 'required',
            'long_desc' => 'required',
            'profile_picture' => 'required',
            'source'=>'required',
             'link'=>'required',
        ]);

        
        if ($request->profile_picture) {
            $destinationPath = "storage/app/public/blog/";
            $img_front = str_replace('data:image/png;base64,', '', @$request->profile_picture);
            $img_front = str_replace(' ', '+', $img_front);
            $image_base64 = base64_decode($img_front);
            $img1 = time() . '-' . rand(1000, 9999) . '.png';
            $file = $destinationPath . $img1;
            file_put_contents($file, $image_base64);
            chmod($file, 0755);
           // $bracelet->design_picture = $img;
        }

      


        $ins_blog=new BlogModel;
        $ins_blog->blog_name=$request->blog_name;
        $ins_blog->user_name=$request->user_name;
        $ins_blog->title=$request->title;
        $ins_blog->image=$img1;
        $ins_blog->short_desc=$request->short_desc;
        $ins_blog->long_desc=$request->long_desc;
        $ins_blog->source=$request->source;
        $ins_blog->link=$request->link;
        $ins_blog->save();

        return back()->with('success','Blog added successfully');
    }





    public function active($id){
        // dd($id);
        $obj=BlogModel::where('id','=',$id)->update(['status'=>'A']);
        return back()->with("success",'Blog successfully activated');
    }


    public function inactive($id){
        // dd($id);
        $obj=BlogModel::where('id','=',$id)->update(['status'=>'I']);
        return back()->with("success",'Blog successfully deactivated');
    }


      public function delete($id){
        // dd($id);
        $obj=BlogModel::where('id','=',$id)->update(['status'=>'D']);
        return back()->with("success",'Blog successfully deleted');
    }



    public function view_blog($id){
     $data['blog']=BlogModel::where('id',$id)->first();
        return view('admin.pages.blog.blog_view')->with($data);
    }



    public function edit_form($id){
        $data['blog']=BlogModel::where('id',$id)->first();
        return view('admin.pages.blog.blog_edit')->with($data);
    }




    public function update_blog(Request $request){
        //dd($request->all());
            $request->validate([
            'blog_name' => 'required',
            'user_name' => 'required',
            'title'=>'required',
            'short_desc' => 'required',
            'long_desc' => 'required',
            'source' => 'required',
             'link'=>'required',
        ]);


            
            if ($request->profile_picture) {
                $srch=BlogModel::where('id',$request->id)->first();
                //dd($srch);
                @unlink('storage/app/public/blog/' . $srch->image);
                $destinationPath = "storage/app/public/blog/";
                $img_front = str_replace('data:image/png;base64,', '', @$request->profile_picture);
                $img_front = str_replace(' ', '+', $img_front);
                $image_base64 = base64_decode($img_front);
                $img1 = time() . '-' . rand(1000, 9999) . '.png';
                $file = $destinationPath . $img1;
                file_put_contents($file, $image_base64);
                chmod($file, 0755);
                $upd['image'] = $img1;
            }


            $upd['blog_name']=$request->blog_name;
            $upd['user_name']=$request->user_name;
            $upd['title']=$request->title;
            $upd['short_desc']=$request->short_desc;
            $upd['long_desc']=$request->long_desc;
            $upd['source']=$request->source;
            $upd['link']=$request->link;
           
            $u=BlogModel::where('id',$request->id)->update($upd);
             return back()->with("success",'Blog successfully updated');
    }


















}
