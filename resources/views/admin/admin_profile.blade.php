@extends('admin.master-layout')

@section('title', 'Admin Dashboard')

@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Admin Profile</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Profile Details</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto"></div>
    </div>
    <!--end breadcrumb-->
    <hr>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="{{ asset('no_image.jpg') }}" alt="Admin" class="img-thumbnail rounded-circle mb-2"
                            width="110">
                        <div class="mt-3">
                            <h4>Faisal A Salam</h4>
                            <p class="text-secondary mb-1">faisaltez@gmail.com</p>
                            <p class="text-muted font-size-sm">Chitagong</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <form id="myForm">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control form-control-sm" name="name" id="name"
                                    value="Faisal" placeholder="Full Name" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="phone" id="phone" class="form-control form-control-sm"
                                    value="01312361494" placeholder="Phone" />
                            </div>
                        </div>

                        <div class="row
                                mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <textarea type="text" name="address" id="address" class="form-control form-control-sm" placeholder="Address">Chittagong</textarea>
                            </div>
                        </div>
                        <div class="row
                                    mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Photo</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input id="image" name="photo" type="file" class="form-control form-control-sm"
                                    accept="image/png, image/jpg, image/jpeg, image/svg+xml, image/webp"
                                    onchange="showPreview(event)" />
                            </div>

                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3"></div>
                            <div class="col-lg-9">
                                <img id="file-ip-1-preview" src="{{ asset('no_image.jpg') }}" alt="Admin"
                                    class="img-thumbnail rounded" width="110">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary">
                                <input type="submit" class="btn btn-sm btn-primary px-4" value="Save Changes" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }

        const form = document.getElementById('myForm');

        form.addEventListener('submit', async (e) => {
            e.preventDefault();

            let name = document.getElementById('name').value.trim();
            let phone = document.getElementById('phone').value.trim();
            let address = document.getElementById('address').value.trim();
            let image = document.getElementById('image').files[0];

            if (name.length == 0) {
                toastr.error("Name is required!!");
            } else if (address.length > 200) {
                toastr.error("Address should be within 200 characters!!");
            } else {

                try {
                    let res = await axios.post("/admin/profile/update", {
                        name: name,
                        phone: phone,
                        address: address,
                        image: image,
                    }, {
                        headers: {
                            'Content-Type': 'multipart/form-data',
                        }
                    });

                    if (res.status === 200 && res.data['status'] === 'success') {
                        toastr.success(res.data['message']);
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    } else if (res.status === 200 && res.data['status'] === 'errors') {

                        if (res.data.errors.name != undefined) {
                            let nameErrors = res.data.errors.name
                            nameErrors.forEach(element => {
                                toastr.error(element);
                            });
                        };

                        if (res.data.errors.image != undefined) {
                            let imageErrors = res.data.errors.image
                            imageErrors.forEach(element => {
                                toastr.error(element);
                            });
                        };

                    }
                } catch (error) {
                    toastr.warning("Something went wrong!!");
                }
            }

        });
    </script>
@endsection