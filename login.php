<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

<div class="login">
  <h2 class="active"> sign in </h2>

  <h2 class="nonactive"> sign up </h2>
  <form action="login.php" method="post">
   
    

    <input type="text" class="text" name="username">
     <span>username</span>

    <br>
    
    <br>
      <input type="text" class="text" name="email">
     <span>E-mail</span>


    <input type="password" class="text" name="password">
    <span>password</span>
    <br>

    <input type="checkbox" id="checkbox-1-1" class="custom-checkbox" />
    <label for="checkbox-1-1">Keep me Signed in</label>
    
    <button class="signin">
      Sign In
      
    </button>
<button class="clear">
  Clear
</button>

    <hr>

    <a href="#">Forgot Password?</a>
  </form>

</div>
    
</body>
<?php

// Connect to the database
$host = "localhost";
$dbUsername = "";
$dbemail = "";
$dbPassword = "";


?>



</body>
</html>



















?>
