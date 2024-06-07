@include('layouts.header')
@include('layouts.sidebar')

<div class="page-wrapper">
<div class="content container-fluid">
<div class="row">
<div class="col-xl-12 col-sm-12 col-12">
<div class="breadcrumb-path mb-4">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html"><img src="{{url('assets/img/dash.png')}}" class="mr-2" alt="breadcrumb" />Home</a>
</li>
<li class="breadcrumb-item active"> Permissions</li>
</ul>
<h3>Permissions</h3>
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 ">
<div class="row">

<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card ">
<div class="card-header">
<h2 class="card-titles">Permissions</h2>
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
<div class="card-body">
<div class="row">
<div class="col-xl-12 col-sm-6 col-12 ">
    <form action="/setnew/settingstore" method="POST">
        @csrf

<div class="col-xl-12 col-sm-6 col-12 ">
<div class="form-group">
<label>Name </label>
<input type="text" class="form-control" name="name" style="height:69px">
</div>
</div>

<div class="col-xl-12 col-sm-6 col-12 ">
<div class="form-group">
<label>Employee ID </label>
<input type="text" class="form-control" name="emp_id" style="height:69px">
</div>
</div>

<div class="col-xl-12 col-sm-6 col-12 ">
<div class="form-group">
<label>ROLE</label>
<select name="role">
<option selected>Choose Role</option>  
<option value = "2">Admin</option>
<option value = "1">Employee</option>
</select>
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


@include('layouts.footer')


</html>