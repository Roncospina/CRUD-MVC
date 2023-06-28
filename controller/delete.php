<?php 
if (!empty($_GET["id_emp"])) {
    $id_emp=$_GET["id_emp"];
    $sql=$conn->query("DELETE FROM employs WHERE id_emp=$id_emp ");
    if ($sql==1) {
        echo '<div>Employee successfully removed</div>';
    }else {
        echo '<div>Error deleting employee</div>';
    }
    
}
?>