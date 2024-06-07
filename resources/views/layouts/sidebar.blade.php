

<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div class="sidebar-contents">
<div id="sidebar-menu" class="sidebar-menu">
<div class="mobile-show">
<div class="offcanvas-menu">
<div class="user-info align-center bg-theme text-center">
<span class="lnr lnr-cross  text-white" id="mobile_btn_close">X</span>
<a href="{{url('javascript:void(0)')}}" class="d-block menu-style text-white">
<div class="user-avatar d-inline-block mr-3">
<img src="{{url('assets/img/profiles/avatar-18.jpg')}}" alt="user avatar" class="rounded-circle" width="50">
</div>
</a>
</div>
</div>
<div class="sidebar-input">
<div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fas fa-search"></i></button>
</form>
</div>
</div>
 </div>
<ul>
<li>
<a href="{{url('/Home/HrDashboard')}}"><img src="{{url('assets/img/home.svg')}}" alt="sidebar_img">&nbsp;&nbsp;&nbsp;&nbsp;Dashboard</a>
</li>
<li>
<a href="{{url('/employees/add-employee')}}"><img src="{{url('assets/img/employee.svg')}}" alt="sidebar_img">&nbsp;&nbsp;&nbsp;&nbsp;Employees</a>
</li>
<li>
<a href="{{url('/jobs/jobs')}}"><img src="{{url('assets/img/review.svg')}}" alt="sidebar_img">&nbsp;&nbsp;&nbsp;&nbsp;Jobs</a>
</li>
<li>
<a href="{{url('/recruitments/recruit')}}"><img src="{{url('assets/img/manage.svg')}}" alt="sidebar_img"> &nbsp;&nbsp;&nbsp;&nbsp;Recruitment</a>
</li>
<li>
<a href="{{url('/attandance/attandance')}}"><img src="{{url('assets/img/company.svg')}}" alt="sidebar_img"> &nbsp;&nbsp;&nbsp;&nbsp;Attandance</a>
</li>

<li>
<a href="{{url('/setnew/company')}}"><img src="{{url('assets/img/company.svg')}}" alt="sidebar_img"> &nbsp;&nbsp;&nbsp;&nbsp;Company</a>
</li>
<li>
<a href="{{url('/leave/empleave')}}"><img src="{{url('assets/img/leave.svg')}}" alt="sidebar_img"> &nbsp;&nbsp;&nbsp;&nbsp;Leave</a>
</li>
<li>
<a href="{{url('/payroll/payroll')}}"><img src="{{url('assets/img/report.svg')}}" alt="sidebar_img">&nbsp;&nbsp;&nbsp;&nbsp;Payroll</a>
</li>
<li>
<a href="{{url('/setnew/manage')}}"><img src="{{url('assets/img/manage.svg')}}" alt="sidebar_img"> &nbsp;&nbsp;&nbsp;&nbsp;Set Main Page</a>
</li>
<li>
<a href="{{url('/setnew/setting')}}"><img src="{{url('assets/img/settings.svg')}}" alt="sidebar_img">&nbsp;&nbsp;&nbsp;&nbsp;Permissions</a>
</li>
<li>
<a href="{{url('/setnew/profileset')}}"><img src="{{url('assets/img/profile.svg')}}" alt="sidebar_img"> &nbsp;&nbsp;&nbsp;&nbsp;Profile</a>
</li>



</ul>
<ul class="logout">
<li>
<a href="{{url('/logout')}}"><img src="{{url('assets/img/logout.svg')}}" alt="sidebar_img">Log out</a>
</li>
</ul>

</div>
</div>
</div>
</div>


<script src="{{url('assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{url('assets/js/popper.min.js')}}"></script>
<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/js/feather.min.js')}}"></script>

<script src="{{url('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<script src="{{url('assets/plugins/apexchart/apexcharts.min.js')}}"></script>
<script src="{{url('assets/plugins/apexchart/chart-data.js')}}"></script> 
<script src="{{url('assets/js/script.js')}}"></script>
</body>
</html>