@extends('admin.master-layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <a class="btn btn-sm btn-primary" href="{{ route('project.index') }}">Back</a>
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
                        <h4 class="card-title" style="color: black;"><b>Edit Project Page </b></h4>
                        <hr class="m-1">
                        <form method="POST" action="{{ route('project.update', $project->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="project_name" class="col-form-label">Project Name <sup
                                                class="text-danger">*</sup></label>
                                        <div class="form-group">
                                            <input type="text" name="project_name" id="project_name"
                                                class="form-control form-control-sm" value="{{ $project->project_name }}"
                                                placeholder="Project Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="developer_name" class="col-form-label">Developer Name <sup
                                                class="text-danger">*</sup></label>
                                        <div class="form-group">
                                            <input type="text" name="developer_name" id="developer_name"
                                                class="form-control form-control-sm" value="{{ $project->developer_name }}"
                                                placeholder="Developer Name" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured"
                                            {{ $project->is_featured == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_featured">
                                            Featured
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="mb-3">
                                <label for="image" class="mb-2">Project Image <sup class="text-danger">*</sup></label>
                                <input type="file" class="mb-2 form-control form-control-sm" id="image"
                                    name="image" accept="image/png, image/jpg, image/jpeg, image/svg+xml, image/webp"
                                    onchange="showPreview(event)" />
                                <div class="preview">
                                    <img src="{{ $project->image ? asset($project->image) : asset('no_image.jpg') }}"
                                        class="img img-thumbnail" id="file-ip-1-preview" width="150px" height="80px" />
                                </div>
                            </div>

                            <input type="submit" class="btn btn-sm btn-warning waves-effect waves-light" value="Update" />

                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
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
