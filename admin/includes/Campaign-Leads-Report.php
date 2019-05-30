<?php
 
	  header("Content-type: application/octet-stream");
      header("Content-Disposition: attachment; filename=Report.xls");
      header("Pragma: no-cache");
      header("Expires: 0");
 
    require_once("../../init.php");
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  
  <table class="table" >
    <thead>
    <tr>
    <th colspan="14"  style="text-align: center;background-color: #FFFF80;" >    
  <h3>Total Campaign Leads</h3> 
 
    </th>
    </tr>
    <tr>
    <th colspan="14" style="text-align: center;background-color: #BCEEE5;">

  <h4>From: <?php     print $call_data->date_format($_GET['fdate']);  ?> To: <?php     print $call_data->date_format($_GET['sdate']);  ?> </h4> 
    </th>
    </tr>
      <tr style="text-align: center;background-color: #C0C0C0;">
        <th>SrNo</th>
        <th>Stage</th>
        <th>Name</th>
        <th>First Follow-Up</th>
        <th>Second Follow-Up</th>
        <th>Third Follow-Up</th>
        <th>Date-1</th>
        <th>Date-2</th>
        <th>Date-3</th>
        <th>Contact</th>
        <th>Course</th>
        <th>Email</th>
        <th>City</th>
        <th>Source</th>
        <th>Date Time</th>
      </tr>
    </thead>
    
					  <?php	
                  
                      print $Db_objects->search_all(3,"",$_GET['fdate'],$_GET['sdate']);		
                                                           
                      ?> 
                      
                 </table>     
            
            <!-- /.container-fluid -->

