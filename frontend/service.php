<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
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
        body {
            /* font-family: 'Montserrat', sans-serif; */
            background-color: var(--light-theme);
            color: var(--light-font);
        }

        .container {
            width: 100%;
            margin: 50px auto;
        }

        h3 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 30px;
            color: var(--head-color);
            font-family: var(--head-font);
        }

        .service1 {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }

        .service-section {
            flex: 1;
            padding: 20px;
            margin: 0 20px;
            background-color: var(--light-btn);
            border-radius: 10px;
            text-align: center;
        }

        .service-section h2 {
            font-size: 24px;
            color: var(--head-color);
        }

        .service-section p {
            font-size: 16px;
            line-height: 1.6;
            color: black;
        }

        .readmore {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            background-color: var(--light-btn);
            font-size: 17px;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 10px;
            border: none;
        }

        .readmore:hover {
            transition: 1s;
            background-color: var(--btn-hover);
        }

        .dark {
            --light-theme: #333548;
            --light-btn: #4caf50;
            --light-font: beige;
            --btn-hover: #57cc99;
            --head-font: mytxt;
            --normal-font: 'Salsa', cursive;
            --head-color: #4caf50;
        }

        @media screen and (max-width: 768px) {
            .service {
                flex-direction: column;
                align-items: center;
            }

            .service-section {
                margin: 0;
                margin-bottom: 20px;
            }
        }
        .ourservice {
         /* Set the background color to white */
            padding: 10px 0; /* Add some padding for better visual appeal */
        }

        /* Style the first service-section */
        .service-section:nth-child(odd) {
            background-color: #f5d7d7; /* Set the background color to light pink */
            color: #1C402E; /* Set the text color to a dark color for better contrast */
        }

        /* Style the second service-section */
        .service-section:nth-child(even) {
            background-color: #add8e6; /* Set the background color to light blue */
            color: #1C402E; /* Set the text color to a dark color for better contrast */
        }
        .service-section a {
            color: #1C402E; /* Set the link color */
            text-decoration: none; /* Remove underlines from links */
            font-weight: bold; /* Set the font weight to bold */
        }

        /* Hover effect for the link inside the service-section */
        .service-section a:hover {
            color: #4caf50; /* Set the link color on hover */
        }
        .service2 {
        display: flex;
        justify-content: space-around;
        margin-top: 30px;
    }

    /* Style the service-section within service2 */
    .service2 .service-section {
        flex: 1;
        padding: 20px;
        margin: 0 20px;
        border-radius: 10px;
        text-align: center;
        margin-bottom: 20px;
    }

    /* Style the first service-section in service2 */
    .service2 .service-section:nth-child(odd) {
        background-color: cornsilk; /* Set the background color to light pink */
        color: #1C402E; /* Set the text color to a dark color for better contrast */
    }

    /* Style the second service-section in service2 */
    .service2 .service-section:nth-child(even) {
        background-color: darkseagreen; /* Set the background color to light blue */
        color: #1C402E; /* Set the text color to a dark color for better contrast */
    }

    /* Style the link inside the service-section in service2 */
    .service2 .service-section a {
        color: #1C402E; /* Set the link color */
        text-decoration: none; /* Remove underlines from links */
        font-weight: bold; /* Set the font weight to bold */
    }

    /* Hover effect for the link inside the service-section in service2 */
    .service2 .service-section a:hover {
        color: #4caf50; /* Set the link color on hover */
    }

    /* Style the third service-section in service2 */
    .service2 .service-section:nth-child(3) {
        background-color: #ffe4e1; /* Set a different background color */
        color: #1C402E; /* Set the text color to a dark color for better contrast */
    }

    /* Style the fourth service-section in service2 */
    .service2 .service-section:nth-child(4) {
        background-color: #b0e0e6; /* Set another different background color */
        color: #1C402E; /* Set the text color to a dark color for better contrast */
    }
    </style>

    <script>
        $(document).ready(function() {
            $('.readmore').click(function() {
                if ($('body').hasClass('light')) {
                    $('body').removeClass('light');
                    $('body').addClass('dark');
                } else {
                    $('body').removeClass('dark');
                    $('body').addClass('light');
                }
            });
        });
    </script>
</head>
<body class="dark">
    <?php include 'header.php'; ?>
<section class = ourservice>
    <div class="container">
        <h3>Our Services</h3>

        <div class="service1">
            <div class="service-section">
            <h2><a href="colorpicker.php" target="_blank" class="service-link">Color Picker Service</a></h2>
                <p>
                    Our Color Picker Service allows you to choose and experiment with a variety of colors for your
                    projects.
                    Whether you are designing a website or working on a creative project, our color picker tool makes
                    it easy to
                    find the perfect color palette.
                </p>
               
            </div>

            <div class="service-section">
            <h2><a href="allquiz.php" target="_blank" class="service-link">Quiz Service</a></h2>
                <p>
                    Test your knowledge with our Quiz Service. We offer a range of quizzes on different topics to
                    challenge and
                    enhance your understanding. Whether you are a student looking for educational quizzes or just want
                    to have
                    some fun, our quiz service has something for everyone.
                </p>
               
            </div>
        </div>
        <div class="service2">
        <div class="service-section">
                    <h2><a href="editor.php" target="_blank" class="service-link">Editor Service</a></h2>
                    <p>
                        Our Editor Service provides a powerful code editing environment with features like syntax
                        highlighting, auto-completion, and more. Whether you are a seasoned developer or just getting
                        started, our editor service makes coding a breeze.
                    </p>
                </div>

                <!-- Fourth Service: Practice Problem Service -->
                <div class="service-section">
                    <h2><a href="prectice.php" target="_blank" class="service-link">Practice Problem Service</a></h2>
                    <p>
                        Sharpen your coding skills with our Practice Problem Service. We offer a variety of coding
                        challenges to help you improve your problem-solving abilities. Whether you are preparing for an
                        interview or just want to enhance your coding skills, our practice problems are tailored for you.
                    </p>
                </div>
    </div>
    <div class="service1">
            <div class="service-section">
            <h2><a href="typespeed.php" target="_blank" class="service-link">Typing Speed</a></h2>
            <p>
        Improve your typing speed with our Typing Speed Service. Whether you're a beginner looking to enhance your
        keyboarding skills or an experienced typist aiming for faster and more accurate typing, our Typing Speed
        Service provides tailored exercises to help you achieve your goals.
    </p>
               
            </div>

            <div class="service-section">
            <h2><a href="Contactus.php" target="_blank" class="service-link">Contact US</a></h2>
            <p>
        Stay informed with our News Service. Get the latest updates on current events, entertainment, technology, and
        more. Our News Service offers a diverse range of news articles to keep you engaged and well-informed.
    </p>
               
            </div>
        </div>
    </div>
    </section>
    <?php include 'footer.php'; ?>
</body>
</html>
