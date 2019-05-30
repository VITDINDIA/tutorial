<?php
class User extends db_objects
	{
public static function verify_user($uid,$pass)
		{
$sql="select * from ".self::$login_table." where `user_id` = '".$uid;			
$sql.="' and `password` = '".$pass."'";
return self::find_query_by_id($sql);	
		}	
	}
$user=new User();
?>