<?php session_start(); ?>
<nav class="navbar">
  <div class="logo">
    <a href="homepage.php"><img src="../images/logo.png" alt="10Books Logo"></a>
    <a href="homepage.php"><h1 class="website" style="color: white; margin: 0;">10Books</h1></a>
  </div>
  
  
  
  <ul class="nav-options">
    

    <?php if (isset($_SESSION['username'])): ?>
      <li class="user-menu">
        <div class="user-icon" onclick="toggleDropdown()">
          <img src="../images/user-icon.png" alt="User">
        </div>
        <div id="dropdown-menu" class="dropdown-content">
          <p><strong><?php echo $_SESSION['fullname']; ?></strong></p>
          <p><?php echo $_SESSION['email']; ?></p>
          <a href="logout.php">Logout</a>
        </div>
      </li>
    <?php else: ?>
      <li><a href="../books/login.php">Login</a></li>
      <li><a href="../books/register.php">Register</a></li>
    <?php endif; ?>
    <li><a href="about.php">About</a></li>
  </ul>
</nav>

<script>
  function toggleDropdown() {
    document.getElementById("dropdown-menu").classList.toggle("show");
  }

  window.onclick = function(event) {
    if (!event.target.matches('.user-icon img')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      for (var i = 0; i < dropdowns.length; i++) {
        dropdowns[i].classList.remove("show");
      }
    }
  }
</script>

<style>
  /* Navigation Bar Styling */
  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 20px;
    background-color: #1e293b;
    color: white;
    position: fixed;
    top: 0;
    left: 0;
    width: 98%;
    z-index: 1000;
  }

  .logo {
    display: flex;
    align-items: center;
  }

  .logo img {
    height: 40px;
    margin-right: 10px;
    border-radius: 50%;
  }

  .website h1{
    text-decoration: none;
    text-decoration-line: none;
  }
  .search-bar input {
    padding: 8px;
    border-radius: 5px;
    border: none;
  }

  .nav-options {
    display: flex;
    list-style: none;
    gap: 20px;
    align-items: center;
  }

  .nav-options a,
  .nav-options select {
    color: white;
    text-decoration: none;
    border: none;
    cursor: pointer;
    padding: 5px 10px;
  }

  /* User Dropdown Menu */
  .user-menu {
    position: relative;
    display: inline-block;
  }

  .user-icon img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    cursor: pointer;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: white;
    min-width: 150px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    border-radius: 5px;
    overflow: hidden;
  }

  .dropdown-content p, 
  .dropdown-content a {
    padding: 10px;
    text-align: center;
    color: black;
    display: block;
  }

  .dropdown-content a {
    text-decoration: none;
    font-weight: bold;
    color: red;
  }

  .dropdown-content.show {
    display: block;
  }
</style>
