<?php
  include_once 'includes/session.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="css/site.css">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <title><?php echo $title ?></title>
  </head>
  <body> <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">IT Conference</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav  me-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="viewrecords.php">View Attendees</a>
            </li>
          </ul>
          <ul class="navbar-nav  ml-auto">
            <?php 
              if (!isset($_SESSION['userid'])){
            ?>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.php">Login</a>
              </li>
              <?php } else {?>
                <li class="nav-item">
                <span>Hello <?php echo $_SESSION['username'] ?>!</span>
                <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
              </li>
              <?php } ?>

          </ul>
        </div>
      </div>
  </nav>
    <div class="container">
     
  </br>