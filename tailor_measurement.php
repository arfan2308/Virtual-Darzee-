<?php 
require "config.php";
session_start();

if(isset($_POST["submitbtn"])){
    $fullname = $_POST["fullname"];
    $custid = $_POST["custid"];
    $type = $_POST["type"];
    $address = $_POST["address"];
    $date = $_POST["date"];
    $phnumber= $_POST["phnumber"];
    $neck= $_POST["neck"];
    $chest= $_POST["chest"];
    $stomach= $_POST["stomach"];
    $waist= $_POST["waist"];
    $hips= $_POST["hips"];
    $length= $_POST["length"];
    $sleevelength= $_POST["sleevelength"];
    $wrist= $_POST["wrist"];
    $crotch= $_POST["crotch"];
    $thighwidth= $_POST["thighwidth"];
    $pantlength= $_POST["pantlength"];
    $inseam= $_POST["inseam"];
    $kneelength= $_POST["kneelength"];







    $title= $_POST["title"];

         
        #file name with a random number so that similar dont get replaced
        $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
     
        #temporary file name to store file
        $tname = $_FILES["file"]["tmp_name"];
       
        #upload directory path
        $uploads_dir = 'C:\Users\Shaikh Arfan\Downloads\project\order img';
    
        #TO move the uploaded file to specific location
        move_uploaded_file($tname, $uploads_dir.'/'.$pname);
     
        #sql query to insert into database
        $query = "INSERT into measurement VALUES('', '$fullname','$custid','$type','$address','$date','$phnumber','$neck','$chest','$stomach','$waist','$hips','$length','$sleevelength','$wrist','$crotch','$thighwidth','$pantlength','$inseam','$kneelength','$title','$pname')";
     
        if(mysqli_query($conn,$query)){
     
            "<script>alert('Done| Your appointment is Booked.|');</script>";        }
        else{
                "<script>alert('Please fill out the form again');</script>";
}
    
     

 header("location: tailor_page.php");
}
?>















<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="appointment2.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <title>Appointment Page</title>
    <link rel="stylesheet" href="css/measurement.css">


    

</head>

<body class="main_bg">



    
<!-- <img src="images/logon.png" alt=""> -->
    <div class="form">
        <div class="form-text">
            <h1><span>MEASUREMENT</span></h1>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, fugit.</p> -->
        </div>
        <div class="main-form">
            <form action="" method="post" enctype="multipart/form-data">
                <div>
                    <span>Full name</span>
                    <input type="text" name="fullname" id="name" placeholder="" required>
                </div>
                <div>
                    <span>Customer Id</span>
                    <input type="nummber" name="custid" id="name" placeholder="" required> 
                </div>
                <div>
                    <!-- <---this is the select option--->
                    <span>Select Type</span>
                    <select name="type" id="type">
                       <option value="">---select appointment type---</option>
                        <option value="1">Our Collection</option>
                        <option value="2">Custom Men Design</option>
                        <option value="3">Designer Boutique For Women</option>
                        <option value="4">Corporate Dress Designer</option>
                        <option value="5">Wedding Dress Designers</option>
                        <option value="6">Custom Embroidery Work</option>
                        <option value="7">Alteration & Repair Service At Doorstep</option>
                    </select>

                     </div>

                <div>
                    <span><Address>Address</Address></span>
                    <input type="text" name="address" id="time" placeholder="" required>
                </div>
                <div>
                    <span>Date</span>
                    <input type="date" name="date" id="date" placeholder="" required>
                </div>
                <div>
                    <span>Contact No</span>
                    <input type="text" name="phnumber" id="number" placeholder="" required>
                </div>
                <h2><span>Measurment For Mens</span></h2>
                <div>
                    <span>Neck</span>
                    <input type="number" name="neck" id="neck" required>
                </div>
                <div>
                    <span>Chest</span>
                    <input type="number" name="chest" id="chest" required>
                </div>
                <div>
                    <span>Stomach</span>
                    <input type="number" name="stomach" id="stomach" required>
                </div>
                <div>
                    <span>Waist</span>
                    <input type="number" name="waist" id="waist" required>
                </div>
                <div>
                    <span>Hips</span>
                    <input type="number" name="hips" id="hips" required>
                </div>
                <div>
                    <span>Length</span>
                    <input type="number" name="length" id="length" required>
                </div>
                <div>
                    <span>Sleeve Length</span>
                    <input type="number" name="sleevelength" id="sleevelength" required>
                </div>
                <div>
                    <span>Wrist</span>
                    <input type="number" name="wrist" id="wrist" required>
                </div>
                <div>
                    <span>Vest Length</span>
                    <input type="number" name="vestlength" id="vestlength" required>
                </div>
                <div>
                    <span>Crotch</span>
                    <input type="number" name="crotch" id="crotch" required>
                </div>
                <div>
                    <span>Thigh width</span>
                    <input type="number" name="thighwidth" id="thighwidth" required>
                </div>
                <div>
                    <span>Pant Length</span>
                    <input type="number" name="pantlength" id="pantlength" required>
                </div>
                <div>
                    <span>Inseam</span>
                    <input type="number" name="inseam" id="inseam" required>
                </div>
                <div>
                    <span>Knee Length</span>
                    <input type="number" name="kneelength" id="kneelength" required>
                </div>
                <!-- <div class="col-md-4">
                    <div class="form-group">
                    <div class="right" id="appt">
                    <div class="upload-btn-wrapper UploadCustom">
                     -->
                    <!-- <button class="btn">Upload Reference Design <span class="small">( Select One or More )</span></button> -->
                    <form method="POST" enctype="multipart/form-data">
   <div> <label>Title</label>
    <input type="text" name="title"></div>
   <div> <label>File Upload</label>
    <input type="File" name="file"></div>
    <input type="submit" name="submitbtn" class="submitbtn">
</form>
                    <!-- </div>
                    </div>
                    </div>
                  </div> -->

                  

                <!-- <div id="submit">
                    <input type="submit" value="SUBMIT" id="submit" name="submitbtn">
                </div> -->
                  <a href="tailor_page.php" class="jump">Jump To Previous Page</a>

            </form>
        </div>
    </div>
</body>

</html>