

@include('layouts.empsidebar')
<meta name="csrf-token" content="{{csrf_token()}}">
<div class="page-wrapper">
<div class="content container-fluid">

<div class="row">
<div class="col-xl-12 col-sm-12 col-12 mb-4 d-flex">
<div class="card card-lists flex-fill">
<div class="card-header">
<h2 class="card-titles">Apply Leaves</span></h2>
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
</div>
</div>



<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card">
<div class="card-header">
<h2 class="card-titles">Apply Leaves</h2>
</div>
<form method="POST" action="/Employee/empleaveStore">
    @csrf
<div class="form-creation">

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label>Employee ID</label>

<input type="text" name="emp_id" value="{{$employees->id}}" class="form-control" readonly>
</div>
</div>
<div class="col-xl-6 col-sm-12 col-12 ">

<div class="form-group">
<label>Name</label>
<input type="hidden" name="status" value="pending" class="form-control">
<input type="text" name="name"  value="{{$employees->fname.$employees->lname}}" class="form-control" readonly>
</div>
</div>
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label>Leave Span<span class="mandatory">*</span> </label>
<select class="select" name="span">
<option selected>Select leave</option>
<option value="Half Day">Half Day</option>
<option value="Full Day">Full Day</option>
</select>
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label>Leave Type <span class="mandatory">*</span> </label>
<select class="select" name="type">
<option selected>Select leave</option>
<option value="cl">Casual leave</option>
<option value="el">Earned leave</option>
</select>
</div>
</div>
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label>Total Leaves</label>
<input type="text" name="tl" value="10" class="form-control" readonly>
</div>
</div>
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label>Remaining Leaves</label>
<input type="text" name="remain" value="2" class="form-control" readonly>
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label>From </label>
<input type="date" name="from" class="form-control" style="height:69px;">
</div>
</div>
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label>To</label>
<input type="date" name="to" class="form-control" style="height:69px;">
</div>
</div>


<div class="col-xl-12 col-sm-12 col-12 ">
<div class="form-group">
<label>Reason For Leave </label>
<input type="text" name="reason" class="form-control">
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


@include('layouts.footer')
</body>
</html>