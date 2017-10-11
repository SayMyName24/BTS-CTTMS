<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = 'root';
$db = 'bts_db';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error());


function GetAllDestination(){
    
    $list = array();
    //initialize an array
    
    global $mysqli;
    //use the database connection
    
    $query = "SELECT * from destination_tbl order by cityName asc";
    //set the query
    
    $sql = mysqli_query($mysqli,$query);
    //execute the query
    
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    //get the results and store inside the array
    
    return $list;
    //return the array
    
}


function GetAllTruck(){
    
    $list = array();
    //initialize an array
    
    global $mysqli;
    //use the database connection
    
    $query = "SELECT * from trucktype_tbl";
    //set the query
    
    $sql = mysqli_query($mysqli,$query);
    //execute the query
    
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    //get the results and store inside the array
    
    return $list;
    //return the array    
}

function GetUser(){
    
    $list = array();
    //initialize an array
    
    global $mysqli;
    //use the database connection
    
    $query = "SELECT id from users";
    //set the query
    
    $sql = mysqli_query($mysqli,$query);
    //execute the query
    
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    //get the results and store inside the array
    
    return $list;
    //return the array    
}

function GetUserByEmail($email){
    
    $list = array();
    //initialize an array
    
    global $mysqli;
    //use the database connection
    
    $query = "SELECT * from users where email = '". $email ."' ";
    //set the query
    
    $sql = mysqli_query($mysqli,$query);
    //execute the query
    
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    //get the results and store inside the array
    
    return $list;
    //return the array    
}

