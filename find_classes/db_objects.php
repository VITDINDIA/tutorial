<?php
class db_objects
	{	
public $user_name;public $cnt;public $contact;public $second_contact;public $city;public $email;public $course;public 
$source;public $status;public $query;public $Template_Id;public $Msg;
public $id;public $follow_up_1;public $follow_up_2;public $follow_up_3;
public $date1; public $date2;public $date3;public $remark; public $rdate;
public $category;public $grade; public $dob;public $fname; public $mname;public $routeNumber; public $previousSchool;public $address;
public $reference;public $typeofdiscount;public $discount;

public static $db_ftable_fields=array("user_name","contact","second_contact","city","email","course","source","cdtime","status","query","submit_time");
public static $remark_table_fields=array("id","follow_up_1","follow_up_2","follow_up_3","date1","date2","date3");
public static $template_table_fields=array("Template_Id","Msg");
public static $getdata_table_fields=array("category","grade","dob","fname","mname","routeNumber","previousSchool","address","discount","reference","typeofdiscount","cnt");
public static $db_transaction_table_fields= array("contact","remark","rdate","course");
public static $db_ftable="get_data";public static $getdata_table="getdatadetails";public static $login_table="admin_logins";
protected static $message="message";public static $remark_table="remark_table";
public static $template_table="template_management";public static $transaction_table="transactiontable";   

public function implode_site_form_data()
{
global $database;
$sql ="SELECT DISTINCT(`submit_time`) FROM `wp_cf7dbplugin_st` order by `submit_time` desc limit 200  ";						
$result_set=$database->wordpress_query($sql);
while($fetch=mysqli_fetch_array($result_set))   {
$uname=mysqli_fetch_array($database->wordpress_query("SELECT field_value FROM `wp_cf7dbplugin_submits` where `submit_time`='$fetch[0]' and `field_name`='your-name'"));
$uemail=mysqli_fetch_array($database->wordpress_query("SELECT field_value FROM `wp_cf7dbplugin_submits` where `submit_time`='$fetch[0]' and `field_name`='your-email'"));
$ucontact=mysqli_fetch_array($database->wordpress_query("SELECT field_value FROM `wp_cf7dbplugin_submits` where `submit_time`='$fetch[0]' and `field_name`='tel-472'"));
$ucourse=mysqli_fetch_array($database->wordpress_query("SELECT field_value FROM `wp_cf7dbplugin_submits` where `submit_time`='$fetch[0]' and `field_name`='menu-776'"));
$usource=mysqli_fetch_array($database->wordpress_query("SELECT DISTINCT(`form_name`) FROM `wp_cf7dbplugin_submits` where `submit_time`='$fetch[0]' "));
$today=@date('Y-m-d');
$sql1="insert IGNORE into `get_data` VALUES('','$uname[0]','$ucontact[0]','','','$uemail[0]','$ucourse[0]','Website','$today','Pending','','$fetch[0]')";  
$database->query($sql1);
                                                 }      	   
}
public function implode_site_form_data_daybyday()
{
global $database;
$sqlmax="SELECT MAX(`submit_time`) FROM `get_data` ";
$maxfetch=mysqli_fetch_array($database->query($sqlmax));
$sql ="SELECT DISTINCT(`submit_time`) FROM `wp_cf7dbplugin_st` where `submit_time`>$maxfetch[0] order by `submit_time` ";						
$result_set=$database->wordpress_query($sql);
while($fetch=mysqli_fetch_array($result_set))   {
$uname=mysqli_fetch_array($database->wordpress_query("SELECT field_value FROM `wp_cf7dbplugin_submits` where `submit_time`='$fetch[0]' and `field_name`='your-name'"));
$uemail=mysqli_fetch_array($database->wordpress_query("SELECT field_value FROM `wp_cf7dbplugin_submits` where `submit_time`='$fetch[0]' and `field_name`='your-email'"));
$ucontact=mysqli_fetch_array($database->wordpress_query("SELECT field_value FROM `wp_cf7dbplugin_submits` where `submit_time`='$fetch[0]' and `field_name`='tel-472'"));
$ucourse=mysqli_fetch_array($database->wordpress_query("SELECT field_value FROM `wp_cf7dbplugin_submits` where `submit_time`='$fetch[0]' and `field_name`='menu-776'"));
$usource=mysqli_fetch_array($database->wordpress_query("SELECT field_value FROM `wp_cf7dbplugin_submits` where `submit_time`='$fetch[0]' and `field_name`='Submitted From'"));
$today=@date('Y-m-d');
$city=$this->get_city($usource[0]);
$sql1="insert IGNORE into `get_data` VALUES('','$uname[0]','$ucontact[0]','','$city','$uemail[0]','$ucourse[0]','Website','$today','Pending','','$fetch[0]')";  
$database->query($sql1);
                                                }      	   
}

public function update_lead()
{
global $database;
$sql ="update ".self::$db_ftable." set `user_name`= '".$this->user_name."',`contact`='".$this->contact."',
`second_contact`= '".$this->second_contact."',`email`='".$this->email."',
`course`= '".$this->course."',`source`='".$this->source."', `cdtime`= '".$this->cdtime."',
`Query`='".$this->query."' where `cnt`= '".$this->cnt."' ";

$sql1 ="update ".self::$getdata_table." set `category`= '".$this->category."',`grade`='".$this->grade."',
`dob`= '".$this->dob."',`fname`='".$this->fname."',`mname`= '".$this->mname."',`routeNumber`='".$this->routeNumber."',`previousSchool`= '".$this->previousSchool."',
`address`='".$this->address."',`discount`= '".$this->discount."',`reference`='".$this->reference."',`typeofdiscount`= '".$this->typeofdiscount."' where `cnt`= '".$this->cnt."'";

$result_set=$database->query($sql);	
$result_set1=$database->query($sql1);	
return null;
}
public function get_walkin_data($ContactNumber)
{
global $database;
$sql="SELECT `getdatadetails`.`cnt`,`get_data`.`Status`,`get_data`.`user_name`,`getdatadetails`.`dob`,`getdatadetails`.`category`,
`getdatadetails`.`fname`,`getdatadetails`.`mname`,`get_data`.`contact`,`get_data`.`second_contact`,`get_data`.`Query`,
`getdatadetails`.`previousSchool`,`get_data`.`course`,`getdatadetails`.`grade`,`getdatadetails`.`routeNumber`,
`getdatadetails`.`address`,`get_data`.`city`,`get_data`.`email`,`get_data`.`source`,`get_data`.`cdtime`,`getdatadetails`.`reference`,
`getdatadetails`.`discount`,`getdatadetails`.`typeofdiscount` FROM `getdatadetails`,`get_data` WHERE `getdatadetails`.`cnt`=`get_data`.`cnt` and `get_data`.`source` in 
('Telephonic','Walk-In') and `get_data`.`contact`='$ContactNumber'";
$result_set=$database->query($sql);	
return mysqli_fetch_array($result_set);  
}
public function delete_walkin_data()
{
global $database;

$sql="delete FROM `getdatadetails` WHERE `getdatadetails`.`cnt`='".$this->cnt."' ";
$sql1="delete FROM `get_data` WHERE `get_data`.`cnt`='".$this->cnt."' ";
$sql2="delete FROM `remark_table` WHERE `remark_table`.`id`='".$this->cnt."' ";
$sql3="delete FROM `transactiontable` WHERE `transactiontable`.`contact`='".$this->cnt."' ";
$result_set=$database->query($sql);	
$result_set1=$database->query($sql1);
$result_set2=$database->query($sql2);
$result_set3=$database->query($sql3);
return null;
}
public function get_all_data($cnt)
{
global $database;
$sql="SELECT * FROM `get_data` WHERE `cnt`='$cnt'";
$result_set=$database->query($sql);
$fetch=mysqli_fetch_array($result_set);	
return $fetch[6] ;  
}

public function get_transaction_details($cnt,$Remark)
{
global $database;
$sql="SELECT `rdate` FROM `transactiontable` WHERE  `contact`='$cnt' and `remark`='$Remark'";
$result_set=$database->query($sql);	
$FetchData=mysqli_fetch_array($result_set);  
return $FetchData[0];
}

public function get_latest_count()
{
global $database;
$sql="SELECT `cnt` FROM `get_data` order by `cnt` desc";
$result_set=$database->query($sql);	
$FetchData=mysqli_fetch_array($result_set);  
$ReturnData=$FetchData[0]+1;
return $ReturnData;
}

public function search_all($check,$today,$fdate,$sdate)
	{	
if($check==1)	{	
$sql ="select * from ".self::$db_ftable. " WHERE `source` not in ('Telephonic','Walk-In') order by `cnt` desc limit $fdate,$sdate  ";						
				}
else if($check==2)	{	
$sql ="select * from ".self::$db_ftable." WHERE `source` not in ('Telephonic','Walk-In') and `cdtime`>='$fdate' and `cdtime` <= '$sdate' order by `cnt` desc   ";								
                	}
else if($check==3)	{	
$sql ="select * from ".self::$db_ftable." WHERE `source` not in ('Telephonic','Walk-In') and `cdtime`>='$fdate' and `cdtime` <= '$sdate' order by `cnt` desc   ";								
                	}  
else if($check==4)	{	
$sql ="select * from ".self::$db_ftable." WHERE `source` in 
('Telephonic','Walk-In') and `cdtime`>='$fdate' and `cdtime` <= '$sdate' order by `cnt` desc   ";
								
                	} 
else if($check==5)	{	
$sql ="SELECT * FROM `get_data` WHERE `get_data`.`source` in 
('Telephonic','Walk-In') and `get_data`.`cdtime` >= '$fdate' and `get_data`.`cdtime` <= '$sdate' order by `get_data`.`cnt` desc   ";								
                	}                                        
if($check==3)	{                                      				
return $this->find_query_by_all_report($sql);	
                }
else if ($check==5)
                {                  
return $this->find_query_by_all_reports($sql);	    
                }                 
else if ($check==1)
                {                  
return $this->find_query_by_all($sql,$fdate,$sdate);    
                } 
else if ($check==2)                             	
                {                  
return $this->find_query_by_followup($sql,$fdate,$sdate);    
                }
else if ($check==4)                             	
                {                  
return $this->find_query_by_followup($sql,$fdate,$sdate);    
                }                 
	}


protected function find_query_by_followup($sql,$fdate,$sdate)
		{
global $database;global $call_data;
$result_set=$database->query($sql);	
if($database->count_rows($result_set) != 0)
	{
?>
<tbody> 
<?php		
$i=1;		
while($fetch=mysqli_fetch_array($result_set))
		{		
?>
<tr >
<td style="
<?php  if($fetch[9]=="Junk") { ?>background-color: #A6D505;<?php   } 
else if($fetch[9]=="Not-Interested") { ?>background-color: #D53105;<?php   }  
else if($fetch[9]=="Interested") { ?>background-color: #00F7FF;<?php   } 
else if($fetch[9]=="Contacted") { ?>background-color: #FB00FF;<?php   } 
else if($fetch[9]=="Not-Picked") { ?>background-color: #FF8000;<?php   } 
else if($fetch[9]=="Admission-Confirmed" or $fetch[9]=="Walk-In") { ?>background-color: #42c8f4 ;<?php   } 
else if($fetch[9]=="Application-Purchased") { ?>background-color: #f4ee42;<?php   } 
else if($fetch[9]=="Visited") { ?>background-color: #f4ee42;<?php   } 
?>
"><?php	print $i;	?></td>
<td >
<div class="form-group">
<form method="POST" >
<input type="hidden" value="<?php     print $sdate;  ?>" name="sdate"   />
<input type="hidden" value="<?php     print $fdate;  ?>" name="fdate"   />
  <select id="<?php   print $fetch[0];  ?>" class="form-control" name="status" onchange="this.form.submit()">
    <option value="<?php   print $fetch[9];   ?>"><?php   print $fetch[9];   ?></option>
    <option value="Contacted">Contacted</option>
    <option value="Junk">Junk</option>
    <option value="Interested">Interested</option>
    <option value="Not-Interested">Not Interested</option>
    <option value="Not-Picked">Not Picked</option>
      <?php  if($_GET["id"] != "Campaign-Leads" and $fetch[7]!="Telephonic"){    
        
      ?>
    <option value="Admission-Confirmed">Admission Confirmed</option>
    <option value="Application-Purchased">Application-Purchased</option>
    <?php                                                                  }    
    else
    {
    ?>
    <option value="Walk-In">Walk-In</option>
    <?php
    }
    if($fetch[7]=="Telephonic") {
    ?>
    <option value="Visited">Visited</option>
    <?php                                  } ?>
  </select>
  <input type="hidden" name="uid" value="<?php   print $fetch[0];  ?>">
  
</form>  
</div>

</td>
					<td><?php	print $fetch[1]; echo"<br>($fetch[7] / $fetch[6])"; 	?></td>
                    <td><?php	print $call_data->date_format($fetch[8]); if($this->get_transaction_details
                    ($fetch[0],"Application-Purchased") != ""){ echo" / <br>"; 
                    print $this->get_transaction_details($fetch[0],"Application-Purchased"); }	?></td>
                    <td><form method="POST"> 
                    <input type="hidden" name="suid" value="<?php   print $fetch[0];  ?>">
                    <input type="hidden" value="<?php     print $fdate;  ?>" name="fdate"   />
                   <input type="hidden" value="<?php     print $sdate;  ?>" name="sdate"   />
                   <?php print $call_data->date_format($this->Get_Followup($fetch[0],4)); echo"<br>";  ?>
                    <input type="text" name="follow1" value="<?php  print $this->Get_Followup($fetch[0],1);  ?>" 
                    id="follow1" onblur="this.form.submit()"></form> </td>
                    <td><form method="POST">
                     <input type="hidden" name="suid" value="<?php   print $fetch[0];  ?>">
                     <input type="hidden" value="<?php     print $fdate;  ?>" name="fdate"   />
                   <input type="hidden" value="<?php     print $sdate;  ?>" name="sdate"   />
                   <?php print $call_data->date_format($this->Get_Followup($fetch[0],5)); echo"<br>";  ?>
                   <input type="text" name="follow2" id="follow2" value="<?php  print $this->Get_Followup($fetch[0],2);  ?>"
                    onblur="this.form.submit()"></form>  </td>
                    <td><form method="POST">
                     <input type="hidden" name="suid" value="<?php   print $fetch[0];  ?>">
                     <input type="hidden" value="<?php     print $fdate;  ?>" name="fdate"   />
                    <input type="hidden" value="<?php     print $sdate;  ?>" name="sdate"   />
                    <?php print $call_data->date_format($this->Get_Followup($fetch[0],6)); echo"<br>";  ?>
                    <input type="text" name="follow3" id="follow3" value="<?php  print $this->Get_Followup($fetch[0],3);  ?>"
                     onblur="this.form.submit()"></form> </td>
                    <td><?php	print $fetch[2];	?></td><td><?php	print $fetch[10];	?></td>
					             
      		 </tr>
            

<?php					
$i++;   	
		}
?>
   </tbody>
<?php				
	}
	  	  } 


    
    		
protected function find_query_by_all($sql,$fdate,$sdate)
		{
global $database;global $call_data;
$result_set=$database->query($sql);	
if($database->count_rows($result_set) != 0)
	{
?>
<tbody> 
<?php		
$i=$_SESSION['previous']+1;
while($fetch=mysqli_fetch_array($result_set))
		{		
?>
<tr >
<td style="
<?php  if($fetch[9]=="Junk") { ?>background-color: #A6D505;<?php   } 
else if($fetch[9]=="Not-Interested") { ?>background-color: #D53105;<?php   }  
else if($fetch[9]=="Interested") { ?>background-color: #00F7FF;<?php   } 
else if($fetch[9]=="Contacted") { ?>background-color: #FB00FF;<?php   } 
else if($fetch[9]=="Not-Picked") { ?>background-color: #FF8000;<?php   } 
else if($fetch[9]=="Admission-Confirmed" or $fetch[9]=="Walk-In") { ?>background-color: #42c8f4 ;<?php   } 
else if($fetch[9]=="Application-Purchased") { ?>background-color: #f4ee42;<?php   } 
?>
"><?php	print $i;	?></td>
<td >

<div class="form-group">
<form method="POST" >
<input type="hidden" value="<?php     print $sdate;  ?>" name="sdate"   />
<input type="hidden" value="<?php     print $fdate;  ?>" name="fdate"   />
  <select id="<?php   print $fetch[0];  ?>" class="form-control"  name="status" onchange="this.form.submit()">
    <option value="<?php   print $fetch[9];   ?>"><?php   print $fetch[9];   ?></option>
    <option value="Contacted">Contacted</option>
    <option value="Junk">Junk</option>
    <option value="Interested">Interested</option>
    <option value="Not-Interested">Not Interested</option>
    <option value="Not-Picked">Not Picked</option>
    <?php  if($_GET["id"] != "LMS-Dashboard" and $fetch[7]!="Telephonic"){    ?>
    <option value="Admission-Confirmed">Admission Confirmed</option>
    <option value="Application-Purchased">Application Purchased</option>
    <?php                                    }   
    else
          {
    ?>
    <option value="Walk-In">Walk-In</option>
    <?php
          }
      if($fetch[7]=="Telephonic") {
    ?>
    <option value="Visited">Visited</option>
    <?php                                  } ?>
  </select>
  <input type="hidden" name="uid" value="<?php   print $fetch[0];  ?>"></a>
  
</form>  
</div>

</td>
					<td><?php	print $fetch[1];   	?></td>                   
                    <td><?php	print $fetch[2];	?></td>					
                    <td><?php	print $fetch[6];	?></td>
                    <td><form method="POST"> 
                    <input type="hidden" name="suid" value="<?php   print $fetch[0];  ?>">
                   <?php print $call_data->date_format($this->Get_Followup($fetch[0],4)); echo"<br>";  ?>
                    <input type="text" name="follow1" value="<?php  print $this->Get_Followup($fetch[0],1);  ?>" 
                    id="follow1" onblur="this.form.submit();"   /></form> </td>
                    <td><?php	print $fetch[5];	?></td>
                    <td><?php   print $fetch[4];	?></td>
					<td><?php	print $fetch[7];	?></td>
                    <td ><?php	print $call_data->date_format($fetch[8]);	?></td>
      		 </tr>
            

<?php					
$i++;   	
		}
?>
   </tbody>
<?php				
	}
	  	  } 
protected function get_city($ip)
{
$location = file_get_contents('http://ip-api.com/json/'.$ip);
$data=json_decode($location,TRUE);
return $data['city'];    
}
protected function find_query_by_all_reports($sql)
		{
global $database;global $call_data;
$result_set=$database->query($sql);	
if($database->count_rows($result_set) != 0)
	{
?>
<tbody> 
<?php		
$i=1;		
while($fetch=mysqli_fetch_array($result_set))
		{		
?> 
<tr >
                    <td><?php	print $i;	?></td>
                    <td><?php	print $call_data->date_format($fetch[8]);	?></td>
                    <td ><?php  print $fetch[9];   ?></td>
					<td><?php	print $fetch[1]; 	?></td>
                    <td><?php   print $this->Get_Followup($fetch[0],1);  ?></td>
                    <td><?php   print $this->Get_Followup($fetch[0],2);  ?>    </td>
                    <td><?php   print $this->Get_Followup($fetch[0],3);  ?>    </td>
                    <td><?php   print $call_data->date_format($this->Get_Followup($fetch[0],4));  ?></td>
                    <td><?php   print $call_data->date_format($this->Get_Followup($fetch[0],5));  ?>    </td>
                    <td><?php   print $call_data->date_format($this->Get_Followup($fetch[0],6));  ?>    </td>
                    <td><?php	print $fetch[2];	?></td>
                    <td><?php	print $fetch[10];	?></td>
					<td><?php	print $fetch[5];	?></td>
                    <td><?php	print $fetch[7];	?></td>
                         
                    
      		 </tr>

<?php					
$i++;   	
		}
?>
   </tbody>
<?php				
	}
	  	  } 



protected function find_query_by_all_report($sql)
		{
global $database;global $call_data;
$result_set=$database->query($sql);	
if($database->count_rows($result_set) != 0)
	{
?>
<tbody> 
<?php		
$i=1;		
while($fetch=mysqli_fetch_array($result_set))
		{		
?> 
<tr >
                    <td><?php	print $i;	?></td>
                    <td ><?php  print $fetch[9];   ?></td>
					<td><?php	print $fetch[1]; 	?></td>
                    <td><?php   print $this->Get_Followup($fetch[0],1);  ?></td>
                    <td><?php   print $this->Get_Followup($fetch[0],2);  ?>    </td>
                    <td><?php   print $this->Get_Followup($fetch[0],3);  ?>    </td>
                    <td><?php   print $call_data->date_format($this->Get_Followup($fetch[0],4));  ?></td>
                    <td><?php   print $call_data->date_format($this->Get_Followup($fetch[0],5));  ?>    </td>
                    <td><?php   print $call_data->date_format($this->Get_Followup($fetch[0],6));  ?>    </td>
                    <td><?php	print $fetch[2];	?></td>
                    <td><?php	print $fetch[6];	?></td>
                    <td><?php	print $fetch[5];	?></td>
                    <td><?php	print $fetch[4];	?></td>
					<td><?php	print $fetch[7];	?></td>
                    <td ><?php	print $call_data->date_format($fetch[8]);	?></td>
                    
      		 </tr>

<?php					
$i++;   	
		}
?>
   </tbody>
<?php				
	}
	  	  } 
public function count_transaction($Status,$Course)
	{	
global $database;
@$date=date('Y-m-d');	
$sql ="SELECT DISTINCT(`contact`) FROM ".self::$transaction_table." where `remark`= '$Status' and `rdate` like '%$date%' and `course`='$Course' ";
return $database->count_rows($database->query($sql));		
	} 
public function count_today_transaction($Status)
	{	
global $database;
@$date=date('Y-m-d');	
$sql ="SELECT DISTINCT(`contact`) FROM ".self::$transaction_table." where `remark`= '$Status' and `rdate` like '%$date%' ";
return $database->count_rows($database->query($sql));		
	}    
public function count_total_transaction($Status,$Course)
	{	
global $database;
@$date=date('Y-m-d');	
$sql ="SELECT DISTINCT(`contact`) FROM ".self::$transaction_table." WHERE `remark`='$Status' and  `course`='$Course' ";
return $database->count_rows($database->query($sql));		
	}    
public function count_all_transaction($Status)
	{	
global $database;
@$date=date('Y-m-d');	
$sql ="SELECT DISTINCT(`contact`) FROM ".self::$transaction_table." WHERE `remark`='$Status' ";
return $database->count_rows($database->query($sql));		
	}              
public function count_leads($from,$to)
	{	
global $database;	
$sql ="SELECT * FROM ".self::$db_ftable.  " where `cdtime` >= '$from' and `cdtime` <= '$to'";
return $database->count_rows($database->query($sql));		
	}
public function count_today_leads($date)
	{	
global $database;	
$sql ="SELECT * FROM ".self::$db_ftable. " where `cdtime` like '%$date%'";
return $database->count_rows($database->query($sql));		
	}	

public function count_status_web_leads($status,$source,$from,$to)
	{	
global $database;	
$sql ="SELECT * FROM ".self::$db_ftable. " where `Status`='$status' and `source` ='$source'  and `cdtime` >= '$from' and `cdtime` <= '$to'  ";
return $database->count_rows($database->query($sql));		
	}  
public function count_total_pending_followups_walkIn()
	{	
global $database;	
$sql ="SELECT * FROM ".self::$db_ftable. " where `Status` not in ('Admission-Confirmed','Not-Interested')  and `source` = 'Walk-In' ";
return $database->count_rows($database->query($sql));		
	} 
public function count_total_pending_followups_telephonic()
	{	
global $database;	
$sql ="SELECT * FROM ".self::$db_ftable. " where `Status` not in ('Visited','Not-Interested')  and `source` = 'Telephonic' ";
return $database->count_rows($database->query($sql));		
	} 
public function count_total_pending_followups_website()
	{	
global $database;	
$sql ="SELECT * FROM ".self::$db_ftable. " where `Status` not in ('Not-Interested','Junk','Walk-In')  and `source` = 'Website' ";
return $database->count_rows($database->query($sql));		
	}  
public function count_total_pending_followups1($Source)
	{	
global $database;	
if($Source == "Website")    {
$sql ="SELECT `get_data`.`cnt` FROM `get_data`,`remark_table` WHERE `get_data`.`cnt`=`remark_table`.`id` and  `get_data`.`source`='$Source' and `get_data`.`Status` not in ('Not-Interested','Junk','Walk-In') and `remark_table`.`follow_up_1` != '' ";
                            }
else if($Source == "Telephonic")    {
$sql ="SELECT `get_data`.`cnt` FROM `get_data`,`remark_table` WHERE `get_data`.`cnt`=`remark_table`.`id` and  `get_data`.`source`='$Source' and `get_data`.`Status` not in ('Visited','Not-Interested') and `remark_table`.`follow_up_1` != '' ";
                                    }
else                                {
$sql ="SELECT `get_data`.`cnt` FROM `get_data`,`remark_table` WHERE `get_data`.`cnt`=`remark_table`.`id` and  `get_data`.`source`='$Source' and `get_data`.`Status` not in ('Admission-Confirmed','Not-Interested')  and `remark_table`.`follow_up_1` != '' ";
                                    }                          
                            
return $database->count_rows($database->query($sql));		
	} 
public function count_total_pending_followups2($Source)
	{	
global $database;	
if($Source == "Website")    {
$sql ="SELECT `get_data`.`cnt` FROM `get_data`,`remark_table` WHERE `get_data`.`cnt`=`remark_table`.`id` and  `get_data`.`source`='$Source' and `get_data`.`Status` not in ('Not-Interested','Junk','Walk-In') and `remark_table`.`follow_up_2` != '' ";
                            }
else if($Source == "Telephonic")    {
$sql ="SELECT `get_data`.`cnt` FROM `get_data`,`remark_table` WHERE `get_data`.`cnt`=`remark_table`.`id` and  `get_data`.`source`='$Source' and `get_data`.`Status` not in ('Visited','Not-Interested') and `remark_table`.`follow_up_2` != '' ";
                                    }
else                                {
$sql ="SELECT `get_data`.`cnt` FROM `get_data`,`remark_table` WHERE `get_data`.`cnt`=`remark_table`.`id` and  `get_data`.`source`='$Source' and `get_data`.`Status` not in ('Admission-Confirmed','Not-Interested')  and `remark_table`.`follow_up_2` != '' ";
                                    }     
return $database->count_rows($database->query($sql));		
	}       
public function count_total_pending_followups3($Source)
	{	
global $database;	
if($Source == "Website")    {
$sql ="SELECT `get_data`.`cnt` FROM `get_data`,`remark_table` WHERE `get_data`.`cnt`=`remark_table`.`id` and  `get_data`.`source`='$Source' and `get_data`.`Status` not in ('Not-Interested','Junk','Walk-In') and `remark_table`.`follow_up_3` != '' ";
                            }
else if($Source == "Telephonic")    {
$sql ="SELECT `get_data`.`cnt` FROM `get_data`,`remark_table` WHERE `get_data`.`cnt`=`remark_table`.`id` and  `get_data`.`source`='$Source' and `get_data`.`Status` not in ('Visited','Not-Interested') and `remark_table`.`follow_up_3` != '' ";
                                    }
else                                {
$sql ="SELECT `get_data`.`cnt` FROM `get_data`,`remark_table` WHERE `get_data`.`cnt`=`remark_table`.`id` and  `get_data`.`source`='$Source' and `get_data`.`Status` not in ('Admission-Confirmed','Not-Interested')  and `remark_table`.`follow_up_3` != '' ";
                                    }     
return $database->count_rows($database->query($sql));		
	}             
public function count_today_followups($condition)
	{	
global $database;@$date=date('Y-m-d');	
if($condition ==1)	{
$sql ="SELECT `id` FROM ".self::$remark_table. " WHERE `date1` ='$date' ";
                    }
else if($condition ==2)	{                     
$sql ="SELECT `id` FROM ".self::$remark_table. " WHERE `date2` ='$date' ";
                        }
else        {                        
$sql ="SELECT `id` FROM ".self::$remark_table. " WHERE `date3` ='$date' ";
            }
return $database->count_rows($database->query($sql));		
	}
public function count_total_followups($condition)
	{	
global $database;
if($condition ==1)	{
$sql ="SELECT `id` FROM ".self::$remark_table ;
                    }
else if($condition ==2)	{                    
$sql ="SELECT `id` FROM ".self::$remark_table. " WHERE `date2` !='0000-00-00' ";
                        }
else    {                        
$sql ="SELECT `id` FROM ".self::$remark_table. " WHERE `date3` !='0000-00-00' ";
        }
return $database->count_rows($database->query($sql));		
	}    
public function count_status_source_phone_leads($status)
	{	
global $database;	
$sql ="SELECT * FROM ".self::$db_ftable. " where `Status`='$status' and `source` = 'Telephonic' ";
return $database->count_rows($database->query($sql));		
	}          
public function count_status_today_leads($status)
	{	
global $database;	
@$date=date('Y-m-d');
$sql ="SELECT * FROM ".self::$db_ftable. " where `Status`='$status' and `cdtime` like '%$date%'";
return $database->count_rows($database->query($sql));		
	}    
public function count_source_leads($source, $from,$to)
	{	
global $database;	
$sql ="SELECT * FROM ".self::$db_ftable. " where `source`='$source' and `cdtime` >= '$from' and `cdtime` <= '$to' ";
return $database->count_rows($database->query($sql));		
	}
public function count_source_leads_today($source)
	{	
global $database;
@$date=date('Y-m-d');	
$sql ="SELECT * FROM ".self::$db_ftable. " where `source`='$source' and `cdtime` like '%$date%'";
return $database->count_rows($database->query($sql));		
	}    
public function count_course_today_leads($course)
	{	
global $database;
@$date=date('Y-m-d');	
$sql ="SELECT * FROM ".self::$db_ftable. " where `course`='$course' and `cdtime` like '%$date%'";
return $database->count_rows($database->query($sql));		
	} 
      
public function count_source_today_leads($course,$source)
	{	
global $database;
@$date=date('Y-m-d');	
$sql ="SELECT * FROM ".self::$db_ftable. " where `course`='$course' and `source`='$source' and `cdtime` like '%$date%'";
return $database->count_rows($database->query($sql));		
	}
public function count_source_total_leads($course,$source)
	{	
global $database;	
$sql ="SELECT * FROM ".self::$db_ftable. " where `course`='$course' and `source`='$source' ";
return $database->count_rows($database->query($sql));		
	}      
public function count_status_date_leads($status,$date1,$date2)
	{	
global $database;	
$sql ="SELECT * FROM ".self::$db_ftable. " where `Status`='$status' and `cdtime`>='$fdate' and `cdtime` <= '$sdate' ";
return $database->count_rows($database->query($sql));		
	}   
     
public function update_status($uid,$value)
	{
if(isset($value))	{		
global $database;
if($database->escape_string($value) != "Application-Purchased" and $database->escape_string($value) != "Admission-Confirmed")
                {			
$sql ="update ".self::$db_ftable." set `Status`= '".$database->escape_string($value)."' where `cnt`= '$uid' "; 
$result_set=$database->query($sql);	
                }
if($database->escape_string($value) == "Application-Purchased" or $database->escape_string($value) == "Admission-Confirmed")
                {
if($database->escape_string($value) == "Application-Purchased" and $database->count_rows($database->query("SELECT * FROM `transactiontable` WHERE `contact`='$uid' and  `remark`='Admission-Confirmed'")) ==0)                    
                    {

$this->course=$this->get_all_data($uid);           
$this->contact=$uid; $this->remark=$value;$this->rdate=date('Y-m-d');                
$properties=$this->clean_properties(self::$db_transaction_table_fields);
$sql="insert into ".self::$transaction_table."( ".implode(",",array_keys($properties)) ." ) values('";
$sql.=implode("','",array_values($properties)). "')";                                        
if($database->query($sql))
			{
$this->id=$database->the_insert_id();	
$sql ="update ".self::$db_ftable." set `Status`= '".$database->escape_string($value)."' where `cnt`= '$uid' "; 
$result_set=$database->query($sql);			
return true;		
			}
else
			{
return false;	
			} 
               
                     } 
else if($database->escape_string($value) == "Application-Purchased" and $database->count_rows($database->query("SELECT * FROM `transactiontable` WHERE `contact`='$uid' and  `remark`='Admission-Confirmed'")) >0)                    
                    {
$sql="delete from ".self::$transaction_table." where `contact`= $uid and `remark`='Admission-Confirmed'";   
$database->query($sql); 
$sql ="update ".self::$db_ftable." set `Status`= '".$database->escape_string($value)."' where `cnt`= '$uid' "; 
$result_set=$database->query($sql);	  
                     } 
                     
else if($database->escape_string($value) == "Admission-Confirmed" and $database->count_rows($database->query("SELECT * FROM `transactiontable` WHERE `contact`='$uid' and  `remark`='Application-Purchased'")) > 0)                    
                    {

$this->course=$this->get_all_data($uid);           
$this->contact=$uid; $this->remark=$value;$this->rdate=date('Y-m-d');                
$properties=$this->clean_properties(self::$db_transaction_table_fields);
$sql="insert into ".self::$transaction_table."( ".implode(",",array_keys($properties)) ." ) values('";
$sql.=implode("','",array_values($properties)). "')";                                        
if($database->query($sql))
			{
$this->id=$database->the_insert_id();	
$sql ="update ".self::$db_ftable." set `Status`= '".$database->escape_string($value)."' where `cnt`= '$uid' "; 
$result_set=$database->query($sql);	  		
return true;		
			}
else
			{
return false;	
			} 
             
                     }                            
                }
else
                {       
$sql="delete from ".self::$transaction_table." where `contact`= $uid";   
$database->query($sql);    
                }            

					}						
	}

public function create_lead()
		{	
global $database;

$properties=$this->clean_properties(self::$db_ftable_fields);

$sql="insert into ".self::$db_ftable."( ".implode(",",array_keys($properties)) ." ) values('";
$sql.=implode("','",array_values($properties)). "')";                                        
if($database->query($sql))
			{
$this->id=$database->the_insert_id();			
return true;		
			}
else
			{
return false;	
			}	
            		

		}
public function create_lead_details()
		{	
global $database;

$properties=$this->clean_properties(self::$getdata_table_fields);

$sql="insert into ".self::$getdata_table."( ".implode(",",array_keys($properties)) ." ) values('";
$sql.=implode("','",array_values($properties)). "')";                                        
if($database->query($sql))
			{
$this->id=$database->the_insert_id();			
return true;		
			}
else
			{
return false;	
			}	
            		

		}        
        
public function create_template($id,$value)
		{	
global $database;
if($this->count_template_by_id($id) == 0)  {
$properties=$this->clean_properties(self::$template_table_fields);
$sql="insert into ".self::$template_table."( ".implode(",",array_keys($properties)) ." ) values('";
$sql.=implode("','",array_values($properties)). "')";
                                         }
else
                                        {    
$sql ="update ".self::$template_table." set `Msg`= '".$database->escape_string($value)."' where `Template_Id`= '$id' ";    
                                        }  
                                       
if($database->query($sql))
			{
$this->id=$database->the_insert_id();			
return true;		
			}
else
			{
return false;	
			}			

		}
public function search_all_templet()
        {
$sql ="select * from ".self::$template_table. " order by `Template_Id`  ";   
global $database;
$result_set=$database->query($sql);	
if($database->count_rows($result_set) != 0)
	{
?>
<tbody> 
<?php		
$i=1;		
while($fetch=mysqli_fetch_array($result_set))
		{		
?> 
<tr>
                    <td><?php	print $i;	?></td>
                    <td><?php	print $fetch[0];	?></td>
                    <td ><?php  print $fetch[1];   ?></td>
</tr>                    
<?php  
$i++; 
        } 
       
?>
</tbody>
<?php        
    }
        }               		
public function create_remark($id,$value)
		{	
global $database;
if($this->count_leads_by_id($id) == 0)  {
$properties=$this->clean_properties(self::$remark_table_fields);
$sql="insert into ".self::$remark_table."( ".implode(",",array_keys($properties)) ." ) values('";
$sql.=implode("','",array_values($properties)). "')";
                                        }
else
{   
@$date=date('Y-m-d');    
$sql ="update ".self::$remark_table." set `follow_up_1`= '".$database->escape_string($value)."',`date1`='".$date."' where `id`= '$id' ";    
}                                        
if($database->query($sql))
			{
$this->id=$database->the_insert_id();			
return true;		
			}
else
			{
return false;	
			}			

		}
public function count_leads_by_id($id)
	{	
global $database;	
$sql ="SELECT * FROM ".self::$remark_table. " where `id` = '$id'";
return $database->count_rows($database->query($sql));		
	} 
            
public function count_template_by_id($id)
	{	
global $database;	
$sql ="SELECT * FROM ".self::$template_table. " where `Template_Id` = '$id'";
return $database->count_rows($database->query($sql));		
	}        
public function update_second_follow_up($uid,$value)
	{
if(isset($value))	{		
global $database;@$date=date('Y-m-d');			
$sql ="update ".self::$remark_table." set `follow_up_2`= '".$database->escape_string($value)."',`date2`='".$date."' where `id`= '$uid' "; 
$result_set=$database->query($sql);	

					}						
	}
public function update_third_follow_up($uid,$value)
	{
if(isset($value))	{		
global $database;@$date=date('Y-m-d');			
$sql ="update ".self::$remark_table." set `follow_up_3`= '".$database->escape_string($value)."',`date3`='".$date."' where `id`= '$uid' "; 
$result_set=$database->query($sql);	

					}						
	}    
    
            
public function search_by_admin_id($id)
	{
$sql ="select * from ".self::$login_table." where `user_id` = '$id' ";
return $this->find_query_by_id($sql);		
	}
public function search_by_template_id($id)
	{
$sql ="select * from ".self::$template_table." where `Template_Id` = '$id' ";
return $this->find_query_by_id($sql);		
	}
    			
protected static function find_query_by_id($sql)
		{
global $database;
$result_set=$database->query($sql);	
if($database->count_rows($result_set) != 0)
	{
return $database->count_rows($result_set);
	}
else
	{
return 0 ;	
	}
		} 

public function Get_Followup($id,$number)
	{	
global $database;	
$sql ="SELECT * FROM ".self::$remark_table." where `id`= '".$id."' ";

$result_set=$database->query($sql);
if($database->count_rows($result_set) != 0)
			{	
		 
$fetch=mysqli_fetch_array($result_set);		
return $fetch[$number];			
			}
	}	
   
   
   
   
   
   		   
public function search_by_id($id,$db_table)
	{
$sql ="select * from ".$db_table." where `roll_number` = '$id' ";
return $this->find_query_by_id($sql);		
	}	
		
protected function properties($fdb_ftable_fields)
		{
$properties=array();
foreach($fdb_ftable_fields as $db_fields)
	{	
if(property_exists($this,$db_fields)){		
$properties[$db_fields]=$this->$db_fields;	
									 }									 
	}
return 	$properties;	
		}
	
    	
public function create_msg()
		{	
global $database;
$properties=$this->clean_properties(self::$db_mtable_fields);
$sql="insert into ".self::$message."( ".implode(",",array_keys($properties)) ." ) values('";
$sql.=implode("','",array_values($properties)). "')";
if($database->query($sql))
			{
$this->id=$database->the_insert_id();			
return true;		
			}
else
			{
return false;	
			}			

		}

protected function clean_properties($fdb_ftable_fields)
	{
global $database;
$clean_properties=array();	
foreach($this->properties($fdb_ftable_fields) as $key=>$value)
			{	
$clean_properties[$key]= $database->escape_string($value);	
			}		
return $clean_properties;		
	
	}





	}
$Db_objects= new db_objects();	
?>