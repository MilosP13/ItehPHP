<?php

include 'dbBroker.php';
error_reporting(0);

session_start();


if(isset($_SESSION["user_id"])){
    header("Location: pocetna.php");
}



if (isset($_POST["register-btn"])){

    $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["password"]));

    $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'"));

    if($check_email>0)
    {
        echo "<script>  alert('E-mail koji ste uneli je vec u upotrebi!');  </script>";
      
    }
    else{
        $sql= "INSERT INTO users (firstname,lastname,email,password) VALUES ('$firstname','$lastname','$email','$password')";
        $result = mysqli_query($conn, $sql);

        if($result){
            $_POST["firstname"]="";
            $_POST["lastname"]="";
            $_POST["email"]="";
            $_POST["password"]="";

            echo "<script>  alert('Uspesno ste se registrovali!');  </script>";
        }
        else{
            echo "<script>  alert('Neuspesna registracija pokusajte ponovo!');  </script>";
        }

    }


}

if (isset($_POST["login-btn"])){

    $email = mysqli_real_escape_string($conn, $_POST["l_email"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["l_password"]));

    $check_email = mysqli_query($conn, "SELECT id FROM users WHERE email = '$email' AND password = '$password'");

    if(mysqli_num_rows($check_email)>0)
    {
        $row = mysqli_fetch_assoc($check_email);
        $_SESSION["user_id"] = $row['id'];
        $_SESSION["user_firstname"] = $row['firstname'];
        $_SESSION["user_lastname"] = $row['lastname'];
        $_SESSION["user_email"] = $row['email'];

        header("Location: pocetna.php");
    }
    else{  
        echo "<script>  alert('Neuspesno logovanje na sajt. Pokusajte ponovo!');  </script>";
    }

}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoskola EASY</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
        <div class="main">
            <div class = "form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                    <button type="button" class="toggle-btn" onclick="register()">Prijavi se</button>
                </div>
                <div class="icon">
                <h1>Autoskola EASY</h1>
                </div>

                <form id="login" class="input-group" method="POST" autocomplete="off" action="">
                    <input type="email" class="input-field" placeholder="E-mail adresa" required name="l_email" value="<?php echo $_POST["email"]; ?>">
                    <input type="password" class="input-field" placeholder="Sifra" required name="l_password">
                    <button type="submit" class="submit-btn" name="login-btn">Log In</button>

                </form>

                <form id="register" class="input-group" method="POST" autocomplete="off" action="">
                    <input type="text" class="input-field" placeholder="Ime" required name="firstname" value="<?php echo $_POST["firstname"]; ?>"> 
                    <input type="text" class="input-field" placeholder="Prezime" required name="lastname" value="<?php echo $_POST["lastname"]; ?>"  >
                    <input type="email" class="input-field" placeholder="E-mail adresa" required name="email"  value="<?php echo $_POST["email"]; ?>"  >
                    <input type="password" class="input-field" placeholder="Sifra" required name="password">
                    <button type="submit" class="submit-btn" name="register-btn">Kreiraj nalog</button>

                </form>

            </div>
    
        </div>

<script>
var x=document.getElementById("login");
var y=document.getElementById("register");
var z=document.getElementById("btn");

function register()
{
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "110px";
}

function login()
{
    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left = "0px";
}

</script>



</body>
</html>