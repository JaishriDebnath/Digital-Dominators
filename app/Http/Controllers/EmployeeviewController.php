<?php

namespace App\Http\Controllers;

use App\Models\Companyinfo;
use App\Models\Contacts;
use App\Notifications\EmployeeNotifications;
use App\Notifications\AprrovalNotification;
use App\Notifications\RejectNotification;
use App\Models\empleave;
use App\Models\Employeedata;
use App\Models\User;
use App\Models\emprofile;
use App\Models\wfhleave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeviewController extends Controller
{
    public function empmarkasreadP($id){
        if($id){
            Companyinfo::where('id','=',$id)->where('id','=',$id)
            ->update([
                'status' => "send & seen"
            ]);
            }
            return redirect('/Employee/company');
            }
    public function empmarkasreadR($id){
        if($id){
            empleave::where('id','=',$id)->where('id','=',$id)
            ->update([
                'status' => "Rejected & seen"
            ]);
            }
            return redirect()->back();
            }
            public function empmarkasreadA($id){
                if($id){
                    empleave::where('id','=',$id)->where('id','=',$id)
                    ->update([
                        'status' => "Approved & seen"
                    ]);
                    }
                    return redirect()->back();
            }
    
    public function wempmarkasreadR($id){
        if($id){
            wfhleave::where('id','=',$id)->where('id','=',$id)
            ->update([
                'status' => "Rejected & seen"
            ]);
            }
            return redirect()->back();
    }
    public function wempmarkasreadA($id){
        if($id){
            wfhleave::where('id','=',$id)->where('id','=',$id)
            ->update([
                'status' => "Approved & seen"
            ]);
            }
            return redirect()->back();
    }
    public function empleaveCreate(){
        $emp_id = Auth::user()->emp_id;
        $employees = Employeedata::where('id','=',$emp_id)->first();
        $profiles = emprofile::where('emp_id','=',$emp_id)->orderBy('id','desc')->get();   
    return view('Employee.leaveCreate',compact('profiles','employees'));
    }
  
    public function empleaveStore(Request $request){
    // dd($request->all());
        $request->validate([
        'status'=>'required',
        'emp_id'=>'required',
        'name'=>'required',
        'span'=>'required',
        'type'=>'required',
        'lt'=>'nullable',
        'tl'=>'nullable',
        'from'=>'nullable',
        'to'=>'nullable',
        'remain'=>'nullable',
        'reason'=>'nullable',
     ]);
     $empleaves = new empleave;//model is used
     $empleaves->status=$request->status;
     $empleaves->emp_id=$request->emp_id;
     $empleaves->name=$request->name;
     $empleaves->span=$request->span;
     $empleaves->type=$request->type;
     $empleaves->lt=$request->lt;
     $empleaves->tl=$request->tl;
     $empleaves->from=$request->from;
     $empleaves->to=$request->to;
     $empleaves->remain=$request->remain;
     $empleaves->reason=$request->reason;
     
     $empleaves->save();

     return redirect('/notify');

    }
    public function wfh(Request $request){
        $emp_id = Auth::user()->emp_id;
        $employees = Employeedata::where('id','=',$emp_id)->get();        
        $profiles = emprofile::where('emp_id','=',$emp_id)->orderBy('id','desc')->get();   
         return view('Employee.wfh',compact('profiles','employees'));
        }
    public function wfhleaveStore(Request $request){
        // dd($request->all());
    
            $request->validate([
            'status'=>'required',
            'wemp_id'=>'required',
            'wname'=>'required',
            'wspan'=>'required',
            'wtype'=>'required',
            'wlt'=>'nullable',
            'wtl'=>'nullable',
            'wfrom'=>'nullable',
            'wto'=>'nullable',
            'wremain'=>'nullable',
            'wreason'=>'nullable',
         ]);
    
         $wfhleaves = new wfhleave;//model is used
         $wfhleaves->status=$request->status;
         $wfhleaves->wemp_id=$request->wemp_id;
         $wfhleaves->wname=$request->wname;
         $wfhleaves->wspan=$request->wspan;
         $wfhleaves->wtype=$request->wtype;
         $wfhleaves->wlt=$request->wlt;
         $wfhleaves->wtl=$request->wtl;
         $wfhleaves->wfrom=$request->wfrom;
         $wfhleaves->wto=$request->wto;
         $wfhleaves->wremain=$request->wremain;
         $wfhleaves->wreason=$request->wreason;
         
         $wfhleaves->save();
         return redirect('/wfhnotify');
    
        }
    public function EmployeeDashboard(Request $request){
        // dd(Auth::user()->emp_id);
        $emp_id = Auth::user()->emp_id;
        $employees = Employeedata::where('id','=',$emp_id)->get();
        $empleave = empleave::where('emp_id','=',$emp_id)->where('status','=','Approved')->orwhere('status','=','Rejected')->orderBy('id','desc')->get();
        $wfhleave = wfhleave::where('id','=',$emp_id)->where('status','=','Approved')->orwhere('status','=','Rejected')->orderBy('id','desc')->get();
        $companyinfos = Companyinfo::where('status','=','send')->get();
        $profiles = emprofile::where('emp_id','=',$emp_id)->orderBy('id','desc')->get();
        return view('Employee.EmployeeDashboard',compact('companyinfos','employees','profiles','empleave','wfhleave','emp_id'));
    }
    public function profile(){
        $emp_id = Auth::user()->emp_id;
        $profiles = emprofile::where('emp_id','=',$emp_id)->orderBy('id','desc')->get();   
         return view('Employee.profile',compact('profiles'));
    }

    public function profilePic(Request $request){
        $emp_id = Auth::user()->emp_id;
        $request->validate([

            'eimage'=>'nullable',  
         ]);
         $imgname = time().'.'.$request->eimage->extension();
         $request->eimage->move(public_path('profile/employee'),$imgname);
    
         $user = new emprofile ;//model is used
         $user->emp_id=$emp_id;
         $user->eimage=$imgname;
         $user->save();
         return back()->withSuccess('Profile Pic Updated Successfully..!');
      
    }
    public function profileset(Request $request){
        // dd(Auth::user());
        $emp_id = Auth::user()->emp_id;
        $profiles = emprofile::where('emp_id','=',$emp_id)->orderBy('id','desc')->first();   
         return view('Employee.profileset',compact('profiles'));
        
     }
     public function empsidebar(Request $request){
        $emp_id = Auth::user()->emp_id;
        $profiles = emprofile::where('emp_id','=',$emp_id)->get();   
         return view('Employee.empsidebar',compact('profiles'));
        
     }
    public function company(){
        $emp_id = Auth::user()->emp_id;
        $profiles = emprofile::where('emp_id','=',$emp_id)->orderBy('id','desc')->get();   
        $contacts = Contacts::first();
        $companyinfos = Companyinfo::get();
        return view('Employee.company',compact('companyinfos','contacts','profiles'));
    }
    public function logout(Request $request){
        Auth::logout();
        $request->Session()->flush();
        return redirect('/');
    }
}
