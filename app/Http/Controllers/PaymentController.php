<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
 use Barryvdh\DomPDF\Facade\Pdf;

//inheritance (One class derives from another)
class PaymentController extends Controller
{
    // Payment form + history
    public function index()
    {   //Abstraction (Hiding complex implementation details)
        $payments = Payment::where('student_id', auth()->id())->get();
        return view('payments.index', compact('payments'));
    }
     // Show the create payment form
    public function create()
    {
        return view('payments.create');
    }
     // Show the payment detail form
    public function detail()
    {
        return view('payments.detail');
    }
    // Payment Gateway page
    public function gateway(Request $request)
    {
        $data = $request->only(['payment_type', 'student_name', 'student_id', 'student_class', 'amount']);
        return view('payments.gateway', compact('data'));
    }

    // Payment Success page
    public function success()
    {
        return view('payments.success');
    }

    // Optional: process payment (Stripe etc)
    public function process(Request $request)
    {
        // Add Stripe logic here
        // For now, redirect to success page
        return redirect()->route('payments.success');
    }
   

    public function downloadReceipt($id)
    {   //Abstraction (Hiding complex implementation details)
        $payment = Payment::findOrFail($id);

        $pdf = Pdf::loadView('payments.receipt', compact('payment'));
        return $pdf->download('receipt_'.$payment->id.'.pdf');
}

}

