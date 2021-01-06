<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <title>Sign Up</title>
</head>
<body>
     <div class="container">
          <h1>SIGNUP HERE</h1>
          <form class='form-group bg-light p-5 rounded-pill' method="POST" action="templates/signup-form.php">
               <label for="">Username : </label>
               <input class='form-control' type="text" name="username" placeholder="username..">
               <label for="">Password : </label>
               <input class='form-control' type="password" name="password" placeholder="password..">
               <label for="">Email : </label>
               <input class='form-control' type="text" name="email" placeholder="email..">
               <input class='mt-4 btn btn-primary' type="submit" name="submit" value="Sign Up">
               <a class='p-5' href="login.php">Have an account ?</a>
          </form>
     </div>
</body>
</html>

