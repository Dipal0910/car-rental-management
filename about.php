<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us - Car Rental Service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .hero-section {
            background: url('images/carbackground.jpg') center center/cover no-repeat;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 1px 1px 5px black;
        }
        .hero-section h1 {
            font-size: 3rem;
        }
        .about-content {
            padding: 3rem 1rem;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
  <a class="navbar-brand" href="#">CarRental</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navContent">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
      <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
      <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
      <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
      <li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
      <li class="nav-item">
        <button class="btn btn-outline-light btn-sm ms-2" id="toggleTheme">🌗 Theme</button>
      </li>
    </ul>
  </div>
</nav>

<!-- Hero Section -->
<div class="hero-section">
    <h1>About CarRental</h1>
</div>

<!-- About Content -->
<div class="container about-content text-center">
    <h2 class="mb-4">Your Trusted Car Rental Solution</h2>
    <p class="lead mb-4">
        CarRental was founded with the vision to make vehicle rental simple, accessible, and affordable for everyone.
        Whether you're traveling for business, going on a road trip, or just need a temporary ride — we've got you covered.
    </p>
    <div class="row text-start">
        <div class="col-md-4">
            <h5>🚗 Wide Variety of Vehicles</h5>
            <p>From compact cars to SUVs and luxury vehicles — choose what suits your journey best.</p>
        </div>
        <div class="col-md-4">
            <h5>💰 Affordable Pricing</h5>
            <p>Transparent pricing with no hidden fees. Daily, weekly, and monthly plans available.</p>
        </div>
        <div class="col-md-4">
            <h5>📍 Convenient Locations</h5>
            <p>Pick up your vehicle from multiple locations across the city with ease.</p>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white py-4">
    <div class="container text-center">
        &copy; <?php echo date("Y"); ?> CarRental. All rights reserved.
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
