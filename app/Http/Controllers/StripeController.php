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
        // Verify the payment belongs to the current user
        if ($payment->student_id != Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        // Set Stripe API key
        Stripe::setApiKey(config('services.stripe.secret'));
        
        try {
            // Create PaymentIntent
            $paymentIntent = PaymentIntent::create([
                'amount' => $payment->amount * 100, // Convert to cents/paisa
                'currency' => 'inr',
                'payment_method_types' => ['card'],
                'metadata' => [
                    'payment_id' => $payment->id,
                    'student_id' => $payment->student_id
                ]
            ]);

            // Return client secret for frontend
            return response()->json([
                'clientSecret' => $paymentIntent->client_secret,
                'payment' => $payment
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
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