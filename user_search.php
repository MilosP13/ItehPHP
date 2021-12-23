<?php
    include "dbBroker.php";

    $sql = "SELECT * FROM `users` WHERE id!=0 AND firstname LIKE '%".$_POST['firstname']."%'" ;

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result)){

            echo "<tr>
                    <td>" .$row['firstname']."</td>
                    <td>" .$row['lastname']."</td>
                 </tr> ";

        }
    }
    else{
        echo "<tr><td> 0 korisnika pronadjeno </td></tr>";
    }

?>