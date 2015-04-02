<html>
<head>
<title>Update of Employee Bonus</title>
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
var q=prompt("Enter the Employee id to update the Bonus");
}
function ssss(form)
{
var x=document.getElementById("b7").value;
if(x=="")
	alert("Please mention the bonus amount for employee!!!");
else
	alert("Updation done successfully");
}
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
<body style="background-image:url(images.png);  background-size: 100%" > 
<h1 style="color:white;text-align:center;font-family:Kozuka Gothic Pro;font-size:30px" align="center"><u>Payroll Management System</u></h1>
<h3 style="color:white;text-align:center;font-family:Kozuka Gothic Pro;font-size:30px" align="center">Bonus</h3>
<hr>
<?php
 $host="127.0.0.1";
$user="root";
$pass="vallikkv";
$db="newemployee";
 $connection=mysqli_connect("$host","$user","$pass","$db");
 mysqli_select_db($connection,"$db") or die("not connect");
 $regno=$_GET['id3'];
 $sql="select eid,ename,designation,department,doj from newempp where eid=".$regno;
 $result=$connection->query($sql);
 if($result->num_rows>0)
 {
  while($row=$result->fetch_assoc())
 {
 ?>
<form name="feedback" action="#" method="post">
<fieldset style="background-color:white;width:800px;height:580px">
<legend style="color:#B80000;font-size:18px;font-weight:bold;padding-left:50px"></legend>
<p  style="color:#B80000;font-size:18px;font-weight:bold;padding-left:50px" >Employee ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="color:#B80000;font-size:18px;font-weight:bold;padding-left:50px" ><?php echo $row['eid']; ?></label>
<p style="color:#B80000;font-size:18px;font-weight:bold;padding-left:50px" >Name   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="color:#B80000;font-size:18px;font-weight:bold;padding-left:50px" ><?php echo $row['ename']; ?></label>
<p style="color:#B80000;font-size:18px;font-weight:bold;padding-left:50px" >Designation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="color:#B80000;font-size:18px;font-weight:bold;padding-left:50px" ><?php echo $row['designation']; ?></label>
<p style="color:#B80000;font-size:18px;font-weight:bold;padding-left:50px" >Department &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="color:#B80000;font-size:18px;font-weight:bold;padding-left:50px" ><?php echo $row['department']; ?></label>
<p style="color:#B80000;font-size:18px;font-weight:bold;padding-left:50px" >Date of Joining &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="color:#B80000;font-size:18px;font-weight:bold;padding-left:50px" ><?php echo $row['doj']; ?></label><br><br>
<fieldset>
<legend  style="color:#B80000;font-size:18px;font-weight:bold;padding-left:50px" >Bonus Information</legend>
<p  style="color:#B80000;font-size:18px;font-weight:bold;padding-left:50px" >Bonus Type
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select style="color:#B80000;font-size:18px;font-weight:bold;padding-left:50px"  name="kk1">
<option value="Select Any">Select Any</option>
<option value="Annual">Annual</option>
<option value="Diwali">Diwali</option>
</select>
<p style="color:#B80000;font-size:18px;font-weight:bold;padding-left:50px" >Bonus Amount
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input style="color:#B80000;font-size:18px;font-weight:bold;padding-left:50px"  type="text" maxlength="6" name="kkk2" id="b7">&nbsp;&nbsp;&nbsp;&nbsp;(RS.)</p>
</fieldset>
<br><br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="SAVE &raquo;" onclick="ssss(this.form)" name="savee">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="RESET &raquo;" onclick="but(this.form)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</fieldset>
</form><br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="menu.html"><input type="submit" value="CANCEL &raquo;"></a>
<br><br><br><br><br><br><br>
<hr>
<br><br>
<h6 align="center" style="color:white">Copyright © 2001–2015 payrollmanagementsystem.com</h6> 
<?php }} ?>
 
</body>
</html>

   <?pho if ($a==1) 
 <?php if(isset($_POST['savee']))
		{
	        
			$host="127.0.0.1";
            $user="root";
            $pass="vallikkv";
            $db="newemployee";
            $connection=mysqli_connect("$host","$user","$pass","$db");
            mysqli_select_db($connection,"$db") or die("not connect");
            $regno=$_GET['id3'];		
      		$btype=$_POST['kk1'];
			$bamt=$_POST['kkk2'];
			$conn=mysqli_connect("localhost","root","vallikkv","newemployee");
			$sql= "update newempp set bonustype='$btype',bonusamount='$bamt' where eid='$regno'";
			$sql1=mysqli_query($conn,$sql);
			echo '<script>alert ("Bonus for an employee has been updated successfully")</script>';
		}
		?>
		<?php 
 $connection->close(); ?>