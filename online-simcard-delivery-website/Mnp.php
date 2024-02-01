<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mnp</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/2fa5da2dd4.js" crossorigin="anonymous"></script>
    
</head>
<body>
 
      <!-- navigation bar -->
  <navbar class="navbar-container">

    <div class="logo-container">
      <a href="index.html"><img src="img/logo.png" alt=""></a>
    </div>


    <!-- <div class="bars">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div> -->

    <ul class="nav-items">
      <li class="nav-link"><a href="index.html">Home</a></li>
      <li class="nav-link"><a href="service.html">Service</a></li>
      <li class="nav-link"><a href="new-connection.php">New Connection</a></li>
      <li class="nav-link"><a href="#">Mnp</a></li>
      <li class="nav-link"><a href="contact.html">contact us</a></li>



      <div class="login-register">

        <a href="#" class="button">login</a>
      </div>
    </ul>
  </navbar>

  <!-- close navigation bar -->




  <!-- from mnp -->
  <div class="form-main">
    <section class="main-mnp">
        <div class="flex-mnp"> 

            <div class="mnp-img">
                <img src="https://www.jio.com/porttojio-mnp-desk.png" alt="image not show">
            </div>
            <div class="mnp">
                <h1>Port Your Number without<br>
                    stepping out....!
                </h1>
                <p>Book sim online, raise a porting request through<br>
                    an sms and get the sim delivered and activated at home.
                    
                </p >
                <a href="#form" class="port-btn">Port Sim</a>
            </div>
        </div>
        </section>

      <!-- section two -->
      <section class="step-mnp-section">

        <div class="step-mnp">
            <div >
                <H4>5000 users have shown interest to port 
                    <br>number last week</H4>
            </div>
            <div class="img-mnp-step">
               <div>
                <img src="https://www.myvi.in/content/dam/neogold/mnp-revamp/port-mobile-number.svg" alt="">
                <p>enter porting<br>number
                </div>
                <div>     
                </p> 
                <img src="https://www.myvi.in/content/dam/neogold/mnp-revamp/sim-port-number.svg" alt="">
                <p>enter delivery<br> detailsand plan</p>
            </div>
            <div>
                <img src="https://www.myvi.in/content/dam/neogold/mnp-revamp/sim-port-number-online.svg">
                <p>SIM gets <br>delivered</p>
            </div>
            </div>
        
        </div>
      </section>



      <!-- section three -->
        <section id="form">
            

            <div class="form" >
                <form action="" method="POST" >
                    <h1 class="mnp-heading">MNP - Port Number</h1>
            <div class="form-mb-5 ">
                <h5>Please provides following details....</h5>
                <label for="" class="label">select sim card which you want to port..?<span>*</span> </label>
                <div class="flex sim">
                    <input type="radio" name="simcard" id="simcard1" value="Port to jio" />Port to jio
                    <input type="radio" name="simcard" id="simcard2" value="Port to airtel"/>Port to airtel
                    <input type="radio" name="simcard" id="simcard3" value="Port to vi"/>Port to vi
                </div>
            </div>

            <div class="form-mb-5">
              <label for="name" class="label"> Full Name<span>*</span> </label>
              <input type="text" name="name" id="name" placeholder="Full Name" class="form-input"required/>
            </div>
            
            <div class="form-mb-5">
                <label for="phone" class="label"> Phone Number<span>*</span> </label>
                <input type="text" name="phone" id="phone" placeholder="Enter your phone number" class="form-input" required/>
            </div>
            <div class="form-mb-5">
                <label for="email" class="label"> Email Address<span>*</span> </label>
                <input type="email"  name="email"  id="email"  placeholder="Enter your email"  class="form-input" required/>
            </div>
            
            
            <div class="form-5 form-pt-3">
                <label class="label label-2">
                    Address Details<span>*</span>
                </label>
                <div class="flex flex-wrap form-mx-3"> 
                    <div class="w-full sm:w-half form-px-3">
                        <div >
                            <input type="text" name="area" id="area" placeholder="Enter area" class="form-input"required />
                        </div>
                    </div>
                    <div class="w-full sm:w-half form-px-3">
                        <div>
                            
                            <input
                            type="text" name="city" id="city" placeholder="Enter city" name="city" class="form-input" required/>
                        </div>
                    </div>
                    <div class="w-full sm:w-half form-px-3">
                  <div>
                    <input
                    type="text" name="state" id="state" placeholder="Enter state" class="form-input" required/>
                </div>
            </div>
            <div class="w-full sm:w-half form-px-3">
                <div class="form-mb-5">
                    <input type="text" name="pincode" id="post-code" placeholder="Pin Code" class="form-input" required/>
                </div>
            </div>
        </div>
    </div>
    
    <div>
        <button class="form-btn">Submit</button>
    </div>
</form>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
$conn = mysqli_connect("localhost", "root", "", "oscd") or die("unable to connect");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from POST
$s = $_POST["simcard"];
$n = $_POST["name"];
$p = $_POST["phone"];
$e = $_POST["email"];
$a = $_POST["area"];
$c = $_POST["city"];
$state = $_POST["state"];
$pin = $_POST["pincode"];

// Insert query execution with prepared statement
$sql = "INSERT INTO mnp_request (simcard, name, phone, email, area, city, state, pincode) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("ssssssss", $s, $n, $p, $e, $a, $c, $state, $pin);

// Execute the statement
if ($stmt->execute()) {
    echo "<script>alert('Form submitted successfully.'); window.location.href='index.html';</script>";
    exit(); // Make sure to stop the script execution after the JavaScript redirect
} else {
    echo "Error: Could not execute $sql." . $stmt->error;
}
  
// Close connection
$stmt->close();
$conn->close();
  }
?>

</div>
</div>




</section>

<!-- sub-footer -->
<div class="sub-footer">
    <div class="subfooter-container">
        
        <a href="#" class="sub-footer-link">Privacy policy</a>
        <a href="#" class="sub-footer-link">Terms & condition</a>
        <a href="#" class="sub-footer-link">security information</a>
        <a href="#" class="sub-footer-link"><i class="fa-brands fa-instagram"></i></a>
        <a href="#" class="sub-footer-link"><i class="fa-brands fa-facebook"></i></a>
      <a href="#" class="sub-footer-link"><i class="fa-brands fa-linkedin"></i></a>
    </div>
  </div>

  
</body>
</html>