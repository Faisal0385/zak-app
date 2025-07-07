@extends('admin.master-layout')
@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Contact Page</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <br />
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Contact List</h4>
                        <br />
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="
                        border-collapse: collapse;
                        border-spacing: 0;
                        width: 100%;
                        margin-top: 20px
                      ">
                            <thead>
                                <tr class="text-white" style="background-color: teal">
                                    <th>Sl</th>
                                    <th>Full Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($contactSubmissions as $key => $contactSubmission)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            {{ $contactSubmission->full_name }}
                                        </td>
                                        <td>
                                            {{ $contactSubmission->mobile_number }}
                                        </td>
                                        <td>
                                            {{ $contactSubmission->email }}
                                        </td>
                                        <td style="max-width: 300px; word-wrap: break-word; white-space: normal;">
                                            {{ $contactSubmission->message }}
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>

                            <tfooter>
                                <tr class="text-white" style="background-color: teal">
                                    <th>Sl</th>
                                    <th>Full Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                </tr>
                            </tfooter>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- container-fluid -->

    <script>
        function StatusChange(id) {
            fetch(`/country/${id}/status`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert(data.message);
                        // Optionally update button style or icon here
                        const btn = document.getElementById(`status_btn_${id}`);
                        if (data.status === 'active') {
                            btn.classList.remove('btn-danger');
                            btn.classList.add('btn-success');
                        } else {
                            btn.classList.remove('btn-success');
                            btn.classList.add('btn-danger');
                        }
                    } else {
                        alert("Status change failed.");
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    alert("Something went wrong.");
                });
        }
    </script>
@endsection
