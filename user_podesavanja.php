<?php
include 'dbBroker.php';
session_start();
include 'user_access.php';

$query=  "SELECT * FROM `users` INNER JOIN `kategorije` ON users.kategorija_id=kategorije.idk WHERE users.id != 0";
$result = mysqli_query($conn,$query);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podesavanja</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>  
    
<br/><br/>

<div class="container" style="width:700px;">

    <h3 align="center">Menadzer korisnika</h3>
    <br/>

    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon">Pretraga</span>
            <input type="text" name="search_text" id="search_text" placeholder="Pretrazivanje korisnika" class="form-control"/>
        </div>
    </div>




    <div class="table-resposive">
        <table class="table table-bordered" id="output">
            
            <tr>
                <th width="70%">Ime & Prezime</th>
                <th width="30%">Detalji</th>
            </tr>
            
            <?php
                while($row=mysqli_fetch_array($result))
                {
                 ?>
                 
                 <tr>
                    <td>  <?php echo $row["firstname"],"\r\n" , $row["lastname"]; ?> </td>
                    <td> <input type="button" name="view" value="Detaljnije" id="<?php echo $row["id"]; ?>"  class="btn btn-info btn-s view_data"/> </td>
                 </tr>  
                 
                 <?php     
                }
            ?>
        </table>
        <button onclick="history.back()" type="button" class="btn btn-danger">Povratak nazad</button>
    </div>

</div>



</body>
</html>

<div id="dataModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Informacije o korisniku</h4> 
            </div>
            <div class="modal-body" id="korisnici">
                
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Ugasi</button>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function(){

        $('.view_data').click(function(){
            var korisnici_id = $(this).attr("id");

            $.ajax({
                url : "user_select.php",
                method : "post",
                data: {id: korisnici_id},
                success: function(data){
                    $('#korisnici').html(data);
                    $('#dataModal').modal("show");
                }

            });


           
        });
        
    });
</script>


<script type="text/javascript">

    $(document).ready(function(){

        $("#search_text").keypress(function(){
            $.ajax({
                type: 'POST',
                url: 'user_search.php',
                data: {firstname:$("#search_text").val()},
                success: function(data){
                    $("#output").html(data);
                }

            });

        });

    });

</script>