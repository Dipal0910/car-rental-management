<?php
session_start();
require_once "../includes/db.php";

// Check if user is an admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit;
}

// Fetch pending bookings from the database
$sql = "SELECT b.id, b.start_date, b.end_date, b.status, c.brand, c.model, u.name 
        FROM bookings b 
        JOIN cars c ON b.car_id = c.id 
        JOIN users u ON b.user_id = u.id 
        WHERE b.status = 'pending'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Manage Bookings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
  <a class="navbar-brand" href="#">CarRental</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navContent">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="../about.php">About</a></li>
      <li class="nav-item"><a class="nav-link" href="../contact.php">Contact</a></li>
      <li class="nav-item"><a class="nav-link" href="../login.php">Login</a></li>
      <li class="nav-item"><a class="nav-link" href="../signup.php">Sign Up</a></li>
      <li class="nav-item">
        <button class="btn btn-outline-light btn-sm ms-2" id="toggleTheme">🌗 Theme</button>
      </li>
    </ul>
  </div>
</nav>

<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Pending Bookings</h2>

        <?php if ($result->num_rows > 0) { ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Booking ID</th>
                        <th scope="col">User</th>
                        <th scope="col">Car</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['brand'] . " " . $row['model']; ?></td>
                            <td><?php echo $row['start_date']; ?></td>
                            <td><?php echo $row['end_date']; ?></td>
                            <td>
                                <a href="confirm_booking.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Confirm</a>
                                <a href="reject_booking.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Reject</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <p>No pending bookings at the moment.</p>
        <?php } ?>
    </div>
</body>
</html>

<?php
$conn->close();
?>
