@extends('admin.master-layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <a class="btn btn-sm btn-primary" href="{{ route('properties.index') }}">Back</a>
            </div>
        </div>

        <!-- start page title -->
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
        <br />
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="color: black">
                            <b>Update New Property</b>
                        </h4>
                        <hr class="m-1" />
                        <form method="POST" action="{{ route('properties.update', $property->id) }}">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <label class="col-form-label">Project Name <sup class="text-danger">*</sup></label>
                                    <div class="form-group">
                                        <select name="project_id" class="form-select form-select-sm js-select-all"
                                            aria-label="Default select example">
                                            <option value="">Pls Select Project Name</option>
                                            @foreach ($projects as $project)
                                                <option value="{{ $project->id }}"
                                                    {{ $project->id == $property->project_id ? 'selected' : '' }}>
                                                    {{ $project->project_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="property_name" class="col-form-label">Property Name <sup
                                            class="text-danger">*</sup></label>
                                    <div class="form-group">
                                        <input type="text" name="property_name" id="property_name"
                                            value="{{ $property->property_name }}" class="form-control form-control-sm"
                                            placeholder="Property Name" />
                                    </div>
                                </div>
                            </div>
                            <br>
                            <input type="submit" class="btn btn-sm btn-warning waves-effect waves-light" value="Update" />
                        </form>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
    </div>
    <!--end page wrapper -->
    <script>
        function showPreview(event) {
            const preview = document.getElementById('file-ip-1-preview');
            preview.src = URL.createObjectURL(event.target.files[0]);
            preview.onload = () => URL.revokeObjectURL(preview.src); // Free memory
        }
    </script>
@endsection
