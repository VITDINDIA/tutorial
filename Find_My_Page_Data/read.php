<?php
$temp_name1=$_FILES['sample']['tmp_name']; 
$name1=$_FILES['sample']['name'];
move_uploaded_file($temp_name1,$name1);
require("reader.php"); // php excel reader
require("../init.php");
$connection=new Spreadsheet_Excel_Reader(); // our main object
$connection->read($name1);
$startrow=$_POST['startrow'];
$endrow=$_POST['endrow'];

for($i=$startrow;$i<$endrow;$i++){ // we read row to row
//$date=$call_data->facebook_date($connection->sheets[0]["cells"][$i][2]);
$course=$connection->sheets[0]["cells"][$i][10];
$EMAIL=$connection->sheets[0]["cells"][$i][12];
$name=$connection->sheets[0]["cells"][$i][13];
$contact=$connection->sheets[0]["cells"][$i][14];
$city=$connection->sheets[0]["cells"][$i][15];
@$date=date('Y-m-d');
$database->query("insert into `get_data` VALUES('','$name','$contact','','$city','$EMAIL','$course','Facebook','$date','Pending','','')");

}

// End this video.thank you for watch :) 
// Soppy


?>