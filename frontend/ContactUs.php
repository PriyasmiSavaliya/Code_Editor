<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form values
        $name = $_POST["firstname"];
        $email = $_POST["lastname"];
        $message = $_POST["subject"];
        
    include 'db.php';
    // Insert data into the contact table
    $sql = "INSERT INTO contact (c_name, c_email, message) VALUES ('$name', '$email', '$message')";

    if ($con->query($sql) === TRUE) {
        // echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Holtwood+One+SC&family=Josefin+Slab&family=Kalnia&family=Marhey&family=Salsa&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap" rel="stylesheet">
                        
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="css/bootstrap-icons.css">

        <link rel="stylesheet" href="css/owl.carousel.min.css">
        
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

        <link href="css/templatemo-pod-talk.css" rel="stylesheet">
    <style>
        @font-face {
            font-family: myfont;
            src: url(css/foxcroft.ttf);
        }
        *{
            margin:0px;
            padding:0px;
            box-sizzing:border-box;
            font-family:var(--normal-font);
            color:var(--light-font);
        }
        .light{
            --light-theme:#F5EBE0;
            --light-btn:#4caf50;
            --light-font:#1C402E;
            --btn-hover:#1C402E;
            --head-font:mytxt;
            --normal-font:'Salsa', cursive;
            --head-color:#4caf50;

            background-color:var(--light-theme);
            color:var(--light-font)
        }
        .dark{
            --light-theme:#333548;
            --light-btn:#4caf50;
            --light-font:beige;
            --btn-hover:#57cc99;
            --head-font:mytxt;
            --normal-font:'Salsa', cursive;
            --head-color:#4caf50;

            background-color:var(--light-theme);
            color:var(--light-font)

        } 
        .container{
            width:100%;
        }
        #contact{
            margin-top:20px;
        }
            .title{
                text-align:center;
                font-size:45px;
                font-weight:bold;
                margin-bottom:70px;
                color:var(--head-color);
                font-family:var(--head-font);
            }
                .about-content{
                    display:flex;
                    flex-wrap:wrap;
                    align-item:center;
                }
                    .image{
                        flex:1;
                        margin-right:20px;
                        overflow:hidden;
                        border-radius:10px;
                    }
                        .image img{
                            width:100%;
                        }
                        .image:hover img{
                            transition-duration: 1s;
                            transform: scale(1.1);
                        }
                    .content{
                        flex:1;
                        margin-left:20px;
                    }
                        .content p{
                            font-size:17px;
                            line-height:1.6;
                            color:var(--light-font);
                        }
                        .readmore{
                            margin-top:20px;
                            display:inline-block;
                            padding:10px 20px;
                            background-color:var(--light-btn);
                            font-size:17px;
                            color:#fff;
                            text-decoration:none;
                            font-weight:bold;
                            border-radius:10px;
                            border:none;
                        }
                        .readmore:hover{
                            transition:1s;
                            background-color:var(--btn-hover);
                        }
                        .readmore .inside{
                            position:relative;
                            background-color:var(--light-btn);
                            color:#fff;
                            right:7px;
                        }
                        .readmore:hover .inside{
                            transition:1s;
                            background-color:var(--btn-hover);
                        }
                        .outside{
                            margin-left:13px;
                            color:var(--light-font);
                        }
                        .outside:hover{
                            color:var(--light-btn);
                        }
                        @media screen and (max-width: 768px){
                            .about-content{
                                flex-direction:column;            
                            }
                            .image, .content{
                                margin:0;
                                margin-bottom:20px;
                            }
                            .title{
                                font-size:38px;
                                margin-bottom:50px;
                            }
                            .readmore{
                                align-item:center;
                                justify-content:center;
                            }
                        }
                        input[type=text], select, textarea {
                            width: 100%;
                            padding: 12px;
                            border: 1px solid var(--light-btn);
                            border-radius: 4px;
                            box-sizing: border-box;
                            margin-top: 6px;
                            margin-bottom: 16px;
                            resize: vertical;
                            color: black;
                        }


    </style>
    <!-- <script>  
        $(document).ready(function() {
            $('.readmore').click(function() {
                if ($('body').hasClass('light')){
                      $('body').removeClass('light');
                      $('body').addClass('dark');
                } else {
                      $('body').removeClass('dark');
                      $('body').addClass('light');
                }
            });
        });
    </script> -->
</head>
<body class="dark">
    <?php include 'header.php';?>
    <div class="container" id="contact">
       <h1 class="title">Contact Us</h1>
       <div class="about-content">
          <div class="image">
            <img src="img/contact_us.png">
          </div>
          <div class="content">
            <form action="#" method="post">
                <label for="fname">Name*</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

                <label for="lname">Email*</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

                <label for="subject">Message*</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:160px" required></textarea>

                <button class="readmore"><i class="fa-solid fa-paper-plane inside"></i> Send Message</button><br><br>
                <div>
                    <i class="fa-brands fa-facebook fa-xl outside"></i>
                    <i class="fa-brands fa-instagram fa-xl outside"></i>
                    <i class="fa-brands fa-twitter fa-xl outside"></i>
                    <i class="fa-brands fa-linkedin fa-xl outside"></i>
                </div> 
            </form>
          </div>  
       </div> 
    </div> 
    <?php
    include 'footer.php';
    ?>   
</body>
</html>