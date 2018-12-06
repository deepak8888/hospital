<?php
$username=$_GET['username'];
mysql_connect("localhost","root","");
mysql_select_db("health_assistant");

$querry="SELECT * FROM user_registration WHERE username='$username'";
$res=mysql_query($querry);
 $no=mysql_num_rows($res);
$querry1="SELECT * FROM doctor_registration WHERE username='$username'";
$res1=mysql_query($querry1);
$no1=mysql_num_rows($res1);
if($no==0&&$no1==0){
	echo "true";
	}
else{
	echo "false";
	}	
	
?>