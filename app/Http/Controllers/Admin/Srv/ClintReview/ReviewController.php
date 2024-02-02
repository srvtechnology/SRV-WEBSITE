<?php

namespace App\Http\Controllers\Admin\Srv\ClintReview;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\ClientReviewModel;
use Image;

class ReviewController extends Controller
{
    
     public function review_list(){
        $data['reviews']=ClientReviewModel::where('status','!=','D')->orderBy('id','desc')->paginate(10);
        return view('admin.pages.review.review_list')->with($data);
    }



    public function review_add_page(){
        return view('admin.pages.review.review_add');
    }
    


    public function review_ins(Request $request){
        // dd($request->all());
            $request->validate([
            'star' => 'required',
            'client_name' => 'required',
            'review' => 'required',
        ]);

        $ins_Review=new ClientReviewModel;
        $ins_Review->star=$request->star;
        $ins_Review->client_name=$request->client_name;
        $ins_Review->review=$request->review;
        $ins_Review->save();

        return back()->with('success','Review added successfully');
    }





    public function active($id){
        // dd($id);
        $obj=ClientReviewModel::where('id','=',$id)->update(['status'=>'A']);
        return back()->with("success",'Review successfully activated');
    }


    public function inactive($id){
        // dd($id);
        $obj=ClientReviewModel::where('id','=',$id)->update(['status'=>'I']);
        return back()->with("success",'Review successfully deactivated');
    }


      public function delete($id){
        // dd($id);
        $obj=ClientReviewModel::where('id','=',$id)->update(['status'=>'D']);
        return back()->with("success",'Review successfully deleted');
    }



    public function view_Review($id){
     $data['review']=ClientReviewModel::where('id',$id)->first();
        return view('admin.pages.review.review_view')->with($data);
    }



    public function edit_form($id){
        $data['review']=ClientReviewModel::where('id',$id)->first();
        return view('admin.pages.review.review_edit')->with($data);
    }




    public function update_Review(Request $request){
        //dd($request->all());
              $request->validate([
            'star' => 'required',
            'client_name' => 'required',
            'review' => 'required',
        ]);



            $upd['star']=$request->star;
            $upd['client_name']=$request->client_name;
            $upd['review']=$request->review;
            
           
            $u=ClientReviewModel::where('id',$request->id)->update($upd);
             return back()->with("success",'Review successfully updated');
    }




}
