<?php
session_start();

if(!isset($_SESSION["user_id"])){
    header("Location: pocetna.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoskola EASY</title>
    <link rel="stylesheet" href="stylePocetna.css">
</head>
<body>
    <header>
        <div class="container">
            <section id="Logo">
                <h1><span class="logoEZ">EASY</span></h1>
            </section>
        <nav>
            <ul>
                <li class="trenutna"><a href="pocetna.php"> Pocetna </a></li>
                <li><a href="oNama.php">O nama</a></li>
                <li><a href="#">Dozvole</a>
                    <ul>
                        <li><a href="aKategorija.php">A Kategorija</a></li>
                        <li><a href="bKategorija.php">B Kategorija</a></li>
                        <li><a href="cKategorija.php">C Kategorija</a></li>
                    </ul>
                </li>
                
                <li><a href="galerija.php">Galerija</a></li>
                <li><a href="prijava.php">Prijava</a></li>
                <li><a href="profil.php">Moj Profil</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </nav>
        </div>   
    </header>
<section id="mid">
    <div class="container">
        <h1>POLOZITE ZA VASU PRVU VOZACKU DOZVOLU KOD NAS!</h1>
    </div>
</section>
    <footer>
        <p>AutoskolaEASY, Smederevo, Starina Novaka 1, Copyright &copy; 2021</p>
    </footer>

</body>
</html>