<!DOCTYPE html>
<html lang="en">
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
            <main class="bg-white-500 flex-1 p-3 overflow-hidden">

            <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                        <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b flex justify-between">
                        <span>Add Practice Set</span>
                        <!-- <a class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 border border-blue-800 rounded" href="add_practice.php">Add Practice</a> -->
                    </div>
                    <div class="p-3">
                        <form class="w-full" id="userform" action="" method="post">
                                <div class="flex flex-wrap">
                                        <label class="block tracking-wide text-gray-700 mb-1"
                                               for="grid-first-name">
                                            Practice Set Name :
                                        </label>
                                        <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                               id="name" type="text" placeholder="PHP Function" name="name" required>
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
                                                        <option value="<?php echo $row['lang_name']; ?>" >
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
                                            id="pdf" type="file" name="pdf" accept=".pdf" required>
                                            <input id="pdfsrc" name="pdfsrc" type="hidden">
                                        </div>
                                        <div class="flex flex-wrap">
                                            <label class="block tracking-wide text-gray-700 mb-1" for="grid-type" required>Practice Details:</label>
                                            <!-- Remove the textarea input -->
                                            <div id="editor"></div>
                                            <input type="hidden" name="editor" id="editorData">
                                            <script>
                                                CKEDITOR.replace('editor');
                                            </script>
                                        </div>
                                    <div class="flex flex-wrap">
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
                                    <div class="flex flex-wrap">
                                    <div class="w-full px-3" style="margin-top: 30px;"><center>
                                    <button class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 border border-green-800 rounded" id="addprac" name="addprac">
                                    Add Practice
                                </button></center>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Cards Section Ends Here -->

                    
                </div>
            </main>
            <!--/Main-->
        </div>
        <!--Footer-->
        <?php include 'inc/footer.php'; ?>
        <!--/footer-->

    </div>

</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
        $(document).ready(function(){
        $("#addprac").click(function(e){
            e.preventDefault(); // Prevent default form submission
            if(validateForm()) {
                uploadFile(); // Call the uploadFile function if form is valid
            }
        });
    });

    function validateForm() {
        var name = $("#name").val();
        var lang = $("#lang").val();
        var pdf = $("#pdf").val();

        // Check if name, language, and pdf file are not empty
        if(name === "" || lang === "-- Select Language --" || pdf === "") {
            alert("Please fill out all fields.");
            return false; // Return false to prevent form submission
        }

        return true; // Return true if form is valid
    }

        function uploadFile() {
    var formData = new FormData();
    var pdfFile = $('#pdf')[0].files[0];
    formData.append('pdf', pdfFile);

    $.ajax({
        url: "upload_pdf.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "json", // Parse the response as JSON
        success: function(response) {
            console.log("Response received:", response);

            // Check if the status is success
            if (response.status === "success") {
                // Get the PDF source from the response
                var pdfSrc = response.pdfSrc;

                // Get the CKEditor content
                var editorData = CKEDITOR.instances.editor.getData();

                // Set the hidden input value with the PDF source
                $("#pdfsrc").val(pdfSrc);
                // Set the hidden input value with the editor content
                $("#editorData").val(editorData);

                // Call the insertPractice API to insert practice data
                insertPractice();
            } else {
                // Handle errors or other statuses
                console.error("Error:", response.message);
            }
        },
        error: function(xhr, status, error) {
            console.error("Error uploading file", xhr.responseText);
        }
    });
}

function insertPractice() {
    var formData = $('#userform').serialize();
console.log(formData);
    $.ajax({
        url: "insert_prac.php",
        type: "POST",
        data: formData,
        dataType: "json", // Parse the response as JSON
        success: function(response) {
            console.log("Insertion response received:", response);

            // Check if the status is success
            if (response.status === "success") {
                // Redirect to practice page or perform any other action
                window.location.href = "practice.php";
            } else {
                // Handle errors or other statuses
                console.error("Error:", response.message);
            }
        },
        error: function(xhr, status, error) {
            console.error("Error inserting practice", xhr.responseText);
        }
    });
}

    </script>
</body>
</html>
