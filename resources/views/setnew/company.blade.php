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
<h2 class="card-titles">Company Policies </h2>
<a class="btn btn-new" id="add-tag" data-toggle="modal" data-target="#addcompany">Add Document</a>

</div>
<div class="card-body p-0">
<div class="table-responsive">
<table class="table  custom-table  no-footer">
<thead>
<tr>
<th>PDF</th>
<th>Name</th>
<th>Date</th>
<th>Delete</th>
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
        <td>
        <label><a href="/setnew/infodelete/{{$companyinfo->id}}" class="action_label4" >Delete <i data-feather="trash-2"></i></a></label>
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


<div class="customize_popup" id="addcompanymodal">
<div class="modal fade" id="addcompany" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">

<form id="infoform" action="/setnew/infostore" method="POST" enctype="multipart/form-data">
    @csrf
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="staticBackdropLabel">Add Company Policy</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class=" col-md-12 p-0">
<div class=" form-popup">
<label>Name of Document</label>
<input type="hidden" name="status" Value="send" class="form-control">
<input type="text" name="name" id="name" class="form-control">
</div>

<div class=" form-popup">
<label>Upload File</label>
<input type="file" name="pdf" id="pdf" class="form-control">
</div>
</div>
</div>
<div class="modal-footer">
<button type="submit" id="savebtn" class="btn btn-primary">Add</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
</div>
</div>
</form>

</div>
</div>
</div>




<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function () {
    $.ajaxSetup({ //cmat
        headers:{
            'x-csrf-token': $('meta[name="csrf-token"]').attr('content') 
        }
    });
$("#add_tag").on('click', function () {
    $("#addcompanymodal").modal('show');
    $("#infoform").trigger('reset');
});

$("form").on("submit",function(){
    confirm('are you really want to Submit this...!');
    $.ajax({
        type: "POST",
        url: "http://127.0.0.1:8000/setnew/infostore/",
        data: $("#infoform").serialize(),
    
    }).done(function(res){
    var row  ='<tr id = "row_'+res.id+'">';
        row +='<td>'+res.id+'</td>';
        row +='<td>'+res.name+'</td>';
       row +='<td>'
        + '<button type="button" id="delete_todo" data-id="'+res.id+'" class="btn btn-danger" >Delete</button>' +'</td>';
    
      if($("#id").val()){     //if there is a value in id then
       $("#row"+res.id).replaceWith(row); //for edit
     }else{
       $("#list"+res.id).prepend(row);   //it add data on top of the list if id is empty(no value)
     }
 
    $("#infoform").trigger('reset');
    $("#addcompanymodal").modal('hide'); 
      });
        
    });

});


</script>

</body>
</html>