<?php

include('connection.php');

$user_id = $_GET['id'];
$where = "select * from `data` where id='$user_id'";
$res = mysqli_query($config, $where);
if (!$res) {
    die("Query Failed");
}
if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
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
            <title>Form validation</title>
        </head>

        <body>
            <div class="container-fluid" style="margin-top: 2px;">
                <h1>Update Image details</h1>
                <form action="Updataimg.php" method="post" class="form-group">
                    <label for="Name">Name</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $row['id'] ?>">
                    <input type="text" name="pname" class="form-control" placeholder="Name" value="<?php echo $row['Name'] ?>">
                    <br>
                    <label for="Catagory">Catagory</label>
                    <input type="text" name="pcat" class="form-control" placeholder="catagory"
                        value="<?php echo $row['Catagory'] ?>">
                    <br>
                    <label for="Description">Description</label>
                    <input type="text" name="pdes" class="form-control" placeholder="Description"
                        value="<?php echo $row['Description'] ?>">
                    <br>
                    <label for="Image">Image</label>
                    <input type="file" name="pimg" class="form-control" placeholder="Image" value="<?php echo $row['Image'] ?>">
                    <br>
                    <input type="Submit" value="Submit" name="Submit" class="btn btn-primary">
                </form>
            </div>
            <?php
    }
}
?>
</body>

</html>