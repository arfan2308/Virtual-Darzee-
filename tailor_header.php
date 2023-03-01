<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>


<header class="header">

   <div class="flex">
   <a href="#" class="logo"> <img src="images/logon.png" alt="">


      <!-- <a href="admin_page.php" class="logo">VIRTUAL<span>DARZEE</span></a> -->

      <nav class="navbar">
         <a href="tailor_page.php">Home</a>
         <a href="tailor_measurement.php">Measurment For Mens</a>
         <a href="tailor_measurement2.php">Measurment For Womens</a>
         <a href="tailor_orders.php">Orders</a>
         




      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
         <p>username : <span><?php echo $_SESSION['tailor_name']; ?></span></p>
         <p>email : <span><?php echo $_SESSION['tailor_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">logout</a>
         <div>new <a href="login.php">login</a> | <a href="register.php">register</a></div>
      </div>

   </div>

</header>