@extends('admin.master-layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <a class="btn btn-sm btn-primary" href="{{ route('city.index') }}">Back</a>
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
                        <form id="myForm" method="POST" action="{{ route('city.update', $city->id) }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="col-form-label">Provice/State <sup class="text-danger">*</sup></label>
                                    <div class="form-group">
                                        <select name="state_id" class="form-select form-select-sm js-select-all"
                                            aria-label="Default select example">
                                            <option value="" selected>Pls Select Provice/State</option>
                                            @foreach ($states as $state)
                                                <option value="{{ $state->id }}"
                                                    {{ $state->id == $city->state_id ? 'selected ' : '' }}>
                                                    {{ $state->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="name" class="col-form-label">City Name</label>
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control form-control-sm"
                                            placeholder="City Name" value="{{ $city->name }}" />
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
