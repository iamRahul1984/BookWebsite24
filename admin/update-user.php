<?php include '../include/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel - Users</title>
  <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
  <h2>All Users</h2>
 <!--<a href="add_user.php">Add New User</a>-->
  <table border="2">
    <tr><th>ID</th><th>Username</th><th>Name</th><th>Email</th><th>Actions</th></tr>
    <?php
    $result = $conn->query("SELECT * FROM users");
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['username']}</td>
                <td>{$row['fullname']}</td>
                <td>{$row['email']}</td>
                <td>
                      
                    <a href='delete_user.php?id={$row['id']}' onclick=\"return confirm('Are you sure?')\">Delete</a>
                </td>
              </tr>";
    }
    ?>
  </table>
</body>
</html>
