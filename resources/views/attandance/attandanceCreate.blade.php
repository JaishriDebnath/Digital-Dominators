@include('layouts.header')

@include('layouts.sidebar')

<div class="page-wrapper">
<div class="content container-fluid">
<div class="row">

<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="head-link-set">
<ul>
<li><a href="{{url('attandance/attandance')}}">Attandance Report</a></li>
<li><a class="active" href="#">Create Attandance</a></li>
</ul>
</div>
</div>

<form action="/attandance/attandanceStore" method="POST" enctype="multipart/form-data">
@csrf
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card">
<div class="card-header">
<h2 class="card-titles" style="text-align: center;">Add Employee</span></h2>
</div>
<div class="card-body">
<div class="row">

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="hidden" name="id" class="form-control" >
<input type="hidden" name="outtime" value="00:00 PM" class="form-control" >
<label for="Employee_ID "><b>Enter Employee ID *</b></label><br />
<input type="hidden" name="status" value="1" >
<input type="text" name="emp_id" placeholder="Enter Employee ID" class="form-control" >
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="name "><b>Enter Intime *</b></label><br />
<input type="time" name="intime" value="date('h:i A')" class="form-control" style="height: 69px;">
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="name "><b>Enter Name *</b></label><br />
<input type="text" name="name" placeholder="Enter Your Name" class="form-control" >
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="date "><b>Enter Date *</b></label><br />
<input type="date" name="demo" placeholder="Enter starting date" class="form-control" style="height: 69px;">
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 ">
<div class="form-btn">
<center>
<input type="submit" class="btn btn-apply" style="height:60px;width: 200px;">
    </center>
</div>
</div>

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
 
</body>
</html>