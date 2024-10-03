<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typing Speed</title>
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
      
        <link href="css/type.css" rel="stylesheet">
    <style>
           body {
            /* font-family: 'Montserrat', sans-serif; */
            /* background-color: var(--light-theme); */
            /* color: var(--light-font); */
        }

        .container {
            width: 100%;
            /* margin: 50px auto; */
        }
        @font-face {
            font-family: myfont;
            src: url(css/freakfinder.ttf);
        }
        @font-face {
            font-family: mytxt;
            src: url(css/foxcroft.ttf);
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
    </style>
</head>
<body>
<?php include 'header.php'; ?>
<section class="main-body">
    <h2>typing Speed test</h2>
    <p id="showSentence"></p>

    <div class="typing_section">
        <label for="textarea"></label>
        <textarea name="textarea" id="textarea" cols="30" rows="10" disabled></textarea>
        <br>
        <button id="btn">Start</button>
    </div>

    <p id="score"></p>
</section>
<?php include 'footer.php'; ?>
<script src="js/type.js"></script>
</body>
</html>