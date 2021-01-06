<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

     <title>Login</title>
</head>
<body>
     <div class="container pt-5">
          <h1>LOGIN HERE</h1>
          <form class='form-group bg-light p-5 rounded-pill ' action="templates/login-form.php" method="POST">
               <label for="username">UserName : </label>
               <input class='form-control' type="text" name="username" placeholder="username..">
               <label for="password">PassWord : </label>
               <input class='form-control' type="password" name="password" placeholder="password..">
               <input class='mt-4 btn btn-primary' type="submit" name="submit" value="Login">
               <a class='m-5' href="signup.php">Dont have an account?</a>
          </form>
     </div>
</body>
</html>
<?php
     require("config.php");
     if(isset($_SESSION['user'])){
          header("location: index.php");
     }
?>
