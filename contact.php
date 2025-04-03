<?php
session_start();
require_once 'includes/db.php'; // make sure this file connects to your database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $subject = mysqli_real_escape_string($conn, $_POST["subject"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);

    $sql = "INSERT INTO messages (name, email, subject, message) 
            VALUES ('$name', '$email', '$subject', '$message')";
    
    if (mysqli_query($conn, $sql)) {
        $success = "Message sent successfully!";
    } else {
        $error = "Something went wrong. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us - CarRental</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f1f5f9;
        }
        .contact-header {
            background: url('images/car1.jpg') center center/cover no-repeat;
            height: 280px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 6px black;
        }
        .contact-header h1 {
            font-size: 2.8rem;
        }
        .form-section {
            padding: 3rem 1rem;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #0d6efd;
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
      <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
      <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
      <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
      <li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
      <li class="nav-item">
        <button class="btn btn-outline-light btn-sm ms-2" id="toggleTheme">🌗 Theme</button>
      </li>
    </ul>
  </div>
</nav>

<!-- Header Section -->
<div class="contact-header">
    <h1>Contact Us</h1>
</div>

<!-- Contact Form Section -->
<div class="container form-section">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">We'd love to hear from you!</h2>
            <?php if (isset($success)) echo '<div class="alert alert-success">'.$success.'</div>'; ?>
            <?php if (isset($error)) echo '<div class="alert alert-danger">'.$error.'</div>'; ?>

            <form method="post" action="">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea name="message" class="form-control" id="message" rows="5" placeholder="Type your message here..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Send Message</button>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white py-4 mt-5">
    <div class="container text-center">
        &copy; <?php echo date("Y"); ?> CarRental. All rights reserved.
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
