<?php
require "config.php";
session_start();
$admin_id = $_SESSION['admin_id'];

// if(!isset($admin_id)){
//    header('location:login.php');
// };

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM appointment1 WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_appointment1.php');
}
include 'admin_header.php'; 

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
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   

<section class="messages">

   <h1 class="title">Corporate Appointment</h1>

   <div class="box-container">
   <?php
      $select_message = mysqli_query($conn, "SELECT * FROM corporateappoint") or die('query failed');
      if(mysqli_num_rows($select_message) > 0){
         while($fetch_message = mysqli_fetch_assoc($select_message)){
      
   ?>
   <div class="box">
      <p> id : <span><?php echo $fetch_message['id']; ?></span> </p>
      <p> companyname : <span><?php echo $fetch_message['companyname']; ?></span> </p>
      <p> contactpersonname : <span><?php echo $fetch_message['contactpersonname']; ?></span> </p>
      <p> Email : <span><?php echo $fetch_message['Email']; ?></span> </p>
      <p> address : <span><?php echo $fetch_message['address']; ?></span> </p>
      <p> industrytype : <span><?php echo $fetch_message['industrytype']; ?></span> </p>
      <p> nmgarments : <span><?php echo $fetch_message['nmgarments']; ?></span> </p>
      <p> phnumber : <span><?php echo $fetch_message['phnumber']; ?></span> </p>
      <p> notes : <span><?php echo $fetch_message['notes']; ?></span> </p>
      <a href="admin_corporateappnt.php?delete=<?php echo $fetch_message['id']; ?>" onclick="return confirm('delete this message?');" class="delete-btn">delete message</a>
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