<?php
include '../model/usermodel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $con = getConnection();
    $sql = "DELETE FROM employees WHERE id = '{$id}'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Employee deleted successfully.";
    } else {
        echo "Error deleting employee: ";
    }
}
?>
