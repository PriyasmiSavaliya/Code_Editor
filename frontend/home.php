<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
   <!-- CSS FILES -->        
   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-icons.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link href="css/templatemo-pod-talk.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Holtwood+One+SC&family=Josefin+Slab&family=Kalnia&family=Marhey&family=Salsa&display=swap" rel="stylesheet">

    <style>
        @font-face {
            font-family: myfont;
            src: url(css/freakfinder.ttf);
        }
        @font-face {
            font-family: mytxt;
            src: url(css/foxcroft.ttf);
        }
        @font-face {
            font-family: myhead;
            src: url(css/Elianto-Regular.ttf);
        }
        *{
            font-family:var(--normal-font);
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

/* slider section start */        
    .slider {
      width: 100%;
      height: 390px;
      overflow: hidden;
      position: relative;
    }

    .slide {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 5px;
      left: 0;
      opacity: 0;
      transition: opacity 0.5s ease-in-out;
    }

    .slide img {
      width: 100%;
      height: 123%;
      object-fit: cover;
      margin-top:0px;
    }

    .slide.active {
      opacity: 1;
    }
    .btn{
        font-family:math;
    }
    #head_design{
        font-family:mytxt;
        color:var(--light-btn);
    }
    .section-title{
        font-family:math;
    }
    .custom-block:hover {
        background:#44485F;
    }
    .overlay-text {
  position: absolute;
  top: 35%;
  left: 50%;
  transform: translate(-50%, -50%);
  color:#333548;
  font-family:mytxt;
  font-size: 50px;
  font-weight: bold;
  text-align: center;
}
.overlay-text-h3 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #081c15;
  font-size: 20px;
  font-weight: bold;
  text-align: center;
}
.overlay-button {
  position: absolute;
  top: 70%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 10px 20px;
  background-color: var(--light-btn);
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}
.animated {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease-in-out, transform 1s ease-in-out;
        }

        .animated.active {
            opacity: 1;
            transform: translateY(0);
        }
.section-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 40px;
            /* background-color: #f4f4f4; */
            padding-top: 70px;
        }

        .section-container img {
            max-width: 45%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .content-container {
            max-width: 600px;
            text-align:center;
        }

        .content-container h3 {
            color:var(--light-btn);
            font-family:myhead;
            font-size:20px;
            padding-left: 70px;
        }

        @keyframes fadeIn {
            from {
                opacity: 1;
                transform: translateY(20px);
            }
            to {
                opacity: 2;
                transform: translateY(0);
            }
        }

        .content-container {
            animation: fadeIn 2s ease-in-out;
        }
.overlay-button:hover {
  background-color: #43a047;
}
.section-container-2 {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px;
            /* background-color: #f4f4f4; */
            padding-top: 40px;
        }

        .section-container-2 img {
            max-width: 30%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            margin-right: 35px;
        }

        .content-container-2 {
            max-width: 700px;
            margin-left: -24px;
            text-align:center;
        }

        .content-container-2 h3 {
            color:var(--light-btn);
            font-family:myhead;
            font-size:22px;
            padding-left: 70px;
        }
        .section-container-3 {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px;
            /* background-color: #f4f4f4; */
            padding-top: 0px;
            text-align:center;
        }

        .section-container-3 img {
            max-width: 30%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            margin-left: 60px;
        }

        .content-container-3 {
            max-width: 700px;
            margin-left: -24px;
        }

        .content-container-3 h3 {
            color:var(--light-btn);
            font-family:myhead;
            font-size:22px;
            padding-left: 100px;
        }


        .section-container-4 {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px;
            /* background-color: #f4f4f4; */
            padding-top: 60px;
            text-align:center;
        }

        .section-container-4 img {
            max-width: 30%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            margin-right: 70px;
        }

        .content-container-4 {
            max-width: 700px;
            margin-left: -24px;
        }

        .content-container-4 h3 {
            color:var(--light-btn);
            font-family:myhead;
            font-size:22px;
            padding-left: 100px;
        }
.border-box-container {

  border: 2px solid Black;/* Border style for the inner box */
  padding: 20px; /* Add padding for content inside the inner box */

  /* Optionally, you can add more styles for the inner box */
}
.box-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
            padding-left:100px;
        }

        .box {
            width: 48%; /* Adjust the width as needed */
            max-width: 250px;
            padding: 7px;
            margin: 10px 0; /* Added margin to create space between rows */
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
            height:80px;
        }

        .box:hover {
            transform: scale(1.05);
        }

        .box h3 {
            color: #333;
        }

        .box p {
            color: #666;
        }

        .box button {
            padding: 3px 13px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .box button:hover {
            background-color: #45a049;
        }
        /* Style for the owl-carousel container */
.owl-carousel {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

/* Style for each individual carousel item */
.owl-carousel-info-wrap {
    background-color: #ffffff; /* Set your desired background color */
    border-radius: 8px;
    overflow: hidden;
    margin: 10px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Set your desired box shadow */
    width: 100%;
}

/* Style for the carousel images */
.owl-carousel-image {
    max-width: 100%;
    height: 300px;
    border-radius: 8px; /* Set your desired border-radius */
}

/* Style for the verified badge */
.owl-carousel-verified-image {
    width: 20px; /* Set your desired width */
    height: auto;
    margin-left: 5px;
}

/* Style for the person's name */
.owl-carousel-info h4 {
    margin-bottom: 10px;
    font-size: 18px; /* Set your desired font size */
}

/* Style for the badges */
.badge {
    display: inline-block;
    margin-right: 5px;
    margin-bottom: 5px;
    padding: 5px 10px;
    background-color: #3498db; /* Set your desired badge background color */
    color: #ffffff; /* Set your desired badge text color */
    border-radius: 5px;
}

/* Style for the social share icons */
.social-icon {
    list-style: none;
    padding: 0;
    margin: 10px 0;
}

/* Style for each social icon */
.social-icon-item {
    display: inline-block;
    margin-right: 10px;
}

/* Style for the social icon links */
.social-icon-link {
    display: block;
    width: 30px; /* Set your desired width */
    height: 30px; /* Set your desired height */
    background-color: #3498db; /* Set your desired social icon background color */
    color: #ffffff; /* Set your desired social icon color */
    text-align: center;
    line-height: 30px; /* Should be the same as height for vertical centering */
    border-radius: 50%; /* Make it circular */
    font-size: 16px; /* Set your desired font size */
    text-decoration: none;
}

/* Additional styling for specific social icons */
.bi-twitter::before {
    content: "\f099"; /* Twitter icon content from Bootstrap Icons */
}

.bi-facebook::before {
    content: "\f09a"; /* Facebook icon content from Bootstrap Icons */
}

.bi-pinterest::before {
    content: "\f0d2"; /* Pinterest icon content from Bootstrap Icons */
}

.bi-instagram::before {
    content: "\f16d"; /* Instagram icon content from Bootstrap Icons */
}

.bi-youtube::before {
    content: "\f16a"; /* YouTube icon content from Bootstrap Icons */
}

.bi-linkedin::before {
    content: "\f0e1"; /* LinkedIn icon content from Bootstrap Icons */
}

.bi-whatsapp::before {
    content: "\f232"; /* WhatsApp icon content from Bootstrap Icons */
}

.gif-section {
            position: relative;
            text-align: center;
            padding: 26px 20px;
            /* background-color: #f4f4f4; */
        }

        .label {
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 20px;
            color:var(--light-btn);
            font-family:mytxt;
        }
        .content {
            font-size: 18px;
            color: #555;
            margin-bottom: 30px;
        }

        .image-container {
            width: 100%;
            overflow: hidden;
        }

        .full-width-image {
            width: 90%;
            height: 50%;
            display: block;
            transition: transform 0.5s ease-in-out;
            padding-left: 118px;
        }

        
        .section-container-5 {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px;
            /* background-color: #f4f4f4; */
            padding-top: 40px;
            text-align:center;
            padding-bottom: 90px;
        }

        .section-container-5 img {
            max-width: 30%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            margin-left: 60px;
        }

        .content-container-5 {
            max-width: 700px;
            margin-right: 70px;
        }

        .content-container-5 h3 {
            color:var(--light-btn);
            font-family:myhead;
            font-size:22px;
            padding-left: 100px;
        }

        .octagon-container {
      display: flex;
      padding-left: 60px;
      padding-bottom: 40px;
    }

    .octagon:nth-child(1) {
      background-color: #3498db;
    }

    .octagon:nth-child(2) {
      background-color: #e74c3c;
    }

    .octagon:nth-child(3) {
      background-color: #2ecc71;
    }

    .octagon:nth-child(4) {
      background-color: #f39c12;
    }

    .octagon:nth-child(5) {
      background-color: #9b59b6;
    }

    .octagon:nth-child(6) {
      background-color: #1abc9c;
    }

    .octagon:nth-child(7) {
      background-color: #e67e22;
    }

    .octagon:nth-child(8) {
      background-color: #34495e;
    }

    .octagon {
      width: 120px;
      height: 120px;
      clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
      margin: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      font-weight: bold;
      font-size: 24px;
    }
    a button {
    color: white;
    background-color: green;
    border-radius: 5px;
    padding: 10px 20px;
    text-decoration: none; /* Remove the underline from the link */
    display: inline-block;
}

a button:hover {
    background-color: darker_green_color; /* You can adjust this color to your preference */
}
@import url('https://fonts.googleapis.com/css?family=Open+Sans');

@keyframes pricingBoxHoverAnimation {
    0% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
    100% { transform: translateY(0); }
}

.price {
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 20px;
    color: #fff;
    background: linear-gradient(to bottom, #008000 50%, transparent 50%);
    background-size: 100% 200%;
    transition: background-position 0.5s;
    border-radius: 5px;
}

.pricing-box {
    background-color: #fff;
    box-shadow: 0px 2px 15px 0px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    flex: 1;
    padding: 30px;
    margin: 20px;
    max-width: 300px;
    transition: transform 0.3s;
}

.pricing-box:hover {
    background-position: 0 100%;
    color: #008000; /* Change text color on hover */
    animation: pricingBoxHoverAnimation 0.5s ease forwards;
}


* {
	box-sizing: border-box;
}

/* body {
	background-color: #f6f5f7;
	font-family: 'Open Sans', sans-serif;
	margin-bottom: 50px;
} */

.text-center {
	text-align: center;
}

.section-sub {
    /* padding: 40px; */
    /* background-color: #f9f9f9; */
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.section-sub h1 {
    color:var(--light-btn);
            font-family:myhead;
            font-size:40px;
            padding-left: 100px;
}

.pricing-box-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.pricing-box h5 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

.features-list {
    list-style: none;
    padding: 0;
    text-align: left;
    /* padding-left: 40px; */
}

.features-list li {
    padding: 10px 0;
    border-bottom: 1px solid #eee;
}

.btn-primary {
	border-radius: 25px;
	border: none;
	background-color: #008000;
	color: #ffffff;
	cursor: pointer;
	padding: 10px 15px;
	margin-top: 20px;
	text-transform: uppercase;
	transition: all 0.1s ease-in-out;
}

.btn-primary:hover {
	box-shadow: 0px 2px 15px 0px rgba(0,0,0,0.5);
	transform: translateY(-3px);
    color:white;
}


    </style>    
     
</head>
<body class="dark">
    <?php include 'header.php';?>
  <section class="slider">
  <div class="slide active">
  <img src="gif/coding-freak.gif" alt="Slide 1">
  <div class="overlay-text">START &nbsp; YOUR &nbsp; CODING</div>
  <div class="overlay-text-h3">With the world's best web developer site.</div>
  <a href="editor.php"><button class="overlay-button">Start Coding</button></a>
</div>
    <!-- <div class="slide">
      <img src="gif/secound.gif" alt="Slide 2">
       <div class="overlay-text">Start Your Coding</div>
  <button class="overlay-button">Click Me</button>
    </div> -->
    <!-- <div class="slide">
      <img src="gif/third.gif" alt="Slide 3">
      <div class="overlay-text">Start Your Coding</div>
  <button class="overlay-button">Click Me</button>
    </div> -->
  </section>
  <section class="section-container">
        <img src="images/compiler.png" alt="Example Image">
        <div class="content-container">
            <h3>START CODING WITH POWERFUL ONLINE COMPLIERS AND EDITORS</h3>
            <p style="padding-left: 70px;color: white;">We believe coding should be accessible to all. So we made our own compilers for web and mobile. And it's free!</p>
            <div class="box-container">
                <div class="box">
                    <h6>Python</h6>
                    <a href="editor.php?lang=Python" id="pythonBtn"><button>Start Coding Python</button></a>
                </div>
                <div class="box">
                    <h6>PHP</h6>
                    <a href="editor.php?lang=PHP" id="phpBtn"><button>Start Coding PHP</button></a>
                </div>
                <div class="box">
                    <h6>C</h6>
                    <a href="editor.php?lang=C" id="cBtn"><button>Start Coding C</button></a>
                </div>
                <div class="box">
                    <h6>C++</h6>
                    <a href="editor.php?lang=C" id="cppBtn"><button>Start Coding C++</button></a>
                </div>
                <div class="box">
                    <h6>JAVA</h6>
                    <a href="editor.php?lang=Java" id="javaBtn"><button>Start Coding JAVA</button></a>
                </div>
                <div class="box">
                    <h6>HTML</h6>
                    <a href="editor.php?lang=HTML" id="htmlBtn" ><button>Start Coding HTML</button></a>
                </div>
            </div>
        </div>
        
    </section>
    <section class="gif-section">
        <div class="label">CODE CANVAS</div>
        <div class="content">
            <p style="color: white;">Compile your C code using myCompiler's online IDE.Fiddle with your code snippets easily and run them. Start writing code instantly without having to download or install anything.</p>
        </div>
        <div class="image-container">
            <img class="full-width-image" src="gif/editor.gif" alt="Full Width Image">
        </div>
</section>
<div class="label" style="text-align: center;padding-top: 50px;">Supported Languages</div>
<div class="octagon-container">
    
    <div class="octagon">PHP</div>
    <div class="octagon">C</div>
    <div class="octagon">C++</div>
    <div class="octagon">PYTHON</div>
    <div class="octagon">JAVA</div>
    <div class="octagon">HTML</div>
    <div class="octagon">CSS</div>
    <div class="octagon">NODEJS</div>
  </div>
    <section class="section-container-2">

        <div class="content-container-2">
            <h3>FEATURE-RICH CODE EDITOR</h3>
            <p style="padding-left: 70px;color: white;">myCompiler's editor supports autocomplete and syntax highlighting out of the box, which makes writing code a breeze.</p>
            <p style="padding-left: 70px;color: white;">Using myCompiler, you can run your code instantly from any device. Just visit our website, select a language, type in your code and hit "Run!" Write your code without having to spend hours figuring out how to set up a programming environment.</p>
        </div>
        <img src="images/code-complete.png" alt="Example Image">
    </section>
    <section class="section-container-3">
    <img src="images/multi-lang.png" alt="Example Image">
<div class="content-container-3">
    <h3>MULTI-LANGUAGE SUPPORT</h3>
    <p style="padding-left: 70px;color: white;">Write programs in your favorite language, or start learning a new language. myCompiler supports 27 languages with more to come.</p>
</div>

</section>

  <section class="hero-section" id="heroSection">
                <div class="container">
                    <div class="row">
                    <div class="col-lg-12 col-12">
                            <div class="section-title-wrap mb-5">
                                <h4 class="section-title">CodeCanvas Team</h4>
                            </div>
                        </div>
                        <div class="col-lg-12 col-12">
                            <div class="owl-carousel owl-theme">
                            <div class="owl-carousel-info-wrap item">
                                    <img src="images/profile/44.jpg" class="owl-carousel-image img-fluid" alt="">

                                    <div class="owl-carousel-info">
                                        <h4 class="mb-2">Amit</h4>

                                        <span class="badge">Leader</span>
                                    </div>

                                    <!-- <div class="social-share">
                                        <ul class="social-icon">
                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-instagram"></a>
                                            </li>

                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-youtube"></a>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>

                                <div class="owl-carousel-info-wrap item">
                                    <img src="images/profile/IMG-20230206-WA0032.jpg" class="owl-carousel-image img-fluid" alt="">

                                    <div class="owl-carousel-info">
                                        <h4 class="mb-2">Rajvi</h4>

                                        <span class="badge">Developer</span>
                                    </div>

                                    <!-- <div class="social-share">
                                        <ul class="social-icon">
                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-instagram"></a>
                                            </li>

                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-youtube"></a>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>

                                <div class="owl-carousel-info-wrap item">
                                <img src="images/profile/8.jpeg" class="owl-carousel-image img-fluid" alt="">

                                    <div class="owl-carousel-info">
                                        <h4 class="mb-2">Priyasmi</h4>

                                        <span class="badge">Developer</span>
                                    </div>

                                    <!-- <div class="social-share">
                                        <ul class="social-icon">
                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-instagram"></a>
                                            </li>

                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-youtube"></a>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>

                                <div class="owl-carousel-info-wrap item">
                                <img src="images/profile/abhi.jpg" class="owl-carousel-image img-fluid" alt="">

                                    <div class="owl-carousel-info">
                                        <h4 class="mb-2">Abhi</h4>

                                        <span class="badge">Developer</span>

                                        <!-- <span class="badge">Designer</span> -->
                                    </div>

                                    <!-- <div class="social-share">
                                        <ul class="social-icon">
                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-instagram"></a>
                                            </li>

                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-youtube"></a>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>

                                <!-- <div class="owl-carousel-info-wrap item">
                                    <img src="images/profile/smart-attractive-asian-glasses-male-standing-smile-with-freshness-joyful-casual-blue-shirt-portrait-white-background.jpg" class="owl-carousel-image img-fluid" alt="">

                                    <div class="owl-carousel-info">
                                        <h4 class="mb-2">Chan</h4>

                                        <span class="badge">Developer</span>
                                    </div>

                                    <div class="social-share">
                                        <ul class="social-icon">
                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-linkedin"></a>
                                            </li>

                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-whatsapp"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                        </div>

                    </div>
                </div>
            </section>
           
            <div class="container" style="
    padding-top: 85px;">
    <div class="row">
        <div class="col-lg-12 col-12">
            <div class="section-title-wrap mb-6">
                <h4 class="section-title">Unlock Powerful Features:</h4>
            </div>
        </div>
    </div>
</div>
<section class="section-container-4">
<div class="content-container-4">
    <h3>COLOR PICKER</h3>
    <p style="padding-left: 70px;color: white;">Elevate your design experience with our intuitive color picker tool. Choose the perfect hues for your project effortlessly and bring your creative vision to life. Our color picker provides a seamless way to select, visualize, and implement colors, making the design process both efficient and enjoyable.</p>
    <a href="colorpicker.php" style="padding-left: 90px;"><button >Color Picker</button></a>
</div>
<img src="images/color-picker.jpg" alt="Example Image">
</section>
<section class="section-container-5">
    <img src="images/quiz.png" alt="Example Image">
<div class="content-container-5">
    <h3>CODECANVAS'S FAMOUS QUIZES</h3>
    <p style="padding-left: 70px;color: white;">Welcome to our powerful Quiz Tool - the ultimate solution for creating interactive quizzes that captivate, educate, and assess. Whether you're a teacher, content creator, or business looking to engage your audience, our feature-rich quiz tool is designed with versatility and ease of use in mind.</p>
    <a href="allquiz.php" style="padding-left: 90px;"><button >All Quiz</button></a>
</div>
</section>

<!-- Subscription Section -->
<section class="section-sub">
    <h1>PICK THE BEST PLAN FOR YOU</h1>

    <div class="pricing-box-container">
        <div class="pricing-box">
            <h5>Free / Trial</h5>
            <p class="price">0/week</p>
            <ul class="features-list">
                <li><i class="fas fa-check-circle" style="color: green;margin-right: 10px;"></i> Free Code Snippets</li>
    <li><i class="fas fa-check-circle" style="color: green;margin-right: 10px;"></i>Interactive Learning Quizzes</li>
    <li><i class="fas fa-times-circle" style="color: red;margin-right: 10px;"></i>Typing Speed Enhancement</li>
    <li><i class="fas fa-times-circle" style="color: red;margin-right: 10px;"></i>Color Exploration</li>
    <li><i class="fas fa-times-circle" style="color: red;margin-right: 10px;"></i>Practice PDFs</li>
</ul>
            <a class="btn-primary" href="payment.php?plan=xx1">Get Started</a>
        </div>

        <div class="pricing-box">
            <h5>Premium</h5>
            <p class="price">240/mo</p>
            <ul class="features-list">
            <li><i class="fas fa-check-circle" style="color: green;margin-right: 10px;"></i> Free Code Snippets</li>
    <li><i class="fas fa-check-circle" style="color: green;margin-right: 10px;"></i>Interactive Learning Quizzes</li>
    <li><i class="fas fa-check-circle" style="color: green;margin-right: 10px;"></i>Typing Speed Enhancement</li>
    <li><i class="fas fa-check-circle" style="color: green;margin-right: 10px;"></i>Color Exploration</li>
    <li><i class="fas fa-check-circle" style="color: green;margin-right: 10px;"></i>Practice PDFs</li>
</ul>

            <a class="btn-primary" href="payment.php?plan=x2x">Get Started</a>
        </div>

        <div class="pricing-box">
            <h5>Platinum</h5>
            <p class="price">2800/year</p>
            <ul class="features-list">
            <li><i class="fas fa-check-circle" style="color: green;margin-right: 10px;"></i> Free Code Snippets</li>
    <li><i class="fas fa-check-circle" style="color: green;margin-right: 10px;"></i>Interactive Learning Quizzes</li>
    <li><i class="fas fa-check-circle" style="color: green;margin-right: 10px;"></i>Typing Speed Enhancement</li>
    <li><i class="fas fa-check-circle" style="color: green;margin-right: 10px;"></i>Color Exploration</li>
    <li><i class="fas fa-check-circle" style="color: green;margin-right: 10px;"></i>Practice PDFs</li>
</ul>
            <a class="btn-primary" href="payment.php?plan=3xx">Get Started</a>
        </div>
    </div>
</section>

          
  <?php
    include 'footer.php';
  ?>

     <!-- JAVASCRIPT FILES -->
     <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/custom.js"></script>

        <script>
    // JavaScript to handle slider functionality
    const slides = document.querySelectorAll('.slide');
    let currentSlide = 0;

    function showSlide(index) {
      slides.forEach((slide, i) => {
        if (i === index) {
          slide.classList.add('active');
        } else {
          slide.classList.remove('active');
        }
      });
    }

    function nextSlide() {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    }

    // Automatically advance to the next slide every 3 seconds
    setInterval(nextSlide, 3000);
  </script>
 <script>
        // JavaScript to add the 'active' class to trigger the animation on scroll
        document.addEventListener('DOMContentLoaded', function() {
            var animatedElement = document.querySelector('.animated');

            function isElementInViewport(element) {
                var rect = element.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }

            function handleScroll() {
                if (isElementInViewport(animatedElement)) {
                    animatedElement.classList.add('active');
                    window.removeEventListener('scroll', handleScroll);
                }
            }

            window.addEventListener('scroll', handleScroll);
            handleScroll(); // Check on page load
        });
    </script>
    <script>
    // Function to handle button click
    function handleButtonClick(language) {
        // Redirect to editor.php with the selected language as a parameter
        window.location.href = 'editor.php?lang=' + language;
    }

    // Attach click event listeners to each button
    document.getElementById('pythonBtn').addEventListener('click', function() {
        handleButtonClick('Python');
    });

    document.getElementById('phpBtn').addEventListener('click', function() {
        handleButtonClick('PHP');
    });

    document.getElementById('cBtn').addEventListener('click', function() {
        handleButtonClick('C');
    });

    document.getElementById('cppBtn').addEventListener('click', function() {
        handleButtonClick('C++');
    });

    document.getElementById('javaBtn').addEventListener('click', function() {
        handleButtonClick('JAVA');
    });

    document.getElementById('htmlBtn').addEventListener('click', function() {
        handleButtonClick('HTML');
    });

    // Add similar event listeners for other languages
</script>
</body>
</html>
