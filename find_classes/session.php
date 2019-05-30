<?php
class session 
	{
private $signed_in=false;public $message;public $user_id;
function __construct()
		{
@session_start();	
$this->check_login();
		}	
		
protected function check_login()
	{
if(isset($_SESSION['uid']))	
		{
$this->user_id=	$_SESSION['uid'];
$this->signed_in=true;
		}
else
		{
unset($_SESSION['uid']);	
$this->signed_in=false;	
		}		
	
	}
public function is_signed_in()
	{
return $this->signed_in;
	}			
public function for_otp($otp,$roll,$cno)
		{
if($otp)
			{
$_SESSION['otp']=$otp;
$_SESSION['roll']=$roll;
$_SESSION['cno']=$cno;
			}							
		}
public function temp_session($temp1,$temp2)
		{
$_SESSION['previous']=$temp1;
$_SESSION['next']=$temp2;							
		}        
public function Unset_Session()
	{
unset($_SESSION['otp']);
unset($_SESSION['$cno']);	
unset($_SESSION['roll']);	
unset($_SESSION['uid']);
unset($_SESSION['previous']);
unset($_SESSION['next']);	
$this->signed_in=false;	
	}			
public function check_otps()
			{
global $call_data;				
if(!isset($_SESSION['otp']))	
				{
echo"<script>location.href='index.php';</script>";
				}
else
				{
$this->session_for_msg("Get Your Otp");	
				}	
			}	
public function session_for_msg($msg)
		{
if($msg)	{				
$_SESSION['msg']=$msg;
			}
else
			{
unset($_SESSION['msg']);	
			}			
		}	
public function login($uid)
		{
if($uid)	{
global $Db_objects;	
$fetch=$Db_objects->search_by_admin_id($uid);					
$_SESSION['uid']=$uid;
$_SESSION['depart']=$fetch[3];
$this->signed_in=true;
			}
else
			{
unset($_SESSION['msg']);	
			}			
		}				
			
public function get_session($sid)
			{
if($sid){			
return $_SESSION[$sid];	
		}
			}				
	
	}
$session=new session();
?>