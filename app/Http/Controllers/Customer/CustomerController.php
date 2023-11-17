<?php

namespace App\Http\Controllers\Customer;

use App\DataTables\Customer\TransactionsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a Dashboard.
     */
    public function dashboard()
    {
        return view('customer.dashboard');
    }

    /**
     * Display a transactions.
     * @param TransactionsDataTable $dataTable
     * @return mixed
     */
    public function transactions(TransactionsDataTable $dataTable)
    {
        return $dataTable->render('customer.transactions.index');
    }
}
