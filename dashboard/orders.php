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
      $notifications = 0;
      $orders = 1;
      include "base.php";
  ?>


      <div class="deals">
         <h1><b>Your Orders</b></h1>
         <img class="order" src="images/delivery-removebg-preview.png" alt="">
         <div class="card card2">
             <img src="images/karly-jones-t-mgZnfCvrg-unsplash.jpg" class="card-img-top">
             <div class="card-body">
                 <h6 class="card-title">Cosmotics</h6>
                 <a href="../home.php" class="btn btn-primary">Shop</a>
             </div>
             </div>
             <div class="card card2">
                 <img src="images/kiran-ck-RZmiDOpv1lM-unsplash.jpg" class="card-img-top">
                 <div class="card-body">
                     <h6 class="card-title">Electronics</h6>
                     <a href="../home.php" class="btn btn-primary">Shop</a>
                 </div>
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