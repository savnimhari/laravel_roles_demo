<x-app-layout>
<div class="container py-5">

    <!-- Header -->
    <div class="bg-primary text-white p-4 rounded-top mb-4">
        <h2 class="mb-0">My Payments</h2>
        <p class="mb-0 text-white-50">Manage and track all your payments</p>
    </div>

    <div class="row">

        <!-- Payment Form -->
        <div class="col-lg-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <h3 class="card-title mb-0">Make a New Payment</h3>
                </div>
                <div class="card-body">
                    <form id="payment-form" action="{{ route('payments.gateway') }}" method="GET">
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
                            <input type="text" id="student_name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="student_id" class="form-label">Student ID</label>
                            <input type="text" id="student_id" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="student_class" class="form-label">Class</label>
                            <input type="text" id="student_class" class="form-control" required>
                        </div>
                        <div class="mb-4">
                            <label for="amount" class="form-label">Amount (Rs.)</label>
                            <div class="input-group">
                                <span class="input-group-text">Rs.</span>
                                <input type="number" id="amount" class="form-control" min="50" required>
                            </div>
                        </div>

                        <!-- Hidden inputs -->
                        <input type="hidden" name="payment_type" id="payment_type_hidden">
                        <input type="hidden" name="student_name" id="student_name_hidden">
                        <input type="hidden" name="student_id" id="student_id_hidden">
                        <input type="hidden" name="student_class" id="student_class_hidden">
                        <input type="hidden" name="amount" id="amount_hidden">

                        <button type="submit" class="btn btn-primary w-100 py-2">
                            <i class="bi bi-credit-card me-2"></i> Pay Now
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Payment History -->
        <div class="col-lg-6">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <h3 class="card-title mb-0">Payment History</h3>
                </div>
                <div class="card-body">
                    @if($payments->count() > 0)
                        <div class="list-group list-group-flush">
                            @foreach($payments as $payment)
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-1">{{ $payment->payment_type }}</h6>
                                        <small class="text-muted">{{ $payment->created_at->format('M d, Y') }}</small>
                                    </div>
                                    <div class="text-end">
                                        <div class="fw-bold">Rs. {{ number_format($payment->amount/100, 2) }}</div>
                                        <span class="badge bg-{{ $payment->status === 'completed' ? 'success' : 'warning' }} mt-1">
                                            {{ ucfirst($payment->status) }}
                                        </span>
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

<!-- JS: copy values to hidden inputs before submitting -->
<script>
document.getElementById('payment-form').addEventListener('submit', function(e){
    e.preventDefault();
    document.getElementById('payment_type_hidden').value = document.getElementById('payment_type').value;
    document.getElementById('student_name_hidden').value = document.getElementById('student_name').value;
    document.getElementById('student_id_hidden').value = document.getElementById('student_id').value;
    document.getElementById('student_class_hidden').value = document.getElementById('student_class').value;
    document.getElementById('amount_hidden').value = document.getElementById('amount').value;

    this.submit();
});
</script>
</x-app-layout>
