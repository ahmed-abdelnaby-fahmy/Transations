@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Create Admin</div>
            <div class="card-body">
                <form action="{{route('admin.admins.store')}}" method="post" class="row g-3 needs-validation"
                      novalidate>
                    @csrf
                    <div class="col-md-12">
                        <label for="validationName" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                               value="{{old('name')}}"
                               id="validationName"
                               required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustomEmail" class="form-label">Email</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                   id="validationCustomEmail"
                                   aria-describedby="inputGroupPrepend" value="{{old('email')}}" name="email" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="validationPassword" class="form-label">password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                               id="validationPassword"
                               aria-describedby="inputGroupPrepend" name="password" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
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
