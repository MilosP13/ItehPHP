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

                <form id="login" class="input-group" method="POST" autocomplete="off" action="index.php">
                    <input type="email" class="input-field" placeholder="E-mail adresa" required name="email">
                    <input type="password" class="input-field" placeholder="Sifra" required name="password">
                    <button type="submit" class="submit-btn">Log In</button>

                </form>

                <form id="register" class="input-group" method="POST" autocomplete="off" action="index.php">
                    <input type="text" class="input-field" placeholder="Ime" required name="firstname">
                    <input type="text" class="input-field" placeholder="Prezime" required name="lastname">
                    <input type="email" class="input-field" placeholder="E-mail adresa" required name="email">
                    <input type="password" class="input-field" placeholder="Sifra" required name="password">
                    <button type="submit" class="submit-btn">Kreiraj nalog</button>

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