<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["pdf"])) {
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
        echo json_encode(array("status" => "success", "pdfSrc" => basename($_FILES["pdf"]["name"])));
    } else {
        echo json_encode(array("status" => "error", "message" => "Failed to upload PDF file."));
    }
} else {
    echo json_encode(array("status" => "error", "message" => "No file uploaded."));
}
?>
