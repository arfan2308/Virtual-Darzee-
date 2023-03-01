<?php
require "config.php";
session_start();
$tailor_id = $_SESSION['tailor_id'];

// if(!isset($admin_id)){
//    header('location:login.php');
// };

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM measurement WHERE id = '$delete_id'") or die('query failed');
   header('location:tailor_orders.php');
}
if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM measurement2 WHERE id = '$delete_id'") or die('query failed');
   header('location:tailor_orders.php');
}
include 'tailor_header.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>VIRTUAL DARZEE</title>
    <link rel="icon" type="images/x-icon" href="img/logo.png" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/tailor_style.css">

</head>
<body>
   

<section class="messages">

   <h1 class="title">Order Received</h1>

   <div class="box-container">
   <?php
      $select_message = mysqli_query($conn, "SELECT * FROM measurement") or die('query failed');
      if(mysqli_num_rows($select_message) > 0){
         while($fetch_message = mysqli_fetch_assoc($select_message)){
      
   ?>
   
   <div class="box">
      <p> id : <span><?php echo $fetch_message['id']; ?></span> </p>
      <p> Customer Name : <span><?php echo $fetch_message['fullname']; ?></span> </p>
      <p> Customer Id : <span><?php echo $fetch_message['custid']; ?></span> </p>
      <p> Type : <span><?php echo $fetch_message['type']; ?></span> </p>
      <p> Address : <span><?php echo $fetch_message['address']; ?></span> </p>
      <p> Date : <span><?php echo $fetch_message['date']; ?></span> </p>
      <p> Phone no : <span><?php echo $fetch_message['phnumber']; ?></span> </p>
      <p> Neck : <span><?php echo $fetch_message['neck']; ?></span> </p>
      <p> Chest : <span><?php echo $fetch_message['chest']; ?></span> </p>
      <p> Stomach :<span><?php echo $fetch_message['stomach']; ?></span> </p>
      <p> Waist : <span><?php echo $fetch_message['waist']; ?></span> </p>
      <p> Hips : <span><?php echo $fetch_message['hips']; ?></span> </p>
      <p> length : <span><?php echo $fetch_message['length']; ?></span> </p>
      <p> sleevelength : <span><?php echo $fetch_message['sleevelength']; ?></span> </p>
      <p> wrist : <span><?php echo $fetch_message['wrist']; ?></span> </p>
      <p> Crotch : <span><?php echo $fetch_message['crotch']; ?></span> </p>
      <p> Thighwidth : <span><?php echo $fetch_message['length']; ?></span> </p>
      <p> Pantlength : <span><?php echo $fetch_message['pantlength']; ?></span> </p>
      <p> Inseam : <span><?php echo $fetch_message['inseam']; ?></span> </p>
      <p> Kneelength : <span><?php echo $fetch_message['kneelength']; ?></span> </p>




      <a href="tailor_orders.php?delete=<?php echo $fetch_message['id']; ?>" onclick="return confirm('delete this message?');" class="delete-btn">delete message</a>
   </div>
   
   <?php
      };
   }else{
      echo '<p class="empty">you have no messages!</p>';
   }
   ?>
   <?php
      $select_message = mysqli_query($conn, "SELECT * FROM measurement2") or die('query failed');
      if(mysqli_num_rows($select_message) > 0){
         while($fetch_message = mysqli_fetch_assoc($select_message)){
      
   ?>
   
   <div class="box2">
      <p> id : <span><?php echo $fetch_message['id']; ?></span> </p>
      <p> Customer Name : <span><?php echo $fetch_message['fullname']; ?></span> </p>
      <p> Customer Id : <span><?php echo $fetch_message['custid']; ?></span> </p>
      <p> type : <span><?php echo $fetch_message['type']; ?></span> </p>
      <p> address : <span><?php echo $fetch_message['address']; ?></span> </p>
      <p> Date : <span><?php echo $fetch_message['date']; ?></span> </p>
      <p> Phone no : <span><?php echo $fetch_message['phnumber']; ?></span> </p>
      <p> Neck : <span><?php echo $fetch_message['neck']; ?></span> </p>
      <p> Chest : <span><?php echo $fetch_message['chest']; ?></span> </p>
      <p> Stomach :<span><?php echo $fetch_message['stomach']; ?></span> </p>
      <p> Back Shoulder :<span><?php echo $fetch_message['backshoulder']; ?></span> </p>
      <p> Underbust to waist :<span><?php echo $fetch_message['underbusttowaist']; ?></span> </p>
      <p> Waist To Hips :<span><?php echo $fetch_message['waisttohip']; ?></span> </p>
      <p> Waist : <span><?php echo $fetch_message['waist']; ?></span> </p>
      <p> Hips : <span><?php echo $fetch_message['hips']; ?></span> </p>
      <p> length : <span><?php echo $fetch_message['length']; ?></span> </p>
      <p> sleevelength : <span><?php echo $fetch_message['sleevelength']; ?></span> </p>
      <p> wrist : <span><?php echo $fetch_message['wrist']; ?></span> </p>
      <p> Crotch : <span><?php echo $fetch_message['crotch']; ?></span> </p>
      <p> Thighwidth : <span><?php echo $fetch_message['length']; ?></span> </p>
      <p> Pantlength : <span><?php echo $fetch_message['pantlength']; ?></span> </p>
      <p> Inseam : <span><?php echo $fetch_message['inseam']; ?></span> </p>
      <p> Kneelength : <span><?php echo $fetch_message['kneelength']; ?></span> </p>




      <a href="tailor_orders.php?delete=<?php echo $fetch_message['id']; ?>" onclick="return confirm('delete this message?');" class="delete-btn">delete message</a>
   </div>
   
   <?php
      };
   }else{
      echo '<p class="empty">you have no messages!</p>';
   }
   ?>
   </div>

</section>









<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>