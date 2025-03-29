<?php
session_start();
require_once "includes/db.php";

// Check if car ID is passed in URL
if (!isset($_GET['id'])) {
    header("Location: cars.php");
    exit;
}

$car_id = $_GET['id'];

// Fetch car details from database
$sql = "SELECT * FROM cars WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $car_id);
$stmt->execute();
$car = $stmt->get_result()->fetch_assoc();
$stmt->close();

// Handle booking form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    // Check if dates are valid
    if ($start_date && $end_date && $start_date < $end_date) {
        // Insert booking into database
        $user_id = $_SESSION['user_id'];
        $status = 'pending';
        
        $stmt = $conn->prepare("INSERT INTO bookings (user_id, car_id, start_date, end_date, status) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("iisss", $user_id, $car_id, $start_date, $end_date, $status);
        if ($stmt->execute()) {
            // Update car availability to 0 (booked)
            $stmt = $conn->prepare("UPDATE cars SET available = 0 WHERE id = ?");
            $stmt->bind_param("i", $car_id);
            $stmt->execute();
            
            // Success message before redirect
            echo "<p>Booking successfully completed for " . $car['brand'] . " " . $car['model'] . "!</p>";
            echo "<p>You will be redirected shortly.</p>";
            // Redirect after a short delay to allow the success message to be visible
            header("refresh:3; url=cars.php");
            exit;
        } else {
            echo "<p>Error occurred during booking: " . $stmt->error . "</p>";
        }
        $stmt->close();
    } else {
        echo "<p>Invalid dates. Please ensure the start date is before the end date.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Car - CarRental</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center">Book <?php echo $car['brand'] . ' ' . $car['model']; ?></h2>

        <form action="book_car.php?id=<?php echo $car_id; ?>" method="POST">
            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" name="start_date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="end_date" class="form-label">End Date</label>
                <input type="date" name="end_date" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Book Now</button>
        </form>
    </div>
</body>
</html>
