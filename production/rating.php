<?php
session_start();
 $uid=$_SESSION['uid'];
  mysql_connect("localhost","root","");
mysql_select_db("health_assistant");
 $docid=$_GET['docid'];
 $rating=$_GET['rating'];
  $select=mysql_query("SELECT * FROM rating WHERE user_id='$uid' AND doc_id='$docid'");
 if (mysql_num_rows($select) == 0) {

 $query="INSERT INTO rating(doc_id, user_id, rating) VALUES ('$docid','$uid','$rating')";
  mysql_query($query);

 $averagereviewquery = "SELECT AVG(rating) from rating where doc_id=".$docid;
 $averagereviewresult=mysql_query($averagereviewquery);
               
$avg_rate= mysql_result($averagereviewresult, 0);
$update="UPDATE doctor_registration SET rating='$avg_rate' WHERE doctor_id='$docid'";

mysql_query($update);
 echo $msg="sucess";
 }
 else{
	  $msg="already rated";

	 }
header("location:view_docdetail.php?msg=$msg");	 
?> 