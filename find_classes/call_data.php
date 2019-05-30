<?php

	    
class call_data
	{
public $the_message="";		
public static function get_title()
		{
echo"Lead Management System";		
		}	
public function test_query()
    {
global $database;
;	       
$sql="
CREATE TABLE IF NOT EXISTS `template_management` (`Template_Id` varchar(30) NOT NULL, `Msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
";    
$sql1="update `get_data` set `source`='Walk-In' where `source`='Manual'";   
$result_set=$database->query($sql);$result_set1=$database->query($sql1);
    }   
public function text_for_msg($msg)
        {
return str_replace(' ','%20',$msg);  
    
        } 
public function date_format($date)
		{
if(isset($date)){
$data=explode("-",$date);
return $data[2]."-".$data[1]."-".$data[0];
                }
        } 
public function facebook_date($date)
		{
if(isset($date)){
$data=explode("/",$date);
$date=$data[1];
return "2018"."-".$data[0]."-".$date;
                }
        }         
public function get_fresh_data()
{
$Url="http://vidya.edu.in/LMS/implode_site_form_data_daybyday.php";	
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$Url);
curl_exec($ch);
curl_close($ch);    
}                        			
public function send_sms($Contact,$Msg)
		{
$Url="http://sms.foxxglove.com/api/mt/SendSMS?user=vidya&password=654321&senderid=VIDYAS&channel=Trans&DCS=0&flashsms=0&number=".$Contact."&text=".$Msg."&route=15";	
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$Url);
curl_exec($ch);
curl_close($ch);	
		}
public function get_number()
    {
return "9808156144,8979556677,9917000200,8979742701,8650000774";    
    
    }        		
public function redirect($page)
	{	
echo"<script language='javascript1.5'>location.href='".$page."';</script>";	
	}
	
	
	}
	
$call_data=new call_data();	
?>