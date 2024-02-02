<?php

namespace App\Http\Controllers\Admin\Srv\Portfolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\PortfolioModel;
use Image;

class PortfolioController extends Controller
{
    


     public function portfolio_list(){
        $data['portfolios']=PortfolioModel::where('status','!=','D')->orderBy('id','desc')->paginate(10);
        return view('admin.pages.portfolio.portfolio_list')->with($data);
    }



    public function portfolio_add_page(){
        return view('admin.pages.portfolio.portfolio_add');
    }
    


    public function portfolio_ins(Request $request){
        // dd($request->all());
            $request->validate([
            'title' => 'required',
            'coding_language' => 'required',
            'profile_picture' => 'required',
        ]);

        
        if ($request->profile_picture) {
            $destinationPath = "storage/app/public/portfolio/";
            $img_front = str_replace('data:image/png;base64,', '', @$request->profile_picture);
            $img_front = str_replace(' ', '+', $img_front);
            $image_base64 = base64_decode($img_front);
            $img1 = time() . '-' . rand(1000, 9999) . '.png';
            $file = $destinationPath . $img1;
            file_put_contents($file, $image_base64);
            chmod($file, 0755);
           // $bracelet->design_picture = $img;
        }

      


        $ins_portfolio=new PortfolioModel;
        $ins_portfolio->title=$request->title;
        $ins_portfolio->coding_language=$request->coding_language;
        $ins_portfolio->image=$img1;
        $ins_portfolio->save();

        return back()->with('success','Portfolio added successfully');
    }





    public function active($id){
        // dd($id);
        $obj=PortfolioModel::where('id','=',$id)->update(['status'=>'A']);
        return back()->with("success",'Portfolio successfully activated');
    }


    public function inactive($id){
        // dd($id);
        $obj=PortfolioModel::where('id','=',$id)->update(['status'=>'I']);
        return back()->with("success",'Portfolio successfully deactivated');
    }


      public function delete($id){
        // dd($id);
        $obj=PortfolioModel::where('id','=',$id)->update(['status'=>'D']);
        return back()->with("success",'Portfolio successfully deleted');
    }



    public function view_portfolio($id){
     $data['portfolio']=PortfolioModel::where('id',$id)->first();
        return view('admin.pages.portfolio.portfolio_view')->with($data);
    }



    public function edit_form($id){
        $data['portfolio']=PortfolioModel::where('id',$id)->first();
        return view('admin.pages.portfolio.portfolio_edit')->with($data);
    }




    public function update_portfolio(Request $request){
        //dd($request->all());
               $request->validate([
            'title' => 'required',
            'coding_language' => 'required',
            // 'profile_picture' => 'required',
        ]);


            
            if ($request->profile_picture) {
                $srch=PortfolioModel::where('id',$request->id)->first();
                //dd($srch);
                @unlink('storage/app/public/portfolio/' . $srch->image);
                $destinationPath = "storage/app/public/portfolio/";
                $img_front = str_replace('data:image/png;base64,', '', @$request->profile_picture);
                $img_front = str_replace(' ', '+', $img_front);
                $image_base64 = base64_decode($img_front);
                $img1 = time() . '-' . rand(1000, 9999) . '.png';
                $file = $destinationPath . $img1;
                file_put_contents($file, $image_base64);
                chmod($file, 0755);
                $upd['image'] = $img1;
            }


            $upd['title']=$request->title;
            $upd['coding_language']=$request->coding_language;
            
           
            $u=PortfolioModel::where('id',$request->id)->update($upd);
             return back()->with("success",'Portfolio successfully updated');
    }




}
