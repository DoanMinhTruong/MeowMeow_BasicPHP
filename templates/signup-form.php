<?php
     include("../config.php");
     if(isset($_POST['submit'])){
          if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])){
               $user = $_POST['username'];
               $pass = $_POST['password'];
               $email = $_POST['email'];
          }
          $sign = true;
          if($user == '' || $pass == '' || $email ==''){
               $sign = false;
          }
          if($sign){
               $db->insertUser($user, $pass, $email);
               echo "<h1
                              style='color: green;'
                         >Sign Up Success</h1>";
               echo "<meta http-equiv='refresh'content='1; url=../index.php'>";
          }else{
               echo "<h1
                              style='color: red;'
                         >Sign Up Failed</h1>";
               echo "<meta http-equiv='refresh'content='1; url=../signup.php'>";

          }
     } 
?>
