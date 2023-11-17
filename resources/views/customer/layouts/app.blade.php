@extends('layouts.app')
@section('nav')
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{route('customer.dashboard')}}">DASHBOARD</a>
    </li>

    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{route('customer.transactions.index')}}">Transactions</a>
    </li>
@endsection
