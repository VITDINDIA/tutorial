 <?php
	
				if(isset($_POST['submit']))		{											
				$Db_objects->department=trim($_POST['depart']);$Db_objects->concern_depart=trim($session->get_session("depart"));
				$Db_objects->remark=trim($_POST['remark']);$Db_objects->ctime="now()";
				$Db_objects->flag=1;$Db_objects->create_msg();				
												}
 ?> 
 <div id="page-wrapper">

            <div class="container-fluid" style="height:400px;">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Students
                            <small>grievance management system</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="glyphicon glyphicon-calendar"></i> <?php print date("d-m-y");	?>
                            </li>
                        </ol>
                    </div>       
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                    <h4>Message...</h4>
                </div>
             </div>
			<div  class="row">
                <form role="form" method="post" >
                <div class="form-group">
                    <div class="col-lg-4">
                     <select name="depart" required id="depart" class="form-control input-lg"  >
                      <option value=""> Concern Department </option>
                      <option value="Accounts"> Accounts </option>
                      <option value="Department">Department</option>
                      <option value="Central-Office">Central Office</option>
                      <option value="Registrar">Registrar</option>
                      <option value="Hostel">Hostel</option> 
                      <option value="Transport">Transport</option>
                      <option value="Library">Library</option>  
                      <option value="CSE">Computer Science and Engineering</option> 
                      <option value="IT">Information Technology</option> 
                      <option value="ME">Mechanical Engineering</option>
                      <option value="CE">Civil Engineering</option> 
                      <option value="ECE">Electronics Communication and Engineering</option> 
                      <option value="ECE">Electronics Communication and Engineering</option> 
                      <option value="MBA">MBA</option> <option value="BBA">BBA</option> 
                      <option value="BBA">BCA</option> <option value="BFAD">BFAD</option> 
                      <option value="BFA">BFA</option>                  
                    </select>
                    </div>
                    <div class="col-lg-4">
                    <textarea name="remark" id="remark" onkeyup="toupper(this.value,this.id)" required  class="form-control input-lg" >
                    </textarea>
                    </div>
                    <div class="col-lg-4">
                     <input type="submit"  value="Transfer Complaint" name="submit" class="btn btn-primary btn-block btn-lg" >
                    </div>
                 </div>   
                 </form>
                </div>  
             </div>      
            </div>   
            </div>
      
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->