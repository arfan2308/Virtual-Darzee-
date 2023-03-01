<?php
require "config.php";
session_start();
$admin_id = $_SESSION['admin_id'];

// if(!isset($admin_id)){
//    header('location:login.php');
// };

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM weddingappoint WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_weddingappnt.php');
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

   <h1 class="title"> Appointments For Fabric & Snitching</h1>

   <div class="box-container">
   <?php
      $select_message = mysqli_query($conn, "SELECT * FROM weddingappoint") or die('query failed');
      if(mysqli_num_rows($select_message) > 0){
         while($fetch_message = mysqli_fetch_assoc($select_message)){
      
   ?>
   <div class="box">
      <p> id : <span><?php echo $fetch_message['id']; ?></span> </p>
      <p> fullname : <span><?php echo $fetch_message['fullname']; ?></span> </p>
      <p> Email : <span><?php echo $fetch_message['Email']; ?></span> </p>
      <p> time : <span><?php echo $fetch_message['time']; ?></span> </p>
      <p> address : <span><?php echo $fetch_message['address']; ?></span> </p>
      <p> date : <span><?php echo $fetch_message['date']; ?></span> </p>
      <p> title : <span><?php echo $fetch_message['title']; ?></span> </p>
      <p> file : <span><?php echo $fetch_message['file']; ?></span> </p>


      <a href="admin_weddingappnt.php?delete=<?php echo $fetch_message['id']; ?>" onclick="return confirm('delete this message?');" class="delete-btn">delete message</a>
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