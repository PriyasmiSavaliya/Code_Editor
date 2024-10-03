<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uploadDirectory = 'uploads/'; // Change this to your desired folder name

    $uploadedFile = $_FILES['image']['tmp_name'];
    $originalName  = $_FILES['image']['name'];

    // Extract the file extension from the original file name
    $fileExtension = pathinfo($originalName, PATHINFO_EXTENSION);

    // Generate a unique name for the image with the original file extension
    $newName = uniqid() . '.' . $fileExtension;
    
    $targetPath = $uploadDirectory . $newName;

    // Move the uploaded file to the target path
    if (move_uploaded_file($uploadedFile, $targetPath)) {
        $imageSrc = $newName; // Set the image source to the target path

        $response = array('status' => 'success', 'message' => 'File uploaded successfully.', 'imageSrc' => $imageSrc);
    } else {
        $response = array('status' => 'error', 'message' => 'Error uploading file.');
    }

    echo json_encode($response);
} else {
    $response = array('status' => 'error', 'message' => 'Invalid request method.');
    echo json_encode($response);
}
?>
