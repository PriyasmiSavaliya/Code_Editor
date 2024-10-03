<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['fname'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $city = $_POST['City'];

    // Perform validation if needed

    // Insert data into the database
    $sql = "INSERT INTO register (fullname, mobile, email, pwd, city) VALUES ('$name', '$number', '$email', '$pwd', '$city')";

    if ($con->query($sql) == TRUE) {
        $msg = "User registered successfully";
          // Send email notification
          $to_email = $email;
          $subject = "Registration Successful";
          $body = "Dear $name,\n\nThank you for registering with Code Canvas. Your account has been successfully created.\n\nTo log in, please use the \nemail address : $email  \npassword : $pwd \nThat provided you during registration.\n\nRegards,\nCode Canvas Team";
          $headers = "From: codecanvas2024@gmail.com";
  
          if (mail($to_email, $subject, $body, $headers)) {
              $msg .= ". Email notification sent.";
          } else {
              $msg .= ". Failed to send email notification.";
          }
        header("Location:Login.php");
    } else {
        $msg = "Failed to register user: " . $con->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Holtwood+One+SC&family=Josefin+Slab&family=Kalnia&family=Marhey&family=Salsa&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <style>
      @font-face {
            font-family: myfont;
            src: url(css/freakfinder.ttf);
      }
      @font-face {
            font-family: mytxt;
            src: url(css/foxcroft.ttf);
      }
      .light {
      
      --light-theme:#F5EBE0;
      --light-element:#D6CCC2;
      --light-element1:#EDEDE9;
      --light-btn:#AB7D5F;
      --light-font:black;
      --head-font:mytxt;
      --normal-font:cursive;
      --head-color:#AB7D5F;
  
      background-color: var(--light-theme);
      color:var(--light-font)
  }
  
  .dark {
  
      --light-theme:#333548;
      --light-element:#22223B;
      --light-element1:#6A6662;
      --light-btn:#4caf50;
      --light-font:beige;
      --head-font:mytxt;
      --normal-font:cursive;
      --head-color:#AB7D5F;
  
      background-color: var(--light-theme);
      color:var(--light-font)
  }
  .form-container .login-container {
  
  margin-top: 2%;
  }
    .form-container .login-container .content-part {
      background-color:var(--light-element);
      border-top-left-radius: 8px;
      border-bottom-left-radius: 8px;
      padding: 50px;
      font-family:var(--normal-font);
    }
        .form-container .login-container .content-part .mode {
          position: relative;
          bottom:30px;
          right:25px;
          width:15px;
        }
        .form-container .login-container .content-part .logo {
          font-family: var(--head-font);
          font-size:3rem;
          color:var(--light-font);
        }
        .form-container .login-container .content-part .logo span {
          color:var(--light-btn);
        }
        .form-container .login-container .content-part img {
          max-width: 100%;
        }
        .form-container .login-container .content-part h2 {
          font-size: 1.7rem;
          text-align: center;
          margin-bottom: 20px;
        }
        .form-container .login-container .content-part p {
          font-size: 0.9rem;
          text-align: center;
        } 
    .form-container .login-container .form-part {
      background-color:var(--light-element);
      border-top-right-radius: 8px;
      border-bottom-right-radius: 8px;
      padding: 50px;
      font-family:var(--normal-font);
    }
        .form-container .login-container .form-part .signinlink {
          text-align: right;
          margin-top: -20px;
        }
        .form-container .login-container .form-part .signinlink a {
          font-weight: 600;
        }
        .form-container .login-container .form-part .formcol {
          margin: auto;
        }
        .form-container .login-container .form-part .formcol h3 {
          text-align: center;
          margin-top: 30px;
          margin-bottom: 30px;
          font-size: 2rem;
          font-family:myfont;
        }
        .form-container .login-container .form-part .login {
          margin: auto;
          margin-top: 110px;
        }
        .form-container .login-container .form-part .form-floating .btn {
          width: 100%;
          margin-top: 15px;
          border:2px solid var(--light-font);
          color:var(--light-font);
        }
        .form-container .login-container .form-part .form-floating .btn:hover {
          background-color:var(--light-btn);
          border: 2px solid var(--light-font);
        }
        .form-container .login-container .form-part .form-floating .form-control {
          background-color: var(--light-element1);
          color:var(--light-font);
        }
        .form-container .login-container .form-part .form-floating .form-control:hover {
          border: 2px solid var(--light-btn);
          box-shadow: none;
        }
        .form-container .login-container .form-part .form-floating .form-control:focus {
          border: 2px solid var(--light-btn);
          box-shadow: none;
        }
        .form-container .login-container .form-part .form-floating .form-control:active {
          border: 2px solid var(--light-btn);
          box-shadow: none;
        }
      input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

      </style>
    
<script>  
        $(document).ready(function() {
            $('.fa-house').click(function() {
                $(location).prop('href', './home.php')
            });
        });
</script>
</head>

<body class="dark">

<div class="container-fluid form-container">
  <div class="container login-container">
    <div class="row">
          <div class="col-md-5 content-part">
              <div class="mode">
                  <i class="fa-solid fa-house"></i>
              </div>
              <center><h4 class="logo"><span>{</span> Code Canvas <span>}</span></h4></center>
              
              <center><img src="img/login.png " alt="not found" height=350px width=370px></center>

              <h2>Get instant visibility into all your team work.</h2>
              <p>Don’t waste time on tedious manual tasks. Let Automation do it for you. Simplify workflows, 
              reduce errors, and save time for solving more important 𝖆𝖇𝖍𝖎</p>
          </div>
          <div class="col-md-7 form-part">
              <div class="row">
              <form id="myform" class="myform" action="" method="POST"> <!-- action="" means it will post to itself -->
                    <p class="signinlink">I already have an account <a href="LogIn.php">Sign In</a></p>
              <div class="col-lg-12 col-md-11  formcol mx-auto">
                    <h3>Registration to Code Canvas</h3>
                    <span id="msg" style="color:green;"><?php if(isset($msg)) { echo $msg; } ?></span>
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name" required>
                    <label >Full Name</label>
                    <span id="error_name" style="color:red;"></span>
              </div>
              <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="number" name="number" placeholder="Enter Mobile Number" required>
                    <label for="floatingInput">Mobile Number</label>
                    <span id="error_mb" style="color:red;"></span>

              </div>
              <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address" required>
                    <label for="floatingInput">Email address</label>
                    <span id="error_email" style="color:red;"></span>
              </div>

              <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="pwd"  name="pwd" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                    <span id="error_pwd" style="color:red;"></span>
              </div>
              <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="City" name="City" placeholder="Enter City" required>
                    <label for="floatingInput">City</label>
              </div>
              <div class="form-floating">
                    <button class="btn" id="submit" name="submit">Create Account</button>
              </div>
          </div>
          </form>
    </div>
  </div>
</div>    


</body>
</html>
