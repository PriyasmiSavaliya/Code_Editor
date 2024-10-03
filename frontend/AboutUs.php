<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
      <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png" />
<link rel="preconnect" href="https://fonts.gstatic.com" />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet" />
        
    <style>
        @font-face {
            font-family: myfont;
            src: url(css/freakfinder.ttf);
        }
        @font-face {
            font-family: mytxt;
            src: url(css/foxcroft.ttf);
        }
        *{
            margin:0px;
            padding:0px;
            box-sizzing:border-box;
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
        .container{
            width:100%;
        }
        #about{
            margin-top:20px;
        }
        .title{
            text-align:center;
            font-size:45px;
            font-weight:bold;
            /* margin-bottom:70px; */
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
            position:relative;
            top:100px;
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
            color:#fff;
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

        .section {
    margin-top: 50px;
    padding: 20px;
    background-color: var(--light-theme);
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
.section-title {
    font-size: 28px;
    font-weight: bold;
    color: var(--head-color);
    margin-bottom: 20px;
}

.section-description {
    font-size: 18px;
    color: var(--light-font);
    margin-bottom: 30px;
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
.color{
    color: white;
}
.color strong{
    color: #77c178;
    font-weight: 400;
}
.licss {
    background-color: #e6e3c2;
    padding: 20px;
    border: 2px solid #a6a37f;
    border-radius: 10px;
    font-size: 16px;
    margin-bottom: 10px;
    color: black;
}
.licss2 {
    background-color: #e48e8e;
    border: 2px solid #bf6262;
    padding: 20px;
    border-radius: 10px;
    font-size: 16px;
    margin-bottom: 10px;
    color: black;
}
.licss3 {
    background-color: #a1dea6;
    padding: 20px;
    border: 2px solid #5dae63;
    border-radius: 10px;
    font-size: 16px;
    margin-bottom: 10px;
    color: black;
}
.licss4 {
    background-color: #aae1df;
    padding: 20px;
    border: 2px solid #64918f;
    border-radius: 10px;
    font-size: 16px;
    margin-bottom: 10px;
    color: black;
}
.ifont {
    font-size: 20px;
}

.box {
    margin-bottom: 20px;
}

.section-description i {
    margin-right: 10px;
}

    </style>
</head>
<body class="dark">
    <?php include 'header.php';?>
    <div class="container" id="about">
        <h1 class="title">About Us</h1>
        <div class="section">
    <!-- <h2 class="section-title">About Us</h2> -->
    <div class="row">
        <div class="col-sm-4">
            <div class="image">
                <img src="images/small.png">
            </div>
        </div>
        <div class="col-sm-8">
            <p class="section-description" style="color:wheat;">At Code Canvas, we aim to:</p>
    <p class="color">Code Canvas is dedicated to empowering users worldwide by providing an intuitive code editor platform. Our mission is to simplify the process of writing and testing code, cultivating a seamless coding environment for programmers of all levels.</p>
    <p class="color">We believe in driving innovation and improvement in the coding sphere, reshaping the coding landscape to make it more accessible and efficient. Through our platform, we aim to revolutionize code sharing and inspire the next generation of developers.</p>
    <div id="additional-content" style="display: none;">
        <ul>
            <li class="color"><strong>Empower users worldwide :</strong> We strive to provide tools and resources that empower users from all corners of the globe, regardless of their background or level of expertise.</li><hr>
            <li class="color"><strong>Provide an intuitive code editor platform :</strong> Our platform boasts an intuitive interface and powerful features designed to make coding as seamless and efficient as possible.</li><hr>
            <li class="color"><strong>Simplify writing and testing code :</strong> We understand the complexities of coding, which is why we focus on simplifying the process to make it more accessible to everyone.</li><hr>
            <li class="color"><strong>Cultivate a seamless coding environment :</strong> We foster an environment where programmers can focus solely on their craft without distractions or obstacles.</li><hr>
            <li class="color"><strong>Drive innovation and improvement :</strong> Innovation is at the heart of what we do. We continuously strive to push the boundaries of coding and drive improvements in the field.</li><hr>
            <li class="color"><strong>Reshape the coding landscape :</strong> Our goal is to reshape the coding landscape by introducing new tools, methodologies, and practices that enhance the coding experience.</li><hr>
            <li class="color"><strong>Revolutionize code sharing :</strong> We aim to revolutionize the way code is shared and collaborated on, making it easier for developers to collaborate and contribute to projects.</li><hr>
            <li class="color"><strong>Inspire the next generation :</strong> We're passionate about inspiring the next generation of developers and equipping them with the skills and resources they need to succeed.</li>
        </ul>
    </div>
    <a href="javascript:void(0);" class="readmore" id="learn-more-btn">Learn More</a>
</div>

    </div>
</div>

<div class="section">
    <h2 class="section-title text-center mb-4">Our Mission</h2>
    <div class="row">
        <div class="col-sm-6">
            <div class="box">
                <ul class="section-description list-unstyled">
                    <li class="licss"><i class="fas fa-users ifont"></i> Empower users worldwide.</li>
                    <li class="licss2"><i class="fas fa-laptop-code ifont"></i> Provide an intuitive code editor platform.</li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="box">
                <ul class="section-description list-unstyled">
                    <li class="licss3"><i class="fas fa-pencil-alt ifont"></i> Simplify writing and testing code.</li>
                    <li class="licss4"><i class="fas fa-globe ifont"></i> Cultivate a seamless coding environment.</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-6">
            <div class="box">
                <ul class="section-description list-unstyled">
                    <li class="licss3"><i class="fas fa-lightbulb ifont"></i> Drive innovation and improvement.</li>
                    <li class="licss4"><i class="fas fa-map ifont"></i> Reshape the coding landscape.</li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="box">
                <ul class="section-description list-unstyled">
                    <li class="licss"><i class="fas fa-code ifont"></i> Revolutionize code sharing.</li>
                    <li class="licss2"><i class="fas fa-rocket ifont"></i> Inspire the next generation.</li>
                </ul>
            </div>
        </div>
    </div>
</div>


       <!-- Typing Speed Section -->
       <div class="section">
    <h2 class="section-title">Typing Speed Test</h2>
    <div class="row">
        <div class="col-sm-8">
        <p class="section-description">Test your typing speed with our interactive typing speed test tool. Improve your typing skills and accuracy.</p>
    <p class="color">We offer a variety of typing exercises designed to help you enhance your typing speed and accuracy. Whether you're a beginner or an advanced typist, our platform provides tailored exercises to suit your skill level.</p>
    <p class="color">Track your progress over time and compare your results with others in our community. Join now and start your journey towards faster and more accurate typing!</p>
    <a href="typespeed.php" class="readmore">Take the Test</a>
        </div>
        <div class="col-sm-4">
        <div class="image">
            <img src="images/vitesse-frappe-en.png">
          </div>
        </div>
    </div>
</div>
<!-- Subscription Section -->
<!-- <div class="section" style="text-align: center;">
<h1>PICK THE BEST PLAN FOR YOU</h1>

    <div class="pricing-box-container">
        <div class="pricing-box">
            <h5>Free / Trial</h5>
            <p class="price">$0/week</p>
            <ul class="features-list">
                <li><i class="fas fa-check-circle" style="color: green;margin-right: 10px;"></i> Free Code Snippets</li>
    <li><i class="fas fa-check-circle" style="color: green;margin-right: 10px;"></i>Interactive Learning Quizzes</li>
    <li><i class="fas fa-times-circle" style="color: red;margin-right: 10px;"></i>Typing Speed Enhancement</li>
    <li><i class="fas fa-times-circle" style="color: red;margin-right: 10px;"></i>Color Exploration</li>
    <li><i class="fas fa-times-circle" style="color: red;margin-right: 10px;"></i>Practice PDFs</li>
</ul>
            <a class="btn-primary">Get Started</a>
        </div>

        <div class="pricing-box">
            <h5>Premium</h5>
            <p class="price">$3/mo</p>
            <ul class="features-list">
            <li><i class="fas fa-check-circle" style="color: green;margin-right: 10px;"></i> Free Code Snippets</li>
    <li><i class="fas fa-check-circle" style="color: green;margin-right: 10px;"></i>Interactive Learning Quizzes</li>
    <li><i class="fas fa-check-circle" style="color: green;margin-right: 10px;"></i>Typing Speed Enhancement</li>
    <li><i class="fas fa-check-circle" style="color: green;margin-right: 10px;"></i>Color Exploration</li>
    <li><i class="fas fa-check-circle" style="color: green;margin-right: 10px;"></i>Practice PDFs</li>
</ul>

            <a class="btn-primary">Get Started</a>
        </div>

        <div class="pricing-box">
            <h5>Platinum</h5>
            <p class="price">$30/year</p>
            <ul class="features-list">
            <li><i class="fas fa-check-circle" style="color: green;margin-right: 10px;"></i> Free Code Snippets</li>
    <li><i class="fas fa-check-circle" style="color: green;margin-right: 10px;"></i>Interactive Learning Quizzes</li>
    <li><i class="fas fa-check-circle" style="color: green;margin-right: 10px;"></i>Typing Speed Enhancement</li>
    <li><i class="fas fa-check-circle" style="color: green;margin-right: 10px;"></i>Color Exploration</li>
    <li><i class="fas fa-check-circle" style="color: green;margin-right: 10px;"></i>Practice PDFs</li>
</ul>
            <a class="btn-primary">Get Started</a>
        </div>
    </div>
</div> -->

</div>

    </div>
    
<script>
    document.getElementById("learn-more-btn").addEventListener("click", function() {
        var additionalContent = document.getElementById("additional-content");
        if (additionalContent.style.display === "none") {
            additionalContent.style.display = "block";
            document.getElementById("learn-more-btn").innerHTML = 'Show Less';
        } else {
            additionalContent.style.display = "none";
            document.getElementById("learn-more-btn").innerHTML = 'Learn More';
        }
    });
</script>
    
    <?php
    include 'footer.php';
  ?>
</body>
</html>