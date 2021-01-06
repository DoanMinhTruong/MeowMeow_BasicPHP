<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>DELETE</title>
     <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
     <style>
          .idpet{
               display: none;
          }

     </style>
</head>
<body>
     <?php
     include("config.php");
     include("includes/header.php");


     if(isset($_SESSION['user'])){
          $data = $db->fetchAllPet();
          $i = 1 ;
          foreach($data as $d){
          echo "<div class='pet'>";

               echo "<input class='idpet' value=".$d['id']."></input>";
               echo "<span>".$i++."</span> | <span class='petname'>".$d['petname']."</span> | <span class='petinfo'>".$d['petinfo']."</span>"; 
               echo  '    <img class="pet-item" src="/petshop'.$d['petimg'].'"/>';
               echo "<input class='btn btn-primary btn-del'type='submit' name='submit' value='Delete'>";
               echo "<br>";
          echo "</div>";

          }
     }else {
          header("location: login.php");
     }


     include("includes/footer.php");
?>
</body>
<script type="text/javascript">
     $(document).ready(function(){
          $(".btn-del").click(function(){
               var sr = $(this).parent().find('.pet-item').attr("src");
               sr = sr.replace("/petshop",'..');
               console.log(sr);
               $.ajax({
                    type : "POST",
                    url:'templates/delpet.php',
                    data :{
                         id : $(this).parent().find('.idpet').val(),
                         petimage :  sr,
                    },
                    success : function(){
                         console.log("OK");
                         location.reload();
                    },
               });
          });
     });
</script>
</html>


