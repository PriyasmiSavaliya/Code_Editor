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

            <!--Grid Form-->

<div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                                Add User Form
                            </div>
                            <?php
                            $prcid = $_REQUEST['prcid'];
                            $qry = "SELECT * FROM practice WHERE id ='".$prcid."'";
                            $res = mysqli_query($con , $qry);
                            $data = mysqli_fetch_assoc($res);
                            // print_r($data);
                            ?>
                            <div class="p-3">
                                <form class="w-full" id="userform" action="" method="post">
                                <div class="flex flex-wrap">
                                        <label class="block tracking-wide text-gray-700 mb-1"
                                               for="grid-first-name">
                                            Practice Set Name :
                                        </label>
                                        <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                               id="name" type="text" placeholder="PHP Function" name="name" value="<?php echo $data['prc_name']; ?>">
                                    </div>
                                    <div class="flex flex-wrap">
                                    <label class="block tracking-wide text-gray-700 mb-1"
                                                   for="grid-first-name">
                                                   Practice Language :
                                            </label>
                                            <select class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                        id="lang" name="lang">
                                                    <option>-- Select Language --</option>
                                                    <?php 
                                                    $data1 = "SELECT * FROM lang";
                                                    $res = mysqli_query($con, $data1);
                                                    while($row = mysqli_fetch_assoc($res)){ ?>
                                                        <option value="<?php echo $row['lang_name']; ?>"<?php if($data['prc_lang'] == $row['lang_name']){ echo 'selected'; } ?> >
                                                            <?php echo $row['lang_name']; ?>
                                                        </option>
                                                   <?php } ?>
                                                </select>
                                    </div>
                                <div class="flex flex-wrap">
                                            <label class="block tracking-wide text-gray-700 mb-1"
                                                   for="grid-first-name">
                                                   Practice Set (PDF):
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                            id="pdf" type="file" name="pdf" accept=".pdf" >
                                            <input id="pdfsrc" name="pdfsrc" type="hidden" value="<?php echo $data['prc_pdf']; ?>">
                                        </div>
                                        <div class="flex flex-wrap">
                                            <label class="block tracking-wide text-gray-700 mb-1" for="grid-type">Practice Details:</label>
                                            <textarea class="ckeditor appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="editor" id="editor" rows="5" cols="80"><?php echo $data['detail']; ?></textarea>
                                            <!-- <script>
                                                CKEDITOR.replace('editor');
                                            </script> -->
                                        </div>
                                    <div class="flex flex-wrap">
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
                                    <div class="flex flex-wrap">
                                    <div class="w-full px-3" style="margin-top: 30px;"><center>
                                    <button class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 border border-green-800 rounded" id="editprac" name="editprac">
                                    Update Practice
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
        //  $(document).ready(function(){
        //     $("#editprac").click(function(e){
        //         e.preventDefault(); // Prevent default form submission
        //         uploadFile(); // Call the uploadFile function
        //     });
        // });

//         function uploadFile() {
//     var formData = new FormData();
//     var pdfFile = $('#pdf')[0].files[0];
//     formData.append('pdf', pdfFile);

//     $.ajax({
//         url: "upload_pdf.php",
//         type: "POST",
//         data: formData,
//         contentType: false,
//         processData: false,
//         dataType: "json", // Parse the response as JSON
//         success: function(response) {
//             console.log("Response received:", response);

//             // Check if the status is success
//             if (response.status === "success") {
//                 // Get the PDF source from the response
//                 var pdfSrc = response.pdfSrc;

//                 // Get the CKEditor content
//                 // var editorData = CKEDITOR.instances.editor.getData();

//                 // Set the hidden input value with the PDF source
//                 $("#pdfsrc").val(pdfSrc);
//                 // Set the hidden input value with the editor content
//                 // $("#editorData").val(editorData);
//                 $("#userform").submit();

//             } else {
//                 // Handle errors or other statuses
//                 console.error("Error:", response.message);
//             }
//         },
//         error: function(xhr, status, error) {
//             console.error("Error uploading file", xhr.responseText);
//         }
//     });
// }
    </script>


</html>
<?php
if (isset($_POST['editprac'])) {
    if (isset($_POST['name']) && isset($_POST['lang']) && isset($_POST['editor']) && isset($_POST['is_active'])) {
        // Retrieve form data
        $name = $_POST['name'];
        $lang = $_POST['lang'];
        $editor = $_POST['editor'];
        $is_active = $_POST['is_active'];
        $prcid = $_REQUEST['prcid'];

        // Check if a new PDF file is uploaded
        if ($_FILES["pdf"]["size"] > 0) {
            // Delete old PDF file
            $old_pdf_file = "uploads/pdfs/" . basename($_POST['pdfsrc']);
            if (file_exists($old_pdf_file)) {
                unlink($old_pdf_file);
            }

            // Upload new PDF file
            $target_directory = "uploads/pdfs/";
            $target_file = $target_directory . basename($_FILES["pdf"]["name"]);
            $file_extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Check if file is a PDF
            if ($file_extension != "pdf") {
                echo json_encode(array("status" => "error", "message" => "Only PDF files are allowed."));
                exit();
            }

            // Move the uploaded file
            if (move_uploaded_file($_FILES["pdf"]["tmp_name"], $target_file)) {
                $pdfsrc = basename($_FILES["pdf"]["name"]);
            } else {
                echo json_encode(array("status" => "error", "message" => "Failed to upload PDF file."));
                exit();
            }
        } else {
            // If no new PDF file is uploaded, retain the old PDF file name
            $pdfsrc = $_POST['pdfsrc'];
        }

        // Update the database with the new PDF file's information
        $sql = "UPDATE `practice` SET `prc_lang`='$lang',`prc_pdf`='$pdfsrc',`prc_name`='$name',`detail`='$editor',`is_active`='$is_active' WHERE `id`='$prcid'";        
        if (mysqli_query($con , $sql)) {
            $msg = "Practice Updated Successfully!!";
            header('Location: practice.php');
            exit;
        } else {
            $msg = "Failed to update practice: " . $con->error;
        }
    } else {
        // If any required field is missing, show an alert
        echo "<script>alert('Please enter all details');</script>";
    }
}
ob_end_flush();
?>