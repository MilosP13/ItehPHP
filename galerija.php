<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoskola EASY</title>
    <link rel="stylesheet" href="styleGalerija.css">
</head>
<body>
    <header>
        <div class="container">
            <section id="Logo">
                <h1><span class="logoEZ">EASY</span></h1>
            </section>
        <nav>
            <ul>
                <li><a href="pocetna.php"> Pocetna </a></li>
                <li><a href="oNama.php">O nama</a></li>
                <li><a href="#">Dozvole</a>
                    <ul>
                        <li><a href="aKategorija.php">A Kategorija</a></li>
                        <li><a href="bKategorija.php">B Kategorija</a></li>
                        <li><a href="cKategorija.php">C Kategorija</a></li>
                    </ul>
                </li>
                
                <li class="trenutna"><a href="galerija.php">Galerija</a></li>
                <li><a href="prijava.php">Prijava</a></li>
                <li><a href="profil.php">Moj Profil</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </nav>
        </div>   
    </header>

    <div class="wrap">
    <div id="leva" class="strelica">

    </div>
    <div class="slajder">

        <div class="slajd slajd1">
            <div class="slajd-content">
                <span></span>
            </div>
        </div>

        <div class="slajd slajd2">
            <div class="slajd-content">
                <span></span>
            </div>
        </div>

        <div class="slajd slajd3">
            <div class="slajd-content">
                <span></span>
            </div>
        </div>

        <div class="slajd slajd4">
            <div class="slajd-content">
                <span></span>
            </div>
        </div>

            </div>
                <div id="desna" class="strelica">

                </div>
        </div>
    </div>
     <script>
        let sliderImg = document.querySelectorAll('.slajd'),
            leva = document.querySelector('#leva'),
            desna = document.querySelector('#desna'),
            trenutna=0;

            function reset(){
                for(let i=0;i<sliderImg.length;i++){
                    sliderImg[i].style.display = "none";
                }
            }

            function start(){
                reset();
                sliderImg[0].style.display = 'block';
            }

            function levo(){
                reset();
                sliderImg[trenutna-1].style.display = 'block';
                trenutna--;
            }
            
            function desno(){
                reset();
                sliderImg[trenutna+1].style.display = 'block';
                trenutna++;
            }

            leva.addEventListener('click',function(){
                if(trenutna==0){
                    trenutna = sliderImg.length;
                }
                levo();
            });

            desna.addEventListener('click',function(){
                if(trenutna==sliderImg.length-1){
                    trenutna=-1;
                }
                desno();
            });
            start();
    </script>

</body>

<footer>
        <p>AutoskolaEASY, Smederevo, Starina Novaka 1, Copyright &copy; 2021</p>
    </footer>
</html>