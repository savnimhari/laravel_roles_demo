<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class StripeController extends Controller
{
    // Show payment form
    public function showPaymentForm(Payment $payment)
    {
        // Verify the payment belongs to the current user
        if ($payment->student_id != Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('payments.process', [
            'payment' => $payment
        ]);
    }

    // Process payment
    public function processPayment(Request $request, Payment $payment)
    {
        try {
            $user = $request->user();

            // Create or retrieve Stripe customer
            $customer = $user->createOrGetStripeCustomer();

        
        // Charge the payment
        $user->charge(
            $payment->amount * 100, // Convert to cents
            $request->payment_method,
            [
                'description' => $payment->payment_type,
                'receipt_email' => $user->email,
                'metadata' => [
                    'payment_id' => $payment->id,
                    'student_id' => $payment->student_id
                ]
            ]
        );
        
        // Update payment status
        $payment->update([
            'status' => 'paid',
            'paid_at' => now()
        ]);
        
        return redirect()->route('payments.success')->with('success', 'Payment completed successfully!');
        
    } catch (\Exception $e) {
        return back()->with('error', $e->getMessage());
    }
}

    // Handle successful payment
    public function handleSuccess(Request $request)
    {
        // Verify and update payment status
        $payment = Payment::where('student_id', Auth::id())
                         ->findOrFail($request->payment_id);

        $payment->update([
            'status' => 'paid',
            'paid_at' => now()
        ]);

        return view('payments.success', compact('payment'));
    }

    // Handle canceled payment
    public function handleCancel()
    {
        return view('payments.cancel');
    }
}