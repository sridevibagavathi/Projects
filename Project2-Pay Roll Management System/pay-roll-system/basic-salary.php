<html>
<head>
<title>Update of Employee Salary</title>
<?php include 'config.php';?>

<style>
h4.pos_fixed
 {
    position: fixed;
    top: 300px;
    right: 35px;
    color: red;
 }
 legend { 
    display: block;
    padding-left: 5px;
    padding-right: 5px;
    border: none;
}
</style>
<script type="text/javascript">
function checkk(form)
{
var q=prompt("Enter the Employee id to update the salary");
}
function ssss(form)
{
var x=document.getElementById("b7").value;
if(x=="")
	{
	alert("Please mention the salary for employee!!!");
	<?php 
 $a=0;	
?>
	}
	else
	{
	alert("updation done successfully");
	<?php
$a=1;
?>
	}
}
</script>
</head>
<body bgcolor="#00FFCC">
<h1 align="center" style="color:white;text-align:center;font-family:Kozuka Gothic Pro;font-size:30px"><u>Payroll Management System</u></h1>
<h3 align="center" style="color:white;text-align:center;font-family:Kozuka Gothic Pro;font-size:30px">Basic Salary</h3>
<hr>
<?php
 $host="127.0.0.1";
$user="root";
$pass="vallikkv";
$db="newemployee";
 $connection=mysqli_connect("$host","$user","$pass","$db");
 mysqli_select_db($connection,"$db") or die("not connect");
 $regno=$_GET['id2'];
 $sql="select eid,ename,designation,department,doj from newempp where eid=".$regno;
 $result=$connection->query($sql);
 if($result->num_rows>0)
 {
  while($row=$result->fetch_assoc())
 {
 ?>
<form name="feedback" action="#" method="post">
<p style="color:#FF6600;font-size:18px;font-weight:bold;padding-left:50px">Employee ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="color:#FF6600;font-size:18px;font-weight:bold;padding-left:50px"><?php echo $row['eid']; ?></label>
<p style="color:#FF6600;font-size:18px;font-weight:bold;padding-left:50px">Name   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="color:#FF6600;font-size:18px;font-weight:bold;padding-left:50px"><?php echo $row['ename']; ?></label>
<p style="color:#FF6600;font-size:18px;font-weight:bold;padding-left:50px">Designation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="color:#FF6600;font-size:18px;font-weight:bold;padding-left:50px"><?php echo $row['designation']; ?></label>
<p style="color:#FF6600;font-size:18px;font-weight:bold;padding-left:50px">Department &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="color:#FF6600;font-size:18px;font-weight:bold;padding-left:50px"><?php echo $row['department']; ?></label>
<p style="color:#FF6600;font-size:18px;font-weight:bold;padding-left:50px">Date of Joining &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="color:#FF6600;font-size:18px;font-weight:bold;padding-left:50px"><?php echo $row['doj']; ?></label><br><br>
<fieldset>
<legend style="color:#FF6600;font-size:18px;font-weight:bold;padding-left:50px">Basic Salary</legend>
<p style="color:#FF6600;font-size:18px;font-weight:bold;padding-left:50px">Salary Type
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select style="color:#FF6600;font-size:18px;font-weight:bold;padding-left:50px" name="p1">
<option value="Select Any">Select Any</option>
<option value="Monthly">Monthly</option>
<option value="Weekly">Weekly</option>
<option value="Daily">Daily</option>
<option value="Hourly">Hourly</option>
</select></p>
<p style="color:#FF6600;font-size:18px;font-weight:bold;padding-left:50px">Salary Amount
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input style="color:#FF6600;font-size:18px;font-weight:bold;padding-left:50px" type="text" maxlength="6" name="p2" id="b7">&nbsp;&nbsp;&nbsp;&nbsp;(RS.)</p>
</fieldset>
<br><br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="UPDATE &raquo;" onclick="ssss(this.form)" name="sav">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="RESET &raquo;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</form><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="menu.html"><input type="submit" value="CANCEL &raquo;"></a>
<br><br><br><br><br><br><br>
<hr>
<br><br>
<h6 align="center">Copyright � 2001�2015 payrollmanagementsystem.com</h6> 
<?php }} ?>
 
</body>
</html>
   <?pho if ($a==1)  
 <?php if(isset($_POST['sav']))
		{
	        
			$host="127.0.0.1";
            $user="root";
            $pass="vallikkv";
            $db="newemployee";
            $connection=mysqli_connect("$host","$user","$pass","$db");
            mysqli_select_db($connection,"$db") or die("not connect");
            $regno=$_GET['id2'];		
      		$stype=$_POST['p1'];
			$samt=$_POST['p2'];
			$conn=mysqli_connect("localhost","root","vallikkv","newemployee");
			$sql= "update newempp set saltype='$stype',salamount='$samt' where eid='$regno'";
			$sql1=mysqli_query($conn,$sql);
			echo '<script>alert ("Basic salary for an employee has been updated successfully")</script>';
		

}
		?>
<?php 
 $connection->close();
?>