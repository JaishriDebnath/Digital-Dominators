<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;
use App\Models\recruit;

class recruitmentController extends Controller
{
    public function addrecruit(){
        $profiles = profile::orderBy('id','Desc')->first();
        return view('recruitments.add-recruit',['recruits'=>Recruit::orderBy('id','Desc')->get()->count()],compact('profiles'));
    }
   
    public function recruit(){
        $profiles = profile::orderBy('id','Desc')->first();
        return view('recruitments.recruit',['recruits'=>Recruit::orderBy('id','Desc')->get()],compact('profiles'));
    }
    
    public function storeRecruit(Request $request){
//    dd($request->all());

    //     $request->validate([
    //     'id'=>'required',
    //     'fname'=>'required',
    //     'lname'=>'required',
    //     'sdate'=>'required',
    //     'org'=>'required',
    //     'exp'=>'required',
    //     'email'=>'required',
    //     'phone'=>'required',
    //     'resume'=>'required',

    //  ]);
     $resume = time().'.'.$request->resume->extension();
     $request->resume->move(public_path('jobPic'),$resume);

     $recruit = new Recruit;//model is used
     $recruit->id=$request->id;
     $recruit->status=$request->status;
     $recruit->fname=$request->fname;
     $recruit->lname=$request->lname;
     $recruit->sdate=$request->sdate;
     $recruit->org=$request->org;
     $recruit->exp=$request->exp;
     $recruit->email=$request->email;
     $recruit->phone=$request->phone;
     $recruit->resume=$resume;
    
     $recruit->save();
     return redirect('/jobs')->withSuccess('Your Application Has Been Submitted successfully..!');

    }
    public function deleteRecruit($id){
    $recruit = Recruit::where('id',$id)->first();
    $recruit->delete();
    return back()->withSuccess('Record Deleted Successfully...!');
    }
    
    
}
