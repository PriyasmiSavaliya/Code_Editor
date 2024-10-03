<?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}

:root {
    --light-theme: #333;
    --light-element: #444;
    --light-font: #fff;
    --light-btn: #3b8238; /* Changed button color to a different shade of green */
}
@font-face {
    font-family: myfont;
    src: url(css/freakfinder.ttf);
    }
@font-face {
    font-family: mytxt;
    src: url(css/foxcroft.ttf);
}
.header {
    overflow: hidden;
    background-color: #202020; /* Set the background color to black */
    padding: 10px 10px;
}

        .header .logo {
            font-size: 25px;
            font-weight: bold;
            font-family: mytxt;
            color:var(--light-font);
        }
        .header .logo span{
            font-size:30px;
            color:var(--light-btn);
        }
        .btn-css{
            background-color: #084e08;
    padding:0px;
        }
        .header a, .header section {
    float: left;
    margin-right: 10px; /* Adjust margin as needed */
    color: var(--light-font);
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    line-height: 25px;
    border-radius: 4px;
}

.header a:hover, .header section:hover {
    background-color: #202020;
    color: #4caf50;
}

.btn, .header a, .header section {
    display: inline-block;
    position: relative;
    transition: background-color 0.5s, border 0.5s;
}

.btn:after, .header a:after, .header section:after {
    content: "";
    position: absolute;
    width: 100%;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: #3b8238; /* Green underline color */
    transform: scaleX(0);
    transform-origin: bottom right;
    transition: transform 0.5s;
}

.btn:hover:after, .header a:hover:after, .header section:hover:after {
    transform: scaleX(1);
    transform-origin: bottom left;
}

.header-right {
    float: right;
}

@media screen and (max-width: 500px) {
    .header-right {
        float: none;
    }
}
/* Your existing styles go here */

.header section {
    display: inline-block;
    padding: 10px; /* Adjust padding as needed */
    background-color: var(--light-element); /* Adjust background color as needed */
    color: var(--light-font); /* Adjust text color as needed */
    border: 1px solid var(--light-font); /* Adjust border color as needed */
    border-radius: 4px; /* Adjust border radius as needed */
    margin-right: 10px; /* Adjust margin as needed */
}

.header a[href="logout.php"] {
    border: 1px solid var(--light-font);
    padding: 10px; /* Adjust padding as needed */
    margin: 0 5px; /* Adjust margin as needed */
    border-radius: 4px; /* Adjust border radius as needed */
}
/* Adjust the styles as needed for your design */

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</head>
<body>

<div class="header">
    <section class="logo"><span>{</span> CODE CANVAS<span> }</span></section>
    <div class="header-right">
        <!-- <a class="home" href="Home.Php">Home</a>
        <a class="editor" href="Editor.php">Start Code</a>
        <a class="editor" href="prectice.php">Prectice</a>
        <a class="quize" href="Online-Quiz/welcome.php">Quize</a>
        <a class="contact" href="ContactUs.php">Contact</a>
        <a class="active about" href="AboutUs.php">About</a>
        <a class="btn login" href="LogIn.php">Log In</a>
        <a class="btn signup" href="SignUp.php">Sign Up</a> -->
        <?php
            
            if(isset($_SESSION["Login"]) && is_array($_SESSION["Login"])) {
                echo '<a href="home.php">Home</a>';
                echo '<a class="editor" href="Editor.php">Try Now</a>';
                echo ' <a class="editor" href="tutorial.php">Tutorial</a>';
                echo '<a class="service" href="service.php">Service</a>';
                echo ' <a class="editor" href="prectice.php">Practice</a>';
                echo ' <a class="quize" href="allquiz.php">Quiz</a>';
                // echo '<a class="about" href="AboutUs.php">About</a>';
                // echo '<a class="contact" href="ContactUs.php">Contact</a>';
                if(isset($_SESSION["Login"]["fullname"])) {
                    echo '<section>Hello, ' . $_SESSION["Login"]["fullname"] . '</section>';
                } else {
                    echo '<section>Hello, User</section>';
                }
  echo ' <a href="logout.php">LogOut</a>';
                // echo ' <a class="btn signup" href="SignUp.php">Sign Up</a>';
               // echo ' <a href="admin.php">Admin</a>';
              
            } 
            else {
                echo '<a href="home.php">Home</a>';
                echo '<a class="editor" href="Editor.php">Try Now</a>';
                echo ' <a class="editor" href="tutorial.php">Tutorial</a>';
                echo '<a class="service" href="service.php">Service</a>';
                echo ' <a class="editor" href="prectice.php">Practice</a>';
              
                echo ' <a class="quize" href="allquiz.php">Quiz</a>';
                // echo '<a class="about" href="AboutUs.php">About</a>';
                // echo '<a class="contact" href="ContactUs.php">Contact</a>';
                echo '<a class="btn login btn-css" href="LogIn.php">Log In</a>';
                echo ' <a class="btn signup btn-css" href="SignUp.php">Sign Up</a>';
               
            }
            ?>
    </div>
</div>
</body>
</html>
