<?php
     include("../config.php");
     if($_POST['id'] && $_POST['petimage']){
          $id = $_POST['id'];
          $img = $_POST['petimage'];
          $db->deletePet($id);
          unlink($img);
          header("../delete.php");
     }
?>
