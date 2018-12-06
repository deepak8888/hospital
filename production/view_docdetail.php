<?php
session_start();
if(!isset($_SESSION['uid']))
{
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function()
{
	$('#search').keyup(function()
	{
		searchTable($(this).val());
	});
});

function searchTable(inputVal)
{
	var table = $('#tblData');
	table.find('tr').each(function(index, row)
	{
		var allCells = $(row).find('td');
		if(allCells.length > 0)
		{
			var found = false;
			allCells.each(function(index, td)
			{
				var regExp = new RegExp(inputVal, 'i');
				if(regExp.test($(td).text()))
				{
					found = true;
					return false;
				}
			});
			if(found == true)$(row).show();else $(row).hide();
		}
	});
}
</script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Health Assistant | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
  <?php
if(isset($_GET['msg'])){
	$msg=$_GET['msg'];
	if($msg=='already rated'){
		echo '<script language="javascript">';
echo 'alert("Already rated")';
echo '</script>';
		}
	}
?>
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
             
              <a href="admin_logout.php" data-toggle="tooltip" data-placement="top" title="Logout">
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
                  
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                 
                    </i>
                   
                  
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
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
              <div class="title_left">
                <h3></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                   
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
				  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="search" class="form-control col-md-7 col-xs-12"  name="search" placeholder="search" required type="text"></br>
                        </div>
                  <div class="x_content">
				  
				 
                    <form method="post" class="form-horizontal form-label-left" >
					
					
					
					 <div class="table-responsive">
					
                      <table class="table table-striped jambo_table bulk_action"id="tblData">
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">Name </th>
                            <th class="column-title">Adress</th>
                            <th class="column-title">Email </th>
                            <th class="column-title">Photo</th>
                            <th class="column-title">Phone </th>
                           
							<th class="column-title">Gender</th>
							<th class="column-title">Qualification </th>
							<th class="column-title">Specialisation</th>
							<th colspan="2" scope="col">&nbsp;</th>
                            
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
						<?php
  mysql_connect("localhost","root","");
mysql_select_db("health_assistant");
 $query="SELECT   name, address, email, phone, photo, gender, qualification, specialization,doctor_id,rating FROM doctor_registration WHERE STATUS='enable' ORDER BY rating DESC";
$res=mysql_query($query);
while($arr=mysql_fetch_array($res)){
?>

                          <tr class="even pointer">
                           
 <td><?php echo $arr[0];?></td>
    <td><?php echo $arr[1];?></td>
    <td><?php echo $arr[2];?></td>
    <td><img src=doctor_photo/<?php echo $arr[4];?> height="100"width="150"></td>
    <td><?php echo $arr[3];?></td>
    <td><?php echo $arr[5];?></td>
    <td><?php echo $arr[6];?></td>
    <td><?php echo $arr[7];?></td>
    <td width="149">
    AVERAGE:<?php echo $arr[9];?><br>
    <a href="rating.php?docid=<?php echo $arr[8]?>&rating=1">1</a>
        <a href="rating.php?docid=<?php echo $arr[8]?>&rating=2">2</a>
    <a href="rating.php?docid=<?php echo $arr[8]?>&rating=3">3</a>
    <a href="rating.php?docid=<?php echo $arr[8]?>&rating=4">4</a>
    <a href="rating.php?docid=<?php echo $arr[8]?>&rating=5">5</a>

    
    </td>
                          </tr>
						  <?php
	}
	?>
                          
                          
                          
                          
                          

                         
                        </tbody>
                      </table>
                    </div>

                      
                     



					   
                      
                     
                       <div class="item form-group">
                        
                      </div>
                    <br>
					<br>
					 <br>
                      <br>
					  <br>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                       
                      </div>
                    </form>
					<?php
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
		header("location:patient.php");
	}
	else
	{
		echo"invalid";
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
		header("location:doctor.php");
	}
	else
	{
		echo"invalid";
	}
	
	
}
else{
	if($username=='admin'&&$password=='admin'){
		$row=mysql_fetch_row($vary);
		$_SESSION['adminid']=$username;
		header("location:adminhome.php");
		}
		else{
			echo "invalid";
			}
	}
}

?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Health Assistant <a href="https://colorlib.com">ADA</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
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
    <!-- validator -->

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <!-- validator -->
    
    <!-- /validator -->
  </body>
</html>