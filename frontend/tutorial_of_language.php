<?php
    session_start();
    include 'db.php';
     // Check if the language parameter is set in the URL
     if (isset($_GET['language'])) {
        $selectedLanguage = $con->real_escape_string($_GET['language']);
        $_SESSION['selected_language'] = $selectedLanguage;
    }

    // Retrieve tutorials based on the selected language
    if (isset($_SESSION['selected_language'])) {
        $selectedLanguage = $con->real_escape_string($_SESSION['selected_language']);
        $sql = "SELECT * FROM tutorial WHERE language = '$selectedLanguage'";
        $result = $con->query($sql);
    } else {
        // Default language (PHP)
        $selectedLanguage1 = 'PHP';
        $sql = "SELECT * FROM tutorial WHERE language = '$selectedLanguage1'";
        $result = $con->query($sql);
    }
  
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

        .container-fluid {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            background-color: white;
            padding: 20px;
            min-width: 250px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .main-content {
            flex: 1;
            padding: 20px;
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
            .container-fluid {
                flex-direction: column;
            }

            .sidebar {
                min-width: 100%;
            }
        }
        h3 {
        color: white; /* Set text color */
        font-size: 24px; /* Set font size */
        margin-bottom: 10px; /* Add margin at the bottom */
        }

        /* Style for the paragraph */
        p {
            color: white; /* Set text color */
            font-size: 16px; /* Set font size */
            line-height: 1.5; /* Set line height for better readability */
            margin-bottom: 20px; /* Add margin at the bottom */
        }
        .code-box {
    background-color: #f4f4f4; /* Set background color */
    border: 1px solid #ccc; /* Set border color and thickness */
    padding: 15px; /* Add padding */
    margin: 10px 0; /* Add margin at the top and bottom */
    overflow-x: auto; /* Add horizontal scroll for long code lines */
}

/* Style for the code text */
.code-text {
    font-family: 'Courier New', monospace; /* Set a monospaced font for code */
    font-size: 20px; /* Set font size */
    color: #333; /* Set text color */
    margin: 0; /* Remove default margin */
}

/* Style for the paragraph within the code box */
.code-box p {
    color: #000; /* Set text color to black */
}
a {
    color: #000; /* Set text color to black */
    text-decoration: none; /* Remove underline by default */
}

/* Style for the anchor when hovered */
a:hover {
    text-decoration: underline; /* Add underline on hover */
}
#custom-button {
    background-color: #4caf50; /* Set button background color */
    color: white; /* Set button text color */
    padding: 10px 20px; /* Set padding inside the button */
    border: none; /* Remove button border */
    border-radius: 5px; /* Add border radius for rounded corners */
    cursor: pointer; /* Set cursor to pointer on hover */
    font-size: 16px; /* Set button text font size */
}

#custom-button:hover {
    background-color: #57cc99; /* Change background color on hover */
}
    </style>
</head>
<body class="dark">
    <?php include 'header.php'; ?>

    <div class="container-fluid">
        <div class="sidebar">
            <!-- Sidebar content goes here -->
            <h4><?php echo ucfirst($selectedLanguage); ?> Tutorial</h4>
    <ul>
        <?php
        // Display dynamic links based on the selected language
        while ($row = $result->fetch_assoc()) {
            $encodedTopic = urlencode($row['topic_name']);
            echo "<li><a href='tutorial_of_language.php?topic=$encodedTopic'>" . $row['topic_name'] . "</a></li>";
        }
        ?>
    </ul>
        </div>

        <div class="main-content">
        <?php
                // Handle user clicks to display topic details
                if (isset($_GET['topic'])) {
                    $selectedTopic = $con->real_escape_string($_GET['topic']); // Sanitize input to prevent SQL injection
                    $topicSql = "SELECT * FROM tutorial WHERE topic_name = '$selectedTopic' AND language = '$selectedLanguage'";
                    $topicResult = $con->query($topicSql);
                
                    if ($topicResult) {
                        $topicRow = $topicResult->fetch_assoc();
                
                        if ($topicRow) {
                            echo "<h3>" . htmlspecialchars($topicRow['topic_name']) . "</h3>";
                            echo "<p>" . htmlspecialchars($topicRow['description']) . "</p></br>";
                            
                            // Check if 't_code' is not empty before displaying it
                            if (!empty($topicRow['t_code'])) {
                                echo "<p>Example :</p>";
                                echo "<div class='code-box'><pre class='code-text'>" . htmlspecialchars($topicRow['t_code']) . "</pre></div>";
                            } else {
                                echo "<p>No code available for this topic.</p>";
                            }
                        } else {
                            echo "<p>No data found for the selected topic.</p>";
                        }
                    } else {
                        echo "<p>Error executing the SQL query: " . $con->error . "</p>";
                    }
                    $encodedCode = urlencode($topicRow['t_code']);
                    $selectedLanguage = urlencode($selectedLanguage); // Encode selected language
                    echo "<a href='editor.php?lang=$selectedLanguage&code=$encodedCode' style='display: inline-block; padding: 10px 20px; background-color: #4caf50; color: white; text-decoration: none; border-radius: 5px; transition: background-color 0.3s ease;'>Try Your Self</a>";

                 } 
                

                else {
                    echo "<h3>Tutorial</h3>";
                    echo "<p>For All Language</p>";
                }
            ?>
          <?php
    ?>
        </div>
       
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
