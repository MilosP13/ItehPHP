<?php 
include 'dbBroker.php   ';

if(isset($_POST["id"]))
{
    $output = '';
    $query = "SELECT * FROM `users` INNER JOIN `kategorije` ON users.kategorija_id=kategorije.idk WHERE id ='".$_POST["id"]."' ";
    $result = mysqli_query($conn, $query);
    $output .= '
    <div class = "table-resposive" >
        <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
        $output .= '
            <tr>
                <td width="30%"><label>Ime</label></td>
                <td width="70%">'.$row["firstname"].'</td>
            </tr>

            <tr>
                <td width="30%"><label>Prezime</label></td>
                <td width="70%">'.$row["lastname"].'</td>
            </tr>

            <tr>
                <td width="30%"><label>E-mail adresa</label></td>
                <td width="70%">'.$row["email"].'</td>
            </tr>

            <tr>
                <td width="30%"><label>Kategorija</label></td>
                <td width="70%">'.$row["tip"].'</td>
            </tr>

        ';
    }
    $output .="</table></div>";
    echo $output;
    
}

?>