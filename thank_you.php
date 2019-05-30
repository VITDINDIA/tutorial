<?php
require("init.php");
if(@$_SESSION['otp'] == "")
		{
$session->check_otps();
		}
$fdb_ftable=db_objects::$db_ftable;		
@$CheckUserId=$Db_objects->search_by_id($session->get_session("roll"),$fdb_ftable);
@$Comp_id=$CheckUserId['compid'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php	print call_data::get_title();	?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script language="javascript1.5">
  function myFunction() {
    window.print();
						}
  </script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */
  
    
    /* Remove the jumbotron's default bottom margin */
     .jumbotron {
      margin-bottom: 0;
	  height:25%;
    }
	.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
   
    /* Add a gray background color and some padding to the footer */
    #footer {
padding-top:15px;
    font-size:16px;
  height: 50px;
  color:white;
  background-color: #BE0101;
}
  </style>
</head>
<body>
<?php
require("include/header.php");

?>
<div class="container" style="background-color:#FFFFFF">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <div style="margin-top:20px; text-align:center;" class="alert alert-success" role="alert"><?php	print $_SESSION['msg'];	?></div>
		<form role="form" method="post">
			<hr class="colorgraph">
			<div class="row" >
				<div class="col-xs-6 col-sm-7 col-md-6" style="text-align:center;">
                Roll Number : 
				</div>
                <div class="col-xs-6 col-sm-7 col-md-6" style="text-align:left;">
                <?php	print $session->get_session("roll");	?>
				</div>
                <div class="col-xs-6 col-sm-7 col-md-6" style="text-align:center;">
                Complaint Id : 
				</div>
                <div class="col-xs-6 col-sm-7 col-md-6" style="text-align:left;">
                <?php	print $Comp_id;	?>
				</div>
			</div>
			<hr class="colorgraph">
			<div class="row" style="margin-bottom:30px;">
				<div class="col-xs-12 col-md-12"><input type="button" value="Take Print" name="print" onclick="myFunction()" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
			</div>
	</div>
</div>

</div>
<br><br>
<?php
$otp="";
@$session->Unset_Session();
?>

        
</body>
</html>