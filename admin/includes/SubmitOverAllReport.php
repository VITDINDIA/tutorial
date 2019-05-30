<?php
require_once("../../init.php");
$totalwebsiteleads=$Db_objects->count_source_leads("Website");
$followup1=$Db_objects->count_total_followups(1);$followup2=$Db_objects->count_total_followups(2);$followup3=$Db_objects->count_total_followups(3);
$Msg="(VKP LMS | OverAll Report) (Total Website Leads: $totalwebsiteleads) (Follow-Up1: $followup1) (Follow-Up2: $followup2) (Follow-Up3: $followup3)";
$Convert_Msg=$call_data->text_for_msg($Msg);
$call_data->send_sms($call_data->get_number(),$Convert_Msg);


?>