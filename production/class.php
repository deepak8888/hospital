<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['uid']))
{
	header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-Tude | </title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script language="javascript" type="text/javascript">
$(document).ready(function() {
	var kasargod=[{display:"10:00am-11:am",value:"10:00am-11:am"},
	{display:"11:00am-12:00pm",value:"11:00am-12:00pm"},
	];
   var kannur=[{display:"02:00pm-03:00pm",value:"02:00pm-03:00pm"},
	{display:"03:00pm-04:00pm",value:"03:00pm-04:00pm"},
	
	];
	var wayanad=[{display:"04:00pm-05:00pm",value:"4:00pm-05:00pm"},
	
	];
	var kozhikode=[{display:"Beypore",value:"beypore"},
	{display:"Palazhi",value:"palazhi"},
	{display:"Pallikara",value:"pallikara"},
	{display:"Koombara",value:"koombara"},
	{display:"Palayam",value:"palayam"},
	];
	var malappuram=[{display:"Manjeri",value:"manjeri"},
	{display:"Nilambur",value:"Nilambur"},
	{display:"Kondotty",value:"kondotty"},
	{display:"Kuttipuram",value:"kuttipuram"},
	{display:"Kottakal",value:"kottakal"},
	];
	var palakkad=[{display:"Alathur",value:"alathur"},
	{display:"Malampuzha",value:"Malampuzha"},
	{display:"Nemmara",value:"nemmara"},
	{display:"Pattambi",value:"pattambi"},
	{display:"Koottanad",value:"koottanad"},
	];
	var thrissur=[{display:"Irinjalakuda",value:"irinjalakuda"},
	{display:"viyyur",value:"viyyur"},
	{display:"Amala nagar",value:"amala nagar"},
	{display:"Cheroor",value:"cheroor"},
	{display:"Kodakara",value:"kodakara"},
	];
	var ernakulam=[{display:"Edappally",value:"edappally"},
	{display:"North paravoor",value:"North paravoor"},
	{display:"kalady",value:"kalady"},
	{display:"Angamaly",value:"angamaly"},
	{display:"Aluva",value:"aluva"},
	];
	var idukki=[{display:"Kuttikanam",value:"kuttikanam"},
	{display:"Thodupuzha",value:"thodupuzha"},
	{display:"kattappana",value:"kattappana"},
	{display:"Munnar",value:"Munnar"},
	{display:"Peermade",value:"peermade"},
	];
	var kottayam=[{display:"Pala",value:"pala"},
	{display:"Poonjar",value:"poonjar"},
	{display:"Ettumanoor",value:"ettumanoor"},
	{display:"Pampady",value:"pampady"},
	{display:"Manarcaud",value:"manarcaud"},
	];
	var alappuzha=[{display:"Ambalappuzha",value:"ambalappuzha"},
	{display:"Haripad",value:"haripad"},
	{display:"Kayamkulam",value:"kayamkulam"},
	{display:"Kuttanad",value:"kuttanad"},
	{display:"Kavalam",value:"kavalam"},
	];
	var pathanamthitta=[{display:"Manjady",value:"manjady"},
	{display:"Ranny",value:"ranny"},
	{display:"Thiruvalla",value:"thiruvalla"},
	{display:"Panthalam",value:"panthalam"},
	{display:"Adoor",value:"adoor"},
	];
	var kollam=[{display:"Puthoor",value:"puthoor"},
	{display:"Oachira",value:"oachira"},
	{display:"Kuttichira",value:"kuttichira"},
	{display:"Kundara",value:"kundara"},
	{display:"Ayoor",value:"ayoor"},
	];
	var thiruvananthapuram=[{display:"Pattom",value:"pattom"},
	{display:"Pattoor",value:"pattoor"},
	{display:"Ambalamukku",value:"ambalamukku"},
	{display:"Pettah",value:"pettah"},
	{display:"Vaikkom",value:"vaikkom"},
	];
	$("#district").change(function(){
		
	var district=$(this).val();
	switch(district){
		case 'MORNING':
		list(kasargod);
		break;
		case 'AFTERNOON':
		list(kannur);
		break;
		case 'EVENING':
		list(wayanad);
		break;
		case 'KOZHIKODE':
		list(kozhikode);
		break;
		case 'MALAPPURAM':
		list(malappuram);
		break;
		case 'PALAKKAD':
		list(palakkad);
		break;
		case 'THRISSUR':
		list(thrissur);
		break;
		case 'ERNAKULAM':
		list(ernakulam);
		break;
		case 'IDUKKI':
		list(idukki);
		break;
		case 'KOTTAYAM':
		list(kottayam);
		break;
		case 'ALAPPUZHA':
		list(alappuzha);
		break;
		case 'PATHANAMTHITTA':
		list(pathanamthitta);
		break;
		case 'KOLLAM':
		list(kollam);
		break;
		case 'THIRUVANANTHAPURAM':
		list(thiruvananthapuram);
		break;
		default:
		$("#locality").html('');
		break;
		}
		});
		function list(array_list)
{
    $("#locality").html(""); 
	//reset child options
    $(array_list).each(function (i) {
		//populate child options 
        $("#locality").append("<option value="+array_list[i].value+">"+array_list[i].display+"</option>");
    });
}

});
</script>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>
<script type="text/javascript">

	function deleteitem(did){
		if(confirm('Are you sure you want to delete?')){
			window.location.href='actionpages/class_action.php?delete_id='+did;
			}
		}
	
</script>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
         <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-medkit"></i> <span>Health Assistant</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
           
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li><a href="view_article.php"><i class="fa fa-pencil-square-o"></i> Articles </a>
                   
                  </li>
                  <li><a href="view_docdetail.php"><i class="fa fa-pencil-square-o"></i> Doctors </a>
                  
                  </li>
                
				   <li><a href="class.php"><i class="fa fa-pencil-square-o"></i>Appointments</a>
                   
                  </li>

                  <li><a href="bmi.php"><i class="fa fa-pencil-square-o"></i> BMI calculation </a>
                   
                  </li>
                  
                 
                </ul>
              </div>
             

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
             
              <a href="logout_user.php" data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
       
       


	   </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
               <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                   
                    <li><a href="logout_staff.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li> 

               
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              

             
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
               

                 
                  <div class="x_content">
                    <br />
                      <form id="class" name="form1"  method="post"  class="form-horizontal form-label-left" action="">

                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="name"  id="textfield2" required class="form-control col-md-7 col-xs-12" value="" required>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Relationship</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                         <select id="eventstarttime" name="relation" class="form-control">
						
						<option value="Self">Self</option>
						
												<option value="Husband">Husband</option>
												<option value="Wife">Wife</option>
												<option value="Father">Father</option>
												<option value="Mother">Mother</option>
												<option value="Brother">Brother</option>
												<option value="Sister">Sister</option>
												<option value="Other">Other</option>

						</select> 
                        
						</div>
                      </div>
 <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Gender *:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="radio" class="flat" name="gender" id="genderM" value="Male" checked="" required /> Male:
                        <input type="radio" class="flat" name="gender" id="genderF" value="Female" />Female
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Details: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <textarea name="details" class="form-control" rows="3" required></textarea>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Time<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="time" id="district" required>
						  							<option value="">select</option>

							<option value="MORNING">MORNING</option>
							<option value="AFTERNOON">AFTERNOON</option>
							<option value="EVENING">EVENING</option>
							
                          </select>
                        </div>
                      </div>
					  
					    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name" required>Time Slot <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="slot" id="locality" >
                             <option value="">Choose Slot</option>
							
                          </select>
                        </div>
                       
                      </div>
					  
                      <div class="form-group" >
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Date</label>
						    <fieldset>
                          <div class="control-group">
                            <div class="controls">
                              <div class="col-md-5 xdisplay_inputx form-group has-feedback">
                                <input type="text" name="date" class="form-control has-feedback-left" id="single_cal2" placeholder="First Name" aria-describedby="inputSuccess2Status2"  value="" required>
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      
                      
					  <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Doctor Name</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                         <select id="eventstarttime" name="docname" class="form-control">
						<?php
						mysql_connect("localhost","root","");
	mysql_select_db("health_assistant");
	$qry="SELECT doctor_id, name FROM doctor_registration";
	$exe=mysql_query($qry);
	while($arr=mysql_fetch_array($exe)){
						?> 
						<option value="<?php echo $arr[0];?>"><?php echo $arr[1];?></option>
						
						<?php
	}
						?>
						</select> 
                        
						</div>
                      </div>
 
	
  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fee <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="fee"  id="textfield2"  class="form-control col-md-7 col-xs-12" value="150" readonly>
                        </div>
                      </div>
       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bank <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="bank"  id="textfield2"  class="form-control col-md-7 col-xs-12" required >
                        </div>
                      </div>
                    
           <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Branch <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="branch"  id="textfield2"  class="form-control col-md-7 col-xs-12" required>
                        </div>
                      </div>
              <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">IFSC Code <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="branch"  id="textfield2"  class="form-control col-md-7 col-xs-12" required>
                        </div>
                      </div>
                          
                                               
                       
                     
   
	
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <input type="submit" name="submit" class="btn btn-primary" value="Get Appointment">
                          <input type="reset" class="btn btn-success">
                        </div>
                      </div>
                      
                      <div class="x_content">

                   
                    </form>
                  </div>
				   <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          
                          <th>Name</th>
                          <th>Relationship</th>
                          <th>Gender</th>
						  <th>Details</th>
						  <th>Date</th>
						  <th>Doctor Name</th>
						  <th>Download Token</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
					  $userid=$_SESSION['uid'];
$querry="select * from appointments where user_id='$userid'";
$res=mysql_query($querry);
while($result=mysql_fetch_array($res))
{
?>  
                        <tr>
                          <th scope="row"><?php echo $result[2];?></th>
                          <td><?php echo $result[6];?></td>
                          <td><?php echo $result[7];?></td>
                          <td><?php echo $result[3];?></td>
						  <td><?php echo $result[5];?></td>
						  	 <td><?php $docid= $result[4];
							 $sel="SELECT name FROM doctor_registration WHERE doctor_id='$docid'";
							 $exe=mysql_query($sel);
							 $row=mysql_fetch_row($exe);
							 echo $row[0];
							 ?></td>

						  <td>
                          <a href="ex.php?tokenid=<?php echo $result[0];?>&docid=<?php echo $docid;?>" target="_blank"><button type="button" class="btn btn-round btn-success">Download </button></a>
						  </td>
                        </tr>
						<?php
}
?>
                      
                      </tbody>
                    </table>

                  </div>
				  <?php
				//echo   $no=echo(rand(1,10));
			$no= rand(1, 10);

 $time = date('h:i:s A', strtotime()+($no*36000)); // $today is today date
//echo	$no=echo(rand(1,10));

//date = date('h:i:s A', time()+($no*36000)); //
	if(isset($_POST['submit'])){
	$uid=$_SESSION['uid'];
	$name=$_POST['name'];
	$details=mysql_real_escape_string($_POST['details']);
	$docname=$_POST['docname'];
	$date=$_POST['date'];
		$relation=$_POST['relation'];
		$gender=$_POST['gender'];
$time=mysql_real_escape_string($_POST['time']);
$slot=mysql_real_escape_string($_POST['slot']);
	
	$date= date('Y-m-d', strtotime($date));
	$check="SELECT * FROM datedetails WHERE date='$date' and doc_id='$docname'";
$exe=mysql_query($check);
 $number=mysql_num_rows($exe);
if($number==0){
	 $c1="SELECT * FROM appointments WHERE doc_id='$docname' and date='$date'";
$q1=mysql_query($c1);
 $n1=mysql_num_rows($q1);
 
  $c1="SELECT * FROM appointments WHERE doc_id='$docname' and date='$date'";
$q1=mysql_query($c1);
 $n1=mysql_num_rows($q1);
  $c1="SELECT * FROM appointments WHERE doc_id='$docname' and date='$date' and time='$time'";
$q1=mysql_query($c1);
 $n2=mysql_num_rows($q1);
if($n1>=15){
	echo "<script type=\"text/javascript\">".
       "alert('No appointment in this date');".
        "</script>";
}
elseif($n2==5){
	
echo "<script type=\"text/javascript\">".
       "alert('No appointment in $time');".
        "</script>";
}
//$c2="";

else{
	//$no=echo(rand(1,10));
//$date = date('h:i:s A', time()+($no*36000)); // time() returns a time in seconds already

	 $query="INSERT INTO appointments(user_id, name, deatails, doc_id, date,relation,gender,time,slot) VALUES ('$uid','$name','$details','$docname','$date','$relation','$gender','$time','$slot')";
	mysql_query($query);
	echo "<script type=\"text/javascript\">".
       "alert('success');".
        "</script>";
}
}
else{
	echo "Doctor is on leave in this date";
}
	}
?>
                </div>
              </div>
            </div>

          
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js">
    </script>
	

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

    <!-- bootstrap-daterangepicker -->
    <script>
      $(document).ready(function() {
        $('#birthday').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_4"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->

    <!-- bootstrap-wysiwyg -->
    <script>
    $(document).ready(function() {
        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange_right span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '12/31/2015',
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'right',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'MM/DD/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };

        $('#reportrange_right span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

        $('#reportrange_right').daterangepicker(optionSet1, cb);

        $('#reportrange_right').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
        $('#reportrange_right').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });
        $('#reportrange_right').on('apply.daterangepicker', function(ev, picker) {
          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange_right').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });

        $('#options1').click(function() {
          $('#reportrange_right').data('daterangepicker').setOptions(optionSet1, cb);
        });

        $('#options2').click(function() {
          $('#reportrange_right').data('daterangepicker').setOptions(optionSet2, cb);
        });

        $('#destroy').click(function() {
          $('#reportrange_right').data('daterangepicker').remove();
        });

      });
    </script>

    <script>
      $(document).ready(function() {
        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '12/31/2015',
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'MM/DD/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });
        $('#options1').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
          $('#reportrange').data('daterangepicker').remove();
        });
      });
    </script>

    <script>
      $(document).ready(function() {
        $('#single_cal1').daterangepicker({
          singleDatePicker: true,
          singleClasses: "picker_1"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal2').daterangepicker({
          singleDatePicker: true,
          singleClasses: "picker_2",
		      minDate: moment(),
			      maxDate: moment("12/30/2017"),


        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal3').daterangepicker({
          singleDatePicker: true,
          singleClasses: "picker_3"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal4').daterangepicker({
          singleDatePicker: true,
          singleClasses: "picker_4"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
      });
    </script>

    <script>
      $(document).ready(function() {
        $('#reservation').daterangepicker(null, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->

    <!-- Ion.RangeSlider -->
    <script>
      $(document).ready(function() {
        $("#range_27").ionRangeSlider({
          type: "double",
          min: 1000000,
          max: 2000000,
          grid: true,
          force_edges: true
        });
        $("#range").ionRangeSlider({
          hide_min_max: true,
          keyboard: true,
          min: 0,
          max: 5000,
          from: 1000,
          to: 4000,
          type: 'double',
          step: 1,
          prefix: "$",
          grid: true
        });
        $("#range_25").ionRangeSlider({
          type: "double",
          min: 1000000,
          max: 2000000,
          grid: true
        });
        $("#range_26").ionRangeSlider({
          type: "double",
          min: 0,
          max: 10000,
          step: 500,
          grid: true,
          grid_snap: true
        });
        $("#range_31").ionRangeSlider({
          type: "double",
          min: 0,
          max: 100,
          from: 30,
          to: 70,
          from_fixed: true
        });
        $(".range_min_max").ionRangeSlider({
          type: "double",
          min: 0,
          max: 100,
          from: 30,
          to: 70,
          max_interval: 50
        });
        $(".range_time24").ionRangeSlider({
          min: +moment().subtract(12, "hours").format("X"),
          max: +moment().format("X"),
          from: +moment().subtract(6, "hours").format("X"),
          grid: true,
          force_edges: true,
          prettify: function(num) {
            var m = moment(num, "X");
            return m.format("Do MMMM, HH:mm");
          }
        });
      });
    </script>
    <!-- /Ion.RangeSlider -->

    <!-- Bootstrap Colorpicker -->
    <script>
      $(document).ready(function() {
        $('.demo1').colorpicker();
        $('.demo2').colorpicker();

        $('#demo_forceformat').colorpicker({
            format: 'rgba',
            horizontal: true
        });

        $('#demo_forceformat3').colorpicker({
            format: 'rgba',
        });

        $('.demo-auto').colorpicker();
      });
    </script>
    <!-- /Bootstrap Colorpicker -->

    <!-- jquery.inputmask -->
    <script>
      $(document).ready(function() {
        $(":input").inputmask();
      });
    </script>
    <!-- /jquery.inputmask -->

    <!-- jQuery Knob -->
    <script>
      $(function($) {

        $(".knob").knob({
          change: function(value) {
            //console.log("change : " + value);
          },
          release: function(value) {
            //console.log(this.$.attr('value'));
            console.log("release : " + value);
          },
          cancel: function() {
            console.log("cancel : ", this);
          },
          /*format : function (value) {
           return value + '%';
           },*/
          draw: function() {

            // "tron" case
            if (this.$.data('skin') == 'tron') {

              this.cursorExt = 0.3;

              var a = this.arc(this.cv) // Arc
                ,
                pa // Previous arc
                , r = 1;

              this.g.lineWidth = this.lineWidth;

              if (this.o.displayPrevious) {
                pa = this.arc(this.v);
                this.g.beginPath();
                this.g.strokeStyle = this.pColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, pa.s, pa.e, pa.d);
                this.g.stroke();
              }

              this.g.beginPath();
              this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
              this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, a.s, a.e, a.d);
              this.g.stroke();

              this.g.lineWidth = 2;
              this.g.beginPath();
              this.g.strokeStyle = this.o.fgColor;
              this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
              this.g.stroke();

              return false;
            }
          }
        });

        // Example of infinite knob, iPod click wheel
        var v, up = 0,
          down = 0,
          i = 0,
          $idir = $("div.idir"),
          $ival = $("div.ival"),
          incr = function() {
            i++;
            $idir.show().html("+").fadeOut();
            $ival.html(i);
          },
          decr = function() {
            i--;
            $idir.show().html("-").fadeOut();
            $ival.html(i);
          };
        $("input.infinite").knob({
          min: 0,
          max: 20,
          stopper: false,
          change: function() {
            if (v > this.cv) {
              if (up) {
                decr();
                up = 0;
              } else {
                up = 1;
                down = 0;
              }
            } else {
              if (v < this.cv) {
                if (down) {
                  incr();
                  down = 0;
                } else {
                  down = 1;
                  up = 0;
                }
              }
            }
            v = this.cv;
          }
        });
      });
    </script>
    <!-- /jQuery Knob -->

    <!-- Cropper -->
    <script>
      $(document).ready(function() {
        var $image = $('#image');
        var $download = $('#download');
        var $dataX = $('#dataX');
        var $dataY = $('#dataY');
        var $dataHeight = $('#dataHeight');
        var $dataWidth = $('#dataWidth');
        var $dataRotate = $('#dataRotate');
        var $dataScaleX = $('#dataScaleX');
        var $dataScaleY = $('#dataScaleY');
        var options = {
              aspectRatio: 16 / 9,
              preview: '.img-preview',
              crop: function (e) {
                $dataX.val(Math.round(e.x));
                $dataY.val(Math.round(e.y));
                $dataHeight.val(Math.round(e.height));
                $dataWidth.val(Math.round(e.width));
                $dataRotate.val(e.rotate);
                $dataScaleX.val(e.scaleX);
                $dataScaleY.val(e.scaleY);
              }
            };


        // Tooltip
        $('[data-toggle="tooltip"]').tooltip();


        // Cropper
        $image.on({
          'build.cropper': function (e) {
            console.log(e.type);
          },
          'built.cropper': function (e) {
            console.log(e.type);
          },
          'cropstart.cropper': function (e) {
            console.log(e.type, e.action);
          },
          'cropmove.cropper': function (e) {
            console.log(e.type, e.action);
          },
          'cropend.cropper': function (e) {
            console.log(e.type, e.action);
          },
          'crop.cropper': function (e) {
            console.log(e.type, e.x, e.y, e.width, e.height, e.rotate, e.scaleX, e.scaleY);
          },
          'zoom.cropper': function (e) {
            console.log(e.type, e.ratio);
          }
        }).cropper(options);


        // Buttons
        if (!$.isFunction(document.createElement('canvas').getContext)) {
          $('button[data-method="getCroppedCanvas"]').prop('disabled', true);
        }

        if (typeof document.createElement('cropper').style.transition === 'undefined') {
          $('button[data-method="rotate"]').prop('disabled', true);
          $('button[data-method="scale"]').prop('disabled', true);
        }


        // Download
        if (typeof $download[0].download === 'undefined') {
          $download.addClass('disabled');
        }


        // Options
        $('.docs-toggles').on('change', 'input', function () {
          var $this = $(this);
          var name = $this.attr('name');
          var type = $this.prop('type');
          var cropBoxData;
          var canvasData;

          if (!$image.data('cropper')) {
            return;
          }

          if (type === 'checkbox') {
            options[name] = $this.prop('checked');
            cropBoxData = $image.cropper('getCropBoxData');
            canvasData = $image.cropper('getCanvasData');

            options.built = function () {
              $image.cropper('setCropBoxData', cropBoxData);
              $image.cropper('setCanvasData', canvasData);
            };
          } else if (type === 'radio') {
            options[name] = $this.val();
          }

          $image.cropper('destroy').cropper(options);
        });


        // Methods
        $('.docs-buttons').on('click', '[data-method]', function () {
          var $this = $(this);
          var data = $this.data();
          var $target;
          var result;

          if ($this.prop('disabled') || $this.hasClass('disabled')) {
            return;
          }

          if ($image.data('cropper') && data.method) {
            data = $.extend({}, data); // Clone a new one

            if (typeof data.target !== 'undefined') {
              $target = $(data.target);

              if (typeof data.option === 'undefined') {
                try {
                  data.option = JSON.parse($target.val());
                } catch (e) {
                  console.log(e.message);
                }
              }
            }

            result = $image.cropper(data.method, data.option, data.secondOption);

            switch (data.method) {
              case 'scaleX':
              case 'scaleY':
                $(this).data('option', -data.option);
                break;

              case 'getCroppedCanvas':
                if (result) {

                  // Bootstrap's Modal
                  $('#getCroppedCanvasModal').modal().find('.modal-body').html(result);

                  if (!$download.hasClass('disabled')) {
                    $download.attr('href', result.toDataURL());
                  }
                }

                break;
            }

            if ($.isPlainObject(result) && $target) {
              try {
                $target.val(JSON.stringify(result));
              } catch (e) {
                console.log(e.message);
              }
            }

          }
        });

        // Keyboard
        $(document.body).on('keydown', function (e) {
          if (!$image.data('cropper') || this.scrollTop > 300) {
            return;
          }

          switch (e.which) {
            case 37:
              e.preventDefault();
              $image.cropper('move', -1, 0);
              break;

            case 38:
              e.preventDefault();
              $image.cropper('move', 0, -1);
              break;

            case 39:
              e.preventDefault();
              $image.cropper('move', 1, 0);
              break;

            case 40:
              e.preventDefault();
              $image.cropper('move', 0, 1);
              break;
          }
        });

        // Import image
        var $inputImage = $('#inputImage');
        var URL = window.URL || window.webkitURL;
        var blobURL;

        if (URL) {
          $inputImage.change(function () {
            var files = this.files;
            var file;

            if (!$image.data('cropper')) {
              return;
            }

            if (files && files.length) {
              file = files[0];

              if (/^image\/\w+$/.test(file.type)) {
                blobURL = URL.createObjectURL(file);
                $image.one('built.cropper', function () {

                  // Revoke when load complete
                  URL.revokeObjectURL(blobURL);
                }).cropper('reset').cropper('replace', blobURL);
                $inputImage.val('');
              } else {
                window.alert('Please choose an image file.');
              }
            }
          });
        } else {
          $inputImage.prop('disabled', true).parent().addClass('disabled');
        }
      });
    </script>
	


    <!-- /bootstrap-wysiwyg -->

    <!-- Select2 -->
    
    <!-- /Starrr -->
  
  </body>
</html>
