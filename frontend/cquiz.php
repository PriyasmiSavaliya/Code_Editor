<!DOCTYPE html>
<html>
<head>
  <title>C Quiz</title>
  <link href="https://fonts.googleapis.com/css2?family=Holtwood+One+SC&family=Josefin+Slab&family=Kalnia&family=Marhey&family=Salsa&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-icons.css">
  <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');
        @font-face {
            font-family: myfont;
            src: url(css/freakfinder.ttf);
        }
        @font-face {
            font-family: mytxt;
            src: url(css/foxcroft.ttf);
        }
        *{
            font-family:var(--normal-font);
        }
        .dark{
            --light-theme:#333548;
            --light-btns:#333548;
            --light-font:beige;
            --btn-hover:#57cc99;
            --head-font:mytxt;
            --normal-font:'Salsa', cursive;
            --head-color:#4caf50;

            background-color:#333548;
            color:var(--light-font)

        } 
        body {
        font-family: 'Poppins', sans-serif;
        /* display: flex; */
        /* justify-content: center; */
        margin:0px;
        /* flex-direction:column; */
        width:100%;
        }

        .upper-layer{
          display:flex;
          justify-content:center;
          align-items:center;
          background-color: #333548;
          width: 100%;
        }

        .container {
        width: 100%;
        padding: 20px;
        box-shadow: 0 5px 10px rgb(0 0 0 / 65%);
        border:2px solid var(--light-btns);
        color:var(--light-font);
        border-radius: 20px;
        margin-top: 30px;
        margin: 30px 10px;
        }
        .container2 {
        width: 100%;
        padding: 20px;
        box-shadow: 0 5px 10px rgb(0 0 0 / 65%);
        border:2px solid var(--light-btns);
        color:var(--light-font);
        border-radius: 20px;
        padding-left: 60px;
    /* margin-top: 30px; */
    margin: 30px 10px;
        }

        h1 {
        text-align: center;
        font-family:mytxt;
        }

        .question {
        font-weight: bold;
        padding-top:20px;
        margin-bottom: 10px;
        font-family:math;
        font-size:20px;
        }

        .options {
        margin-bottom: 20px;
        }

        .option {
        display: block;
        margin-bottom: 10px;
        }

        .button {
        display: inline-block;
        padding: 12px 24px;
        background-color: #3b8238; /* Green button color */
        color: #fff; /* White text color */
        border: 2px solid #3b8238; /* Green border color */
        cursor: pointer;
        font-size: 16px;
        border-radius: 25px;
        transition: background-color 0.3s, color 0.3s, border-color 0.3s; /* Transition for color changes */
        margin-right: 10px;
        }

        .button:hover {
          background-color: #333548;
    border-color: #3b8238;
    color: #3b8238;
        }

        .result {
        text-align: center;
        margin-top: 20px;
        font-weight: bold;
        }

        .hide{
        display: none;
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
        @media screen and (max-width: 768px){
            .image{
                margin:0;
                margin-bottom:20px;
            }
        }
  </style>

</head>
<body class="dark">
    <?php include 'header.php';?>
    <div class="row upper-layer">
      <!-- <div class="col-sm-3">
        <div class="container">
          <div class="image">
                <img src="images/7718868.jpg">
            </div>
        </div>
      </div> -->
      <div class="col-sm-9">
        <div class="container2">
          <h1>C QUIZ</h1>
          <div id="quiz"></div>
          <div id="result" class="result"></div>
          <button id="submit" class="button">Submit</button>
          <button id="retry" class="button hide">Retry</button>
          <button id="showAnswer" class="button hide">Show Answer</button>
        </div>
      </div>
    </div> 
  <script src="js/quiz/c.js"></script>
</body>
</html>