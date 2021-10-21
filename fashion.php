<?php
error_reporting(0);
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  <title>Fashion</title>
</head>

<body>
  <?php
  include "base.php";
  ?>

  <div class="body">
    <div class="side">
      <div class="bar">
        <form action="fashion.php" method="post">
          <div class="input">
            <input type="checkbox" name="dress" value="dress"> Dress
          </div>
          <div class="input">
            <input type="checkbox" name="watch" value="watch"> Watch
          </div>

          <div class="submit">
            <button name="submit" type="submit">Apply</button>
          </div>
        </form>

      </div>
      <div class="line"></div>
    </div>

    <div class="block">
      <table>
        <tr>
          <th></th>
          <th></th>
          <th></th>
        </tr>
        <?php
        include "config.php";
        $sub = isset($_POST['submit']);
        $check1 = $_POST['dress'];
        $check2 = $_POST['watch'];

        $test1 = (isset($check1) == true);
        $test2 = (isset($check2) == true);


        if ((empty($check1) && empty($check2)) || (!empty($check1) && !empty($check2))) {
          $sql = "SELECT * FROM products WHERE category='fashion'";
          $query = mysqli_query($con, $sql);
          $row = mysqli_num_rows($query);
          $count = 0;
          if ($row > 0) {
            while ($fetch = mysqli_fetch_assoc($query)) {
              $image = $fetch['image'];
              $category = $fetch['category'];
              if ($count == 3) {
                echo "</tr>";
                $count = 0;
              }
              if ($count == 0) {
                echo "<tr>";
        ?>
                <td>
                  <div class="box1">
                    <div class="box">
                      <img src="<?php echo $image; ?>" alt="">
                      <div class="group">
                        <h5><b><?php echo $category; ?></b></h5>
                        <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $fetch['id']; ?>">Shop</button>
                      </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $fetch['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?php echo $fetch['subcategory']; ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body" style="background-color: beige;">
                            <img src="<?php echo $image; ?>" alt="">
                            <h2><b>Rs &nbsp;<?php echo $fetch['cost']; ?></b></h2>
                            <div class="line" style="display: flex;font-size: 25px;">
                              <h2>
                                <b style="cursor: pointer;width: 40px;height: 40px;" onclick="increment(<?php echo $fetch['id']; ?>)">+</b>
                                <h5>
                                  &nbsp;&nbsp;<b id="number<?php echo $fetch['id']; ?>" style="font-size: 35px;color:brown;">1</b>
                                </h5> &nbsp; &nbsp;
                                <b style="cursor: pointer;width: 40px;height: 40px;" onclick="decrement(<?php echo $fetch['id']; ?>)">-</b>
                              </h2>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary">Order</button>
                            <button type="button" class="btn btn-primary">Add to Cart</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              <?php
              }
              if ($count > 0) {
              ?>
                <td>
                  <div class="box1">
                    <div class="box">
                      <img src="<?php echo $image; ?>" alt="">
                      <div class="group">
                        <h5><b><?php echo $category; ?></b></h5>
                        <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $fetch['id']; ?>">Shop</button>
                      </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $fetch['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?php echo $fetch['subcategory']; ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body" style="background-color: beige;">
                            <img src="<?php echo $image; ?>" alt="">
                            <h2><b>Rs &nbsp;<?php echo $fetch['cost']; ?></b></h2>
                            <div class="line" style="display: flex;font-size: 25px;">
                              <h2>
                                <b style="cursor: pointer;width: 40px;height: 40px;" onclick="increment(<?php echo $fetch['id']; ?>)">+</b>
                                <h5>
                                  &nbsp;&nbsp;<b id="number<?php echo $fetch['id']; ?>" style="font-size: 35px;color:brown;">1</b>
                                </h5> &nbsp; &nbsp;
                                <b style="cursor: pointer;width: 40px;height: 40px;" onclick="decrement(<?php echo $fetch['id']; ?>)">-</b>
                              </h2>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary">Order</button>
                            <button type="button" class="btn btn-primary">Add to Cart</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              <?php
              }
              ?>
    </div>
    <?php
              $count++;
            }
          }
        }
        if (isset($sub) == true) {
          if ($test1 && $test2) {

            $sql = "SELECT * FROM products WHERE category='fashion'";
            $query = mysqli_query($con, $sql);
            $row = mysqli_num_rows($query);
            $count = 0;
            if ($row > 0) {
              while ($fetch = mysqli_fetch_assoc($query)) {
                $image = $fetch['image'];
                $category = $fetch['category'];
                if ($count == 3) {
                  echo "</tr>";
                  $count = 0;
                }
                if ($count == 0) {
                  echo "<tr>";
    ?>
        <td>
          <div class="box1">
            <div class="box">
              <img src="<?php echo $image; ?>" alt="">
              <div class="group">
                <h5><b><?php echo $category; ?></b></h5>
                <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $fetch['id']; ?>">Shop</button>
              </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal<?php echo $fetch['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $fetch['subcategory']; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body" style="background-color: beige;">
                    <img src="<?php echo $image; ?>" alt="">
                    <h2><b>Rs &nbsp;<?php echo $fetch['cost']; ?></b></h2>
                    <div class="line" style="display: flex;font-size: 25px;">
                      <h2>
                        <b style="cursor: pointer;width: 40px;height: 40px;" onclick="increment(<?php echo $fetch['id']; ?>)">+</b>
                        <h5>
                          &nbsp;&nbsp;<b id="number<?php echo $fetch['id']; ?>" style="font-size: 35px;color:brown;">1</b>
                        </h5> &nbsp; &nbsp;
                        <b style="cursor: pointer;width: 40px;height: 40px;" onclick="decrement(<?php echo $fetch['id']; ?>)">-</b>
                      </h2>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary">Order</button>
                    <button type="button" class="btn btn-primary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </td>
      <?php
                }
                if ($count > 0) {
      ?>
        <td>
          <div class="box1">
            <div class="box">
              <img src="<?php echo $image; ?>" alt="">
              <div class="group">
                <h5><b><?php echo $category; ?></b></h5>
                <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $fetch['id']; ?>">Shop</button>
              </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal<?php echo $fetch['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $fetch['subcategory']; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body" style="background-color: beige;">
                    <img src="<?php echo $image; ?>" alt="">
                    <h2><b>Rs &nbsp;<?php echo $fetch['cost']; ?></b></h2>
                    <div class="line" style="display: flex;font-size: 25px;">
                      <h2>
                        <b style="cursor: pointer;width: 40px;height: 40px;" onclick="increment(<?php echo $fetch['id']; ?>)">+</b>
                        <h5>
                          &nbsp;&nbsp;<b id="number<?php echo $fetch['id']; ?>" style="font-size: 35px;color:brown;">1</b>
                        </h5> &nbsp; &nbsp;
                        <b style="cursor: pointer;width: 40px;height: 40px;" onclick="decrement(<?php echo $fetch['id']; ?>)">-</b>
                      </h2>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary">Order</button>
                    <button type="button" class="btn btn-primary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </td>
      <?php
                }
      ?>
  </div>
  <?php
                $count++;
              }
            }
          } elseif ($test1) {

            $sql = "SELECT * FROM products WHERE subcategory='dress'";
            $query = mysqli_query($con, $sql);
            $row = mysqli_num_rows($query);
            $count = 0;
            if ($row > 0) {
              while ($fetch = mysqli_fetch_assoc($query)) {
                $image = $fetch['image'];
                $category = $fetch['category'];
                if ($count == 3) {
                  echo "</tr>";
                  $count = 0;
                }
                if ($count == 0) {
                  echo "<tr>";
  ?>
    <td>
      <div class="box1">
        <div class="box">
          <img src="<?php echo $image; ?>" alt="">
          <div class="group">
            <h5><b><?php echo $category; ?></b></h5>
            <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $fetch['id']; ?>">Shop</button>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal<?php echo $fetch['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $fetch['subcategory']; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="background-color: beige;">
                <img src="<?php echo $image; ?>" alt="">
                <h2><b>Rs &nbsp;<?php echo $fetch['cost']; ?></b></h2>
                <div class="line" style="display: flex;font-size: 25px;">
                  <h2>
                    <b style="cursor: pointer;width: 40px;height: 40px;" onclick="increment(<?php echo $fetch['id']; ?>)">+</b>
                    <h5>
                      &nbsp;&nbsp;<b id="number<?php echo $fetch['id']; ?>" style="font-size: 35px;color:brown;">1</b>
                    </h5> &nbsp; &nbsp;
                    <b style="cursor: pointer;width: 40px;height: 40px;" onclick="decrement(<?php echo $fetch['id']; ?>)">-</b>
                  </h2>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary">Order</button>
                <button type="button" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </td>
  <?php
                }
                if ($count > 0) {
  ?>
    <td>
      <div class="box1">
        <div class="box">
          <img src="<?php echo $image; ?>" alt="">
          <div class="group">
            <h5><b><?php echo $category; ?></b></h5>
            <button type="submit">Shop</button>
          </div>
        </div>
      </div>
    </td>
  <?php
                }
  ?>
  </div>
  <?php
                $count++;
              }
            }
          } elseif ($test2) {

            $sql = "SELECT * FROM products WHERE subcategory='watch'";
            $query = mysqli_query($con, $sql);
            $row = mysqli_num_rows($query);
            $count = 0;
            if ($row > 0) {
              while ($fetch = mysqli_fetch_assoc($query)) {
                $image = $fetch['image'];
                $category = $fetch['category'];
                if ($count == 3) {
                  echo "</tr>";
                  $count = 0;
                }
                if ($count == 0) {
                  echo "<tr>";
  ?>
    <td>
      <div class="box1">
        <div class="box">
          <img src="<?php echo $image; ?>" alt="">
          <div class="group">
            <h5><b><?php echo $category; ?></b></h5>
            <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $fetch['id']; ?>">Shop</button>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal<?php echo $fetch['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $fetch['subcategory']; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="background-color: beige;">
                <img src="<?php echo $image; ?>" alt="">
                <h2><b>Rs &nbsp;<?php echo $fetch['cost']; ?></b></h2>
                <div class="line" style="display: flex;font-size: 25px;">
                  <h2>
                    <b style="cursor: pointer;width: 40px;height: 40px;" onclick="increment(<?php echo $fetch['id']; ?>)">+</b>
                    <h5>
                      &nbsp;&nbsp;<b id="number<?php echo $fetch['id']; ?>" style="font-size: 35px;color:brown;">1</b>
                    </h5> &nbsp; &nbsp;
                    <b style="cursor: pointer;width: 40px;height: 40px;" onclick="decrement(<?php echo $fetch['id']; ?>)">-</b>
                  </h2>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary">Order</button>
                <button type="button" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </td>
  <?php
                }
                if ($count > 0) {
  ?>
    <td>
      <div class="box1">
        <div class="box">
          <img src="<?php echo $image; ?>" alt="">
          <div class="group">
            <h5><b><?php echo $category; ?></b></h5>
            <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $fetch['id']; ?>">Shop</button>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal<?php echo $fetch['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $fetch['subcategory']; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="background-color: beige;">
                <img src="<?php echo $image; ?>" alt="">
                <h2><b>Rs &nbsp;<?php echo $fetch['cost']; ?></b></h2>
                <div class="line" style="display: flex;font-size: 25px;">
                  <h2>
                    <b style="cursor: pointer;width: 40px;height: 40px;" onclick="increment(<?php echo $fetch['id']; ?>)">+</b>
                    <h5>
                      &nbsp;&nbsp;<b id="number<?php echo $fetch['id']; ?>" style="font-size: 35px;color:brown;">1</b>
                    </h5> &nbsp; &nbsp;
                    <b style="cursor: pointer;width: 40px;height: 40px;" onclick="decrement(<?php echo $fetch['id']; ?>)">-</b>
                  </h2>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary">Order</button>
                <button type="button" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </td>
  <?php
                }
  ?>
  </div>
<?php
                $count++;
              }
            }
          }
        }

?>
</table>
</div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#00ced1" fill-opacity="1" d="M0,256L0,0L1440,0L1440,320L0,320L0,320Z"></path>
</svg>
<footer>

  <div class="foot">

    <div class="about">
      <h2><b>Get To Know Us</b></h2>
      <div class="links">
        <a href="#"><b>About</b></a>
        <a href="#"><b>Electronics</b></a>
        <a href="#"><b>Fashion</b></a>
        <a href="#"><b>Cosmotics</b></a>
      </div>
    </div>

    <div class="contact">
      <h2><b>Contact Us</b></h2>
      <div class="follow">
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>

      </div>
    </div>

    <div class="help">
      <h2><b>Let Us Help You</b></h2>
      <div class="linking">
        <a href="#"><b>Your Account</b></a>
        <a href="#"><b>Returns Center</b></a>
        <a href="#"><b>Help</b></a>
      </div>
    </div>

    <div class="right">
      <h6><b>All rights are reserved</b></h6>
    </div>

  </div>

</footer>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->

<script>
  var count = 1;

  function checker($a) {
    var res = document.getElementById('number' + $a).innerText;
    if (res == 1) {
      count = 1;
    }
  }

  function increment($a) {
    checker($a);
    count += 1;
    document.getElementById('number' + $a).innerText = count;
  }

  function decrement($a) {
    checker($a);
    if (count > 1) {
      count -= 1;
      document.getElementById('number' + $a).innerText = count;

    }
  }
</script>

</body>

</html>