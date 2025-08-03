<x-app-layout>
    <div class="container py-5">
        <!-- Header Section -->
        <div class="bg-primary text-white p-4 rounded-top mb-4">
            <h2 class="mb-0">My Payments</h2>
            <p class="mb-0 text-white-50">Manage and track all your payments</p>
        </div>

        <!-- Success Message -->
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle me-2" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
            </svg>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        <div class="row">
            <!-- Payment Form Column -->
            <div class="col-lg-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-white">
                        <h3 class="card-title mb-0">Make a New Payment</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('payments.process') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="payment_type" class="form-label">Payment Type</label>
                                <select name="payment_type" id="payment_type" class="form-select" required>
                                    <option value="Admission Fee">Admission Fee</option>
                                    <option value="Exam Fee">Exam Fee</option>
                                    <option value="Monthly Fee">Monthly Fee</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label for="student_name" class="form-label">Student Name</label>
                                <input type="text" name="student_name" id="student_name" class="form-control" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="student_id" class="form-label">Student ID</label>
                                <input type="text" name="student_id" id="student_id" class="form-control" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="student_class" class="form-label">Class</label>
                                <input type="text" name="student_class" id="student_class" class="form-control" required>
                            </div>
                            
                            <div class="mb-4">
                                <label for="amount" class="form-label">Amount (Rs.)</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rs.</span>
                                    <input type="number" name="amount" id="amount" class="form-control" required>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary w-100 py-2">
                                <i class="bi bi-credit-card me-2"></i> Pay Now
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Payment History Column -->
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-white">
                        <h3 class="card-title mb-0">Payment History</h3>
                    </div>
                    <div class="card-body">
                        @if(isset($payment) && $payment->count() > 0)
                            <div class="list-group list-group-flush">
                                @foreach($payment as $payment)
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-1">{{ $payment->payment_type }}</h6>
                                        <small class="text-muted">{{ $payment->created_at->format('M d, Y') }}</small>
                                    </div>
                                    <div class="text-end">
                                        <div class="fw-bold">Rs. {{ number_format($payment->amount, 2) }}</div>
                                        @if($payment->status !== 'Paid')
                                            <a href="{{ route('payments.process', $payment) }}" 
                                               class="btn btn-sm btn-success mt-1">
                                                Pay Now
                                            </a>
                                        @else
                                            <span class="badge bg-success mt-1">Paid</span>
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center py-4">
                                <i class="bi bi-wallet2 text-muted" style="font-size: 2rem;"></i>
                                <p class="text-muted mt-2">No payment history found</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>