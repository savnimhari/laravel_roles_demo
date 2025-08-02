<x-app-layout>
    <div class="p-6 bg-gray-900 rounded-lg shadow-lg">
        <h2 class="text-2xl text-white font-bold mb-4">My Payments</h2>
        @if(session('success'))
    <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
        {{ session('success') }}
    </div>
@endif


        <div class="overflow-x-auto mb-6">
            <table class="min-w-full bg-blue-100 rounded-lg overflow-hidden">

                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Student ID</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Type</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Amount</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Status</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Date</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @forelse ($payments as $payment)
                        <tr class="border-b">
                            <td class="px-6 py-4">{{ $payment->student_id }}</td>
                            <td class="px-6 py-4">{{ $payment->payment_type }}</td>
                            <td class="px-6 py-4">Rs. {{ number_format($payment->amount, 2) }}</td>
                            <td class="px-6 py-4">
                                @if ($payment->status == 'Paid')
                                    <span class="text-green-600 font-semibold">Paid</span>
                                @else
                                    <span class="text-red-600 font-semibold">Pending</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">{{ $payment->created_at->format('Y-m-d') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-gray-500">No payments found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Payment Form -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-bold text-gray-800 mb-4">Make a New Payment</h3>
            <form action="{{ route('payments.store') }}" method="POST">

                @csrf
                <div class="mb-4">
                    <label for="payment_type" class="block text-gray-700 font-semibold">Payment Type</label>
                    <select name="payment_type" id="payment_type" class="w-full border-gray-300 rounded-md">
                        <option value="Admission Fee">Admission Fee</option>
                        <option value="Exam Fee">Exam Fee</option>
                        <option value="Monthly Fee">Monthly Fee</option>
                    </select>
                </div>
                <!-- Student Name -->
<div class="mb-4">
    <label for="student_name" class="block text-gray-700 font-semibold">Student Name</label>
    <input type="text" name="student_name" id="student_name" class="w-full border-gray-300 rounded-md" required>
</div>

<!-- Student ID -->
<div class="mb-4">
    <label for="student_id" class="block text-gray-700 font-semibold">Student ID</label>
    <input type="text" name="student_id" id="student_id" class="w-full border-gray-300 rounded-md" required>
</div>

<!-- Student Class -->
<div class="mb-4">
    <label for="student_class" class="block text-gray-700 font-semibold">Class</label>
    <input type="text" name="student_class" id="student_class" class="w-full border-gray-300 rounded-md" required>
</div>


                <div class="mb-4">
                    <label for="amount" class="block text-gray-700 font-semibold">Amount (Rs.)</label>
                    <input type="number" name="amount" id="amount" class="w-full border-gray-300 rounded-md" required>
                </div>

                <button type="submit" class="bg-blue-600 text-black px-4 py-2 rounded hover:bg-blue-700 border border-red-500">
                    Pay Now
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
