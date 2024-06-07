<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\profile;

class jobsController extends Controller
{
    public function jobs(){
        $profiles = profile::orderBy('id','Desc')->first();
        return view('jobs.jobs',['jobs'=>Job::orderBy('id','Desc')->get()],compact('profiles'));
    }
    public function addjobs(){
        $profiles = profile::orderBy('id','Desc')->first();
    return view('jobs.add-jobs',compact('profiles'));
    }
  
    public function jobStore(Request $request){
    // dd($request->all());

        $request->validate([
        'color'=>'required',
        'company'=>'required',
        'location'=>'required',
        'amount'=>'required',
        'des'=>'required',
        'img'=>'nullable',

     ]);
     $imgname = time().'.'.$request->img->extension();
     $request->img->move(public_path('jobPic'),$imgname);

     $jobs= new Job;//model is used
     $jobs->color=$request->color;
     $jobs->company=$request->company;
     $jobs->location=$request->location;
     $jobs->amount=$request->amount;
     $jobs->position=$request->position;
     $jobs->des=$request->des;
     $jobs->img=$imgname;
    
     $jobs->save();
     return redirect('/jobs/jobs')->withSuccess('job created successfully..!');

    }
    public function jobDelete($id){
    $jobs = Job::where('id',$id)->first();
    $jobs->delete();
    return back()->withSuccess('Record Deleted Successfully...!');
    }
    public function jobEdit($id){
        $profiles = profile::orderBy('id','Desc')->first();
    return view('jobs/edit-job',['jobs'=>Job::where('id',$id)->first()],compact('profiles'));
    }
    public function jobUpdate(Request $request,$id){
        // $request->validate([
        //     'fname'=>'required',
        //     'lname'=>'required',
        //     'email'=>'required',
        //     'branch'=>'required',
        //     'job'=>'required',
        //     'period'=>'required',
        //     'salary'=>'required',
        //     'freq'=>'required',
        //     'sdate'=>'required',
        //     'phone'=>'required',
        //     'address'=>'required',
        //     'state'=>'required',
        //     'city'=>'required',
        //     'zip'=>'required',
        //     'img'=>'nullable',
        //     'gender'=>'required'
        //  ]);
         $jobs=Job::where('id',$id)->first();
         if(isset($request->img)){
         $imgname = time().'.'.$request->img->extension();
         $request->img->move(public_path('jobPic'),$imgname);
         $jobs->img=$imgname;
         }
         $jobs= new Job;//model is used
         $jobs->color=$request->color;
         $jobs->company=$request->company;
         $jobs->location=$request->location;
         $jobs->amount=$request->amount;
         $jobs->des=$request->des;
         $jobs->img=$imgname;
        
         $jobs->save();
         return back()->withSuccess('job Updated successfully..!');
    
    }

}
