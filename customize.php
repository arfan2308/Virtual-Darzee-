<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>VIRTUAL DARZEE</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>CUSTOMIZE</h3>
   <p> <a href="home.php">Home</a> / CUSTOMIZE </p>
</div>

<section class="about">

   <!-- <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

   </div> -->
</section>

<div class="body1">
                <div class="container">
                    <div class="card">
                      <div class="box">
                        <img src="images/author-5.jpg" alt="">
                        <div class="content">
                          
                          <h3>Custom Tailoring Service For Men</h3>
                          <p>Tailored Suits, Shirts, Sherwani, Pathani, we stitch almost everything, Book today and our Expert Designer will visit you at your doorstep</p>
                          <a href="appointment1.php">Book a Home Visit</a>
                        </div>
                      </div>
                    </div>
                  
                    <div class="card">
                      <div class="box">
                        <img src="images/bg-4.jpg" alt="">
                        <div class="content">
                        
                          <h3>Designer Boutique For Women</h3>
                          <p>Your own personalized boutique at your doorstep, Call our expert designer home for all your tailoring needs.</p>
                          <a href="appointment2.php">Book a Home Visit</a>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="box">
                        <img src="images/app 1.jpg" alt="">
                        <div class="content">
                        
                          <h3>Corporate Dress Designers</h3>
                          <p>Are you looking for Corporate Dress designing or tailoring, then you are at the right place, we are expert in designing corporate uniform.</p>
                          <a href="corporate_appoint.php">Book a Home Visit</a>
                        </div>
                      </div>
                    </div>


                    <div class="card">
                      <div class="box">
                        <img src="images/new1.png" alt="">
                        <div class="content">
                        
                          <h3>Wedding Dress Designers</h3>
                          <p>Specially made clothing for your very special day, Custom made clothes for Bride and Groom</p>
                          <a href="wedding_appoint.php">Book a Home Visit</a>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="box">
                        <img src="images/new3.jpg" alt="">
                        <div class="content">
                        
                          <h3>Custom Embroidery Work</h3>
                          <p>We all love those beautiful pieces of embroidery work, We specializes in Custom Embroidery</p>
                          <a href="embroidery_appnt.php">Book a Home Visit</a>
                        </div>
                      </div>
                    </div>


                    <div class="card">
                      <div class="box">
                        <img src="images/new2.png" alt="">
                        <div class="content">
                        
                          <h3>Alteration & Repair Service At Doorstep</h3>
                          <p>Not only do we stitch beautiful pieces of clothing but we help you maintain those too.</p>
                          <a href="repair&alteration_appnt.php">Book a Home Visit</a>
                        </div>
                      </div>
                    </div>
                </div>

                
</div>








<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>