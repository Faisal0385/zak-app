@extends('admin.master-layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <a class="btn btn-sm btn-primary" href="{{ route('slider.index') }}">Back</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="color: black">
                            <b>Add Slider </b>
                        </h4>
                        <hr class="m-1" />
                        <form id="myForm" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="title" class="col-form-label">Slider Title</label>
                                <div class="form-group">
                                    <input type="text" name="title" id="title" class="form-control form-control-sm"
                                        placeholder="Slider Title" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="subtitle" class="col-form-label">Slider Subtitle</label>
                                <div class="form-group">
                                    <input type="text" name="subtitle" id="subtitle"
                                        class="form-control form-control-sm" placeholder="Slider Subtitle" />
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="mb-2">Slider Image</label>
                                <input type="file" class="mb-2 form-control form-control-sm" id="image"
                                    name="image" accept="image/png, image/jpg, image/jpeg, image/svg+xml, image/webp"
                                    onchange="showPreview(event)" />
                                <div class="preview">
                                    <img src="{{ asset('no_image.jpg') }}" class="img img-thumbnail" id="file-ip-1-preview"
                                        width="150px" height="80px" />
                                </div>
                            </div>

                            <input type="submit" class="btn btn-sm btn-info waves-effect waves-light" value="Add" />
                        </form>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
    </div>

    <script>
        document.getElementById('myForm').addEventListener('submit', function(e) {
            e.preventDefault();

            let formData = new FormData(this);

            fetch("{{ route('slider.store') }}", {
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                })
                .then(response => {
                    if (!response.ok) return response.json().then(err => Promise.reject(err));
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        alert(data.message);
                        document.getElementById('myForm').reset();
                        document.getElementById('file-ip-1-preview').src = '{{ asset('no_image.jpg') }}';
                    }
                })
                .catch(error => {
                    if (error.errors) {
                        let messages = Object.values(error.errors).flat().join('\n');
                        alert('Validation Errors:\n' + messages);
                    } else {
                        alert('An unexpected error occurred.');
                    }
                });
        });

        function showPreview(event) {
            const preview = document.getElementById('file-ip-1-preview');
            preview.src = URL.createObjectURL(event.target.files[0]);
            preview.onload = () => URL.revokeObjectURL(preview.src); // Free memory
        }
    </script>
@endsection
