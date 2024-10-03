<?php
// print_r($_SESSION['userid']);exit;
if(!isset($_SESSION['userid'])){
    header('Location: login.php');
    exit;
}

$con = mysqli_connect("localhost" , "root" , "" , "editor");

if($con){
    // echo "Connection successfully Done!!!";
}else{
    echo "Connection failed!!!";
}
?>