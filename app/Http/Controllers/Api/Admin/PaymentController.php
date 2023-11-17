<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\PaymentRequest;
use App\Http\Resources\Admin\PaymentResource;
use App\Models\Payment;
use App\Traits\FormatResponse;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    use FormatResponse;

    /**
     * Display a listing of the resource.
     * @return mixed
     */
    public function index()
    {
        return $this->success(PaymentResource::collection(Payment::all()));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PaymentRequest $request)
    {
        $payment = Payment::create($request->validated());
        $payment->transaction->update_status();
        return $this->success(new PaymentResource($payment));
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
