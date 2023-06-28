<?php
if (!empty($_POST["create"])) {
    $name = trim($_POST["name"]);
    $last_name = trim($_POST["last_name"]);
    $telephone = trim($_POST["telephone"]);
    $email = trim($_POST["email"]);
    $EPS = trim($_POST["EPS"]);
    $ARL = trim($_POST["ARL"]);
    $salary = trim($_POST["salary"]);
    $address = trim($_POST["address"]);

    if (!empty($name) && !empty($last_name) && !empty($telephone) && !empty($email) && !empty($EPS) && !empty($ARL) && !empty($salary) && !empty($address)) {
        $sql = $conn->query("INSERT INTO employs(name,last_name,telephone, email, EPS, ARL, salary, address) VALUES ('$name','$last_name','$telephone','$email','$EPS','$ARL','$salary','$address')");
        if ($sql == 1) {
            echo '<div class="alert alert-success">Employ created successfully</div>';
        } else {
            echo '<div class="alert alert-danger">Error creating employee</div>';
        }
        
        // Redireccionar a la página actual sin enviar el formulario
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    } else {
        echo '<div class="alert alert-warning">Complete all fields</div>';
    }
}
?>
