<!DOCTYPE html>
<html lang="en">
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

            <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                                List Of Pages
                            </div>
                            <div class="p-3">
                                <form class="w-full" id="userform" action="" method="post">
                                <div class="flex flex-wrap mb-6">
                                <div class="w-full px-3">
                                            <label class="block tracking-wide text-gray-700 mb-1"
                                                   for="grid-pages">
                                                Pages :
                                            </label>
                                            <select class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                        id="page" name="page">
                                                    <option>-- Select Page --</option>
                                                    <?php 
                                                    $data = "SELECT * FROM pages";
                                                    $res = mysqli_query($con, $data);
                                                    while($row = mysqli_fetch_assoc($res)){ ?>
                                                        <option value="<?php print_r($row['page_id']); ?>"><?php print_r($row['page_name']); ?></option>
                                                   <?php } ?>
                                                </select>
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
                                    <button class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 border border-green-800 rounded" id="submit" name="submit">
                                    Submit
                                </button></center>
                                    </div>
                                </form>
                            </div>
                        </div>
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
if(isset($_POST['submit'])){
    $page_id = $_POST['page'];
    $is_active = $_POST['is_active'];

        $sql = "UPDATE `pages` SET `is_active`='".$is_active."' WHERE `page_id`='".$page_id."'";
        $data = mysqli_query($con , $sql);
        if ($data) {
            $msg = "Page Updated Succefully!!";
            header('Location: pages.php');
            exit;
        } else {
            $msg = "Failed to update Page: " . $con->error;
        }
}
ob_end_flush();
?>