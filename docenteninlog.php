<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/docentenomgeving.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hoofdpagina: Basisschool de Bijenkorf</title>
</head>
<body>
    <div class="header">        
        <a href="#default" class="logo"><img class="logo" src="afb/Logo.png" alt="Logo bassischool"></a>       
        <div class="titeltekst">Basisschool de Bijenkorf</div>
        <div id="main">
            <button class="openbtn" onclick="openNav()">&#9776;</button> 
        </div>

        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php">Startpagina</a>
            <a href="fullcalender.html">Agenda</a>
            <a href="Overons.html">Over Ons</a>
            <a href="Fotoalbum.html">Fotoalbum</a>
            <a href="docenteninlog.php">Docentenomgeving</a>
          </div>
        
    </div>
    <article>
        <div class="contentbox">
            <h2>Docentenomgeving</h2>
            <p>Dit is de Docentenomgeving van onze school</p>
            <p>Hier kunnen docenten inloggen</p>
            <form method="POST" action="docenteninlog.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail Adres</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="E-mail Adres">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Wachtwoord</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" required placeholder="Wachtwoord">
                </div>
                    <button type="submit" class="btn btn-primary">Inloggen</button>
            </form>
        </div>        
    </article>
    <div class="footer">
            <p>Adres: Projectlaan 84b Vliedorp</p>
            <p>Wij zijn ook te vinden op:</p><a href="https://www.facebook.com/debijenkorfgouda" class="fa fa-facebook"></a><a href="https://twitter.com/bsdebijenkorf" class="fa fa-twitter"></a><a href="https://www.linkedin.com/in/astrid-nuijten-492bb770/?originalSubdomain=nl" class="fa fa-linkedin"></a>
    </div>
</body>

<?php
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'docentenomgeving.html';
        

        switch (true) {
            case ($email == "test@email.com" and $password == "1234"):
                header("Location: http://$host$uri/$extra");
                die();
                break;
            
            default:
            echo "<script>alert('Het ingevoerde e-mail adres of wachtwoord is onjuist.')</script>";
                break;
        }
    }
    
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="file/Javafunctions.js"></script>
</html>