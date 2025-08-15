<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Registration - SL Academy</title>
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
        <li class="nav-item"><a class="nav-link" href="{{ url('login') }}">Login</a></li>
      </ul>
    </div>
</nav>

<!-- Form Container -->
<div class="container form-container">
    <h1 class="text-center text-primary mb-4">Course Registration Form</h1>
    <form id="courseForm">
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
                <option value="High School">High School</option>
                <option value="Bachelor's Degree">Bachelor's Degree</option>
                <option value="Master's Degree">Master's Degree</option>
                <option value="Ph.D.">Ph.D.</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="course" class="form-label">Interested Course *</label>
            <select id="course" name="course" class="form-select" required>
                <option value="">Select a course</option>
                <option value="Web Development">Web Development</option>
                <option value="Data Science">Data Science</option>
                <option value="Artificial Intelligence">Artificial Intelligence</option>
                <option value="Cyber Security">Cyber Security</option>
                <option value="Cloud Computing">Cloud Computing</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="experience" class="form-label">Previous Programming Experience</label>
            <select id="experience" name="experience" class="form-select">
                <option value="None">No Experience</option>
                <option value="Beginner">Beginner</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Advanced">Advanced</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Why do you want to join this course? *</label>
            <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary w-100">Submit & Download Report</button>
    </form>
</div>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script>
document.getElementById('courseForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // Get form values
    let name = document.getElementById('fullname').value;
    let email = document.getElementById('email').value;
    let phone = document.getElementById('phone').value;
    let education = document.getElementById('education').value;
    let course = document.getElementById('course').value;
    let experience = document.getElementById('experience').value;
    let message = document.getElementById('message').value;

    // Create text report
    let report = `SL Academy - Course Registration Report\n\n` +
                 `Full Name: ${name}\n` +
                 `Email: ${email}\n` +
                 `Phone: ${phone}\n` +
                 `Education Level: ${education}\n` +
                 `Interested Course: ${course}\n` +
                 `Programming Experience: ${experience}\n` +
                 `Reason for Joining: ${message}\n`;

    // Create downloadable file
    let blob = new Blob([report], { type: "text/plain" });
    let link = document.createElement("a");
    link.href = URL.createObjectURL(blob);
    link.download = `${name.replace(/\s+/g, '_')}_Registration_Report.txt`;
    link.click();
});
</script>

</body>
</html>
