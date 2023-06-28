<?php
if (!empty($_POST["create"])) {
    $id_emp = $_POST["id_emp"];
    $name = trim($_POST["name"]);
    $last_name = trim($_POST["last_name"]);
    $telephone = trim($_POST["telephone"]);
    $email = trim($_POST["email"]);
    $EPS = trim($_POST["EPS"]);
    $ARL = trim($_POST["ARL"]);
    $salary = trim($_POST["salary"]);
    $address = trim($_POST["address"]);

    if (!empty($name) && !empty($last_name) && !empty($telephone) && !empty($email) && !empty($EPS) && !empty($ARL) && !empty($salary) && !empty($address)) {
        $sql = $conn->query("UPDATE employs SET name='$name',last_name='$last_name',telephone='$telephone',email='$email',EPS='$EPS',ARL='$ARL',salary='$salary',address='$address' WHERE id_emp=$id_emp");
        if ($sql == 1) {
            header("Location: index.php");
            exit;
        } else {
            echo '<div class="alert alert-danger">Error updating employee</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Complete all fields</div>';
    }
}
?>
