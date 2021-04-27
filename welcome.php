<!-- tutorial from https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php -->
<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>



    <!-- <?php
       include('session.php');
    ?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Technicolor</title>
    <nav class="navbar navbar-expand-lg navbar-light" >
<a class="navbar-brand" href="index.html">Technicolor</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="navbar-nav">
  <a class="nav-item nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
  <a class="nav-item nav-link" href="about.html">About</a>
  <a class="nav-item nav-link disabled" href="#">Skills</a>
  <a class="nav-item nav-link" href="#" onClick="rando(); return false;">Random</a>
  <form class="form-inline">
<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>

    <a class="nav-item nav-link" href="logout.php">Logout</a>
</div>
</div>
</nav>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi,
          <!-- <?php echo $login_session; ?> -->
          <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
          </b>. Welcome to Technicolor.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <!-- <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a> -->
    </p>





    <!-- <html">

       <head>
          <title>Welcome </title>
       </head>

       <body>
          <h1>Welcome <?php echo $login_session; ?></h1>
          <h2><a href = "logout.php">Sign Out</a></h2>
       </body>

    </html> -->
</body>
</html>
