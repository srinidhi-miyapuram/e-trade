<div class="board">
       <div class="head">
          <h2><a href="../home.php"><b>Welcome Back</b></a></h2>
       </div>
       <div class="content">
          <div class="count <?php if($dashboard == 1){ echo 'active'; } ?>">
             <a href="dashboard.php"><b><span>Dashboard</span></b></a>
          </div>
          <div class="count <?php if($cart == 1){ echo 'active'; } ?>">
             <a href="cart.php"><b><span>Customers</span></b></a>
          </div>
          <div class="count <?php if($orders == 1){ echo 'active'; } ?>">
             <a href="orders.php"><b><span>Orders</span></b></a>
          </div>
          <div class="count <?php if($notifications == 1){ echo 'active'; } ?>">
             <a href="notifications.php"><b><span>Notifications</span></b></a>
          </div>
          
          <div class="count">
             <a href="signout.php"><b><span>Sign Out</span></b></a>
          </div>
         </div>
         
      </div>