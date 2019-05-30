<?php
require_once("../../init.php");
$WebsiteLeads=$Db_objects->count_source_leads_today("Website");
$followup1=$Db_objects->count_today_followups(1);$followup2=$Db_objects->count_today_followups(2);
$followup3=$Db_objects->count_today_followups(3);
//$walkinTib $telTib $AppTIB $AddTIB $walkinTcbse $telTcbse $AppTCBSE $AddTCBSE $walkinTearlyyears $telTearlyyears $AppTEY $AddTEY 
$Msg="(VKS LMS | Today Report) (Today Website Leads: $WebsiteLeads) (Follow-Up1: $followup1) (Follow-Up2: $followup2) (Follow-Up3: $followup3)";

$Convert_Msg=$call_data->text_for_msg($Msg);
$call_data->send_sms($call_data->get_number(),$Convert_Msg);


?>