@include('layouts.header')
@include('layouts.sidebar')
<div class="page-wrapper">
<div class="row">
<div class="content container-fluid">
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card">
<div class="card-header">
<h2 class="card-titles">Gallary</h2>


@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
</div>
@endif
@if(session('wsuccess'))
<div class="alert alert-success">
    {{session('wsuccess')}}
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
</div>
@endif
@if(session('error'))
<div class="alert alert-danger">
    {{session('error')}}
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
</div>
@endif
@if(session('werror'))
<div class="alert alert-danger">
    {{session('werror')}}
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
</div>
@endif
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 mb-4" >
<div class="head-link-set" >
<ul>
<li><a  href="{{url('/setnew/manage')}}">Enter Data</a></li>
<li><a class="active" href="#">View Gallery</a></li>
<li><a href="{{url('/setnew/contact')}}">View Contact</a></li>
</ul>
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="row">
<div class="col-xl-12 col-sm-12 col-12">
<div class="card ">
<div class="card-header">
<h2 class="card-titles">Set Gallary</h2>

</div>
<div class="card-body">
<div class="table-responsive">
<table class="table  custom-table no-footer border">
<thead>
<tr>
<th>SR NO.</th>
<th>Gallary Picture</th>
<th>Delete</th>
</tr>
</thead>

<tbody>
    @foreach($gallaries as $gallary)
<tr>
<td>{{$loop->index+1}}</td>   
<td ><img src ="/Gallary/{{$gallary->gallary}}" style="width:80px;height: 80px;"></td>
<td><label><a href="/setnew/deletegallary/{{$gallary->id}}" class="action_label4" data-toggle="modal" data-target="#delete">Delete <i data-feather="trash-2"></i></a></label></td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>


 </tbody>
</table>

</body>
</div>
</div>


</div>
</div>
</div>
</div>
</div>