<body>
@include('layouts.header')
@include('layouts.sidebar')

@notifyCss
<div class="page-wrapper">
<div class="content container-fluid">

<div class="row">
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="breadcrumb-path ">
<ul class="breadcrumb">
<li class="breadcrumb-item"><img src="{{url('assets/img/dash.png')}}" class="mr-2" alt="breadcrumb">Home</a>
</li>
<li class="breadcrumb-item active"> All Details of Employee</li>
</ul>
<h3>All Details of Employee</h3>
</div>
</div>
</div>
<br>
<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="head-link-set">
<ul>
<li><a class="active" href="#">View All Employee</a></li>
<li><a href="{{url('employees/add-employee')}}">Create Employee</a></li>
</ul>
</div>
</div>

<body>
<div class="col-xl-12 col-sm-12 col-12 mb-4">
<br><div class="card">
<div class="table-heading">
<h2>All Details of Employee</h2>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table  custom-table no-footer">
<thead>
<tr>
<th>Sr. No.</th>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QR</th>
<th>Edit</th>
<th>Image</th>
<th>Name</th>
<th>Employee ID</th>
<th>Branch</th>
<th>Job Title</th>
<th>Period</th>
<th>Salary</th>
<th>Frequency</th>
<th>Startig Date</th>
<th>Email</th>
<th>Phone No.</th>
<th>Address</th>
<th>State</th>
<th>City</th>
<th>Zip Code</th>
<th>Gender</th>
</tr>
</thead>

<tbody>
@foreach($employeedatas as $employee)
<tr>
<td>{{$loop->index+1}}</td>
<td>
{!!$qrcode=QrCode::size(150)->generate(
   "$employee->emp_id"
    );!!}
</td>
<td>
<a href="/employees/{{$employee->id}}/edit-employee"><img src="{{url('assets\img\edit.png')}}" width="25px"></a>
<td><img src="/employeePic/{{$employee->img}}" alt="profile" width="50px" class="avatar-img rounded-circle" /></td>
<td>{{$employee->fname}}{{$employee->lname}}</td>
<td>{{$employee->emp_id}}</td>
<td>{{$employee->branch}}</td>
<td>{{$employee->job}}</td>
<td>{{$employee->period}}</td>
<td>{{$employee->salary}}</td>
<td>{{$employee->freq}}</td>
<td>{{$employee->sdate}}</td>
<td>{{$employee->email}}</td>
<td>{{$employee->phone}}</td>
<td>{{$employee->address}}</td>
<td>{{$employee->state}}</td>
<td>{{$employee->city}}</td>
<td>{{$employee->zip}}</td>
<td>{{$employee->gender}}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>

<div class="card-footer">
{{$employeedatas->links()}}
</div>

</div>
</div>
</div>
</div>
</div>
<x-notify::notify />
        @notifyJs
</div>
@include('layouts.footer')
</body>
</html>