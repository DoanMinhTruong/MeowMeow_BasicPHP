<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <title>Document</title>
     <style>
          body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen",
              "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue",
              sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
          }
          code {
            font-family: source-code-pro, Menlo, Monaco, Consolas, "Courier New",
              monospace;
          }
          .pet-item{
               width: 320px;
               height: 290px;
               background-size: initial;
               background-repeat: no-repeat;
          }
          .pet-item{
               transition: all .3s ease-in-out;
          }
          .pet-item:hover{
               transform: scale(1.05);
          }
          .nav-link{
               text-decoration: none;
               color: white;

               font-weight: bolder;
          }
          .navbar-brand{
               font-size: 30px;
               font-weight: bolder;
               padding-left: 35px;
          }
          img{
               border-radius: 20%;
          }
     </style>
</head>
<body>
     <div class="navbar navbar-expand-md bg-dark text-white">
               <div class="navbar-brand">PET SHOP</div>
               <ul class="navbar nav ml-auto">
                    <li class="nav-item">
                         <a href="index.php" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item">
                         <a href="add.php" class="nav-link">ADD</a>
                    </li>
                    <li class="nav-item">
                         <a href="https://www.facebook.com/ez.dmt" class="nav-link">CONTACT</a>
                    </li>
                    <?php
                         if(!isset($_SESSION['user'])){
                         echo "     <li class='nav-item'>
                         <a href='login.php' class='nav-link'>LOGIN</a>
                         </li>";
                         }else{
                              echo "<li class='nav-item'>
                                        ".$_SESSION['user']."
                         </li>
                         <li class='nav-item'>
                                        <a href='logout.php' class='nav-link'>Log OUT</a>
                         </li>";
                         }
                    ?>
                    
               </ul>
          </div>     
     <div class="container-fluid">
          

