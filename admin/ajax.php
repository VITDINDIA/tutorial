<?php
require_once("../find_classes/db_objects.php");	
require_once("../find_classes/database.php");	
$ContactNumber=$_GET['q'];
$GetData=$Db_objects->get_walkin_data($ContactNumber);
if($GetData[2] != "")   {
    if($GetData[17]=="Walk-In") {
echo"<font color='RED'><b><img src='../img/wrong.jpg' /> Stop! Already Exist ($GetData[2]-$GetData[18]). With this number, we found a Walk-In Inquiry in our database. </b></font>";
                                }
     else                       {
echo"<font color='#42c8f4'><b><img src='../img/right.jpg' />Wait! With this number, we found a Telephonic Inquiry. Now you can insert it as a Walk-In only. ($GetData[2]-$GetData[18])</b></font>";        
                                }                           
                        }
else  {
echo"<font color='#00FF00'><b><img src='../img/right.jpg' /> Fresh Inquiry</b></font>";
                        }                       
                   
?>