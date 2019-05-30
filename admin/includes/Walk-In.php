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
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
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
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="Uname" name="Uname" required=""  />
</div>
<div class="form-group">
  <label for="pwd">Contact:</label>
  <input type="text" class="form-control" id="Cont1" name="Cont1" maxlength="10" required="" />
</div>
<div class="form-group">
  <label for="pwd">Alternative Contact:</label>
  <input type="text" class="form-control" id="Cont2" name="Cont2"  maxlength="10" required="" />
</div>
<div class="form-group">
  <label for="pwd">E-mail:</label>
  <input type="email" class="form-control" id="email" name="email"  required="" />
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
$Db_objects->second_contact=trim($_POST['Cont2']);$Db_objects->email=trim($_POST['email']);
$Db_objects->query=trim($_POST['Query']);
$Db_objects->city="Meerut";$Db_objects->course="School";
$Db_objects->source=trim($_POST['Source']);$Db_objects->cdtime=trim($_POST['rdate']);$Db_objects->status="Pending";
$Db_objects->create_lead();
echo"<script>alert('Submit Successfully');location.href='index.php?id=Walk-In';</script>";

                                 }  ?>