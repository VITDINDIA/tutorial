
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
                        </ol>
                    </div>       
                </div>               
            </div>
            <!-- /.container-fluid -->
        <?php  
        //$call_data->test_query();
          if(isset($_POST['template']))     {   
        $Db_objects->Template_Id = trim($_POST['template']);
        $Db_objects->Msg=trim($_POST['msg']);
                                            }
        ?>
      
        <div class="form-group">
          <form method="POST" name="form">
          <label for="pwd">Template:</label>
          <select class="form-control" name="template"  required=""  >
          <option value="">Select Template</option>
          <option value="Template-1">Template-1</option>
          <option value="Template-2">Template-2</option>
          <option value="Template-3">Template-3</option>
          </select>
          
        </div>
        <div class="form-group">
          <label for="pwd">Message:</label>
          <textarea class="form-control" name="msg" required="" ></textarea>
        </div>  
      
          <div class="form-group">
        <button type="submit" name="submit" class="btn btn-default">Submit</button>  
        </div> 
         </form>
        <?php
        if(isset($_POST['submit']))     {
        
        $Db_objects->create_template($Db_objects->Template_Id ,$Db_objects->Msg);
                                        }
        ?> 
         <table class="table" >
    <thead>
      <tr>
        <th>SrNo</th>
        <th>Template</th>
         <th>Message</th>
      </tr>
    </thead>
    <?php
    $Db_objects->search_all_templet();
    ?>    
    </table>
       </div>     
        <!-- /#page-wrapper -->