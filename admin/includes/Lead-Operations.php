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
								<?php $date=date('Y-m-d'); 
								print date('Y-m-d',(strtotime ( '-1 day' , strtotime ( $date) ) ));	
								?>
                            </li>
                        </ol>
                    </div>       
                </div>        
                   	 
            </div>
  <h4>Campaign Leads</h4>
               <table width="983" class="table table-bordered">
                <thead>
                  <tr>
                    <th width="52">SrNo</th>
                    <th width="151" >Stage</th>
                    <th width="81">Name</th>
                    <th width="81">Actions</th>
                    <th width="75">Contact-1</th>
                    <th width="103">Contact-2</th>
                    <th width="86">Course</th>
                    <th width="75">City</th>
                    <th width="113">Email</th>
                    <th width="90">Source</th>
                    <th width="113" >Date Time</th>
                  </tr>
                </thead>
					  <?php	print $Db_objects->search_all(2);		?> 
                      
                 </table>     
            
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
 <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>       