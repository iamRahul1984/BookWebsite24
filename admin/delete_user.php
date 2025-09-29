<?php include '../include/db.php'; ?>
<?php
$id = $_GET['id'];
$conn->query("DELETE FROM users WHERE id = $id");
header("Location: ../admin/update-user.php");
?>
