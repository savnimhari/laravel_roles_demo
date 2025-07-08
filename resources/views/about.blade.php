<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLacademy - About Us</title>
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
        <li class="nav-item"><a class="nav-link" href="{{ url('index') }}">Login</a></li>
      </ul>
    </div>
  </nav>

    <!-- Hero Section -->
    <section class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Welcome to SL academy</h1>
            <p class="lead">Shaping Tomorrow's Tech Leaders Today</p>
        </div>
    </section>

    <!-- About Section -->
    <div class="container my-5">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Our Mission</h2>
                        <p class="card-text">
                            At SL academy, we believe in transforming education through technology. Our mission is to provide accessible, high-quality tech education that empowers students to excel in the digital world.
                        </p>
                        <p class="card-text">
                            Since our establishment, we have been committed to delivering cutting-edge curriculum and practical training that meets industry demands.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Why Choose SL academy?</h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Expert instructors from top tech companies</li>
                            <li class="list-group-item">Project-based learning approach</li>
                            <li class="list-group-item">Flexible online and hybrid learning options</li>
                            <li class="list-group-item">Dedicated career counseling</li>
                            <li class="list-group-item">Industry-recognized certifications</li>
                            <li class="list-group-item">Regular curriculum updates based on industry trends</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="container my-5">
        <div class="row text-center">
            <div class="col-md-3">
                <div class="card p-4">
                    <h3 class="text-primary display-6">3000+</h3>
                    <p>Graduates</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-4">
                    <h3 class="text-primary display-6">40+</h3>
                    <p>Industry Experts</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-4">
                    <h3 class="text-primary display-6">92%</h3>
                    <p>Employment Rate</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-4">
                    <h3 class="text-primary display-6">15+</h3>
                    <p>Corporate Partners</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Leadership Team Section -->
    <div class="container my-5 text-center">
        <h2 class="mb-4 text-dark">Leadership Team</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="" class="card-img-top rounded-circle mx-auto d-block mt-4" style="width:150px;height:150px;" alt="CEO">
                    <div class="card-body">
                        <h3 class="card-title">Mewan Jayathilake</h3>
                        <p class="card-text">CEO & Founder</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="" class="card-img-top rounded-circle mx-auto d-block mt-4" style="width:150px;height:150px;" alt="Academic Director">
                    <div class="card-body">
                        <h3 class="card-title">Maheshika Dayananda</h3>
                        <p class="card-text">Head of Education</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="" class="card-img-top rounded-circle mx-auto d-block mt-4" style="width:150px;height:150px;" alt="Tech Lead">
                    <div class="card-body">
                        <h3 class="card-title">Saman Peramuna</h3>
                        <p class="card-text">Technical Director</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4 mt-5">
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
