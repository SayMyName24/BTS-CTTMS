<?php

    
//    check kung nag eexist ung email
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM users inner join booking_tbl on users.email = booking_tbl.customerEmail WHERE email='$email'");

    if ( $result->num_rows == 0 ){//false
        
        $_SESSION['message'] = "User with that email doesn't exist!";
        header("location: error.php");
    
    }else{//true
        
        $user = $result->fetch_assoc();

        if ( password_verify($_POST['password'], $user['password']) ) {

            $_SESSION['email'] = $user['email'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['last_name'] = $user['last_name'];
            $_SESSION['active'] = $user['active'];
            $_SESSION['phone'] = $user['phone'];

            // user set as logged in
            $_SESSION['logged_in'] = true;

            header("location: customerpanel.php");
        
        }
        else {
            $_SESSION['message'] = "You have entered a wrong password, try again!";
            header("location: error.php");
        }
    }

