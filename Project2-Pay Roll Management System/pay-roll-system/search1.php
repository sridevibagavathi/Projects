<html>
<body>


<?php
 $host="127.0.0.1";
$user="root";
$pass="vallikkv";
$db="newemployee";
 $connection=mysqli_connect("$host","$user","$pass","$db");
 mysqli_select_db($connection,"$db") or die("not connect");
 $regno=$_GET['id'];
 $sql="select eid,ename,fathername,gender from newemp where eid=".$regno;
 $result=$connection->query($sql);
 if($result->num_rows>0)
 {
  while($row=$result->fetch_assoc())
 {
 ?>
 
 <label><?php echo $row['eid']; ?></label>
  <label><?php echo $row['ename']; ?></label>
  <label><?php echo $row['fathername']; ?></label>
 <?php }} ?>
 <?php 
 $connection->close(); ?>


</body>
</html>

