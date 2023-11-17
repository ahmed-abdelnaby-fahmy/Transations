<?php

namespace App\Http\Controllers\Api\Admin;

use App\DataTables\Admin\TransactionsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\TransactionRequest;
use App\Http\Resources\Admin\TransactionResource;
use App\Models\Transaction;
use App\Traits\FormatResponse;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    use FormatResponse;

    /**
     * Display a listing of the resource.
     * @param TransactionsDataTable $dataTable
     * @return mixed
     */
    public function index()
    {
        return $this->success(TransactionResource::collection(Transaction::all()));

    }

    /**
     * Store a newly created resource in storage.
     * @param TransactionRequest $request
     */
    public function store(TransactionRequest $request)
    {
        $transaction = $request->user()->transaction()->create($request->validated());
        return $this->success(new TransactionResource($transaction));
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
