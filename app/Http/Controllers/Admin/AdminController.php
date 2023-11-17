<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\AdminsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a Dashboard.
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(AdminsDataTable $dataTable)
    {
        return $dataTable->render('admin.admins.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param AdminRequest $request
     */
    public function store(AdminRequest $request)
    {
        Admin::create($request->validated());
        return redirect()->route('admin.admins.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->back();
    }
}
