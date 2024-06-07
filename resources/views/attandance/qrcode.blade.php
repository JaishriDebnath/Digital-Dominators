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
    background: rgb(128 0 0 / 66%);
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
    <div class="container">
        <h1>Scan QR Codes</h1>
        <div class="section">
        <div id="my-qr-reader" style="width: 400px"></div>
        </div>
    </div>
    <script src="{{asset('/html5-qrcode.min.js')}}"></script>
    <script src="{{asset('/https://code.jquery.com/jquery-latest.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/https://unpkg.com/html5-qrcode')}}"></script>
    <script type="text/javascript">
    

    function domReady() {
    if (
        document.readyState === "complete" ||
        document.readyState === "interactive"
    ) {
        setTimeout(fn, 1000);
    } else {
        document.addEventListener("DOMContentLoaded", fn);
    }
}
 
domReady(function () {
 
    // If found you qr code
    function onScanSuccess(decodeText, decodeResult) {
        alert("You Qr is : " + decodeText, decodeResult);
    }
 
    let htmlscanner = new Html5QrcodeScanner(
        "my-qr-reader",
        { fps: 10, qrbos: 250 }
    );
    htmlscanner.render(onScanSuccess);
});
    </script>
</body>
 
</html>