<?php
$con = mysqli_connect('127.0.0.1', 'root', '', 'tendify');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //echo $id;
       $sql = "SELECT * FROM coupon WHERE ID = '{$id}'";
    if (mysqli_query($con, $sql)) {
        echo "Coupon deleted successfully!";
      //  header("Location: adminHome.php"); // Redirect back to the main page
    } else {
        echo "Error deleting coupon: " . mysqli_error($con);
    }
}
?>
