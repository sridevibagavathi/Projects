<?php
$host="127.0.0.1";
$user="root";
$pass="vallikkv";
$db="newemployee";
$connection=mysqli_connect("$host","$user","$pass","$db");
mysqli_select_db($connection,"$db") or die("not connect"); 
?>