<?php
include '../model/usermodel.php';

$search = $_GET['search'] ?? '';
$con = getConnection();

$sql = "SELECT * FROM employees";
if ($search) {
    $sql .= " WHERE name LIKE '%{$search}%' OR username LIKE '%{$search}%'";
}

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td><input type='text' id='name_{$row['id']}' value='{$row['name']}'></td>
                <td><input type='text' id='contact_{$row['id']}' value='{$row['contact_no']}'></td>
                <td><input type='text' id='username_{$row['id']}' value='{$row['username']}'></td>
                <td>
                    <button onclick='updateEmployee({$row['id']})'>Update</button>
                    <button onclick='deleteEmployee({$row['id']})'>Delete</button>
                    <button onclick='deleteEmlpoyee({$row['id']})'>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No employees found.";
}
?>
