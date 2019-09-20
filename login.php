<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Double Submit Cookies Pattern</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css.css" rel="stylesheet">
</head>

<body class="bdy">
  <h1 class="log">Login to Continue</h1>
<div class="containerx">
  <!--login form-->
  <form action="logCheck.php" method="post">
    <div class="row">
      <div class="col">
        <input type="text" name="username" id="username" class="inpt" required placeholder="Username">
        <input type="password" name="password" id="password" class="inpt" required placeholder="Password">
        <input type="submit" value="Login">
      </div>
    </div>
  </form>
</div>
</body>
</html>