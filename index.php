<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../MVC/css/style.css">
    <script src=" https://kit.fontawesome.com/fc0f20eed5.js" crossorigin="anonymous">
    </script>
</head>

<body>
    <h1 class="text-center p-3">CRUD MVC</h1>
    <div class="container-fluid row">
        <form class="col-2" method="POST">
            <div class="mb-1 ">
                <?php
                include "model/db.php";
                include "controller/create.php";
                include "controller/delete.php";
                ?>
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-2 ">
                <label for="exampleInputEmail1" class="form-label">Last-Name</label>
                <input type="text" class="form-control" name="last_name">
            </div>
            <div class="mb-2 ">
                <label for="exampleInputEmail1" class="form-label">Telephone</label>
                <input type="text" class="form-control" name="telephone">
            </div>
            <div class="mb-2 ">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-2 ">
                <label for="exampleInputEmail1" class="form-label">EPS</label>
                <input type="text" class="form-control" name="EPS">
            </div>
            <div class="mb-2 ">
                <label for="exampleInputEmail1" class="form-label">ARL</label>
                <input type="text" class="form-control" name="ARL">
            </div>
            <div class="mb-2 ">
                <label for="exampleInputEmail1" class="form-label">Salary</label>
                <input type="text" class="form-control" name="salary">
            </div>
            <div class="mb-2 ">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input type="text" class="form-control" name="address">
            </div>
            <button type="submit" class="btn btn-primary" name="create" value="ok">Create</button>
        </form>
        <div class="col-9 p-2">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Email</th>
                        <th scope="col">EPS</th>
                        <th scope="col">ARL</th>
                        <th scope="col">Salary</th>
                        <th scope="col">Address</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "model/db.php";
                    $sql = $conn->query("select * from employs");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td>
                                <?= $datos->id_emp ?>
                            </td>
                            <td>
                                <?= $datos->name ?>
                            </td>
                            <td>
                                <?= $datos->last_name ?>
                            </td>
                            <td>
                                <?= $datos->telephone ?>
                            </td>
                            <td>
                                <?= $datos->email ?>
                            </td>
                            <td>
                                <?= $datos->EPS ?>
                            </td>
                            <td>
                                <?= $datos->ARL ?>
                            </td>
                            <td>
                                <?= $datos->salary ?>
                            </td>
                            <td>
                                <?= $datos->address ?>
                            </td>
                            <td>
                                <a href="update.php?id_emp=<?= $datos->id_emp ?>" class="btn btn-small btn-warning"><i
                                        class='fa-solid fa-marker'></i></a>

                                <a href="index.php?id_emp=<?= $datos->id_emp ?>" class="btn btn-small btn-danger"><i
                                        class='fa-regular fa-trash-can'></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>