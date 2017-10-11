<html>
    <title>Admin Dashboard</title>
    
<body>
   
<div class="panel"><!-------------------------------START OF MAIN DIV---------------------------------->
    
    <div id="dashboard"><!---------------------START OF DASHBOARD CONTENTS----------------------------->
    <div class="panel-heading w3-margin">
        <h3 class="panel-title"><span class="fa fa-bar-chart"></span> Overview</h3>
        <div class="row">
            
                <div class="col-md-4">
                    <button type="button" class="form-control updateBtn"> <i class="fa fa-check"></i> Real-Time Tracking</button>
                </div>
                
            </div>
    </div>
    
    <div class="panel-body w3-paddin-12" style="margin-bottom:20px;" >
          
        <div class="content" >
            <div class="container-fluid">
                <div class="row w3-margin-bottom w3-padding-12">

                    <div class="col-md-3">
                        <div class="w3-container w3-brown w3-margin  w3-border-brown w3-card-4 w3-border  w3-hover-grey w3-hover-text-brown w3-padding-12 w3-round">
                            <div class="w3-left">
                                <span class="fa-stack fa-3x w3-text-white">
                                    <i class="fa fa-circle fa-stack-2x "></i>
                                    <i class="w3-text-grey fa fa-truck w3-xxlarge fa-spin fa-stack-1x" ></i>
                                </span>
                            </div>
                            <div class="w3-right">
                                <span class=" w3-right badge">101</span>
                                 
                            </div>
                             <h5 class="w3-right w3-text-white"> Bookings</h5>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="w3-container w3-teal  w3-margin   w3-card-4 w3-border  w3-border-teal w3-hover-grey w3-hover-text-teal w3-padding-12 w3-round">
                            <div class="w3-left">
                                <span class="fa-stack fa-3x  w3-text-white">
                                    <i class="fa fa-circle  fa-stack-2x"></i>
                                    <i class="w3-text-grey fa fa-exchange w3-xxlarge fa-spin fa-stack-1x" ></i>
                                </span>
                            </div>
                            <div class="w3-right">
                                <span class=" w3-right badge">101</span>
                                  
                            </div>
                            <h5 class="w3-right w3-text-white">Shipped</h5>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="w3-container w3-green  w3-margin    w3-card-4 w3-border w3-border-green w3-hover-grey w3-hover-text-white w3-padding-12 w3-round">
                            <div class="w3-left">
                                <span class="fa-stack fa-3x w3-text-white">
                                    <i class="fa fa-circle  fa-stack-2x"></i>
                                    <i class="w3-text-grey fa fa-check-circle-o fa-spin w3-xxxlarge fa-stack-1x" ></i>
                                </span>
                            </div>
                            <div class="w3-right">
                                <span class=" w3-center badge">101</span>
                                  
                            </div>
                            <h5 class="w3-right">Delivered</h5>
                        </div>
                    </div>
            
                    <div class="col-md-3">
                        <div class="w3-container w3-red  w3-margin    w3-card-4 w3-border w3-border-red w3-hover-grey w3-hover-text-white w3-padding-12 w3-round">
                            <div class="w3-left">
                                <span class="fa-stack fa-3x w3-text-white">
                                    <i class="fa fa-circle fa-stack-2x "></i>
                                    <i class="w3-text-grey fa fa-spinner  fa-stack-1x w3-xxlarge fa-spin" ></i>
                                </span>
                            </div>
                            <div class="w3-right">
                                <span class=" w3-right badge">101</span>
                          
                            </div>
                                    <h5 class="w3-right">In Progress</h5>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        
                  
        <div class="row">
                   
            <div class="col-md-8">
                <div class="w3-container w3-white w3-card-12 w3-border w3-border-white table-responsive w3-padding w3-round">
                    <table class="table" >
                        <thead><h3 w3-text-black>Active Users</h3></thead>
                            
                                    
                                <tr class="w3-text-grey">
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Surname</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                </tr>
                                 
                                <tr class="w3-text-grey">
                                    <td>Jhon Renan</td>
                                    <td>Cabug</td>
                                    <td>Nuevo</td>
                                    <td>renan.nuevo@gmail.com</td>
                                    <td>09369680108</td>
                                </tr>
                                <tr class="w3-text-grey">
                                    <td>Nardinio</td>
                                    <td>s_____</td>
                                    <td>Rodolfo</td>
                                    <td><renan class="n"></renan>uevo@gmail.com</td>
                                    <td>09369680108</td>
                                </tr><tr class="w3-text-grey">
                                    <td>Jampol</td>
                                    <td>s_____</td>
                                    <td>Rodolfo</td>
                                    <td><renan class="n"></renan>uevo@gmail.com</td>
                                    <td>09369680108</td>
                                </tr>
                    </table>
                </div>
            </div>
                    
            <div class="col-md-4">
                <div class="w3-container w3-white w3-card-4 w3-border w3-border-white w3-round w3-padding">
                    <table class="table">
                        
                       <thead><h3 w3-text-black>Business Stats</h3></thead>
                                <tr type="button" class="w3-text-grey">
                                    <th scope="row">Total Customers</th>
                                        <td>3</td>
                                </tr>
                                <tr class="w3-text-grey">
                                    <th scope="row">Active Users</th>
                                        <td><?php echo '1'; ?></td>
                                </tr>
                                <tr class="w3-text-grey">
                                    <th scope="row">Total Bookings</th>
                                        <td>100</td>
                                </tr>
                                <tr class="w3-text-grey">
                                    <th scope="row">Visited</th>
                                        <td>2</td>
                                </tr>
                               

                    </table>
                </div>
            </div>
          
        </div>
    </div></div>
    
    <div id="dlReports"><!---------------------START OF DASHBOARD CONTENTS----------------------------->
    <div class="panel-heading w3-margin">
       <div class="row">
           
            <div class="col-md-4 ">
                <ul class="breadcrumb w3-padding w3-white" style="min-width:450px;">
                    <li><a class="w3-text-black">Admin Panel</a></li>
                    <li><a class="w3-text-black">Reports/Database</a></li>
                    <li><a class="w3-text-grey">Download</a></li>
                </ul>
            </div>
            
       </div>
    </div>
    
    <div class="panel-body" >
        
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h4 class="w3-border-grey w3-center white" style="padding:10px; border:1px solid grey;"><i class="fa fa-folder"></i> Download Reports</h4>
                
                <div class="form-group">
                    <form method="post">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">Client Name</label>
                            <input  class="input form-control" name="clientName" id="clientName" type="text" placeholder="Name here...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">Added By</label>
                            <select class=" input form-control" name="clientPhone" id="clientPhone" type="tel">
                                <option selected>--Admin/User ID--</option>
                                <option>Admin</option>
                                <option>User1</option>
                                <option>User2</option>
                            </select>
                        </div>                   
                    </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">Start Date</label>
                            <input  class="input form-control" name="clientName" id="clientName" type="date">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">End Date</label>
                            <input class=" input form-control" name="clientPhone" id="clientPhone" size="11" type="date">
                        </div>                   
                    </div>
                        <button class="form-control updateBtn" type="submit"><i class="fa fa-download"></i> Download</button>
                    </form>
                </div>
            </div>
        </div>
            
    </div>
        
                  
        
    </div>
    <div id="profileSet"><!---------------------START OF DASHBOARD CONTENTS----------------------------->
    <div class="panel-heading w3-margin">
       <div class="row">
           
            <div class="col-md-4 ">
                <ul class="breadcrumb w3-padding w3-white" style="min-width:450px;">
                    <li><a class="w3-text-black">Admin Panel</a></li>
                    <li><a class="w3-text-black">Account Settings</a></li>
                    <li><a class="w3-text-grey">Update</a></li>
                </ul>
            </div>
            
       </div>
    </div>
    
    <div class="panel-body" >
        
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h4 class="w3-border-grey w3-center slate" style="padding:10px; border:1px solid grey;"><i class="fa fa-pencil"></i> Update Account</h4>
                    
                <div class="form-group">
                    <form method="post">
                        <div class="col-md-12">
                           <div class="form-group">
                            <label for="awb">User Name</label>
                            <input  class="input form-control" name="clientName" value="SuderDuperAdmin" id="clientName" type="text" placeholder="Name here...">
                    </div>
                         
                    </div>
                        <div class="col-md-12">
                           <div class="form-group">
                            <label for="awb">Password</label>
                            <input  class="input form-control" name="clientName" value="123heheheh" id="clientName" type="text" placeholder="Name here...">
                        </div></div>
                   
                       
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="awb">Email Address Date</label>
                            <input class=" input form-control" name="clientPhone" value="renan.nuevo@gmail.com" id="clientPhone" type="email">
                        </div>                   
                    </div>
                       <div class="col-md-6"><button class="form-control w3-green" type="file"><i class=""></i> Change Avatar</button></div>
                        <div class="col-md-6 w3-margin-bottom"><button class="form-control w3-red" type="reset"><i class="fa fa-refresh"></i> Reset</button></div> 
                        
                        <div class="col-md-12"><button class="form-control updateBtn" type="submit"><i class="fa fa-check-square-o"></i> Update</button></div>
                    </form>
                </div>
            </div>
        </div>
            
    </div>
        
                  
        
    </div>
    <div id="driverProf"><!---------------------START OF DASHBOARD CONTENTS----------------------------->
    <div class="panel-heading w3-margin">
       <div class="row">
           
            <div class="col-md-4 ">
                <ul class="breadcrumb w3-padding w3-white" style="min-width:450px;">
                    <li><a class="w3-text-black">Admin Panel</a></li>
                    <li><a class="w3-text-black">Account Settings</a></li>
                    <li><a class="w3-text-grey">Driver</a></li>
                </ul>
            </div>
            
       </div>
    </div>
    
    <div class="panel-body" >
        
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h4 class="w3-border-grey w3-center slate" style="padding:10px; border:1px solid grey;"><i class="fa fa-pencil"></i> Update Account</h4>
                    
                <div class="form-group">
                    <form method="post">
                        <div class="col-md-12">
                           <div class="form-group">
                            <label for="awb">User Name</label>
                            <input  class="input form-control" name="clientName" value="SuderDuperAdmin" id="clientName" type="text" placeholder="Name here...">
                    </div>
                         
                    </div>
                        <div class="col-md-12">
                           <div class="form-group">
                            <label for="awb">Password</label>
                            <input  class="input form-control" name="clientName" value="123heheheh" id="clientName" type="text" placeholder="Name here...">
                        </div></div>
                   
                       
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="awb">Email Address Date</label>
                            <input class=" input form-control" name="clientPhone" value="renan.nuevo@gmail.com" id="clientPhone" type="email">
                        </div>                   
                    </div>
                       <div class="col-md-6"><button class="form-control w3-green" type="file"><i class=""></i> Change Avatar</button></div>
                        <div class="col-md-6 w3-margin-bottom"><button class="form-control w3-red" type="reset"><i class="fa fa-refresh"></i> Reset</button></div> 
                        
                        <div class="col-md-12"><button class="form-control updateBtn" type="submit"><i class="fa fa-check-square-o"></i> Update</button></div>
                    </form>
                </div>
            </div>
        </div>
            
    </div>
        
                  
        
    </div>
    
    <div id="manageClients"><!---------------------START OF DASHBOARD CONTENTS----------------------------->
    <div class="panel-heading w3-margin">
       <div class="row">
           
            <div class="col-md-4 ">
                <ul class="breadcrumb w3-padding w3-white" style="min-width:450px;">
                    <li><a class="w3-text-teal">Admin Panel</a></li>
                    <li><a class="w3-text-teal">Manage Clients</a></li>
                    <li><a class="w3-text-grey">List</a></li>
                </ul>
            </div>
            
       </div>
       <div class="row" style=" padding: 25px; background-color:#e6e6e6">
           <div class="form-group " style="width:100%;">
            <form method="post" >
              
                            
                            <div class="col-md-2 border">
                                    <input class="w3-text-white input form-control" name="awb" id="awb" type="text" placeholder="Name">
                            </div>
                            <div class="col-md-2 border">
                                    <input class="w3-text-white input form-control" name="awb" id="awb" type="text" placeholder="Phone Number">
                            </div>
                            <div class="col-md-2 border">
                                    <input class=" input form-control" name="origin" id="origin" type="text" placeholder="Email Address ">
                                
                                </div> <div class="col-md-2  border">
                                    <input class=" input form-control" name="desti" id="desti" type="text" placeholder="Address ">
                                </div>
                                  <div class="col-md-2  border">
                                    <input class=" input w3-text-white form-control" name="origin" id="origin" type="password" placeholder="Password">
                                </div>    <div class="col-md-2 ">
      
<!--                                    <label for="filterbtn">Apply Filters</label><br>-->
                                    <button class="form-control updateBtn" name="filterbtn" id="filterbtn">
                                    <i class="w3-text-white fa fa-plus" ></i>Add Client</button>
                        </div>
            </form>
               
       

       </div>
            
            </div>
    </div>
    
    <div class="panel-body" >
        
        
            
    </div>
        <div class="col-md-12">
                <div class="w3-container w3-round w3-white w3-card-4 w3-border w3-padding w3-border-white table-responsive">
                    <table class="table table-bordered searchResult">
                                <tr class="w3-text-grey">
                                    <th>Client Name</th>
                                    <th>Phone</th>
                                    <th>Email Address</th>
                                    <th>Address</th>
                                    <th>Password</th>
                                    <th colspan="2" class="w3-center">Action</th>
                           
                                </tr>
                                 <tr class="w3-text-grey">
                                    <td>AWB123</td>
                                    <td>Renan Nuevo</td>
                                    <td>Saudi</td>
                                    <td>With Love</td>
                                    <td>1/1/2017</td>
                                    <td><a href="#manageClient" class="w3-center form-control w3-blue w3-text-white" data-dismiss="modal" id="approveBtn" ><i class="fa fa-pencil"></i> 
                                    Manage</a></td>
                                    <td><button type="button" data-toggle="modal" data-target="#delete" class="btn btn-danger w3-red"><i class="fa fa-trash w3-xlarge"></i></button></td>
                                     
                                </tr>
                                <tr class="w3-text-grey">
                                    <td>AWB123</td>
                                    <td>Renan Nuevo</td>
                                    <td>Saudi</td>
                                    <td>With Love</td>
                                    <td>1/1/2017</td>
                                    <td><a href="#manageClient" class="form-control w3-center w3-blue w3-text-white" data-dismiss="modal" id="approveBtn" ><i class="fa fa-pencil"></i> 
                                    Manage</a></td>
                                    <td><button type="button" data-toggle="modal" data-target="#delete" class="btn btn-danger w3-red"><i class="fa fa-trash w3-xlarge"></i></button></td>
                                     
                                </tr>
                                <tr class="w3-text-grey">
                                    <td>AWB123</td>
                                    <td>Renan Nuevo</td>
                                    <td>Saudi</td>
                                    <td>With Love</td>
                                    <td>1/1/2017</td>
                                    <td><a href="#manageClient" class="form-control w3-center w3-blue w3-text-white" data-dismiss="modal" id="approveBtn" ><i class="fa fa-pencil"></i> 
                                    Manage</a></td>
                                    <td><button type="button" data-toggle="modal" data-target="#delete" class="btn btn-danger w3-red"><i class="fa fa-trash w3-xlarge"></i></button></td>
                                     
                                </tr>
                                <tr class="w3-text-grey">
                                    <td>AWB123</td>
                                    <td>Renan Nuevo</td>
                                    <td>Saudi</td>
                                    <td>With Love</td>
                                    <td>1/1/2017</td>
                                    <td><a href="#manageClient" class="form-control w3-blue w3-center w3-text-white" data-dismiss="modal" id="approveBtn" ><i class="fa fa-pencil"></i> 
                                    Manage</a></td>
                                    <td><button type="button" data-toggle="modal" data-target="#delete" class="btn btn-danger w3-red"><i class="fa fa-trash w3-xlarge"></i></button></td>
                                    
                                </tr>
                    </table>
                </div>
            </div>
                  
        
    </div>
    <div id="manageClient"><!---------------------START OF DASHBOARD CONTENTS----------------------------->
    <div class="panel-heading w3-margin">
       <div class="row">
           
            <div class="col-md-4 ">
                <ul class="breadcrumb w3-padding w3-white" style="min-width:450px;">
                    <li><a class="w3-text-teal">Admin Panel</a></li>
                    <li><a class="w3-text-teal">Manage Client</a></li>
                    <li><a class="w3-text-grey">Renan</a></li>
                </ul>
            </div>
            
       </div>
    </div>
    
    <div class="panel-body" >
        <div class="row" style=" padding: 25px; background-color:#e6e6e6">
           <div class="form-group " style="width:100%;">
            <form method="post" >
              
                            
                            <div class="col-md-3 ">
                                    <input class="w3-text-white input form-control" name="awb" id="awb" type="text" placeholder="Name">
                            </div>
                            <div class="col-md-2 ">
                                    <input class="w3-text-white input form-control" name="awb" id="awb" type="text" placeholder="Phone Number">
                            </div>
                            <div class="col-md-2 ">
                                    <input class=" input form-control" name="origin" id="origin" type="text" placeholder="Email Address ">
                                
                                </div> <div class="col-md-3">
                                    <input class=" input form-control" name="desti" id="desti" type="text" placeholder="Address ">
                                </div>
                                  <div class="col-md-2 ">
                                    <input class=" input w3-text-white form-control" name="origin" id="origin" type="text" placeholder="Password">
                                </div>  
      
<!--                                    <label for="filterbtn">Apply Filters</label><br>-->
                                
            </form>
               
       

       </div>
            
            </div>
            
        <div class="row w3-padding-12 w3-margin">
                                    
                                    <div class="col-md-2">
                                        <button class="form-control updateBtn" name="filterbtn" id="filterbtn">
                                    <i class="w3-text-white fa fa-check" ></i>Update</button> 
                                    
                                    </div>
                                    <div class="col-md-2">
                                        <button class="form-control w3-red" name="filterbtn" id="filterbtn">
                                    <i class="w3-text-white fa fa-trash" ></i>Remove</button>
                                    </div>
                                </div>
        
            
    </div>
        <div class="col-md-12">
            <h4 class="w3-border-grey slate" style="padding:10px; border:1px solid grey;"><i class="fa fa-history"></i> Recent Bookings <small>Here goes client bookings and status </small></h4>
                <div class="w3-container w3-round w3-white w3-card-4 w3-border w3-padding w3-border-white table-responsive">
                    <table class="table table-collapse searchResult">
                                <tr class="w3-text-grey">
                                    <th>Date of Booking</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Client Info.</th>
                                    <th>Status</th>
                                    
                           
                                </tr>
                                 <tr class="w3-text-grey">
                                    <td>1/1/2017</td>
                                    <td>Here</td>
                                    <td>There</td>
                                    <td>Renan Nuevo, renan.nuevo@gmail.com, 09369680108</td>
                                    
                                    <td><a href="#manageShipment" class="w3-center form-control w3-brown w3-text-white" data-dismiss="modal" id="approveBtn">
                                    Pending</a></td>
                                     
                                </tr>
                                
                    </table>
                </div>
            </div>
            <div class="col-md-12">
            <h4 class="w3-border-grey slate" style="padding:10px; border:1px solid grey;"><i class="fa fa-thumbs-up"></i> Approve Shipments <small>Here goes client shipment list and status </small></h4>
                <div class="w3-container w3-round w3-white w3-card-4 w3-border w3-padding w3-border-white table-responsive">
                    <table class="table table-collapse searchResult">
                                <tr class="w3-text-grey">
                                    <th>Airwaybill</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Booking Date</th>
                                    <th>Delivery Date</th>
                                    <th>Status</th>
                                    
                           
                                </tr>
                                 <tr class="w3-text-grey">
                                    <td>1/1/2017</td>
                                    <td>Here</td>
                                    <td>There</td>
                                    <td>Renan Nuevo, renan.nuevo@gmail.com, 09369680108</td>
                                    <td>Renan Nuevo, renan.nuevo@gmail.com, 09369680108</td>
                                    
                                    <td><a href="#manageShipment" class="w3-center form-control w3-brown w3-text-white" data-dismiss="modal" id="approveBtn">
                                    Approved</a></td>
                                     
                                </tr>
                                
                    </table>
                </div>
            </div>
                  
        
    </div>
    
    
    
    
    
    
    <div id="approveShipment">
        <div class="row w3-margin-top ">
           
            <div class="col-md-4 ">
                <ul class="breadcrumb w3-padding w3-white" style="min-width:350px;">
                    <li><a class="w3-text-black">Admin Panel</a></li>
                    <li><a class="w3-text-black">Manage Bookings</a></li>
                    <li><a class="w3-text-grey">Approve</a></li>
                </ul>
            </div>
            
       </div>
        
    </div>
        <div id="searchShipment" class="container-fluid" >
         <div class="row w3-margin-top ">
            
             
    <div class="col-md-4 ">
<ul class="breadcrumb w3-padding w3-white" style="min-width:350px;">
    <li><a class="w3-text-black">Admin Panel</a></li>
    <li><a class="w3-text-black">Update Shipment</a></li>
    <li><a class="w3-text-grey">Filter</a></li>
  </ul>
            </div>
                
           </div>
         <h4> Filter Shipment By:</h4>
        <div class="row" style=" padding: 12px; background-color:#e6e6e6">
           <div class="form-group " style="width:100%;">
            <form method="post" >
              
                            
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="awb">Tracking ID</label>
                                    <input class="w3-text-white input form-control" name="awb" id="awb" type="text" placeholder="Airwaybill No.">
                                </div>
                            </div>             <div class="col-md-2 ">
      
                                    <div class="form-group">
                                    <label for="awb">Client Name</label>
                                        <select class="w3-text-white form-control" style="background-color: #404040;" name="client" id="client" type="text" placeholder="Airwaybill No.">
                                            <option>Renan Nuevo</option>
                                            <option>Nardinio Rodolfo</option>
                                            <option>John Paul Baac</option>
                                        </select>
                                </div>
                        </div>            <div class="col-md-2 ">
                <div class="form-group">
                                    <label for="origin">City(FROM):</label>
                                    <input class=" input form-control" name="origin" id="origin" type="text" placeholder="Enter City ">
                                </div>
                                </div> <div class="col-md-2 ">
                <div class="form-group">
                                    <label for="origin">By City(TO):</label>
                                    <input class=" input form-control" name="desti" id="desti" type="text" placeholder="Enter City ">
                                </div>
                                </div>
                                  <div class="col-md-2 ">
                <div class="form-group">
                                    <label for="origin">Date Booked:</label>
                                    <input class=" input w3-text-white form-control" name="origin" id="origin" type="date" placeholder="mm/dd/yyyy">
                                </div>
                                </div>    <div class="col-md-2 ">
      
                                <div class="input-group">
                                     <div class="form-group">
                                    <label for="filterbtn">Apply Filters</label><br>
                                    <button class="form-control updateBtn" name="filterbtn" id="filterbtn"><i class="fa fa-search"></i> Search</button>
                                </div>
                                </div>
                        </div>
            </form>
       

       </div>
            </div>
    <div class="panel-body" >
     
         <div class="content" >
            <div class="container-fluid">
                <div class="row w3-margin-bottom">

                   
                </div>
            </div>
        </div>
        
                  
        <div class="row">
                   
            <div class="col-md-12">
                <div class="w3-container w3-round w3-white w3-card-4 w3-border w3-padding w3-border-white table-responsive">
                    <table class="table table-condensed searchResult">
                                <tr class="w3-text-grey">
                                    <th>Airwaybill No.</th>
                                    <th>Client</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Booked On</th>
                                    <th colspan="2" class="w3-center">Action</th>
                                    <th><input type="checkbox"></th>
                                </tr>
                                 <tr class="w3-text-grey">
                                    <td>AWB123</td>
                                    <td>Renan Nuevo</td>
                                    <td>Saudi</td>
                                    <td>With Love</td>
                                    <td>1/1/2017</td>
                                    <td><a href="#manageShipment" class="form-control w3-blue w3-text-white" data-dismiss="modal" id="approveBtn" ><i class="fa fa-edit"></i> 
                                    Edit</a></td>
                                    <td><button type="button" data-toggle="modal" data-target="#delete" class="btn btn-danger w3-red"><i class="fa fa-trash w3-xlarge"></i></button></td>
                                     <td> <input type="checkbox" value=""></td>
                                </tr>
                                <tr class="w3-text-grey">
                                    <td>AWB123</td>
                                    <td>Renan Nuevo</td>
                                    <td>Saudi</td>
                                    <td>With Love</td>
                                    <td>1/1/2017</td>
                                    <td><a href="#manageShipment" class="form-control w3-blue w3-text-white" data-dismiss="modal" id="approveBtn" ><i class="fa fa-edit"></i> 
                                    Edit</a></td>
                                    <td><button type="button" data-toggle="modal" data-target="#delete" class="btn btn-danger w3-red"><i class="fa fa-trash w3-xlarge"></i></button></td>
                                     <td> <input type="checkbox" value=""></td>
                                </tr>
                                <tr class="w3-text-grey">
                                    <td>AWB123</td>
                                    <td>Renan Nuevo</td>
                                    <td>Saudi</td>
                                    <td>With Love</td>
                                    <td>1/1/2017</td>
                                    <td><a href="#manageShipment" class="form-control w3-blue w3-text-white approveBtn" data-dismiss="modal"  ><i class="fa fa-edit"></i> 
                                        Edit</a></td>
                                    <td><button type="button" data-toggle="modal" data-target="#delete" class="btn btn-danger w3-red"><i class="fa fa-trash w3-xlarge"></i></button></td>
                                     <td> <input type="checkbox" value=""></td>
                                </tr>
                                <tr class="w3-text-grey">
                                    <td>AWB123</td>
                                    <td>Renan Nuevo</td>
                                    <td>Saudi</td>
                                    <td>With Love</td>
                                    <td>1/1/2017</td>
                                    <td><a href="#manageShipment" class="form-control w3-blue w3-text-white approveBtn" data-dismiss="modal"  ><i class="fa fa-edit"></i> 
                                    Edit</a></td>
                                    <td><button type="button" data-toggle="modal" data-target="#delete" class="btn btn-danger w3-red"><i class="fa fa-trash w3-xlarge"></i></button></td>
                                     <td> <input type="checkbox" value=""></td>
                                </tr>
                    </table>
                </div>
            </div>
                    
                        
        </div>
        
    </div>
            <div class="">
        <div class="row">
            <h4 class="w3-center">Update Status for Selected Record</h4>
            <div class="col-md-12">
                <div class="w3-round row" style="padding:12px; background-color:#e6e6e6">
           <div class="form-group " style="width:100%;">
            <form method="post" >
              
                            
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="awb">Current City</label>
                                    <input class=" input form-control" name="awb" id="awb" type="text" placeholder="Airwaybill No.">
                                </div>
                            </div>             <div class="col-md-2 ">
      
                                    <div class="form-group">
                                    <label for="curStatus">Current Status</label>
                                        <select class="input form-control" name="curStatus" id="client" type="text" placeholder="Status">
                                            <option selected>Status</option>
                                            <option>paalis</option>
                                            <option>nakaalis</option>
                                            <option>OK!</option>
                                        </select>
                                </div>
                        </div>            <div class="col-md-4">
                <div class="form-group">
                                    <label for="origin">Custom Status</label>
                                    <input class=" input form-control" name="origin" id="origin" type="text" placeholder="Enter City ">
                                </div>
                                </div> <div class="col-md-2 ">
                <div class="form-group">
                                    <label for="origin">Apply Selected</label>
                    <button type="button" class="updateBtn form-control" name="desti" id="desti"><i class="fa fa-rocket"></i >Go!</button>
                                </div>
                                </div>
                                   <div class="col-md-2 ">
      
                                <div class="input-group">
                                     <div class="form-group">
                                    <label for="filterbtn">Delete Selected</label><br>
                                    <button class="form-control updateBtn" type="button" name="filterbtn" id="filterbtn"><i class="fa fa-times"></i> Delete</button>
                                </div>
                                </div>
                        </div>
            </form>
       

       </div>
            </div>
            </div></div>
            </div>
    </div>
        
    <div id="manageAdmins" class="container-fluid" >
         <div class="row w3-margin-top ">
            
             
    <div class="col-md-4 ">
<ul class="breadcrumb w3-padding w3-white" style="min-width:350px;">
    <li><a class="w3-text-black">Admin Panel</a></li>
    <li><a class="w3-text-black">Manage Admins</a></li>
    <li><a class="w3-text-grey">Table</a></li>
  </ul>
            </div>
                
           </div>
         <h4>Company Staffs</h4>
        
    <div class="panel-body" >
     
         <div class="content" >
            <div class="container-fluid">
                <div class="row w3-margin-bottom">

                   
                </div>
            </div>
        </div>
        
                  
        <div class="row">
                   
            <div class="col-md-12">
                <div class="w3-container w3-round w3-white w3-card-4 w3-border w3-padding w3-border-white table-responsive">
                    <table class="table table-condensed searchResult">
                                <tr class="w3-text-grey">
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Contact #</th>
                                    <th>Email</th>
                                    <th colspan="2" class="w3-center">Action</th>
                                    <th>Status</th>
                                </tr>
                                 <tr class="w3-text-grey">
                                    <td>AWB123</td>
                                    <td>Renan Nuevo</td>
                                    <td>Saudi</td>
                                    <td>1/1/2017</td>
                                    <td><a href="#" class="form-control w3-center w3-blue w3-text-white" data-dismiss="modal" id="approveBtn" ><i class="fa fa-edit"></i> 
                                    Edit</a></td>
                                    <td><button type="button" data-toggle="modal" data-target="#delete" class="btn btn-danger w3-red"><i class="fa fa-trash w3-xlarge"></i></button></td>
                                    <td> <span class="w3-green w3-center form-control">Active</span></td>
                                </tr>
                                <tr class="w3-text-grey">
                                    <td>AWB123</td>
                                    <td>Renan Nuevo</td>
                                    <td>Saudi</td>
                                    <td>With Love</td>
                                    <td><a href="#" class="form-control w3-center w3-blue w3-text-white" data-dismiss="modal" id="approveBtn" ><i class="fa fa-edit"></i> 
                                    Edit</a></td>
                                    <td><button type="button" data-toggle="modal" data-target="#delete" class="btn btn-danger w3-red"><i class="fa fa-trash w3-xlarge"></i></button></td>
                                    <td> <span class="w3-green w3-center form-control">Active</span></td>
                                </tr>
                                <tr class="w3-text-grey">
                                    <td>AWB123</td>
                                    <td>Renan Nuevo</td>
                                    <td>Saudi</td>
                                    <td>1/1/2017</td>
                                    <td><a href="#" class="form-control w3-center w3-blue w3-text-white approveBtn" data-dismiss="modal"  ><i class="fa fa-edit"></i> 
                                        Edit</a></td>
                                    <td><button type="button" data-toggle="modal" data-target="#delete" class="btn btn-danger w3-red"><i class="fa fa-trash w3-xlarge"></i></button></td>
                                    <td> <span class="w3-green w3-center form-control">Active</span></td>
                                </tr>
                                <tr class="w3-text-grey">
                                    <td>Renan Nuevo</td>
                                    <td>Saudi</td>
                                    <td>With Love</td>
                                    <td>1/1/2017</td>
                                    <td><a href="#" class="form-control w3-center w3-blue w3-text-white approveBtn" data-dismiss="modal"  ><i class="fa fa-edit"></i> 
                                    Edit</a></td>
                                    <td><button type="button" data-toggle="modal" data-target="#delete" class="btn btn-danger w3-red"><i class="fa fa-trash w3-xlarge"></i></button></td>
                                     <td> <span class="w3-green w3-center form-control">Active</span></td>
                                </tr>
                    </table>
                </div>
            </div>
                    
                        
        </div>
        
    </div>
            <div class="">
        <div class="row">
            <h4 class="w3-center">Update Selected Record</h4>
            <div class="col-md-12">
                <div class="w3-round row" style="padding:12px; background-color:#e6e6e6">
           <div class="form-group " style="width:100%;">
            <form method="post" >
              
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="awb">Name</label>
                                    <input class=" input form-control" name="awb" id="awb" type="text" placeholder="Name Here...">
                                </div>
                            </div>             <div class="col-md-4 ">
      
                                    <div class="form-group">
                                    <label for="curStatus">Password</label>
                                    <input class=" input form-control" name="awb" id="awb" type="text" placeholder="Password Here...">
                                </div>
                        </div>            <div class="col-md-4">
                <div class="form-group">
                                    <label for="origin">Phone Number</label>
                                    <input class=" input form-control" name="origin" id="origin" type="text" placeholder="Phone # Here... ">
                                </div>
                                </div>  <div class="col-md-4">
                                <div class="form-group">
                                    <label for="awb">Email</label>
                                    <input class=" input form-control" name="awb" id="awb" type="text" placeholder="Name Here...">
                                </div>
                            </div>             <div class="col-md-4 ">
      
                                    <div class="form-group">
                                    <label for="curStatus">Location</label>
                                    <input class=" input form-control" name="awb" id="awb" type="text" placeholder="Password Here...">
                                </div>
                        </div>            <div class="col-md-4">
                <div class="form-group">
                                    <label for="origin">Since</label>
                                    <input class=" input form-control" name="origin" id="origin" type="text" placeholder="Phone # Here... ">
                                </div>
                                </div> <div class="col-md-2 ">
                <div class="form-group">
                                    <label for="origin">Apply Selected</label>
                    <button type="button" class="updateBtn form-control" name="desti" id="desti"><i class="fa fa-rocket"></i >Go!</button>
                                </div>
                                </div>
      
            </form>
       

       </div>
            </div>
            </div></div>
            </div>
    </div>
     <div id="notif" class="container-fluid" >
         <div class="row w3-margin-top ">
            
             
    <div class="col-md-4 ">
<ul class="breadcrumb w3-padding w3-white" style="width:250px;">
    <li><a class="w3-text-black">Admin Panel</a></li>
    <li><a class="w3-text-black">Booking</a></li>
    <li><a class="w3-text-grey">List</a></li>
  </ul>
            </div>
         <div class="col-md-3 ">
        <div class="form-group " style="width:100%;">
            <form method="post">
              
                         
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-filter"></i> Filter By:</span>
                                    <div class="dropdown input-group-btn">
                                        <button class="btn w3-teal w3-border-white  dropdown-toggle " type="button" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                          <li><a href="#">Approved</a></li>
                                          <li><a href="#">Pending</a></li>
                                          <li><a href="#">Cancelled</a></li>
                                         
                                        </ul>
                                    </div>
                                </div>
                           
                
                

            </form>
        </div>
    
           </div>
        
       </div>
    <div class="panel-body" >
     
         <div class="content" >
            <div class="container-fluid">
                <div class="row w3-margin-bottom">

                   
                </div>
            </div>
        </div>
        
                  
        <div class="row">
                   
            <div class="col-md-12">
                <div class="w3-container w3-round w3-white w3-card-4 w3-border w3-padding w3-border-white table-responsive">
                    <table class="table">
                                <tr class="w3-text-grey">
                                    <th>Date:</th>
                                    <th>From:</th>
                                    <th>To:</th>
                                    <th>Customer:</th>
                                    <th >Status:</th>
                                    <th colspan="2" class="w3-center">Action</th>
                                </tr>
                                 <tr class="w3-text-grey">
                                    <td>2017-08-01</td>
                                    <td>Capitol Park Homes II, Caloocan</td>
                                    <td>Clark Pampanga</td>
                                    <td>Renan Nuevo</td>
                                    <td><button class="btn btn-success w3-green">Approved</button></td>
                                    <td><button class="btn btn-info w3-teal">Manage</button></td>
                                    <td><button type="button" data-toggle="modal" data-target="#delete" class="btn btn-danger w3-red"><i class="fa fa-trash w3-xlarge"></i></button></td>
                                </tr>
                                   <tr class="w3-text-grey">
                                    <td>2017-08-01</td>
                                    <td>Bagong Silang, Caloocan</td>
                                    <td>Marinduque</td>
                                    <td>Nardinio Rodolfo</td>
                                    <td><button class="btn btn-success w3-green">Approved</button></td>
                                    <td><button class="btn btn-info w3-teal">Manage</button></td>
                                    <td><button type="button" data-toggle="modal" data-target="#delete" class="btn btn-danger w3-red"><i class="fa fa-trash w3-xlarge"></i></button></td>
                                </tr>
                                   <tr class="w3-text-grey">
                                    <td>2017-08-02</td>
                                    <td>QC</td>
                                    <td>Pangasinan</td>
                                    <td>JP Baac Foods. Corporation</td>
                                    <td><button class="btn btn-success w3-brown">Pending</button></td>
                                    <td><button class="btn btn-info w3-teal">Manage</button></td>
                                    <td><button type="button" data-toggle="modal" data-target="#delete" class="btn btn-danger w3-red"><i class="fa fa-trash w3-xlarge"></i></button></td>
                                </tr>
                         <tr class="w3-text-grey">
                                    <td>2017-08-05</td>
                                    <td>Brgy Urduja, Caloocan</td>
                                    <td>Anywhere</td>
                                    <td>Bossing</td>
                                    <td><button class="btn btn-default w3-brown">Pending</button></td>
                                    <td><button  type="button" class="btn btn-info w3-teal" data-toggle="modal" data-target="#manage">Manage</button></td>
                                    <td><button type="button" data-toggle="modal" data-target="#delete" class="btn btn-danger w3-red"><i class="fa fa-trash w3-xlarge"></i></button></td>
                                </tr>
                    </table>
                </div>
            </div>
                    
            
        </div>
    </div>
    </div>
    <div id="systemset" >
    <div class="panel-heading">
        <h3 class="panel-title"><span class="fa fa-bar-chart"></span> System Settings</h3>
    </div>
    
    <div class="panel-body" >
        
        <div class="content" >
            <div class="container-fluid">
                <div class="row w3-margin-bottom">

                    <div class="col-md-3">
                        <div class="w3-container w3-white w3-text-orange w3-card-4 w3-border w3-border-white w3-hover-white w3-hover-text-red w3-padding-12 w3-round">
                            <div class="w3-left">
                                <span class="fa-stack fa-2x ">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="w3-text-white fa fa-truck fa-spin fa-stack-1x" ></i>
                                </span>
                            </div>
                            <div class="w3-right">
                                <span class=" w3-right badge">101</span>
                                  <h5 class="w3-center">Total Bookings</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="w3-container w3-white w3-text-green w3-card-4 w3-border w3-border-white w3-hover-white w3-hover-text-red w3-padding-12 w3-round">
                            <div class="w3-left">
                                <span class="fa-stack fa-2x ">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="w3-text-white fa fa-exchange fa-spin fa-stack-1x" ></i>
                                </span>
                            </div>
                            <div class="w3-right">
                                <span class=" w3-right badge">101</span>
                                  <h5 class="w3-center">Shipped</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="w3-container w3-white w3-text-blue w3-card-4 w3-border w3-border-white w3-hover-white w3-hover-text-red w3-padding-12 w3-round">
                            <div class="w3-left">
                                <span class="fa-stack fa-2x ">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="w3-text-white fa fa-check-square-o fa-spin fa-stack-1x" ></i>
                                </span>
                            </div>
                            <div class="w3-right">
                                <span class=" w3-right badge">101</span>
                                  <h5 class="w3-center">Delivered</h5>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-md-3">
                        <div class="w3-container w3-white w3-text-teal w3-card-4 w3-border w3-border-white w3-hover-white w3-hover-text-red w3-padding-12 w3-round">
                            <div class="w3-left">
                                <span class="fa-stack fa-2x ">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="w3-text-white fa fa-spinner fa-spin fa-stack-1x" ></i>
                                </span>
                            </div>
                            <div class="w3-right">
                                <span class=" w3-right badge">101</span>
                                  <h5 class="w3-center">In-Progress</h5>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        
                  
        <div class="row">
                   
            <div class="col-md-8">
                <div class="w3-container w3-dark-white w3-card-4 w3-border w3-border-white table-responsive">
                    <table class="table table-bordered">
                        <thead><h3 w3-text-black>Active Users</h3></thead>
                            <caption>wew</caption>
                                <tr class="w3-text-grey">
                                    <th>Total Customers</th>
                                    <th>Revenue</th>
                                    <th>Firstname</th>
                                    <th>Firstname</th>
                                    <th>Firstname</th>
                                    <th>Firstname</th>
                                </tr>
                                   <tr class="wew w3-text-grey">
                                    <td>Total Customers</td>
                                    <td>Revenue</td>
                                    <td>Firstname</td>
                                    <td>Firstname</td>
                                    <td>Firstname</td>
                                    <td>Firstname</td>
                                </tr>
                                   <tr class="w3-text-grey">
                                    <td>Total Customers</td>
                                    <td>Revenue</td>
                                    <td>Firstname</td>
                                    <td>Firstname</td>
                                    <td>Firstname</td>
                                    <td>Firstname</td>
                                </tr>
                    </table>
                </div>
            </div>
                    
            <div class="col-md-4">
                <div class="w3-container w3-dark-white w3-card-4 w3-border w3-border-white">
                    <table class="table">
                        
                       <thead><h3 w3-text-black>Business Stats</h3></thead>
                            <caption>wew</caption>
                                <tr type="button" class="w3-text-grey">
                                    <th scope="row">Total Customers</th>
                                        <td>3</td>
                                </tr>
                                <tr class="w3-text-grey">
                                    <th scope="row">Active Users</th>
                                        <td><?php echo '1'; ?></td>
                                </tr>
                                <tr class="w3-text-grey">
                                    <th scope="row">Revenue</th>
                                        <td>Eve</td>
                                </tr>
                                <tr class="w3-text-grey">
                                    <th scope="row">Firstname</th>
                                        <td>Eve</td>
                                </tr>
                                <tr class="w3-text-grey">
                                    <th scope="row">Firstname</th>
                                        <td>Eve</td>
                                </tr>
                                <tr class="w3-text-grey">    
                                    <th scope="row">Firstname</th>
                                        <td>Eve</td>
                                </tr>
                                <tr class="w3-text-grey">
                                    <th scope="row">Firstname</th>
                                        <td>Eve</td>
                                </tr>

                    </table>
                </div>
            </div>
        
        </div>
    </div>
    </div>
    
    <div id="manageShipment" style="padding: 0 30px 0 30px;">
        <div class="row w3-margin-top ">
           <div class="col-md-6 ">
                <ul class="breadcrumb w3-padding w3-white">
                    <li><a class="w3-text-black">Admin Panel</a></li>
                    <li><a class="w3-text-black">Manage Shipment</a></li>
                    <li><a class="w3-text-grey">AWB123</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="w3-card-12 col-md-10 col-md-offset-1 w3-padding w3-round approveNotif">
                <span>Booking has been <mark>approved</mark> and ready to be shipped. An e-mail with the tracking ID has been sent to the client. You can start updating shipment at the bottom of this page. <button type="button" id="close" class="pull-right close" ><i class="fa fa-times"></i></button></span>
            </div>
        </div>
        <div class="w3-round row">
            <div class="col-md-12">
                <div class="row" style=" padding: 12px; background-color:#e6e6e6">
            <div class="row manage">
           
                <div class="col-md-6 col-md-offset-6">
                    <button class="btn w3-padding w3-right w3-padding-12 w3-margin-left w3-blue"><i class="fa fa-save"></i> Save Changes</button>
                 
               
                    <button class=" btn w3-padding w3-right w3-padding-12  w3-margin-left w3-green"><i class="fa fa-print"></i> Print</button>
                
                    <button class=" btn w3-padding w3-right w3-padding-12   w3-red"><i class="fa fa-trash"></i> Delete</button>
                </div>
            
        </div>
            </div>
            </div>    
        </div>
        
        <div class="row manage" style="margin-bottom:40px;">
            
            <div class="col-md-6">
               
                <div class="row" >
                    <h4 class="w3-border-grey w3-center white" style="padding:10px; border:1px solid grey;"><i class="fa fa-user"></i> Client Details</h4>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">Client Name</label>
                            <input  class="input form-control" name="clientName" id="clientName" type="text" placeholder="Name here...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">Client Phone</label>
                            <input class=" input form-control" name="clientPhone" id="clientPhone" size="11" type="tel" placeholder="Contact No.">
                        </div>                   
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="awb">E-mail</label>
                            <input  class=" input form-control" name="clientEmail" id="clientEmail" type="text" placeholder="Email Address">
                        </div>
                    </div>
                    
                </div>
                
            </div>
        
                <div class="col-md-6">
                     <div class="row">
                    <h4 class="w3-border-grey w3-center slate" style="padding:10px; border:1px solid grey;"><i class="fa fa-globe
                    "></i> Receiver Details</h4>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">Receiver Name</label>
                            <input  class=" input form-control" name="recName" id="recName" type="text" placeholder="Name Here...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">Receiver Phone</label>
                            <input class="w3-text-white input form-control" name="recPhone" id="recPhone" type="tel" placeholder="Contact No.">
                        </div>                   
                    </div>
            
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="awb">Address</label>
                            <input  class=" input form-control" name="recAddress" id="recAddress" type="text" placeholder="Airwaybill No.">
                        </div>
                    </div>
                    
                </div>      
            </div>
           
        </div>
         <div class="row manage" style="margin-bottom:40px;">
            
            <div class="col-md-6">
               
                <div class="row" >
                    <h4 class="w3-border-grey w3-center slate" style="padding:10px; border:1px solid grey;"><i class="fa fa-envelope"></i> Shipment Details</h4>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">AWB-NO.</label>
                            <input  class="input form-control" name="awb" id="awb" type="text" placeholder="AirwayBill No.">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">Shipment Description</label>
                            <input class=" input form-control" name="desc" id="desc" size="11" type="text" placeholder="Remarks">
                        </div>                   
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">Truck Type</label>
                            <input  class=" input form-control" name="clientEmail" id="clientEmail" type="text" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">Weight</label>
                            <input class=" input form-control" name="clientLoc" id="clientLoc" type="text" placeholder="Client's Location">
                        </div>                   
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">Date Booked</label>
                            <input  class=" input form-control" name="dateBook" id="dateBook" type="date" placeholder="Booking Date">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">Date Scheduled</label>
                            <input class=" input form-control" name="dateSched" id="dateSched" type="date" placeholder="Shipping Date">
                        </div>                   
                    </div>
                </div>
                
            </div>
        
                <div class="col-md-6">
                     <div class="row">
                    <h4 class="w3-border-grey w3-center white" style="padding:10px; border:1px solid grey;"><i class="fa fa-truck
                    "></i> Travel Details</h4>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">From:</label>
                            <input  class=" input form-control" name="clientLoc" id="clientLoc" type="text" placeholder="Client Location">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">To:</label>
                            <input class="w3-text-white input form-control" name="recLoc" id="recLoc" type="tel" placeholder="Receiver Location">
                        </div>                   
                    </div>
            
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="awb">Assigned Driver</label>
                            <input  class=" input form-control" name="driver" id="driver" type="text" placeholder="Driver ID">
                        </div>
                    </div>
                </div>      
            </div>
           
        </div>
        <div class="row manage" style="margin-bottom:40px;">
            <h4 class="w3-border-grey w3-center slate" style="padding:10px; border:1px solid grey;"><i class="fa fa-truck
                    "></i> Update Shipment Status</h4>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered statusUp">
                        <tr>
                            <th>Current City</th>
                            <th>Current Status</th>
                            <th>Remarks</th>
                            <th>Date&Time</th>
                            <th>Updated By</th>
                        </tr>
                        <tr>
                            <td>Caloocan City</td>
                            <td>Traveling</td>
                            <td>Na-Flatan</td>
                            <td>1/1/20017</td>
                            <td>Super duper admin</td>
                        </tr>
                        
                    </table>
                </div>
            </div><div class="col-md-12">
                <div class="w3-round row" style=" padding: 12px; background-color:#e6e6e6">
           <div class="form-group " style="width:100%;">
            <form method="post" >
              
                            
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="awb">Current City</label>
                                    <input class=" input form-control" name="awb" id="awb" type="text" placeholder="Airwaybill No.">
                                </div>
                            </div>             <div class="col-md-2 ">
      
                                    <div class="form-group">
                                    <label for="curStatus">Current Status</label>
                                        <select class="input form-control" name="curStatus" id="client" type="text" placeholder="Status">
                                            <option selected>Status</option>
                                            <option>paalis</option>
                                            <option>nakaalis</option>
                                            <option>OK!</option>
                                        </select>
                                </div>
                        </div>            <div class="col-md-2 ">
                <div class="form-group">
                                    <label for="origin">Custom Status</label>
                                    <input class=" input form-control" name="origin" id="origin" type="text" placeholder="Enter City ">
                                </div>
                                </div> <div class="col-md-4 ">
                <div class="form-group">
                                    <label for="origin">Date</label>
                                    <input class="input form-control" name="desti" id="desti" type="date" placeholder="Enter City ">
                                </div>
                                </div>
                                   <div class="col-md-2 ">
      
                                <div class="input-group">
                                     <div class="form-group">
                                    <label for="filterbtn">Update Status</label><br>
                                    <button class="form-control updateBtn" name="filterbtn" id="filterbtn"><i class="fa fa-check"></i> Go!</button>
                                </div>
                                </div>
                        </div>
            </form>
       

       </div>
            </div>
            </div>
            
        </div>
        
    
    </div>
    <div id="addshipment" style="padding: 0 30px 0 30px;">
        <div class="row w3-margin-top ">
           <div class="col-md-6 ">
                <ul class="breadcrumb w3-padding w3-white">
                    <li><a class="w3-text-black">Admin Panel</a></li>
                    <li><a class="w3-text-black">Manage Shipment</a></li>
                    <li><a class="w3-text-grey">Add Shipment</a></li>
                </ul>
            </div>
        </div>
       
             <div class="row">
            <div class="col-md-12">
                <div class="w3-round row" style=" padding: 12px; background-color:#e6e6e6">
            <div class="row manage">
           
                <div class="col-md-6 col-md-offset-6 ">
                    <button data-toggle="modal" data-target="#addFields" class="btn w3-right w3-padding w3-margin-left w3-padding-12 w3-green"><i class="fa fa-plus"></i> Add Fields</button>
                    <button data-toggle="modal" data-target="#delFields" class=" btn w3-right w3-padding w3-padding-12   w3-red"><i class="fa fa-trash"></i> Delete Fields</button>
                </div>
            
        </div>
            </div>
            </div>    
        </div>
        <form>
        <div class="row manage" style="margin-bottom:40px;">
            
            <div class="col-md-6">
               
                <div class="row" >
                    <h4 class="w3-border-grey w3-center white" style="padding:10px; border:1px solid grey;"><i class="fa fa-user"></i> Sender Details (*)</h4>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">Client Name</label>
                            <input  class="input form-control" name="clientName" id="clientName" type="text" placeholder="Name here...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">Client Phone</label>
                            <input class=" input form-control" name="clientPhone" id="clientPhone" size="11" type="tel" placeholder="Contact No.">
                        </div>                   
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">Email-Address</label>
                            <input  class=" input form-control" name="recAddress" id="clientEmail" type="text" placeholder="Airwaybill No.">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">Address</label>
                            <input  class=" input form-control" name="recAddress" id="clientAddress" type="text" placeholder="Sender City">
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">AWB-No.</label>
                            <input  class=" input form-control" name="recAddress" id="recAddress" type="text" placeholder="Airwaybill No.">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">Staff Name(Driver)</label>
                            <input  class=" input form-control" name="driver" id="driver" type="text" placeholder="Driver ID">
                        </div>
                    </div>
                    
                </div>
                
            </div>
        
                <div class="col-md-6">
                     <div class="row">
                    <h4 class="w3-border-grey w3-center slate" style="padding:10px; border:1px solid grey;"><i class="fa fa-globe
                    "></i> Receiver Details (*)</h4>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">Receiver Name</label>
                            <input  class=" input form-control" name="recName" id="recName" type="text" placeholder="Name Here...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">Receiver Phone</label>
                            <input class="input form-control" name="recPhone" id="recPhone" type="tel" placeholder="Contact No.">
                        </div>                   
                    </div>
            
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="recAddress">Home/Company Address</label>
                            <textarea style="background-color:#404040;"  class=" w3-text-white  form-control" name="recAddress" id="recAddress" type="text" placeholder="Address Here..."></textarea>
                        </div>
                    </div>
                    
                </div> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="recAddress">City</label>
                            <input  class="input form-control" name="City" id="recAddress" type="text" placeholder="City Here...">
                        </div>
                    </div>
                    
                </div>      
            </div>
           
        </div>
         <div class="row manage" style="margin-bottom:40px;">
            
            <div class="col-md-6">
               
                <div class="row" >
                    <h4 class="w3-border-grey w3-center slate" style="padding:10px; border:1px solid grey;"><i class="fa fa-envelope"></i> Scheduling (*)</h4>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="awb">Booking Date</label>
                            <input  class="input form-control" name="bookindDate" id="bookingDate" type="date">
                        </div>
                    </div> 
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="awb">Delivery Date</label>
                            <input  class="input form-control" name="delDate" id="delDate" type="date">
                        </div>
                    </div>
                  
                </div> 
               
                
            </div>
        
                <div class="col-md-6">
                     <div class="row">
                    <h4 class="w3-border-grey w3-center white" style="padding:10px; border:1px solid grey;"><i class="fa fa-truck
                    "></i> Shipment Details (*)</h4>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">Weight</label>
                            <input  class=" input form-control" name="weight" id="weight" type="number" placeholder="N-Kilograms">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">Preffered Truck Type</label>
                            <select type="text" required class="input form-control" id="truckType" name="truckType">
                                        <option selected> -- N-Tonner --</option>
                                        <option>5-tonner</option>
                                        <option>10-tonner</option>
                                        <option>20-tonner</option>
                                        <option>30-tonner</option>
                                    </select>
                        </div>                   
                    </div> 
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">Payment Mode</label>
                            <input  class=" input form-control" name="weight" id="weight" type="number" placeholder="Payment">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="awb">Description</label>
                            <textarea type="text" required class="input form-control" id="truckType" name="truckType" placeholder="Specify Shipment Description"></textarea>
                        </div>                   
                    </div>
            
                </div>
                     
            </div>
           
        </div>
        <div class="row w3-round">
            <div class="col-md-12">
                <div class="row" style=" padding: 12px; background-color:#e6e6e6">
           <div class="row manage">
           
                <div class="col-md-6">
                    <button class="btn w3-padding w3-padding-12 updateBtn"><i class="fa fa-plus"></i> Add Shipment</button>
                    <button type="reset" class=" btn w3-padding w3-padding-12  w3-margin-left w3-red"><i class="fa fa-refresh"></i> Reset</button>
                </div>
            
        </div>
            </div>
            </div>    
        </div>
            
        
            
        
        </form>
    </div></div>

      
<script type="text/javascript">
    
     $(document).ready(function (e) {
        $('.showNhide').on('click', function(){
           
            if(!$('.sidebar').hasClass('hide')){ 
            $('.sidebar').addClass('hide'); 
            $('.main-panel').addClass('show');  
            }else{ 
                $('.sidebar').addClass('labas');
                $('.sidebar').removeClass('hide');
                $('.main-panel').removeClass('show'); 
                     
           
            }
         
        
    });  
    
        });
         window.onresize = function(e){
             if($(window).width()<=320){
                 $('.sidebar').show();
                 $('.main-panel').removeClass('show'); 
                 $('.main-panel').addClass('margin'); 
                     
             }  
       
         };
    $('.sidebar-wrapper > .nav > .tab > a').on('click', function (e) {
        e.preventDefault();
    
        if (!$(this).parent().hasClass('aktib')){
        
            $(this).parent().addClass('aktib');
            $(this).parent().siblings().removeClass('aktib');
            target = $(this).attr('href');
            $('.panel > div').not(target).hide();
            $(target).fadeToggle(900);
//            $('.sidebar').toggleClass('hide');
        }

           
       
    });   
   
  
    
    $('.sidebar-wrapper > .nav > .tab > .collapse > li a').on('click', function (e) {
        e.preventDefault();
                      
        
        if (!$(this).parent().hasClass('aktib')){
        
            $(this).parent().addClass('aktib');
            $(this).parent().siblings().removeClass('aktib');
            target = $(this).attr('href');
            $('.panel > div').not(target).hide();
            $(target).fadeToggle(900);
//                        $('.sidebar').toggleClass('hide');

        
        }
    });
    
    $('.dropdown-menu > li > a').on('click', function (e) {
        e.preventDefault();
     
        if(!$(this).parent().hasClass('aktib')) {
            $('#onlinetab').addClass('aktib');
            $('#onlinetab').siblings().removeClass('aktib');
            
            target = $(this).attr('href');
            $('.panel > div').not(target).hide();
            $(target).fadeToggle(900);
        }    
    });
    
    $('a#approveBtn, a.approveBtn').on('click', function (e) {
        
     
       
            $(this).parent().addClass('aktib');
            $(this).parent().siblings().removeClass('aktib');
            target = $(this).attr('href');
            $('.panel > div').not(target).hide();
            $(target).fadeToggle(900);

    });
    $('#close, a.approveBtn').on('click', function (e) {
        
        $('.approveNotif').hide('slow');
        
    });
      $('#approveBtn').on('click', function (e) {
        
        $('.approveNotif').show('slow');
        
    });
     $('.dropdown-menu > li > a').on('hover', function (e) {
        e.preventDefault();
     
       
            $(this).parent().addClass('notifhov');
            $(this).parent().siblings().removeClass('notifhov');
            target = $(this).attr('href');
            $('.panel > div').not(target).hide();
            $(target).fadeToggle(900);
    });
   
    $('#okdelete').on('click', function(e){
       e.preventDefault();
        $('#adpass').addClass('showpassbox');    
    });
</script>
   
<!--<script src="assets/js/nav.js" type="text/javascript"></script>-->
</body>
</html>
       
