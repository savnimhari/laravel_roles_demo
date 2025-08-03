<x-app-layout>
    <div class="p-6 bg-gray-900 rounded-lg shadow-lg">
        <h2 class="text-2xl text-white font-bold mb-4">Complete Payment</h2>
        
        <div class="bg-white p-6 rounded-lg shadow-md">
            @isset($payment)
            <div class="mb-6">
                <h3 class="text-lg font-semibold mb-2">Payment Details</h3>
                <p><span class="font-medium">Type:</span> {{ $payment->payment_type }}</p>
                <p><span class="font-medium">Amount:</span> Rs. {{ number_format($payment->amount, 2) }}</p>
                <p><span class="font-medium">Student:</span> {{ $payment->student_name }}</p>
            </div>

            <form id="payment-form" action="{{ route('payments.process', $payment) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="cardholder-name" class="block text-gray-700 mb-2">Cardholder Name</label>
                    <input type="text" id="cardholder-name" name="cardholder_name" class="w-full p-2 border rounded" required>
                </div>
                
                <div id="card-element" class="mb-4 p-3 border rounded">
                    <!-- Stripe card element will be inserted here -->
                </div>
                <div id="card-errors" role="alert" class="text-red-500 mb-4"></div>
                
                <button id="submit-button" type="submit" 
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition">
                    Confirm Payment
                </button>
            </form>
            @else
                <div class="text-red-500">Payment information not found</div>
            @endisset
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('{{ env("STRIPE_KEY") }}');
        const elements = stripe.elements();
        const cardElement = elements.create('card');
        cardElement.mount('#card-element');
        
        const form = document.getElementById('payment-form');
        const submitButton = document.getElementById('submit-button');
        const cardErrors = document.getElementById('card-errors');
        
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            submitButton.disabled = true;
            submitButton.textContent = 'Processing...';
            cardErrors.textContent = '';
            
            const {error, paymentMethod} = await stripe.createPaymentMethod({
                type: 'card',
                card: cardElement,
                billing_details: {
                    name: document.getElementById('cardholder-name').value
                }
            });
            
            if (error) {
                cardErrors.textContent = error.message;
                submitButton.disabled = false;
                submitButton.textContent = 'Confirm Payment';
                return;
            }
            
            // Add payment method ID to form
            const hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'payment_method');
            hiddenInput.setAttribute('value', paymentMethod.id);
            form.appendChild(hiddenInput);
            
            // Submit form
            form.submit();
        });
    </script>
</x-app-layout>