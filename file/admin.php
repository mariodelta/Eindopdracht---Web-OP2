<table>
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
    $sql = "SELECT id, titel, bericht FROM nieuws WHERE plaatsen = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // De gegevens per rij
        while($row = $result->fetch_assoc()) {
            echo "<td><td><a href='update.php?id=" . $row["id"] . "'>" . $row["titel"] . "</a></td><td>" . $row["bericht"] . "</td></tr>";
        }
    } else {
        echo "0 resultaten";
    }
    $conn->close();
?>
</table>