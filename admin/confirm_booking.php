<?php
session_start();
require_once "../includes/db.php";

// Check if user is an admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit;
}

// Confirm booking (update status to 'confirmed')
if (isset($_GET['id'])) {
    $booking_id = $_GET['id'];

    // Update booking status to confirmed
    $stmt = $conn->prepare("UPDATE bookings SET status = 'confirmed' WHERE id = ?");
    $stmt->bind_param("i", $booking_id);
    if ($stmt->execute()) {
        // Also update car availability to 0 (booked)
        $stmt = $conn->prepare("UPDATE cars SET available = 0 WHERE id IN (SELECT car_id FROM bookings WHERE id = ?)");
        $stmt->bind_param("i", $booking_id);
        $stmt->execute();
        
        // Redirect to the booking management page
        header("Location: admin_bookings.php");
        exit;
    } else {
        echo "Error confirming booking.";
    }
}
?>