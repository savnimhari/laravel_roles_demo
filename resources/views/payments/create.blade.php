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

        <label>Amount</label>
        <input type="number" name="amount" step="0.01" required><br><br>

        <button type="submit">Pay Now</button>
    </form>
</x-app-layout>
