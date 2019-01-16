<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bijenkorf";

    $titel = "'" . $_POST['titel'] . "'";
    $bericht = "'" . $_POST['bericht'] . "'";
    $auteur = "'" . $_POST['auteur']. "'";
    // Maak connectie
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Controleer connectie
    if ($conn->connect_error) {
        die("Connectie mislukt: " . $conn->connect_error);
    } 
    // Maak SQL
    $sql = "INSERT INTO nieuws(titel, bericht, auteur) VALUES($titel, $bericht, $auteur)";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    $conn->close();
?>