<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Payment;
use Auth;


class PaymentController extends Controller
{
    //namespace App\Http\Controllers;
    public function index()
    {
        $payments = Payment::where('student_id', Auth::id())->get();
        return view('payments.index', compact('payments'));
    }

  public function store(Request $request)
{
    $request->validate([
        'payment_type' => 'required|string',
        'amount' => 'required|numeric|min:0',
    ]);

    $payment = new Payment();
    $payment->student_id = auth()->id();
    $payment->user_id = auth()->id(); // 👈 Fix for your DB error
    $payment->payment_type = $request->payment_type;
    $payment->amount = $request->amount;
    $payment->status = 'Paid';
    $payment->save();

    return redirect()->back()->with('success', 'Your payment was successful!');
}

    public function create()
    {
        return view('payments.create');
}
public function detail()
    {
        return view('payments.detail');
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
}
