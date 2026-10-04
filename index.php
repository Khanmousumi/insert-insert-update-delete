<?php
  require_once 'db.php';

  if(isset($_POST['register_btn'])){
   $fullname =$_POST['fullname'];
   $email =$_POST['email'];
   $phonenumber =$_POST['phonenumber'];
   $password =$_POST['password'];
   $confirmpassword =$_POST['confirmpassword'];

 $query ="INSERT INTO `registration`( `fullname`, `email`, `phonenumber`, `password`) VALUES ('$fullname','$email','$phonenumber','$password')";

 $result =mysqli_query($conn, $query);

 if ($result) {
    echo "<script>alert ('Successfully Registered');</script>";
}


  }
   
  
  ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="form-box">

            <h2>Create Account</h2>
            <p class="subtitle">Please fill in the form to register</p>

            <form action="" method="post">

                <div class="input-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname"
                           name="fullname"
                           placeholder="Enter your full name" required>
                </div>

                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email"
                           name="email"
                           placeholder="Enter your email" required>
                </div>

                <div class="input-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone"
                           name="phonenumber"
                           placeholder="Enter your phone number" required>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password"
                           name="password"
                           placeholder="Enter your password" required>
                </div>

                <div class="input-group">
                    <label for="confirm">Confirm Password</label>
                    <input type="password"
                           name="confirmpassword"
                           placeholder="Confirm your password" required>
                </div>

                <button type="submit" name="register_btn">
                    Register Now
                </button>

                <p class="login-text">
                    Already have an account?
                    <a href="login.php">Login</a>
                </p>

            </form>

        </div>
    </div>

</body>
</html>