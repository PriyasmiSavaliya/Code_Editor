<?php
include 'inc/header.php';
// Number of records per page
$records_per_page = 8;

// Get the current page number
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the starting record for the current page
$start_from = ($current_page - 1) * $records_per_page;

// Query to fetch only the records for the current page
$qry = "SELECT * FROM payment LIMIT $start_from, $records_per_page";
$data = mysqli_query($con, $qry);

// Count total number of records
$total_records_query = "SELECT COUNT(*) AS total FROM payment";
$total_records_result = mysqli_query($con, $total_records_query);
$total_records = mysqli_fetch_assoc($total_records_result)['total'];

// Calculate total number of pages
$total_pages = ceil($total_records / $records_per_page);

// Calculate the index for the first record on the current page
$index_start = ($current_page - 1) * $records_per_page + 0;
?>
<!DOCTYPE html>
<html lang="en">
<style>
    .textwrap {
        max-height: 4em; /* 2 lines at 2em each */
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2; /* number of lines to show */
        -webkit-box-orient: vertical;
    }
</style>
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        
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
                        <span class="heder">Paid User</span>
                        <!-- <a class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 border border-blue-800 rounded" href="add_practice.php">Add Practice</a> -->
                    </div>
                            <div class="p-3">
                                <table class="table-responsive w-full rounded">
                                    <thead>
                                      <tr>
                                          <th class="border px-4 py-2">Index</th>
                                          <th class="border w-1/6 px-4 py-2">Name</th>
                                          <th class="border px-4 py-2">E-Mail</th>
                                          <th class="border px-4 py-2">Bank Name</th>
                                        <!-- <th class="border w-1/6 px-4 py-2">Account No.</th> -->
                                        <th class="border w-1/6 px-4 py-2">Plan Type</th>
                                        <th class="border w-1/6 px-4 py-2">Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $i = $index_start;
                                    $co=0;
                                    if(mysqli_num_rows($data) > 0 ){
                                    while($result= mysqli_fetch_assoc($data)){
                                        $formattedDate = (new DateTime($result['created_date']))->format('j M Y');
                                        $i++;
                                        $popup_container = "popup-container".$i;
                                        $popup = "popup".$i;
                                        // print_r($result);
                                    ?>
                                        <tr>
                                            <td class="border px-4 py-2"><?php echo $i;?></td>
                                            <td class="border px-3 py-2"><?php echo $result['name'];?></td>
                                            <td class="border px-4 py-2"><?php echo $result['email'];?></td>
                                            <td class="border px-3 py-2"><?php echo strip_tags($result['bank_name']);?></td>
                                            <td class="border px-4 py-2">
                                                <?php echo $result['type'];?></td>
                                            <td class="border px-4 py-2">
                                            <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                        <i class="fas fa-eye" onclick="openPopup('<?php echo $popup_container; ?>')"></i></a>
                                                <!-- <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white" href="edit_prac.php?prcid=<?php echo $result['id']; ?>">
                                                        <i class="fas fa-edit"></i></a>
                                                <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500" href="delete.php?prcid=<?php echo $result['id']; ?>">
                                                        <i class="fas fa-trash"></i>
                                                </a> -->
                                            </td>
                                        </tr>
                                        <!-- Popup Container -->
                                        <div id="<?php echo $popup_container; ?>" class="popup-container">
    <div class="popup">
        <div class="popup-header header-popup">
            <h2>Paid User Details</h2>
            <button class="close-button" onclick="closePopup('<?php echo $popup_container; ?>')"><i class='fas fa-times'></i></button>
        </div>
        <div class="container">
            <div class="popup-content">
                <div class="row flex">
                    <!-- <div class="col-sm-4" style="padding-right: 20px;">
                        <img src="uploads/<?php echo $result['u_image']; ?>" style="height: 160px;width: 220px;">
                    </div> -->
                    <div class="col-sm-8" style="width: 100%;">
    <div class="user-data-box">
        <div class="user-data-table">
            <div class="user-data-row">
                <span class="label-popup detail-popup">Date :</span>
                <span class="detail-popup"><?php echo $formattedDate ; ?></span>
            </div>
            <div class="user-data-row">
                <span class="label-popup detail-popup">User Name :</span>
                <span class="detail-popup"><?php echo $result['name']; ?></span>
            </div>
            <div class="user-data-row">
                <span class="label-popup detail-popup">User E-Mail :</span>
                <span class="detail-popup"><?php echo $result['email']; ?></span>
            </div>
            <div class="user-data-row">
                <span class="label-popup detail-popup">Bank Name :</span>
                <span class="detail-popup"><?php echo $result['bank_name']; ?></span>
            </div>
            <div class="user-data-row">
                <span class="label-popup detail-popup">Bank Account No :</span>
                <span class="detail-popup"><?php echo $result['account_num']; ?></span>
            </div>
            <div class="user-data-row">
                <span class="label-popup detail-popup">Plan Type :</span>
                <span class="detail-popup"><?php echo $result['type']; ?></span>
            </div>
            <div class="user-data-row">
                <span class="label-popup detail-popup">Validity :</span>
                <span class="detail-popup"><?php if($result['duration'] == 'W'){
                    echo 'For One Week'; }
                    elseif($result['duration'] == 'M'){
                        echo 'For One Month';  
                    }else{
                        echo 'For One Year';
                    }
                    ?></span>
            </div>
            <div class="user-data-row">
                <span class="label-popup detail-popup">Total Paid Amount :</span>
                <span class="detail-popup"><?php echo $result['amount']; ?></span>
            </div>
        </div>
    </div>
</div>

                </div>
            </div>
            <!-- <div class="btn-popup">
            <a class="border border-blue-800 rounded pubtn" href="edit_prac.php?prcid=<?php echo $result['id']; ?>">Change Details</a>
            </div> -->
        </div>
    </div>
</div>
                                        <?php $co++; } }else{
                                            ?>
                        <tr class="border"><td>No Data Found!!</td></tr>
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
<script>
    function openPopup(popupContainerId) {
        var popupContainer = document.getElementById(popupContainerId);
        // Show the popup container
        popupContainer.style.display = 'flex';
    }

    function closePopup(popupContainerId) {
        var popupContainer = document.getElementById(popupContainerId);
        // Hide the popup container
        popupContainer.style.display = 'none';
    }
</script>
</body>

</html>
