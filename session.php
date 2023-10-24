  <?php
  session_start();
  if(isset($_SESSION['loggedin'])) header("Location: secret.php");
  ?>
  <!DOCTYPE html>
  <html>
   <head>
   <title>Log-in page</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   </head>
   <body>
   <center>
   <?php include 'HeaderAndBackground.php'; ?>
    <h1>Welcome to the private message service.</h1><br>
   <form action="login.php" method="POST">
    Login name: <input type="text" name="username" required pattern="[A-Za-z]{2,}" title="Please provide a username with no less than 2 characters"><br>
    Password: <input type="password" name="password" required pattern=".{6,}" title="Please provide a password with no less than 6 characters"><br>
    <input type="submit">
   </form>
   <?php include 'Footer2.php'; ?>
  </center>
  </body>
 </html>
