<?php include '../include/db.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $conn->query("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");
    header("Location: ../admin/update-user.php");
}
?>
<form method="POST">
  <h2>Add New User</h2>
  Name: <input type="text" name="name" required><br>
  Email: <input type="email" name="email" required><br>
  Password: <input type="password" name="password" required><br>
  <button type="submit">Add</button>
</form>
