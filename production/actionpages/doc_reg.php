<?php
mysql_connect("localhost","root","");
mysql_select_db("health_assistant");
if(isset ($_POST['submit']))
{
	
	$name=$_POST['name'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$photo=$_FILES['photo']['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$qualification=$_POST['qualification'];
	$specialization=$_POST['specialization'];
	$certificate=$_FILES['certificate']['name'];
	if(isset($_POST['gender'])){
		$gender=$_POST['gender'];
	}
	else
	$gender="";
	
	$query="INSERT INTO doctor_registration( name, address, email, phone, photo, username, password, gender, qualification, specialization, certificate,status) VALUES ('$name','$address','$email','$phone','$photo','$username','$password','$gender','$qualification','$specialization','$certificate','disable')";
	move_uploaded_file($_FILES["photo"]["tmp_name"],"../doctor_photo/".$photo);
	move_uploaded_file($_FILES["certificate"]["tmp_name"],"../doctor_certificate/".$certificate);
    mysql_query($query);
	header("location:../doct_reg.php?msg=saved Sucessfully");

}

?>