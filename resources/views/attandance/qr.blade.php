<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css')}}">
    <script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js')}}"></script>
    <script src="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js')}}"></script>
    <script src="{{url('https://unpkg.com/html5-qrcode@2.0.9/dist/html5-qrcode.min.js')}}"></script>
    <script src="{{url('/nodejs/html5-qrcode/html5-qrcode.min.js')}}"></script>
    
<title>QR Code Scanner / Reader
    </title>
    <style>
        body {
    display: flex;
    justify-content: center;
    margin: 0;
    padding: 0;
    height: 100vh;
    box-sizing: border-box;
    text-align: center;
    background: lightcyan;
}
.container {
    width: 100%;
    max-width: 500px;
    margin: 10px;
}
 
.container h1 {
    color: #ffffff;
}

.section {
    background-color: #ffffff;
    padding: 50px 30px;
    border: 5px solid #b2b2b2;
    border-radius: 0.25em;
    box-shadow: 0 20px 25px rgba(0, 0, 0, 0.25);
}
 
#my-qr-reader {
    padding: 20px !important;
    border: 1.5px solid #b2b2b2 !important;
    border-radius: 8px;
}
 
#my-qr-reader img[alt="Info icon"] {
    display: none;
}
 
#my-qr-reader img[alt="Camera based scan"] {
    width: 100px !important;
    height: 100px !important;
}
 
button {
    padding: 10px 20px;
    border: 1px solid #b2b2b2;
    outline: none;
    border-radius: 0.25em;
    color: white;
    font-size: 15px;
    cursor: pointer;
    margin-top: 15px;
    margin-bottom: 10px;
    background-color: #008000ad;
    transition: 0.3s background-color;
}
 
button:hover {
    background-color: #008000;
}
 
#html5-qrcode-anchor-scan-type-change {
    text-decoration: none !important;
    color: #1d9bf0;
}
 
video {
    width: 100% !important;
    border: 1px solid #b2b2b2 !important;
    border-radius: 0.25em;
}
    </style>
</head>
 
<body>
    @if(isset($message))
    <div class="alert alert-success">
        {{$message}}
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

    </div>
    @endif
    <div class="container">
        <h1>Scan QR Codes</h1>
        <div class="section">
        <div id="reader" style="width: 400px"></div>
        <div id="result" style="width: 600px"></div>
        </div>
        
        </div>
<!-- <div class="container"> -->
    <div id="msg"></div>

<div class="table-heading">

</div>
<div class="table-responsive">
<table class="table table-bordered">
<div class="col-xl-12 col-sm-12 col-12 mb-12"><div class="card">
<thead><h2 class="color: white;">Employee Present</h2></thead>
<tr>
<th>Name</th>
<th>ID</th>
<th>Time IN</th>
<th>Time OUT</th>
<th>Date</th>
</tr>
</thead>

<tbody>
  
<tr>
<td>{{Session()->get('sname')}}</td>
<td>{{Session()->get('semp_id')}}</td>
<td>{{Session::get('sintime')}}</td>
<td>{{Session::get('souttime')}}</td>
<td>{{Session::get('sdemo')}}</td>
</tr>

</tbody>
</table>
</div>
</div>
</div>
        </table>
        </div>
    </div>
    <script src="{{asset('/html5-qrcode.min.js')}}"></script>
    <script src="{{asset('/https://code.jquery.com/jquery-latest.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/https://unpkg.com/html5-qrcode')}}"></script>
    <script src="{{asset('/dist/html5-qrcode.js')}}"></script>
    <script type="text/javascript">
    
    const scanner = new Html5QrcodeScanner('reader',{
     qrbox:{
        width: 200,
        height: 200,
     },
     fps: 20,
    });    
    scanner.render(success,error);
    function success(result){
        // document.getElementById('result').innerHTML=`
        // <h2>Success!!</h2>
        // <td>${result}</td>
        // `;
        
        window.location.href=`http://127.0.0.1:8000/attandance/qraStore/${result}`;
        scanner.clear();
        document.getElementById('reader').remove();
     
    }
    function error(err){
        console.error(err);
    }
  
      

   
    </script>
</body>
 
</html>