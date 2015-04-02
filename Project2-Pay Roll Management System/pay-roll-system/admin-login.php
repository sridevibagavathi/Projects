<html>
<head>
<title>WELCOME TO ADMIN HOME PAGE</title>
<style>
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }
</style>
</head>
<body style="background-image:url(blue.jpg); background-size: 100%">
<marquee scrollamount="10"><h1 align="center" style="color:white;font-size:32px;font-weight:bold"><u>!!! Welcome to Admin login !!!</u></h1></marquee>
<p style="text-align:justify; color:white;font-weight:bold;font-size:62px;padding-bottom:50px;padding-left:150px">
<img src="black.jpg" height="150" width="100" />
<b>PayRoll</b></p>
<form action='#' method='post' style="padding-top:3px;padding-left:900px">
<fieldset  style="background-color:#0A0A0A;width:300px;height:250px">
<div style="padding-left:35px">
<p style="color:white;font-weight:bold;font-size:25px;padding-left:25px">Admin Login</p>
<table cellspacing='5' align='center'>
<tr><td><p style="color:white"><b>Username:</b></p></td><td><input type='text' name='name'/></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><td><p style="color:white"><b>Password: </b></p></td><td><input type='password' name='pwd'/></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><td><input type='submit' name='submit' value='Submit'/></td><td><input type='reset' name='re' value='Reset'/></td></tr>
</table>
</div>
</fieldset>
</form>

<?php
session_start();
if(isset($_POST['submit']))
{
 mysql_connect('localhost','root','vallikkv') or die(mysql_error());
 mysql_select_db('newemployee') or die(mysql_error());
 $name=$_POST['name'];
 $pwd=$_POST['pwd'];
 if($name!=''&&$pwd!='')
 {
   $query=mysql_query("select * from admin where username='".$name."' and password='".$pwd."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['name']=$name;
    header('location:menu.html');
   }
   else
   {
    echo'<script>alert ("You entered username or password is incorrect")</script>';
   }
 }
 else
 {
  echo'<script>alert("Enter both username and password")</script>';
 }
}
?>
