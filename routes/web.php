<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\attandanceController;
use App\Http\Controllers\empleaveController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\jobsController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\recruitmentController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\EmployeeviewController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Notifications
Route::get('/setnew/company',[SettingController::class,'company']);
Route::post('/setnew/infostore',[SettingController::class,'infostore']);
Route::get('/setnew/infodelete/{id}',[SettingController::class,'infodelete']);
Route::post('/layouts/MainFooter',[SettingController::class,'MainFooter']);

Route::get('/notify',[DashboardController::class,'notify']);
Route::get('/wfhnotify',[DashboardController::class,'wfhnotify']);
Route::get('/markasread/{id}',[DashboardController::class,'markasread']);
Route::get('/wfhmarkasread/{id}',[DashboardController::class,'wfhmarkasread']);
Route::get('/notifyApprove/{emp_id}',[empleaveController::class,'notify']);
Route::get('/markasreadApprove/{id}',[DashboardController::class,'markasread']);
Route::get('/notifyReject',[empleaveController::class,'notify']);
Route::get('/markasreadRec/{id}',[DashboardController::class,'markasreadRec']);
Route::get('/markasreadReject/{id}',[DashboardController::class,'markasread']);
Route::get('/empmarkasreadP/{id}',[EmployeeviewController::class,'empmarkasreadP']);
Route::get('/empmarkasreadR/{id}',[EmployeeviewController::class,'empmarkasreadR']);
Route::get('/wempmarkasreadA/{id}',[EmployeeviewController::class,'wempmarkasreadA']);
Route::get('/wempmarkasreadR/{id}',[EmployeeviewController::class,'wempmarkasreadR']);
//Login 
Route::get('/register',[DashboardController::class,'register']);
Route::post('/registerstore',[DashboardController::class,'registerstore']);
Route::post('/loginstore',[DashboardController::class,'loginstore']);
Route::get('/logout',[DashboardController::class,'logout']);

// dashboard
Route::get('/',[DashboardController::class,'index']);
Route::get('about',[DashboardController::class,'about']);
Route::get('auth',[DashboardController::class,'auth']);
Route::get('jobs',[DashboardController::class,'jobs']);
Route::get('/recruitments/add-recruit',[recruitmentController::class,'addrecruit']);
Route::post('/recruitments/storeRecruit',[recruitmentController::class,'storeRecruit']);
Route::get('adminauth',[DashboardController::class,'adminauth']);
Route::get('contact',[DashboardController::class,'contact']);
Route::get('dashboard',[DashboardController::class,'dashboard']);
Route::get('gallery',[DashboardController::class,'gallery']);
Route::get('home',[DashboardController::class,'home']);
Route::get('register',[DashboardController::class,'register']);
Route::get('service',[DashboardController::class,'service']);
Route::get('/attandance/qr',[attandanceController::class,'qr']);
Route::get('/attandance/qraStore/{result}',[attandanceController::class,'qraStore']);
Route::get('layouts/header',[DashboardController::class,'header']);

Route::group(['middleware'=>['web','isEmployee']],function(){
    Route::get('/Employee/empsidebar',[EmployeeviewController::class,'empsidebar']);
    Route::get('/Employee/EmployeeDashboard',[EmployeeviewController::class,'EmployeeDashboard']);
    Route::get('/Employee/leaveCreate',[EmployeeviewController::class,'empleaveCreate']);
    Route::post('/Employee/empleaveStore',[EmployeeviewController::class,'empleaveStore']);
    Route::get('/Employee/wfh',[EmployeeviewController::class,'wfh']);
    Route::post('/Employee/wfhleaveStore',[EmployeeviewController::class,'wfhleaveStore']);
    Route::get('/Employee/profileset',[EmployeeviewController::class,'profileset']);
    Route::get('/Employee/profile',[EmployeeviewController::class,'profile']);
    Route::post('/Employee/profilePic',[EmployeeviewController::class,'profilePic']);
    Route::get('/Employee/company',[EmployeeviewController::class,'company']);
    Route::get('/Employee/logout',[EmployeeviewController::class,'logout']);
});


Route::group(['middleware'=>['web','isAdmin']],function(){
    
    Route::get('Auth/logout',[DashboardController::class,'logout']);
    Route::get('/Home/HrDashboard',[DashboardController::class,'HrDashboard']);
    Route::get('/Home/EmployeeDashboard',[DashboardController::class,'EmployeeDashboard']);
  
    // attandance
     
    Route::get('/attandance/attandance',[attandanceController::class,'attandance']);
    Route::get('/attandance/attandanceCreate',[attandanceController::class,'attandanceCreate']);
    Route::post('/attandance/attandanceStore',[attandanceController::class,'attandanceStore']);

    Route::get('/attandance/qrShow',[attandanceController::class,'qrShow']);
    Route::post('/attandance/qrStore',[attandanceController::class,'qrStore']);
    Route::get('/attandance/qrCreate',[attandanceController::class,'qrCreate']);
    Route::get('/attandance/qrDelete/{id}',[attandanceController::class,'qrDelete']);

    // employee
    Route::get('/employees/employee',[employeeController::class,'employee']);
    Route::get('/employees/add-employee',[employeeController::class,'addEmployee']);
    Route::put('/employees/{id}/employeeUpdate',[employeeController::class,'EmployeeUpdate']);
    Route::post('/employees/employeeStore',[employeeController::class,'employeeStore']);
    Route::get('/employees/{id}/edit-employee',[employeeController::class,'EmployeeEdit']);
   

    //jobs
    Route::get('/jobs/jobs',[jobsController::class,'jobs']);
    Route::get('/jobs/add-jobs',[jobsController::class,'addjobs']);
    Route::post('/jobs/jobStore',[jobsController::class,'jobStore']);
    Route::get('/jobs/jobDelete/{id}',[jobsController::class,'jobDelete']);
    Route::get('/jobs/edit-job/{id}',[jobsController::class,'jobEdit']);
    Route::post('/jobs/jobUpdate/{id}',[jobsController::class,'jobUpdate']);

    //Leave
    Route::get('/leave/empleave',[empleaveController::class,'empleave']);
    Route::get('/leave/leaveCreate',[empleaveController::class,'empleaveCreate']);
    Route::post('/leave/empleaveStore',[empleaveController::class,'empleaveStore']);
    Route::get('/leave/empleaveDelete/{id}',[empleaveController::class,'empleaveDelete']);
    Route::get('/leave/leaveEdit/{id}',[empleaveController::class,'empleaveEdit']);
    Route::post('/leave/empleaveUpdate/{id}',[empleaveController::class,'empleaveUpdate']);
    Route::get('/leave/addempleave/{emp_id}',[empleaveController::class,'addempleave']);
    Route::get('/leave/rejectempleave/{id}',[empleaveController::class,'rejectempleave']);
    Route::get('/leave/rejectwfhleave/{id}',[empleaveController::class,'rejectwfhleave']);
    Route::get('/leave/wfh',[empleaveController::class,'wfh']);
    Route::post('/leave/wfhleaveStore',[empleaveController::class,'wfhleaveStore']);
    Route::get('/leave/wfhleaveEdit/{id}',[empleaveController::class,'wfhleaveEdit']);
    Route::post('/leave/wfhleaveUpdate/{id}',[empleaveController::class,'wfhleaveUpdate']);
    Route::get('/leave/addempwfh/{wemp_id}',[empleaveController::class,'addempwfh']);

    //payroll
    Route::get('/payroll/payrollCreate',[PayrollController::class,'payrollCreate']);
    Route::post('/payroll/payrollStore',[PayrollController::class,'payrollStore']);
    Route::get('/payroll/payroll',[PayrollController::class,'payroll']);
    Route::get('/payroll/payrollDetails/{emp_id}',[PayrollController::class,'payrollDetails']);
    Route::get('/payroll/salaryPdf/{emp_id}',[PayrollController::class,'salaryPdf']);

    //recruit
   Route::get('/recruitments/recruit',[recruitmentController::class,'recruit']);
   Route::get('/recruitments/{id}/deleteRecruit',[recruitmentController::class,'deleteRecruit']);

    //setting
    Route::get('/setnew/profile',[SettingController::class,'profile']);
    Route::get('/setnew/remove',[SettingController::class,'remove']);
    Route::post('setnew/profilePic',[SettingController::class,'profilePic']);
    Route::get('/setnew/profileset',[SettingController::class,'profileset']);
    Route::post('/setnew/setstore',[SettingController::class,'setstore']);
    
    Route::get('/setnew/contact',[SettingController::class,'contact']);   
    Route::post('/setnew/contactStore',[SettingController::class,'contactStore']);     
    Route::get('/setnew/gallary',[SettingController::class,'gallary']);
    Route::get('/setnew/deletegallary/{id}',[SettingController::class,'gallary']);
    Route::get('/setnew/manage',[SettingController::class,'manage']);
    Route::post('/setnew/managestore',[SettingController::class,'managestore']);
    Route::get('/setnew/manageeedit/{id}',[SettingController::class,'manageeedit']);
    Route::get('/setnew/manageupdate/{id}',[SettingController::class,'manageupdate']);
    Route::get('/setnew/manageedelete/{id}',[SettingController::class,'manageedelete']);
   
    //permissions
    Route::get('/setnew/setting',[SettingController::class,'setting']);
    Route::post('/setnew/settingstore',[SettingController::class,'settingstore']);
    Route::get('/setnew/settingedit/{id}',[SettingController::class,'profileset']);
    Route::get('/setnew/settingdelete/{id}',[SettingController::class,'settingdelete']);
});
