<?php
require("init.php");

if(isset($_POST['submit']))
	{
$Db_objects->user_name=trim($_POST['uname']);$Db_objects->contact=trim($_POST['contact']);$Db_objects->second_contact=trim($_POST['altcontact']);
$Db_objects->city=trim($_POST['city']);$Db_objects->email=trim($_POST['email']);
$Db_objects->course=trim($_POST['course']);
$Db_objects->source="Landing_Page";$Db_objects->cdtime=date('Y-m-d H:i:s');
$fdb_ftable_fields=db_objects::$db_ftable_fields;
$fdb_ftable=db_objects::$db_ftable;
$Db_objects->create($fdb_ftable,$fdb_ftable_fields);

$Uname = str_replace(' ', '%20',$Db_objects->user_name);$Course = str_replace(' ', '%20',$Db_objects->course);
$Contact = str_replace(' ', '%20',$Db_objects->contact);
$msg="(New%20Lead)%20%20Name:%20$Uname%20Course:%20$Course%20Contact:%20$Contact";
$Contact=9808156144;
$call_data->send_sms($Contact,$msg);	
$call_data->redirect("index.php");
	}
?>  
<head>
	<meta charset="utf-8">
	<meta charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Vidya Knowledge Park</title>

	<meta name="description" content="">
	<meta name="author" content="">

	<!--[if lt IE 9]> 
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->
<script>
function toupper(str,id)
	{		
var upper=str.toUpperCase();
document.getElementById(id).value=upper;
	}	
</script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/css/whhg.css" />
	<link rel="stylesheet" href="assets/css/grid.css">
	<link rel="stylesheet" href="assets/css/styles.css">

	<!-- TODO: uncomment skin styles. 
	     Note, you can use another skin found in the "css" folder, or create your own one --> 
	<!-- <link rel="stylesheet" href="css/skin-dark.css"> -->

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="css/ie.css">
	<![endif]-->

	<link rel="icon" type="image/png" href="assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">

</head>
<body>
	
	<!--  LOGOTYPE LINE  -->
	<!--  TODO: Change domain name and call to action message below -->
	<div id="Head" class="container">
		<div class="row">
			<div class="col span_16">
				<img src="assets/images/loho.png">
					
			</div>
			
		</div>
	</div>

	<div id="Content" class="container">
	
		<div class="row special">
			<div class="col span_24">
				<h3 class="align-center">FUTURES MADE HERE</h3>
			</div>
		</div>

		<h2 class="align-center margin">What is your query ? </h2>
		<form method="POST">
		<div class="row padding">
				
			<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="uname" id="uname" onkeyup="toupper(this.value,this.id)" required 
class="form-control" placeholder="Name" tabindex="5">
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="contact" id="contact" onkeyup="toupper(this.value,this.id)" 
						required class="form-control input-lg" maxlength="10" placeholder="Contact Number" tabindex="6">
					</div>
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="altcontact" maxlength="10" id="altcontact" onkeyup="toupper(this.value,this.id)" 
						required class="form-control input-lg" placeholder="Alternative Contact Number" tabindex="5">
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="city" id="city" onkeyup="toupper(this.value,this.id)" 
						required class="form-control input-lg" placeholder="City" tabindex="5">
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="email"  id="email" 
						class="form-control input-lg" required  placeholder="E-mail" tabindex="6">
					</div>
				</div>
				
				
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group">
					<select name="course" required id="course" class="form-control input-lg">   
                    <option value=""> Select Course</option> <option value="B.Tech">B.Tech</option> <option value="MBA"> MBA</option> 
<option value="Fashion"> Fashion</option> <option value="BBA"> BBA</option> <option value="BCA">BCA</option> 
 <option value="Polytechnic">Polytechnic</option> 					
                    </select>					
                    </div>
				</div>
			
			
		
		</div> <!-- end of row -->
		<div class="row" style="margin-bottom:30px;">
				<div class="col-xs-4 col-md-12">
                <input type="submit"  value="Submit Your Query" name="submit" class="btn btn-primary btn-block btn-lg" tabindex="7">
                </div>
			</div>
			</form>
			
			<hr class="divider">

		<div id="Stats" class="container">
		<div class="row">
			<div class="col span_4"><b class="value">11</b><i class="info">Years Old<br>College</i></div>
			<div class="col span_4"><b class="value">75</b><i class="info">Acres<br>Campus</i></div>
			<div class="col span_4"><b class="value">22</b><i class="info">HI-Tech<br>Departments</i></div>
			<div class="col span_4"><b class="value">32</b><i class="info">Universities<br>Ranks & Medals</i></div>
			<div class="col span_4"><b class="value">12</b><i class="info">Lakh<br>Highest Package</i></div>
			<div class="col span_4"><b class="value">252</b><i class="info">Top<br>Professionals</i></div>
			
		</div>
	</div>	
			
		<hr class="divider">


		<div class="row padding">
			<div class="col span_8">

				<!-- "About seller" text block. Feel free to replace it by any other text or advertisement -->
			<!--	<h2>About</h2>
				<p>
				</p>
				<p><img src="assets/images/sample_signature.png" alt=""></p>-->

			</div>
			<div class="col span_16">

				<!-- Offer submission form. Please don't change inputs' IDs and names. -->
				<h2>Contact Details</h2>
				<div id="Contact">
					<div class="row">
						<div class="col span_24">
							<p>Admission Helpline: +91-8650000774 | +91-8650000774</p>
                            <p>Give a Miss Call: 18002005811</p>
                            <p>For Delhi and NCR: +91-9411222666</p>
						</div>
					</div>
					</div>
				</div> <!-- end of offer form -->
				
	

			</div> <!-- end of col span_16 -->
		</div> <!-- end of row -->
	</div>
	<!-- END OF CONTENT -->


	<div id="Footer" class="container">
		<div class="row top">
			<div class="col span_16">Copyright &copy; 2017, Vidya Knowledge Park. All rights reserved.</div>
			<div class="col span_8 align-right">Design: <a href="http://www.vidya.edu.in/">Vidya Knowledge Park</a></div>
		</div>
	</div>

<!-- TODO: In order to track visits, insert google analytics code here -->


<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>