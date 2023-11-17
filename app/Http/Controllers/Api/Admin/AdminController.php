<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\AdminRequest;
use App\Http\Resources\UserResource;
use App\Models\Admin;
use App\Traits\FormatResponse;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    use FormatResponse;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->success(UserResource::collection(Admin::all()));
    }

    /**
     * Store a newly created resource in storage.
     * @param AdminRequest $request
     */
    public function store(AdminRequest $request)
    {
        $admin = Admin::create($request->validated());
        return $this->success(new UserResource($admin));
    }

    /**
     * Display the specified resource.
     * @param Admin $admin
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Admin $admin)
    {
        return $this->success(new UserResource($admin));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
