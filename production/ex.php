<?php
session_start();
$uid=$_SESSION['uid'];
mysql_connect("localhost","root","");
	mysql_select_db("health_assistant");
$q4="SELECT name FROM user_registration WHERE user_id='$uid'";
$ex=mysql_query($q4);
$rw=mysql_fetch_row($ex);
$patnt=$rw[0];
require('html_table.php');

$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$tokenid=$_GET['tokenid'];
$query="SELECT * FROM appointments WHERE app_id='$tokenid'";
$res=mysql_query($query);
$row=mysql_fetch_row($res);
$docid= $row[4];
$time=$row[8];
 

							 $sel="SELECT name,venue FROM doctor_registration WHERE doctor_id='$docid'";
							 $exe=mysql_query($sel);
							 $row1=mysql_fetch_row($exe);
							 $docname=$row1[0];
							 $venue=$row1[1];
$html='<table border="0">
<tr>
<td width="400" height="80">Token No</td><td width="350" height="80" bgcolor="">'.$row[0].'</td>
</tr>
<tr>
<td width="400" height="80">Doctor Name</td><td width="350" height="80">'.$row1[0].'</td>

</tr>
<tr>
<td width="400" height="80">Patient Name</td><td width="350" height="80">'.$row[2].'</td>

</tr>

<tr>
<td width="400" height="80">Details</td><td width="350" height="80">'.$row[3].'</td>

</tr>
<tr>
<td width="400" height="80">Date and Time</td><td width="350" height="80">'.$row[5].'   '.$row[8].'   '.$row[9].'</td>

</tr>

<tr>
<td width="400" height="80">Venue</td><td width="350" height="80">'.$venue.'</td>

</tr>
<tr>
<td width="400" height="80">Time</td><td width="350" height="80">'.$time.'</td>

</tr>
<tr>
<td width="400" height="80">Gender</td><td width="350" height="80">'.$row[7].'</td>

</tr>
</table>';

$pdf->WriteHTML($html);
$pdf->Output();
?>
