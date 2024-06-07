@include('layouts.header')
@include('layouts.sidebar')

<div class="page-wrapper">
<div class="content container-fluid">
<div class="row">
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="breadcrumb-path mb-4">
<ul class="breadcrumb">
<li class="breadcrumb-item"><img src="{{url('assets/img/dash.png')}}" class="mr-2" alt="breadcrumb">Home
</li>
<li class="breadcrumb-item active"> Employee Leave Details</li>
</ul>
<h3>Leaves	</h3>

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



<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="row">
<div class="col-xl-12 col-sm-12 col-12">
<div class="card ">
<div class="card-header">
<h2 class="card-titles">Leave Details</h2>

</div>
<div class="card-body">
<div class="table-responsive">
<table class="table  custom-table no-footer border">
<thead>
<tr>
<th>SR NO.</th>
<th>Employee Name</th>
<th>Span of Day</th>
<th>Leave Type </th>
<th>Total Leave</th>
<th>From	</th>
<th>To</th>
<th>Remaining Days	</th>
<th>Reason For Leave</th>
<th>Action</th>
</tr>
</thead>

<tbody>
    @foreach($empleaves as $leaves)
<tr id="row_tag_{{$leaves->id}}">
<td>{{$loop->index+1}}</td>   
<td>{{$leaves->name}}</td>
<td>{{$leaves->span}}</td>
<td>{{$leaves->type}}</td>
<td>{{$leaves->tl}}</td>
<td>{{$leaves->from}}</td>
<td>{{$leaves->to}}</td>
<td>{{$leaves->remain}}</td>
<td>{{$leaves->reason}}</td>
    
    <td><a href="/leave/addempleave/{{$leaves->emp_id}}" id="approve" class="btn btn-info">Approve</a></td>
    <td><a href="/leave/rejectempleave/{{$leaves->emp_id}}" id="delete" class="btn btn-danger">Reject</a></td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card ">
<div class="card-header">
<h2 class="card-titles">Work From Home Details</h2>
@if(session('wsuccess'))
<div class="alert alert-success">
    {{session('wsuccess')}}
</div>
@endif
@if(session('werror'))
<div class="alert alert-success">
    {{session('werror')}}
</div>
@endif
</div>
<div class="card-body p-0">
<div class="table-responsive">
<table class="table  custom-table  no-footer">
<thead>
<tr>
<th>SR NO.</th>
<th>Employee Name</th>
<th>Span of Day</th>
<th>Leave Type </th>
<th>Total Leave</th>
<th>From	</th>
<th>To</th>
<th>Remaining Days	</th>
<th>Reason For Leave</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach($wfhs as $leaves)

<tr id="row_tag_{{$leaves->id}}">
<td>{{$loop->index+1}}</td>
<td>{{$leaves->wname}}</td>
<td>{{$leaves->wspan}}</td>
<td>{{$leaves->wtype}}</td>
<td>{{$leaves->wtl}}</td>
<td>{{$leaves->wfrom}}</td>
<td>{{$leaves->wto}}</td>
<td>{{$leaves->wremain}}</td>
<td>{{$leaves->wreason}}</td>

<td ><a href="/leave/addempwfh/{{$leaves->wemp_id}}" id="wapprove" class="btn btn-info">Approve</a>
</td>
<td ><a href="/leave/rejectwfhleave/{{$leaves->wemp_id}}"  id="wdelete" class="btn btn-danger">Reject</a>
</td>


</tr>

@endforeach

 </tbody>
</table>
</div>
</div>
</div>
</div>
</body>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function () {
    $.ajaxSetup({ //cmat
        headers:{
            'x-csrf-token': $('meta[name="csrf-token"]').attr('content') 
        }
    });

    $("#approve").on('click','#approve',function(){
        $("#approve").replaceWith("Approved");
      
    });
    $("#wapprove").on('click','#wapprove',function(){
        $("#wapprove").replaceWith("Submitted");
    
    });

$("#delete").on('click','#delete', function () {
   
        $("#delete").replaceWith("Rejected");
   

});
$("#wdelete").on('click','#wdelete', function () {
  
        $("#wdelete").replaceWith("Rejected");


});

});

</script>
@include('layouts.footer')
</body>
</html>
</div>
</div>
</div>
</div>
</div>

</div>


@include('layouts.footer')
</body>
</html>