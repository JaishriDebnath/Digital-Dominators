<?php

namespace App\Http\Controllers;

use App\Models\Companyinfo;
use App\Models\Contacts;
use App\Models\Employeedata;
use Illuminate\Http\Request;
use App\Models\manage;
use App\Models\profile;
use App\Models\User;
use Faker\Provider\ar_EG\Company;

class SettingController extends Controller
{
    public function profile(){
        $profiles = profile::orderBy('id','Desc')->first();
        return view('setnew.profile',compact('profiles'));
    }
    public function MainFooter(){
        $manage = manage::orderBy('id','desc')->fist();
        $contacts = Contacts::orderBy('id','desc')->first();
        $gallaries = manage::orderBy('id','desc')->get();
        return view('layouts.MainFooter',compact('manage','contacts','gallaries'));
    }
    public function infostore(Request $request){
        // dd($request->all());
        
        $imgname = time().'.'.$request->pdf->extension();
        $request->pdf->move(public_path('Policy'),$imgname);
                        
        $companyinfos= new Companyinfo;
        $companyinfos->pdf=$imgname;
        $companyinfos->name=$request->name;
        $companyinfos->status=$request->status;
        $companyinfos->save();
        return  redirect('/setnew/company')->with('success','Information Added successfully...!');
   
       }
       public function infodelete($id){
       $companyinfos =Companyinfo::where('id','=',$id)->first();
        $companyinfos->delete();
        return redirect()->back()->withSuccess('Policy Removed Successfully...!');
       }
    public function profilePic(Request $request){
        $request->validate([
            'image'=>'nullable',  
         ]);
         $imgname = time().'.'.$request->image->extension();
         $request->image->move(public_path('profile'),$imgname);
    
         $user = new profile ;//model is used
         
         $user->image=$imgname;
         $user->save();
         return back()->withSuccess('Profile Pic Updated Successfully..!');
      
    }
    public function profileset(Request $request){
       $profiles = profile::orderBy('id','desc')->first();
        return view('setnew.profileset',compact('profiles'));
       
    }
    public function setstore(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'dob'=>'required',
         ]);
      
         $user = new profile ;//model is used
         $user->name=$request->name;
         $user->email=$request->email;
         $user->dob=$request->dob;
        
         $user->save();
         return back()->withSuccess('Your Details Recorded successfully..!');
      
    }
    public function setting(){
        $profiles = profile::orderBy('id','desc')->first();
        $employees = Employeedata::orderBy('id','desc')->get();
        return view('setnew.setting',compact('profiles','employees'));
    }
    public function settingstore(Request $request){
        // dd($request->all());
        $name = $request->name;
        $emp_id = $request->emp_id;
        $role = $request->role;
         
        $employee = Employeedata::where('emp_id','=',$emp_id)->first();
        $user = User::where('emp_id','=',$employee->id)->update([
            'name'=>$name,
            'emp_id'=>$employee->id,
            'role'=>$role,
        ]);                   
        $profiles = profile::orderBy('id','desc')->first();
        return redirect()->back()->withSuccess('Permission Created...!!!');
    }
    public function settingedit(){
        $profiles = profile::orderBy('id','desc')->first();
        return view('setnew.settingedit',compact('profiles'));
    }
    public function settingdelete(){
        return view('setnew.settingdelete');
    }
     public function company(){
        $contacts = Contacts::first();
        $companyinfos = Companyinfo::get();
        $profiles = profile::orderBy('id','desc')->first();
        return view('setnew.company',compact('companyinfos','profiles','contacts'));
    }
    public function manage(){
        $profiles = profile::orderBy('id','desc')->first();
        return view('setnew.manage',compact('profiles'));
    }
    public function gallary(){
        
        $gallaries = manage::orderBy('id','desc')->get();
        $profiles = profile::orderBy('id','desc')->first();
        return view('setnew.gallary',compact('profiles','gallaries'));
    }
    public function contact(){
        $contacts = Contacts::orderBy('id','desc')->get();
        $profiles = profile::orderBy('id','desc')->first();
        return view('setnew.contact',compact('profiles','contacts'));
    }
    public function deletegallary(Request $request,$id){
        $id->delete();
        return redirect()->back()->withSuccess('Pic Removed Successfully...');
    }
    public function contactStore(Request $request){
     
        $contacts = Contacts::create([
        'address'=>$request->address,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'fax'=>$request->fax,
        'url'=>$request->url
        ]);
    
        $profiles = profile::orderBy('id','desc')->first();
        return view('setnew.contact',compact('profiles','contacts'));
    }
    
    public function managestore(Request$request){
        
     $request->validate([
        
        'gallary'=>'nullable',
      
     ]);
  
     $imgname = time().'.'.$request->gallary->extension();
     $request->gallary->move(public_path('Gallary'),$imgname);

     $manage = new manage ;//model is used
     $manage->gallary=$imgname;
 
    
     $manage->save();
     return back()->withSuccess('Gallary Updated successfully..!');
  
    }
    public function manageeedit($id){
        $profiles = profile::orderBy('id','desc')->first();
        return view('setnew/manageeedit',['manages'=>manage::where('id',$id)->first()],compact('profiles'));
    }
    public function manageupdate(Request$request,$id){
        $request->validate([
        'address'=>'required',
        'phone'=>'required',
        'email'=>'required',
        'fax'=>'nullable',
        'url'=>'nullable',
      
     ]);
  $manage = manage::where('id',$id)->first();
     $manage = new manage ;//model is used
     $manage->address=$request->address;
     $manage->phone=$request->phone;
     $manage->email=$request->email;
     $manage->fax=$request->fax;
     $manage->url=$request->url;
    
     $manage->save();
     return back()->withSuccess('Address Details Updated successfully..!');
 }
    public function manageedelete($id){
        $manage = manage::where('id',$id)->first();
        $manage->delete();
        return redirect()->back()->withSuccess('Address Details Deleted successfully..!');
    }
}
