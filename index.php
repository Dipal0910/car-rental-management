<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
  <meta charset="UTF-8">
  <title>CarRental - Rent Your Ride</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f9f9f9;
    }

    .hero {
      background: linear-gradient(to bottom right, rgba(0,0,0,0.6), rgba(0,0,0,0.2)),
                  url('images/carbackground.jpg') no-repeat center center/cover;
      color: white;
      padding: 130px 20px;
      text-align: center;
    }

    .hero h1 {
      font-size: 3.5rem;
      font-weight: 700;
      animation: fadeInDown 1s ease-in-out;
    }

    .hero p {
      font-size: 1.3rem;
      font-weight: 400;
      animation: fadeInUp 1s ease-in-out;
    }

    @keyframes fadeInDown {
      from {opacity: 0; transform: translateY(-20px);}
      to {opacity: 1; transform: translateY(0);}
    }

    @keyframes fadeInUp {
      from {opacity: 0; transform: translateY(20px);}
      to {opacity: 1; transform: translateY(0);}
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.15);
      transition: all 0.3s ease;
    }

    .testimonials {
      background-color: #fff;
      padding: 60px 20px;
    }

    .testimonial-card {
      border-left: 5px solid #0d6efd;
      background: #f1f5f9;
      padding: 20px;
      border-radius: 8px;
    }

    footer {
      background-color: #212529;
      color: #ccc;
    }

    footer a {
      color: #ffc107;
      text-decoration: none;
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
    <h1>Find Your Perfect Ride</h1>
    <p class="lead">Affordable, Reliable, and Just a Click Away.</p>
    <a href="signup.php" class="btn btn-warning btn-lg mt-3 px-4">Book Now</a>
  </div>
</section>

<!-- Available Cars -->
<section class="container py-5">
  <h2 class="text-center fw-bold mb-4">Explore Our Fleet</h2>
  <div class="row" id="car-list">

    <!-- Car 1 -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <img src="images/car100.jpg" class="card-img-top" alt="Toyota Camry">
        <div class="card-body">
          <h5 class="card-title fw-semibold">Toyota Camry</h5>
          <p class="card-text text-muted">$50/day · Automatic · Petrol</p>
          <a href="#" class="btn btn-outline-primary w-100">Rent Now</a>
        </div>
      </div>
    </div>

    <!-- Car 2 -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <img src="images/car200.jpg" class="card-img-top" alt="Honda Civic">
        <div class="card-body">
          <h5 class="card-title fw-semibold">Honda Civic</h5>
          <p class="card-text text-muted">$45/day · Automatic · Hybrid</p>
          <a href="#" class="btn btn-outline-primary w-100">Rent Now</a>
        </div>
      </div>
    </div>

    <!-- Car 3 -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <img src="images/car300.jpg" class="card-img-top" alt="Ford Mustang">
        <div class="card-body">
          <h5 class="card-title fw-semibold">Ford Mustang</h5>
          <p class="card-text text-muted">$80/day · Manual · Petrol</p>
          <a href="#" class="btn btn-outline-primary w-100">Rent Now</a>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Testimonials -->
<section class="testimonials text-center">
  <div class="container">
    <h2 class="fw-bold mb-5">What Our Customers Say</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="testimonial-card">
          <p>“Super smooth booking experience. The car was clean and in perfect condition!”</p>
          <small class="text-muted">- Arjun K.</small>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial-card">
          <p>“Great pricing and friendly customer support. Highly recommend CarRental!”</p>
          <small class="text-muted">- Simran P.</small>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial-card">
          <p>“I booked a car in under 5 minutes. The website is easy and intuitive.”</p>
          <small class="text-muted">- Naveen R.</small>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="text-center py-4 mt-5">
  <p class="mb-1">&copy; <?php echo date("Y"); ?> <strong>CarRental</strong>. All rights reserved.</p>
  <p class="small">
    <a href="contact.php">Contact</a> |
    <a href="about.php">About Us</a>
  </p>
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
