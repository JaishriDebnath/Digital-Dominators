@include('layouts.header')
@include('layouts.sidebar')

<div class="page-wrapper">
<div class="content container-fluid">
<div class="row">
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="breadcrumb-path mb-4">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="{{url('/dashboard')}}"><img src="assets/img/dash.png" class="mr-2" alt="breadcrumb">Home</a>
</li>
<li class="breadcrumb-item active"> Profile</li>
</ul>
<h3>Profile	</h3>
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="head-link-set">
<ul>
<li><a href="{{url('/payroll/payrollCreate')}}">Pyroll Create</a></li>
<li><a class="active" href="#">Payroll List</a></li>
</ul>

</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="row">
<div class="col-xl-12 col-sm-12 col-12">
<div class="card ">
<div class="card-header">
<h2 class="card-titles">Payroll Details</h2>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table  custom-table no-footer border">
<thead>
<tr>
<th> Name	</th>
<th> Employee ID</th>
<th>Bank Name</th>
<th>Account Number</th>
<th>First Day</th>
<th>Last Day</th>
<th>Download SalarySlip</th>
</tr>
</thead>
@foreach($payrolls as $payroll)
<tr>
<td><label>{{$payroll->name}}</label></td>
<td><label>{{$payroll->emp_id}}</label></td>
<td><label>{{$payroll->bankname}}</label></td>
<td><label>{{$payroll->acc}}</label></td>
<td><label>{{$payroll->fday}}</label></td>
<td><label>{{$payroll->lday}}</label></td>
<td><a href="/payroll/payrollDetails/{{$payroll->emp_id}}">Download PDF</a>
</td>
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
</div>
</div>

</div>


@include('layouts.footer')
</body>
</html>