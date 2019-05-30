<?php

if(isset($_POST['submit']))
	{
$uid=trim($_POST['uid']);$pass=trim($_POST['pass']);	
$user_found=user::verify_user($uid,$pass);
if($user_found == 1)
		{
$session->login($uid);
$call_data->redirect("admin/index.php?id=LMS-Dashboard");
		}
else
		{
$call_data->the_message="User Name and Password is Incorrect";	
		}		
	}

		
?>
<script language="javascript1.5">
function toupper(str,id)
	{		
var upper=str.toUpperCase();
document.getElementById(id).value=upper;
	}
    
    function myFunction() {
     
    var x = document.getElementById("myDiv1");
    var y = document.getElementById("myDiv2");
    
    if (x.style.display === "none") 
    {
        x.style.display = "block";
        y.style.display = "none";
      
    } else   {
        x.style.display = "none";
       y.style.display = "block"
            }
                                }		
</script>
<script language="javascript1.5">
 function myfunc()
 {  
document.getElementById("myDiv2").style.display = 'none';    
  
 }
 </script>
<div class="container" style="background-color:#FFFFFF;"  >
<div class="row" id="myDiv1">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <h4 class="bg-danger"><p style="margin-left:5px;"><?php print $call_data->the_message	?></p></h4>
		<form role="form" method="post" >
			<h2>Lead Management System<br><small></small></h2>
			<hr class="colorgraph">
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<input type="text" name="uid" id="uid" onkeyup="toupper(this.value,this.id)" required class="form-control input-lg" placeholder="User Id" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<input type="password" name="pass" id="pass" onkeyup="toupper(this.value,this.id)" required class="form-control input-lg" placeholder="Password" tabindex="6">
					</div>
				</div>
			</div>
			<hr class="colorgraph">
			<div class="row" style="margin-bottom:120px; ">
				<div class="col-xs-12 col-md-12" >
              <input type="submit"  value="Login" name="submit" class="btn btn-primary btn-block btn-lg" tabindex="7">              
                </div> 
               
			</div>
		</form>
	</div>
</div>


</div>

