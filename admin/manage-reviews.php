<?php include '../include/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel - Manage Reviews</title>
  <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
  <h2>All Reviews</h2>
  <table border="2">
    <tr><th>ID</th><th>Username</th><th>Rating</th><th>Review</th><th>Actions</th></tr>
    <?php
    $result = $conn->query("SELECT * FROM reviews ORDER BY id DESC");
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['username']}</td>
                <td>{$row['rating']}</td>
                <td>{$row['review']}</td>
                <td>
                    <a href='delete-review.php?id={$row['id']}' onclick=\"return confirm('Are you sure you want to delete this review?')\">Delete</a>
                </td>
              </tr>";
    }
    ?>
  </table>
</body>
</html>
