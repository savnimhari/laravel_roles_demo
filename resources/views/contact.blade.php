<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - SL academy</title>
   <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body class="bg-info bg-opacity-25">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('images/logo-01.png') }}" alt="Logo" height="80">
      </a>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('courses') }}">Courses</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('about') }}">About</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('contact') }}">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('index') }}">Login</a></li>
      </ul>
    </div>
  </nav>

  <div class="container py-5">
    <h1 class="text-center text-dark mb-4">Contact SL academy</h1>

    <div class="row g-4">
      <!-- Contact Info -->
      <div class="col-md-6">
        <div class="bg-white p-4 rounded shadow">
          <h2>Get in Touch</h2>
          <div class="mt-3">
            <h5 class="text-primary">Address:</h5>
            <p>373/28<br>Ranmal uyana magammana<br>Homagama</p>

            <h5 class="text-primary">Phone:</h5>
            <p>Main Office: 0112 447558<br>Student Support: 123123</p>

            <h5 class="text-primary">Email:</h5>
            <p>
              General Inquiries: info@slacademy.com<br>
              Student Support: support@slacademy.com<br>
              Admissions: admissions@slacademy.com
            </p>

            <h5 class="text-primary">Business Hours:</h5>
            <p>
              Monday - Friday: 8:00 AM - 6:00 PM<br>
              Saturday: 9:00 AM - 3:00 PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-md-6">
        <div class="bg-white p-4 rounded shadow">
          <h2>Send Us a Message</h2>
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Full Name:</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
              <label for="subject" class="form-label">Subject:</label>
              <input type="text" class="form-control" id="subject" name="subject" required>
            </div>

            <div class="mb-3">
              <label for="message" class="form-label">Message:</label>
              <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-dark w-100">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3 fixed-bottom">
    <div>
      <h5>Contact Us</h5>
      <p>Email: SLacademy@gmail.com</p>
      <p>Phone: 0112 447 558</p>
      <p class="mb-0">&copy; 2023 SLacademy. All rights reserved.</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
