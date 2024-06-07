@include('layouts.header')

@include('layouts.sidebar')

<div class="page-wrapper">
<div class="content container-fluid">

<div class="row">
<div class="col-xl-12 col-sm-12 col-12">
<div class="breadcrumb-path mb-3">
<ul class="breadcrumb">
<li class="breadcrumb-item"><img src="{{url('assets/img/dash.png')}}" class="mr-2" alt="breadcrumb" />Home</a>
</li>
<li class="breadcrumb-item active"> Employees</li>
</ul>
<h3>Employees</h3>
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

</div>
@endif
@if(session('error'))
<div class="alert alert-success">
    {{session('error')}}
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

</div>
@endif
</div>



<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="head-link-set">
<ul>
    <li><a href="{{url('employees/employee')}}">View All Employee</a></li>
<li><a class="active" href="#">Create Employee</a></li>
</ul>
<a class="btn-add" href="{{url('/attandance/qrCreate')}}"><i data-feather="plus"></i> Generate QR</a>
</div>
</div>

<form action="/employees/employeeStore" method="POST" enctype="multipart/form-data">
@csrf
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card">
<div class="card-header">
<h2 class="card-titles">Basic Details <span>Organized and secure.</span></h2>
</div>
<div class="card-body">
<div class="row">
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label>Enter First Name</label>
<input type="text" name="fname" class="form-control" placeholder="Employee's First Name">
</div>
</div>
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label>Enter Last Name</label>
<input type="text" name="lname" class="form-control" placeholder="Employee's Last Name">
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label>Enter Your ID</label>
<input type="text" name="emp_id" class="form-control" placeholder="Employee's ID">
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label>Enter Your Email</label>
<input type="email" name="email" class="form-control" style="height:69px;" placeholder="Employee's Email">
</div>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card ">
<div class="card-header">
<h2 class="card-titles">Employment Details<span>Let everyone know the essentials so they're fully prepared.</span></h2>
</div>
<div class="card-body">
    <div class="row">
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label>Enter Your Branch</label>
<select class="form-selected" name="branch">
<option selected>Branch of Employment</option>
<option value="IT">IT </option>
<option value="development">Development</option>
<option value="administration">Administration</option>
<option value="HR">HR</option>
</select>
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label>Enter Period Of Employeement</label>
<select class="form-select" name="period">
<option selected>Period</option>
<option value="Permanent">Permanent	</option>
<option value="Temprorary">Temprorary</option>
<option value="Freelancer">Freelancer</option>
</select>
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 ">
<div class="form-group">
<label>Enter Your Job Title</label>
<input type="text" class="form-control" name="job" placeholder="Job Title">
</div>
</div>
    </div>

</div>
</div>
</div>


<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card">
<div class="card-header">
<h2 class="card-titles">Salary Details<span>Stored securely, only visible to Super Admins, Payroll Admins, and themselves.</span></h2>
</div>
<div class="card-body">
<div class="row">
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label>Enter Salary Range</label>   
<input type="text" class="form-control" name="salary" placeholder="Salary">
</div>
</div>


<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label>Enter Starting Date</label>
<input type="date" class="form-control" name="sdate" style="height:69px;" placeholder="Start Date">
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 ">
<div class="form-group">
<label>Enter Frequency Of Employeement</label>
<select class="form-select" name="freq">
<option selected>Frequency</option>
<option value="Annualy">Annualy</option>
<option value="Monthly">Monthly</option>
<option value="Weekly">Weekly</option>
<option value="Daily">Daily</option>
</select>
</div>
</div>


</div>
</div>
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card ">

<div class="card-header">
<h2 class="card-titles">Personal Details of Empoyee<span>Empoyee personal detail include city,state,contact etc..</span></h2>
</div>

<!-- Text input-->
<div class="card-body">    
    
<div class="form-group">
    <div class="col-xl-12 col-sm-12 col-12 ">
    <label>Enter Phone No.</label>
         <input name="phone" placeholder="(+91)78787-12121" class="form-control" type="text">

    </div>
</div>

<!-- Text input-->
      
<div class="form-group">
    <div class="col-xl-12 col-sm-12 col-12 ">
    <label>Enter Permanent Address</label>
        <input name="address" placeholder="Address" class="form-control" type="text">
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
    <div class="col-xl-12 col-sm-12 col-12 ">
    <label>Enter State </label>
          <select name="state" class="form-selected">
    <option selected>Select state</option>
    <option value="AN">Andaman and Nicobar Islands</option>
    <option value="AP">Andhra Pradesh</option>
    <option value="AR">Arunachal Pradesh</option>
    <option value="AS">Assam</option>
    <option value="BR">Bihar</option>
    <option value="CH">Chandigarh</option>
    <option value="CT">Chhattisgarh</option>
    <option value="DN">Dadra and Nagar Haveli</option>
    <option value="DD">Daman and Diu</option>
    <option value="DL">Delhi</option>
    <option value="GA">Goa</option>
    <option value="GJ">Gujarat</option>
    <option value="HR">Haryana</option>
    <option value="HP">Himachal Pradesh</option>
    <option value="JK">Jammu and Kashmir</option>
    <option value="JH">Jharkhand</option>
    <option value="KA">Karnataka</option>
    <option value="KL">Kerala</option>
    <option value="LA">Ladakh</option>
    <option value="LD">Lakshadweep</option>
    <option value="MP">Madhya Pradesh</option>
    <option value="MH">Maharashtra</option>
    <option value="MN">Manipur</option>
    <option value="ML">Meghalaya</option>
    <option value="MZ">Mizoram</option>
    <option value="NL">Nagaland</option>
    <option value="OR">Odisha</option>
    <option value="PY">Puducherry</option>
    <option value="PB">Punjab</option>
    <option value="RJ">Rajasthan</option>
    <option value="SK">Sikkim</option>
    <option value="TN">Tamil Nadu</option>
    <option value="TG">Telangana</option>
    <option value="TR">Tripura</option>
    <option value="UP">Uttar Pradesh</option>
    <option value="UT">Uttarakhand</option>
    <option value="WB">West Bengal</option>
</select>
</div>
</div>


<!-- Text input--> 
 
<div class="form-group">
    <div class="col-xl-12 col-sm-12 col-12 ">
    <label>Enter City</label>
        <input name="city" placeholder="city" class="form-control"  type="text">
  </div>
</div>


<!-- Text input-->

<div class="form-group">
    <div class="col-xl-12 col-sm-12 col-12 ">
    <label>Enter Zip Code</label>
        <input name="zip" placeholder="Zip Code" class="form-control"  type="text">
</div>
</div>

<div class="form-group">
<div class="col-xl-12 col-sm-12 col-12 ">
<label>Enter Your Image</label>

    <input name="img" placeholder="Enter image" class="form-control" style="height:69px;" type="file">

</div>

  <br>

<!-- radio checks -->
 <div class="form-group">
 
 <div class="col-xl-12 col-sm-12 col-12 " >
                       <label>Sex/Gender</label>
                        
                            <div class="radio">                                        
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="Male" /> Male
                            </div>
                            <div class="radio">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="Female" /> Female
                            </div>
                        </div>
                    </div>
        
       <div class="row">
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="form-btn">
    <center>
<input type="submit" class="btn btn-apply" style="height:60px;width: 200px;">
    </center>
</div>
</div>
</div>
</form>
</div>
         </div>
       </div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
@include('layouts.footer')
</body>
</html>