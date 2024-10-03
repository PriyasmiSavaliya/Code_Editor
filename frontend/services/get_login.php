<?php
error_reporting(0);  // Disable error reporting for production
include '../db.php';
header('Content-Type: application/json');

$qry = "SELECT * FROM register";
$result = mysqli_query($con, $qry);

$ddata = array();  // Fix the syntax here

if ($result) {  // Check if the query was successful
    while ($row = mysqli_fetch_assoc($result)) {
        $ddata[] = $row;
    }
    $data['flag'] = true;
    $data['data'] = $ddata;
} else {
    // Handle the case where the query failed
    $data['flag'] = false;
    $data['data'] = "No record found";
}
echo json_encode($data);
?>
