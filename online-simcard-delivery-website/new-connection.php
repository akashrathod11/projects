<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New connection</title>
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
      <li class="nav-link"><a href="#">New Connection</a></li>
      <li class="nav-link"><a href="Mnp.html">Mnp</a></li>
      <li class="nav-link"><a href="contact.html">contact us</a></li>
      <li class="nav-link"><a href="view_records.php">records</a></li>
      



      <div class="login-register">

        <a href="#" class="button">login</a>
      </div>
    </ul>
  </navbar>

  <!-- close navigation bar -->




  <!-- from new connection -->
  <div class="form-main">
    
    <h1>Order a New  postpaid connection here.<br>
      For SIM upgrade & exchange, </h1>
    
        <div class="form">
          <form action="" method="POST">
            <div class="form-mb-5 ">
               <h5>Please provides following details....</h5>
              <label for="" class="label">select sim card which you want..?<span>*</span> </label>
              <div class="flex sim">
              <input type="radio" name="simcard" id="simcard1" value="jio"/>jio
              <input type="radio" name="simcard" id="simcard2" value="airtel"/>airtel
              <input type="radio" name="simcard" id="simcard3" value="vi"/>vi
            </div>
            </div>

            <div class="form-mb-5">
              <label for="name" class="label"> Full Name<span>*</span> </label>
              <input type="text" name="name" id="name" placeholder="Full Name" class="form-input" required/>
            </div>

            <div class="form-mb-5">
              <label for="phone" class="label"> Phone Number<span>*</span> </label>
              <input type="text" name="phone" id="phone" placeholder="Enter your phone number"class="form-input" required/>
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
                    <input type="text" name="area" id="area" placeholder="Enter area" class="form-input" required/>
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
                    <input type="text" name="pincode" id="post-code" placeholder="Pin Code" class="form-input",required/>
                  </div>
                </div>
              </div>
            </div>
      
            <div>
              <button class="form-btn">Submit</button>
            </div>
          </form>
        </div>
      </div>
      
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
      <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn = mysqli_connect("localhost", "root", "", "oscd") or die("Unable to connect");

        // Sanitize user input to prevent SQL injection
        $s = mysqli_real_escape_string($conn, $_POST["simcard"]);
        $n = mysqli_real_escape_string($conn, $_POST["name"]);
        $p = mysqli_real_escape_string($conn, $_POST["phone"]);
        $e = mysqli_real_escape_string($conn, $_POST["email"]);
        $a = mysqli_real_escape_string($conn, $_POST["area"]);
        $c = mysqli_real_escape_string($conn, $_POST["city"]);
        $state = mysqli_real_escape_string($conn, $_POST["state"]);
        $pincode = mysqli_real_escape_string($conn, $_POST["pincode"]);
        
        // Get the current date and time
        $order_date = date("Y-m-d");
        $order_time = date("H:i:s");
      
        // ... your existing sanitization code ...

        $sql = "INSERT INTO user_order (simcard, name, phone, email, area, city, state, pincode, order_date, order_time)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param($stmt, "ssssssssss", $s, $n, $p, $e, $a, $c, $state, $pincode, $order_date, $order_time);

        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('Form submitted successfully.'); window.location.href='index.html';</script>";
        } else {
            echo "Error: Could not execute $sql. " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
    ?>


  
</body>
</html>

