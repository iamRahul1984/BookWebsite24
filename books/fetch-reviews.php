<?php
include '../include/db.php';  // Your database connection

//session_start();
$currentUser = $_SESSION['username'] ?? ''; // Get current logged-in user

// Fetch all reviews (you can filter by book_id if needed)
$sql = "SELECT * FROM reviews ORDER BY timestamp DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="review-section">';
    while ($row = $result->fetch_assoc()) {
        echo '<div class="review-card">';
        echo '<strong>' . htmlspecialchars($row['username']) . '</strong><br>';
        echo '<span class="rating">Rating: ' . $row['rating'] . '/5</span><br>';
        echo '<p>' . nl2br(htmlspecialchars($row['review'])) . '</p>';
        echo '<small>' . $row['timestamp'] . '</small><br>';

        // Show edit/delete only for the owner
        if ($row['username'] === $currentUser) {
           
            echo '<button onclick="deleteReview(' . $row['id'] . ')">Delete</button>';
        }

        echo '</div>';
    }
    echo '</div>';
} else {
    echo '<p>No reviews yet.</p>';
}

$conn->close();
?>
