<!DOCTYPE html>
<html lang="en" data-bs-theme="light"> <!-- Default to light mode -->
<head>
    <meta charset="UTF-8">
    <title>CarRental - Rent Your Ride</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .hero {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('images/car1.jpg') no-repeat center center/cover;
            color: white;
            padding: 100px 20px;
            text-align: center;
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
      <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
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

<!-- Hero Section -->
<section class="hero">
  <div class="container">
    <h1 class="display-4">Find Your Perfect Ride</h1>
    <p class="lead">Affordable, Reliable, and Just a Click Away.</p>
    <a href="signup.php" class="btn btn-warning btn-lg mt-3">Book Now</a>
  </div>
</section>

<!-- Car Cards Section -->
<section class="container py-5">
  <h2 class="text-center mb-4">Available Cars</h2>
  <div class="row" id="car-list">

    <!-- Car 1 -->
    <div class="col-md-4">
      <div class="card mb-4">
        <img src="images/car1.jpg" class="card-img-top" alt="Car 1">
        <div class="card-body">
          <h5 class="card-title">Toyota Camry</h5>
          <p class="card-text">$50/day · Automatic · Petrol</p>
          <a href="#" class="btn btn-primary">Rent Now</a>
        </div>
      </div>
    </div>

    <!-- Car 2 -->
    <div class="col-md-4">
      <div class="card mb-4">
        <img src="images/car2.jpg" class="card-img-top" alt="Car 2">
        <div class="card-body">
          <h5 class="card-title">Honda Civic</h5>
          <p class="card-text">$45/day · Automatic · Hybrid</p>
          <a href="#" class="btn btn-primary">Rent Now</a>
        </div>
      </div>
    </div>

    <!-- Car 3 -->
    <div class="col-md-4">
      <div class="card mb-4">
        <img src="images/car3.jpg" class="card-img-top" alt="Car 3">
        <div class="card-body">
          <h5 class="card-title">Ford Mustang</h5>
          <p class="card-text">$80/day · Manual · Petrol</p>
          <a href="#" class="btn btn-primary">Rent Now</a>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Footer -->
<footer class="text-center p-3 bg-dark text-white">
  &copy; <?php echo date("Y"); ?> CarRental. All rights reserved.
</footer>

<!-- Bootstrap JS and Theme Toggle Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const toggleTheme = document.getElementById("toggleTheme");
  const htmlEl = document.querySelector("html");

  toggleTheme.addEventListener("click", () => {
    const current = htmlEl.getAttribute("data-bs-theme");
    const next = current === "dark" ? "light" : "dark";
    htmlEl.setAttribute("data-bs-theme", next);
  });
</script>

</body>
</html>