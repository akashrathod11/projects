<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Free sim home delivery</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/2fa5da2dd4.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- navigation bar  -->
  <navbar class="navbar-container">

    <div class="logo-container">
      <a href="index.html"><img src="img/logo.png"></a>
    </div>




    <ul class="nav-items">
      <li class="nav-link"><a href="index.html">Home</a></li>
      <li class="nav-link"><a href="service.html">Service</a></li>
      <li class="nav-link"><a href="new-connection.html">New Connection</a></li>
      <li class="nav-link"><a href="Mnp.html">Mnp</a></li>
      <li class="nav-link"><a href="#">contact us</a></li>



      <div class="login-register">

        <a href="#" class="button">login</a>
      </div>
    </ul>
  </navbar>

  <!-- close navigation bar-->


      <!-- contact section -->
  <section>

      <div class="contant-heading">
          <h1><span>--</span>contact<span>--</span></h1>
     </div>

     <div class="main-contact ">

      <div class="logo-container contant-flex">
         <a href="#" ><img src="img/logo.png" alt="" ></a>
         <p>Lorem ipsum dolor sit, amet consectetur <br>adipisicing elit. neque autem. <br>Quibusdam illo, </p>
         <div class="contact-icon">
         <a href="#" ><i class="fa-brands fa-instagram" style="color: red;"></i></a>
          <a href="#" ><i class="fa-brands fa-facebook"></i></a>
          <a href="#" ><i class="fa-brands fa-linkedin"></i></a>
          </div>
      </div>
      <div> 
            <div class="contact-address">

            <p><i class="fa-solid fa-location-dot"></i>&nbsp;Bhosari Pune 
                <br>&nbsp;&nbsp;&nbsp;maharastra 411039</p>
                <p><i class="fa-regular fa-envelope"></i></i>&nbsp; shreeom2029@gmail.com</p>
                <p><i class="fa-solid fa-phone-volume"></i>&nbsp;+91 9527582978</p>
            </div>
      </div>
      <div>

          
          <div class="contact-from">
            <form action="contact.php" method="post">
              <div class="form-mb-5">
                  <label for="name" class="label"> Full Name<span>*</span> </label>
                  <input type="text" name="name" id="name" placeholder="Full Name" class="form-input" required/>
                </div>
                <div class="form-mb-5">
                    <label for="email" class="label"> Email Address<span>*</span> </label>
                    <input type="email"  name="email"  id="email"  placeholder="Enter your email"  class="form-input" required/>
                </div>
                <div class="form-mb-5">
                    
                    <input type="text"  name="subject"  id="subject"  placeholder="subject"  class="form-input" required/>
                </div>
                <div>
                    <textarea id="story" name="message"
                    rows="5" cols="54">message...
                </textarea>
            </div>
            <div>
                <button class="form-btn">Submit</button>
            </div>
            
        </div>
        
        
    </div>
</form>
<?php
// Establishing a connection to the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$conn = mysqli_connect("localhost", "root", "", "oscd") or die("Unable to connect");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user inputs
$n = mysqli_real_escape_string($conn, $_POST["name"]);
$e = mysqli_real_escape_string($conn, $_POST["email"]);
$s = mysqli_real_escape_string($conn, $_POST["subject"]);
$m = mysqli_real_escape_string($conn, $_POST["message"]);

// Insert query execution with prepared statement
$sql = "INSERT INTO contact (name, email, subject, message) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

// Bind parameters
mysqli_stmt_bind_param($stmt, "ssss", $n, $e, $s, $m);

// Execute the statement
if (mysqli_stmt_execute($stmt)) {
    // Form submitted successfully, show JavaScript alert and redirect
    echo '<script>alert("Form submitted successfully."); window.location.href = "index.html";</script>';
} else {
    // Error occurred, show JavaScript alert with error message
    echo '<script>alert("Error: Could not able to execute ' . $sql . ' ' . mysqli_error($conn) . '");</script>';
}

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
}
?>

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