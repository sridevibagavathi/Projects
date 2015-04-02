<html>
<head>
<title>Welcome Page</title>
<script>
</script>
<style>
.menu{
border:none;
border:0px;
margin:0px;
padding:0px;
font: 67.5% "Lucida Sans Unicode", "Bitstream Vera Sans", "Trebuchet Unicode MS", "Lucida Grande", Verdana, Helvetica, sans-serif;
font-size:14px;
font-weight:bold;
}
.menu ul{
background:#F93;
height:50px;
list-style:none;
margin:0;
padding:0;
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
border-radius: 15px;
-webkit-box-shadow: inset 0px 16px 0px 0px rgba(255, 255, 255, .1);
-moz-box-shadow: inset 0px 16px 0px 0px rgba(255, 255, 255, .1);
box-shadow: inset 0px 16px 0px 0px rgba(255, 255, 255, .1);
}
.menu li{
float:left;
padding:0px 0px 0px 15px; 
}
.menu li a{
color:#000;
display:block;
font-weight:normal;
line-height:50px;
margin:0px;
padding:0px 25px;
text-align:center;
text-decoration:none;
}
.menu li a:hover{
background:#C60;
color:#FFFFFF;
text-decoration:none;
-webkit-box-shadow: inset 0px 0px 7px 2px rgba(0, 0, 0, .3);
-moz-box-shadow: inset 0px 0px 7px 2px rgba(0, 0, 0, .3);
box-shadow: inset 0px 0px 7px 2px rgba(0, 0, 0, .3);
}
.menu ul li:hover a{
background:#C60;
color:#FFFFFF;
text-decoration:none;
}
.menu li ul{
display:none;
height:auto;
padding:0px;
margin:0px;
border:0px;
position:absolute;
width:200px;
z-index:200;
}
.menu li:hover ul{
display:block; 
}
.menu li li {
display:block;
float:none;
margin:0px;
padding:0px;
width:200px;
background:#F93;
/*this is where the rounded corners for the dropdown disappears*/
}
.menu li:hover li a{
background:none;
}
.menu li ul a{
display:block;
height:50px;
font-size:12px;
font-style:normal;
margin:0px;
padding:0px 10px 0px 15px;
text-align:left;
}
.menu li ul a:hover, .menu li ul li:hover a{
border:0px;
color:#ffffff;
text-decoration:none;
background:#C60;
-webkit-box-shadow: inset 0px 0px 7px 2px rgba(0, 0, 0, .3);
-moz-box-shadow: inset 0px 0px 7px 2px rgba(0, 0, 0, .3);
box-shadow: inset 0px 0px 7px 2px rgba(0, 0, 0, .3); 
}
body {
    background-image: url("");
	 background-repeat: no-repeat;
}
</style>
</head>
<body>
<div class="menu">
   <ul>
      <li><a href="#" >Employee</a>
	  <ul>
	        <li><a href="new-emloyee-entry.php">New Employee</a></li>
            <li><a href="update-employee-entry.php">Update Employee</a></li>
            <li><a href="delete-employee-entry.php">Delete Employee</a></li>
            <li><a href="#">Search Employee</a></li>

	  </ul>
	  </li>
      <li><a href="#" id="current">Pay Roll</a>
         <ul>
            <li><a href="basic-salary.php">Basic Salary</a></li>
            <li><a href="bonus.php">Bonus</a></li>
            <li><a href="incentive.php">Incentive</a></li>
            <li><a href="deduction.php">Deduction</a></li>
         </ul>
      </li>
      <li><a href="#">Leave</a>
         <ul>
            <li><a href="leaveentry.php">Leave Entry</a></li>
            <li><a href="leavestatus.php">Leave Status</a></li>
            <li><a href="leavesetting.php">Leave Setting</a></li>
            <li><a href="#">Leave Report</a></li>
         </ul>
      </li>
       <li><a href="#">Report</a>
         <ul>
            <li><a href="#">All Employee</a></li>
            <li><a href="#">Basic Salary</a></li>
            <li><a href="#">Incentives</a></li>
            <li><a href="#">Deduction</a></li>
			 <li><a href="payslip.php">Pay Slip</a></li>
		 </ul>
      </li>
   </ul>
</div></body>
</html>