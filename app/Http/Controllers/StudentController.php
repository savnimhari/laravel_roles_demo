<?php

namespace App\Http\Controllers;
 use App\Models\Payment;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function dashboard()
    {
        return view('student.dashboard');
    }
   

public function storePayment(Request $request)
{
    $request->validate([
        'payment_type' => 'required|string',
        'amount' => 'required|numeric|min:1',
    ]);

    Payment::create([
        'user_id' => auth()->id(),
        'payment_type' => $request->payment_type,
        'amount' => $request->amount,
        'status' => 'Pending',
    ]);

    return redirect()->back()->with('success', 'Payment submitted successfully!');
}

}
