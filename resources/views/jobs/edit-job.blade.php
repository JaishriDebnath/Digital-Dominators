@include('layouts.header')

@include('layouts.sidebar')

<div class="page-wrapper">
<div class="content container-fluid">
<div class="row">
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="breadcrumb-path mb-4">

<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="head-link-set">
    
<ul>
<li><a class="active" href="#">Jobs</a></li>
<li><a href="{{url('employee-team.html')}}">Candidates</a></li>
<li><a href="{{url('employee-team.html')}}">Interview</a></li>
<li><a href="{{url('employee-office.html')}}">Position</a></li>
<li><a href="{{url('employees/employee')}}">Vacancy</a></li>
</ul>

</div>
</div>
</div>

<form action="/jobs/jobStore" method="POST" enctype="multipart/form-data">
@csrf
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card">
<div class="card-header">
<h2 class="card-titles">Create A New Job</h2>
</div>

<div class="card-body">
<div class="row">
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<select class="form-selected" name="color">
<option selected>Color Of Template</option>
<option value="card board1 fill1 ">Blue </option>
<option value="card board1 fill2 ">Orange</option>
<option value="card board1 fill3 ">Red</option>
<option value="card board1 fill4 ">Green</option>
</select>
</div>
</div>

<div class="row">
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="text" name="company" class="form-control" placeholder="Enter Company's Name">
</div>
</div>
</div>

<div class="row">
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="text" name="position" class="form-control" placeholder="Enter Position">
</div>
</div>
</div>

<div class="row">
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="text" name="amount" class="form-control" placeholder="Enter Salary Range">
</div>
</div>
</div>

<div class="row">
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="text" name="des" class="form-control" placeholder="Enter Descriptions">
</div>
</div>
</div>

<div class="row">
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="text" name="location" class="form-control" placeholder="Job's Location">
</div>
</div>
</div>

<div class="row">
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="file" name="img" class="form-control" placeholder="Enter Image">
</div>
</div>
</div>

</div>
</div>
</div>

<div class="row">
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="form-btn">
<input type="submit" value="SUBMIT" class="btn btn-apply w-auto">
</form>
<a href="#" class="btn btn-secondary w-auto">Cancel</a>
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