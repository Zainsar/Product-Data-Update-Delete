<?php
include('connection.php');
$user_id = $_GET['id'];

$delete = "DELETE from `data` where id = '$user_id'";

$result = mysqli_query($config, $delete);

if (!$delete) {
    die("Query Failed");
}
header('location:fetchpro.php');
?>