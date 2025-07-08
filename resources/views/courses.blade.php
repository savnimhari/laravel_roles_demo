<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SL Academy - Our Courses</title>
 <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <style>
    body {
      background-color: #B6EFF0;
    }
    .navbar {
      background-color: #2c3e50;
    }
    .navbar-nav .nav-link {
      color: white !important;
      font-weight: 500;
    }
    .card:hover {
      transform: translateY(-5px);
      transition: transform 0.3s ease;
    }
    footer {
      background-color: #2c3e50;
      color: white;
      text-align: center;
      padding: 2rem;
      margin-top: 3rem;
    }
  </style>
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
        <li class="nav-item"><a class="nav-link" href="{{ url('index') }}">Login</a></li>
      </ul>
    </div>
  </nav>

  <div class="container py-5">
    <h1 class="text-center text-primary mb-5">Our Course Catalog</h1>

    <div class="row g-4">
      <!-- Course Card 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100">
          <img src="https://images.unsplash.com/photo-1547658719-da2b51169166" class="card-img-top" alt="Web Development">
          <div class="card-body">
            <h5 class="card-title">Web Development</h5>
            <p class="card-text">Learn HTML, CSS, JavaScript, and modern frameworks. Build responsive websites and web applications.</p>
            <ul class="list-unstyled">
              <li><strong>Duration:</strong> 12 weeks</li>
              <li><strong>Level:</strong> Beginner to Advanced</li>
              <li>Live Projects Included</li>
            </ul>
            <p class="text-primary fw-bold">$499</p>
            <a href="form" class="btn btn-danger w-100">Enroll Now</a>
          </div>
        </div>
      </div>

      <!-- Course Card 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100">
          <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71" class="card-img-top" alt="Data Science">
          <div class="card-body">
            <h5 class="card-title">Data Science</h5>
            <p class="card-text">Master data analysis, Python, machine learning, and statistical modeling.</p>
            <ul class="list-unstyled">
              <li><strong>Duration:</strong> 16 weeks</li>
              <li><strong>Level:</strong> Intermediate</li>
              <li>Industry Projects</li>
            </ul>
            <p class="text-primary fw-bold">$699</p>
            <a href="form" class="btn btn-danger w-100">Enroll Now</a>
          </div>
        </div>
      </div>

      <!-- Course Card 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100">
          <img src="https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a" class="card-img-top" alt="Digital Marketing">
          <div class="card-body">
            <h5 class="card-title">Digital Marketing</h5>
            <p class="card-text">Learn SEO, social media marketing, content strategy, and PPC advertising.</p>
            <ul class="list-unstyled">
              <li><strong>Duration:</strong> 8 weeks</li>
              <li><strong>Level:</strong> All Levels</li>
              <li>Real Campaign Experience</li>
            </ul>
            <p class="text-primary fw-bold">$399</p>
            <a href="form" class="btn btn-danger w-100">Enroll Now</a>
          </div>
        </div>
      </div>

      <!-- Course Card 4 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100">
          <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5" class="card-img-top" alt="Cybersecurity">
          <div class="card-body">
            <h5 class="card-title">Cybersecurity</h5>
            <p class="card-text">Learn network security, ethical hacking, and security best practices.</p>
            <ul class="list-unstyled">
              <li><strong>Duration:</strong> 14 weeks</li>
              <li><strong>Level:</strong> Advanced</li>
              <li>Certification Prep</li>
            </ul>
            <p class="text-primary fw-bold">$799</p>
            <a href="form" class="btn btn-danger w-100">Enroll Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <h4>Contact Us</h4>
    <p>Email: SLacademy@gmail.com</p>
    <p>Phone: 0112 447 558</p>
    <p>&copy; 2023 SLacademy. All rights reserved.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
