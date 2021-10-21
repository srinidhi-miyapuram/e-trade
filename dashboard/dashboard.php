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
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="style.css">

    <title>Dashboard</title>
    


  </head>
  <body>

  <div class="dash">
    
  <?php
    $dashboard = 1;
    $cart = 0;
    $notifications = 0;
    $orders = 0;
    include "base.php";
  ?>

      <div class="body">
        <div class="details">
            <h4>
                <b>Name :</b>
                <span>Lasya</span>
            </h4>
            <h4>
                <b>Email :</b>
                <span>test@gmail.com</span>
            </h4>
            <h4>
                <b>Mobile Number :</b>
                <span>9876543210</span>
            </h4>
        </div>
        <div class="profile">
            <img src="images/christopher-campbell-rDEOVtE7vOs-unsplash.jpg" alt="">
        </div>
    </div>

    <div class="images">
        <div class="card" style="width: 18rem;">
            <img src="images/jenn-lopez-DhiZ2ZUQSS4-unsplash.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="../home.php" class="btn btn-primary">Shop</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="images/kiran-ck-RZmiDOpv1lM-unsplash.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="../home.php" class="btn btn-primary">Shop</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="images/laura-chouette-IMWmOmgP7kQ-unsplash.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="../home.php" class="btn btn-primary">Shop</a>
            </div>
        </div>
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="50px"
            height="50px"
            fill="black"
            id="svg"
            class="bi bi-arrow-right-circle"
            viewBox="0 0 16 16"
        >
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
        </svg>
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