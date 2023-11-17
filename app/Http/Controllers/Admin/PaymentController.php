<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\PaymentDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PaymentRequest;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param PaymentDataTable $dataTable
     * @return mixed
     */
    public function index(PaymentDataTable $dataTable)
    {
        return $dataTable->render('admin.payments.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.payments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PaymentRequest $request)
    {
        $payment = Payment::create($request->validated());
        $payment->transaction->update_status();
        return redirect()->route('admin.payments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
