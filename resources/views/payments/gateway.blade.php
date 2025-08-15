<x-app-layout>
<div class="container py-5">

    <div class="bg-primary text-white p-4 rounded-top mb-4">
        <h2 class="mb-0">Payment Gateway</h2>
        <p class="mb-0 text-white-50">Complete your payment</p>
    </div>

    <div class="card shadow-lg p-4">
        <h5 class="mb-3">Payment Details</h5>
        <p><strong>Student:</strong> {{ $data['student_name'] }} ({{ $data['student_id'] }})</p>
        <p><strong>Class:</strong> {{ $data['student_class'] }}</p>
        <p><strong>Amount:</strong> Rs. {{ $data['amount'] }}</p>
        <p><strong>Payment Type:</strong> {{ $data['payment_type'] }}</p>

        <div class="row g-4">

            <!-- Bank Transfer -->
            <div class="col-lg-6">
                <div class="border rounded p-3">
                    <h6><i class="bi bi-bank me-2"></i> Bank Transfer</h6>
                    <p>Account Name: <strong>SL Academy</strong></p>
                    <p>Account Number: <strong>123456789</strong></p>
                    <p>Bank: <strong>Bank of Ceylon</strong></p>
                    <button class="btn btn-outline-primary w-100">Mark as Paid</button>
                </div>
            </div>

            <!-- Card Payment -->
            <div class="col-lg-6">
                <div class="border rounded p-3">
                    <h6><i class="bi bi-credit-card me-2"></i> Card Payment</h6>
                    <form action="{{ route('payments.process') }}" method="POST">
                        @csrf
                        <input type="hidden" name="amount" value="{{ $data['amount'] }}">
                        <div class="mb-2">
                            <input type="text" class="form-control" placeholder="Card Number" required>
                        </div>
                        <div class="row mb-2">
                            <div class="col"><input type="text" class="form-control" placeholder="MM/YY" required></div>
                            <div class="col"><input type="password" class="form-control" placeholder="CVV" required></div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Pay Now</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
</x-app-layout>
