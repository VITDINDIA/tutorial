<?php include("includes/header.php");  ?>


        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
<?php	require_once("includes/header_nav.php");	?>           
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<?php	require_once("includes/side_nav.php");	?>  
<?php	
if(@$_GET['id']=="Campaign-Leads")             {require_once("includes/Campaign-Leads.php");       }
else if(@$_GET['id']=="Template-Management")   {require_once("includes/Template-Management.php");  }
else if(@$_GET['id']=="Counsellor-Management") {require_once("includes/Counsellor-Management.php");}
else if(@$_GET['id']=="Manually")              {require_once("includes/Manually.php");             }
else if(@$_GET['id']=="LMS-Dashboard")         {require_once("includes/admin_content.php");        }
else if(@$_GET['id']=="Admin_Report")          {require_once("includes/Admin_Report.php");        }
else if(@$_GET['id']=="Manual-Report")         {require_once("includes/Manual-Report.php");        }
else if(@$_GET['id']=="Admin_FollowUp_Report")         {require_once("includes/Admin_FollowUp_Report.php");        }
else	                                       {require_once("includes/Campaign-Leads.php");      }	

?>        
<?php include("includes/footer.php"); ?>