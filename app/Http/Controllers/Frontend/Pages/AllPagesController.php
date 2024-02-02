<?php

namespace App\Http\Controllers\Frontend\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\BlogModel;
use App\Models\PortfolioModel;
use App\Models\ClientReviewModel;

class AllPagesController extends Controller
{
    
 
     public function welcome(){
       $data['portfolios']=PortfolioModel::where('status','A')->skip(0)->take(3)->orderBy('id','desc')->get();
       $data['reviews']=ClientReviewModel::where('status','A')->orderBy('id','desc')->get();
        return view('frontend.pages.index')->with($data);
     }




     public function about(){
        return view('frontend.pages.about');
     }





     public function blog(){
      $data['blogs']=BlogModel::where('status','A')->orderBy('id','desc')->get();
      // dd($data['blogs']);
        return view('frontend.pages.blog')->with($data);
     }






     public function blog_details($id){
      // dd($id);
       $srch=BlogModel::where('status','A')->where('id',$id)->first();
       if(!$srch){
         return back();
       }
       $data['blog']=$srch;
        return view('frontend.pages.blog_details')->with($data);
     }







     public function contact(){
        return view('frontend.pages.contact');
     }





     public function portfolio(){
       $data['portfolios']=PortfolioModel::where('status','A')->orderBy('id','desc')->get();
        return view('frontend.pages.portfolio')->with($data);
     }






     public function service(){
        return view('frontend.pages.services');
     }








}
