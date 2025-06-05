@extends('admin.master-layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <a class="btn btn-sm btn-primary" href="{{ route('property.amenities.index') }}">Back</a>
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
                        <h4 class="card-title" style="color: black;"><b>Edit Property Amenities</b></h4>
                        <hr class="m-1">
                        <form id="myForm" method="POST"
                            action="{{ route('property.amenities.update', $property->id) }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="name" class="col-form-label">Property
                                        Amenities</label>
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control form-control-sm"
                                            placeholder="Property Amenities" value="{{ $property->name }}" />
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="icon_class" class="col-form-label">Icon Class</label>
                                    <div class="form-group">
                                        <input type="text" name="icon_class" id="icon_class"
                                            class="form-control form-control-sm" placeholder="Icon Class (fa fa-facebook)"
                                            value="{{ $property->icon_class }}" />
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
