@include('layouts.header')

@include('layouts.sidebar')
<meta name="csrf-token" content="{{csrf_token()}}">
<div class="page-wrapper">
<div class="content container-fluid">

<div class="row">
<div class="col-xl-12 col-sm-12 col-12 d-flex">
<div class="card card-lists flex-fill">
<div class="card-header">
<h2 class="card-titles">Active Leaves</h2>
<a class="edit-link" data-toggle="modal" data-target="#editmember"> <i data-feather="edit"></i></a>
</div>
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="head-link-set">
<ul>
<li><a href="{{url('leave/leaveCreate')}}">Create Leave</a></li>
<li><a href="{{url('leave/empleave')}}">view Leaves</a></li>
<li><a class="active" href="#">Add Work From Home</a></li>
</ul>

</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card">
<div class="card-header">
<h2 class="card-titles">Apply Leaves</h2>
</div>
<form method="POST" action="/leave/wfhleaveStore">
    @csrf
<div class="form-creation">
<div class="col-xl-6 col-sm-6 col-12 ">
<div class="form-group">
<label>Employee ID</label>
<input type="text" name="wemp_id"  class="form-control">
</div>
</div>
<div class="col-xl-6 col-sm-6 col-12 ">
<div class="form-group">
<label>Name</label>
<input type="text" name="wname"  class="form-control">
</div>
</div>
<div class="col-xl-6 col-sm-6 col-12 ">
<div class="form-group">
<label>Leave Span<span class="mandatory">*</span> </label>
<select class="select" name="wspan">
<option selected>Select leave</option>
<option value="Half Day">Half Day</option>
<option value="Full Day">Full Day</option>
</select>
</div>
</div>

<div class="col-xl-6 col-sm-6 col-12 ">
<div class="form-group">
<label>Leave Type <span class="mandatory">*</span> </label>
<select class="select" name="wtype" >
<option selected>Select leave</option>
<option value="cl">Casual leave</option>
<option value="el">Earned leave</option>
</select>
</div>
</div>
<div class="col-xl-6 col-sm-6 col-12 ">
<div class="form-group">
<label>Total Leaves</label>
<input type="text" name="wtl"  class="form-control">
</div>
</div>

<div class="col-xl-6 col-sm-6 col-12 ">
<div class="form-group">
<label>Remaining Leaves</label>
<input type="text" name="wremain" class="form-control" >
</div>
</div>

<div class="col-xl-6 col-sm-6 col-12 ">
<div class="form-group">
<label>From </label>
<input type="date" name="wfrom" class="form-control" style="height: 69px;">
</div>
</div>

<div class="col-xl-6 col-sm-6 col-12 ">
<div class="form-group">
<label>To</label>
<input type="date" name="wto" class="form-control" style="height: 69px;">
</div>
</div>



<div class="col-xl-12 col-sm-12 col-12 ">
<div class="form-group">
<label>Reason For Leave </label>
<input type="text" name="wreason" class="form-control">
</div>
</div>
<center>
    <div class="row">
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="form-btn">
<input type="submit" class="btn btn-apply" style="height:60px;width: 200px;">
</div>
</center>

</form>
</div>
</div>
</div>
</div>


</div>
@include('layouts.footer')
</body>
</html>