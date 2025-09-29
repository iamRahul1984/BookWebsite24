<?php
include '../include/db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $review_id = (int) $_POST['id'];

    // Check ownership first
    $check_sql = "SELECT username FROM reviews WHERE id = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("i", $review_id);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();

    if ($check_result->num_rows === 0) {
        echo "Review not found.";
        exit;
    }

    $row = $check_result->fetch_assoc();
    if ($row['username'] !== $_SESSION['username']) {
        echo "You are not authorized to delete this review.";
        exit;
    }

    // Delete it
    $delete_sql = "DELETE FROM reviews WHERE id = ?";
    $delete_stmt = $conn->prepare($delete_sql);
    $delete_stmt->bind_param("i", $review_id);

    if ($delete_stmt->execute()) {
        echo "Review deleted successfully.";
    } else {
        echo "Failed to delete review.";
    }
}
?>
