@extends('admin.master-layout')
@section('content')
    <!--start page wrapper -->
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Category Page</h4>
                    <a href="{{ route('categories.create') }}" class="btn btn-dark btn-sm waves-effect waves-light"
                        style="float: right">
                        <i class="fas fa-plus-circle"></i> Add Category
                    </a>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <br />
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Category List</h4>
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
                                    <th width="10%">Image</th>
                                    <th width="30%">Category Name</th>
                                    <th width="5%" style="text-align: center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($categories as $key => $category)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            <img class="img-thumbnail"
                                                src="{{ $category->image ? asset($category->image) : asset('no_image.jpg') }}"
                                                alt="image" width="60px" height="60px" />
                                        </td>
                                        <td>{{ $category->name }}</td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)" id="status_btn_{{ $category->id }}"
                                                class="btn btn-sm btn-{{ $category->status == 'inactive' ? 'danger' : 'success' }}"
                                                onclick="StatusChange({{ $category->id }})">
                                                <i class="fa fa-check-circle m-0" style="font-size: 12px"></i>
                                            </a>


                                            <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-info"
                                                title="Edit Data">
                                                <i class="fas fa-edit m-0" style="font-size: 12px"></i>
                                            </a>

                                            <!-- Delete Button Trigger -->
                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal"
                                                onclick="setDeleteAction({{ $category->id }})">
                                                <i class="fa fa-trash m-0" style="font-size: 12px"></i>
                                            </button>

                                            <!-- Common Delete Modal -->
                                            <div class="modal fade" id="deleteModal" tabindex="-1"
                                                aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">
                                                                <i class="fa-solid fa-circle-xmark text-danger"></i> Delete
                                                                Item
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Are You Sure You Want To Delete It?</h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            {{-- <form id="deleteForm" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-sm btn-danger">Yes</button>
                                                            </form> --}}

                                                            <form action="{{ route('categories.destroy', $category->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <!-- This is required to spoof the DELETE method -->
                                                                <button type="submit"
                                                                    class="btn btn-danger btn-sm">Yes</button>
                                                            </form>
                                                            <button type="button" class="btn btn-sm btn-info"
                                                                data-bs-dismiss="modal">Close</button>
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
                                    <th width="10%">Image</th>
                                    <th width="30%">Category Name</th>
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
            fetch(`/categories/status/${id}`, {
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
