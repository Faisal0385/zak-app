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
                        <h4 class="card-title" style="color: black;"><b>Edit Slider Page </b></h4>
                        <hr class="m-1">
                        <form id="myForm">

                            <input type="hidden" name="id" id="id" value="{{ $slider->id }}">

                            <div class="mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="form-group">
                                    <input type="text" name="title" id="title" class="form-control form-control-sm"
                                        value="{{ $slider->title }}" placeholder="Title">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="subtitle" class="col-sm-2 col-form-label">Slider Name</label>
                                <div class="form-group">
                                    <input type="text" name="subtitle" id="subtitle"
                                        class="form-control form-control-sm" value="{{ $slider->sub_title }}"
                                        placeholder="Subtitle">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Slider Image</label>
                                <div class="form-group">
                                    <input type="file" class="form-control form-control-sm" id="image" name="image"
                                        accept="image/png, image/jpg, image/jpeg, image/svg+xml, image/webp"
                                        onchange="showPreview(event)">
                                </div>

                                <div class="row mb-3 pt-3">
                                    <div class="col-sm-12">
                                        <img class="img-thumbnail" id="file-ip-1-preview"
                                            src="{{ $slider->image ? asset($slider->image) : asset('no_image.jpg') }}"
                                            width="150px" height="80px">
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->

                            <input type="submit" class="btn btn-sm btn-info waves-effect waves-light" value="Update">
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
    <!--end page wrapper -->


    <script>
        document.getElementById('myForm').addEventListener('submit', function(e) {
            e.preventDefault();

            let id = document.getElementById('id').value;
            let formData = new FormData(this);

            fetch(`/slider/${id}`, {
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'X-HTTP-Method-Override': 'PUT'
                    },
                    body: formData
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        alert(data.message);
                        // Optional: reload or redirect
                    } else {
                        alert('Update failed.');
                    }
                })
                .catch(error => {
                    alert('An error occurred.');
                });
        });

        function showPreview(event) {
            const preview = document.getElementById('file-ip-1-preview');
            preview.src = URL.createObjectURL(event.target.files[0]);
            preview.onload = () => URL.revokeObjectURL(preview.src);
        }
    </script>
@endsection
