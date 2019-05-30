
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
								print $Today;	
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
                <div class="row">
                    <div class="col-lg-12" style="color: #800040; font-size:20px;"> Today's Status of Vidya Global School
                    </div>
                 </div> 
                  <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div> 
                <div class="row">
                    <div class="col-lg-12">
                  <button type="button" class="btn btn-success">Website <span class="badge">   <?php	 print $Db_objects->count_source_leads_today("Website");	?>  </span></button>
                  <button type="button" class="btn btn-primary">Walk-In <span class="badge">   <?php	 print $Db_objects->count_source_leads_today("Walk-In");	?>  </span></button>    
                  <button type="button" class="btn btn-success">Telephonic <span class="badge"><?php print $Db_objects->count_source_leads_today("Telephonic");		?>  </span></button>
                  <button type="button" class="btn btn-primary">Application Purchased <span class="badge"> <?php	 print $Db_objects->count_today_transaction("Application-Purchased");	?>  </span></button>
                  <button type="button" class="btn btn-success">Admission Done <span class="badge">   <?php	 print $Db_objects->count_today_transaction("Admission-Confirmed");	?>  </span></button>    
                                
                                
                 	</div>
                 </div>            
                 <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div>  
                 <div class="row">
                    <div class="col-lg-12" style="color: #800040; font-size:20px;"> Overall Status of Vidya Global School
                    </div>
                 </div> 
                  <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div>  
                 <div class="row">
                    <div class="col-lg-12">
                  <button type="button" class="btn btn-success">Website <span class="badge">   <?php	 print $Db_objects->count_source_leads("Website");	?>  </span></button>
                  <button type="button" class="btn btn-primary">Walk-In <span class="badge">   <?php	 print $Db_objects->count_source_leads("Walk-In");	?>  </span></button>    
                  <button type="button" class="btn btn-success">Telephonic <span class="badge"><?php     print $Db_objects->count_source_leads("Telephonic");		?>  </span></button>
                  <button type="button" class="btn btn-primary">Application Purchased <span class="badge"> <?php	 print $Db_objects->count_all_transaction("Application-Purchased");	?>  </span></button>
                  <button type="button" class="btn btn-success">Admission Done <span class="badge">   <?php	 print $Db_objects->count_all_transaction("Admission-Confirmed");	?>  </span></button>    
                                                           
                 	</div>
                 </div>
                  
                 <hr/>  
                       
                 <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div> 
                 <div class="row">
                    <div class="col-lg-12" style="color: #800040; font-size:20px;"> Today's Status of VGS - CBSE
                    </div>
                 </div> 
                 <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div> 
           
                 <div class="row">
                    <div class="col-lg-12">
                 <div class="row">
                    <div class="col-lg-12">
                  <button type="button" class="btn btn-success">Website <span class="badge">   <?php	 print $Db_objects->count_source_today_leads("CBSE","Website");	?>  </span></button>
                  <button type="button" class="btn btn-primary">Walk-In <span class="badge">   <?php	 print $Db_objects->count_source_today_leads("CBSE","Website")	?>  </span></button>    
                  <button type="button" class="btn btn-success">Telephonic <span class="badge"><?php print $Db_objects->count_source_today_leads("CBSE","Website")		?>  </span></button>
                  <button type="button" class="btn btn-primary">Application Purchased <span class="badge"> <?php	 print $Db_objects->count_transaction("Application-Purchased","CBSE");	?>  </span></button>
                  <button type="button" class="btn btn-success">Admission Done <span class="badge">   <?php	 print $Db_objects->count_transaction("Admission-Confirmed","CBSE");	?>  </span></button>    
                                
                                
                 	</div>
                 </div>         
                 	</div>
                 </div>
                   <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div> 
                 <div class="row">
                    <div class="col-lg-12" style="color: #800040; font-size:20px;"> Overall Status of VGS - CBSE
                    </div>
                 </div> 
                 <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div>
                 
                  <div class="row">
                    <div class="col-lg-12">
                    <button type="button" class="btn btn-success">Website <span class="badge"><?php	print $Db_objects->count_source_total_leads("CBSE","Website");		?>  </span></button>
                  <button type="button" class="btn btn-primary">Walk-In <span class="badge">  <?php	print $Db_objects->count_source_total_leads("CBSE","Walk-In");		?>  </span></button>    
                  <button type="button" class="btn btn-success">Telephonic <span class="badge"><?php print $Db_objects->count_source_total_leads("CBSE","Telephonic");		?>  </span></button>
                   
                  <button type="button" class="btn btn-primary">Application Purchased <span class="badge"><?php	print $Db_objects->count_total_transaction("Application-Purchased","CBSE");		?>  </span></button>
                  <button type="button" class="btn btn-success">Admission Done <span class="badge"><?php print $Db_objects->count_total_transaction("Admission-Confirmed","CBSE");		?>  </span></button>        
                 	</div>
                 </div>
                 
                 <hr/>  
                    
                   <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div> 
                <div class="row">
                    <div class="col-lg-12" style="color: #800040; font-size:20px;"> Today's Status of VGS - IB
                    </div>
                 </div> 
                 <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div> 
           
                 <div class="row">
                    <div class="col-lg-12">
                  <button type="button" class="btn btn-success">Website <span class="badge">   <?php	 print $Db_objects->count_source_today_leads("IB","Website");	?>  </span></button>
                  <button type="button" class="btn btn-primary">Walk-In <span class="badge">   <?php	 print $Db_objects->count_source_today_leads("IB","Website");	?>  </span></button>    
                  <button type="button" class="btn btn-success">Telephonic <span class="badge"><?php print $Db_objects->count_source_today_leads("IB","Website");		?>  </span></button>
                  <button type="button" class="btn btn-primary">Application Purchased <span class="badge"> <?php	 print $Db_objects->count_transaction("Application-Purchased","IB");	?>  </span></button>
                  <button type="button" class="btn btn-success">Admission Done <span class="badge">   <?php	 print $Db_objects->count_transaction("Admission-Confirmed","IB");	?>  </span></button>    
                                
                                
                 	</div>
                 </div>    
                  
                    <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div> 
                <div class="row">
                    <div class="col-lg-12" style="color: #800040; font-size:20px;"> Overall Status of VGS - IB
                    </div>
                 </div> 
                 <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div> 
                  <div class="row">
                    <div class="col-lg-12">
                    <button type="button" class="btn btn-success">Website <span class="badge"><?php	print $Db_objects->count_source_total_leads("IB","Website");		?>  </span></button>
                  <button type="button" class="btn btn-primary">Walk-In <span class="badge">  <?php	print $Db_objects->count_source_total_leads("IB","Walk-In");		?>  </span></button>    
                  <button type="button" class="btn btn-success">Telephonic <span class="badge"><?php print $Db_objects->count_source_total_leads("IB","Telephonic");		?>  </span></button>
                  <button type="button" class="btn btn-primary">Application Purchased <span class="badge"><?php	print $Db_objects->count_total_transaction("Application-Purchased","IB");		?>  </span></button>
                  <button type="button" class="btn btn-success">Admission Done <span class="badge"><?php	print $Db_objects->count_total_transaction("Admission-Confirmed","IB");		?>  </span></button>        
                 	</div>
                 </div>
                 
                 <hr/>  
                    
                   <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div> 
                 <div class="row">
                    <div class="col-lg-12" style="color: #800040; font-size:20px;"> Today's Status of VGS - Early Years
                    </div>
                 </div> 
                 <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div> 
           
                 <div class="row">
                    <div class="col-lg-12">
                  <button type="button" class="btn btn-success">Website <span class="badge">   <?php	 print $Db_objects->count_source_today_leads("Early-Years","Website");	?>  </span></button>
                  <button type="button" class="btn btn-primary">Walk-In <span class="badge">   <?php	 print $Db_objects->count_source_today_leads("Early-Years","Website");	?>  </span></button>    
                  <button type="button" class="btn btn-success">Telephonic <span class="badge"><?php print $Db_objects->count_source_today_leads("Early-Years","Website");		?>  </span></button>
                  <button type="button" class="btn btn-primary">Application Purchased <span class="badge"> <?php	 print $Db_objects->count_transaction("Application-Purchased","Early-Years");	?>  </span></button>
                  <button type="button" class="btn btn-success">Admission Done <span class="badge">   <?php	 print $Db_objects->count_transaction("Admission-Confirmed","Early-Years");	?>  </span></button>    
                                
                                
                 	</div>
                 </div>    
                 <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div> 
                 <div class="row">
                    <div class="col-lg-12" style="color: #800040; font-size:20px;"> Overall Status of VGS - Early Years
                    </div>
                 </div> 
                 <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
                 </div> 
                  <div class="row">
                    <div class="col-lg-12">
                    <button type="button" class="btn btn-success">Website <span class="badge"><?php	print $Db_objects->count_source_total_leads("Early-Years","Website");		?>  </span></button>
                  <button type="button" class="btn btn-primary">Walk-In <span class="badge">  <?php	print $Db_objects->count_source_total_leads("Early-Years","Walk-In");		?>  </span></button>    
                  <button type="button" class="btn btn-success">Telephonic <span class="badge"><?php print $Db_objects->count_source_total_leads("Early-Years","Telephonic");		?>  </span></button>
                  <button type="button" class="btn btn-primary">Application Purchased <span class="badge"><?php	print $Db_objects->count_total_transaction("Application-Purchased","Early-Years");		?>  </span></button>
                  <button type="button" class="btn btn-success">Admission Done <span class="badge"><?php	print $Db_objects->count_total_transaction("Admission-Confirmed","Early-Years");		?>  </span></button>        
                 	</div>
                 </div>
                   <div class="row">
                    <div class="col-lg-12">&nbsp;
                    </div>
  
    </div>

  </div>
</div>
        <!-- /#page-wrapper -->