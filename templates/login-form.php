<?php
     include("../config.php");
     if(isset($_POST['submit'])){
          if(isset($_POST['username']) && isset($_POST['password'])){
               $user = $_POST['username'];
               $pass = $_POST['password'];
               $user_check = $db->checkUser($user);
               $login = false;
               foreach($user_check as $u){
                    if($u['username'] == $user && $u['password'] == $pass){
                         echo "<h1
                              style='color: green;'
                         >Login Success</h1>";
                         $login = true;
                         $_SESSION['user'] = $user;
                         echo "<meta http-equiv='refresh'content='1; url=../index.php'>";
                    }
               }
               if(!$login){
                    echo "<h1
                         style='color: red;'
                    >Login Failed</h1>";
               echo "<meta http-equiv='refresh'content='0.5; url=../login.php'>";
               }
          }
     }
?>
