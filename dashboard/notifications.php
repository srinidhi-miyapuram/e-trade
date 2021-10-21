<?php
//   error_reporting(0);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Dashboard</title>


  </head>
  <body>

  <div class="dash">
    <?php
      $dashboard = 0;
      $cart = 0;
      $notifications = 1;
      $orders = 0;
      include "base.php";
    ?>

      <div class="note">
        <h1><b>Notifications</b></h1>
        <img src="images/bell-removebg-preview.png" alt="" class="bell">
        <div class="alert alert-primary" role="alert">
            New products are here<a href="#" class="alert-link">&nbsp;Shop Now</a>. 
          </div>
          <div class="alert alert-secondary" role="alert">
            Hurry Up, the summer sale is ending soon <a href="#" class="alert-link">&nbsp;Shop Now</a>.
          </div>
          <div class="alert alert-success" role="alert">
            New products are here, you may like them <a href="#" class="alert-link">&nbsp;Shop Now</a>.
          </div>
          <div class="alert alert-danger" role="alert">
            Hurry Up, have a look at these products. <a href="#" class="alert-link">&nbsp;Shop Now</a>.
          </div>
          <div class="alert alert-warning" role="alert">
            Have a look at these amazing products. <a href="#" class="alert-link">&nbsp;Shop Now</a>.
          </div>
          <div class="alert alert-info" role="alert">
            Amazing products are here, have a look at them. <a href="#" class="alert-link">&nbsp;Shop Now</a>.
          </div>
          <div class="alert alert-success" role="alert">
            New products are here. <a href="#" class="alert-link">&nbsp;Shop Now</a>.
          </div>
          <div class="alert alert-dark" role="alert">
            Sale, winter sale is here. <a href="#" class="alert-link">&nbsp;Shop Now</a>. 
          </div>
    </div>
      
  </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->  
  </body>
</html>