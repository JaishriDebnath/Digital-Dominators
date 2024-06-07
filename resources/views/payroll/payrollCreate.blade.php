@include('layouts.header')

@include('layouts.sidebar')
<div class="page-wrapper">
<div class="content container-fluid">
<div class="row">
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="breadcrumb-path mb-4">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="{{url('/dashboard')}}"><img src="assets/img/dash.png" class="mr-2" alt="breadcrumb">Home</a>
</li>
<li class="breadcrumb-item active"> Profile</li>
</ul>
<h3>Profile	</h3>
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="head-link-set">
<ul>
<li><a class="active" href="#">Pyroll Create</a></li>
<li><a href="{{url('/payroll/payroll')}}">Pyroll List</a></li>
</ul>
</div>
</div>


<form action="/payroll/payrollStore" method="POST" enctype="multipart/form-data">
@csrf

<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card">
<div class="card-header">
<h2 class="card-titles">Basic Details</span></h2>
</div>
<div class="card-body">
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="hidden" name="id" class="form-control" >
<label for="Employee_ID "><b>Employee ID *</b></label><br />
<input type="text" name="emp_id" placeholder="Employee's ID" class="form-control" >
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="name "><b>Employee Name *</b></label><br />
<input type="text" name="name" placeholder="Employee's Name" class="form-control" >
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="Position "><b>Employee Position *</b></label><br />
<input type="text" name="position" placeholder="Employee's Position" class="form-control" >
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label><b>Employee's Branch*</b></label><br>
<select class="form-selected" name="branch">
<option selected>Branch of Employee</option>
<option value="IT">IT </option>
<option value="development">Development</option>
<option value="administration">Administration</option>
<option value="HR">HR</option>
</select>
</div>
</div>
</div>
</div>
</div>



<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card">
<div class="card-header">
<h2 class="card-titles">Bank Details</span></h2>
</div>
<div class="card-body">

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="Pan"><b>Pan Card Number*</b></label><br />
<input type="text" name="pan" placeholder="Pan Card Number" class="form-control" >
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="Bank_Acc "><b>Bank Account Number *</b></label><br />
<input type="text" name="acc" placeholder="Bank Account Number" class="form-control" >
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="ifsc "><b>IFSC Code *</b></label><br />
<input type="text" name="ifsc" placeholder="IFSC Code Number" class="form-control" >
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label><b>Bank Name*</b></label><br>
<select name="bankname" class="form-control" required>
  <option selected="selected">--Select --</option>
  <option value="ALLAHABAD BANK">ALLAHABAD BANK </option>
  <option value="ANDHRA BANK">ANDHRA BANK</option>
  <option value="AXIS BANK">AXIS BANK</option>
  <option value="BANK OF BARODA">BANK OF BARODA</option>
  <option value="BHARATIYA MAHILA BANK LIMITED">BHARATIYA MAHILA BANK LIMITED</option>
  <option value="BANK OF INDIA">BANK OF INDIA</option>
  <option value="BANDHAN BANK LIMITED">BANDHAN BANK LIMITED</option>
  <option value="BANK OF INDIA">BANK OF INDIA</option>
  <option value="BANK OF MAHARASHTRA">BANK OF MAHARASHTRA</option>
  <option value="BANDHAN BANK">CANARA BANK</option>
  <option value="CENTRAL BANK OF INDIA">CENTRAL BANK OF INDIA</option>
  <option value="CORPORATION BANK">CORPORATION BANK</option>
  <option value="DENA BANK">DENA BANK</option>
  <option value="FEDERAL BANK LTD">FEDERAL BANK LTD </option>
  <option value="FINO PAYMENT BANK">FINO PAYMENT BANK</option>
  <option value="GRAMIN VIKASH BANK">GRAMIN VIKASH BANK</option>
  <option value="HDFC BANK LTD">HDFC BANK LTD</option>
  <option value="ICICI BANK LTD">ICICI BANK LTD</option>
  <option value="IDBI BANK LTD">IDBI BANK LTD</option>
  <option value="INDUSIND BANK LTD">INDUSIND BANK LTD</option>
  <option value="INDIAN BANK">INDIAN BANK</option>
  <option value="INDIAN OVERSEAS BANK">INDIAN OVERSEAS BANK</option>
  <option value="KARNATAKA BANK LTD">KARNATAKA BANK LTD</option>
  <option value="KOTAK MAHINDRA BANK">KOTAK MAHINDRA BANK</option>
  <option value="ORIENTAL BANK OF COMMERCE">ORIENTAL BANK OF COMMERCE</option>
  <option value="PAYTM BANK">PAYTM BANK</option>
  <option value="PUNJAB AND SIND BANK">PUNJAB AND SIND BANK</option>
  <option value="PUNJAB NATIONAL BANK">PUNJAB NATIONAL BANK</option>
  <option value="RESERVE BANK OF INDIA">RESERVE BANK OF INDIA</option>
  <option value="SOUTH INDIAN BANK">SOUTH INDIAN BANK</option>
  <option value="STATE BANK OF INDIA">STATE BANK OF INDIA</option>
  <option value="SYNDICATE BANK">SYNDICATE BANK</option>
  <option value="UCO BANK">UCO BANK</option>
  <option value="UNION BANK OF INDIA">UNION BANK OF INDIA</option>
  <option value="UNITED BANK OF INDIA">UNITED BANK OF INDIA</option>
  <option value="VIJAYA BANK">VIJAYA BANK</option>
  <option value="YES BANK LTD">YES BANK LTD</option>
</select>
</div>
</div>
</div>
</div>
</div>




<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card">
<div class="card-header">
<h2 class="card-titles">Earning Details</span></h2>
</div>
<div class="card-body">

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="Basic Pay"><b>Basic Pay*</b></label><br />
<input type="text" name="bsp" placeholder="Basic Pay" class="form-control" >
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="HRA"><b>House Rent Allowance *</b></label><br />
<input type="text" name="hra" placeholder="House Rent Allowance" class="form-control" >
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="tr "><b>Telephone Reimbursament*</b></label><br />
<input type="text" name="tr" placeholder="Telephone Reimbursament" class="form-control" >
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="Medical Allowance "><b>Medical Allowance*</b></label><br />
<input type="text" name="ma" placeholder="Medical Allowance" class="form-control" >
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="bonus "><b>Bonus*</b></label><br />
<input type="text" name="bonus" placeholder="Bonus" class="form-control" >
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="lta "><b>Leave Travel Allowance*</b></label><br />
<input type="text" name="lta" placeholder="Leave Travel Allowance" class="form-control" >
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="lta "><b>First Day of Month for Payroll*</b></label><br />
<input type="date" name="fday" placeholder="Leave Travel Allowance" style="height:69px;" class="form-control" >
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="lta "><b>Last Day of Month for Payroll*</b></label><br />
<input type="date" name="lday" placeholder="Leave Travel Allowance" style="height:69px;" class="form-control" >
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 ">
<div class="form-group">
<label for="sa "><b>Special Allowance*</b></label><br />
<input type="text" name="sa" placeholder="Special Allowance" class="form-control" >
</div>
</div>

</div>
</div>
</div>


<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card">
<div class="card-header">
<h2 class="card-titles">Deductions</span></h2>
</div>
<div class="card-body">

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="Income Tax"><b>Income Tax*</b></label><br />
<input type="text" name="it" placeholder="Income Tax" class="form-control" >
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="Provident Fund"><b>Provident Fund *</b></label><br />
<input type="text" name="pf" placeholder="Provident Fund" class="form-control" >
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 ">
<div class="form-group">
<label for="Professional Tax"><b>Professional Tax*</b></label><br />
<input type="text" name="prt" placeholder="Professional Tax" class="form-control" >
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
</div>
</div>
 
</body>
</html>