 <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="<?php	if(@$_GET['id']=="LMS-Dashboard"){ echo'active';}		?>">
                        <a href="index.php?id=LMS-Dashboard&y=1"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="<?php	if(@$_GET['id']=="Campaign-Leads"){ echo'active';}		?>">
                        <a href="index.php?id=Campaign-Leads"><i class="fa fa-bar-chart-o"></i> <span>Campaign Leads</a>
                    </li>
                     <li class="<?php	if(@$_GET['id']=="Template-Management"){ echo'active';}		?>" >
                        <a href="index.php?id=Template-Management"><i class="glyphicon glyphicon-envelope"></i> <span>Template Management</span></a>
                    </li>
                    <li class="<?php	if(@$_GET['id']=="Counsellor-Management"){ echo'active';}		?>"  >
                        <a href="index.php?id=Counsellor-Management"><i class="glyphicon glyphicon-envelope"></i> <span>Lead Updation</span></a>
                    </li>
                    <li class="<?php	if(@$_GET['id']=="Manually"){ echo'active';}		?>"  >
                        <a href="index.php?id=Manually"><i class="glyphicon glyphicon-cloud"></i> 
                        <span>Manually</span></a>
                    </li>
                    <li class="<?php	if(@$_GET['id']=="Manual-Report"){ echo'active';}		?>"  >
                        <a href="index.php?id=Manual-Report"><i class="glyphicon glyphicon-envelope"></i>
                         <span>Manual Report</span></a>
                    </li>     
                    <li class="<?php	if(@$_GET['id']=="Admin_FollowUp_Report"){ echo'active';}		?>"  >
                        <a href="index.php?id=Admin_FollowUp_Report"><i class="glyphicon glyphicon-envelope"></i>
                         <span>Admin Follow-Up Report</span></a>
                    </li> 
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>