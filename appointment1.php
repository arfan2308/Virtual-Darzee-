
<!-- php code -->
<?php
 require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM appointment1 WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
if(isset($_POST["submit"])){
    $fullname = $_POST["fullname"];
    $Email = $_POST["Email"];
    $time = $_POST["time"];
    $address = $_POST["address"];
    $date = $_POST["date"];
    $phnumber= $_POST["phnumber"];
    $emailquery = " SELECT * FROM users WHERE email='$Email' ";
    $query= mysqli_query($conn,$emailquery);
    $emailcount = mysqli_num_rows($query);
        
    if($emailcount>0)
        {
        $query1 = "INSERT INTO appointment1 VALUES ('','$fullname','$Email','$time','$address','$date',$phnumber)";

        mysqli_query($conn, $query1);

               ?>
            <script>
                alert('Thankyou for appointing us, will reach to you soon');
            </script>
            <?php
        }
       else{
    
        ?>
            <script>
                alert('Please Fill The Form!!');
            </script>
        <?php 
    } 
    
}
// header('location:home.php');
?>




<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="appointment1.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <title>Appointment Page</title>
    <link rel="stylesheet" href="css/appointment.css">

</head>

<body class="main_bg">
    <img src="images/logon.png" alt="">
    <div class="form">
        <div class="form-text">
            <h1><span>Book an Appointment For Mens</span></h1>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, fugit.</p> -->
        </div>
        <div class="main-form">
            <form action="" method="post">
                <div>
                    <span>Your full name </span>
                    <input type="text" name="fullname" id="name"  required>
                </div>
                <div>
                    <span>Your email address ?</span>
                    <input type="email" name="Email" id="name"  required> 
                </div>
                <div>
                    <!-- <---this is the select option--->
                    <span>Select Time</span>
                    <input type="time" class="box" name="time" id="time" required>
                        <!-- <option value="">---select time slot---</option>
                        <option value="1">9:00-10:00</option>
                        <option value="2">10:00-11.00</option>
                        <option value="3">11.00-12.00</option>
                        <option value="4">12.00-13.00</option>
                        <option value="5">13.00-14.00</option>
                        <option value="6">14.00-15.00</option>
                        <option value="7">15.00-16.00</option>
                        <option value="8">16.00-17.00</option>
                        <option value="8">18.00-19.00</option> -->
                    <!-- <---this is the select option--->
                </div>
                <div>
                    <span><Address>Address</Address></span>
                    <input type="text" name="address" id="time"  required>
                </div>
                <div>
                    <span>What is the date ?</span>
                    <input type="date" name="date" id="date" required>
                </div>
                <div>
                    <span>Contact No</span>
                    <input type="text" name="phnumber" id="number"  required>
                </div>
                <!-- <div class="col-md-4">
                    <div class="form-group">
                    <div class="right" id="appt">
                    <div class="upload-btn-wrapper UploadCustom">
                    
                    <button class="btn">Upload Reference Design <span class="small">( Select One or More )</span></button>
                    <label class="TxtForm">Upload Reference Design</label>
                    <input type="file" id="book-fileupload" name="book-fileupload[]" multiple />
                    </div>
                    </div>
                    </div>
                  </div> -->

                  

                <div id="submit">
                    <input type="submit" value="SUBMIT" id="submit" name="submit">
                </div>
                  <a href="customize.php" class="jump">Jump To Previous Page</a>

            </form>
        </div>
    </div>
</body>

</html>