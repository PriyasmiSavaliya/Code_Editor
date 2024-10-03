<?php
include '../db.php';
if(isset($_REQUEST['userid'])){
// print_r($_REQUEST['userid']);exit;
$del_user = "DELETE FROM `user` WHERE user_id='".$_REQUEST['userid']."'";
$res = mysqli_query($con , $del_user);

if($res){
    header('Location: users.php');
    exit;
}else{
    echo "Error in Deleting";
}
}elseif(isset($_REQUEST['lang_id'])){
    // print_r($_REQUEST['lang_id']);exit;
$del_user = "DELETE FROM `lang` WHERE langid='".$_REQUEST['lang_id']."'";
$res = mysqli_query($con , $del_user);

if($res){
    header('Location: lang.php');
    exit;
}else{
    echo "Error in Deleting";
}
}elseif(isset($_REQUEST['tid'])){
    // print_r($_REQUEST['tid']);exit;
$del_user = "DELETE FROM `tutorial` WHERE t_id='".$_REQUEST['tid']."'";
$res = mysqli_query($con , $del_user);

if($res){
    header('Location: tutorials.php');
    exit;
}else{
    echo "Error in Deleting";
}
}elseif(isset($_REQUEST['prcid'])){
    // print_r($_REQUEST['prcid']);exit;
$del_user = "DELETE FROM `practice` WHERE id='".$_REQUEST['prcid']."'";
$res = mysqli_query($con , $del_user);

if($res){
    header('Location: practice.php');
    exit;
}else{
    echo "Error in Deleting";
}
}
?>