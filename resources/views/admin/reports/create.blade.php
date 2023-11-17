@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Create report</div>
            <div class="card-body">
                <form action="{{route('admin.reports.store')}}" method="post" class="row g-3 needs-validation"
                      novalidate>
                    @csrf

                    <div class="col-md-12">
                        <label for="validationfrom" class="form-label">start date</label>
                        <div class="input-group has-validation">
                            <input type="date" class="form-select @error('start_date') is-invalid @enderror"
                                   name="start_date" value="{{old('start_date')}}"
                                   id="validationfrom" required>
                            @error('start_date')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="validationto" class="form-label">end date</label>
                        <div class="input-group has-validation">
                            <input type="date" class="form-select @error('end_date') is-invalid @enderror"
                                   name="end_date" value="{{old('end_date')}}"
                                   id="validationto" required>
                            @error('end_date')
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
