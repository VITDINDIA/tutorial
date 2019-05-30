<?php
class Database
	{
public $connection ;
public $connection_wordpress ;
function __construct()
		{	
$this->open_db_connection();
$this->open_db_wordpress_connection();	
		}
		
public function open_db_connection()
		{
define('DB_HOST','localhost');
//define('DB_USER','vidyaedu_wp7');define('DB_PASS','J&(b*EwjL9WMhQU(Dw*67.[7');define('DB_NAME','vidyaedu_wp7');
define('DB_USER','root');define('DB_PASS','');define('DB_NAME','db_sgs');
$this->connection=new MySQLi(DB_HOST,DB_USER,DB_PASS,DB_NAME);	
if($this->connection->errno)
			{
die("Database connection failed badly". $this->connection->error);	
			}
		}	
public function open_db_wordpress_connection()
		{
define('DB_HOST1','localhost');
//define('DB_USER','vidyaedu_wp7');define('DB_PASS','J&(b*EwjL9WMhQU(Dw*67.[7');define('DB_NAME','vidyaedu_wp7');
define('DB_USER1','root');define('DB_PASS1','');define('DB_NAME1','vidya_exam');
$this->connection_wordpress=new MySQLi(DB_HOST1,DB_USER1,DB_PASS1,DB_NAME1);	
if($this->connection_wordpress->errno)
			{
die("Database connection failed badly". $this->connection_wordpress->error);	
			}
		}			
public function query($sql)
		{
$result=$this->connection->query($sql);	
$this->confirm_query($result);	
return $result;
		}
public function wordpress_query($sql)
		{
$result=$this->connection_wordpress->query($sql);	
$this->confirm_query($result);	
return $result;
		}		
protected function confirm_query($result)
		{
if(!$result){
die("Connection Failed".$this->connection->error);			
			}	
		}
function count_rows($result)
	{
return mysqli_num_rows($result);			
	}	
public function escape_string($string)
		{
$escaped_string=$this->connection->real_escape_string($string);
return 	$escaped_string	;	
		}							
//Get the Id generated in last query			
public function the_insert_id()
		{
return $this->connection->insert_id;	
		}	
	}
$database=new Database();	
?>