<?php
session_start();
include '../include/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    // Check user credentials
    $stmt = $conn->prepare("SELECT id, username, fullname, email, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user["password"])) {
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["username"] = $user["username"];
            $_SESSION["fullname"] = $user["fullname"];
            $_SESSION["email"] = $user["email"];

            header("Location: homepage.php");
            exit();
        } else {
            echo "<script>alert('Incorrect password!'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('User not found! Please register first.'); window.location.href='register.php';</script>";
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
  <link rel="stylesheet" href="../css/login.css">
</head>
<body>
  <!-- Login Form -->
  <main class="login-page">
    <section class="login-section">
      <div class="logo">
        <img src="../images/logo.png" alt="Website Logo">
    </div>
      <h2>Login to Your Account</h2>
      <form action="login.php" method="POST">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
        <div class="register-link">
          <p>New user? <a href="register.php">Sign up here</a></p>
        </div>
        <div class="forgot-password">
          <p><a href="forgot-password.html">Forgot Password?</a></p>
        </div>
      </form>
    </section>
  </main>
</body>
</html>
