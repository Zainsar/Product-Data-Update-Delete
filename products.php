<?php
include("connection.php");

if (isset($_POST['Submit'])) {
    $p_names = $_POST['pname'];
    $p_cata = $_POST['pcat'];
    $p_desc = $_POST['pdes'];
    $p_name = $_FILES['pimg']['name'];
    $p_tempname = $_FILES['pimg']['tmp_name'];
    $p_size = $_FILES['pimg']['size'];

    $insert = "INSERT INTO `data` (`Name`, `Catagory`, `Description`, `Image`) VALUES ('$p_names', '$p_cata', '$p_desc','$p_name')";
    $query = mysqli_query($config, $insert);
    move_uploaded_file($p_tempname, "productimage/" . $p_name);
    if (!$query) {
        die("Query failed");
    } else {
        header('location:fetchpro.php');
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <title>Products</title>
</head>

<body>
    <div class="container-fluid" style="margin-top: 2px;">
        <h1>Products </h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data"
            class="form-group">
            <label for="FirstName">Name</label>
            <input type="text" name="pname" class="form-control" placeholder="Name">
            <br>
            <label for="cat">Catagory</label>
            <input type="text" name="pcat" class="form-control" placeholder="catagory">
            <br>
            <label for="Description">Description</label>
            <input type="text" name="pdes" class="form-control" placeholder="Description">
            <br>
            <label for="image">Image</label>
            <input type="file" name="pimg" class="form-control">
            <br>
            <input type="Submit" value="Submit" name="Submit" class="btn btn-primary">
        </form>
    </div>
</body>

</html>