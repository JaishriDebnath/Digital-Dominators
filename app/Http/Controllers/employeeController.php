<?php

namespace App\Http\Controllers;

use App\Models\Employeedata;
use App\Models\profile;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    public function employee(){
        $employeedatas = Employeedata::paginate(5);
        $profiles = profile::orderBy('id','Desc')->first();
        return view('employees.employee',compact('employeedatas','profiles'));
    }

    public function addEmployee(){
        $profiles = profile::orderBy('id','Desc')->first();
    return view('/employees/add-employee',compact('profiles'));
    }
    public function PersonalDetailEmployee(){
        return view('employees.employee-personal-detail');
        }
  
    public function employeeStore(Request $request){
    // dd($request->all());

        $request->validate([
        'fname'=>'required',
        'lname'=>'required',
        'emp_id'=>'required',
        'email'=>'required',
        'branch'=>'required',
        'job'=>'required',
        'period'=>'required',
        'salary'=>'required',
        'freq'=>'required',
        'sdate'=>'required',
        'phone'=>'required',
        'address'=>'required',
        'state'=>'required',
        'city'=>'required',
        'zip'=>'required',
        'img'=>'nullable',
        'gender'=>'required'
     ]);
     $imgname = time().'.'.$request->img->extension();
     $request->img->move(public_path('employeePic'),$imgname);

     $employees = new Employeedata;//model is used
     $employees->emp_id=$request->emp_id;
     $employees->fname=$request->fname;
     $employees->lname=$request->lname;
     $employees->email=$request->email;
     $employees->branch=$request->branch;
     $employees->job=$request->job;
     $employees->period=$request->period;
     $employees->salary=$request->salary;
     $employees->freq=$request->freq;
     $employees->sdate=$request->sdate;
     $employees->phone=$request->phone;
     $employees->address=$request->address;
     $employees->state=$request->state;
     $employees->city=$request->city;
     $employees->zip=$request->zip;
     $employees->img=$imgname;
     $employees->gender=$request->gender;
    
     $employees->save();
     return back()->withSuccess('Employee created successfully..!');

    }
 
    public function EmployeeEdit($id){
        $profiles = profile::orderBy('id','desc')->first();
    return view('employees/edit-employee',['employeedatas'=>Employeedata::where('id',$id)->first()],compact('profiles'));
    }
    public function EmployeeUpdate(Request $request,$id){
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
         $employees= Employeedata::where('id',$id)->first();
         if(isset($request->img)){
         $imgname = time().'.'.$request->img->extension();
         $request->img->move(public_path('employeePic'),$imgname);
         $employees->img=$imgname;
         }
         $employees->emp_id=$request->emp_id;
         $employees->fname=$request->fname;
         $employees->lname=$request->lname;
         $employees->email=$request->email;
         $employees->branch=$request->branch;
         $employees->job=$request->job;
         $employees->period=$request->period;
         $employees->salary=$request->salary;
         $employees->freq=$request->freq;
         $employees->sdate=$request->sdate;
         $employees->phone=$request->phone;
         $employees->address=$request->address;
         $employees->state=$request->state;
         $employees->city=$request->city;
         $employees->zip=$request->zip;
         $employees->gender=$request->gender;
        
         $employees->save();
         return  redirect('/employees/employee')->with('success','Employees information updated successfully...!');
    
    }
}
