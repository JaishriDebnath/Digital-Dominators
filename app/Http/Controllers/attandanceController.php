<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qr;
use App\Models\Attandance;
use App\Models\Employeedata;
use App\Models\profile;
use Illuminate\Support\Facades\DB; 
use Carbon\Carbon;

use function Pest\Laravel\delete;

class attandanceController extends Controller
{ 
    public function attandance(){
      $profiles = profile::orderBy('id','Desc')->first();
      $attandances = Attandance::orderBy('name','asc')->get();
      $employees = Employeedata::all(); 
      return view('attandance.attandance',compact('attandances','employees','profiles'));
    }
    public function attandanceCreate(){
      $profiles = profile::orderBy('id','Desc')->first();
      return view('attandance.attandanceCreate',compact('profiles'));
    
    }
    public function filter(Request $request){
    
      $sdate=$request->d1;
      $edate=$request->d2;
      $profiles = profile::orderBy('id','Desc')->first();
      $employees = Employeedata::all(); 
      $attandance = Attandance::where('demo','>=',$sdate)
                          ->orWhere('demo','<=',$edate)
                          ->get();

     return view('attandance.attandance',compact('profiles','attandance','employees'));

}

    public function attandanceStore(Request $request){
          
            $attandances= new Attandance;//model is used
            $attandances->id=$request->id;
            $attandances->intime=$request->intime;
            $attandances->outtime=$request->outtime;
            $attandances->emp_id=$request->emp_id;
            $attandances->name=$request->name;
            $attandances->demo=$request->demo;
            $attandances->status=$request->status;
            $attandances->save();
            return redirect('/attandance/attandanceCreate');
    }
    public function attandanceDelete(){
      
    }
  public function qr(){ 
    return view('attandance.qr',['employeedatas'=>Employeedata::orderBy('id','Desc')->get()]);
   
   // return view('attandance.qr',['attandances'=>Attandance::orderBy('id','Desc')->get()]);
     }  
  public function qraStore($result){
        // dd(date('h:i A'));
         
         $id= $result;
         $employees = Employeedata::where('emp_id','=',$id)->first();

if(!$employees){
          
          return redirect()->back()->with('fail', ' fail !! ' . 'No Employee Found');
                       
}else{
  $date  = date('Y-m-d' , time()-(86400));
  $time  = date('h:i A',time()-(48600));
  $attandances = Attandance::where('emp_id','=',$employees->id)->where('demo','=', $date)
  ->where('outtime','=','00:00 PM')->first();

  if($attandances){
    $res = Attandance::where('intime','!=',date("h:i A"))->where('emp_id','=',$employees->id)
    ->where('demo','=', $date)->where('outtime','=','00:00 PM')->update([
        'outtime' => $time
    ]);
      if ($res) {
  
      Session()->put('sname', $employees->fname.$employees->lname );
      Session()->put('semp_id', $employees->emp_id);
      Session()->put('sintime', $attandances->intime);
      Session()->put('souttime', $time);
      Session()->put('sdemo', $date);
      Session()->put('status','Present' );

    return redirect()->back()->with('success', $employees->fname . ' left office at ' . $time);
      }else {
    return redirect()->back()->with('fail', ' fail !! ' . $employees->fname . ' Come after few minute ');
    }
}else{
      
$a = Attandance::where('emp_id', '=', $employees->id)->where('outtime', '=', $time)->first();
if ($a) {

return redirect()->back()->with('fail', ' fail !! ' . $employees->fname . ' Come after few minute ');
} else {
  $date  = date('Y-m-d' , time()-(86400));
  $time  = date('h:i A',time()-(48600));
$data = [
  'name' =>  $employees->fname.$employees->lname, 
  'emp_id' => $employees->id,
  'intime' => $time,
  'outtime' => "00:00 PM",
  'demo' => $date,
  'status' => 1,
];
// dd($data);
  $res = Attandance::insert($data);
  if ($res) {
    session()->put('sname', $employees->fname.$employees->lname );
    session()->put('semp_id', $employees->emp_id);
    session()->put('sintime', $time );
    session()->put('souttime', "00:00 PM");
    session()->put('sdemo', $date);
    session()->put('status', 'Present');
    
  return redirect()->back()->with('success',  $employees->fname . $employees->lname . ' enter in office at ' . date('h:i A'));
  } else {
    return redirect()->back()->with('fail', ' fail !! Entry fail ' . $employees->fname . $employees->lname );
          }
  }

}

}

}
    public function qrShow(){
      $profiles = profile::orderBy('id','Desc')->first();
        $qrs=Qr::get();//to fetch data
        return view('attandance.qrShow',['qrs'=>$qrs],compact('profiles'));//to pass data to view or html
    }
    public function qrCreate(){
      $profiles = profile::orderBy('id','Desc')->first();
        return view('attandance.qrCreate',compact('profiles'));
        }
    public function qrStore(Request $request){
    
            $qrs= new Qr;//model is used
            $qrs->id=$request->id;
            $qrs->emp_id=$request->emp_id;
            $qrs->name=$request->name;
            $qrs->branch=$request->branch;
            $qrs->created_at=$request->created_at;
            $qrs->save();
            return redirect('/attandance/qrShow');
         }     
        public function qrDelete($id){
            $qrs= Qr::where('id',$id)->first();
            $qrs->delete();
            return redirect('/attandance/qrShow');
               }

               public function edit(Qr $qr){
                return response()->Json($qr);
               }
       
}
