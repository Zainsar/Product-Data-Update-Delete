<?php
include 'connection.php';

// print_r($_POST);
// die();
$user_id = $_POST['id'];
$user_name = $_POST['pname'];
$user_age = $_POST['pcat'];
$user_gender = $_POST['pdes'];
$user_img = $_POST['pimg'];

$update = "update `data` set Name ='$user_name' , Catagory = '$user_age' , Description = '$user_gender' , Image = '$user_img' where ID = '$user_id' ";
$res = mysqli_query($config, $update);
if (!$res) {
    die("Query failed");
}
header('location:fetchpro.php');
?>