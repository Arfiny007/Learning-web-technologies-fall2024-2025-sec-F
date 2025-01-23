<?php
$con = mysqli_connect('127.0.0.1', 'root', '', 'tendify');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM coupon WHERE ID = '{$id}'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $amount = $_POST['amount'];
        
        $update_sql = "UPDATE coupon SET Name='$name', Ammount='$amount' WHERE ID = $id";
        if (mysqli_query($con, $update_sql)) {
            echo "Coupon updated successfully!";
            header("Location: adminHome.php"); // Redirect back to the main page
        } else {
            echo "Error updating coupon: " . mysqli_error($con);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Coupon</title>
</head>
<body>
    <form method="POST" action="checkupdate.php">

        ID: <input type="text" name="id" value="<?php echo $id?>" required><br><br>
        <label for="name">Name: </label>
        <input type="text" name="name" value="<?php echo $row['Name']; ?>" required><br><br>
        
        <label for="amount">Discount Amount: </label>
        <input type="number" name="amount" value="<?php echo $row['Ammount']; ?>" required><br><br>
        
        <button type="submit" name="update">Update Coupon</button>
    </form>
</body>
</html>
