<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Registration - SL academy</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body {
            background-image: url('form.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            max-width: 800px;
            margin: 2rem auto;
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

    <!-- Form Container -->
    <div class="container form-container">
        <h1 class="text-center text-primary mb-4">Course Registration Form</h1>
        <form action="#" method="POST">
            <div class="mb-3">
                <label for="fullname" class="form-label">Full Name *</label>
                <input type="text" class="form-control" id="fullname" name="fullname" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address *</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number *</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>

            <div class="mb-3">
                <label for="education" class="form-label">Highest Education Level *</label>
                <select id="education" name="education" class="form-select" required>
                    <option value="">Select your education level</option>
                    <option value="high-school">High School</option>
                    <option value="bachelor">Bachelor's Degree</option>
                    <option value="master">Master's Degree</option>
                    <option value="phd">Ph.D.</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="course" class="form-label">Interested Course *</label>
                <select id="course" name="course" class="form-select" required>
                    <option value="">Select a course</option>
                    <option value="web-development">Web Development</option>
                    <option value="data-science">Data Science</option>
                    <option value="artificial-intelligence">Artificial Intelligence</option>
                    <option value="cyber-security">Cyber Security</option>
                    <option value="cloud-computing">Cloud Computing</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="experience" class="form-label">Previous Programming Experience</label>
                <select id="experience" name="experience" class="form-select">
                    <option value="none">No Experience</option>
                    <option value="beginner">Beginner</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="advanced">Advanced</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Why do you want to join this course? *</label>
                <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100" onclick="showdata()">Submit Registration</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script>
        function showdata(){
            var name = document.getElementById('fullname').value;
            var email = document.getElementById('email').value;
            var tel = document.getElementById('phone').value;
            var Edu_Level = document.getElementById('education').value;
            var message ="Name: " + name +"\nEmail: " + email +"\nPhone: " + tel + "\nEducation Level: " + Edu_Level;
            alert(message);
        }
    </script>
</body>
</html>
