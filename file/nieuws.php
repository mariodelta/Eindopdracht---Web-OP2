<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #nieuws {
            display: block;
            width:50%;
            position:relative;
            padding-top:18px;
            padding-bottom:18px;
            padding-left:36px;
            padding-right:36px;
            border: 1px solid #ccc;
            background-color: #f3f3f3;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
<div id="nieuws">
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bijenkorf";

    // Maak connectie
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Controleer connectie
    if ($conn->connect_error) {
        die("Connectie mislukt: " . $conn->connect_error);
    } 
    // Maak SQL
    $sql = "SELECT titel, bericht, auteur FROM nieuws WHERE plaatsen = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // De gegevens per rij
        while($row = $result->fetch_assoc()) {
            echo "<h1>" . $row["titel"] . "</h1><br>";
            echo "<h2>" . $row["bericht"] . "</h2><br>";
            echo "<h6>" . $row["auteur"] . "</h6><br>";
            echo "<hr>";
        }
    } else {
        echo "0 resultaten";
    }
    $conn->close();
?>
</div>
</body>
</html>
