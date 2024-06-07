<?php

namespace App\Http\Controllers;
use App\Notifications\EmployeeNotifications;
use Illuminate\Http\Request;
use App\Models\empleave;
use App\Models\wfhleave;
use App\Models\User;
use App\Models\Attandance;
use App\Models\Employeedata;
use App\Models\profile;
use GuzzleHttp\Psr7\Response;

class empleaveController extends Controller
{
  


    public function markasreadApprove($id){
    if($id){
    $user = User::first();
    $user->unreadNotifications->where('id',$id)->markasread();
    }
}

    public function markasreadReject($id){
    if($id){
    $user = User::first();
    $user->unreadNotifications->where('id',$id)->markasread();
    }
}


    public function empleave(){
        
        $profiles = profile::orderBy('id','Desc')->first();
        return view('leave.empleave',[
            'empleaves'=>empleave::orderBy('id','Desc')->get(),
            'wfhs'=>wfhleave::orderBy('id','Desc')->get(),
    ],compact('profiles'));
    
    }
    public function empleaveCreate(){
        $profiles = profile::orderBy('id','Desc')->first();   
    return view('leave.leaveCreate',compact('profiles'));
    }
  
    public function empleaveStore(Request $request){
    // dd($request->all());
        $request->validate([
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
     
    
     return back()->withSuccess('leave created successfully..!');

    }
    public function empleaveDelete($id){
    $empleave = empleave::where('id',$id)->first();
    $empleave->delete();
    return back()->withSuccess('Record Deleted Successfully...!');
    }
    public function empleaveEdit($id){
        $profiles = profile::orderBy('id','Desc')->first();
    return view('leave/leaveEdit',['empleave'=>empleave::where('id',$id)->first()],compact('profiles'));
    }
    public function empleaveUpdate(Request $request,$id){
   
         $empleave=empleave::where('id',$id)->first();
         
         
         $empleave->emp_id=$request->emp_id;
         $empleave->name=$request->name;
         $empleave->span=$request->span;
         $empleave->type=$request->type;
         $empleave->from=$request->from;
         $empleave->to=$request->to;
         $empleave->remain=$request->remain;
         $empleave->reason=$request->reason;
        
         $empleave->save();
         return back()->withSuccess('empleave Updated successfully..!');
    
    }

  public function addempleave($emp_id){
    $profiles = profile::orderBy('id','Desc')->first();
    $employees = Employeedata::where('id','=',$emp_id)->first();
    $empleave = empleave::where('emp_id','=',$emp_id)->first();
        // Declare two dates 
    $Date1 = $empleave->from; 
    $Date2 = $empleave->to; 
    
    // Declare an empty array 
    $array = array(); 
    
    // Use strtotime function 
    $Variable1 = strtotime($Date1); 
    $Variable2 = strtotime($Date2); 
    
    // Use for loop to store dates into array 
    // 86400 sec = 24 hrs = 60*60*24 = 1 day 
    for ($currentDate = $Variable1; $currentDate <= $Variable2; $currentDate += (86400)) { 
                                        
    $Store = date('Y-m-d', $currentDate); 
    $array[] = $Store; 
    } 
    if(!$employees){
        dd('employee doesnt exists');
    }else{
        
        foreach($array as $arrays){
            // Display the dates in array format 
            
                Attandance::insert([
                    'name' => $employees->fname.$employees->lname, 
                    'emp_id' => $employees->id,
                    'intime' => 'None',
                    'outtime' => 'None',
                    'demo' => $arrays,
                    'status' => 2,
                    'type'=>$empleave->span
                                              ]);
                                            
                
            
            
              }
    }

       
            $empleave = empleave::where('emp_id','=',$emp_id)->update([
             'status' => 'Approved'
            ]);
            return redirect('/leave/empleave')->with('success','Leave Application has been Approved');
   
       
}

public function rejectempleave($emp_id){

   empleave::where('emp_id','=',$emp_id)->update([
    'status' => 'Rejected'
   ]);
  
   return redirect('/leave/empleave')->with('error',' Leave Application has been Rejected');



}    
  
public function rejectwfhleave($wemp_id){
    
    wfhleave::where('wemp_id','=',$wemp_id)->update([
    'status' => 'Rejected'
   ]);
   
    return redirect()->back()->with('werror','WFH Leave has been Rejeced...!'); 
    
    }    
      
    public function wfh(){
        $profiles = profile::orderBy('id','Desc')->first();
        return view('leave.wfh',compact('profiles'));
        }
    public function wfhleaveStore(Request $request){
        // dd($request->all());
    
            $request->validate([
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
         return back()->withSuccess('leave created successfully..!');
    
        }
        public function wfhleaveEdit($id){
            $profiles = profile::orderBy('id','Desc')->first();
            return view('leave/wfhleaveEdit',['wfhleaves'=>wfhleave::where('id',$id)->first()],compact('profiles'));
            }
            public function wfhleaveUpdate(Request $request,$id){
                
                 $wfhleave = wfhleave::where('id',$id)->first();
                 
                 $wfhleave->wemp_id=$request->wemp_id;
                 $wfhleave->wname=$request->wname;
                 $wfhleave->wspan=$request->wspan;
                 $wfhleave->wtype=$request->wtype;
                 $wfhleave->wfrom=$request->wfrom;
                 $wfhleave->wto=$request->wto;
                 $wfhleave->wremain=$request->wremain;
                 $wfhleave->wreason=$request->wreason;
                
                 $wfhleave->save();
                 return back()->withSuccess('Work From Home leave Edited successfully..!');
            
            }
            public function addempwfh($wemp_id){
                $profiles = profile::orderBy('id','Desc')->first();
                $employees = Employeedata::where('emp_id','=',$wemp_id)->first();
                $empwfh = wfhleave::where('wemp_id','=',$wemp_id)->first();
                // Declare two dates 
                $Date1 = $empwfh->wfrom; 
                $Date2 = $empwfh->wto; 
                
                // Declare an empty array 
                $array = array(); 
                
                // Use strtotime function 
                $Variable1 = strtotime($Date1); 
                $Variable2 = strtotime($Date2); 
                
                // Use for loop to store dates into array 
                // 86400 sec = 24 hrs = 60*60*24 = 1 day 
                for ($currentDate = $Variable1; $currentDate <= $Variable2; $currentDate += (86400)) { 
                                                    
                $Store = date('Y-m-d', $currentDate); 
                $array[] = $Store; 
                } 
                if(!$employees){
                    dd('employee doesnt exists');
                }else{
                    
                        foreach($array as $arrays){
                            // Display the dates in array format 
                        
                            Attandance::insert([
                                'name' => $employees->fname.$employees->lname, 
                                'emp_id' => $employees->id,
                                'intime' => 'None',
                                'outtime' => 'None',
                                'demo' => $arrays,
                                'status' => 3,
                                'type'=>$empwfh->wspan
                                                        ]);
                                                        
                            
                            }
                }
                             
                $empwfh = wfhleave::where('wemp_id','=',$wemp_id)->update([
                    'status' => 'Approved'
                   ]);
                return redirect()->back()->with('wsuccess','WFH Leave Approved...!',compact('profiles'));
                   
            }
            
        


}

