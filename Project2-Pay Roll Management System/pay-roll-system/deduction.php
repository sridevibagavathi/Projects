<html>
<head>
<title>Deduction</title>
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

</script>
</head>

<body style="background-image:url(violet.png);  background-size: 100%" > 
<h1 style="color:white;text-align:center;font-family:Kozuka Gothic Pro;font-size:30px" align="center"><u>Payroll Management System</u></h1>
<h3 style="color:white;text-align:center;font-family:Kozuka Gothic Pro;font-size:30px" align="center">Deduction</h3>
<hr>
<?php
 $host="127.0.0.1";
$user="root";
$pass="vallikkv";
$db="newemployee";
 $connection=mysqli_connect("$host","$user","$pass","$db");
 mysqli_select_db($connection,"$db") or die("not connect");
 $regno=$_GET['id5'];
 $sql="select eid,ename,designation,department,doj from newempp where eid=".$regno;
 $result=$connection->query($sql);
 if($result->num_rows>0)
 {
  while($row=$result->fetch_assoc())
 {
 ?>
<form name="feedback" action="#" method="post">
<fieldset style="background-color:#3D1F4C;width:800px;height:500px">
<legend style="color:white;font-size:18px;font-weight:bold;padding-left:50px"></legend>
<p style="color:white;font-size:18px;font-weight:bold;padding-left:50px" >Employee ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="color:white;font-size:18px;font-weight:bold;padding-left:50px" ><?php echo $row['eid']; ?></label>
<p style="color:white;font-size:18px;font-weight:bold;padding-left:50px" >Name   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="color:white;font-size:18px;font-weight:bold;padding-left:50px" ><?php echo $row['ename']; ?></label>
<p style="color:white;font-size:18px;font-weight:bold;padding-left:50px" >Designation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="color:white;font-size:18px;font-weight:bold;padding-left:50px" ><?php echo $row['designation']; ?></label></p>
<p style="color:white;font-size:18px;font-weight:bold;padding-left:50px"> Department &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="color:white;font-size:18px;font-weight:bold;padding-left:50px" ><?php echo $row['department']; ?></label>
<p style="color:white;font-size:18px;font-weight:bold;padding-left:50px" >Date of Joining &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="color:white;font-size:18px;font-weight:bold;padding-left:50px" ><?php echo $row['doj']; ?></label></p><br><br>
<fieldset>
<legend style="color:white;font-size:18px;font-weight:bold;padding-left:50px" >Incentive Information</legend>
<p style="color:white;font-size:18px;font-weight:bold;padding-left:50px" >Advance Pay
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input  style="color:black;font-size:18px;font-weight:bold;padding-left:50px"  type="text" maxlength="6" name="ded1" id="x1" value="0">&nbsp;&nbsp;&nbsp;&nbsp;(RS.)</p>
<p style="color:white;font-size:18px;font-weight:bold;padding-left:50px" >Professional Tax
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input style="color:black;font-size:18px;font-weight:bold;padding-left:50px" type="text" maxlength="2" name="ded2" id="x2" value="0">&nbsp;&nbsp;&nbsp;&nbsp;(Percentage)</p>
<p style="color:white;font-size:18px;font-weight:bold;padding-left:50px" >Loan
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input  style="color:black;font-size:18px;font-weight:bold;padding-left:50px" type="text" maxlength="6" name="ded3" id="x3" value="0">&nbsp;&nbsp;&nbsp;&nbsp;(RS.)</p>
<p style="color:white;font-size:18px;font-weight:bold;padding-left:50px" >Professional Fund
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input style="color:black;font-size:18px;font-weight:bold;padding-left:50px"  type="text" maxlength="6" name="ded4" id="x4"value="0">&nbsp;&nbsp;&nbsp;&nbsp;(RS.)</p>
</fieldset>
<br><br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="SAVE &raquo;" onclick="ssss(this.form)" name="sav">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="RESET &raquo;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</fieldset><br><br><br><br><br>
</form>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="menu.html"><input type="submit" value="CANCEL &raquo;"></a>
<br><br><br><br><br><br><br>
<hr>
<br><br>
<h6 align="center" style="color:white">Copyright � 2001�2015 payrollmanagementsystem.com</h6> 
<?php }} ?>
 
</body>
</html>

 <?php if(isset($_POST['sav']))
		{
	        
			$host="127.0.0.1";
            $user="root";
            $pass="vallikkv";
            $db="newemployee";
            $connection=mysqli_connect("$host","$user","$pass","$db");
            mysqli_select_db($connection,"$db") or die("not connect");
            $regno=$_GET['id5'];		
      		$dd1=$_POST['ded1'];
			$dd2=$_POST['ded2'];
			$dd3=$_POST['ded3'];
			$dd4=$_POST['ded4'];
			$conn=mysqli_connect("localhost","root","vallikkv","newemployee");
			$sql= "update newempp set adpay='$dd1',proftax='$dd2',loan='$dd3',proffund='$dd4' where eid='$regno'";
			$sql1=mysqli_query($conn,$sql);
			echo '<script>alert ("Deduction information has been updated successfully")</script>';
			
		    $qq="select salamount,hraa,daa,ccaa,taa,medicala from newempp where eid=".$regno;
            $result=$connection->query($qq);
            if($result->num_rows>0)
            {
              while($row=$result->fetch_assoc())
              { 
				   $totsalary=$row['salamount']+$row['hraa']+$row['daa']+$row['ccaa']+$row['taa']+$row['medicala'];
				  
				    }}?>
               
				  <?php 
 if(isset($_POST['sav']))
		{
			
			$host="127.0.0.1";
            $user="root";
            $pass="vallikkv";
            $db="newemployee";
            $connection=mysqli_connect("$host","$user","$pass","$db");
            mysqli_select_db($connection,"$db") or die("not connect");
            $regno=$_GET['id5'];	
            $ans=($dd2/100)*$totsalary;
			$grossded=$dd1+$ans+$dd3+$dd4;
			$netsalary=$totsalary-$grossded;
	        $conn=mysqli_connect("localhost","root","vallikkv","newemployee");
			$sql="update newempp set grossincen='$totsalary',grossded='$grossded',netpay='$netsalary',proftaxamt='$ans' where eid='$regno'";
			$sql1=mysqli_query($conn,$sql);
			
}
 ?> 
       
<?php

}
		?>
		<?php 
 $connection->close(); ?>
 