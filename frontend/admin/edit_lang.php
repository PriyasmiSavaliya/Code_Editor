<!DOCTYPE html>
<html lang="en">
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <?php include 'inc/header.php';
        ob_start();
        $lang_id = $_REQUEST['lang_id'];
        $qry = "SELECT * FROM lang WHERE langid='".$lang_id."'";
        $res = mysqli_query($con , $qry);
        $data = mysqli_fetch_assoc($res);
        // print_r($data);
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
                                Add Language
                            </div>
                            <div class="p-3">
                                <form class="w-full" id="userform" action="" method="post">
                                    <div class="flex flex-wrap">
                                            <label class="block tracking-wide text-gray-700 mb-1"
                                                   for="grid-first-name">
                                                   Language Name :
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                   id="name" type="text" placeholder="PHP" name="name" value="<?php echo $data['lang_name']; ?>">
                                            <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
                                        </div>
                                        <div class="flex flex-wrap">
                                            <label class="block tracking-wide text-gray-700  mb-1"
                                                   for="grid-type">
                                                   Language Type :
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                   id="type" type="text" placeholder="Back-End" name="type" value="<?php echo $data['lang_type']; ?>">
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
                                    <button class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 border border-green-800 rounded" id="edit" name="edit">
                                    Update Language
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
</html>
<?php
if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $is_active = $_POST['is_active'];

        $sql = "UPDATE `lang` SET `lang_name`='".$name."',`lang_type`='".$type."',`is_active`='".$is_active."' WHERE `langid`='".$_REQUEST['lang_id']."'";
        
        if (mysqli_query($con , $sql)) {
            $msg = "Language Updated Succefully!!";
            header('Location: lang.php');
            exit;
        } else {
            $msg = "Failed to update user: " . $con->error;
        }
}
ob_end_flush();
?>