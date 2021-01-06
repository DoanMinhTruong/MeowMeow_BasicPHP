<?php
     include("../config.php");
     if(isset($_POST['submit'])){
          if(isset($_POST['petname']) && isset($_POST['petinfo']) && isset($_FILES['petimage'])){
               $name = $_POST['petname'];
               $info = $_POST['petinfo'];
               $image = $_FILES['petimage'];
               $type = $image['type'];
               $upload = true;
               if($name == "" || $info == "" ){
                    $upload = false;
               }
               if($type != 'image/jpg' && $type!='image/jpeg' && $type!='image/png' && $type!='image/gif'){
                    $upload = false;
               }
               if(file_exists('../upload/image/'.$image['name'])){
                    $upload=false;
               }
               if(!$upload){
                    echo "<h1
                              style='color: red;'
                         >UPLOAD FAILED</h1>";
               }else{
                    if(move_uploaded_file($image['tmp_name'], '../upload/image/'.$image['name'])){
                         echo "<h1
                              style='color: green;'
                         >UPLOAD SUCCESS</h1>";
                         $db->insertPet($name, "/upload/image/".$image['name'] , $info);
                    }
                    else echo "<h1
                              style='color: red;'
                         >UPLOAD FAILED</h1>";
               }
               echo "<meta http-equiv='refresh'content='0.5; url=../add.php'>";

          }
     }
?>
