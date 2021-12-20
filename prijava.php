<?php

    include 'dbBroker.php';
    session_start();
    error_reporting(0);
   
    if(isset($_POST['update']))
    {
        $id = $_SESSION['user_id'];
        $kategorija = $_POST['kategorija'];
        $password = mysqli_real_escape_string($conn, md5($_POST["password"]));

        $query = "UPDATE `users` SET  `firstname`='$_POST[firstname]', `lastname`='$_POST[lastname]', `email`='$_POST[email]',
        `password`='$password',  `kategorija_id`='$kategorija'    WHERE id=$id";

        $query_run = mysqli_query($conn,$query);

       if($query_run)
       {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Uspesna prijava!');
        window.location. href='galerija.php';
        </script>");
        
       }
       else{
        echo "<script>  alert('Neuspesna prijava!');  </script>";
       }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylePrijava.css">
    <title>Prijava</title>

</head>
<body>
    <center>
        <h1> Prijavite se za polaganje određene kategorije </h1>

            <form action="" method="POST">

                    <input type="text" class="input-field" placeholder="Ime" required name="firstname" value="<?php echo $_POST["lastname"]; ?>"> <br>
                    <input type="text" class="input-field" placeholder="Prezime" required name="lastname" value="<?php echo $_POST["lastname"]; ?>"  > <br>
                    <input type="email" class="input-field" placeholder="E-mail adresa" required name="email"  value="<?php echo $_POST["email"]; ?>"  > <br>
                    <input type="password" class="input-field" placeholder="Sifra" required name="password"> <br>

                    <select id="kattegorija" name="kategorija">
                     <option value="1" name="A-Kategorija">A-kategorija</option>
                     <option value="2" name="B-Kategorija">B-kategorija</option>
                     <option value="3" name="C-Kategorija">C-kategorija</option>
                    </select> <br>

                   

                    <button type="submit" class="submit-btn" name="update" value="PRIJAVA">PRIJAVI SE</button>

            </form>
                    <p>Ili procitaj vise <a href="oNama.php">o nama</a></p>
    </center>
</body>
</html>