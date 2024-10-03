<?php
$con = mysqli_connect("localhost" , "root" , "" , "editor");

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are set
    if (isset($_POST['name']) && isset($_POST['pdfsrc']) && isset($_POST['lang']) && isset($_POST['editor']) && isset($_POST['is_active'])) {
        // Retrieve form data
        $name = $_POST['name'];
        $pdfsrc = $_POST['pdfsrc'];
        $lang = $_POST['lang'];
        $editor = $_POST['editor'];
        $is_active = $_POST['is_active'];

        // Insert data into the database
        $sql = "INSERT INTO practice (prc_name, prc_pdf, prc_lang, detail, is_active) VALUES (?, ?, ?, ?, ?)";
        
        // Prepare the SQL statement
        $stmt = mysqli_prepare($con, $sql);

        // Bind parameters
        mysqli_stmt_bind_param($stmt, "ssssi", $name, $pdfsrc, $lang, $editor, $is_active);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            // If insertion is successful, return success response
            echo json_encode(array("status" => "success"));
            exit;
        } else {
            // If there's an error with the query, return error response
            echo json_encode(array("status" => "error", "message" => "Failed to add practice: " . mysqli_error($con)));
            exit;
        }
    } else {
        // If required fields are not set, return error response
        echo json_encode(array("status" => "error", "message" => "Missing required fields"));
        exit;
    }
} else {
    // If request method is not POST, return error response
    echo json_encode(array("status" => "error", "message" => "Invalid request method"));
    exit;
}
?>
