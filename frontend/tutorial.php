<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial</title>
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
            /* margin: 50px auto; */
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
        .section-container-2 {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px;
            /* background-color: #f4f4f4; */
            padding-top: 40px;
        }

        .section-container-2 img {
            max-width: 25%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            margin-right: 35px;
        }

        .content-container-2 {
            max-width: 800px;
            margin-left: -55px;
            text-align:center;
        }

        .content-container-2 h3 {
            color:var(--light-btn);
            font-family:myhead;
            font-size:22px;
            padding-left: 70px;
        }
        .btn-container-2 {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            padding-left: 75px;
        }

        .btn-container-2 button {
            padding: 10px 20px;
            background-color: var(--light-btn);
            color: var(--light-font);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-container-2 button:hover {
            background-color: var(--btn-hover);
        }
        



        .section-container-1 {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px;
            /* background-color: #f4f4f4; */
            padding-top: 40px;
        }

        .section-container-1 img {
            max-width: 25%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            margin-left: 35px;
        }

        .content-container-1 {
            max-width: 800px;
            margin-right: 25px;
            text-align:center;
        }

        .content-container-1 h3 {
            color:var(--light-btn);
            font-family:myhead;
            font-size:22px;
            padding-left: 70px;
        }
        .btn-container-1 {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            padding-left: 75px;
        }

        .btn-container-1 button {
            padding: 10px 20px;
            background-color: var(--light-btn);
            color: var(--light-font);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-container-1 button:hover {
            background-color: var(--btn-hover);
        }
    </style>
</head>
<body class="dark">
    <?php include 'header.php'; ?>
    <section class="section-container-2">
        <div class="content-container-2">
            <h3>PHP Mastery Guide</h3>
            <p style="padding-left: 70px;color: white;">PHP (Hypertext Preprocessor) is a server-side scripting language designed for web development. It was created by Rasmus Lerdorf in 1994 and has since become one of the most widely used programming languages for building dynamic websites and web applications. PHP is embedded in HTML code and executed on the server, generating dynamic content that is then sent to the client's web browser.</p>
            <div class="btn-container-2">
            <a href="tutorial_of_language.php?language=PHP"><button>PHP Learning Lab</button></a>
   </div>
        </div>
        <img src="gif/php.gif" alt="Example Image">
    </section>
    <section class="section-container-1">
    <img src="gif/c.gif" alt="Example Image">
        <div class="content-container-1">
            <h3>C Mastery Guide</h3>
            <p style="padding-left: 70px;color: white;">C is a general-purpose programming language that was developed in the early 1970s at Bell Labs by Dennis Ritchie. C is known for its simplicity, efficiency, and close-to-the-hardware capabilities. It has had a profound influence on many programming languages and is widely used in various application domains, including system software, embedded systems, and application development.</p>
            <div class="btn-container-1">
            <a href="tutorial_of_language.php?language=C"><button>C Learning Lab</button></a>
            </div>
        </div>
    </section>
    <!-- <section class="section-container-2">
        <div class="content-container-2">
            <h3>C++ Mastery Guide</h3>
            <p style="padding-left: 70px;color: white;">C++ is a powerful and versatile programming language that builds upon the foundation of C. It was developed by Bjarne Stroustrup in the early 1980s at Bell Labs. C++ supports both procedural and object-oriented programming paradigms, providing features such as classes, inheritance, polymorphism, and more. It is widely used in various domains, including system/software development, game development, embedded systems, and scientific computing.</p>
            <div class="btn-container-2">
            <a href="tutorial_of_language.php?language=cpp"><button>C++ Learning Lab</button></a>
            </div>
        </div>
        <img src="gif/c.gif" alt="Example Image">
    </section> -->
    <section class="section-container-2">
        <div class="content-container-2">
            <h3>PYTHON Mastery Guide</h3>
            <p style="padding-left: 70px;color: white;">Python is a high-level, interpreted programming language known for its simplicity, readability, and versatility. It was created by Guido van Rossum and first released in 1991. Python's design philosophy emphasizes code readability and ease of use, and its syntax allows programmers to express concepts in fewer lines of code than languages like C++ or Java. Python supports multiple programming paradigms, including procedural, object-oriented, and functional programming. It has a large and active community, contributing to its extensive ecosystem of libraries and frameworks.</p>
            <div class="btn-container-2">
            <a href="tutorial_of_language.php?language=Python"><button>PyMaster Learning Lab</button></a>
            </div>
        </div>
        <img src="gif/py.gif" alt="Example Image">
    </section>
    <section class="section-container-1">
    <img src="gif/java.gif" alt="Example Image">
        <div class="content-container-1">
            <h3>JAVA Mastery Guide</h3>
            <p style="padding-left: 70px;color: white;">Java is a widely-used, high-level, object-oriented programming language developed by James Gosling and his team at Sun Microsystems (now a subsidiary of Oracle Corporation) in the mid-1990s. Java is designed to be platform-independent, meaning that Java programs can run on any device that has the Java Virtual Machine (JVM) installed. It is known for its simplicity, portability, and strong support for multi-threading, making it a popular choice for developing a wide range of applications, from web and mobile applications to enterprise-level systems.</p>
            <div class="btn-container-1">
            <a href="tutorial_of_language.php?language=Java"><button>JAVA Learning Lab</button></a>
  </div>
        </div>
    </section>
   
    <!-- <section class="section-container-1">
    <img src="gif/html.gif" alt="Example Image">
        <div class="content-container-1">
            <h3>HTML Mastery Guide</h3>
            <p style="padding-left: 70px;color: white;">HTML (Hypertext Markup Language) is the standard markup language used to create and structure content on the web. It is the backbone of web development, providing a standardized way to define the structure and presentation of documents on the World Wide Web. HTML uses a markup system with elements and tags to describe the various components of a web page, such as text, images, links, forms, and more.</p>
            <div class="btn-container-1">
            <a href="tutorial_of_language.php?language=html"><button>HTML Learning Lab</button></a>
            </div>
        </div>
    </section> -->
    <?php include 'footer.php'; ?>
</body>
</html>
