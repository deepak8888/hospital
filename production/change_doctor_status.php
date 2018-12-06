<?php
mysql_connect("localhost","root","");
mysql_select_db("health_assistant");
$doc_id=$_GET['docid'];
$query="UPDATE doctor_registration  SET status='enable' WHERE doctor_id='$doc_id'";
mysql_query($query);
header("location:doc.php");
?>