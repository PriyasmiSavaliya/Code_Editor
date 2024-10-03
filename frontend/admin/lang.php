<?php
include 'inc/header.php';
// Number of records per page
$records_per_page = 8;

// Get the current page number
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the starting record for the current page
$start_from = ($current_page - 1) * $records_per_page;

// Query to fetch only the records for the current page
$qry = "SELECT * FROM lang LIMIT $start_from, $records_per_page";
$data = mysqli_query($con, $qry);

// Count total number of records
$total_records_query = "SELECT COUNT(*) AS total FROM lang";
$total_records_result = mysqli_query($con, $total_records_query);
$total_records = mysqli_fetch_assoc($total_records_result)['total'];

// Calculate total number of pages
$total_pages = ceil($total_records / $records_per_page);

// Calculate the index for the first record on the current page
$index_start = ($current_page - 1) * $records_per_page + 0;
?>
<!DOCTYPE html>
<html lang="en">
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">

        <!--/Header-->
        
        <div class="flex flex-1">
            <!--Sidebar-->
            <?php include 'inc/sidebar.php'; ?>
            <!--/Sidebar-->
            <!--Main-->
            <main class="bg-white-500 flex-1 p-3 overflow-hidden">

            <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                        <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b flex justify-between">
                        <span class="heder">Language Data</span>
                        <a class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 border border-blue-800 rounded" href="add_lang.php">Add Language</a>
                    </div>
                            <div class="p-3">
                                <table class="table-responsive w-full rounded">
                                    <thead>
                                      <tr>
                                          <th class="border w-1/6 px-4 py-2">ID</th>
                                          <th class="border w-1/6 px-4 py-2">Language Name</th>
                                          <th class="border w-1/6 px-4 py-2">Language Type</th>
                                        <th class="border w-1/6 px-4 py-2">Status</th>
                                        <th class="border w-1/7 px-4 py-2">Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $i = $index_start;
                                    if(mysqli_num_rows($data) > 0 ){
                                    while($result= mysqli_fetch_assoc($data)){
                                        $i++;
                                        // print_r($result);
                                    ?>
                                        <tr>
                                            <td class="border px-4 py-2"><?php echo $i;?></td>
                                            <td class="border px-3 py-2"><?php echo $result['lang_name'];?></td>
                                            <td class="border px-4 py-2"><?php echo $result['lang_type'];?></td>
                                            <td class="border px-4 py-2"><?php if($result['is_active'] == 1){?>
                                                <i class="fa fa-check text-green-500 mx-2"></i>
                                                <?php }else{ ?>
                                                    <i class="fa fa-close text-red-500 mx-2"></i>
                                                <?php }?></td>
                                            <td class="border px-4 py-2">
                                                <!-- <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                        <i class="fas fa-eye"></i></a> -->
                                                <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white" href="edit_lang.php?lang_id=<?php echo $result['langid']; ?>">
                                                        <i class="fas fa-edit"></i></a>
                                                <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500" href="delete.php?lang_id=<?php echo $result['langid']; ?>">
                                                        <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php } }else{
                                            ?>
                        <tr><td class="border px-4 py-2">No Data Found!!</td></tr>
                                            <?php
                    }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /Cards Section Ends Here -->
                    <div class="p-3">
                            <ul class="flex justify-center">
                                <?php if ($total_pages > 1) { ?>
                                    <!-- Previous page link -->
                                    <li class="<?php echo ($current_page == 1) ? 'hidden' : ''; ?> mr-2">
                                        <a href="?page=<?php echo $current_page - 1; ?>" class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 border border-blue-800 rounded">Previous</a>
                                    </li>

                                    <!-- Page numbers -->
                                    <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                                        <li class="<?php echo ($current_page == $i) ? 'hidden' : ''; ?> mr-2">
                                            <a href="?page=<?php echo $i; ?>" class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 border border-blue-800 rounded"><?php echo $i; ?></a>
                                        </li>
                                    <?php } ?>

                                    <!-- Next page link -->
                                    <li class="<?php echo ($current_page == $total_pages) ? 'hidden' : ''; ?>">
                                        <a href="?page=<?php echo $current_page + 1; ?>" class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 border border-blue-800 rounded">Next</a>
                                    </li>
                                <?php } ?>
                            </ul>
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