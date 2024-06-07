@include('layouts.header')
@include('layouts.sidebar')
<meta name="csrf-token" content="{{csrf_token()}}">
<div class="page-wrapper">
<div class="content container-fluid">

<div class="row">
<div class="col-xl-12 col-sm-12 col-12 mb-4 d-flex">
<div class="card card-lists flex-fill">
<div class="card-header">
<h2 class="card-titles">Manage Index Page </span></h2>
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

</div>
@endif
</div>
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 mb-4" >
<div class="head-link-set" >
<ul>
<li><a class="active" href="#">Enter Data</a></li>
<li><a href="{{url('/setnew/gallary')}}">View Gallery</a></li>
<li><a href="{{url('/setnew/contact')}}">View Contact</a></li>
</ul>
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card">
<div class="card-header">
<h2 class="card-titles">Set Contacts</h2>
</div>
<form method="POST" action="/setnew/contactStore">
    @csrf

<div class="card-body">
    <div class="row">
<div class="col-xl-6 col-sm-6 col-12 ">
<div class="form-group">
<label>Address</label>
<input type="text" name="address"  class="form-control">
</div>
</div>
<div class="col-xl-6 col-sm-6 col-12 ">
<div class="form-group">
<label>Phone No.</label>
<input type="text" name="phone"  class="form-control" minlength="10">
</div>
</div>
<div class="col-xl-6 col-sm-6 col-12 ">
<div class="form-group">
<label>Email Address</label>
<input type="email" name="email"  class="form-control" style="height:69px;">
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label>FAX No. </label>
<input type="text" name="fax" class="form-control">
</div>
</div>
    </div>
    <div class="row">
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="form-group">
<label>Website URL</label>
<input type="url" name="url" class="form-control" style="height:69px;">
</div>
</div>
</div>
</div>
<div class = "row">
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="form-btn">
    <center>
<input type="submit" class="btn btn-apply" style="height:60px;width: 200px;">
    </center><br>
</div>
</div>
</div>

</form>
</div>
</div>


<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card">
<div class="card-header">
<h2 class="card-titles">Gallary</h2>
</div>
<form method="POST" action="/setnew/managestore" enctype="multipart/form-data">
    @csrf

<div class="card-body">
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="form-group">
<label>Choose Gallary Image</label>
<input type="file" name="gallary"  class="form-control">
</div>
</div>
<div class = "row">
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


@include('layouts.footer')
</body>
</html>