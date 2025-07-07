@extends('admin.master-layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <a class="btn btn-sm btn-primary" href="{{ route('property.type.index') }}">Back</a>
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
                        <h4 class="card-title" style="color: black;"><b>Edit Property Type</b></h4>
                        <hr class="m-1">
                        <form id="myForm" method="POST" action="{{ route('property.type.update', $property->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-lg-12 mb-3">
                                    <label for="property_type" class="col-form-label">Property
                                        Status</label>
                                    <div class="form-group">
                                        <input type="text" name="property_type" class="form-control form-control-sm"
                                            placeholder="Property Type" value="{{ $property->name }}" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label for="image" class="mb-2">Property Type Image <sup
                                            class="text-danger">*</sup></label>
                                    <input type="file" class="mb-2 form-control form-control-sm" id="image"
                                        name="image" accept="image/png, image/jpg, image/jpeg, image/svg+xml, image/webp"
                                        onchange="showPreview(event)" />
                                    <div class="preview">
                                        <img src="{{ $property->image ? asset($property->image) : asset('no_image.jpg') }}"
                                            class="img img-thumbnail" id="file-ip-1-preview" width="150px"
                                            height="80px" />
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

    <script>
        function showPreview(event) {
            const preview = document.getElementById('file-ip-1-preview');
            preview.src = URL.createObjectURL(event.target.files[0]);
            preview.onload = () => URL.revokeObjectURL(preview.src); // Free memory
        }
    </script>
@endsection
