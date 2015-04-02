<html>
<head>
<title>Incentives Information</title>
<?php include 'config.php';?>
<style>
body
{
background-image: url("pink4.png");
}
legend { 
    display: block;
    padding-left: 5px;
    padding-right: 5px;
    border: none;
}
img {
    float: right;
}
</style>
<script type="text/javascript">
function checkk(form)
{
var q=prompt("Enter the Employee id to calculate the incentives information");
}
function ssss(form)
{
var a=document.getElementById("o1").value;
var b=document.getElementById("o2").value;
var c=document.getElementById("o3").value;
var d=document.getElementById("o4").value;
var e=document.getElementById("o5").value;
if(a=="" || b=="" || c=="" || d=="" || e=="")
	{
	alert("Please mention the percentage of all allowance!!!");
	<?php 
 $a=0;	
?>
	}
else
	{
	alert("Incentive informations are successfully");
<?php
$a=1;
?>
}
}
</script>
</head>

<body style="background-image:url(pinkee.jpg);  background-size: 100%" > 
<p>
<h1 style="color:white;text-align:center;font-family:Kozuka Gothic Pro;font-size:30px" align="center"><u>Payroll Management System</u></h1>
<h3 style="color:white;text-align:center;font-family:Kozuka Gothic Pro;font-size:30px" align="center">Incentives</h3>
<hr>
<?php
 $host="127.0.0.1";
$user="root";
$pass="vallikkv";
$db="newemployee";
 $connection=mysqli_connect("$host","$user","$pass","$db");
 mysqli_select_db($connection,"$db") or die("not connect");
 $regno=$_GET['id4'];
 $sql="select eid,ename,designation,department,doj from newempp where eid=".$regno;
 $result=$connection->query($sql);
 if($result->num_rows>0)
 {
  while($row=$result->fetch_assoc())
 {
 ?>
<form name="feedback" action="#" method="post">
<fieldset style="background-color:#FFCCE0;width:800px;height:580px">
<legend style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px"></legend>
<span style="cursor:pointer"><img src="elephant.png" width="160" height="550"></span>
<p style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" >&nbsp;&nbsp;&nbsp;&nbsp;Employee ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" ><?php echo $row['eid']; ?></label>
<p style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" >&nbsp;&nbsp;&nbsp;&nbsp;Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" ><?php echo $row['ename']; ?></label></p>
<p style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" >&nbsp;&nbsp;&nbsp;&nbsp;Designation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" ><?php echo $row['designation']; ?></label></p>
<p style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" >&nbsp;&nbsp;&nbsp;&nbsp;Department &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" ><?php echo $row['department']; ?></label></p>
<p style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" >&nbsp;&nbsp;&nbsp;&nbsp;Date of Joining &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" ><?php echo $row['doj']; ?></label></p><br><br>
<fieldset>
<legend style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" >Incentive Information</legend>
<label  style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" for="percentage">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Percentage (%)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<p style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" >&nbsp;&nbsp;&nbsp;&nbsp;HRA
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px"  type="text" maxlength="2" name="h1" id="o1" value="0" ></p>
<p style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" >&nbsp;&nbsp;&nbsp;&nbsp;DA
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px"  type="text" maxlength="2" name="h3" id="o2" value="0" ></p>
<p style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" >&nbsp;&nbsp;&nbsp;&nbsp;CCA 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px"  type="text" maxlength="2" name="h5" id="o3" value="0" ></p>
<p style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" >&nbsp;&nbsp;&nbsp;&nbsp;TA 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px"  type="text" maxlength="2" name="h7" id="o4" value="0"></p>
<p style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" >&nbsp;&nbsp;&nbsp;&nbsp;Medical
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px"  type="text" maxlength="2" name="h9" id="o5" value="0"></p>
</fieldset>
<br><br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="SAVE &raquo;" name="saveee">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="RESET &raquo;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</fieldset><br><br><br><br><br>
</form>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="menu.html"><input type="submit" value="CANCEL &raquo;"></a>
<br><br><br><br><br>


<?php }} ?>
 
</body>
</html>
      
	<?php if(isset($_POST['saveee']))
		{
			
			$host="127.0.0.1";
            $user="root";
            $pass="vallikkv";
            $db="newemployee";
            $connection=mysqli_connect("$host","$user","$pass","$db");
            mysqli_select_db($connection,"$db") or die("not connect");
            $regno=$_GET['id4'];	
			$hrap=$_POST['h1'];
			$dap=$_POST['h3'];
			$ccap=$_POST['h5'];
            $tap=$_POST['h7'];
			$medicalp=$_POST['h9'];
	        $conn=mysqli_connect("localhost","root","vallikkv","newemployee");
			$sql="update newempp set hrap='$hrap',dap='$dap',ccap='$ccap',tap='$tap',medicalp='$medicalp' where eid='$regno'";
			$sql1=mysqli_query($conn,$sql);
		    echo '<script>alert ("Allowances are updated successfully")</script>';
			$qq="select salamount from newempp where eid=".$regno;
            $result=$connection->query($qq);
            if($result->num_rows>0)
            {
              while($row=$result->fetch_assoc())
              {
               $salaryfetched=$row['salamount'];
				   
            }}?>
 
			<fieldset  style="background-color:pink;width:300px;height:250px">
			<legend style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" >Incentive Amounts</legend>
            <p style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" >&nbsp;&nbsp;&nbsp;&nbsp;HRA
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" ><?php
 if(isset($_POST['saveee']))
		{
			
			$host="127.0.0.1";
            $user="root";
            $pass="vallikkv";
            $db="newemployee";
            $connection=mysqli_connect("$host","$user","$pass","$db");
            mysqli_select_db($connection,"$db") or die("not connect");
            $regno=$_GET['id4'];	
			$ans=($hrap/100)*$salaryfetched;
	        $conn=mysqli_connect("localhost","root","vallikkv","newemployee");
			$sql="update newempp set hraa='$ans' where eid='$regno'";
			$sql1=mysqli_query($conn,$sql);
echo $ans; } ?></label>
<p style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" >&nbsp;&nbsp;&nbsp;&nbsp;DA
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;			
<label style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" ><?php 
 if(isset($_POST['saveee']))
		{
			
			$host="127.0.0.1";
            $user="root";
            $pass="vallikkv";
            $db="newemployee";
            $connection=mysqli_connect("$host","$user","$pass","$db");
            mysqli_select_db($connection,"$db") or die("not connect");
            $regno=$_GET['id4'];	
			$ans=($dap/100)*$salaryfetched;
	        $conn=mysqli_connect("localhost","root","vallikkv","newemployee");
			$sql="update newempp set daa='$ans' where eid='$regno'";
			$sql1=mysqli_query($conn,$sql);
echo $ans; }
 ?></label>		 
<p style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" >&nbsp;&nbsp;&nbsp;&nbsp;CCA 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" ><?php 
 if(isset($_POST['saveee']))
		{
			
			$host="127.0.0.1";
            $user="root";
            $pass="vallikkv";
            $db="newemployee";
            $connection=mysqli_connect("$host","$user","$pass","$db");
            mysqli_select_db($connection,"$db") or die("not connect");
            $regno=$_GET['id4'];	
			$ans=($ccap/100)*$salaryfetched;
	        $conn=mysqli_connect("localhost","root","vallikkv","newemployee");
			$sql="update newempp set ccaa='$ans' where eid='$regno'";
			$sql1=mysqli_query($conn,$sql);
echo $ans; }
?></label>	
<p style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" >&nbsp;&nbsp;&nbsp;&nbsp;TA 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" ><?php 
 if(isset($_POST['saveee']))
		{
			
			$host="127.0.0.1";
            $user="root";
            $pass="vallikkv";
            $db="newemployee";
            $connection=mysqli_connect("$host","$user","$pass","$db");
            mysqli_select_db($connection,"$db") or die("not connect");
            $regno=$_GET['id4'];	
			$ans=($tap/100)*$salaryfetched;
	        $conn=mysqli_connect("localhost","root","vallikkv","newemployee");
			$sql="update newempp set taa='$ans' where eid='$regno'";
			$sql1=mysqli_query($conn,$sql);
echo $ans; }
?></label>	
<p style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" >&nbsp;&nbsp;&nbsp;&nbsp;Medical
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="color:#660029;font-size:18px;font-weight:bold;padding-left:50px" ><?php 
 if(isset($_POST['saveee']))
		{
			
			$host="127.0.0.1";
            $user="root";
            $pass="vallikkv";
            $db="newemployee";
            $connection=mysqli_connect("$host","$user","$pass","$db");
            mysqli_select_db($connection,"$db") or die("not connect");
            $regno=$_GET['id4'];	
			$ans=($medicalp/100)*$salaryfetched;
	        $conn=mysqli_connect("localhost","root","vallikkv","newemployee");
			$sql="update newempp set medicala='$ans' where eid='$regno'";
			$sql1=mysqli_query($conn,$sql);
echo $ans; }
?></label>	

 </fieldset>


<?php  }?>

<br><br><br><br><br><br><br>
<hr>
<br><br>
<h6 align="center">Copyright © 2001–2015 payrollmanagementsystem.com</h6> 
		<?php 
 $connection->close(); ?>
