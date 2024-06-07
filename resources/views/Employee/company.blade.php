@include('layouts.empsidebar')

<div class="page-wrapper">
<div class="content container-fluid">
<div class="row">
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="breadcrumb-path mb-4">
<ul class="breadcrumb">
<li class="breadcrumb-item"><img src="{{url('assets/img/dash.png')}}" class="mr-2" alt="breadcrumb">Home
</li>
<li class="breadcrumb-item active"> Company</li>
</ul>
<h3>Company	</h3>
</div>
</div>
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="row">
<div class="col-xl-8 col-sm-12 col-12 d-flex ">
<div class="card card-lists flex-fill">
<div class="card-header">
<h2 class="card-titles">Digital Dominators</h2>
</div>
<div class="card-body">
<div class="row">
<div class="col-xl-6 col-sm-12 col-12 d-flex ">
<div class="member-registor flex-fill">
<ul>
<li>
<label>Register Number</label>
<span>FT0070</span>
</li>
<li>
<label>Incorporation Date</label>
<span>07 May 2000</span>
</li>
<li>
<label>VAT Number</label>
<span>VT0070</span>
</li>
</ul>
</div>
</div>
<div class="col-xl-6 col-sm-12 col-12 d-flex">
<div class="member-address flex-fill">
<label>Address</label>
<span>{{$contacts->address}}</span>
</div>
</div>
</div>

</div>
</div>
</div>
<div class="col-xl-4 col-sm-12 col-12 d-flex">
<div class="card  flex-fill">
<div class="card-header">
 <h2 class="card-titles">Digital Dominators</h2>
</div>
<div class="card-body">
<div class="row">
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="member-edits">
<ul>
<li>
<label>{{$contacts->phone}}</label>
</li>
<li>
<label>{{$contacts->url}}</label>
</li>
<li>
<label>{{$contacts->email}}</label>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card card-lists ">
<div class="card-header">
<h2 class="card-titles">Company Policies</h2>
</div>
<div class="card-body p-0">
<div class="table-responsive">
<table class="table  custom-table  no-footer">
<thead>
<tr>
<th>PDF</th>
<th>Name</th>
<th>Date</th>
</tr>
</thead>
<tbody id="list">
    @foreach($companyinfos as $companyinfo)
<tr id="row_{{$companyinfo->id}}">
<td>
<div class="table-img">
<a href="/Policy/{{$companyinfo->pdf}}" ><img src="{{url('assets/img/pdf.png')}}" alt="pdf">
</div>
</td>
<td>{{$companyinfo->name}}</td>
<td>{{$companyinfo->created_at}}</td>
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


</body>
</html>