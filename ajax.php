
<?php include('db.php');

if(isset($_POST["destination"]) && !empty($_POST["destination"])){
    //Get all state data
    $query = $mysqli->query("SELECT * FROM city_branch_tbl WHERE cityID = ".$_POST['destination']."  ORDER BY branchName ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select Location</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option name="originLoc" form="form1" id="originLoc" class="w3-green"    value="'.$row['branchID'].'">'.$row['branchName'].'</option>';
        }
    }else{
        echo '<option value="">Location not available</option>';
    }
}
if(isset($_POST["to"]) && !empty($_POST["to"])){
    //Get all state data
    $query = $mysqli->query("SELECT * FROM city_branch_tbl WHERE cityID = ".$_POST['to']."  ORDER BY branchName ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select Location</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option  name="destiLoc" form="form1"  class="w3-green id="destiLoc" value="'.$row['branchID'].'">'.$row['branchName'].'</option>';
        }
    }else{
        echo '<option value="">Location not available</option>';
    }
}
?>