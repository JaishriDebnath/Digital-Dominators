
@include('layouts.Main')
@include('layouts.MainHeader')


<div class="content container-fluid">
<div class="row">
<div class="col-xl-12 col-sm-12 col-12 ">


<form action="/recruitments/storeRecruit" method="POST" enctype="multipart/form-data">
@csrf
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card">
<div class="card-header">
<h2 class="card-titles" style="text-align: center;">Add Your Details </span></h2>
</div>
<div class="card-body">
<div class="row">
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="hidden" name="id" class="form-control" >
<label for="First_Name"><b>Your First name *</b></label><br />
<input type="hidden" name="status"  value="pending" class="form-control" >
<input type="text" name="fname" class="form-control" >
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="First_Name"><b>Your Last name *</b></label><br />
<input type="text" name="lname" class="form-control" >
</div>
</div>


<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="Email_Address"><b>Your Email *</b></label><br />
<input type="email" name="email" class="form-control" style="height: 69px;">
</div>
</div>

<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="sdate"><b>When can you start?*</b></label><br />
<input type="date" name="sdate" class="form-control" style="height: 69px;">
</div>
</div>


<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="Organization"><b>Last company you worked for</b></label><br />
<input type="text" name="org" class="form-control" >
</div>
</div>



<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="Phone"><b>Phone No.*</b></label><br />
<input name="phone" type="text" maxlength="50" class="form-control"  />
</div>
</div>


<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="Experience"><b>Experience*</b></label><br />
<input type="text" name="exp" class="form-control">
</div>
</div>


<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<label for="resume"><b>Enter Your Resume Here *</b></label><br />
<input type="file" name="resume" class="form-control" style="height: 69px;">
</div>
</div>
</div>

<div class="row">
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="form-btn">
    <center>
<input type="submit" value="SUBMIT" class="btn btn-apply w-auto">
<M>
</div>
</div>
</div>

</div>
</div>
</div>


</form>

</div>
</div>
</div>

 
</body>
</html>