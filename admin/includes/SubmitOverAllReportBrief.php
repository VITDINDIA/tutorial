<?php
require_once("../../init.php");
$TWeb=$Db_objects->count_source_leads("Website");
$TWalkIn=$Db_objects->count_source_leads("Walk-In");
$Ttele=$Db_objects->count_source_leads("Telephonic");
$Tappl=$Db_objects->count_all_transaction("Application-Purchased");
$Tadm=$Db_objects->count_all_transaction("Admission-Confirmed");
//$walkinTib $telTib $AppTIB $AddTIB $walkinTcbse $telTcbse $AppTCBSE $AddTCBSE $walkinTearlyyears $telTearlyyears $AppTEY $AddTEY 
$Msg="(VGS | Report in Brief)(Total Walk-In: $TWalkIn)(Total Telephonic: $Ttele)(Website: $TWeb)(Total Application: $Tappl)(Total Admissions: $Tadm)";

$Convert_Msg=$call_data->text_for_msg($Msg);
$call_data->send_sms($call_data->get_number(),$Convert_Msg);



?>