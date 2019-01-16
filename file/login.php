<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $error = "";
    $success = "";
    
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $output = $host . "<br/>" . $uri;

    switch (true) {
        case ($email == "test@email.com" and $password == "1234"):
            //header("Location: http://localhost/Periode%202/Eindopdracht/docentenomgeving.html");
            //die();
            print $output;
            break;
        
        default:
            # code...
            break;
    }
?>