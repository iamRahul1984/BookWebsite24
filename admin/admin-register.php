<?php
// admin_register.php
require '../include/db.php'; // include your DB connection here

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $admin = trim($_POST['admin']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($admin) || empty($email) || empty($password)) {
        die("All fields are required.");
    }

    // Check if email already exists
    $stmt = $conn->prepare("SELECT id FROM admin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        //die("Email is already registered.");
        echo "<script>alert('You are already registered! Please log in.'); window.location.href='../admin/admin-login.php';</script>";
        exit();

    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert new admin
    $stmt = $conn->prepare("INSERT INTO admin (admin, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $admin, $email, $hashed_password);

   /* if ($stmt->execute()) {
        echo "Admin registered successfully.";
        // You can redirect here: header("Location: admin_login.html");
    } else {
        echo "Registration failed.";
    }*/

    if ($stmt->execute()) {
      echo "<script>alert('Registration successful! Please login.'); window.location.href='../admin/admin-login.php';</script>";
  } else {
      echo "<script>alert('Error during registration. Try again.'); window.history.back();</script>";
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
  <title>Register - 10Books</title>
  <link rel="stylesheet" href="../css/admin-register.css">
</head>
<body>
  <main class="register-page">
    <section class="register-section">
      <div class="logo">
        <img src="../images/logo.png" alt="Website Logo">
      </div>
      <h1>ADMIN</h1>
      <h2>Create an Account</h2>
      <form action="admin-register.php" method="POST">
        <div class="form-group">
          <label for="username">Admin:</label>
          <input type="text" id="admin" name="admin" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
        
        <button type="submit">Register</button>
      </form>
      <div class="login-link">
        <p>Already have an account? <a href="../admin/admin-login.php">Login here</a></p>
      </div>
    </section>
  </main>
  <script src="../js/admin-register.js"></script>
 
</body>
</html>
