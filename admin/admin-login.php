<?php
// admin_login.php
session_start();
require '../include/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        die("Email and password are required.");
    }

    $stmt = $conn->prepare("SELECT id, admin, password FROM admin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id, $admin, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['admin_id'] = $id;
            $_SESSION['admin_name'] = $admin;
            //echo "Login successful.";
             header("Location: ../admin/admin-dashboard.php");
        } else {
          echo "<script>alert('Incorrect password!'); window.history.back();</script>";
        }
    } else {
      echo "<script>alert('Admin not found! Please register first.'); window.location.href='../admin/admin-register.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - 10Books</title>
  <link rel="stylesheet" href="../css/admin-login.css">
</head>
<body>
  <!-- Login Form -->
  <main class="login-page">
    <section class="login-section">
      <div class="logo">
        <img src="../images/logo.png" alt="Website Logo">
    </div>
      <h2>ADMIN-LOGIN</h2>
      <form action="admin-login.php" method="POST">
        <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
        <div class="register-link">
         
        </div>
        
      </form>
    </section>
  </main>
</body>
</html>
