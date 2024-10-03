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
                            <?php
                            $userid = $_SESSION['userid'];
                            $qry = "SELECT * FROM user WHERE user_id='".$userid."'";
                            $res = mysqli_query($con , $qry);
                            $data = mysqli_fetch_assoc($res);
                            $image = "uploads/".$data['u_image'];
                            // print_r($data);
                            ?>
                            <div class="p-3">
                                <form class="w-full" id="userform" action="" method="post">
                                    <div class="flex flex-wrap">
                                            <label class="block tracking-wide text-gray-700 mb-1"
                                                   for="grid-first-name">
                                                Profile Image :
                                            </label>
                                            <div class="imgdiv">
                                            <?php if(isset($data['u_image']) && file_exists($image)){
                                                    ?>
                                                    <img src="uploads/<?php echo $data['u_image']; ?>" class="image-responsive" id="img"></img>
                                                <?php }else{ ?>
                                                    <img src="uploads/images.png" class="image-responsive" id="img"></img>
                                                    <?php } ?>
                                            </div>
                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                   id="image" type="file" name="image" accept=".jpg, .jpeg, .png, .webp, .gif">
                                                   <input id="imgsrc" name="imgsrc" type="hidden" value="<?php echo $data['u_image']; ?>">
                                            <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
                                        </div>
                                    <div class="flex flex-wrap">
                                            <label class="block tracking-wide text-gray-700 mb-1"
                                                   for="grid-first-name">
                                                User Name :
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                   id="name" type="text" name="name"  value="<?php echo $data['name']; ?>">
                                            <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
                                        </div>
                                        <div class="flex flex-wrap">
                                            <label class="block tracking-wide text-gray-700  mb-1"
                                                   for="grid-email">
                                                Email :
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                   id="email" type="email" name="email" value="<?php echo $data['email']; ?>">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap mb-6">
                                        <div class="w-full px-3">
                                            <label class="block tracking-wide text-grey-darker  mb-1"
                                                   for="grid-password">
                                                Password
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                   id="password" type="password" name="password" value="<?php echo $data['passwd']; ?>">
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
                                                   id="number" type="number" name="number" value="<?php echo $data['number']; ?>">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap">
                                        <div class="w-full px-3">
                                            <label class="block tracking-wide text-grey-darker  mb-1"
                                                   for="grid-city">
                                                City :
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                   id="city" type="text" name="city" value="<?php echo $data['city']; ?>">
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
                                            <option value="1" <?php if(isset($data['is_active']) && $data['is_active'] == '1'){ echo 'selected'; } ?>>Yes</option>
                                            <option value="0" <?php if(isset($data['is_active']) && $data['is_active'] == '0'){ echo 'selected'; } ?>>No</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap">
                                    <div class="w-full px-3"><center>
                                    <button class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 border border-green-800 rounded" id="adduser" name="adduser">
                                    Update user
                                </button></center>
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
    </div>
</div>
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
                // Update the src attribute of the img tag to display the selected image
                $("#img").attr("src", 'uploads/'+response.imageSrc);
            }
        },
        error: function (xhr, status, error) {
            console.error("Error uploading file");
            console.error(xhr.responseText);
        }
    });
}

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

        $sql = "UPDATE `user` SET `u_image`='".$img."',`name`='".$name."',`email`='".$email."',`passwd`='".$pwd."',`is_active`='".$is_active."',`number`='".$number."',`city`='".$city."' WHERE `user_id`='".$userid."'";
        
        if (mysqli_query($con , $sql)) {
            $msg = "User Added Succefully!!";
            header('Location: index.php');
            exit;
        } else {
            $msg = "Failed to add user: " . $con->error;
        }
}
ob_end_flush();
?>