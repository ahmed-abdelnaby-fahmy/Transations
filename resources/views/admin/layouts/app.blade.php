@extends('layouts.app')
@section('nav')
    <li class="nav-item">
        <a class="nav-link fw-bold" aria-current="page" href="{{route('admin.dashboard')}}">Dashboard</a>
    </li>
    <li class="nav-item">
        <a class="nav-link fw-bold" aria-current="page" href="{{route('admin.admins.index')}}">Admins</a>
    </li>
    <li class="nav-item">
        <a class="nav-link fw-bold" aria-current="page" href="{{route('admin.customers.index')}}">Customers</a>
    </li>
    <li class="nav-item">
        <a class="nav-link fw-bold" aria-current="page" href="{{route('admin.transactions.index')}}">Transactions</a>
    </li>
    <li class="nav-item">
        <a class="nav-link fw-bold" aria-current="page" href="{{route('admin.payments.index')}}">Payments</a>
    </li>
    <li class="nav-item">
        <a class="nav-link fw-bold" aria-current="page" href="{{route('admin.reports.create')}}">Generate Reports</a>
    </li>
@endsection
