<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\TransactionsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TransactionRequest;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param TransactionsDataTable $dataTable
     * @return mixed
     */
    public function index(TransactionsDataTable $dataTable)
    {
        return $dataTable->with('customer')->render('admin.transactions.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.transactions.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param TransactionRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(TransactionRequest $request)
    {
        Transaction::create($request->validated());
        return redirect()->route('admin.transactions.index');
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
