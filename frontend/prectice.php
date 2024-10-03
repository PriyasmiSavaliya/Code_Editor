<?php
    session_start();
    include 'db.php';
    if(isset($_SESSION["Login"]) && is_array($_SESSION["Login"]) ) {
        // User is logged in, display the content of practice.php
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice</title>
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
            src: url(css/freakfinder.ttf);
        }
        @font-face {
            font-family: mytxt;
            src: url(css/foxcroft.ttf);
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--normal-font);
        }
        .light {
            --light-theme: #F5EBE0;
            --light-btn: #4caf50;
            --light-font: #1C402E;
            --btn-hover: #1C402E;
            --head-font: mytxt;
            --normal-font: 'Salsa', cursive;
            --head-color: #4caf50;
            background-color: var(--light-theme);
            color: var(--light-font);
        }
        .dark {
            --light-theme: #333548;
            --light-btn: #4caf50;
            --light-font: beige;
            --btn-hover: #57cc99;
            --head-font: mytxt;
            --normal-font: 'Salsa', cursive;
            --head-color: #4caf50;
            background-color: var(--light-theme);
            color: var(--light-font);
        }
        table {
            width: 80%;
            margin: 105px auto; /* Center the table horizontally */
            border-collapse: collapse;
            background-color: var(--light-theme);
            color: var(--light-font);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }
        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid var(--light-font);
        }
        th {
            background-color: var(--head-color);
            color: white;
        }
        tr:hover {
            background-color: #4e5e4e;
            color: white;
        }
        a.practice-link {
            display: inline-block;
            padding: 8px 12px;
            text-decoration: none;
            background-color: var(--head-color);
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        a.practice-link:hover {
            background-color: var(--btn-hover);
        }
        a:hover {
    color: #ffffff;
}
        .overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgb(0 0 0 / 71%);
    z-index: 1000;
}

.close-btn {
    /* display: none; */
    position: fixed;
    top: -17px;
    right: 20px;
    font-size: 45px;
    cursor: pointer;
    color: white;
    z-index: 1000;
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
    color:#ffffff;
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
    <table>
    <thead>
        <tr>
            <th>Task ID</th>
            <th>Challenge Language</th>
            <th>Challenge Name</th>
            <th>Review Challenge</th>
            <th>Test Your Skills</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM practice";
        $result = mysqli_query($con, $sql);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['prc_lang']}</td>";
                echo "<td>{$row['prc_name']}</td>";
                echo "<td>";

                $sql_payment = "SELECT * FROM payment WHERE email = '{$_SESSION['Login']['email']}'";
                $result_payment = mysqli_query($con, $sql_payment);

                if ($result_payment && mysqli_num_rows($result_payment) > 0) {
                    echo "<a href=\"#\" onclick=\"openPDFInNewTab('prectice/{$row['prc_pdf']}')\" class='btn btn-success btn-sm'>Review</a>";
                } else {
                    echo '<button class="btn btn-success btn-sm pay-and-practice">Subscribe & Practice</button>';
                }

                echo "</td>";
                echo "<td><a href='editor.php' class='btn btn-info btn-sm'>Test Now</a></td>";
                echo "</tr>";
            }
        } else {
            echo "Error: " . mysqli_error($con);
        }
        ?>
    </tbody>
</table>
    

<div class="overlay" id="overlay">
    <div class="pricingsec" id="pricingsec">
        <section class="section-sub" id="pricing-section">
            <div class="close-btn" id="close-btn">&times;</div>
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
    </div>
</div>


    <?php include 'footer.php';?>
    <script>
    $(document).ready(function() {
        $(".pay-and-practice").click(function() {
            $("#overlay").show();
            $("#pricing-section").show();
        });

        $("#overlay, #close-btn").click(function() {
            $("#overlay").hide();
            $("#pricing-section").hide();
        });
    });

    function openPDFInNewTab(pdfPath) {
        var win = window.open(pdfPath, '_blank');
        win.focus();
    }
</script>

</body>
</html>
<?php
    } else {
        // User is not logged in, redirect to login page or display a message
        header("location: login.php");
        exit;
    }
?>
