<?php
require_once "includes/db.php";

// Fetch cars from the database
$sql = "SELECT * FROM cars WHERE available = 1";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Car Rental - Available Cars</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
  <a class="navbar-brand" href="#">CarRental</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navContent">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
      <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
      <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
      <li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
      <li class="nav-item">
        <button class="btn btn-outline-light btn-sm ms-2" id="toggleTheme">🌗 Theme</button>
      </li>
    </ul>
  </div>
</nav>

<!-- Main content -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Available Cars</h2>

    <div class="row">
        <?php if ($result->num_rows > 0) {
            // Loop through cars and display each one
            while($car = $result->fetch_assoc()) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/<?php echo $car['image']; ?>" class="card-img-top" alt="<?php echo $car['model']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $car['brand'] . " " . $car['model']; ?></h5>
                            <p class="card-text">Price per day: $<?php echo $car['price_per_day']; ?></p>
                            <a href="book_car.php?id=<?php echo $car['id']; ?>" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
        <?php } } else { ?>
            <p>No cars available at the moment.</p>
        <?php } ?>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>