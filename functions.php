<?php
function __autoload($class)
	{
$class=strtolower($class);	
$the_path="find_classes/{$class}.php";
if(file_exists($the_path))	{	

require_once($the_path);							
							}
else
							{

die("The file name {$class} was not found");	
							}		
	
	}
function redirect($location)
	{
header("location:{$location}");		
	}		
?>