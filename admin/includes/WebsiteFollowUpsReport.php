<?php
require_once("../../init.php");
$Tpen=$Db_objects->count_total_pending_followups_website();
$f1=$Db_objects->count_total_pending_followups1("Website");
$f2=$Db_objects->count_total_pending_followups2("Website");
$f3=$Db_objects->count_total_pending_followups3("Website");

$Msg="(Website | Follow-Ups Report)(Total Pending: $Tpen)(Follow-Up-1: $f1)(Follow-Up-2: $f2)(Follow-Up-3: $f3)";

$Convert_Msg=$call_data->text_for_msg($Msg);
$call_data->send_sms($call_data->get_number(),$Convert_Msg);



?>