<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>10Books Admin Dashboard</title>
  <link rel="stylesheet" href="assets/style.css">
  <style>
    body { margin: 0; font-family: Arial; }
    .navbar {
      display: flex; justify-content: space-between;
      background: #2c3e50; color: white;
      padding: 10px 20px;
    }
    .navbar .logo { font-weight: bold; font-size: 22px; }
    .navbar a { color: white; text-decoration: none; margin-left: 15px; }

    .dashboard { display: flex; height: calc(100vh - 50px); }

    .sidebar {
      width: 200px;
      background: #ecf0f1;
      padding: 20px;
      border-left: 1px solid #ccc;
    }
    .sidebar a {
      display: block; margin-bottom: 10px;
      text-decoration: none; color: #2c3e50; font-weight: bold;
      cursor: pointer;
    }

    .main-content {
      flex: 1;
      padding: 30px;
      overflow-y: auto;
      background: #fdfdfd;
    }
  </style>
</head>
<body>

<div class="navbar">
  <div class="logo">10Books</div>
  <div>
    <a href="../books/homepage.php">Logout</a>
    <a href="../books/about.php">About</a>
  </div>
</div>

<div class="dashboard">
  <div class="main-content" id="content">
    <h2>Welcome to 10Books Admin Dashboard</h2>
    <p>Select an action from the sidebar.</p>
  </div>

  <div class="sidebar">
    <a onclick="loadPage('update-user.php')">Delete User</a>
    <a onclick="loadPage('manage-reviews.php')">Delete Review</a>
  </div>
</div>

<script>
  function loadPage(page) {
    fetch(page)
      .then(res => res.text())
      .then(html => {
        document.getElementById("content").innerHTML = html;
      })
      .catch(err => {
        document.getElementById("content").innerHTML = "<p>Failed to load page.</p>";
        console.error(err);
      });
  }
</script>

</body>
</html>
