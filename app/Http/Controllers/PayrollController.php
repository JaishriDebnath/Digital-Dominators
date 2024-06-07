<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\payroll; 
use App\Models\Attandance;
use App\Models\profile;

class PayrollController extends Controller
{
    public function payrollCreate(){
        $profiles = profile::orderBy('id','Desc')->first();
        return view('payroll.payrollCreate',compact('profiles'));
    }
    public function payrollStore(Request $request){
    $request -> Validate([
        "id" =>'required',
        "emp_id"=> 'required',
        "name" =>'required',
        "position" =>'required',
        "branch" =>'required',
        "pan" =>'required',
        "acc" =>'required',
        "ifsc" =>'required',
        "bankname"=> 'required',
        "bsp" =>'required',
        "hra" =>'required',
        "tr" =>'required',
        "bonus"=>'required',
        "lta" =>'required',
        "sa" =>'required',
        "ma" =>'required',
        "it" =>'required',
        "pf" =>'required',
        "prt"=>'required',
        "date"=>'required'
    ]);

    $payrolls = new Payroll;
    $payrolls ->id=$request->id;
    $payrolls->emp_id=$request->emp_id;
    $payrolls->name=$request->name;
    $payrolls->branch=$request->branch;
    $payrolls->pan=$request->pan;
    $payrolls->position=$request->position;
    $payrolls->acc=$request->acc;
    $payrolls->ifsc=$request->ifsc;
    $payrolls->bankname=$request->bankname;
    $payrolls->bsp=$request->bsp;
    $payrolls->hra=$request->hra;
    $payrolls->tr=$request->tr;
    $payrolls->bonus=$request->bonus;
    $payrolls->ma=$request->ma;
    $payrolls->lta=$request->lta;
    $payrolls->sa=$request->sa;
    $payrolls->it=$request->it;
    $payrolls->pf=$request->pf;
    $payrolls->prt=$request->prt;
    $payrolls->date=$request->date;

    $payrolls->save();
    return redirect('/payroll/payrollCreate');
    }
    public function payroll(){
        $profiles = profile::orderBy('id','desc')->first();
        $payrolls = Payroll::where('id','desc')->get();
        return view('payroll.payroll',['payrolls'=>Payroll::orderBy('id','Desc')->get()],compact('profiles'));
    }

public function payrollDetails(Request $request, $emp_id){
    $profiles = profile::orderBy('id','Desc')->first();
    $payrolls = Payroll::where('emp_id','=',$emp_id)->first();

    $sdate= $payrolls->fday;
    $edate= $payrolls->lday;

    $attandance = Attandance::where('emp_id','=',$emp_id)->whereDate('demo','>=',$sdate)
    ->whereDate('demo','<=',$edate)
    ->get();
$countTotal = $attandance->count(); 
   
    return view('/payroll/payrollDetails',compact('attandance','payrolls','countTotal','profiles'));
}
   
public function salaryPdf(Request $request,$emp_id){
        $payrolls = Payroll::where('emp_id','=',$emp_id)->first();
    
        $sdate= $payrolls->fday;
        $edate= $payrolls->lday;

        $attandance = Attandance::where('emp_id','=',$emp_id)->whereDate('demo','>=',$sdate)
                            ->whereDate('demo','<=',$edate)
                            ->get();
        $countTotal = $attandance->count();                           
            $pdf = Pdf::loadView('payroll.payrollDetails', compact('payrolls','attandance','countTotal'));
        return $pdf->download('SalarySlip.pdf');
    }






}