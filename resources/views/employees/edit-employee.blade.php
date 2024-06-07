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
<li><a class="active" href="#">Basic Details & Salary</a></li>
<li><a href="{{url('employees/employee-personal-detail')}}">Personal Details</a></li>
<li><a href="{{url('employees/employee')}}">View</a></li>

</ul>
</div>
</div>
</div>

<form action="/employees/{{$employeedatas->id}}/employeeUpdate" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card">
<div class="card-header">
<h2 class="card-titles">Edit Basic Details </h2>
</div>
<div class="card-body">
<div class="row">
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="text" name="fname" class="form-control" Value="{{old('fname',$employeedatas->fname)}}">
</div>
</div>
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="text" name="lname" class="form-control" Value="{{old('lname',$employeedatas->lname)}}">
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="text" name="emp_id" class="form-control" Value="{{old('emp_id',$employeedatas->emp_id)}}">
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="email" name="email" style="height:69px;" class="form-control" Value="{{old('email',$employeedatas->email)}}">
</div>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card ">
<div class="card-header">
<h2 class="card-titles">Edit Employment Details</h2>
</div>

<div class="card-body">
<div class="row">
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="text" name="branch" class="form-control" Value="{{old('branch',$employeedatas->branch)}}">
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="text" class="form-control" name="job" Value="{{old('job',$employeedatas->job)}}">
</div>
</div>
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="text" name="period" class="form-control" Value="{{old('period',$employeedatas->period)}}">
</div>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card">
<div class="card-header">
<h2 class="card-titles">Edit Salary Details</h2>
</div>
<div class="card-body">
<div class="row">
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="text" class="form-control" name="salary" Value="{{old('salary',$employeedatas->salary)}}">
</div>
</div>
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="text" name="freq" class="form-control" Value="{{old('freq',$employeedatas->freq)}}">

</div>
</div>
</div>
<div class="row">
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="form-group">
<input type="text" style="height:69px;" class="form-control"  name="sdate" Value="{{old('sdate',$employeedatas->sdate)}}">
</div>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card ">
<div class="card-header">
<h2 class="card-titles">Edit Personal Details of Empoyee</h2>
</div>

<!-- Text input-->

<div class="card-body">
<div class="row">
<div class="form-group">
    <div class="col-xl-12 col-sm-12 col-12 ">
         <input name="phone" Value="{{old('phone',$employeedatas->phone)}}" class="form-control" type="text">
  </div>
</div>
<br>

<!-- Text input-->
      
<div class="form-group">
    <div class="col-xl-12 col-sm-12 col-12 ">
        <input name="address" Value="{{old('address',$employeedatas->address)}}" class="form-control" type="text">
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
    <div class="col-xl-12 col-sm-12 col-12 ">
    <input type="text" Value="{{old('state',$employeedatas->state)}}" name="state"class="form-control" >

</div>
</div>

<!-- Text input--> 
 
<div class="form-group">
    <div class="col-xl-12 col-sm-12 col-12 ">
        <input name="city" Value="{{old('city',$employeedatas->city)}}" class="form-control"  type="text">
  </div>
</div>

<!-- Text input-->

<div class="form-group">
    <div class="col-xl-12 col-sm-12 col-12 ">
        <input name="zip" Value="{{old('zip',$employeedatas->zip)}}" class="form-control"  type="text">
</div>
</div>
<div class="form-group">
<div class="col-xl-12 col-sm-12 col-12 ">
    <input type="file" name="img" style="height: 69px;" Value="{{old('img',$employeedatas->img)}}" class="form-control"  type="file">
</div>
</div>
  <br>

<!-- radio checks -->
 <div class="form-group">
<div class="row">
                       <br> <label class="col-md-6 control-label">Sex/Gender</label><br>
                            <div class="radio">                                        
                                    <input type="radio" name="gender" value="Male" /> Male
                           
                                    <input type="radio" name="gender" value="Female" /> Female
                            </div>
                        </div>
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
</div>
@include('layouts.footer')
</body>
</html>