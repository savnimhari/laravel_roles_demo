<x-app-layout>
    <div class="container py-5 d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card shadow-lg p-4 text-center" style="max-width: 500px; border-radius: 15px;">
            
            <!-- Success Icon -->
            <div class="mb-4">
                <i class="bi bi-check-circle-fill text-success" style="font-size:4rem;"></i>
            </div>

            <!-- Title -->
            <h3 class="mb-3 fw-bold">Payment Successful!</h3>
            <p class="text-muted mb-4">Thank you! Your payment has been processed successfully.</p>

            <!-- Action Buttons -->
            <div class="d-grid gap-2">
                <a href="{{ route('payments.index') }}" class="btn btn-primary">
                    <i class="bi bi-arrow-left-circle"></i> Back to My Payments
                </a>
            </div>
        </div>
    </div>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
</x-app-layout>

