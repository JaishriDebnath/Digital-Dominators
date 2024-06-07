
<body>
@include('layouts.header')
@include('layouts.sidebar')
<div class="page-wrapper">
<div class="content container-fluid">


<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="head-link-set">

<a class="btn-add" href="/jobs/add-jobs" ><i data-feather="plus"></i> Add Jobs</a>
</div>
</div>


<div class="row ">
@foreach($jobs as $job)
<div class="col-xl-6 col-sm-6 col-6">
<div class="card">
<div class="{{$job->color}} "><!---color--->
<div class="card-body" >
<div class="card_widget_header">
<h5 style="color:white;width: 200px;font-family:Arial;"><b>{{$job->company}}</b></h5><br><br>
<i class="fas fa-briefcase" style="width: 200px;">&nbsp;&nbsp;{{$job->position}}</i><br><br>
<i class="fas fa-map-marker-alt" style="width: 200px;">&nbsp;&nbsp;{{$job->location}}</i><br><br>
<span style="width: 200px;">&#8377;&nbsp;&nbsp;<b>{{$job->amount}}</b><br><br>
<details><summary>Show/Hide</summary>
<p style="width:200px;"> {{$job->des}}</p>
</details><br>
<a href="/recruitments/add-recruit"  class="btn btn-info">Apply Now</a>
</div>
<div>
<img src="/JobPic/{{$job->img}}"  alt="card-img" style="width:80px;height: 100px;">
</div>

</div>
</div>
</div>
</div>
@endforeach


</div>
</div>
</div>
@include('layouts.footer')
</body>
</html>