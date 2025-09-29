<?php
// footer.php
?>

<style>
.footer {
    background: #333;
    color: white;
    text-align: center;
    padding: 8px;
    position: sticky;
    top: 100vh;
    width: 100%;
    margin-left: -8px;
    margin-right: 50px;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    margin: auto;
    padding: 10px;
    box-sizing: border-box;
}

.footer-logo img {
    width: 100px;
    border-radius: 20px;
}

.footer-social a {
    margin: 0 10px;
}

.footer-social img {
    width: 30px;
    height: 30px;
}

.footer-contact, .footer-admin {
    margin-top: 10px;
}

.footer-admin a {
    color: yellow;
    text-decoration: none;
    font-weight: bold;
}

.footer-admin a:hover {
    text-decoration: underline;
}
</style>

<footer class="footer">
    <div class="footer-container">
        <!-- Logo Section -->
        <div class="footer-logo">
            <img src="../images/logo.png" alt="Website Logo">
        </div>

        <!-- Social Media Links -->
        <div class="footer-social">
            <a href="mailto:sr166773@gmail.com" target="_blank" rel="noopener noreferrer">
                <img src="../images/Gmail.png" alt="Gmail">
            </a>
            <a href="https://www.linkedin.com/in/yourprofile" target="_blank" rel="noopener noreferrer">
                <img src="../images/linkedin.png" alt="LinkedIn">
            </a>
            <a href="https://www.instagram.com/yourprofile" target="_blank" rel="noopener noreferrer">
                <img src="../images/instagram.jpeg" alt="Instagram">
            </a>
        </div>

        <!-- Contact Us -->
        <div class="footer-contact">
            <p>📞 Contact Us: +91 9082060492</p>
            <p>📧 Email: sr166773@gmail.com</p>
        </div>

        <!-- Admin Panel -->
        <div class="footer-admin">
            <a href="../admin/admin-login.php">Admin Panel</a>
        </div>

        <!-- Copyright -->
        <div class="footer-copyright">
            <p>&copy; 2025 10Books. All Rights Reserved.</p>
        </div>
    </div>
</footer>
