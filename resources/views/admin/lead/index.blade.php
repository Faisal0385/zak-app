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
                                    <th>Property Type</th>
                                    <th>Budget</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($leads as $key => $lead)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            {{ $lead->name }}
                                        </td>
                                        <td>
                                            {{ $lead->phone_number }}
                                        </td>
                                        <td>
                                            {{ $lead->email }}
                                        </td>
                                        <td>
                                            {{ $lead->propertyType->name }}
                                        </td>
                                        <td>
                                            {{ $lead->budget }}
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" id="status_btn_{{ $lead->id }}"
                                                class="btn btn-sm btn-{{ $lead->status == 'inactive' ? 'danger' : 'success' }}"
                                                onclick="StatusChange({{ $lead->id }})">
                                                <i class="fa fa-check-circle m-0" style="font-size: 12px"></i>
                                            </a>
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
                                    <th>Property Type</th>
                                    <th>Budget</th>
                                    <th>Action</th>
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
            fetch(`/lead/form/${id}/status`, {
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
