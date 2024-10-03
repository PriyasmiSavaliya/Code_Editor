<!DOCTYPE html>
<html lang="en">
<style>
    .box{
        background-color: #ecf0f1;
    border: none;
    border-radius: 15px;
    }
    .msg{
        width: 100%;
    background-color: #5b616f;
    color: white;
    text-align: left;
    padding-left: 25px;
    height: auto;
    border: 2px solid #b8bfc1;
    border-radius: 5px;
    font-size: 20px;
    font-weight: bold;
    }
    .asty{
        color:#576073;
        text-decoration : underline;
    }
    .imgcss{
        max-width: 100%;
    height: 50px;
    object-fit: cover;
    float: left;
    }
</style>
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <?php include 'inc/header.php'; ?>
        <!--/Header-->
        
        <div class="flex flex-1">
            <!--Sidebar-->
            <?php include 'inc/sidebar.php'; ?>
            <!--/Sidebar-->
            <!--Main-->
            <main class="bg-white-300 flex-1 p-3 overflow-hidden">
            <h1 style="font-size: 2.5rem;"><i class="fas fa-code"></i>&nbsp;Code Canvas</h1>
<hr><br>
                <div class="flex flex-col">
                <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                        <div class=" p-2 msg">
                            Admin Details
                </div>
                </div><br>
                </div>
                <div class="flex flex-col">
                    <!-- Stats Row Starts Here -->
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                        <div class="shadow-lg box mb-2 p-2 md:w-1/4 mx-2" style="background-color: #c6c8cb;">
                            <div class="p-4 flex flex-col">
                                <div class="row">
                                <div class="col-sm-2" style="font-size: 40px;color: #4c4c4c;">
                                <i class="fas fa-user-cog float-left mx-2"></i>
                                </div>
                                <div class="col-sm-10" style="text-align: right;">
                                <a href="users.php" class="no-underline text-black-darkest text-2xl">
                                <?php
                                $qry = "SELECT * FROM user";
                                $data = mysqli_query($con ,$qry);
                                $num = mysqli_num_rows($data);
                                echo $num;
                                ?>
                                </a><br>
                                <a href="users.php" class="no-underline text-black-darkest text-lg">
                                    Admin Users
                                </a>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="shadow-lg box mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                            <div class="row">
                                <div class="col-sm-2" style="font-size: 40px;">
                                    <img src="uploads/icon/2436726-200.png" class="imgcss"></img>
                                </div>
                                <div class="col-sm-10" style="text-align: right;">
                                <a href="lang.php" class="no-underline text-black-darkest text-2xl">
                                <?php
                                $qry = "SELECT * FROM lang";
                                $data = mysqli_query($con ,$qry);
                                $num = mysqli_num_rows($data);
                                echo $num;
                                ?>
                                </a><br>
                                <a href="lang.php" class="no-underline text-black-darkest text-lg">
                                    Language Provides
                                </a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="shadow-lg box mb-2 p-2 md:w-1/4 mx-2" style="background-color: #c6c8cb;">
                            <div class="p-4 flex flex-col">
                            <div class="row">
                                <div class="col-sm-2" style="font-size: 40px;">
                                <img src="uploads/icon/6-512.webp" class="imgcss"></img>
                                </div>
                                <div class="col-sm-10" style="text-align: right;">
                                <a href="tutorials.php" class="no-underline text-black-darkest text-2xl">
                                <?php
                                $qry = "SELECT * FROM tutorial";
                                $data = mysqli_query($con ,$qry);
                                $num = mysqli_num_rows($data);
                                echo $num;
                                ?>
                                <br>
                                <span class="no-underline text-black-darkest text-lg">
                                    Tutorials
                                    </span></a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="shadow-lg box mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                            <div class="row">
                                <div class="col-sm-2" style="font-size: 40px;">
                                <img src="uploads/icon/3362115.png" class="imgcss"></img>
                                </div>
                                <div class="col-sm-10" style="text-align: right;">
                                <a href="practice.php" class="no-underline text-black-darkest text-2xl">
                                <?php
                                $qry = "SELECT * FROM practice";
                                $data = mysqli_query($con ,$qry);
                                $num = mysqli_num_rows($data);
                                echo $num;
                                ?>
                                <br>
                                <span class="no-underline text-black-darkest text-lg">
                                    Practice
                                    </span></a>
                                </div>
                                </div>
                            </div>
                        </div>

                    <!-- /Stats Row Ends Here -->

                    <!-- Card Sextion Starts Here -->
                    
                    <!--/Profile Tabs-->
                </div>
                <div class="flex flex-col" style="margin-top: 20px;">
                <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                        <div class=" p-2 msg">
                        Users Details
                </div>
                </div><br>
                </div>
                <div class="flex flex-col">
                    <!-- Stats Row Starts Here -->
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2" >
                        <div class="shadow-lg box mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <div class="row">
                                <div class="col-sm-2" style="font-size: 40px;color: #4c4c4c;">
                                    <i class="fa fa-users float-left mx-2"></i>
                                </div>
                                <div class="col-sm-10" style="text-align: right;">
                                <a href="reg_user.php" class="no-underline text-black-darkest text-2xl">
                                <?php
                                $qry = "SELECT * FROM register";
                                $data = mysqli_query($con ,$qry);
                                $num = mysqli_num_rows($data);
                                echo $num;
                                ?>
                                </a><br>
                                <a href="reg_user.php" class="no-underline text-black-darkest text-lg">
                                    Registered Users
                                </a>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="shadow-lg box mb-2 p-2 md:w-1/4 mx-2" style="background-color: #c6c8cb;">
                            <div class="p-4 flex flex-col">
                            <div class="row">
                                <div class="col-sm-2" style="font-size: 40px;color: #4c4c4c;">
                                    <i class="fab fa-codepen float-left mx-2"></i>
                                </div>
                                <div class="col-sm-10" style="text-align: right;">
                                <a href="contact.php" class="no-underline text-black-darkest text-2xl">
                                <?php
                                $qry = "SELECT * FROM contact";
                                $data = mysqli_query($con ,$qry);
                                $num = mysqli_num_rows($data);
                                echo $num;
                                ?>
                                </a><br>
                                <a href="contact.php" class="no-underline text-black-darkest text-lg">
                                    Contact Requestes
                                </a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="shadow-lg box mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                            <div class="row">
                                <div class="col-sm-2" style="font-size: 40px;">
                                <img src="uploads/icon/2904009.webp" class="imgcss"></img>
                                </div>
                                <div class="col-sm-10" style="text-align: right;">
                                <a href="pay.php" class="no-underline text-black-darkest text-2xl">
                                <?php
                                $qry = "SELECT * FROM payment";
                                $data = mysqli_query($con ,$qry);
                                $num = mysqli_num_rows($data);
                                echo $num;
                                ?>
                                </a><br>
                                <a href="pay.php" class="no-underline text-black-darkest text-lg">
                                    Subscribe Users
                                </a>
                                </div>
                                </div>
                            </div>
                        </div>

                    <!-- /Stats Row Ends Here -->

                    <!-- Card Sextion Starts Here -->
                    
                    <!--/Profile Tabs-->
                </div>
            </main>
            <!--/Main-->
        </div>
        <!--Footer-->
<?php include 'inc/footer.php'; ?>
    </div>

</div>
<script src="./main.js"></script>
</body>

</html>