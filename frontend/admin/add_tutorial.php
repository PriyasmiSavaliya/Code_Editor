<!DOCTYPE html>
<html lang="en">
    <head>
    <script src="ckeditor/ckeditor.js"></script>
    </head>
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
                                Add Tutorials
                            </div>
                            <div class="p-3">
                                <form class="w-full" id="userform" action="" method="post">
                                <div class="flex flex-wrap">
                                            <label class="block tracking-wide text-gray-700 mb-1"
                                                   for="grid-first-name">
                                                   Language Name :
                                            </label>
                                            <select class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                        id="lang" name="lang">
                                                    <option>-- Select Language --</option>
                                                    <?php 
                                                    $data1 = "SELECT * FROM lang";
                                                    $res = mysqli_query($con, $data1);
                                                    while($row = mysqli_fetch_assoc($res)){ ?>
                                                        <option value="<?php echo $row['lang_name']; ?>" >
                                                            <?php echo $row['lang_name']; ?>
                                                        </option>
                                                   <?php } ?>
                                                </select>
                                        </div>
                                    <div class="flex flex-wrap">
                                            <label class="block tracking-wide text-gray-700 mb-1"
                                                   for="grid-first-name">
                                                   Topic Name :
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                   id="name" type="text" placeholder="Tutorial Name" name="name" required>
                                            <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
                                        </div>
                                        <div class="flex flex-wrap">
                                            <label class="block tracking-wide text-gray-700  mb-1"
                                                   for="grid-type">
                                                   Topic Description :
                                            </label>
                                            <textarea class="ckeditor appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="editor" id="editor" rows="5" cols="80" required></textarea>
                                            <!-- <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                   id="type" type="text" placeholder="Tutorial Description" name="type"> -->
                                        </div>
                                        <div class="flex flex-wrap">
                                            <label class="block tracking-wide text-gray-700  mb-1"
                                                   for="grid-type">
                                                   Topic Code :
                                            </label>
                                            <textarea class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                   id="tcode" name="tcode" rows="5" cols="80" required></textarea>
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
                                    <button class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 border border-green-800 rounded" id="tutorial" name="tutorial">
                                    Add Tutorial
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
    CKEDITOR.replace('editor');
</script>
</html>
<?php
if (isset($_POST['tutorial'])) {
    $lang = $_POST['lang'];
    $name = $_POST['name'];
    $des = $_POST['editor'];
    $tcode = $_POST['tcode'];
    $is_active = $_POST['is_active'];

        $sql = "INSERT INTO `tutorial`(`language`,`topic_name`, `description`, `t_code`, `is_active`) VALUES ('$lang','$name','$des','$tcode','$is_active')";
        
        if (mysqli_query($con , $sql)) {
            $msg = "Topic Added Succefully!!";
            header('Location: tutorials.php');
            exit;
        } else {
            $msg = "Failed to add Topic: " . $con->error;
        }
}
ob_end_flush();
?>