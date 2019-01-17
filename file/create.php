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
    
            
    
    switch (true) {
        case ($_POST['checkbox'] == "checked"):
            if (isset($_POST["id"]))
            {
                $id = $_POST['id'];
                $sql = "UPDATE nieuws 
                    SET titel = $titel, bericht = $bericht, auteur = $auteur
                    WHERE id = $id";
                if (mysqli_query($conn, $sql)) 
                {
                    echo "<script>alert('U heeft een mededeling aangepast.');
                    window.location.href='../docentenomgeving.html';
                    </script>";
                } 
                else 
                {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
            break;

        case ($_POST['checkbox'] != "checked"):
            $sql = "INSERT INTO nieuws(titel, bericht, auteur) VALUES($titel, $bericht, $auteur)";
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('U heeft een mededeling geplaatst.');
                window.location.href='../docentenomgeving.html';
                </script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            break;
        
        case ($_POST['checkbox'] != "checked"):
            if (isset($_POST["id"])) {
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
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            break;
    }
           
    
    $conn->close();
?>