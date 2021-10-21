<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Insertion</title>
  </head>
  <body>
    
    <div class="container-fluid">
    <form action="inserting.php" method="post" enctype="multipart/form-data">
    <label for="image" class="fs-5"><b>Image</b></label>
    <input type="file" name="myfile" id="images">
    <input type="text" name="category" id="category">
    <input type="text" name="subcategory" id="category">
    <button type="submit" name="submit">Insert</button>
</form>
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


<?php
  include "config.php";
  if(isset($_POST['submit']) == true){
  if($con){
      $image = $_FILES['myfile']['name'];
      $file = "images/" . $image;
      $temp = $_FILES['myfile']['tmp_name'];
      $category = $_POST['category'];
      $subcategory = $_POST['subcategory'];
      $query = "INSERT INTO `products`(`image`,`category`,`subcategory`,`date`) VALUES ('$file','$category','$subcategory', CURRENT_TIMESTAMP());";
      $sql = mysqli_query($con, $query);
      if($sql){
          move_uploaded_file($temp,$file);
      }

  }
}
?>

