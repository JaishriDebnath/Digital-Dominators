
<html>
<head>
<link rel="stylesheet" href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T')}} crossorigin="anonymous">
<style>
table{
width: 100%;
border-collapse:collapse;
border: 1px solid black;
}
table td{line-height:25px;padding-left:15px;}
table th{background-color:#fbc403; color:#363636;}
</style>

</head>
<body>
<table border="1">
<tr height="100px" style="text-align:center;font-size:24px; font-weight:600;">
<td colspan='4'><h2>Daliyaspirants.com Design Limited</h2>
	Date:-&nbsp;&nbsp;{{$payrolls->date}}</td>
</tr>
<tr>
<th>Employee Id:</th>
<td>{{$payrolls->emp_id}}</td>
<th>Name</th>
<td>{{$payrolls->name}}</td>
</tr>
<!-----2 row--->
<tr>
<th>Bank Name</th>
<td>{{$payrolls->bankname}}</td>
<th>Pan No.</th>
<td>{{$payrolls->pan}}</td>
</tr>
<!------3 row---->
<tr>
<th>Bank A/c No.</th>
<td>{{$payrolls->acc}}</td>
<th>Lop Days</th>
<td>0</td>
</tr>
<!------4 row---->
<tr>
<th>Bank A/c No.</th>
<td>{{$payrolls->ifsc}}</td>
<th>STD days</th>
<td>30</td>
</tr>
<!------5 row---->
<tr>
<th>Location</th>
<td>India</td>
<th>Working Days</th>
<td>30</td>
</tr>
<!------6 row---->
<tr>
<th>Department</th>
<td>{{$payrolls->branch}}</td>
<th>Designation</th>
<td>{{$payrolls->position}}</td>
</tr>
</table>
<br>
<table border="1">
<tr>
<th>Earnings</th>
<th>Amount</th>
<th>Deductions</th>
<th>Amount</th>
</tr>
<tr>
<td>Basic</td>
<td>{{$BasicPay=$payrolls->bsp * $countTotal}}</td>
<td>provident fund</td>
<td>{{$payrolls->pf}}</td>
</tr>
<tr>
<td>House Rent Allowance</td>
<td>{{$payrolls->hra}}</td>
<td>professional tax</td>
<td>{{$payrolls->prt}}</td>
</tr>
<tr>
<td>special Allowance</td>
<td>{{$payrolls->sa}}</td>
<td>Income tax</td>
<td>{{$payrolls->it}}</td>
</tr>
<tr>
<td>bonus</td>
<td>{{$payrolls->bonus}}</td>
<td></td>
<td></td>
</tr>
</tr>
<td>Leave Travel Allowance</td>
<td>{{$payrolls->lta}}</td>
<td></td>
<td></td>
</tr>
<tr>
<td>medical Allowance</td>
<td>{{$payrolls->ma}}</td>
<td></td>
<td></td>
</tr>
<tr>
<td>Telephone Reimbursament</td>
<td>{{$payrolls->tr}}</td>
<td></td>
<td></td>
</tr>
<tr>
<td>Special Allowance</td>
<td>{{$payrolls->sa}}</td>
<td></td>
<td></td>
</tr>
<tr>
<th>Gross Earnings</th>
<td>{{$ge=$BasicPay+$payrolls->hra+$payrolls->sa+$payrolls->tr+$payrolls->lta+$payrolls->bonus+$payrolls->ma}}</td>
<th >Gross Deductions</th>
<td>{{$gd=$payrolls->pf+$payrolls->prt+$payrolls->it}}</td>
</tr>
<tr height="50px">
<th colspan='4' ><h3>NET PAY =<b></b>&nbsp;&nbsp;{{$np=$ge-$gd}}</h3></th>

</tr>

</table>

</body>


