@include('layouts.header')
@include('layouts.sidebar')
<div class="page-wrapper">
<div class="content container-fluid">
<div class="row">
<div class="col-xl-12 col-sm-12 col-12">

<div class="col-xl-12 col-sm-12 col-12 mb-12">
<div class="row">
<div class="col-xl-12 col-sm-12 col-12 ">
<label class="employee_count">
   <center> Total Number Of Candidates:- {{$recruits->count()}}</label></center>
</div>
</div>
</div><br>

<div class="col-xl-12 col-sm-12 col-12 mb-4">
<br><div class="card">
<div class="table-heading">
<h2>All Details of Employee</h2>
</div>
<div class="table-responsive">
<table class="table  custom-table no-footer">
<thead>
<tr>
<th>Sr. No.</th>
<th>Resume</th>
<th>Delete</th>
<th>Name</th>
<th>Startig Date</th>
<th>Email</th>
<th>Phone No.</th>
<th>Organizations worked for?</th>
<th>Experience</th>
</tr>
</thead>

<tbody>
@foreach($recruits as $recruit)
<tr>
<td>{{$loop->index+1}}</td>
<td><a href="/jobPic/{{$recruit->resume}}" alt= "profile" >Download Resume<a></td>
<td>
<a href="/recruitments/{{$recruit->id}}/deleteRecruit"><img src="{{url('assets\img\delete.png')}}" width="25px"></a></td>
<td>{{$recruit->fname}}{{$recruit->lname}}</td>
<td>{{$recruit->sdate}}</td>
<td>{{$recruit->email}}</td>
<td>{{$recruit->phone}}</td>
<td>{{$recruit->org}}</td>
<td>{{$recruit->exp}}</td>

</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
@include('layouts.footer')
</html>