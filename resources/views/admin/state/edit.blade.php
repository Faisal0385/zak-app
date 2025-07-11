@extends('admin.master-layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <a class="btn btn-sm btn-primary" href="{{ route('state.index') }}">Back</a>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Validation Error:</strong>
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="color: black;"><b>Edit City Name</b></h4>
                        <hr class="m-1">
                        <form id="myForm" method="POST" action="{{ route('state.update', $state->id) }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="col-form-label">Country <sup class="text-danger">*</sup></label>
                                    <div class="form-group">
                                        <select name="country_id" class="form-select form-select-sm js-select-all"
                                            aria-label="Default select example">
                                            <option value="" selected>Pls Select Country</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}"
                                                    {{ $country->id == $state->country_id ? 'selected ' : '' }}>
                                                    {{ $country->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="name" class="col-form-label">State Name</label>
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control form-control-sm"
                                            placeholder="State Name" value="{{ $state->name }}" />
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-sm btn-warning waves-effect waves-light" value="Update" />
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
@endsection
