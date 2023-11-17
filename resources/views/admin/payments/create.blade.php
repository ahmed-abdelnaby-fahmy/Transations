@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Create Payment</div>
            <div class="card-body">
                <form action="{{route('admin.payments.store')}}" method="post" class="row g-3 needs-validation"
                      novalidate>
                    @csrf
                    <div class="col-md-12">
                        <label for="validationAmount" class="form-label">Amount</label>
                        <div class="input-group has-validation">
                            <input type="number" class="form-control @error('amount') is-invalid @enderror"
                                   id="validationAmount"
                                   aria-describedby="inputGroupPrepend" value="{{old('amount')}}" name="amount"
                                   required>
                            @error('amount')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationDetails" class="form-label">details</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control @error('details') is-invalid @enderror"
                                   id="validationDetails"
                                   aria-describedby="inputGroupPrepend" value="{{old('details')}}" name="details"
                                   required>
                            @error('details')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationPaid" class="form-label">paid on</label>
                        <div class="input-group has-validation">
                            <input type="date" class="form-select @error('paid_on') is-invalid @enderror"
                                   name="paid_on"
                                   id="validationPaid" required>
                            @error('paid_on')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustomer" class="form-label">Transaction</label>
                        <div class="input-group has-validation">
                            <select class="form-select @error('transaction_id') is-invalid @enderror"
                                    name="transaction_id"
                                    id="validationCustomer" required>
                                <option selected disabled value="">Choose...</option>
                                @foreach(\App\Models\Transaction::all() as $transaction)
                                    <option value="{{$transaction->id}}">{{$transaction->id}}</option>
                                @endforeach
                            </select>
                            @error('transaction_id')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')

@endpush
