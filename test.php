    <html>
<head>
   <?php include 'Template/head.php'; ?>
    <style>
 
    </style>
    </head>
    
    <body>
   <div class="container">
    <div id="sidebar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Explore</a></li>
            <li><a href="#">Users</a></li>
                <li><a href="#">Sign Out</a></li>
        </ul>
    </div>
    
      <div class="main-panel" >
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid" style=" background-color: darkslategray; border-bottom:1px solid darkseagreen; margin-bottom:-1px;">
               
                <div class="navbar-header">
                   <div class="main-content">
        <div class="swipe-area"></div>
        <a href="#" data-toggle=".container" id="sidebar-toggle">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     <a class="navbar-brand   w3-text-black w3-round" href="#">Admin Dashboard</a>
                </div>
                    
                <div class="collapse navbar-collapse">
                        
                    <ul class="nav navbar-nav navbar-right">
                      
                            
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i> <img src="img/notif.png"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
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
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
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

                </div>
            </div>
            
        </nav>
         </div>
       

       
        <script type="text/javascript">
               $(document).ready(function() {
  $("[data-toggle]").click(function() {
    var toggle_el = $(this).data("toggle");
    $(toggle_el).toggleClass("open-sidebar");
  });
     
});
 
$(".swipe-area").swipe({
    swipeStatus:function(event, phase, direction, distance, duration, fingers)
        {
            if (phase=="move" && direction =="right") {
                 $(".container").addClass("open-sidebar");
                 return false;
            }
            if (phase=="move" && direction =="left") {
                 $(".container").removeClass("open-sidebar");
                 return false;
            }
        }
});
        </script>
    </body>
</html>