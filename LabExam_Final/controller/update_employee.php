<?php
include '../model/usermodel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];

    $con = getConnection();
    $sql = "UPDATE employees SET name = '{$name}', contact_no = '{$contact}', username = '{$username}' WHERE id = '{$id}'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Employee updated successfully.";
    } else {
        echo "Error updating employee: ";
    }
}
?>
