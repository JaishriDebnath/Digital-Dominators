<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\Employeedata;
use App\Notifications\EmployeeNotifications;
use App\Notifications\EmpwfhNotifications;
use App\Models\profile;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\wfhleave;
use App\Models\empleave;
use App\Models\Job;
use App\Models\manage;
use App\Models\Recruit;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $contacts = Contacts::orderBy('id','desc')->first();
        $gallaries = manage::orderBy('id','desc')->get();
        $manage = manage::orderBy('id','desc')->first();
        return view('index',compact('manage','gallaries','contacts'));
    }
    public function jobs(){
        $contacts = Contacts::orderBy('id','desc')->first();
        $gallaries = manage::orderBy('id','desc')->get();
        $manage = manage::orderBy('id','desc')->first();
        return view('jobs',['jobs'=>Job::orderBy('id','Desc')->get()],compact('gallaries','manage','contacts'));
   
    }
    public function dashboard(){
        $profiles = profile::orderBy('id','desc')->first();
        return view('dashboard',compact('profiles'));       
    }
    public function wfhnotify(Request $request){
        
         if(auth()->user()){
        $wfhleave = wfhleave::first();
        $wfhleave->notify(new EmpwfhNotifications($wfhleave));
         }
        return redirect('/Employee/wfh')->with('success','WFH Application has been submitted');
    }

    public function notify(Request $request){
      
         if(auth()->user()){
            
        $empleave = empleave::first();
        $empleave->notify(new EmployeeNotifications($empleave));
         }
        return redirect()->back()->with('success','Leave Application has been submitted');
    }
   
    public function markasreadRec($id){
        // dd($id);
    if($id){
    Recruit::where('id','=',$id)->update([
        'status' => "seen"
    ]);
    }
    return redirect()->back();
    }

    public function markasread($id){
        // dd($id);
    if($id){
    empleave::where('id','=',$id)->where('id','=',$id)
    ->update([
        'status' => "seen"
    ]);
    }
    return redirect()->back();
    }
    public function wfhmarkasread($id){
        // dd($id);
    if($id){
    wfhleave::where('id','=',$id)->where('id','=',$id)
    ->update([
        'status' => "seen"
    ]);
    }
    return redirect()->back();
    }
    public function header(){
        $profiles = profile::orderBy('id','desc')->first();
        return view('header',compact('profiles'));
    }
    public function auth(){
        return view('auth');
    }
    public function adminauth(){
        return view('adminauth');
    }
    public function about(){
        $contacts = Contacts::orderBy('id','desc')->first();
        $gallaries = manage::orderBy('id','desc')->get();
        $manage = manage::orderBy('id','desc')->first();
        return view('about',compact('gallaries','manage','contacts'));
    }
    public function contact(){
        $contacts = Contacts::orderBy('id','desc')->first();
        $gallaries = manage::orderBy('id','desc')->get();
        $manage = manage::orderBy('id','desc')->first();
        return view('contact',compact('gallaries','manage','contacts'));
    }
    public function gallery(){
        $contacts = Contacts::orderBy('id','desc')->first();
        $gallaries = manage::orderBy('id','desc')->get();
        $manage = manage::orderBy('id','desc')->first();
        return view('gallery',compact('gallaries','manage','contacts'));
    }
    public function service(){
        $contacts = Contacts::orderBy('id','desc')->first();
        $gallaries = manage::orderBy('id','desc')->get();
        $manage = manage::orderBy('id','desc')->first();
        return view('service',['jobs'=>Job::orderBy('id','Desc')->get()],compact('gallaries','manage','contacts'));
    }
    public function HrDashboard(Request $request ){
        $emp_id = $request->emp_id;
        $recruits = Recruit::where('status','=','pending')->orderBy('id','Desc')->get();
        $empleave = empleave::where('status','=','pending')->orderBy('id','desc')->get();
        $wfhleave = wfhleave::where('status','=','pending')->orderBy('id','desc')->get();
        $profiles = profile::orderBy('id','desc')->first();
          return view('Home.HrDashboard',compact('recruits','empleave','profiles','wfhleave'));
    }
    public function EmployeeDashboard(){
        $profiles = profile::orderBy('id','desc')->first();
        return view('Home.EmployeeDashboard',compact('profiles'));
    }
    public function register(){
        return view('register');
    }
    public function registerstore(Request $request){
        // dd($request->all());
         $emp_id = $request->emp_id;
         
        $employee = Employeedata::where('emp_id','=',$emp_id)->get();
        $request->validate([
            'emp_id'=>'required|unique:users',
            'role'=>'required',
            'name'=>'required|unique:users',
            'email'=>'required|unique:users|email',
            'password'=>'required|confirmed'
            ]);
            if($employee->emp_id == $emp_id){
            User::create([
                'emp_id'=>$employee->id,
                'role'=>$request->role,
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password)

            ]);
        
            if(Auth::attempt($request->only('emp_id','name','email','password'))){
                return redirect('login')->with('success','User Has Been Registerd...!,Now try to Sign In');
            }else{
          return redirect('register')->withError('Something Went Wrong..!');
            }
        }else{
            return redirect('login')->withError('Employee ID doesnt exist..!!!');
        
        }
    }
    public function loginstore(Request $request){
    // dd($request->all());
    $request->validate([
    'email'=>'required',
    'password'=>'required',
    'role'=>'required'
    ]);
   if(Auth::attempt($request->only('role','email','password'))){
    $route = $this->redirectDash();
    return redirect($route);
   }else{
   return back()->withError('Invalid Credenetials..! Try Again');
   }
}
    public function login(){
        return redirect('login');
    }
    
      public function logout(Request $request){
        Auth::logout();
        $request->Session()->flush();
        return redirect('/');
    }
    public function redirectDash(){
        if(Auth::user()&&Auth::user()->role == 1){
             $redirect = '/Employee/EmployeeDashboard';
        }elseif(Auth::user()&&Auth::user()->role == 2){
            $redirect = '/Home/HrDashboard';
        }else{
           $redirect = '/';
        }
        return $redirect;

    }
}
