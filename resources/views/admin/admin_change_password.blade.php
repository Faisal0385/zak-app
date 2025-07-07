@extends('admin.master-layout')

@section('title', 'Admin Dashboard')

@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Change Password</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Change Password Page</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto"></div>
    </div>
    <!--end breadcrumb-->
    <hr>

    <div class="row">
        <div class="col-8">
            <div class="card border-top border-0 border-4 border-danger">
                <div class="card-body p-5">

                    <form method="post" action="{{ route('admin.password.update') }}">
                        @csrf

                        <div class="row">
                            <div class="col-12">
                                <label for="oldPassword" class="form-label">Old Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-transparent">
                                        <i class='bx bxs-lock-open'></i>
                                    </span>
                                    <input type="password" name="old_password" class="form-control border-start-0"
                                        id="oldPassword" placeholder="Old Password" />
                                </div>
                                <div class="pt-1">
                                    @error('old_password')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 pt-2">
                                <label for="new_password" class="form-label">New Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-transparent">
                                        <i class='bx bxs-lock-open'></i>
                                    </span>
                                    <input type="password" name="new_password" class="form-control border-start-0"
                                        id="new_password" placeholder="New Password" />
                                </div>
                                <div class="pt-1">
                                    @error('new_password')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 pt-2">
                                <label for="new_password_confirmation" class="form-label">Confirm Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-transparent">
                                        <i class='bx bxs-lock'></i>
                                    </span>
                                    <input type="password" name="new_password_confirmation"
                                        class="form-control border-start-0" id="new_password_confirmation"
                                        placeholder="Confirm Password" />
                                </div>
                            </div>

                            <div class="col-12 pt-4">
                                <button type="submit" class="btn btn-sm btn-danger px-5">Update Password</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        const form = document.getElementById('myForm');

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            let old_password = document.getElementById('old_password').value.trim();
            let new_password = document.getElementById('new_password').value.trim();
            let new_password_confirmation = document.getElementById('new_password_confirmation').value.trim();

            if (old_password.length == 0) {
                toastr.error("Old password is required!!");
            } else if (new_password.length == 0) {
                toastr.error("New password is required!!");
            } else if (new_password.length < 7) {
                toastr.error("New password should be 8 characters!!");
            } else if (new_password_confirmation.length == 0) {
                toastr.error("Confirm password is required!!");
            } else if (new_password_confirmation !== new_password) {
                toastr.error("Password did not matched!!");
            } else {

                let res = await axios.post("/admin/password/update", {
                    old_password: old_password,
                    new_password: new_password,
                    new_password_confirmation: new_password_confirmation,
                });

                if (res.status === 200 && res.data['status'] === 'success') {
                    toastr.success(res.data['message']);
                    document.getElementById('old_password').value = "";
                    document.getElementById('new_password').value = "";
                    document.getElementById('new_password_confirmation').value = "";
                } else if (res.status === 200 && res.data['status'] === 'warning') {
                    toastr.warning(res.data['message']);
                }
            }

        });
    </script>
@endsection
