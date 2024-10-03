<?php
include 'db.php';
session_start();
unset($_SESSION["Login"]);
header("Location:home.php");
?>