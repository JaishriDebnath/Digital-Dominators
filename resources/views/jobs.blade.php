

@include('layouts.Main')
@include('layouts.MainHeader')



    <body>
        <section>
        @if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
</div>
@endif

<div class="row mb-4">
@foreach($jobs as $job)
<div class="col-xl-6 col-sm-6 col-6">
<div class="card" >
<div class="{{$job->color}} "><!---color--->
<div class="card-body">
<div class="card_widget_header">
<h5 style="color:white;width: 500px;"><b>{{$job->company}}</b></h5><br><br>
<i class="fas fa-briefcase" style="color:white;width: 500px;">&nbsp;&nbsp;{{$job->position}}</i><br><br>
<i class="fas fa-map-marker-alt" style="color:white;width: 500px;">&nbsp;&nbsp;{{$job->location}}</i><br><br>
<span style="color:white;width: 200px;">&#8377;&nbsp;&nbsp;<b>{{$job->amount}}</b><br><br>
<details><summary style="color:white;">Show/Hide</summary>
<p style="color:white;width: 500px;"> {{$job->des}}</p>
</details><br>
<a href="/recruitments/add-recruit"  class="btn btn-info">Apply Now</a>
</div>

<br><img src="/JobPic/{{$job->img}}"  alt="card-img" style="width:80px;height: 100px;">


</div>
</div>
</div>
</div>

@endforeach

</div>
</section>
@include('layouts.MainFooter')
</body>
</html>