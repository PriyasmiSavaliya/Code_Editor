<?php
session_start(); // Move session_start to the top
ob_start();
include 'db.php';
$userid = $_SESSION["userid"];
$name = $_SESSION["name"];
$qry = "SELECT * FROM user WHERE user_id= '".$userid."'";
$res = mysqli_query($con , $qry);
$data = mysqli_fetch_assoc($res);
$image = "uploads/".$data['u_image'];
// print_r($data);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="./dist/styles.css">
    <!-- <link rel="stylesheet" href="./dist/all.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="./ckeditor/ckeditor.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <title>Admin Panel</title>
    <!-- <script src=".././js/jquery.min.js"></script>
        <script src=".././js/bootstrap.bundle.min.js"></script>
        <script src=".././js/owl.carousel.min.js"></script>
        <script src=".././js/custom.js"></script>
        <script src=".././js/index.js"></script> -->
        <style>
            .sty-li {
            padding: 10px;
        }

        .dropdwon {
            display: none;
            position: fixed;
            background-color: white;
            border-radius: 6px;
            animation: fadeIn 0.3s ease-in-out;
            right: 0; /* Align to the right side */
            top: 8%;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        </style>
</head>
<body>
<header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-stream text-white" onclick="sidebarToggle()"></i>
                    <h1 class="text-white p-2">{ Code Canvas }</h1>
                </div>
                <div class="p-1 flex flex-row items-center">
                    <!-- <a href="https://github.com/tailwindadmin/admin" class="text-white p-2 mr-2 no-underline hidden md:block lg:block">Github</a> -->
                    <?php if(isset($data['u_image']) && file_exists($image)){
                                                    ?>
                    <img onmouseover="profileToggle()" class="inline-block h-8 rounded-full" src="<?php echo 'uploads/'.$data['u_image'];?>" alt="">
                    <?php }else{ ?>
                                                    <img src="uploads/images.png" onmouseover="profileToggle()" class="inline-block h-8 rounded-full"></img>
                                                    <?php } ?>
                    <a href="#" onmouseover="profileToggle()" onmouseout="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block"><?php echo $name; ?></a>
                <div id="ProfileDropDown" class="dropdwon" onmouseover="profileDropDownOver()" onmouseout="profileDropDownOut()">
                    <ul>
                        <li class="sty-li"><a href="profile.php">My account</a></li>
                        <!-- <li class="sty-li"><a href="#">Notifications</a></li> -->
                        <li class="sty-li"><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </header>
        <script>
        var profileDropDown = document.getElementById('ProfileDropDown');

        function profileToggle() {
            if (profileDropDown.style.display === "none" || profileDropDown.style.display === "") {
                profileDropDown.style.display = "block";
            } else {
                profileDropDown.style.display = "none";
            }
        }
        function profileDropDownOver() {
            profileDropDown.style.display = "block";
        }

        function profileDropDownOut() {
            profileDropDown.style.display = "none";
        }
    </script>