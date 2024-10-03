<?php
session_start();

$_SESSION['user']=md5(uniqid($_SESSION['user'], true));
// echo "SESSION Id : " . $_SESSION['user'].".cpp";
include 'db.php';
// Fetch available languages from your database
$sql = "SELECT lang_name FROM lang";
$result = $con->query($sql);
$languages = [];

// Fetch languages and store them in an array
while ($row = $result->fetch_assoc()) {
    $languages[] = $row["lang_name"];
}

// Get the selected language from the URL parameter
$selectedLanguage = isset($_GET['lang']) ? $_GET['lang'] : '';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editor</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link href="https://fonts.googleapis.com/css2?family=Holtwood+One+SC&family=Josefin+Slab&family=Kalnia&family=Marhey&family=Salsa&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <style>
            .light{
                --theme-color:#F5EBE0;
                --element-color:#E3D5CA;
                --btn-color:#4caf50 ;
                --txt-color:black;
            }
            .dark{
                --theme-color:#2A2D3C;
                --element-color:#323648;
                --btn-color:#4caf50 ;
                --txt-color:beige;
            }
            @font-face {
                font-family: myfont;
                src: url(css/freakfinder.ttf);
            }
            @font-face {
                font-family: mytxt;
                src: url(css/foxcroft.ttf);
            }
            .container {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                padding:8px;
                margin:-8px;
                gap: 5px;
                grid-auto-rows: minmax(50px, auto);
                background-color:var(--theme-color);
                border-radius:5px;
                font-family:'Salsa', cursive;
                color:var(--txt-color);
            }
            .languages {
                grid-column: 1 / 5;
                grid-row: 1;
                border-top: 1px solid var(--txt-color);
                border-bottom: 1px solid var(--txt-color);
                height: 52px;
            }
                .tab-nav-bar{
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: space-around;
                    width: 300%;
                }
                .tab-menu{
                    list-style: none;
                    display:flex;
                    background-color: var(--theme-color);
                    max-width: 1450px;
                    margin:0px;
                    padding:10px;
                    border-radius:10px;
                    overflow-x: auto;
                }
                .tab-menu::-webkit-scrollbar{
                    display: none;
                }
                #lang{
                    border-radius:5px;
                    background-color:white;
                    font-family:mytxt;
                }
                .tab-btn{
                    display:inline-block;
                    font-size: 1em;
                    font-weight: 400;
                    font-family: myfont;
                    margin: 0px 2px;
                    padding: 10px 20px;
                    border-radius: 10px;
                    background-color:var(--theme-color);
                    cursor:pointer;
                    user-select: none;

                }
                .tab-btn:hover{
                    transition: 1s;
                    background-color: var(--btn-color);
                } 
                .active{
                    transition: 1s;
                    background-color: var(--btn-color);
                } 
            .icons {
                display:flex;
                justify-content:flex-start;
                gap:23px;
                align-items: center;
                padding: 5px 13px;
                grid-column: 1 / 4;
                grid-row: 1;
                border-radius:5px;
                margin-top: -4px;
            }
                i:hover {
                    transition: 0.5s;
                    color:var(--btn-color);
                }
                .material-symbols-outlined:hover {
                    transition: 0.5s;
                    color:var(--btn-color);
                }    
            .buttons {
                grid-column: 4 / 5;
                grid-row: 1;
                display: flex;
                justify-content:end;
                align-content: center;
                height: 52px;
            }
            .btn{
                    display: inline-block;
                    font-size: 1.5em;
                    font-weight: 400;
                    font-family: 'Salsa', cursive;
                    color:var(--txt-color);
                    margin: 5px 20px;
                    padding: 5px 25px;
                    border-radius: 5px;
                    /* border:1px solid var(--txt-color); */
                    background-color:var(--btn-color);
                    cursor:pointer;
                    user-select: none;

            }
            .btn:hover{
                    transition: 0.5s;
                    background-color:transparent;
                    border: 2px solid var(--btn-color);
                    color:var(--btn-color);
            }
            .material-icons:hover{
                    transition: 1s;
                    color: var(--txt-color);
                    border: none;
            }
            .user-input {
                font-size:14px;
                grid-column: 1 / 3;
                grid-row: 2 / 14;
                border-radius:5px;
            }
            .input {
                font-size:14px;
                grid-column: 1 / 5;
                grid-row: 2 / 8;
                border-radius:5px;
            }
            .user-output {
                padding:10px 10px;
                background-color:var(--element-color);
                font-size:14px;
                grid-column: 3 / 5;
                grid-row: 2 / 14;
                border-radius:5px;
                font-family: sans-serif;
            }
            .output {
                padding:10px 10px;
                background-color:var(--element-color);
                font-size:14px;
                grid-column: 1 / 5;
                grid-row: 8 / 14;
                border-radius:5px;
            }
                .o-input{
                    background-color: beige; 
                    color: black; 
                    height: 150px;
                }
                .n-input{
                    background-color:beige;
                    color:black;
                    position:relative;
                    bottom:30px;
                    height: 110px;
                }
            textarea{
                width: 100%;
                height: 100%;
                padding: 10px;
                background-color: var(--element-color);
                color:var(--txt-color);
                font-family:sans-serif;
                box-sizing: border-box;
                border:none;
                border-radius:5px;
                overflow: hidden;
                overflow-y: scroll;
                resize: vertical;
            }
            textarea::-webkit-scrollbar{
                display:none;
            }
            .material-icons {
                font-family: 'Material Icons';
                font-weight: normal;
                font-style: normal;
                font-size: 24px; /* Adjust the font size as needed */
                display: inline-block;
                line-height: 1;
                text-transform: none;
                letter-spacing: normal;
                word-wrap: normal;
                white-space: nowrap;
                direction: ltr;
                -webkit-font-feature-settings: 'liga';
                -webkit-font-smoothing: antialiased;
            }

        </style>
        <script>  
            $(document).ready(function() {
                $('.material-symbols-outlined').click(function() {
                    if ($('.l1').hasClass('user-input')){
                        $('.l1').removeClass('user-input');
                        $('.l1').addClass('input');
                        $('#inputs').removeClass('o-input');
                        $('#inputs').addClass('n-input');
                        $('span').text("splitscreen_bottom");
                    } else {
                        $('.l1').removeClass('input');
                        $('.l1').addClass('user-input');
                        $('#inputs').removeClass('n-input');
                        $('#inputs').addClass('o-input');
                        $('span').text("splitscreen_right");
                    }
                    if ($('.l2').hasClass('user-output')){
                        $('.l2').removeClass('user-output');
                        $('.l2').addClass('output');
                    } else {
                        $('.l2').removeClass('output');
                        $('.l2').addClass('user-output');
                    }
                });
                $('.fa-circle-half-stroke').click(function() {
                    if ($('body').hasClass('light')){
                        $('body').removeClass('light');
                        $('body').addClass('dark');
                    } else {
                        $('body').removeClass('dark');
                        $('body').addClass('light');
                    }
                });
                $('.fa-house').click(function() {
                    $(location).prop('href', './home.php')
                });
                });
           
        </script>
    </head>
    <body class="dark">
            <div class="container">
                <div class="languages">
                    <div class="icons">
                        <i class="fa-solid fa-house fa-xl"></i>
                        <i class="fa-solid fa-circle-half-stroke fa-xl"></i>
                        <span class="material-symbols-outlined">splitscreen_right</span>
                        <i class="fa-solid fa-expand fa-xl" id="toggle_fullscreen"></i>
                        <i class="fa-solid fa-download fa-xl download-btn" title="Download Code" onclick="download()"></i>
                        <label > Language:</label>
                        <select name="language" id="lang" style="width: 200px;height: 30px;">
                        <?php
                        // Dynamically generate options from the array
                        foreach ($languages as $language) {
                            $selected = ($language == $selectedLanguage) ? 'selected' : '';
                            echo "<option $selected>$language</option>";
                        }
                        ?>
                        </select>
                        <label > Font Size:</label>
                        <select name="fontSize" id="fontSizeSelect" style="width: 200px; height: 30px;">
                            <option>Normal</option>
                            <option>14</option>
                            <option>16</option>
                            <option>18</option>
                            <option>20</option>
                            <option>22</option>
                            <option>24</option>
                        </select>
                        <div class="buttons">
                            <button class="btn" onclick="gv()">Run</button>
                        <!-- <button class="btn btn-primary btn2" id="toggle_fullscreen"><i class="material-icons">fullscreen</i></button> -->
                        </div>
                    </div>
                </div>
            
                <div class="user-input l1">
                    <textarea  type="text" id="subject" name="subject" placeholder=" ">#Input....</textarea>
                </div>
              
                <div class="user-output l2" id="codedesk">
                    <div id="outputContainer" style="height: 75%;">
                        #output
                    </div>
                    <div>
                        <textarea name="inputs" id="inputs" class="o-input">#user input</textarea>
                    </div>
                </div>
            </div>
        <script>
             function gv() {
        var code = document.getElementById("subject").value;
        var lang = document.getElementById("lang").value;
        var inputs = document.getElementById("inputs").value;

        lang = encodeURIComponent(lang);
        code = encodeURIComponent(code);
        inputs = encodeURIComponent(inputs);

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                // Update the content of the outputContainer div instead of the whole codedesk div
                document.getElementById("outputContainer").innerHTML = this.responseText;
            }
        };

        xhttp.open("POST", "execute.php?language=" + lang, true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("code=" + code + "&inputs=" + inputs);
    }

            $('#toggle_fullscreen').on('click', function(){
                console.log('edded test');
            // if already full screen; exit
            // else go fullscreen
            if (
                document.fullscreenElement ||
                document.webkitFullscreenElement ||
                document.mozFullScreenElement ||
                document.msFullscreenElement
            ) {
                // $('.editor').css("height","400px");
                if (document.exitFullscreen) {
                document.exitFullscreen();
                } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
                } else if (document.webkitExitFullscreen) {
                document.webkitExitFullscreen();
                } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
                }
            } else {
                element = $('.container').get(0);
                // $('.editor').css("height","800px");
                $('.codedesk').css("background-color","white");
                if (element.requestFullscreen) {
                element.requestFullscreen();
                } else if (element.mozRequestFullScreen) {
                element.mozRequestFullScreen();
                } else if (element.webkitRequestFullscreen) {
                element.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
                } else if (element.msRequestFullscreen) {
                element.msRequestFullscreen();
                }
            }
            });

        </script> 

        <!-- for change font size  -->
        <script>
        document.addEventListener('DOMContentLoaded', function () {
        var fontSizeSelect = document.getElementById('fontSizeSelect');
        var textarea = document.getElementById('subject');

        fontSizeSelect.addEventListener('change', function () {
            var selectedFontSize = fontSizeSelect.value;
            textarea.style.fontSize = selectedFontSize + 'px';
        });
        });
        </script>
      <script>
    function download() {
        var content = document.getElementById('subject').value;
        var selectedLanguage = document.getElementById('lang').value;

        if (content.trim() === "") {
            alert("Textarea is empty. Please enter some code to download.");
            return;
        }

        var extension = "";
        switch (selectedLanguage) {
            case "C":
                extension = "c";
                break;
            case "C++":
                extension = "cpp";
                break;
            case "Java":
                extension = "java";
                break;
            case "Python":
                extension = "py";
                break;
            case "Html":
                extension = "html";
                break;
            case "PHP":
                extension = "php";
                break;
            // Add more cases for other languages if needed
            default:
                extension = "txt";
                break;
        }

        var filename = 'code.' + extension;
        var blob = new Blob([content], { type: 'text/plain' });
        var a = document.createElement('a');
        a.href = URL.createObjectURL(blob);
        a.download = filename;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    }

    // ... (your existing script) ...
</script>
<script>
    // Retrieve the language and code parameters from the URL
    var urlParams = new URLSearchParams(window.location.search);
    var language = urlParams.get('lang');
    var code = urlParams.get('code');

    // Set the retrieved language as the selected option in the dropdown
    document.getElementById("lang").value = decodeURIComponent(language);

    // Set the retrieved code as the default value for the subject textarea
    document.getElementById("subject").value     = decodeURIComponent(code);
</script>
    </body>
</html>