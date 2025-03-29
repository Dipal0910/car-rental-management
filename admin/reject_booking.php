<?php
session_start();
require_once "../includes/db.php";

// Check if user is an admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit;
}

// Reject booking (delete the booking)
if (isset($_GET['id'])) {
    $booking_id = $_GET['id'];

    // Delete the booking
    $stmt = $conn->prepare("DELETE FROM bookings WHERE id = ?");
    $stmt->bind_param("i", $booking_id);
    if ($stmt->execute()) {
        // Redirect back to the admin bookings page
        header("Location: admin_bookings.php");
        exit;
    } else {
        echo "Error rejecting booking.";
    }
}
?>