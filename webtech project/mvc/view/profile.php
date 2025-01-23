<?php
include '../models/usermodel.php';

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$conn = getConnection();
$userId = $_SESSION['user_id'];

$query = "SELECT name, username, email, profile_image FROM users WHERE id = $userId";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

if ($user) {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>User Profile</title>
        <link rel="stylesheet" href="../assets/profile.css">
        
    </head>
    <body>
    <header>
        <div class="topbar">Tendify Online Shop</div>
    </header>
        <div class="profile-container">
            <h1>User Profile</h1>
            <img src="<?php echo htmlspecialchars($user['profile_image']); ?>"  width="100">
            <p><strong>Name:</strong> <?php echo htmlspecialchars($user['name']); ?></p>
            <p><strong>Username:</strong> <?php echo htmlspecialchars($user['username']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
            <a href="logout.php">Logout</a>
        </div>
    </body>
    </html>
    <?php
} else {
    echo "User not found.";
}
?>
