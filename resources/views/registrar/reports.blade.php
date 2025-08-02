<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold text-dark mb-0">
            <i class="bi bi-file-earmark-bar-graph me-2"></i>Reports Center
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="container">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="mb-0">Generate Institutional Reports</h3>
                        <div class="dropdown">
                            <button class="btn btn-warning dropdown-toggle" type="button" id="reportActions" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-gear me-2"></i>Report Actions
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="reportActions">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-plus-circle me-2"></i>New Custom Report</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-save me-2"></i>Save Current Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-printer me-2"></i>Batch Print Reports</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row g-4 mb-4">
                        <!-- Quick Reports -->
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title d-flex align-items-center">
                                        <i class="bi bi-lightning text-warning me-2"></i>Quick Reports
                                    </h5>
                                    <div class="list-group list-group-flush">
                                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            Enrollment Summary
                                            <span class="badge bg-primary rounded-pill">New</span>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">Grade Distribution</a>
                                        <a href="#" class="list-group-item list-group-item-action">Attendance Statistics</a>
                                        <a href="#" class="list-group-item list-group-item-action">Financial Overview</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Custom Report Builder -->
                        <div class="col-md-8">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title d-flex align-items-center mb-4">
                                        <i class="bi bi-sliders text-warning me-2"></i>Custom Report Builder
                                    </h5>
                                    
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Report Type</label>
                                            <select class="form-select">
                                                <option selected>Academic Performance</option>
                                                <option>Enrollment Statistics</option>
                                                <option>Financial Reports</option>
                                                <option>Attendance Records</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Academic Term</label>
                                            <select class="form-select">
                                                <option selected>Fall 2023</option>
                                                <option>Spring 2023</option>
                                                <option>Summer 2023</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Department</label>
                                            <select class="form-select">
                                                <option selected>All Departments</option>
                                                <option>Computer Science</option>
                                                <option>Engineering</option>
                                                <option>Business</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Format</label>
                                            <select class="form-select">
                                                <option selected>PDF</option>
                                                <option>Excel</option>
                                                <option>CSV</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="includeCharts">
                                                <label class="form-check-label" for="includeCharts">
                                                    Include Visual Charts
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 d-flex justify-content-end">
                                        <button class="btn btn-outline-secondary me-2">
                                            <i class="bi bi-arrow-counterclockwise me-2"></i>Reset
                                        </button>
                                        <button class="btn btn-warning">
                                            <i class="bi bi-file-earmark-bar-graph me-2"></i>Generate Report
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Reports -->
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title d-flex align-items-center">
                                <i class="bi bi-clock-history text-warning me-2"></i>Recently Generated Reports
                            </h5>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Report Name</th>
                                            <th>Generated On</th>
                                            <th>Type</th>
                                            <th>Size</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Fall_2023_Enrollment_Summary.pdf</td>
                                            <td>Oct 15, 2023</td>
                                            <td><span class="badge bg-primary">Enrollment</span></td>
                                            <td>2.4 MB</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary me-2">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-success me-2">
                                                    <i class="bi bi-download"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Q3_Financial_Report.xlsx</td>
                                            <td>Sep 30, 2023</td>
                                            <td><span class="badge bg-success">Financial</span></td>
                                            <td>1.8 MB</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary me-2">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-success me-2">
                                                    <i class="bi bi-download"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>