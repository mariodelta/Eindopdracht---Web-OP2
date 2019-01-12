<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == "Yardi@basischooldebijenkorf.nl" && $password == "Welkom123")
    {
        header("Location: ../docentenomgeving.html");
        die();
    }
    else
    {
        echo ("De ingevoerde inloggegevens zijn onjuist.");
    }
?>