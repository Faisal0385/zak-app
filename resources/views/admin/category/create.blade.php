@extends('admin.master-layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <a class="btn btn-sm btn-primary" href="{{ route('categories.index') }}">Back</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="color: black">
                            <b>Add Category </b>
                        </h4>
                        <hr class="m-1" />
                        <form id="myForm" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="name" class="col-form-label">Category Name</label>
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control form-control-sm"
                                        placeholder="Category Name" />
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="mb-2">Category Image</label>
                                <input type="file" class="mb-2 form-control form-control-sm" id="image"
                                    name="cat_img" accept="image/png, image/jpg, image/jpeg, image/svg+xml, image/webp"
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

            fetch("{{ route('categories.store') }}", {
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert(data.message);
                        document.getElementById('myForm').reset();
                        document.getElementById('file-ip-1-preview').src = '{{ asset('no_image.jpg') }}';
                        // Optionally reload category list or redirect
                    } else {
                        alert('Something went wrong.');
                    }
                })
                .catch(error => {
                    console.error(error);
                    alert('An error occurred.');
                });
        });

        function showPreview(event) {
            const preview = document.getElementById('file-ip-1-preview');
            preview.src = URL.createObjectURL(event.target.files[0]);
            preview.onload = () => URL.revokeObjectURL(preview.src); // Free memory
        }
    </script>
@endsection
