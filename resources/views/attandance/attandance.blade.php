
<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.header')

@include('layouts.sidebar')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="csrf-token" content="{{csrf_token()}}">
<title>HRM SYSTEM</title>

<link rel="shortcut icon" href="{{url('assets/img/hr-logo.png')}}">

<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{url('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{url('assets/plugins/fontawesome/css/all.min.css')}}">

<link rel="stylesheet" href="{{url('assets/css/style.css')}}">

<!-- *for pagination* -->

<link rel="stylesheet" href="{{ url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css')}}">
<script src="{{ url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js')}}"></script>
        <link rel="stylesheet"
            href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css')}}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T') }} crossorigin="anonymous">
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
                border: 1px solid black;
            }

            table td {
                line-height: 25px;
                padding-left: 15px;
            }

            table th {
                background-color: #fbc403;
                color: #363636;
            }
        </style>

    </head>

    <body>
    <div class="page-wrapper">
<div class="content container-fluid">

<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="head-link-set">
<ul>
<li><a class="active" href="#">Attandance Report</a></li>
<li><a href="{{url('attandance/attandanceCreate')}}">Create Attandance</a></li>
</ul>
</div>
</div>

<h1 style="text-align:center;">Attandance Report</h1>
        
         
            
    
<table border="1">

            <tr>
                <th>SR. NO</th>
                <th>Name</th>
                <th>Employee ID</th>
                <th>Date</th>
                <th>Time In</th>
                <th>Time Out</th>
                <th>Attandance</th>
                <th>Duration Of Leave</th>
            </tr>
@php
$employees = App\Models\Employeedata::paginate(15); 

@endphp
            @foreach ($employees as  $employee)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{ $employee->fname . $employee->lname }}</td>
                    <td>{{ $employee->emp_id }}</td>
                    @php
                        $attandance = App\Models\Attandance::where('emp_id','=', $employee->id)->orderBy('id','desc')->first();
                    @endphp
                    @if ($attandance)
                        <td>{{ $attandance->demo}}</td>
                        <td>{{ $attandance->intime}}</td>
                        <td>{{ $attandance->outtime}}</td>
                        @if($attandance->status==1)
                        <td style="background-color:aquamarine;">Present</td>
                        <td>At Office</td>
                        @elseif($attandance->status==2)
                        <td style="background-color:pink;">Leave</td>
                        <td>{{ $attandance->type}}</td>
                        @elseif($attandance->status==3)
                        <td style="background-color:orange;">Work From Home</td>
                        <td>{{ $attandance->type}}</td>
                        @endif
                @else
                        <td>{{ 'NA' }}</td>
                        <td>{{ 'NA' }}</td>
                        <td>{{ 'NA' }}</td>
                        <td style="background-color:red;">Absent</td>
                        <td>{{ 'NA' }}</td>
                    @endif

                </tr>
            @endforeach
        </div>
    </div>
        </table>
{{$employees->links()}}
    </body>
</html>