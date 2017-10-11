<div class="wrapper">
    <div class="sidebar" id="navigation-example-2"><!--data-color="yellow" data-image="assets/img/logofinal1.png"--> 
        <div class="sidebar-wrapper"  style="background-color:seagreen; overflow:hidden;" >
            <div class="logo">
                
                <h3 class="simple-text">BTS&trade; - CTTMS</h3>
                <div class="row">
                    
                    <form method="post" style="margin-top:-10px;">
                        <div class="col-md-12">
                            <div class="input-group"><input type="text" class="form-control" placeholder="Airway Bill..." name="search">
                                <div class="input-group-btn livesearch">
                                    <button class="btn btn-default" type="submit">Go!</button>
                                </div>
                            </div>
                        </div>
                    </form>
                
                </div>
            </div>
                
            <ul class="nav" >
                
                <li class="tab aktib">
                    <a class=" w3-border-teal" href="#dashboard">
                        <i class="fa fa-dashboard"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
<!--

             
-->

                <li class="tab" id="onlinetab">
                    <a href="#notif">
                        <i class="fa fa-calendar-o"></i>
                        <p>Online Bookings</p>
                    </a>
                </li>
                <li class="tab not">    
                    <a data-toggle="collapse" data-target="#manageShipments" href="#" >
                        <i class="fa fa-truck"></i>
                        <p>Manage Shipments<span id="wew" style="margin-left: 10px;" class="fa fa-caret-left"></span></p>
                    </a>
                    <ul class="nav collapse" id="manageShipments">
                        <li class="not">
                            <a href="#addshipment"><p><i class="fa fa-plus-circle"></i>Add Shipment</p></a>
                        </li>
                        <li class="not">
                            <a href="#searchShipment"><p><i class="fa fa-edit"></i>Edit Shipment</p></a>
                        </li>
                    </ul>
                </li>
                   <li class="tab">
                    <a href="#dlReports">
                        <i class="fa fa-folder-open-o"></i>
                        <p>Download Reports</p>
                    </a>
                </li>
                <li class="tab">
                    <a href="#profileSet">
                        <i class="fa fa-wrench"></i>
                        <p>System Settings</p>
                    </a>
                </li>
                <li class="tab not">
                    <a data-toggle="collapse" data-target="#manageSettings" href="#">
                        <i class="fa fa-gears"></i>
                        <p>Manage Settings  <span style="margin-left: 17px;" class="fa fa-caret-left"></span></p>
                    </a>
                    <ul class="nav collapse" id="manageSettings">
                        <li class="not"><a href="#manageClients"><p><i class="fa fa-users"></i>Manage Clients</p></a></li>
                        <li class="not"><a href="#manageAdmins"><p><i class="fa fa-female fa-male"></i><i class=""></i>Manage Admins</p></a></li>
                        <li class="not"><a href="#driverProf"><p><i class="fa fa-truck"></i>Manage Drivers</p></a></li>
                    </ul>
                </li>
                <li class="tab">
                    <a href="">
                        <i class="fa fa-sign-out"></i>
                        <p>Logout</p>
                    </a>
                </li>
        
            </ul>
    	</div>
    </div>
       
       
 <div class="main-panel" >
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid" style=" background-color: darkslategray; border-bottom:1px solid darkseagreen; margin-bottom:-1px;">
                
                <div class="">
                        
                    <ul class="nav navbar-nav navbar-right">
                      
                            
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i> <img src="img/notif.png"></i>
             
										<b class="caret"></b>
									
                            </a>
                            <ul class="notif dropdown-menu w3-card-12">
                                <h4 class="w3-center">Online Bookings</h4>
                                <li class="divider"></li>
                                <li><a class="w3-center" href="#">Renan Nuevo - <mark>Approved</mark></a></li>
                                <li class="divider"></li>
                                <li><a href="#" class="w3-center">Nardinio Rodolfo - <mark>Approved</mark></a></li>
                                <li class="divider"></li>
                                <li><a href="#" class="w3-center">John Paul Baac - <mark>Pending</mark></a></li>
                                <li class="divider"></li>
                                <li><a href="#" class="w3-center">Bossing - <mark>Pending</mark></a></li>
                                
                                <li><a href="#notif" class="w3-center w3-teal">See All...</a></li>
                            </ul>
                        </li>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i > <img src="img/admin.png"></i>
                                    
										<b class="caret"></b>
									
                            </a>
                            <ul  class="profSetting dropdown-menu w3-card-12" style="min-width:350px;">
                                <h5 class="w3-center"><b>Overview</b></h5>
                                <li class="divider"></li>
                                
                                <li class="borderB"><a class="wew" href="#"><span class="w3-left "><i class="fa fa-bell-o"></i> Customers</span> <span class="badge w3-round w3-right w3-blue">11110</span></a></li>
                                   <li class="divider"></li> 
                                <li class="borderB"><a class="wew" href="#"><span class="w3-left "><i class="fa fa-users"></i> Users</span> <span class="badge w3-round w3-right w3-green">5</span></a></li>
                                    <li class="divider"></li>
                                <li class="borderB"><a class="wew"  href="#"><span class="w3-left "><i class="fa fa-calendar"></i> Bookings</span><span class="badge w3-right w3-round w3-brown ">141</span></a></li>
                        
                                <li class="divider"></li>
                                <h5 class="w3-center"><b>Settings</b></h5>
                                <li class="divider"></li>
                                
                                <li class="borderB " id="profileSettings"><a class="wew" href="#profileSet" ><span class="w3-left "><i class="fa fa-user"></i> Profile</span> </a></li>
                                   <li class="divider"></li> 
                                <li class="borderB"><a class="wew" href="#"><span class="w3-left "><i class="fa fa-wrench"></i> Settings</span></a></li>
                                    <li class="divider"></li>
                                <li class="borderB"><a class="wew"  href="#"><span class="w3-left "><i class="fa fa-location-arrow"></i> Real-Time Tracking</span></a></li>
                        
                                <li class="divider"></li>
                                 <h5 class="w3-center"><b>Account</b></h5>
                                <li class="divider"></li>
                                    
                                <li class="borderB"><a class="wew" href="#"><span class="w3-left "><i class="fa fa-sign-out"></i> Logout</span> </a></li>
                                <li><a href="#notif" class="w3-center w3-teal"></a></li>
                            </ul>
                        </li>
                        <!--<li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hi  dden-md">Search</p>
                            </a>
                        </li>-->
                    </ul>
<div class=" w3-left">
                    <button type="button" class="showNhide"><i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
<!--                     <a class="navbar-brand   w3-text-black w3-round" href="#">Admin Dashboard</a>-->
                </div>
            
                </div>
            </div>
                    
        </nav>
     
     <!-- Modal -->
 
    