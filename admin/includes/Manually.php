<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","ajax.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
 <div id="page-wrapper" style="width:120%;">

            <div class="container-fluid" >

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                              LMS
                            <small>Lead Management System</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php?id=LMS-Dashboard">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="glyphicon glyphicon-calendar"></i> 
								<?php 
                                @$Today=date('Y-m-d'); 
                                //$Today=date('Y-m-d',(strtotime ( '-1 day' , strtotime ( $date) ) ));
								print $Today;
                                ?>
                            </li>
                        </ol>
                    </div>       
                </div>        
                   	 
            </div>
  <h4>Walk-In/Telephonic Inquiry Form</h4>
  <form method="POST" >
<div class="form-group">
  <label for="pwd">Contact:</label>
  <input type="text" class="form-control" id="Cont1" name="Cont1" maxlength="10" required="" onblur="showUser(this.value)" /> 
</div><div id="txtHint"></div>
<div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="Uname" name="Uname" required=""  />
</div>
<div class="form-group">
  <label for="pwd">Source:</label>
  <select class="form-control" name="course"   >
          <option value="B.Tech">B.Tech</option>
          <option value="Polytechnic-ME">Polytechnic-ME</option>
          <option value="Polytechnic-CSE">Polytechnic-CSE</option>
          <option value="BCA">BCA</option>
          <option value="BBA">BBA</option>
          <option value="MBA">MBA</option>
          <option value="PGDM">PGDM</option>
          <option value="BFAD">BFAD</option>
          <option value="BFA">BFA</option>
          <option value="Mass-Comm">Mass Communication</option>
          <option value="Other">Other</option>
  </select>
</div>
<div class="form-group">
  <label for="pwd">E-mail:</label>
  <input type="email" class="form-control" id="email" name="email"  />
</div>
<div class="form-group">
  <label for="pwd">Source:</label>
  <select class="form-control" name="Source"   >
          <option value="Telephonic">Telephonic</option>
          <option value="Walk-In">Walk-In</option>
          
  </select>
</div>
<div class="form-group">
  <label for="pwd">Date:<br></label>
  <input type="date" id="rdate" name="rdate"  required="" />
</div>

<div class="form-group">
  <label for="pwd">Query:</label>
  <textarea name="Query" ></textarea>
</div>

<div class="form-group">
<button type="submit" name="submit" class="btn btn-default">Submit</button>
</div>
 </form>              
</div>
<?php
if(isset($_POST['submit']))     {
$Db_objects->user_name=trim($_POST['Uname']);$Db_objects->contact=trim($_POST['Cont1']);
$Db_objects->email=trim($_POST['email']);$Db_objects->query=trim($_POST['Query']);
$Db_objects->course=trim($_POST['course']);
$Db_objects->source=trim($_POST['Source']);$Db_objects->cdtime=trim($_POST['rdate']);$Db_objects->status="Pending";
$Db_objects->cnt=$Db_objects->get_latest_count();
$Db_objects->create_lead();
$Db_objects->create_lead_details();
echo"<script>alert('Submit Successfully');location.href='index.php?id=Walk-In';</script>";


                                 }  ?>