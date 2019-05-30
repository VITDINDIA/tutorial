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
                
                var resp = this.responseText;
                arr=new Array();
	           	arr=resp.split(",");
                document.getElementById("cnt").value=arr[0];
                document.getElementById("Uname").value=arr[2];
                document.getElementById("dob").value=arr[3];
                document.getElementById("category").value=arr[4];
                document.getElementById("Fname").value=arr[5];
                document.getElementById("Mname").value=arr[6];
                document.getElementById("cont2").value=arr[8];
                document.getElementById("query").value=arr[9];
                document.getElementById("previousschool").value=arr[10];
                document.getElementById("board").value=arr[11];
                document.getElementById("grade").value=arr[12];
                document.getElementById("routenumber").value=arr[13];
                document.getElementById("address").value=arr[14];
                document.getElementById("email").value=arr[16];
                document.getElementById("source").value=arr[17];
                document.getElementById("rdate").value=arr[18];
                document.getElementById("reference").value=arr[19];
                document.getElementById("discount").value=arr[20];
                document.getElementById("typeofdiscount").value=arr[21];
            }
        };
        xmlhttp.open("GET","ajaxforupdate.php?q="+str,true);
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
  <h4>Update Walk-In/Telephonic Inquiry</h4>
  <form method="POST" >
  <div class="form-group">
  <label for="pwd">Contact:</label>
  <input type="text" class="form-control" id="Cont1" name="Cont1" maxlength="10" required="" onblur="showUser(this.value)" /> 
  </div><div><input type="hidden" name="cnt" id="cnt"/></div>

<div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="Uname" name="Uname" required=""  />
</div>
<div class="form-group">
  <label for="usr">Father's Name:</label>
  <input type="text" class="form-control" id="Fname" name="fname"  />
</div>
<div class="form-group">
  <label for="usr">Mother's Name:</label>
  <input type="text" class="form-control" id="Mname" name="mname"  />
</div>
<div class="form-group">
  <label for="pwd">Date of Birth:<br></label>
  <input type="date" id="dob" name="dob"   />
</div>
<div class="form-group">
  <label for="pwd">Category:</label>
  <select class="form-control" name="category" id="category"   >
          <option value="General">General</option>
          <option value="OBC">OBC</option>
          <option value="SC-ST">SC/ST</option>
          <option value="Others">Others</option>
  </select>
</div>

<div class="form-group">
  <label for="pwd">Alternative Contact:</label>
  <input type="text" class="form-control" id="cont2" name="Cont2"  maxlength="10" required="" />
</div>
<div class="form-group">
  <label for="pwd">Address:</label>
  <textarea name="address" id="address" ></textarea>
</div>
<div class="form-group">
  <label for="pwd">Previous School:</label>
  <input type="text" class="form-control" id="previousschool" name="previousSchool"   />
</div>
<div class="form-group">
  <label for="pwd">Board:</label>
  <select class="form-control" id="board" name="board">
  <option value="CBSE">CBSE</option><option value="IB">IB</option><option value="Early-Years">Early-Years</option>
  </select>
</div>
<div class="form-group">
  <label for="pwd">Grade:</label>
  <select class="form-control" id="grade" name="grade">
  <option value="Pre-Nursery">Pre-Nursery</option><option value="Nursery">Nursery</option><option value="LKG">LKG</option>
  <option value="UKG">UKG</option><option value="First">First</option><option value="Second">Second</option><option value="Third">Third</option>
  <option value="Fourth">Fourth</option><option value="Fifth">Fifth</option><option value="Sixth">Sixth</option><option value="Seventh">Seventh</option>
  <option value="Eight">Eight</option><option value="Ninth">Ninth</option><option value="Tenth">Tenth</option><option value="Eleven">Eleven</option>
  <option value="Twelth">Twelth</option>
  </select>
</div>
<div class="form-group">
  <label for="pwd">Route Number:</label>
   <input type="number" class="form-control"  id="routenumber" name="routeNumber"  />
</div>

<div class="form-group">
  <label for="pwd">E-mail:</label>
  <input type="email" class="form-control" id="email" name="email"  />
</div>
<div class="form-group">
  <label for="pwd">Source:</label>
  <select class="form-control" name="Source" id="source"    >
          <option value="Telephonic">Telephonic</option>
          <option value="Walk-In">Walk-In</option>
          
  </select>
</div>
<div class="form-group">
  <label for="pwd">Date:<br></label>
  <input type="date" id="rdate" name="rdate"  required="" />
</div>
<div class="form-group">
  <label for="pwd">Reference:</label>
  <input type="text" class="form-control" id="reference" name="reference"   />
</div>
<div class="form-group">
  <label for="pwd">Discounted Amount:</label>
  <input type="text" class="form-control" id="discount" name="discount"   />
</div>
<div class="form-group">
  <label for="pwd">Type of Discount:</label>
  <input type="text" class="form-control" id="typeofdiscount" name="TypeOfDiscount"   />
</div>
<div class="form-group">
  <label for="pwd">Query:</label>
  <textarea name="Query" id="query" ></textarea>
</div>

<div class="form-group">
<button type="submit" name="submit" class="btn btn-default">Update</button>
<?php
if($session->get_session("uid")=="SUPER-ADMIN")
{
?>
<button type="submit" name="delete" class="btn btn-default">Delete</button>
<?php
}
?>
</div>
 </form>              
</div>
<?php
if(isset($_POST['delete']))     {
$Db_objects->cnt=trim($_POST['cnt']);
$Db_objects->delete_walkin_data();
echo"<script>alert('Delete Successfully');location.href='index.php?id=Counsellor-Management';</script>";    
                                }
if(isset($_POST['submit']))     {
$Db_objects->user_name=trim($_POST['Uname']);$Db_objects->contact=trim($_POST['Cont1']);
$Db_objects->second_contact=trim($_POST['Cont2']);$Db_objects->email=trim($_POST['email']);
$Db_objects->query=trim($_POST['Query']);
$Db_objects->city="Meerut";$Db_objects->course=trim($_POST['board']);
$Db_objects->source=trim($_POST['Source']);$Db_objects->cdtime=trim($_POST['rdate']);$Db_objects->status="Pending";
$Db_objects->category=trim($_POST['category']);$Db_objects->grade=trim($_POST['grade']);$Db_objects->dob=trim($_POST['dob']);
$Db_objects->fname=trim($_POST['fname']);$Db_objects->mname=trim($_POST['mname']);$Db_objects->routeNumber=trim($_POST['routeNumber']);
$Db_objects->previousSchool=trim($_POST['previousSchool']);$Db_objects->address=trim($_POST['address']);$Db_objects->discount=trim($_POST['discount']);
$Db_objects->reference=trim($_POST['reference']);$Db_objects->typeofdiscount=trim($_POST['TypeOfDiscount']);
$Db_objects->cnt=trim($_POST['cnt']);
$Db_objects->update_lead();
echo"<script>alert('Update Successfully');location.href='index.php?id=Counsellor-Management';</script>";


                                 }  
clearstatcache();
?>