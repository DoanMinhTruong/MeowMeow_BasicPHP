<?php
     include("config.php");

     include("includes/header.php");
     if(isset($_SESSION['user'])){ 
          echo '
          <!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <div class="container">
          <form class="addpet-form form-group" enctype="multipart/form-data" method="POST" action="templates/addpet.php">
               Pet Name : <input class="form-control" type="text" name="petname">
               Pet Info : <input class="form-control" type="text" name="petinfo">
               Pet Image: <input class="form-control-file" type="file" name="petimage">
               <input class="btn btn-primary mt-5 p-3" type="submit" name="submit" value="ADD PET">
          </form>
     </div>
</body>
</html>
 
          ';
     }
     else {
          header("location: login.php");

     }

     include("includes/footer.php");
?>
