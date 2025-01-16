<?php
include '../models/usermodel.php';

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}


$conn = getConnection();
$userId = $_SESSION['user_id'];
$query = "SELECT name, username, email FROM users WHERE id = $userId";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

if ($user) {
    echo "<h1>Profile</h1>";
    echo "<p>Name: " . $user['name'] . "</p>";
    echo "<p>Username: " . $user['username'] . "</p>";
    echo "<p>Email: " . $user['email'] . "</p>";
    echo "<a href='logout.php'>Logout</a>";
} else {
    echo "User not found.";
}
?>
