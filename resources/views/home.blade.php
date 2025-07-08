<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SL Academy - Home Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head> 
<body>
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
        <li class="nav-item"><a class="nav-link" href="{{ url('login') }}">Login</a></li>
      </ul>
    </div>
  </nav>

  <!-- Header -->
  <header id="home" class="bg-dark text-white text-center py-5" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1524178232363-1fb2b075b655'); background-size: cover;">
    <div class="container">
      <h1 class="display-4">Welcome to SL academy</h1>
      <p class="lead">Transforming Education Through Innovation</p>
    </div>
  </header>

  <!-- Courses -->
  <div class="container my-5">
    <section id="courses">
      <h2 class="text-center mb-4">Our Featured Courses</h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h3 class="card-title">Web Development</h3>
              <p class="card-text">Learn modern web development technologies and build responsive websites.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h3 class="card-title">Data Science</h3>
              <p class="card-text">Master data analysis, machine learning, and statistical modeling.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h3 class="card-title">Digital Marketing</h3>
              <p class="card-text">Understand digital marketing strategies and grow online presence.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- CTA Section -->
  <section class="bg-primary text-white text-center py-5">
    <div class="container">
      <h2>Ready to Start Your Learning Journey?</h2>
      <p>Join thousands of students already learning with us</p>
      <a href="{{ url('form') }}" class="btn btn-danger btn-lg mt-3">Enroll Now</a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-4">
    <div class="container">
      <h2>Contact Us</h2>
      <p>Email: SLacademy@gmail.com</p>
      <p>Phone: 0112 447 558</p>
      <p>&copy; 2023 SLacademy. All rights reserved.</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
