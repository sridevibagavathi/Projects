<html>
<head>
<title>Leave Entry</title>
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
var q=prompt("Enter the Employee id to make the leave entry");
}

</script>
</head>
<body>
<h1 align="center"><u>Payroll Management System</u></h1>
<h3 align="center">Leave Entry</h3>
<hr><?php
 $host="127.0.0.1";
$user="root";
$pass="vallikkv";
$db="newemployee";
 $connection=mysqli_connect("$host","$user","$pass","$db");
 mysqli_select_db($connection,"$db") or die("not connect");
 $regno=$_GET['id6'];
 $sql="select eid,ename,designation,department,doj from newempp where eid=".$regno;
 $result=$connection->query($sql);
 if($result->num_rows>0)
 {
  while($row=$result->fetch_assoc())
 {
 ?>
<form name="feedback" action="#" method="post">
<p>Employee ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label><?php echo $row['eid']; ?></label></p>
<p>Name   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label><?php echo $row['ename']; ?></label></p>
<p>Designation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label><?php echo $row['designation']; ?></label></p>
<p>Department &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label><?php echo $row['department']; ?></label></p>
<p>Date of Joining &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label><?php echo $row['doj']; ?></label></p>
<p>Leave Type
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="l1">
<option value="Select Any">Select Any</option>
<option value="Absent">Absent</option>
<option value="Sickness">Sickness</option>
<option value="Casual">Casual</option>
<option value="Break">Break</option>
</select><br><br>
<fieldset>
<legend>Provide Leave</legend>
<p>Total Leave
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" maxlength="" name="b7" id="b7">&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>Leave&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; From :
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" maxlength="" name="b7" id="b7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" maxlength="" name="b8" id="b8"></p>
<p>Balance Leave
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" maxlength="" name="b9" id="b9">&nbsp;&nbsp;&nbsp;&nbsp;</p>

</fieldset>
<br><br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="OK &raquo;" name="save">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="RESET &raquo;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="CANCEL &raquo;">
</form>

<br><br><br><br><br><br><br>
<hr>
<br><br>
<h6 align="center">Copyright � 2001�2015 payrollmanagementsystem.com</h6> 
<?php }} ?>
 
</body>
</html>
 <?php if(isset($_POST['save']))
		{
	        
			$host="127.0.0.1";
            $user="root";
            $pass="vallikkv";
            $db="newemployee";
            $connection=mysqli_connect("$host","$user","$pass","$db");
            mysqli_select_db($connection,"$db") or die("not connect");
            $regno=$_GET['id6'];		
      		$leavetype=$_POST['l1'];
			$conn=mysqli_connect("localhost","root","vallikkv","newemployee");
			$sql= "update newempp set leavetype='$leavetype' where eid='$regno'";
			$sql1=mysqli_query($conn,$sql);
			echo '<script>alert ("Leave entries for an employee has been updated successfully")</script>';
		

}
		?>
		<?php 
 $connection->close(); ?>