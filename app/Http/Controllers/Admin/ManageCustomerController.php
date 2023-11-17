<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\CustomersDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class ManageCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param CustomersDataTable $dataTable
     * @return mixed
     */
    public function index(CustomersDataTable $dataTable)
    {
        return $dataTable->render('admin.customers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param CustomerRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CustomerRequest $request)
    {
        Customer::create($request->validated());
        return redirect()->route('admin.customers.index');
    }

    /**
     * Display the specified resource.
     * @param Customer $customer
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param Customer $customer
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param Customer $customer
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param Customer $customer
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->back();
    }
}
