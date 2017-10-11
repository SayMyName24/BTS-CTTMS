<?php session_start(); ?>


<!--MODAL FOR DELETE-->
<div class="modal fade" id="delete" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
    <div class="modal-content ">
        <div class="modal-header w3-red">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Confirmation</h4>
        </div>
        
        <div class="modal-body" style="padding:40px 50px;">
          
            <h5>Are you sure you want to delete this record?   <span class="fa fa-exclamation-triangle w3-center w3 red"></span></h5>
              
        </div>
        <div class="modal-footer">
         
  <button type="submit" class="btn btn-primary btn-default" data-dismiss="modal"><span class="fa fa-trash"></span>Yes</button>
                <button type="submit" class="btn btn-danger btn-default" data-dismiss="modal"><span class="fa fa-times"></span> No</button>
        </div>
      </div>
      
    </div>
  </div> 
<!----------------------------------------------------------------------------------------------------------------------------------->
<div class="modal fade" id="approveNotif" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
        <div class="modal-content ">
            <div class="modal-header w3-red">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Confirmation</h4>
            </div>
        </div>
      
    </div>
  </div> 
<!------------------------------------------------------------------------->
<div class="modal fade" id="delFields" role="dialog">
    <div class="modal-dialog modal-md">
    
      <!-- Modal content-->
        <div class="modal-content ">
            <div class="modal-header w3-red">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Remove Shipment Fields</h4>
            </div>
            <div class="modal-body">
                <div class="modal-header">
                    <form method="post" id="deleteFields">
                        <select type="text" name="delFields" id="delFieldsSelect" class="input form-control">
                            <option selected>Select Field</option>
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </form>
                </div>
            
            </div>
            <div class="modal-footer">
        <button type="submit" form="deleteFields" class="btn updateBtn" data-dismiss="modal"><span class="fa fa-trash"></span>Remove</button>
        <button type="submit" class="btn btn-danger btn-default w3-red" data-dismiss="modal"><span class="fa fa-times"></span> Close</button>
    </div>
        </div>
      
    </div>
    
  </div> 
<!----------------------------- ADD FIELDS ----------------------------------------------->
<div class="modal fade" id="addFields" role="dialog">
    <div class="modal-dialog modal-md">
    
      <!-- Modal content-->
        <div class="modal-content ">
            <div class="modal-header w3-green">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Add Shipment Fields</h4>
            </div>
            <div class="modal-body">
                <div class="modal-header">
                    <form method="post" id="deleteFields">
                        <select type="text" name="delFields" id="delFieldsSelect" class="input form-control">
                            <option selected>Select Field</option>
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </form>
                </div>
            
            </div>
            <div class="modal-footer">
        <button type="submit" form="deleteFields" class="btn updateBtn" data-dismiss="modal"><span class="fa fa-check"></span>Add</button>
        <button type="submit" class="btn btn-danger btn-default w3-red" data-dismiss="modal"><span class="fa fa-times"></span> Close</button>
    </div>
        </div>
      
    </div>
    
  </div> 
<!------------------------------------------------------------------------->
<!--MODAL FOR MANAGE/APPROVE-->

<div class="modal fade w3-round" id="manage" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
    <div class="modal-content ">
        <div class="modal-header w3-teal">
            <button type="button" class="w3-teal close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Approve Shipment</h4>
        </div>
        
        <div class="modal-body" style="padding:45px 50px 30px 50px ;">
            <span style="background-color: #404040;" class="w3-text-white w3-padding w3-round pull-right">Currently Pending</span>
            <form method="post">
                <h3><i class="fa fa-user"></i> <b>General Details</b> </h3>
                
                    <div class="form-group"style="background-color: white;">
                        
                        <div class="row w3-round" style="background-color: #E8E8E8;padding:5px 0 10px 0;margin-top:20px;">
                            <span><h5 class="w3-text-black w3-padding"><i> Client's Information (*)</i></h5></span>
                        
                         <!-- SESSION FOR EMAIL FOR RETRIEVEING DATA -->
                            
                            
                            
                            
                            <div class="col-md-4"> 
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-text-white w3-grey w3-border-white">Name*</span>
                                    <input value="" id="clientName" type="text" class="form-control" name="clientName" placeholder="Name Here..." form="form1">
                               </div>
                            </div>  
                         
                            <div class="col-md-4">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white ">Phone*</span>
                                    <input type="contact" minlength="11" maxlength="11" class="form-control" id="senderName" placeholder="09876543211">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white">Email*</span>
                                    <input type="email" required class="form-control" id="senderName" placeholder="renan@nuevo@gmail.com">
                                </div>
                            </div>
                        
                        </div>
                       
                        <div class="row w3-round" style="background-color:#E8E8E8;padding:5px 0 10px 0;margin-top:20px;">
                            <span><h5 class="w3-text-black w3-padding"><i>Receiver's Information (*)</i></h5></span>
                        
                            <div class="col-md-4"> 
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-text-white w3-grey w3-border-white">Name</span>
                                    <input id="clientName" type="text" class="form-control" name="clientName" placeholder="Name Here..." form="form1">
                               </div>
                            </div>  
                            
                            <div class="col-md-4">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white ">Phone</span>
                                    <input type="contact" minlength="11" maxlength="11" class="form-control" id="senderName" placeholder="09876543211">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white ">Address</span>
                                    <input type="address" maxlength="20" class="form-control" id="senderAdd" placeholder="#123 blk456">
                                </div>
                            </div>
                            
                          
                        
                        </div>
                    
                    </div>
                    
                <h3><i class="fa fa-envelope"></i> <b>Shipment Details</b></h3>
            
                    <div class="form-group" style="background-color: white;">
                        
                        <div class="row w3-round" style="background-color: #E8E8E8;padding:5px 0 10px 0;margin-top:20px;">
                            <span><h5 class="w3-text-black w3-padding"><i> Freight Information (*)</i></h5></span>
                        
                            <div class="col-md-3"> 
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-text-white w3-grey w3-border-white">AWB #</span>
                                    <input id="clientName" type="text" class="form-control" name="clientName" placeholder="Name Here..." form="form1">
                               </div>
                            </div>  
                            
                            <div class="col-md-3">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white" width="10%">Desc</span>
                                    <input type="text" minlength="11" maxlength="11" class="form-control" id="senderName" placeholder="Item Description" width="90%">
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white">Truck Type</span>
                                    <select type="text" required class="form-control" id="senderName" placeholder="renan@nuevo@gmail.com">
                                        <option selected> -- N-Tonner --</option>
                                        <option>5-tonner</option>
                                        <option>10-tonner</option>
                                        <option>20-tonner</option>
                                        <option>30-tonner</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white">Weight</span>
                                    <input type="number" required class="form-control" id="senderName" placeholder="in KG">
                                </div>
                            </div>
                            
                        </div>
                       
                        <div class="row w3-round" style="background-color:#E8E8E8;padding:5px 0 10px 0;margin-top:20px;">
                            <span><h5 class="w3-text-black w3-padding"><i>Date (*)</i></h5></span>
                        
                            <div class="col-md-6"> 
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-text-white w3-grey w3-border-white">Date Booked</span>
                                    <input id="clientName" type="date" class="form-control" name="clientName" placeholder="Name Here..." form="form1">
                               </div>
                            </div>  
                            
                            <div class="col-md-6">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white ">Date Scheduled</span>
                                    <input type="date" minlength="11" maxlength="11" class="form-control" id="senderName" placeholder="09876543211">
                                </div>
                            </div>
                            
                          
                        
                        </div>
                    
                    </div><h3> <i class="fa fa-truck"></i> <b> Travel Details</b></h3>
            
                    <div class="form-group">
                        
                        <div class="row w3-round" style="background-color: #E8E8E8;padding:5px 0 10px 0;margin-top:20px;">
                            <span><h5 class="w3-text-black w3-padding"><i> Transportation (*)</i></h5></span>
                        
                            <div class="col-md-4"> 
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-text-white w3-grey w3-border-white">From</span>
                                    <input id="clientName" type="text" class="form-control" name="clientName" placeholder="Name Here..." form="form1">
                               </div>
                            </div>  
                            
                            <div class="col-md-4">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white ">To</span>
                                    <input type="contact" minlength="11" maxlength="11" class="form-control" id="senderName" placeholder="09876543211">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white">Assign Driver</span>
                                    <select type="text" required class="form-control" id="driver" class="w3-text-grey">
                                        <option selected>--Driver ID--</option>
                                        <option>TD1</option>
                                        <option>TD2</option>
                                        <option>TD3</option>
                                        <option>TD4</option>
                                        <option>TD5</option>
                                        <option>TD6</option>
                                    </select>
                                </div>
                            </div>
                        
                        </div>
                       
                    </div>
                
                    <div class="row">
                
                        <div class="col-md-3">
                            
                            <a href="#manageShipment" class="form-control livesearch w3-text-white" data-dismiss="modal" id="approveBtn" ><i class="fa fa-thumbs-o-up"></i> Approve Booking</a>
                            
                        </div>
                    </div>
                </form>
        
                
        </div>
        <div class="modal-footer"style="background-color: #707070;">
            <button style="background-color: #404040;" type="submit" class="btn btn-default w3-text-white" data-dismiss="modal"><span class="fa fa-thumbs-o-down"></span> Cancel</button>
        </div>
      </div>
      
    </div>
  </div> 
<!--------------------------------------------------------------------------------------------->
<div class="modal fade w3-round" id="editShipment" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
    <div class="modal-content ">
        <div class="modal-header w3-blue">
            <button type="button" class="w3-teal close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Edit Shipment</h4>
        </div>
        
        <div class="modal-body" style="padding:45px 50px 30px 50px ;">
            
            <form method="post">
                <h3><i class="fa fa-user"></i> <b>General Details</b> </h3>
                
                    <div class="form-group"style="background-color: white;">
                        
                        <div class="row w3-round" style="background-color: #E8E8E8;padding:5px 0 10px 0;margin-top:20px;">
                            <span><h5 class="w3-text-black w3-padding"><i> Client's Information (*)</i></h5></span>
                        
                            <div class="col-md-4"> 
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-text-white w3-grey w3-border-white">Name*</span>
                                    <input id="clientName" type="text" class="form-control" name="clientName" placeholder="Name Here..." form="form1">
                               </div>
                            </div>  
                            
                            <div class="col-md-4">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white ">Phone*</span>
                                    <input type="contact" minlength="11" maxlength="11" class="form-control" id="senderName" placeholder="09876543211">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white">Email*</span>
                                    <input type="email" required class="form-control" id="senderName" placeholder="renan@nuevo@gmail.com">
                                </div>
                            </div>
                        
                        </div>
                       
                        <div class="row w3-round" style="background-color:#E8E8E8;padding:5px 0 10px 0;margin-top:20px;">
                            <span><h5 class="w3-text-black w3-padding"><i>Receiver's Information (*)</i></h5></span>
                        
                            <div class="col-md-4"> 
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-text-white w3-grey w3-border-white">Name</span>
                                    <input id="clientName" type="text" class="form-control" name="clientName" placeholder="Name Here..." form="form1">
                               </div>
                            </div>  
                            
                            <div class="col-md-4">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white ">Phone</span>
                                    <input type="contact" minlength="11" maxlength="11" class="form-control" id="senderName" placeholder="09876543211">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white ">Address</span>
                                    <input type="address" maxlength="20" class="form-control" id="senderAdd" placeholder="#123 blk456">
                                </div>
                            </div>
                            
                          
                        
                        </div>
                    
                    </div>
                    
                <h3><i class="fa fa-envelope"></i> <b>Shipment Details</b></h3>
            
                    <div class="form-group" style="background-color: white;">
                        
                        <div class="row w3-round" style="background-color: #E8E8E8;padding:5px 0 10px 0;margin-top:20px;">
                            <span><h5 class="w3-text-black w3-padding"><i> Freight Information (*)</i></h5></span>
                        
                            <div class="col-md-3"> 
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-text-white w3-grey w3-border-white">AWB #</span>
                                    <input id="clientName" type="text" class="form-control" name="clientName" placeholder="Name Here..." form="form1">
                               </div>
                            </div>  
                            
                            <div class="col-md-3">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white" width="10%">Desc</span>
                                    <input type="text" minlength="11" maxlength="11" class="form-control" id="senderName" placeholder="Item Description" width="90%">
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white">Truck Type</span>
                                    <select type="text" required class="form-control" id="senderName" placeholder="renan@nuevo@gmail.com">
                                        <option selected> -- N-Tonner --</option>
                                        <option>5-tonner</option>
                                        <option>10-tonner</option>
                                        <option>20-tonner</option>
                                        <option>30-tonner</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white">Weight</span>
                                    <input type="number" required class="form-control" id="senderName" placeholder="in KG">
                                </div>
                            </div>
                            
                        </div>
                       
                        <div class="row w3-round" style="background-color:#E8E8E8;padding:5px 0 10px 0;margin-top:20px;">
                            <span><h5 class="w3-text-black w3-padding"><i>Date (*)</i></h5></span>
                        
                            <div class="col-md-6"> 
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-text-white w3-grey w3-border-white">Date Booked</span>
                                    <input id="clientName" type="date" class="form-control" name="clientName" placeholder="Name Here..." form="form1">
                               </div>
                            </div>  
                            
                            <div class="col-md-6">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white ">Date Scheduled</span>
                                    <input type="date" minlength="11" maxlength="11" class="form-control" id="senderName" placeholder="09876543211">
                                </div>
                            </div>
                            
                          
                        
                        </div>
                    
                    </div><h3> <i class="fa fa-truck"></i> <b> Travel Details</b></h3>
            
                    <div class="form-group">
                        
                        <div class="row w3-round" style="background-color: #E8E8E8;padding:5px 0 10px 0;margin-top:20px;">
                            <span><h5 class="w3-text-black w3-padding"><i> Transportation (*)</i></h5></span>
                        
                            <div class="col-md-4"> 
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-text-white w3-grey w3-border-white">From</span>
                                    <input id="clientName" type="text" class="form-control" name="clientName" placeholder="Name Here..." form="form1">
                               </div>
                            </div>  
                            
                            <div class="col-md-4">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white ">To</span>
                                    <input type="contact" minlength="11" maxlength="11" class="form-control" id="senderName" placeholder="09876543211">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white">Assign Driver</span>
                                    <select type="text" required class="form-control" id="driver" class="w3-text-grey">
                                        <option selected>--Driver ID--</option>
                                        <option>TD1</option>
                                        <option>TD2</option>
                                        <option>TD3</option>
                                        <option>TD4</option>
                                        <option>TD5</option>
                                        <option>TD6</option>
                                    </select>
                                </div>
                            </div>
                        
                        </div>
                       
                    </div>
                
                    <div class="row">
                
                        <div class="col-md-3">
                            
                            <a href="#manageShipment" class="form-control livesearch w3-text-white" data-dismiss="modal" id="approveBtn" ><i class="fa fa-thumbs-o-up"></i> Approve Booking</a>
                            
                        </div>
                    </div>
                </form>
        
                
        </div>
        <div class="modal-footer"style="background-color: #707070;">
            <button style="background-color: #404040;" type="submit" class="btn btn-default w3-text-white" data-dismiss="modal"><span class="fa fa-thumbs-o-down"></span> Cancel</button>
        </div>
      </div>
      
    </div>
  </div> 


<div class="modal fade w3-round" id="finishBooking" role="dialog" onload="">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
    <div class="modal-content ">
        
        <div class="modal-header w3-blue">
            <button type="button" class="w3-teal close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Finish Booking <?php echo $email; ?></h4>
        </div>
        
        <div class="modal-body" style="padding:45px 50px 30px 50px ;">
            
            <form method="post">
                <h3><i class="fa fa-user"></i> <b> </b> </h3>
                
                    <div class="form-group"style="background-color: white;">
                        
                        <div class="row w3-round" style="background-color: #E8E8E8;padding:5px 0 10px 0;margin-top:20px;">
                            <span><h5 class="w3-text-black w3-padding"><i> Client's Information (*)</i></h5></span>
                        
                            <div class="col-md-4"> 
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-text-white w3-grey w3-border-white">Name*</span>
                                    <input id="clientName" type="text" class="form-control" name="clientName" placeholder="Name Here..." form="form1" value="<?php echo ucfirst($first_name). " " . ucfirst($last_name); ?>">
                               </div>
                            </div>  
                            
                            <div class="col-md-4">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white ">Phone*</span>
                                    <input type="contact" minlength="11" maxlength="11" class="form-control" id="senderName" placeholder="09876543211" value="<?php echo $phone; ?>" >
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white">Email*</span>
                                    <input type="email" required class="form-control" id="senderName" placeholder="renan@nuevo@gmail.com" value="<?php echo $email; ?>">
                                </div>
                            </div>
                        
                        </div>
                       
                        <div class="row w3-round" style="background-color:#E8E8E8;padding:5px 0 10px 0;margin-top:20px;">
                            <span><h5 class="w3-text-black w3-padding"><i>Receiver's Information (*)</i></h5></span>
                        
                            <div class="col-md-4"> 
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-text-white w3-grey w3-border-white">Name</span>
                                    <input id="clientName" type="text" class="form-control" name="clientName" placeholder="Name Here..." form="form1">
                               </div>
                            </div>  
                            
                            <div class="col-md-4">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white ">Phone</span>
                                    <input type="contact" minlength="11" maxlength="11" class="form-control" id="senderName" placeholder="09876543211">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white ">Address</span>
                                    <input type="address" maxlength="20" class="form-control" id="senderAdd" placeholder="#123 blk456">
                                </div>
                            </div>
                            
                          
                        
                        </div>
                    
                    </div>
                    
                <h3><i class="fa fa-envelope"></i> <b>Shipment Details</b></h3>
            
                    <div class="form-group" style="background-color: white;">
                        
                        <div class="row w3-round" style="background-color: #E8E8E8;padding:5px 0 10px 0;margin-top:20px;">
                            <span><h5 class="w3-text-black w3-padding"><i> Freight Information (*)</i></h5></span>
                        
                            <div class="col-md-3"> 
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-text-white w3-grey w3-border-white">AWB #</span>
                                    <input id="clientName" type="text" class="form-control" name="clientName" placeholder="Name Here..." form="form1">
                               </div>
                            </div>  
                            
                            <div class="col-md-3">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white" width="10%">Desc</span>
                                    <input type="text" minlength="11" maxlength="11" class="form-control" id="senderName" placeholder="Item Description" width="90%">
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white">Preferred Truck Type</span>
                                    <select type="text" required class="form-control" id="senderName" placeholder="renan@nuevo@gmail.com">
                                        <option selected> -- N-Tonner --</option>
                                        <option>5-tonner</option>
                                        <option>10-tonner</option>
                                        <option>20-tonner</option>
                                        <option>30-tonner</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white">Weight</span>
                                    <input type="number" required class="form-control" id="senderName" placeholder="in KG">
                                </div>
                            </div>
                            
                        </div>
                       
                        
                    
                    </div><h3> <i class="fa fa-truck"></i> <b> Travel Details</b></h3>
            
                    <div class="form-group">
                        
                        <div class="row w3-round" style="background-color: #E8E8E8;padding:5px 0 10px 0;margin-top:20px;">
                            <span><h5 class="w3-text-black w3-padding"><i> Transportation (*)</i></h5></span>
                        
                            <div class="col-md-6"> 
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-text-white w3-grey w3-border-white">From</span>
                                    <input id="clientName" type="text" class="form-control" name="clientName" placeholder="Name Here..." form="form1">
                               </div>
                            </div>  
                            
                            <div class="col-md-6">
                                <div class="input-group w3-round approveBoxes">
                                    <span class="input-group-addon w3-grey w3-text-white w3-border-white ">To</span>
                                    <input type="contact" minlength="11" maxlength="11" class="form-control" id="senderName" placeholder="09876543211">
                                </div>
                            </div>
                            
                            
                        
                        </div>
                       
                    </div>
                
                    <div class="row">
                
                        <div class="col-md-3">
                            
                            <button type="submit" class="form-control livesearch w3-text-white" id="finishBook" ><i class="fa fa-check"></i>Update Booking</button>
                            
                        </div><div class="col-md-3">
                            
                            <button type="reset" class="form-control w3-red w3-text-white" id="approveBtn" ><i class="fa fa-refresh"></i>Reset</button>
                            
                        </div>
                    </div>
                </form>
        
               <div class="row">
            <div class="w3-card-12 col-md-10 col-md-offset-1 w3-padding w3-blue w3-round finishNotif">
                <span>You have successfully finished your booking. Please wait for approval. Thank you! <button type="button" id="close" class="w3-text-black pull-right close" ><i class="fa fa-times"></i></button></span>
            </div>
        </div> 
        </div>
        <div class="modal-footer"style="background-color: #707070;">
            <button style="background-color: #404040;" type="submit" class="btn btn-default w3-text-white" data-dismiss="modal"><span class="fa fa-times"></span> close</button>
        </div>
      </div>
      
    </div>
  </div> 


<!----------------------------------------------------------------------------------------------------------------------------------->