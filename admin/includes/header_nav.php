<?php
require_once("../init.php");

if(!$session->is_signed_in()){	$call_data->redirect("../login.php");	}
?> 

 <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php?id=LMS-Dashboard">LMS Admin</a>
 </div>
  <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith </strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i>
                                         Dated Time</p>
                                        
                                        <p> Message</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> 
                    <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                      <a href="includes/SubmitTodayReport.php" target="_new">Today Report</a>      
                        </li>
                         <li>
                          &nbsp; 
                        </li>
                         <li>
                      <a href="includes/SubmitOverAllReport.php" target="_new">OverAll Report</a>      
                        </li>
                         <li>
                          &nbsp; 
                        </li>
                         
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 
					<?php print $session->get_session("uid");	?> 
                    <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>