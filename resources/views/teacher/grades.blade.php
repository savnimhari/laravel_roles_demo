<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold text-dark mb-0">
            <i class="bi bi-award me-2"></i>Grade Management
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="container">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h3 class="mb-0">Submit Grades</h3>
                            <p class="text-muted mb-0">For: <strong>Calculus I - Fall 2023</strong></p>
                        </div>
                        <div>
                            <select class="form-select me-2" style="width: 200px; display: inline-block;">
                                <option>Select Course</option>
                                <option selected>Calculus I</option>
                                <option>Physics II</option>
                            </select>
                            <button class="btn btn-success">
                                <i class="bi bi-save me-2"></i>Save Grades
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Student ID</th>
                                    <th>Student Name</th>
                                    <th>Assignment 1 (20%)</th>
                                    <th>Midterm (30%)</th>
                                    <th>Assignment 2 (20%)</th>
                                    <th>Final Exam (30%)</th>
                                    <th>Total Grade</th>
                                    <th>Letter Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>S1001</td>
                                    <td>John Doe</td>
                                    <td><input type="number" class="form-control form-control-sm" value="18" min="0" max="20"></td>
                                    <td><input type="number" class="form-control form-control-sm" value="25" min="0" max="30"></td>
                                    <td><input type="number" class="form-control form-control-sm" value="17" min="0" max="20"></td>
                                    <td><input type="number" class="form-control form-control-sm" value="27" min="0" max="30"></td>
                                    <td class="fw-bold">87</td>
                                    <td>
                                        <select class="form-select form-select-sm">
                                            <option>A</option>
                                            <option selected>A-</option>
                                            <option>B+</option>
                                            <option>B</option>
                                            <option>B-</option>
                                            <option>C+</option>
                                            <option>C</option>
                                            <option>D</option>
                                            <option>F</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>S1002</td>
                                    <td>Jane Smith</td>
                                    <td><input type="number" class="form-control form-control-sm" value="20" min="0" max="20"></td>
                                    <td><input type="number" class="form-control form-control-sm" value="28" min="0" max="30"></td>
                                    <td><input type="number" class="form-control form-control-sm" value="19" min="0" max="20"></td>
                                    <td><input type="number" class="form-control form-control-sm" value="29" min="0" max="30"></td>
                                    <td class="fw-bold">96</td>
                                    <td>
                                        <select class="form-select form-select-sm">
                                            <option selected>A</option>
                                            <option>A-</option>
                                            <option>B+</option>
                                            <option>B</option>
                                            <option>B-</option>
                                            <option>C+</option>
                                            <option>C</option>
                                            <option>D</option>
                                            <option>F</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4 d-flex justify-content-between">
                        <div>
                            <button class="btn btn-outline-secondary me-2">
                                <i class="bi bi-printer me-2"></i>Print Grade Sheet
                            </button>
                            <button class="btn btn-outline-primary">
                                <i class="bi bi-download me-2"></i>Export to Excel
                            </button>
                        </div>
                        <button class="btn btn-success">
                            <i class="bi bi-save me-2"></i>Submit All Grades
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .form-control-sm {
            max-width: 80px;
        }
        .form-select-sm {
            max-width: 100px;
        }
        table td, table th {
            vertical-align: middle;
        }
    </style>
</x-app-layout>