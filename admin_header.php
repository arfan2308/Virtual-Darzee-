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
         <a href="admin_page.php">Home</a>
         <a href="admin_products.php">Products</a>
         <a href="admin_orders.php">Orders</a>
         <a href="admin_users.php">Users</a>
         <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Appointment</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="admin_appointment1.php">Custom Tailoring Service For Men</a>
    <a href="admin_appointment2.php">Designer Boutique For Women</a>
    <a href="admin_corporateappnt.php">Corporate Dress Designers</a>
    <a href="admin_weddingappnt.php">Wedding Dress Designers</a>
    <a href="admin_embroideryappnt.php">Custom Embroidery Work</a>
    <a href="admin_repair&alterappnt.php">Alteration & Repair Service At Doorstep</a>

  </div>
</div>
         <a href="admin_contacts.php">Messages</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
         <p>username : <span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">logout</a>
         <div>new <a href="login.php">login</a> | <a href="register.php">register</a></div>
      </div>

   </div>

</header>
<script>
   /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>