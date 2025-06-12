@extends('admin.master-layout')
@section('content')
    <!--start page wrapper -->
    <div class="container-fluid">
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
                            <b>Create New Property</b>
                        </h4>
                        <hr class="m-1" />
                        <form method="POST" action="{{ route('properties.create') }}">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <label class="col-form-label">Project Name <sup class="text-danger">*</sup></label>
                                    <div class="form-group">
                                        <select name="project_id" class="form-select form-select-sm js-select-all"
                                            aria-label="Default select example">
                                            <option value="" selected>Pls Select Project Name</option>
                                            @foreach ($projects as $project)
                                                <option value="{{ $project->id }}">{{ $project->project_name }}
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
                                            class="form-control form-control-sm" placeholder="Property Name" />
                                    </div>
                                </div>
                            </div>
                            <br>
                            <input type="submit" class="btn btn-sm btn-info waves-effect waves-light" value="Add" />
                        </form>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Property List</h4>
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
                                    <th width="5%">Sl</th>
                                    <th width="30%">Project Name</th>
                                    <th width="30%">Property Name</th>
                                    <th width="5%" style="text-align: center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($properties as $key => $property)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>

                                        <td>{{ $property->project->project_name }}</td>
                                        <td>{{ $property->property_name }}</td>
                                        <td class="text-center">

                                            <a href="{{ route('properties.add', $property->id) }}"
                                                class="btn btn-sm btn-warning" title="Edit Data">
                                                <i class="fas fa-list m-0" style="font-size: 12px"></i>
                                            </a>

                                            <a href="javascript:void(0)" id="status_btn_{{ $property->id }}"
                                                class="btn btn-sm btn-{{ $property->status == 'inactive' ? 'danger' : 'success' }}"
                                                onclick="StatusChange({{ $property->id }})">
                                                <i class="fa fa-check-circle m-0" style="font-size: 12px"></i>
                                            </a>


                                            <a href="{{ route('project.edit', $property) }}" class="btn btn-sm btn-info"
                                                title="Edit Data">
                                                <i class="fas fa-edit m-0" style="font-size: 12px"></i>
                                            </a>

                                            <!-- Delete Button Trigger -->
                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal{{ $property->id }}">
                                                <i class="fa fa-trash m-0" style="font-size: 12px"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal{{ $property->id }}" tabindex="-1"
                                                aria-labelledby="exampleModal{{ $property->id }}Label" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="exampleModal{{ $property->id }}Label">
                                                                <i class="fa-solid fa-circle-xmark text-danger"></i>
                                                                Delete Item
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Are You Sure You Want To Delete It?</h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form action="{{ route('project.destroy', $property->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                <!-- This is required to spoof the DELETE method -->
                                                                <button type="submit"
                                                                    class="btn btn-danger btn-sm">Yes</button>
                                                            </form>
                                                            <button type="button" class="btn btn-sm btn-info"
                                                                data-bs-dismiss="modal">
                                                                Close
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                            <tfooter>
                                <tr class="text-white" style="background-color: teal">
                                    <th width="5%">Sl</th>
                                    <th width="30%">Project Name</th>
                                    <th width="30%">Property Name</th>
                                    <th width="5%" style="width: 10%; text-align: center">
                                        Action
                                    </th>
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
            fetch(`/properties/status/${id}`, {
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
