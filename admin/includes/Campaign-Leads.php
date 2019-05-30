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
								print $call_data->date_format($Today);
                                ?>
                            </li>

                            <li class="active">
                           <form method="POST"><input type="date" name="fdate"> 
                           <input type="date" name="sdate" onchange="this.form.submit()">
                           </form>
                            </li>                        
                            </ol>
                    </div>       
                </div>        
                   	 
            </div>
  <h4>Total Campaign Leads</h4> 
  <?php if(isset($_POST['fdate']) or isset($_GET['fdate']))   { ?>
  <p>
  <a target="_new()" href="includes/Campaign-Leads-Report.php?fdate=<?php if(isset($_POST['fdate'])){ print $_POST['fdate']; } 
  else{ print $_GET['fdate']; } ?>&sdate=<?php if(isset($_POST['sdate'])){  print $_POST['sdate'];}else{ print $_GET['sdate']; } ?>">
  <img src="../img/exl.png" height="60px" width="60px"></a>
  </p>
   <h4>From: <?php   if(isset($_POST['fdate'])){ print $call_data->date_format($_POST['fdate']); } else{ ?> 
    <?php print $call_data->date_format($_GET['fdate']); } ?>
   To: <?php    if(isset($_POST['fdate'])){  print $call_data->date_format($_POST['sdate']);}else{ ?>  
   <?php print $call_data->date_format($_GET['sdate']); } ?> </h4> 
  <?php                              } ?>         
               <table width="983" class="table table-bordered">
                <thead>
                  <tr>
                    <th width="52">SrNo</th>
                    <th width="151" >Stage</th>
                    <th width="100">Name</th>
                    <th width="100">Date of Lead </th>
                    <th width="81">First Follow-up</th>
                    <th width="81">Second Follow-up</th>
                    <th width="81">Third Follow-up</th>
                    <th width="75">Contact</th>
                    <th width="75">Query</th>
                  
                   
                  </tr>
                </thead>
					  <?php	
                      
                      if(isset($_POST['fdate']))   { 
                      print $Db_objects->search_all(2,$Today,$_POST['fdate'],$_POST['sdate']);		
                                                    }  
                      else if(isset($_GET['fdate']))   { 
                   
                      print $Db_objects->search_all(2,$Today,$_GET['fdate'],$_GET['sdate']);
                      		
                                                    }
                                                                                     
                       if(isset($_POST['uid']))	{
                        
                 $Fdate=trim($_POST['fdate']);$Sdate=trim($_POST['sdate']);
                 $Db_objects->update_status($_POST['uid'],$_POST['status']);
                 echo"<script>location.href='index.php?id=Campaign-Leads&fdate=$Fdate&sdate=$Sdate';</script>";
                
                                                }
                        else if(isset($_POST['suid']))	{
                        
                 $Fdate=$_POST['fdate'];$Sdate=$_POST['sdate'];
                 $Db_objects->id=trim($_POST['suid']);
                 if(isset($_POST['follow1']))   {
                 $Db_objects->follow_up_1=trim($_POST['follow1']); @$Db_objects->date1=date('Y-m-d');
                 $Db_objects->create_remark($_POST['suid'],trim($_POST['follow1']));
                                                }
                 else if(isset($_POST['follow2']))   {  
                 $Db_objects->follow_up_2=trim($_POST['follow2']);
                 $Db_objects->update_second_follow_up($_POST['suid'],$Db_objects->follow_up_2);
                               
                                                     }
                 else if(isset($_POST['follow3']))   {  
                 $Db_objects->follow_up_3=trim($_POST['follow3']);
                 $Db_objects->update_third_follow_up($_POST['suid'],$Db_objects->follow_up_3);
                               
                                                     }
                 $senduid=$_POST['suid'];
                 echo"<script>location.href='index.php?id=Campaign-Leads&fdate=$Fdate&sdate=$Sdate#$senduid';</script>";
                
                                                }                        
                      ?> 
                      
                 </table>     
            
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
 <!-- Modal -->
