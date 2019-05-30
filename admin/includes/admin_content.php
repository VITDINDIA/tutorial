<?php
$call_data->get_fresh_data();
?>
 <div id="page-wrapper" style="width:120%;">

            <div class="container-fluid">

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
								<?php @$Today=date('Y-m-d'); 
                                //$Today=date('Y-m-d',(strtotime ( '-1 day' , strtotime ( $date) ) ));
								print $call_data->date_format($Today);	
								?>
                            </li>
                             <li class="active">
                      <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" title="Send SMS">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                             </li> 
                    </a>
					</ol>
                    </div>       
                </div>
                  <div class="row">
                    <div class="col-lg-12">
                    <h4>Campaign Leads</h4>
                <table class="table table-bordered">
                <thead>
                  <tr>
                    <th width="52">SrNo</th>
                    <th width="151" >Stage</th>
                    <th width="81">Name</th>
                    <th width="75">Contact</th>
                    <th width="86">Course</th>
                    <th width="81">First Follow-up</th>
                    <th width="113">Email</th>
                    <th width="90">City</th>
                    <th width="90">Source</th>
                    <th width="113" >Date Time</th>
                  </tr>
                </thead>
                 <?php
                 if(isset($_GET['y'])){
                 unset($_SESSION['previous']); unset($_SESSION['next']);
                                       }
                 if(isset($_SESSION['previous']) ){
                   
                  if(isset($_GET['x']) and !(isset($_POST['uid']) or isset($_POST['follow1']) )) {
                  if($_GET['x'] ==1)
                        {
                  if($_SESSION['previous'] >1){ 
                    
                  $temp1=$_SESSION['previous']-30;$temp2=30 ;   
                                              
                                              }         
                 else
                                {
                $temp1=$_SESSION['previous']; $temp2= $_SESSION['next'];   
                                }                 
                        }      
                  else
                        { 
                  $comingData =$_SESSION['previous']+30;         
                  if($comingData< $Db_objects->count_leads())
                  {
                  $temp1=$_SESSION['previous']+30;$temp2=30;  
                  }
                  else
                  {
                  $temp1=$_SESSION['previous']; $temp2= $_SESSION['next'];   
                  }
                        }  
                   $session->temp_session($temp1,$temp2);         
                                        }                                      
                                                 }
                 else
                        {
                   $temp1=0; $temp2=30;         
                   $session->temp_session($temp1,$temp2);   
                        }                                
                
                                          
                 $Db_objects->search_all(1,$Today,$_SESSION['previous'],$_SESSION['next']);
                 
                 if(isset($_POST['uid']))	{		
                 $Db_objects->update_status($_POST['uid'],$_POST['status']);
                 $call_data->redirect("index.php?id=LMS-Dashboard");
                                            }
                 if(isset($_POST['follow1']))   {
                 $Db_objects->id=trim($_POST['suid']); 
                
                 $Db_objects->follow_up_1=trim($_POST['follow1']); @$Db_objects->date1=date('Y-m-d');
                 $Db_objects->create_remark($_POST['suid'],trim($_POST['follow1']));
                 $call_data-> redirect("index.php?id=LMS-Dashboard#$_POST[suid]");
                                                }                           
                 ?> 
                   
                 </table> 
					 <ul class="pager">
                          <li><a href="index.php?id=LMS-Dashboard&x=1">Previous</a></li>
                          <li><a href="index.php?id=LMS-Dashboard&x=2">Next</a></li>
                        </ul>
                 	</div>
                </div> 
                </div>   

            </div>
            <!-- /.container-fluid -->

        </div>
   