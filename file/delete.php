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
if (isset($_POST["id"]))
{
    $id = $_POST['id'];
    $sql = "DELETE FROM nieuws 
        WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('U heeft een mededeling verwijderd.');
        window.location.href='../docentenomgeving.html';
        </script>";
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
}

$conn->close();
?>