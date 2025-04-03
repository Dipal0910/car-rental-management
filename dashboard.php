<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// Redirect if user is not logged in
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
    <div class="card shadow-sm p-4">
    <h1 class="mb-3">Welcome, <?php echo $_SESSION["name"]; ?>!</h1>
    <p class="lead">You are logged in as a <strong><?php echo $_SESSION["role"]; ?></strong>.</p>
    
    <!-- Added button -->
    <a href="book_car.php" class="btn btn-primary mt-3 me-2">Book a Car</a>

    <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
</div>
    </div>
</body>
</html>
