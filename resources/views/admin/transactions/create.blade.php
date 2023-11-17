@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Create transaction</div>
            <div class="card-body">
                <form action="{{route('admin.transactions.store')}}" method="post" class="row g-3 needs-validation"
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
                        <label for="validationCustomer" class="form-label">Payer</label>
                        <div class="input-group has-validation">
                            <select class="form-select @error('customer_id') is-invalid @enderror"
                                    name="customer_id"
                                    id="validationCustomer" required>
                                <option selected disabled value="">Choose...</option>
                                @foreach(\App\Models\Customer::all() as $customer)
                                    <option value="{{$customer->id}}">{{$customer->email}}</option>
                                @endforeach
                            </select>
                            @error('customer_id')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationDueOn" class="form-label">Due on</label>
                        <div class="input-group has-validation">
                            <input type="date" class="form-select @error('due_on') is-invalid @enderror"
                                   name="due_on"
                                   id="validationDueOn" required>
                            @error('due_on')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationVAT" class="form-label">VAT</label>
                        <div class="input-group has-validation">
                            <input type="number" class="form-control @error('vat') is-invalid @enderror"
                                   name="vat"
                                   id="validationVAT" required>
                            @error('vat')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="input-group has-validation">
                            <input type="checkbox" class="form-check @error('is_vat') is-invalid @enderror"
                                   name="is_vat" value="1"
                                   id="validationIsVAT" required>
                            <label class="ps-1" for="validationIsVAT" >Is VAT inclusive</label>

                            @error('is_vat')
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
