
<?php
session_start(); // Start the session
include '../include/db.php';  // Import the database connection

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    echo "Please login first to submit a review.";
    exit;
}

// Get username from session (not from form)
$user = $_SESSION['username'];
$rating = (int) $_POST['rating'];
$review = trim($_POST['review']);
$timestamp = date('Y-m-d H:i:s');

// Prepare SQL statement
$sql = "INSERT INTO reviews (username, rating, review, timestamp) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("siss", $user, $rating, $review, $timestamp);

if ($stmt->execute()) {
    echo "Review submitted successfully.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
