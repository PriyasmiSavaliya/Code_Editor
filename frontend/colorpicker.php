<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Picker </title>
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

code {
    padding: 5px 8px;
    border-radius: 18px;
    background: #f8f9f9;
    color: #cc0066;
}

[type='color'] {
    appearance: none;
    padding: 0;
    width: 15px;
    height: 15px;
    border: none;
}

[type='color']::-webkit-color-swatch-wrapper {
    padding: 0;
}

[type='color']::-webkit-color-swatch {
    border: none;
}

.color-picker {
    padding: 10px 15px;
    border-radius: 10px;
    border: 1px solid #ccc;
    background: #f8f9f9;
}
.color {
    /* display: flex; */
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Adjust as needed */
    padding-top: 50px;
}

.color p {
    text-align: center;
    margin-bottom: 10px;
}
.color-picker-container {
    /* display: flex; */
    justify-content: center;
    align-items: center;
   /* Ensures the container takes up the full height of its parent */
padding-left:580px;
}

.color-picker {
    color: black;
}

        </style>
</head>

<body sty>
<?php include 'header.php'; ?>
<div class="color">
    <p>A simple color picker that can be used with browsers that support <code>input[type=color]</code>.</p>
    <p style="margin-bottom: 50px;">You can see the HEX code of picked color.</p>

    <div class="color-picker-container">
    <span class="color-picker">
        <label for="colorPicker">
            <input type="color" value="#1DB8CE" id="colorPicker">
        </label>
    </span>
</div>
</div>
<?php include 'footer.php'; ?>

    <script>
        //Get Value
document.querySelectorAll('input[type=color]').forEach(function (picker) {
    //Target Point
    var targetLabel = document.querySelector('label[for="' + picker.id + '"]'),
        codeArea = document.createElement('span');

    codeArea.innerHTML = picker.value;
    targetLabel.appendChild(codeArea);

    //Now AddEventListener
    picker.addEventListener('change', function () {
        codeArea.innerHTML = picker.value;
        targetLabel.appendChild(codeArea);
    });
});


        </script>
      
</body>

</html>