<?php
 require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM corporateappoint WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}


if(isset($_POST["submit"])){
    $companyname = $_POST["companyname"];
    $contactpersonname = $_POST["contactpersonname"];
    $Email = $_POST["Email"];
    $address = $_POST["address"];
    $industrytype = $_POST["industrytype"];
    $nmgarment= $_POST["nmgarment"];
    $phnumber= $_POST["phnumber"];
    $notes= $_POST["notes"];
    $emailquery = " SELECT * FROM users WHERE email='$Email' ";
    $query= mysqli_query($conn,$emailquery);
    $emailcount = mysqli_num_rows($query);


    if($emailcount>0)
    {
    $query1 = "INSERT INTO corporateappoint VALUES ('','$companyname','$contactpersonname','$Email','$address','$industrytype','$nmgarment','$phnumber','$notes')";

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
            <h1><span>Book an Appointment For Corporate Dress </span></h1>
            <p>Kindly provide some details & our representative will contact you or call 8010000666</p>
        </div>
        <div class="main-form">
            <form action="" method="post">
                <div>
                    <span>Company Name </span>
                    <input type="text" name="companyname" id="name"  required>
                </div>
                <div>
                    <span>Contact Person Name</span>
                    <input type="text" name="contactpersonname" id="name"  required>
                </div>
                <div>
                    <span>Your email address ?</span>
                    <input type="email" name="Email" id="name"  required> 
                </div>
                
                <div>
                    <span><Address>Address</Address></span>
                    <input type="text" name="address" id="address"  required>
                </div>
                <div>
                    <span>What is Industry Type ?</span>
                    <input type="text" name="industrytype" id="type" required>
                </div>
                <div>
                    <span>Number of Garments</span>
                    <input type="number" name="nmgarment" id="type" required>
               </div>
               <div>
                    <span>Contact No</span>
                    <input type="text" name="phnumber" id="number"  required>
                </div>

                <div>
                    <span><Notes>Notes</Notes></span>
                    <input type="text" name="notes" id="type"  required>
                </div>


               

                  

                <div id="submit">
                    <input type="submit" value="SUBMIT" id="submit" name="submit">
                </div>
                  <a href="customize.php" class="jump">Jump To Previous Page</a>

            </form>
        </div>
    </div>
</body>

</html>