<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("health_assistant");
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$usertype=$_POST['usertype'];
if($usertype=="user")
{
	$query="select username,password,user_id from user_registration where username='$username' and password='$password'";
	$vary=mysql_query($query);
	if(mysql_num_rows($vary)==1)
	{
		$row=mysql_fetch_row($vary);
		$_SESSION['uid']=$row[2];
		header("location:../view_article.php");
	}
	else
	{
header("location:../login.php?msg=invalid");
	}
}

else if($usertype=="doctor")
{
	$query="select username,password,doctor_id from doctor_registration where username='$username' and password='$password' and status='enable'";
	
	$vary=mysql_query($query);
	if(mysql_num_rows($vary)==1)
	{
		$row=mysql_fetch_row($vary);
		$_SESSION['docid']=$row[2];
		header("location:../article.php");
	}
	else
	{
header("location:../login.php?msg=invalid");
	}
	
	
}
else{
	if($username=='admin'&&$password=='admin'){
		$_SESSION['adminid']=$username;
		header("location:../doc.php");
		}
		else{
header("location:../login.php?msg=invalid");
			}
	}
}

?>