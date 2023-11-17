<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\CustomerRequest;
use App\Http\Resources\UserResource;
use App\Models\Customer;
use App\Traits\FormatResponse;
use Illuminate\Http\Request;

class ManageCustomerController extends Controller
{
    use FormatResponse;

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return $this->success(UserResource::collection(Customer::all()));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     * @param CustomerRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CustomerRequest $request): \Illuminate\Http\JsonResponse
    {
        $customer = Customer::create($request->validated());
        return $this->success(new UserResource($customer));
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
