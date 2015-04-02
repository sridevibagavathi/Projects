<html>
<head>
<title>Updation of Employee Entry</title>
<?php include 'config.php';?>
<style>
div.hidden
 {  
    
    position: absolute;
    right: 50px;
    color:#99ff66;
    background-color: #5C85FF;
    width:  320px;
    height: 55px;
    overflow: hidden;
}
 div.padding
 {  
    padding-top: 15px;
	position: absolute;
    right: 50px;
    color:#99ff66;
    background-color: #5C85FF;
    width:  320px;
    height: 55px;
    overflow: hidden;
}
h4.pos_fixed
 {
    position: fixed;
    top: 300px;
    right: 35px;
    color: red;
 }
</style>
<script type="text/javascript">
function mouseOver() {
    document.getElementById("demo").style.color = "#FF2B9E";
}

function mouseOut() {
    document.getElementById("demo").style.color = "#99ff66";
}
function mouseOverr() {
    document.getElementById("a1").style.color = "#FF2B9E";
}

function mouseOutr() {
    document.getElementById("a1").style.color = "#99ff66";
}
 
</script>
</head>
<body style="background-image:url(images.jpg);  background-size: 100%" > 
<h1 style="color:#FF0066;text-align:center;font-family:Kozuka Gothic Pro;font-size:30px" align="center"><u>Payroll Management System</u></h1>
<h3 style="color:#FF0066;text-align:center;font-family:Kozuka Gothic Pro;font-size:30px" align="center">Make changes to the employee details</h3>
<hr>
<br>
<br>
<br>
<br>
<fieldset style="background-color:#2E003D;width:900px;height:580px">
<legend  style="color:white;font-size:18px;font-weight:bold;padding-left:50px">Enter the Employee id to modify their details</legend>
<br>
  
<form name="sss" action="update-empaftersearch.php" method="get">
<label  style="color:white;font-size:18px;font-weight:bold;padding-left:50px">Enter the employee id to update their details...</label>
											 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id"/><br/>
<pre>                                                              <input type="submit" value="Update" name="update"/>
</pre>
</form>
<form name="search" action="delete-employee-entry.php" method="get">
<label style="color:white;font-size:18px;font-weight:bold;padding-left:50px">Enter the employe id to delete their details...</label>
                                              &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id1"/><br/>                                                
<pre>                                                              <input type="submit" value="Delete" name="delete"/>
</pre>                                                
						 
</form>
<form name="kkk" action="basic-salary.php" method="get">
<label style="color:white;font-size:18px;font-weight:bold;padding-left:50px">Enter the employe id to set the basic salary for employees...</label>
                                               <input type="text" name="id2"/><br/>                                                
<pre>                                                          <input type="submit" value="Set Basic Salary" name="basic"/>
</pre>                                                
						 
</form>
<form name="jjj" action="bonus.php" method="get">
<label style="color:white;font-size:18px;font-weight:bold;padding-left:50px">Enter the employe id to set the bonus for employees...</label>
                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id3"/><br/>                                                
<pre>                                                             <input type="submit" value="Set Bonus" name="bonus"/>
</pre>                                                
						 
</form>
<form name="incen" action="incentive.php" method="get">
<label style="color:white;font-size:18px;font-weight:bold;padding-left:50px">Enter the employe id to set the incentive for employees...</label>
                                               &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id4"/><br/>                                                
<pre>                                                            <input type="submit" value="Set Incentive" name="incentive"/>
</pre>                                                
						 
</form>
<form name="deduc" action="deduction.php" method="get">
<label style="color:white;font-size:18px;font-weight:bold;padding-left:50px">Enter the employe id to set the deduction for employees...</label>
                                               &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id5"/><br/>                                                
<pre>                                                            <input type="submit" value="Set Deduction" name="deduction"/>
</pre>                                                
						 
</form>

<form name="snn" action="payslipp.php" method="get">
<label  style="color:white;font-size:18px;font-weight:bold;padding-left:50px">Enter the employe id to generate the payslip for employees...</label>
                                              <input type="text" name="id9"/><br/>                                              
<pre>                                                           <input type="submit" value="Generate Pay Slip" name="payy"/>
</pre>                                                
						 
</form>
</fieldset>
<br><br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<hr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;
<div id="demo" class="padding" align="center" onmouseover="mouseOver()" onmouseout="mouseOut()"><span style="cursor:progress"><marquee scrollamount="5" width="40">&lt;&lt;&lt;</marquee><b>-Advertisement-</b><marquee scrollamount="5" width="40" direction="right">&gt;&gt;&gt;</marquee><br><br></span></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;
<h2><div class="hidden" align="center"><blink  id="a1" align="center" onmouseover="mouseOverr()" onmouseout="mouseOutr()"><span style="cursor:pointer">Get Free Mobile !!!</span></blink></div><h2>
<br><br>
<h6 align="center">Copyright © 2001–2015 payrollmanagementsystem.com</h6> 

</body>
</html>