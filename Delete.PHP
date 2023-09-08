<?php
include('connection.php');
$user_id = $_GET['id'];

$delete = "UPDATE `data` SET status = '0' where id = $user_id";

$result = mysqli_query($config, $delete);

if (!$delete) {
    die("Query Failed");
}
header('location:trashs.php');
?>