<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $error = "";
    $success = "";

    if ($email == "Yardi@basischooldebijenkorf.nl" && $password == "Welkom123")
    {
        header("Location: ../docentenomgeving.html");
        die();
    }
?>