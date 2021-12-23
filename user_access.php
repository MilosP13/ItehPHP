<?php


    if($_SESSION["user_id"]!=0)
    {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Nemate pristup ovoj opciji');
        window.location. href='pocetna.php';
        </script>");
    }



?>