@include('layouts.header')
@include('layouts.sidebar')
<div class="page-wrapper">
<div class="content container-fluid">
<div class="row">
<div class="col-xl-12 col-sm-12 col-12">
<div class="breadcrumb-path mb-4">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="{{url('/dashboard')}}"><img src="{{url('assets/img/dash.png')}}" class="mr-2" alt="breadcrumb" />Home</a>
</li>
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="row">
<div class="col-xl-8 col-sm-8 col-12 ">
<label class="employee_count">7 People</label>
</div>
<a class="btn-add" href="{{url('attandance/qrCreate')}}"><i data-feather="plus"></i>Generate New QR</a>
</div>
</div>

<div class="col-xl-12 col-sm-12 col-2 mb-4"><div class="card">
<div class="table-heading">
<h2>All QR Details</h2>
</div>
<div class="table-responsive">
<table class="table  custom-table no-footer">
<thead>
<tr>
<th>SR NO.</th>
<th>Delete</th>
<th>QR</th>
<th>Employee ID</th>
<th>Name</th>
<th>Branch</th>
</tr>
</thead>

<tbody>
@foreach($qrs as $qr)
<tr>
<td>{{$loop->index+1}}</td>
<td><a href="/attandance/{{$qr->id}}/qrDelete"><img src="{{url('assets\img\delete.png')}}" width="25px"></a></td>
<td>
{!!$qrcode=QrCode::size(150)->generate("$qr->emp_id");!!}
</td>
<td>{{$qr->emp_id}}</td>
<td>{{$qr->name}}</td>
<td>{{$qr->branch}}</td>
<td>{{$qr->created_at}}</td>

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

</html>