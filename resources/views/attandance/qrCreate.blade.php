@include('layouts.header')

@include('layouts.sidebar')

<div class="page-wrapper">
<div class="content container-fluid">
<div class="row">
<!-- <div class="col-xl-12 col-sm-12 col-12 ">
<div class="breadcrumb-path mb-4"> -->

<!-- <div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="head-link-set">

</div>
</div> -->
</div>

<form action="/attandance/qrStore" method="POST" enctype="multipart/form-data">
@csrf
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card">
<div class="card-header">
<h2 class="card-titles" style="text-align: center;">Generate QR</span></h2>
</div>
<div class="card-body">
<div class="row">

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="hidden" name="id" class="form-control" >
<label for="Employee_ID "><b>Enter Your Employee ID *</b></label><br />
<input type="text" name="emp_id" placeholder="Enter Your Employee ID" class="form-control" >
</div>
</div>
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="name "><b>Enter Your Name *</b></label><br />
<input type="text" name="name" placeholder="Enter Your Name" class="form-control" >
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label><b>Enter Your Branch*</b></label>
<select class="form-selected" name="branch">
<option selected>Branch of Employment</option>
<option value="IT">IT </option>
<option value="development">Development</option>
<option value="administration">Administration</option>
<option value="HR">HR</option>
</select>
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 ">
<div class="form-btn">
<input type="submit" value="SUBMIT" class="btn btn-apply w-auto">
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