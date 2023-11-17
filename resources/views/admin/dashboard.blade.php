@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6" style="margin-top: 20px">
                <a href="{{route('admin.admins.index')}}">
                    <div class="card border-primary">
                        <div class="card-body bg-primary text-white">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-random fa-5x"></i>
                                </div>
                                <div class="col-9 text-right">
                                    <h1>{{\App\Models\Admin::count()}}</h1>
                                    <h4>Admins</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-light text-primary">
                            <span class="float-left">More details</span>
                            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6" style="margin-top: 20px">
                <a href="{{route('admin.customers.index')}}">
                    <div class="card border-secondary">
                        <div class="card-body bg-secondary text-white">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-user-graduate fa-5x"></i>
                                </div>
                                <div class="col-9 text-right">
                                    <h1>{{\App\Models\Customer::count()}}</h1>
                                    <h4>Customers</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-light text-secondary">
                            <span class="float-left">More details</span>
                            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6" style="margin-top: 20px">
                <a href="{{route('admin.transactions.index')}}">
                    <div class="card border-success">
                        <div class="card-body bg-success text-white">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-user-tie fa-5x"></i>
                                </div>
                                <div class="col-9 text-right">
                                    <h1>{{\App\Models\Transaction::count()}}</h1>
                                    <h4>Transactions</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-light text-success">
                            <span class="float-left">More details</span>
                            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6" style="margin-top: 20px">
                <a href="{{route('admin.payments.index')}}">
                    <div class="card border-success">
                        <div class="card-body bg-success text-white">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-user-tie fa-5x"></i>
                                </div>
                                <div class="col-9 text-right">
                                    <h1>{{\App\Models\Payment::count()}}</h1>
                                    <h4>Payments</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-light text-success">
                            <span class="float-left">More details</span>
                            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
