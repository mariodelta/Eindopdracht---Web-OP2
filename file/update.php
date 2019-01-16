<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bijenkorf";

    $id = $_GET['id'];
    // Maak connectie
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Controleer connectie
    if ($conn->connect_error) {
        die("Connectie mislukt: " . $conn->connect_error);
    } 
    // Maak SQL
    $sql = "UPDATE nieuws SET plaatsen=0 WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Update gelukt";
        header("Location:admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    $conn->close();
?>