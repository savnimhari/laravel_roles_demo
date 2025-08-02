<x-app-layout>
    <h2>Pay Fees</h2>
    <form method="POST" action="{{ route('payments.store') }}">
        @csrf
        <label>Payment Type</label>
        <select name="payment_type" required>
            <option value="admission">Admission Fee</option>
            <option value="exam">Exam Fee</option>
            <option value="term">Term Fee</option>
        </select><br><br>

        <!-- Class Info and Filters -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4">
            <div class="d-flex align-items-center mb-3 mb-md-0">
                <span class="me-2 fw-medium">Class:</span>
                <span class="badge bg-info text-dark fs-6">
                    <i class="bi bi-journal-text me-1"></i>Grade 10A
                </span>
            </div>
            
            <div class="d-flex flex-column flex-sm-row gap-2 w-100 w-md-auto">
                <select class="form-select">
                    <option>Semester 1</option>
                    <option>Semester 2</option>
                    <option>Full Year</option>
                </select>
                
                <button class="btn btn-danger d-flex align-items-center">
                    <i class="bi bi-download me-2"></i>Export Report
                </button>
            </div>
        </div>

        <!-- Summary Cards -->
        <div class="row g-4 mb-4">
            <!-- Average Grade Card -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-success border-2">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="bg-success bg-opacity-25 p-2 rounded me-3 text-success">
                                <i class="bi bi-check-circle-fill fs-4"></i>
                            </div>
                            <div>
                                <h3 class="card-title text-muted fs-6 mb-0">Average Grade</h3>
                                <p class="card-text fs-2 fw-bold text-success mb-0">A-</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Z-Score Card -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-primary border-2">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary bg-opacity-25 p-2 rounded me-3 text-primary">
                                <i class="bi bi-graph-up-arrow fs-4"></i>
                            </div>
                            <div>
                                <h3 class="card-title text-muted fs-6 mb-0">Z-Score</h3>
                                <p class="card-text fs-2 fw-bold text-primary mb-0">1.24</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Rank Card -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-warning border-2">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="bg-warning bg-opacity-25 p-2 rounded me-3 text-warning">
                                <i class="bi bi-trophy-fill fs-4"></i>
                            </div>
                            <div>
                                <h3 class="card-title text-muted fs-6 mb-0">Rank</h3>
                                <p class="card-text fs-2 fw-bold text-warning mb-0">8/120</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Attendance Card -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-danger border-2">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="bg-danger bg-opacity-25 p-2 rounded me-3 text-danger">
                                <i class="bi bi-calendar-check-fill fs-4"></i>
                            </div>
                            <div>
                                <h3 class="card-title text-muted fs-6 mb-0">Attendance</h3>
                                <p class="card-text fs-2 fw-bold text-danger mb-0">96%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grades Table -->
        <div class="card mb-4">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Subject</th>
                            <th scope="col">Marks</th>
                            <th scope="col">Grade</th>
                            <th scope="col">Z-Score</th>
                            <th scope="col">Comments</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-bold">Mathematics</td>
                            <td>87/100</td>
                            <td>
                                <span class="badge bg-success">A</span>
                            </td>
                            <td class="font-monospace">1.45</td>
                            <td class="small">Excellent performance</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Science</td>
                            <td>78/100</td>
                            <td>
                                <span class="badge bg-primary">B+</span>
                            </td>
                            <td class="font-monospace">0.92</td>
                            <td class="small">Good, needs more practice</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">English</td>
                            <td>82/100</td>
                            <td>
                                <span class="badge bg-info text-dark">A-</span>
                            </td>
                            <td class="font-monospace">1.15</td>
                            <td class="small">Very good writing skills</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">History</td>
                            <td>65/100</td>
                            <td>
                                <span class="badge bg-warning text-dark">C+</span>
                            </td>
                            <td class="font-monospace">-0.35</td>
                            <td class="small">Needs improvement</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Performance Chart -->
        <div class="card">
            <div class="card-body">
                <h3 class="card-title d-flex align-items-center">
                    <i class="bi bi-bar-chart-fill text-primary me-2"></i>
                    Performance Trend
                </h3>
                <div class="bg-light p-4 rounded border d-flex align-items-center justify-content-center" style="height: 300px;">
                    <div class="text-center text-muted">
                        <i class="bi bi-bar-chart fs-1"></i>
                        <p>Performance chart will be displayed here</p>
                        <small>(Integration with Chart.js or similar library)</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>