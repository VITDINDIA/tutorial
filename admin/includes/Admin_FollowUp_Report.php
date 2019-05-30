
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
                      <a href="javascript:void(0)"    data-toggle="modal" data-target="#myModal" title="Send SMS">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                             </li> 
                    </a>
					</ol>
                    </div>       
                </div>
                <!-- /.row -->
                <form method="POST">
                <div class="row" >
                    <div class="col-lg-2" >
                    From: <div class="form-group">
						<input type="date" name="from" id="from" 
                        required class="form-control input-lg"/>
					</div>
                    </div>
                    <div class="col-lg-2" >
                    To: <div class="form-group">
						<input type="date" name="to" id="to" 
                        required class="form-control input-lg" onchange="this.form.submit();"  />
					</div>
                    </div>
                </div> 
                </form> 
                <?php   if(isset($_POST['to'])) {    ?>
                <hr />  
                 <div class="row" >
                    <div class="col-lg-12" style="color: #800040; font-size:20px;">
                    From:  <?php print $_POST['from'];  ?> | To:  <?php print $_POST['to'];  ?> | Total Leads: <?php print $Db_objects->count_leads($_POST['from'],$_POST['to']);  ?> 
                    </div>
                     </div> 
                 <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div>    
                 <div class="row">
                    <div class="col-lg-12" style="color: #800040; font-size:20px;"> 
                    Status of Website | Total Leads: <?php print $Db_objects->count_source_leads("Website",$_POST['from'],$_POST['to']);  ?>
                    </div>
                 </div> 
                  <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div>  
                  <div class="row">
                     <div class="col-lg-12">
                     <button type="button" class="btn btn-success">Pending <span class="badge">  <?php	print $Db_objects->count_status_web_leads("Pending","Website",$_POST['from'],$_POST['to']);		?>  </span></button>                     
                
                     <button type="button" class="btn btn-success">Contacted <span class="badge">  <?php	print $Db_objects->count_status_web_leads("Contacted","Website",$_POST['from'],$_POST['to']);		?>  </span></button>                     
                  <button type="button" class="btn btn-primary">Interested <span class="badge"><?php	print $Db_objects->count_status_web_leads("Interested","Website",$_POST['from'],$_POST['to']);		?>  </span></button>
                  <button type="button" class="btn btn-success">Not-Interested <span class="badge">  <?php	print $Db_objects->count_status_web_leads("Not-Interested","Website",$_POST['from'],$_POST['to']);		?>  </span></button>      
                  <button type="button" class="btn btn-primary">Not Picked <span class="badge">  <?php	print $Db_objects->count_status_web_leads("Not-Picked","Website",$_POST['from'],$_POST['to']);		?>  </span></button>   
                    <button type="button" class="btn btn-primary">Walk-In <span class="badge">  <?php	print $Db_objects->count_status_web_leads("Walk-In","Website",$_POST['from'],$_POST['to']);		?>  </span></button> 
                    </div>
                    </div> 
                     <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div>  
                 <div class="row">
                    <div class="col-lg-12" style="color: #800040; font-size:20px;"> Status of Facebook | Total Leads: <?php print $Db_objects->count_source_leads("Facebook",$_POST['from'],$_POST['to']);  ?>
                    </div>
                 </div> 
                  <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div>  
                  <div class="row">
                     <div class="col-lg-12">
                     <button type="button" class="btn btn-success">Pending <span class="badge">  <?php	print $Db_objects->count_status_web_leads("Pending","Facebook",$_POST['from'],$_POST['to']);		?>  </span></button>                     
                
                     <button type="button" class="btn btn-success">Contacted <span class="badge">  <?php	print $Db_objects->count_status_web_leads("Contacted","Facebook",$_POST['from'],$_POST['to']);		?>  </span></button>                     
                  <button type="button" class="btn btn-primary">Interested <span class="badge"><?php	print $Db_objects->count_status_web_leads("Interested","Facebook",$_POST['from'],$_POST['to']);		?>  </span></button>
                  <button type="button" class="btn btn-success">Not-Interested <span class="badge">  <?php	print $Db_objects->count_status_web_leads("Not-Interested","Facebook",$_POST['from'],$_POST['to']);		?>  </span></button>      
                  <button type="button" class="btn btn-primary">Not Picked <span class="badge">  <?php	print $Db_objects->count_status_web_leads("Not-Picked","Facebook",$_POST['from'],$_POST['to']);		?>  </span></button>   
                    <button type="button" class="btn btn-primary">Walk-In <span class="badge">  <?php	print $Db_objects->count_status_web_leads("Walk-In","Facebook",$_POST['from'],$_POST['to']);		?>  </span></button> 
                    </div>
                    </div> 
                     <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div>  
                 
                    
                 <div class="row">
                    <div class="col-lg-12" style="color: #800040; font-size:20px;"> Status of Telephonic
                    </div>
                 </div> 
                  <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div>  
                  <div class="row">
                     <div class="col-lg-12">
                     <button type="button" class="btn btn-success">Pending <span class="badge">  <?php	print $Db_objects->count_status_web_leads("Pending","Telephonic",$_POST['from'],$_POST['to']);		?>  </span></button>                     
                
                     <button type="button" class="btn btn-success">Contacted <span class="badge">  <?php	print $Db_objects->count_status_web_leads("Contacted","Telephonic",$_POST['from'],$_POST['to']);		?>  </span></button>                     
                  <button type="button" class="btn btn-primary">Interested <span class="badge"><?php	print $Db_objects->count_status_web_leads("Interested","Telephonic",$_POST['from'],$_POST['to']);		?>  </span></button>
                  <button type="button" class="btn btn-success">Not-Interested <span class="badge">  <?php	print $Db_objects->count_status_web_leads("Not-Interested","Telephonic",$_POST['from'],$_POST['to']);		?>  </span></button>      
                  <button type="button" class="btn btn-primary">Not Picked <span class="badge">  <?php	print $Db_objects->count_status_web_leads("Not-Picked","Telephonic",$_POST['from'],$_POST['to']);		?>  </span></button>   
                    <button type="button" class="btn btn-primary">Walk-In <span class="badge">  <?php	print $Db_objects->count_status_web_leads("Walk-In","Telephonic",$_POST['from'],$_POST['to']);		?>  </span></button> 
                    </div>
                    </div> 
                     <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                    <div class="col-lg-12">&nbsp;
                    </div>
                    </div> 
                     <div class="row" >
                    <div class="col-lg-12" style="color: #800040; font-size:20px;">Follow-Ups
                    </div>
                     </div> 
                     <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div>   
                 
                 <div class="row">
                    <div class="col-lg-12" style="color: #800040; font-size:20px;"> Telephonic
                    </div>
                 </div> 
                  <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div>  
                   <div class="row">
                    <div class="col-lg-12">
                 <button type="button" class="btn btn-success">Follow-Up-1 <span class="badge">  
                 <?php	print $Db_objects->count_total_pending_followups1("Telephonic");		?>  </span></button>                     
                  <button type="button" class="btn btn-primary">Follow-Up-2 <span class="badge">
                  <?php	print $Db_objects->count_total_pending_followups2("Telephonic");		?>  </span></button>
                  <button type="button" class="btn btn-success">Follow-Up-3 <span class="badge">  
                  <?php	print $Db_objects->count_total_pending_followups3("Telephonic");		?>  </span></button>      
                         </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div>   
                 
                 <div class="row">
                    <div class="col-lg-12" style="color: #800040; font-size:20px;"> Website
                    </div>
                 </div> 
                  <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div>  
                   <div class="row">
                    <div class="col-lg-12">
                 <button type="button" class="btn btn-success">Follow-Up-1 <span class="badge">  
                 <?php	print $Db_objects->count_total_pending_followups1("Website");		?>  </span></button>                     
                  <button type="button" class="btn btn-primary">Follow-Up-2 <span class="badge">
                  <?php	print $Db_objects->count_total_pending_followups2("Website");		?>  </span></button>
                  <button type="button" class="btn btn-success">Follow-Up-3 <span class="badge">  
                  <?php	print $Db_objects->count_total_pending_followups3("Website");		?>  </span></button>      
                         </div>
                  </div>    
                   <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div> 
           <?php    }        ?>        
    </div>

  </div>
</div>
        <!-- /#page-wrapper -->