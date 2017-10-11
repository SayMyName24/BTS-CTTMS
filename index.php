<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'db.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //kung lo-login

        require 'login.php';
        
    }elseif (isset($_POST['register'])) { //kung re-register    
        
        require 'register.php';
    }
    
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Welcome | BTS</title>
    
<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="css/w3.css">
<link href="css/bootstrap.css" rel="stylesheet" >
<link href="css/pe-icon-7-stroke.css" rel="stylesheet" >
<link href="css/ct-navbar.css" rel="stylesheet" >  
<link rel="icon" type="image/x-con" href="img/logofinal.png">

 </head>
    

<body style="background-color: white;">
    <?php include 'header.php'; ?>
    <div class="container w3-round" style="width:90%; margin-top:-10px; margin-bottom: 0px; heigth:50%;">
    

    <div class="row" id="small-dialog"  style="margin-top:125px; heigth:50%;" style="background-color:#e8e8e8;">
        <div class="col-md-12">
<!--
            
-->
        </div>
        <div class="col-md-12" > 
            <div class="form" style="background-color:white; box-shadow: 0px 0px 0px 0px rgba(1, 1, 1, 1.3);">
               
                   <div class="blurred-container"style="background-color:#404040;">
                   
                    <img src="img/data.jpg" height="100%" width="100%">             
                </div> 
                    <ul class="tab-group" >
                    <li class="tab active"><a href="#signup"><i class="pe-7s-note"></i> Booking Widget</a></li>
                    <li class="tab"><a href="#tracking"><i class="pe-7s-search "></i> Tracking Widget</a></li>
                    <li class="tab"><a href="#calculator"><i class="pe-7s-calculator"></i> Pricing Calculator</a></li>
                    <li class="tab login"><a href="#login"><i class="pe-7s-users"></i> Login Widget</a></li>
                    </ul>
                

                <div class="tab-content" style="padding:50px; width:90%; min-height:500px; background-color: #404040; margin-top:0; margin: auto; box-shadow: 0px 0px 10px 8px rgba(19, 35, 47, 0.3);">
                        <!-- START BOOKING -->
                    <div id="signup" style="margin-top:40px;">   
                        

                        <div class="row">
                            
                            
                            
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon alert-success"><i class="pe-7s-map-marker"></i> FROM: </span>
                                    <?php $result = $mysqli->query("SELECT * from destination_tbl order by cityName asc");
                                        $row_count = $result->num_rows;?>
                                    <select id="origin" form="form1" type="text" class="w3-grey w3-text-white form-control" name="origin" onload="autofocus">
                                        <option>Select City</option>
                                        
                                        <?php 
                                            if($row_count > 0){
                                                
                                                while($row = $result->fetch_assoc()){
                                                    echo '<option form="form1" name="originCity" id="originCity" value="'.$row['destinationID'].'">' .$row['cityName'].'</option>';
                                                }
                                            }else{
                                                echo '<option value="">City Not Available</option>';
                                            }
//                                            $_SESSION['originId'] = $row['destinationID'];
                                        ?>
                                        
                                    </select>
                                    
                                    <select id="subOrigin" type="text" form="form1" class=" form-control" name="subOrigin" >
                                       
                                       <option class="w3-round"></option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon alert-success"><i class="pe-7s-map-marker"></i> TO: </span>
                                    <?php $result = $mysqli->query("SELECT * from destination_tbl order by cityName asc");
                                        $row_count = $result->num_rows;
                                    ?>
                                    <select id="to" form="form1" type="text" class=" w3-grey w3-text-white form-control" name="to" autofocus>
                                        <option>Select City</option>
                                        <?php 
                                        
                                            if($row_count > 0){
                                                
                                                while($row = $result->fetch_assoc()){
                                                    echo '<option name="destiCity" id="destiCity" value="'.$row['destinationID'].'">' .$row['cityName'].'</option>';
                                                }
                                                    
                                            }else{
                                                echo '<option form="form1" value="">City Not Available</option>';
                                            }
                                        
//                                        $_SESSION['destiId'] = $row['destinationID'];

                                        ?>
                                        
                                    </select>
                                    
                                    <select id="toSubOrigin" type="text" form="form1" class="select form-control" name="toSubOrigin" >
                                       
                                        <option class="w3-round"></option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon alert-success" ><i class="pe-7s-config"></i> Weight </span>
                                        <input id="bigat" min="0" type="number" class=" w3-grey w3-text-white form-control" form="form1" name="bigat" placeholder="Enter weight in ton">
                                    
                                    
                                    
                                </div>
                            </div><div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon btn alert-success" ><i class="pe-7s-config"></i> Suggested Truck Type </span>
                                      
                                    
                                    
                                    <select id="truckType" type="text" class=" w3-grey w3-text-white form-control" name="truckType" form="form1">
                                        
                                    <?php $truck = GetAllTruck(); foreach ($truck as $trucks){ ?>
                                        
                        <option selected> 
                            <?=$trucks['truckType']?></option>        
                                  
                                    <?php } ?>  
                    
                                    </select>
                                </div>
                            </div>
                    
                        </div>
                        
                 

                        
-->
                    <form action="index.php" method="post" id="form1" autocomplete="off">
                 
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon alert-success">Client/Company Name</span>
                                        <input type="text"  required autocomplete="off" name='firstname' class="w3-grey w3-text-white form-control" placeholder="Your name here..." autofocus />
                                </div>
                            </div>
                    
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon alert-success">Client/Company Address</span>
                                        <input type="text" required autocomplete="off" name='address' id="adress" class="w3-grey w3-text-white form-control" placeholder="Your Address here..."/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon alert-success">Phone</span>
                                        <input type="text" required autocomplete="off" name="phone" id="phone" class="w3-grey w3-text-white form-control" placeholder="Your Cont. # here..."/>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon alert-success">Personal/Company E-mail</span>
                                        <input type="email" required autocomplete="off" name='email' class="w3-grey w3-text-white form-control" placeholder="Your e-mail add here..."/>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon alert-success">Password</span>
                                        <input type="password" required autocomplete="off" name="password" id="password" class="w3-grey w3-text-white form-control" placeholder="Enter Password here..."/>
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon alert-success">Confirm Password</span>
                                        <input type="password" required autocomplete="off" id="confirmpassword" name="confirmpassword" class="w3-grey w3-text-white form-control" placeholder="Confirm Passowrd here..." />
                                </div>
                            </div>
                            
                        </div>
            
                        <div class="row" style="margin-top:35px;" >
                            <div class="col-md-6">
                                <button form="form1" type="submit" class="btn btn-success" name="register" >Book Now <i class="pe-7s-paper-plane"></i></button>
                                <span class="tab w3-text-white w3-padding-12">Already have an account? <a href="#login" class="clickhere  w3-text-green">Click here</a></span>
                            
                            </div>
                        </div>
                    
              
                </form>
              
                 
           </div> 
                    <!--end BOOKING-->
                        
                        <!--Tracking-->
                <div id="tracking">   
                    
                    <form action="index.php" method="post" autocomplete="off">
                        <div class="form-group">
                            <div class="row" style="margin-bottom:20px;">
                                <div class="col-md-6 col-md-offset-3">
                                    <textarea class="form-control input-lg" autofocus style="padding-top: 50px; fontsize:50px; margin-bottom:20px;" placeholder="ENTER AWB or Tracking Number"></textarea>
                                        <button form="form1" type="submit" class="btn btn-success" name="track" >Track Shipment 
                                            <i class="pe-7s-search"></i>
                                        </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                        <!--end Tracking-->
      
        <!--    
                <div class="row">
                    <div class="col-md-4">
                            <div class="input-group">
                                
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span><input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                    
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                
                            </div>
                          
                    </div>
                    
                    <div class="col-md-4">
                            <div class="input-group">
                                
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span><input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                    
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                
                            </div>
                          
                    </div>
                    
                    <div class="col-md-4">
                            <div class="input-group">
                                
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span><input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                    
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                
                            </div>
                          
                    </div>
                          
                    
                </div>   
             </div>
        </div>
        <div id="signup">   
            
           
        
            <div class="row">
                <div class="col-md-3">
                    <div class="input-group">
                        
                    </div>
                </div>
            </div>
            
-->

<!--
          <form action="index.php" method="post" autocomplete="off">
          
         
           
                <div class="row">
                <div class="col-md-3">
                <div class="input-group">
                <span class="input-group-addon alert-success">Subject</span>
              <input type="text" required autocomplete="off" name='firstname' class="form-control" placeholder="Enter First Name"/>
              
                    </div>
                
                </div>
                    <div class="col-md-3">
                <div class="input-group">
                <span class="input-group-addon alert-success">Subject</span>
              <input type="text" required autocomplete="off" name='lastname' class="form-control" placeholder="Enter First Name"/>
              
                    </div>
                
                </div>
                <div class="col-md-3">
                <div class="input-group">
                <span class="input-group-addon alert-success">Subject</span>
              <input type="email" required autocomplete="off" name='email' class="form-control" placeholder="Enter First Name"/>
              
                    </div>
                    
                </div>
                

                
              
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
        

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email' />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password'/>
          </div>
          
                    </div>
-->    
                        <!--Calculator-->
        <div id="calculator">
            <form action="#" method="post" autocomplete="off" id="pcForm" style="margin-top:40px;">

                <div class="row">
                    
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon alert-success">Weight</span>
                            <input type="number" placeholder="in cm" class="form-control" id="pcWeight" name="pcWeight" autofocus> 
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon alert-success">Length</span>
                            <input type="number" placeholder="in cm(optional)" class="form-control" id="pcLength" name="pcLength"> 
                        </div>
                    </div>
                    
                    
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon alert-success">Width</span>
                            <input type="number" placeholder="in cm(optional)" class="form-control" id="pcWidth" name="pcWidth"> 
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon alert-success">Height</span>
                            <input type="number" placeholder="in cm(optional)" class="form-control" id="pcHeight" name="pcHeight"> 
                        </div>
                    </div>
                    
                </div>
                
                <div class="row">
                            
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon alert-success">Locations <i class="pe-7s-map-marker"></i></span>
                                    <select id="" form="pcForm" type="text" class="form-control" name="" autofocus>
                                        <option selected>Select Origin</option>
                                    </select>
                                    <select id="pcDesti" type="text" form="pcForm" class="form-control" name="pcDesti">
                                        <option selected>Select Destination</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon alert-success" >Service <i class="pe-7s-config"></i></span>
                                        <select id="pcType" type="text" class="form-control" form="pcForm" name="pcType">
                                        <option selected>Select Type</option>
                                    </select>
                                    <select id="pcTruckType" type="text" class="form-control" name="pcTruckType" form="pcForm">
                                        <option selected>Select Preferred Truck Type</option>
                                    </select>
                                </div>
                            </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-md-3">
                        <button id="pcCalculate" name="pcCalculate" class="btn btn-success">Calculate <i class="pe-7s-check"></i></button>
                    </div>
                </div>
            
            </form>          
         </div>
                <!--end ng calculator-->
                    
                    <!-- START NG LOGIN -->
         <div id="login" class="w3-card-6 w3-round w3-center w3-border-white w3-padding-24" style="max-width:490px; margin: 0 auto; background-color: seagreen;" >   
                        <h4 style="margin-bottom: 20px;" class="text-center w3-text-white"> User/Client/Admin Login</h4>
                
             <form action="index.php" method="post" autocomplete="off" class="" id="loginForm">
                <div class="row " style="margin-bottom:20px;">            
                    <div class="col-md-6 col-md-offset-3 field-wrap">
                        <label class="anim">Email Address<span class="req">*</span></label>
                            <input class="form-control" type="email" required autocomplete="off" name="email" autofocus/>
                    </div>

              <div class="col-md-6 col-md-offset-3 field-wrap">
                <label class="anim">
                  Password<span class="req">*</span>
                </label>
                <input class="form-control" type="password" required autocomplete="off" name="password"/>
                    </div>
              
                </div>


                 <div class="row">
                    <div class="col-md-3 col-md-offset-3">
                        <button id="login" name="login" class="btn btn-success">Login <i class="pe-7s-check"></i></button>
                    </div>
                    <div class="col-md-3">
              <p style="position:relative;" class="forgot"><a href="forgot.php">Forgot Password?</a></p>
                  
            
                    </div>
                </div>
                 
                          </form>
             <div class="row">
                 <form method="post" action="">
                    <div class="col-md-6 col-md-offset-3">
                        <a href="adminpanel.php" name="demologin" type="submit" class="form-control w3-teal btn btn-success"> Admin Demo Login <i class="fa fa-external-link"></i></a>
                    </div>
                    </form>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <h4><?php echo $_SESSION['message'];?></h4>
                    </div>
                </div>
                
                
                 
        </div>   
             <!-- END NG LOGIN -->
                    
      </div><!-- tab-content -->
  </div> <!-- /form -->
        </div>
           </div>
      
    </div>

         
    <!-- Script MO TO! -->
  <script src='js/jquery-3.2.1.min.js'></script>
  <script src='js/jquery-3.2.1.js'></script>
  <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
  <script src="js/bootstrap.js" type="text/javascript"></script>
  <script src="js/ct-navbar.js"></script>
  <script src="js/index.js"></script>
    <script type="text/javascript">
    
      
$(document).ready(function(){
        
//   $('#password').on('keydown',function(){
//    
//            if($(this).val()!= ""){
//       $('#confirmpassword').removeClass('hidden');
//       $('#confirmpassword').fadein(9000);
//   }
//    });
 
    $('span.tab a.clickhere').on('click', function (e) {
  
  e.preventDefault();
  
  $('li.tab > a[href="#login"]').parent().addClass('active');
  $('li.tab > a[href="#login"]').parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(9000);
  
});
    
    $('#origin').on('change', function(){
       var destinationID = $(this).val();
        if(destinationID){
            $.ajax({
                
                type: "POST",
                url:"ajax.php",
                data:{destination:destinationID},
                
                success:function(data){
                $('#subOrigin').html(data);
            }
        });
        }
        else{
            $('#subOrigin').html('<option>Select City First</option>');
        }
    }); 
    $('#to').on('change', function(){
       var toID = $(this).val();
        if(toID){
            $.ajax({
                
                type: "POST",
                url:"ajax.php",
                data:{to:toID},
                
                success:function(data){
                $('#toSubOrigin').html(data);
            }
        });
        }
        else{
            $('#toSubOrigin').html('<option>Select City First</option>');
        }
    });  

        $("#confirmpassword").on('blur',function () {
            var password = $("#password").val();
            var confirmPassword = $("#confirmpassword").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
     
            return true;
        });
    $('input.form-control, select.form-contorl').on('mouseover',function(){
       $(this).addClass('w3-white');
       $(this).addClass('w3-text-grey');
       $(this).removeClass('w3-grey');
//        alert('wew');
    });
    $('input.form-control').on('mouseleave',function(){
       $(this).removeClass('w3-white');
       $(this).addClass('w3-grey');
//        alert('wew');
    });
    
//    
   }); 
    
    </script>

</body>
</html>
