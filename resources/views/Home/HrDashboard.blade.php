@include('layouts.header')
@include('layouts.sidebar')
<head>
    <style>
             /* Custom, iPhone Retina */ 
    @media only screen and (min-width : 320px) {
        
    }

    /* Extra Small Devices, Phones */ 
    @media only screen and (min-width : 480px) {

    }

    /* Small Devices, Tablets */
    @media only screen and (min-width : 768px) {

    }

    /* Medium Devices, Desktops */
    @media only screen and (min-width : 992px) {

    }

    /* Large Devices, Wide Screens */
    @media only screen and (min-width : 1200px) {

    }



    /*==========  Non-Mobile First Method  ==========*/

    /* Large Devices, Wide Screens */
    @media only screen and (max-width : 1200px) {

    }

    /* Medium Devices, Desktops */
    @media only screen and (max-width : 992px) {

    }

    /* Small Devices, Tablets */
    @media only screen and (max-width : 768px) {

    }

    /* Extra Small Devices, Phones */ 
    @media only screen and (max-width : 480px) {

    }

    /* Custom, iPhone Retina */ 
    @media only screen and (max-width : 320px) {
        
    }
    
    
    
/*=====================================================
=            Bootstrap 2.3.2 Media Queries            =
=====================================================*/
@media only screen and (max-width : 1200px) {

}

@media only screen and (max-width : 979px) {

}

@media only screen and (max-width : 767px) {

}

@media only screen and (max-width : 480px) {

}

@media only screen and (max-width : 320px) {

}


    /* default styles here for older browsers. 
       I tend to go for a 600px - 960px width max but using percentages
    */
    @media only screen and (min-width:960px){
        /* styles for browsers larger than 960px; */
    }
    @media only screen and (min-width:1440px){
        /* styles for browsers larger than 1440px; */
    }
    @media only screen and (min-width:2000px){
        /* for sumo sized (mac) screens */
    }
    @media only screen and (max-device-width:480px){
       /* styles for mobile browsers smaller than 480px; (iPhone) */
    }
    @media only screen and (device-width:768px){
       /* default iPad screens */
    }
    /* different techniques for iPad screening */
    @media only screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait) {
      /* For portrait layouts only */
    }

    @media only screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape) {
      /* For landscape layouts only */
    }

  /*******Nuevos mensajes de error******/
  
.new-message-box {
    margin: 15px 0;
    padding-left: 20px;
    margin-bottom: 25px!important;
}

.new-message-box p{
    font-size:1.50em;
    font-weight: 600;
}

.info-tab {
    width: 40px;
    height: 40px;
    display: inline-block;
    position: relative;
    top: 8px;
}

.info-tab {
    float: left;
    margin-left: -23px;
}

.info-tab i::before {
    width: 24px;
    height: 24px;
    box-shadow: inset 12px 0 13px rgba(0,0,0,0.5);
}

.info-tab i::after {
    width: 0;
    height: 0;
    border: 12px solid transparent;
    border-bottom-color: #fff;
    border-left-color: #fff;
    bottom: -18px;
}

.info-tab i::before, .info-tab i::after {
    content: "";
    display: inline-block;
    position: absolute;
    left: 0;
    bottom: -17px;
    transform: rotateX(60deg);
}

.note-box, .warning-box, .tip-box-success, .tip-box-danger, .tip-box-warning, .tip-box-info, .tip-box-alert {
    padding: 12px 8px 3px 26px;
}


/***Success****/

.new-message-box-success {
    background: #eeeeee;
    padding: 3px;
    margin: 10px 0;
}

.tip-icon-success {
    background: #8BC34A;
}

.tip-box-success {
    color: #33691E;
    background: #DCEDC8;
}

.tip-icon-success::before {
    font-size: 25px;
    content:"\f00c";
    top: 8px;
    left: 11px;
    font-family: FontAwesome;
    position: absolute;
    color: white;
}

.tip-icon-success i::before {
    background: #8BC34A;
}


/*******Danger*******/
.new-message-box-danger {
    background: #eeeeee;
    padding: 3px;
    margin: 10px 0;
}

.tip-icon-danger {
    background: #f44336;
}

.tip-box-danger {
    color: #b71c1c;
    background: #FFCCBC;
}

.tip-icon-danger::before {
    font-size: 25px;
    content:"\f00d";
    top: 8px;
    left: 11px;
    font-family: FontAwesome;
    position: absolute;
    color: white;
}

.tip-icon-danger i::before {
    background: #f44336;
}

/*******warning*******/
.new-message-box-warning {
    background: #eeeeee;
    padding: 3px;
    margin: 10px 0;
}

.tip-icon-warning {
    background: #FFEB3B;
}

.tip-box-warning {
    color: #212121;
    background: #FFF9C4;
}

.tip-icon-warning::before {
    font-size: 25px;
    content:"\4c";
    top: 8px;
    left: 11px;
    font-family: FontAwesome;
    position: absolute;
    color: #212121;
}

.tip-icon-warning i::before {
    background: #FFEB3B;
}

/*******info*******/
.new-message-box-info {
    background: #eeeeee;
    padding: 3px;
    margin: 10px 0;
}

.tip-box-info {
    color: #01579B;
    background: #B3E5FC;
}

.tip-icon-info {
    background: #03A9F4;
}

.tip-icon-info::before {
    font-size: 25px;
    content:"\57";
    top: 8px;
    left: 11px;
    font-family: FontAwesome;
    position: absolute;
    color: white
}

.tip-icon-info i::before {
    background: #03A9F4;
}


/*******info*******/
.new-message-box-alert {
    background: #FF6F00;
    padding: 3px;
    margin: 10px 0;
}

.tip-box-alert {
    color: #212121;
    background: #FFF8E1;
}

.tip-icon-alert {
    background: #FF6F00;
}

.tip-icon-alert::before {
    font-size: 25px;
    content:"\f06a";
    top: 8px;
    left: 11px;
    font-family: FontAwesome;
    position: absolute;
    color: white
}

.tip-icon-alert i::before {
    background: #FF6F00;
}

body {
  background-color:#ffffff;
}

    </style>
</head>

<div class="page-wrapper">
<div class="content container-fluid">

<div class="row mb-4">
<div class="col-xl-12 col-sm-12 col-12">
<div class="breadcrumb-path ">
<ul class="breadcrumb">
<li class="breadcrumb-item"><img src="{{url('assets/img/dash.png')}}" class="mr-3" alt="breadcrumb" />Home</li>
<li class="breadcrumb-item active">Dashboard</li>
</ul>
<h3>HR Dashboard</h3>
</div>
</div>
</div>
<div class="row mb-4">
<div class="col-xl-6 col-sm-6 col-12">
<a class="btn-dash" href="#"> Admin Dashboard</a><br>
</div>
<div class="col-xl-6 col-sm-6 col-12">
<a class="btn-dash" href="{{url('/auth')}}">Employee Dashboard</a>
</div>
</div>

<div class="row mb-4">
<div class="col-xl-6 col-sm-6 col-12">
<div class="card board1 fill1 ">
<div class="card-body">
<div class="card_widget_header">
    @php 
    $employee = App\Models\Employeedata::all(); 
    @endphp
<label>Employees</label>
<h4>{{$employee->count()}}</h4>
</div>
<div class="card_widget_img">
<img src="{{url('assets/img/dash1.png')}}" alt="card-img" />
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-sm-6 col-12">
<div class="card board1 fill2 ">
<div class="card-body">
<div class="card_widget_header">
<label>Companies</label>
<h4>30</h4>
</div>
<div class="card_widget_img">
<img src="{{url('assets/img/dash2.png')}}" alt="card-img" />
</div>
</div>
</div>
</div>
</div>

<div class="row mb-4">
<div class="col-xl-6 col-sm-6 col-12">
<div class="card board1 fill3 ">
<div class="card-body">
<div class="card_widget_header">
<label>Leaves</label>
<h4>9</h4>
</div>
<div class="card_widget_img">
<img src="{{url('assets/img/dash3.png')}}" alt="card-img" />
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-sm-6 col-12">
<div class="card board1 fill4 ">
<div class="card-body">
<div class="card_widget_header">
<label>Salary</label>
<h4>$5.8M</h4>
</div>
<div class="card_widget_img">
<img src="{{url('assets/img/dash4.png')}}" alt="card-img" />
</div>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 d-flex">
<div class="card card-list flex-fill">
<div class="card-header ">
<h4 class="card-title"><b>Recent Activities</b>&nbsp;
@if($empleave->count() == 0 && $wfhleave->count() == 0 && $recruits->count() == 0)
@else
<button type="button" class="btn btn-success">+{{$empleave->count()+$wfhleave->count()+$recruits->count()}}&nbsp;New</button></h4>
@endif 
</div>

<div class="card-body">

@if($empleave->count() == 0 && $wfhleave->count() == 0 && $recruits->count() == 0)
<h3 style="text-align: center;color:#DCEDC8;height: 80px;">
<br>No Notifications</h3>
@else
<div class="container-fluid ">
@foreach($empleave  as $notification) 

<div class="row">
            <div class="col-xs-12 col-sm-12 col-sm-offset-12">  
                            <div class="new-message-box">
                                <div class="new-message-box-warning">
                                    <div class="info-tab tip-icon-warning" title="error"><i></i></div>
                                    <div class="tip-box-warning">
                            <p>{{$notification->name}} Requested For Leave &nbsp;
                            <a class="btn btn-sm" href="/markasread/{{$notification->id}}"> <button type="button" class="btn btn-info">Read</button></a>
                            <span></span>
                            <span></span>
                            </p></div>
</div>
</div>

</div>
</div>
@endforeach



@foreach($wfhleave as $notification) 
<div class="row">
            <div class="col-xs-12 col-sm-12 col-sm-offset-3"> 

                            <div class="new-message-box">
                                <div class="new-message-box-info">
                                    <div class="info-tab tip-icon-info" title="error"><i></i></div>
                                    <div class="tip-box-info">
                            <p>{{$notification->wname}} Requested For Leave &nbsp;
                            <a class="btn btn-sm" href="/wfhmarkasread/{{$notification->id}}"> <button type="button" class="btn btn-info">Read</button></a>
                            <span></span>
                            <span></span>
                            </p></div>
</div>
</div>
</div>
</div>

@endforeach

@foreach($recruits as $notification) 
<div class="row">
            <div class="col-xs-12 col-sm-12 col-sm-offset-3"> 

                            <div class="new-message-box">
                                <div class="new-message-box-alert">
                                    <div class="info-tab tip-icon-alert" title="error"><i></i></div>
                                    <div class="tip-box-alert">
                            <p>{{$notification->fname.$notification->lname}} Send Application &nbsp;
                            <a class="btn btn-sm" href="/markasreadRec/{{$notification->id}}"> <button type="button" class="btn btn-info">Read</button></a>
                            <span></span>
                            <span></span>
                            </p></div>
</div>
</div>
</div>
</div>

@endforeach

</div>
@endif
</div>
</div>
</div>
</div>
@include('layouts.footer')


</body>
</html>





