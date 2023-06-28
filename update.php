<?php
include "model/db.php";

if (isset($_GET["id_emp"])) {
    $id_emp = $_GET["id_emp"];
    $sql = $conn->query("SELECT * FROM employs WHERE id_emp=$id_emp");
} else {
    echo "No se proporcionó el parámetro id_emp en la URL.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../MVC/css/style.css">

    <title>Document</title>
</head>

<body>
    <form class="col-3 p-3 m-auto" method="POST">
        <input type="hidden" name="id_emp" value="<?= $_GET["id_emp"] ?>">
        <?php
        include "controller/update.php";
        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-2 ">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="<?= $datos->name ?>">
            </div>
            <div class="mb-2 ">
                <label for="exampleInputEmail1" class="form-label">Last-Name</label>
                <input type="text" class="form-control" name="last_name" value="<?= $datos->last_name ?>">
            </div>
            <div class="mb-2 ">
                <label for="exampleInputEmail1" class="form-label">Telephone</label>
                <input type="text" class="form-control" name="telephone" value="<?= $datos->telephone ?>">
            </div>
            <div class="mb-2 ">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?= $datos->email ?>">
            </div>
            <div class="mb-2 ">
                <label for="exampleInputEmail1" class="form-label">EPS</label>
                <input type="text" class="form-control" name="EPS" value="<?= $datos->EPS ?>">
            </div>
            <div class="mb-2 ">
                <label for="exampleInputEmail1" class="form-label">ARL</label>
                <input type="text" class="form-control" name="ARL" value="<?= $datos->ARL ?>">
            </div>
            <div class="mb-2 ">
                <label for="exampleInputEmail1" class="form-label">Salary</label>
                <input type="text" class="form-control" name="salary" value="<?= $datos->salary ?>">
            </div>
            <div class="mb-2 ">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" value="<?= $datos->address ?>">
            </div>
        <?php }
        ?>

        <button type="submit" class="btn btn-primary" name="create" value="ok">Update</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>
