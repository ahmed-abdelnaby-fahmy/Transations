@extends('customer.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6" style="margin-top: 20px">
                <a href="{{route('customer.transactions.index')}}">
                    <div class="card border-success">
                        <div class="card-body bg-success text-white">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-user-tie fa-5x"></i>
                                </div>
                                <div class="col-9 text-right">
                                    <h1>50</h1>
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
        </div>
    </div>
@endsection
