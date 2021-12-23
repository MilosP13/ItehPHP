<?php

include 'dbBroker.php';
session_start();
$id= $_SESSION['user_id'];

$sql = "SELECT * FROM `users` INNER JOIN `kategorije` ON users.kategorija_id=kategorije.idk WHERE users.id=$id" ;

$result = mysqli_query($conn,$sql);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moj Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body style="background-color:whitesmoke">
    <div class="container" style="width:500px; margin-top:15%" >



    <?php
        if($result->num_rows > 0)
        {   
            while($row=mysqli_fetch_array($result))
            {
    ?>
        <h2> MOJI PODACI </h2>
    <ul class="list-group" style="box-shadow: 1px 1px 2px 1px">
        
        <li class="list-group-item">Ime: <b> &emsp; <?php echo $row["firstname"]  ?> </b> </li>
        <li class="list-group-item">Prezime: <b>  &emsp;  <?php echo $row["lastname"]  ?> </b></li>
        <li class="list-group-item">Email: <b>  &emsp; <?php echo $row["email"]  ?> </b></li>
        <li class="list-group-item">Kategorija za koju polazem: <b>  &emsp; <?php echo $row["tip"] ?></b></li>

    </ul><br>
    <button onclick="history.back()" type="button" class="btn btn-info">Povratak nazad</button>
<?php
  
     }
  }
?>
    </div>
</body>
<style>
    button:hover{
        transform: scale(1.1);
    }
</style>

</html>