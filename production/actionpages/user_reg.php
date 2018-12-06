<?php
mysql_connect("localhost","root","");
mysql_select_db("health_assistant");
if(isset($_POST['submit']))
{
	
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$phone=$_POST['number'];
$photo=$_FILES['photo']['name'];
$username=$_POST['username'];
$password=$_POST['password'];
	$gender=$_POST['gender'];
	
	


	$query="INSERT INTO user_registration( name, adress, email, phone, photo, username, password, gender) VALUES ('$name','$address','$email','$phone','$photo','$username','$password','$gender')";
	move_uploaded_file($_FILES["photo"]["tmp_name"],"../user/".$photo);
	mysql_query($query);
header("location:../user.php?msg=saved Sucessfully");

}
?>