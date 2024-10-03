<!DOCTYPE html>
<html lang="en">
<style>
        .image-responsive {
            width: 150px;
    height: 150px;
    border: 2px solid #e6eaec;
    padding: 5px;
    border-radius: 9px;
}
.imgdiv{
    width: 100%;
    margin: 10px 20px;
}
    </style>
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <?php include 'inc/header.php'; 
        ob_start();
        ?>
        <!--/Header-->
        
        <div class="flex flex-1">
            <!--Sidebar-->
            <?php include 'inc/sidebar.php'; ?>
            <!--/Sidebar-->
            <!--Main-->
            <main class="bg-white-500 flex-1 p-3 overflow-hidden">

            <!--Grid Form-->

<div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                                Add User Form
                            </div>
                            <div class="p-3">
                                <form class="w-full" id="userform" name="userform" action="" method="post" onsubmit="submitform()">
                                <div class="flex flex-wrap">
                                            <label class="block tracking-wide text-gray-700 mb-1"
                                                   for="grid-first-name">
                                                Profile Image :
                                            </label>
                                            <div class="imgdiv">
                                                <img src="uploads/images.png" class="image-responsive" id="img"></img>
                                            </div>
                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                   id="image" type="file" name="image" accept=".jpg, .jpeg, .png, .webp, .gif">
                                                   <input id="imgsrc" name="imgsrc" type="hidden">
                                                   <span id="error_img" name="error_img" class="text text-danger"></span>
                                            <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
                                        </div>
                                    <div class="flex flex-wrap">
                                            <label class="block tracking-wide text-gray-700 mb-1"
                                                   for="grid-first-name">
                                                User Name :
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                   id="name" type="text" placeholder="User" name="name" required>
                                            <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
                                        </div>
                                        <div class="flex flex-wrap">
                                            <label class="block tracking-wide text-gray-700  mb-1"
                                                   for="grid-email">
                                                Email :
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                   id="email" type="email" placeholder="user01@gmail.com" name="email" required>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap mb-6">
                                        <div class="w-full px-3">
                                            <label class="block tracking-wide text-grey-darker  mb-1"
                                                   for="grid-password">
                                                Password
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                   id="password" type="password" placeholder="***********" name="password" required>
                                            <p class="text-grey-dark text-xs italic">Make it as long and as crazy as
                                                you'd like</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap">
                                        <div class="w-full px-3">
                                            <label class="block tracking-wide text-grey-darker  mb-1"
                                                   for="grid-number">
                                                Mobile Number :
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                   id="number" type="number" placeholder="8888888888" name="number" required>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap">
                                        <div class="w-full px-3">
                                            <label class="block tracking-wide text-grey-darker  mb-1"
                                                   for="grid-city">
                                                City :
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                   id="city" type="text" placeholder="Surat" name="city">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap mb-6">
                                        <div class="w-full px-3">
                                            <label class="block tracking-wide text-grey-darker mb-1"
                                                   for="grid-active">
                                                Is Active :
                                            </label>
                                            <select class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                        id="is_active" name="is_active">
                                                    <option>-- Select Activation --</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap">
                                    <div class="w-full px-3"><center>
                                    <button class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 border border-green-800 rounded" id="adduser" name="adduser">
                                    Add user
                                </button></center>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--/Grid Form-->        
                </div>
            </main>
            <!--/Main-->
        </div>
        <!--Footer-->
        <?php include 'inc/footer.php'; ?>
        <!--/footer-->
</body>
<script>
        $(document).ready(function () {
            $("#image").change(function () {
                console.log("File selected");
                var formData = new FormData(document.getElementById("userform"));
                uploadFile(formData);
            });
        });

        function uploadFile(formData) {
            $.ajax({
                url: "upload.php",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    console.log("Upload successful");
                    console.log(response);
                    if (response.status === 'success') {
                        // Update the hidden input field with the image source
                        $("#imgsrc").val(response.imageSrc);
                        $("#img").attr("src", 'uploads/'+response.imageSrc);
                    }
                },
                error: function (xhr, status, error) {
                    console.error("Error uploading file");
                    console.error(xhr.responseText);
                }
            });
        }

//         function submitform(){
//             flag = true;
//             if($("#imgsrc").val == ''){
//                 $("#error_img").innerHTML = "Please Select User Image"; 
//                 return false;
//             }else{
//                 $("#error_img").innerHTML = ""; 
//             }
// console.log(flag);
//             if(flag == 'true'){
//                 return true;
//             }else{
//                 return false;
//             }
//         }
        
        $(document).ready(function () {
                $('userform').keydown(function(event){
                    if(event.keyCode == 13) {
                        e.preventDefault(); // Disable the " Entry " key
                        return false;               
                    }
                });
            });
        
    </script>
</html>
<?php
if (isset($_POST['adduser'])) {
    $img = $_POST['imgsrc'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $city = $_POST['city'];
    $is_active = $_POST['is_active'];

    $sql = "SELECT * FROM user WHERE name = '$name'";
    $result = mysqli_query($con , $sql);
    $count = mysqli_num_rows($result);
    if($count > 0 ){
        ?>
        <script>
            alert("User Name Already Exist!!");
        </script>
        <?php
    }else{
        // Insert data into the database
        $sql = "INSERT INTO user (u_image,name, number, email, passwd,is_active, city) VALUES ('$img','$name', '$number', '$email', '$pwd','$is_active', '$city')";
    
        if (mysqli_query($con , $sql)) {
            $msg = "User Added Succefully!!";
            header('Location: users.php');
            exit;
        } else {
            $msg = "Failed to add user: " . $con->error;
        }
    }
}
ob_end_flush();
?>