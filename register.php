<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// para sa profile.. DECLARATION

$_SESSION['originCity'] = $_POST['origin'];
//$destiId = $_SESSION['destiId'];
//$originId = $_SESSION['originId'];
$_SESSION['destiCity'] = $_POST['to'];
$_SESSION['originLoc'] = $_POST['subOrigin'];
$_SESSION['destiLoc'] = $_POST['toSubOrigin'];
$_SESSION['truckType'] = $_POST['truckType'];
$_SESSION['bigat']=$_POST['bigat'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['phone'] = $_POST['phone'];



// ANTI-INJECTION!
//$destiId2 = $mysqli->escape_string($destiId);
//$originId2 = $mysqli->escape_string($originId);
$originCity = $mysqli->escape_string($_POST['origin']);
$destiCity = $mysqli->escape_string($_POST['to']);
$originLoc = $mysqli->escape_string($_POST['subOrigin']);
$destiLoc = $mysqli->escape_string($_POST['toSubOrigin']);
$bigat = $mysqli->escape_string($_POST['bigat']);    //ito
$truckType = $mysqli->escape_string($_POST['truckType']); //ito
$address = $mysqli->escape_string($_POST['address']); //ito
$phone = $mysqli->escape_string($_POST['phone']); //ito
$first_name = $mysqli->escape_string($_POST['firstname']); //ito
//$last_name = $mysqli->escape_string($_POST['lastname']);
$email = $mysqli->escape_string($_POST['email']); //ito
$password=$mysqli->escape_string(password_hash($_POST['password'],PASSWORD_BCRYPT)); //ito
$hash = $mysqli->escape_string( md5( rand(0,1000) ) ); //ito
$desti = "$destiLoc,$destiCity"; //ito
$origin = "$originLoc,$originCity";//ito



// user dupli checking 
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error());

if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'User with this email already exists!';
    header("location: index.php");
    
}
else { // pag wala sa database
    //For user table

    
    $sql = "INSERT INTO users (first_name,email,hash,password,phone,address) " 
            . "VALUES ('$first_name','$email','$hash','$password','$phone','$adress')";

    
     //For booking table  
    $sql1 = "INSERT INTO booking_tbl ( bookingDate, origin, customerEmail, destination, status, weight) " 
            . "VALUES (NOW(),'$origin','$email','$desti','Pending','$bigat')";


    
    // Add user to the database
    if ( $mysqli->query($sql) and  $mysqli->query($sql1) )  {

        $_SESSION['active'] = 0; //0 kelangan ng account activation
        $_SESSION['logged_in'] = true; // user logged in
        $_SESSION['message'] =
                    
                 "Confirmation link has been sent to $email, please verify
                 your account by clicking on the link in the message!";

        // Send registration confirmation link (verify.php)
        $to      = $email;
        $subject = 'Account Verification (Bossing Trucking Services Inc. )';
        $message_body = '
        Hello '.$first_name.',

        Thank you for signing up!

        Please click this link to activate your account:

        http://localhost/bts/verify.php?email='.$email.'&hash='.$hash;  

//        mail( $to, $subject, $message_body );
        require 'mailer.php'; 
        header("location: index.php"); 

    }
    
    else {
        $_SESSION['message'] = $mysqli->error();
        header("location: error.php");
    }

}