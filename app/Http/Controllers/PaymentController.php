<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Auth;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class PaymentController extends Controller
{
    public function index()
    {
        $payment = Payment::where('student_id', Auth::id())->get();
        return view('payments.index', compact('payment'));
    }

    public function create()
    {
        return view('payments.create');
    }


    public function processCancel()
    {
        session()->forget('current_payment');
        return redirect()->route('payments.create')->with('error', 'Payment was canceled.');
    }

    public function detail(Payment $payment)
    {
        return view('payments.detail', compact('payment'));
    }

    public function edit(Payment $payment)
    {
        return view('payments.edit', compact('payment'));
    }

    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'payment_type' => 'required|string',
            'amount' => 'required|numeric|min:0',
        ]);

        $payment->payment_type = $request->payment_type;
        $payment->amount = $request->amount;
        $payment->save();

        return redirect()->route('payments.index')->with('success', 'Payment updated successfully!');
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payments.index')->with('success', 'Payment deleted successfully!');
    }
    public function store(Request $request)
{
    $validated = $request->validate([
        'payment_type' => 'required|string',
        'student_name' => 'required|string',
        'student_id' => 'required|string',
        'student_class' => 'required|string',
        'amount' => 'required|numeric|min:50', // Minimum ₹50
    ]);

    // Create payment record
    $payment = Payment::create([
        'student_id' => auth()->id(),
        'payment_type' => $validated['payment_type'],
        'student_name' => $validated['student_name'],
        'student_id_no' => $validated['student_id'],
        'student_class' => $validated['student_class'],
        'amount' => $validated['amount'],
        'status' => 'pending',
    ]);

    // Redirect to payment processing
    return redirect()->route('payments.process.form', $payment);
}

public function showPaymentForm(Payment $payment)
{
    // Verify payment belongs to current user
    if ($payment->student_id != auth()->id()) {
        abort(403);
    }

    Stripe::setApiKey(config('services.stripe.secret'));
    
    $paymentIntent = PaymentIntent::create([
        'amount' => $payment->amount * 100,
        'currency' => 'inr',
        'metadata' => [
            'payment_id' => $payment->id,
            'student_id' => $payment->student_id
        ]
    ]);

    return view('payments.process', [
        'payment' => $payment,
        'clientSecret' => $paymentIntent->client_secret
    ]);
}

    public function processPayment(Request $request)
    {
        $request->validate([
            'payment_id' => 'required|exists:payments,id',
        ]);

        $payment = Payment::findOrFail($request->payment_id);
        
        // Store payment in session for later retrieval
        session()->put('current_payment', $payment);
        
        Stripe::setApiKey(config('services.stripe.secret'));
        
        try {
            $paymentIntent = PaymentIntent::create([
                'amount' => $payment->amount * 100,
                'currency' => 'lkr',
                'metadata' => [
                    'payment_id' => $payment->id,
                    'student_id' => $payment->student_id
                ]
            ]);

            return view('payments.process', [
                'clientSecret' => $paymentIntent->client_secret,
                'payment' => $payment
            ]);
            
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Payment processing error: ' . $e->getMessage());
        }
    }
    // Update your processSuccess method in PaymentController
    public function processSuccess(Request $request)
    {
        $payment = session()->get('current_payment');
        
        if (!$payment) {
            return redirect()->route('payments.index')->with('error', 'Payment session expired');
        }

        // Update payment status
        $payment->status = 'Paid';
        $payment->paid_at = now();
        $payment->save();

        session()->forget('current_payment');

        return view('payments.success', compact('payment'));
    }
}    