<?php
  include("config.php");
  session_start();

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

    <title>Sign Up</title>
  </head>
  <body id="body">
      <div class="form_sign">
          <h1><b>Sign Up</b></h1>
          <form action="" method="post">
              <input type="text" name="name" placeholder="Enter Your Name">
              <input type="email" name="email" placeholder="Enter Your Email">
              <input type="password" name="password" placeholder="Enter Your Password">
              <input type="password" name="cpassword" placeholder="Retype Your Password">
              <button type="submit" name="submit">Sign Up</button>
              <h4><a href="sign.php">Already a member?</a></h4>
            </form>
        </div>

        

        <?php
          if (isset($_SESSION['name'])) {
            header("Location: sign.php");
        }
          if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $cpass = $_POST['cpassword'];
            if($cpass == $pass){

              $query = "INSERT INTO `register`(`Name`,`Email`,`Password`,`Date`) VALUES ('$name','$email','$pass',CURRENT_TIMESTAMP())";
              $sql = mysqli_query($con,$query);
              if($sql){
               echo "<script>alert('Wow! User Registration Completed.'); var count = 1;</script>";
               $username = "";
               $email = "";
               $_POST['password'] = "";
               $_POST['cpassword'] = "";
              }
              else{
                echo "<script>alert('Something went wrong'); var count = 0;</script>";
              }
            }
           
           }
           
        ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    <script>
      if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
      }
      if(count){
        location.href = 'sign.php';
      }
    </script>
  </body>
</html>