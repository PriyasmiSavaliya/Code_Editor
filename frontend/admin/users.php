<?php
include 'inc/header.php';
// Number of records per page
$records_per_page = 8;

// Get the current page number
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the starting record for the current page
$start_from = ($current_page - 1) * $records_per_page;

// Query to fetch only the records for the current page
$qry = "SELECT * FROM user LIMIT $start_from, $records_per_page";
$data = mysqli_query($con, $qry);

// Count total number of records
$total_records_query = "SELECT COUNT(*) AS total FROM user";
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
        .paid{
            background-color: #1baa1b;
    color: white;
    border-radius: 5px;
    padding: 5px;
    font-weight: 600;
    text-align:center;
        }
        .unpaid{
            background-color: #e62323;
    color: white;
    border-radius: 5px;
    padding: 5px;
    font-weight: 600;
    text-align:center;
        }
    </style>
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
                        <span class="heder">User Data</span>
                        <a class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 border border-blue-800 rounded" href="add_user.php">Add User</a>
                    </div>
                            <div class="p-3">
                                <table class="table-responsive w-full rounded">
                                    <thead>
                                      <tr>
                                          <th class="border px-4 py-2">Index</th>
                                          <th class="border w-1/6 px-4 py-2">User Name</th>
                                          <th class="border w-1/6 px-4 py-2">Email</th>
                                          <th class="border w-1/6 px-4 py-2">Phone Number</th>
                                          <th class="border w-1/6 px-4 py-2">City</th>
                                        <th class="border w-1/7 px-4 py-2">Status</th>
                                        <th class="border w-1/5 px-4 py-2">Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $i = $index_start;
                                    $co=0;
                                    if(mysqli_num_rows($data) > 0 ){
                                        while($result= mysqli_fetch_assoc($data)){
                                        $pay = "SELECT * FROM `payment` WHERE email='".$result['email']."'";
                                        $res = mysqli_query($con, $pay);
                                        $data2 = mysqli_fetch_assoc($res);
                                        // print_r($data2);
                                        $formattedDate = (new DateTime($result['created_date']))->format('j M Y');
                                        $i++;
                                        $popup_container = "popup-container".$co;
                                        $popup = "popup".$co;
                                        $image = "uploads/".$result['u_image'];
                                    ?>
                                        <tr>
                                            <td class="border px-4 py-2"><?php echo $i;?></td>
                                            <td class="border px-3 py-2"><?php echo $result['name'];?></td>
                                            <td class="border px-4 py-2"><?php echo $result['email'];?></td>
                                            <td class="border px-4 py-2"><?php echo $result['number'];?></td>
                                            <td class="border px-4 py-2"><?php echo $result['city'];?></td>
                                            <td class="border px-4 py-2"><?php if($result['is_active'] == 1){?>
                                                <i class="fa fa-check text-green-500 mx-2"></i>
                                                <?php }else{ ?>
                                                    <i class="fa fa-close text-red-500 mx-2"></i>
                                                <?php }?></td>
                                            <td class="border px-4 py-2">
                                            <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                        <i class="fas fa-eye" onclick="openPopup('<?php echo $popup_container; ?>')"></i></a>
                                                <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white" href="edit_user.php?userid=<?php echo $result['user_id']; ?>">
                                                        <i class="fas fa-edit"></i></a>
                                                <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500" href="delete.php?userid=<?php echo $result['user_id']; ?>">
                                                        <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <!-- Popup Container -->
                                        <div id="<?php echo $popup_container; ?>" class="popup-container">
    <div class="popup">
        <div class="popup-header header-popup">
            <h2>User Details</h2>
            <button class="close-button" onclick="closePopup('<?php echo $popup_container; ?>')"><i class='fas fa-times'></i></button>
        </div>
        <div class="container">
            <div class="popup-content">
                <div class="row flex">
                    <div class="col-sm-4" style="padding-right: 20px;">
                    <?php if(isset($result['u_image']) && file_exists($image)){ ?>
                        <img src="uploads/<?php echo $result['u_image']; ?>" style="height: 160px;width: 220px;">
                        <?php }else{ ?>
                            <img src="uploads/images.png" style="height: 160px;width: 220px;"></img>
                        <?php } ?>
                    </div>
                    <div class="col-sm-8" style="width: 100%;">
    <div class="user-data-box">
        <div class="user-data-table">
            <div class="user-data-row">
                <span class="label-popup detail-popup">Date :</span>
                <span class="detail-popup"><?php echo $formattedDate ; ?></span>
            </div>
            <div class="user-data-row">
                <span class="label-popup detail-popup">Name :</span>
                <span class="detail-popup"><?php echo $result['name']; ?></span>
            </div>
            <div class="user-data-row">
                <span class="label-popup detail-popup">Mobile Number :</span>
                <span class="detail-popup"><?php echo $result['number']; ?></span>
            </div>
            <div class="user-data-row">
                <span class="label-popup detail-popup">Email-ID :</span>
                <span class="detail-popup"><?php echo $result['email']; ?></span>
            </div>
            <div class="user-data-row">
                <span class="label-popup detail-popup">Password :</span>
                <span class="detail-popup"><?php echo $result['passwd']; ?></span>
            </div>
            <div class="user-data-row">
                <span class="label-popup detail-popup">City :</span>
                <span class="detail-popup"><?php echo $result['city']; ?></span>
            </div>
            <div class="user-data-row">
                <span class="label-popup detail-popup">Activation :</span>
                <span class="detail-popup"><?php echo ($result['is_active'] == '1') ? "Active User" : "Inactive User"; ?></span>
            </div>
        </div>
    </div>
</div>

                </div>
            </div>
            <div class="btn-popup">
            <a class="border border-blue-800 rounded pubtn" href="edit_user.php?userid=<?php echo $result['user_id']; ?>">Change Details</a>
            </div>
        </div>
    </div>
</div>

                                        <?php 
                                        $co++;
                                        } }else{
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

<!-- JavaScript to handle the popup -->
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