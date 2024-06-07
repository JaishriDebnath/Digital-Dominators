@include('layouts.header')

@include('layouts.sidebar')

<div class="page-wrapper">
<div class="content container-fluid">
<div class="row">
<div class="col-xl-12 col-sm-12 col-12 ">


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
</div><br>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="text" name="company" class="form-control" placeholder="Enter Company's Name"><br>
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="text" name="position" class="form-control" placeholder="Enter Position">
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="text" name="amount" class="form-control" placeholder="Enter Salary Range">
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="text" name="des" class="form-control" placeholder="Enter Descriptions">
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="text" name="location" class="form-control" placeholder="Job's Location">
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 ">
<div class="form-group">
<input type="file" name="img" class="form-control" placeholder="Enter Image" style="height: 69px;">
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 ">
<div class="form-btn">
<input type="submit" style="text-align: center" value="SUBMIT" class="btn btn-apply w-auto">
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
@include('layouts.footer')
</body>
</html>