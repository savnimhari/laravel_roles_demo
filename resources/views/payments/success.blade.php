<!-- resources/views/payments/success.blade.php -->
<x-app-layout>
    <div class="p-6 bg-gray-900 rounded-lg shadow-lg">
        <div class="bg-white p-6 rounded-lg shadow-md text-center">
            <svg class="mx-auto h-12 w-12 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            
            <h3 class="mt-2 text-lg font-medium text-gray-900">Payment Successful!</h3>
            <p class="mt-1 text-sm text-gray-500">
                Your payment of Rs. {{ number_format($payment->amount, 2) }} for {{ $payment->payment_type }} has been processed.
            </p>
            
            <div class="mt-6">
                <a href="{{ route('payments.process') }}" 
                   class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Back to Payments
                </a>
            </div>
        </div>
    </div>
</x-app-layout>