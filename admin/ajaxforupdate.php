<?php
require_once("../find_classes/db_objects.php");	
require_once("../find_classes/database.php");	
$ContactNumber=$_GET['q'];
$GetData=$Db_objects->get_walkin_data($ContactNumber);
if($GetData[0] != "")   {
echo"$GetData[0],$GetData[1],$GetData[2],$GetData[3],$GetData[4],$GetData[5],$GetData[6],$GetData[7],$GetData[8],$GetData[9], 
$GetData[10],$GetData[11],$GetData[12],$GetData[13],$GetData[14],$GetData[15],$GetData[16],$GetData[17],$GetData[18],$GetData[19],$GetData[20],$GetData[21]";
                        }                    
                   
?>