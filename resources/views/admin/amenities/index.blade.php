@extends('admin.master-layout')
@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Features & Amenities Page</h4>
                    <a href="./social-add.html" class="btn btn-dark btn-sm waves-effect waves-light" style="float: right">
                        <i class="fas fa-plus-circle" style="font-size: 15px"></i> Add Features & Amenities
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
                        <h4 class="card-title">All Features & Amenities List</h4>
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
                                    <th width="15%">Properties Name</th>
                                    <th width="10%">Icon Class</th>
                                    <th width="60%">Features & Amenities</th>
                                    <th width="10%" style="text-align: center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>THE HIGHCLERE</td>
                                    <td>
                                        fa fa-facebook
                                    </td>
                                    <td>Waterfront wellness community</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" id="status_btn_12"
                                            class="btn btn-sm btn-danger {{ $item->status == 1 ? 'btn-primary' : 'btn-danger' }}"
                                            onclick="StatusChange(12)">
                                            <i class="fa fa-check-circle m-0" style="font-size: 12px"></i>
                                        </a>

                                        <a href="./social-edit.html" class="btn btn-sm btn-info" title="Edit Data">
                                            <i class="fas fa-edit m-0" style="font-size: 12px"></i>
                                        </a>

                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal12">
                                            <i class="fa fa-trash m-0" style="font-size: 12px"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal12" tabindex="-1"
                                            aria-labelledby="exampleModal12Label" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModal12Label">
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
                                                        <button type="button" class="btn btn-sm btn-danger"
                                                            data-bs-dismiss="modal" onclick="deleteData(12)">
                                                            Yes
                                                        </button>
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
                                <tr>
                                    <td>1</td>
                                    <td>THE HIGHCLERE</td>
                                    <td>
                                        fa fa-facebook
                                    </td>
                                    <td>Waterproofing With 10 Years Warranty</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" id="status_btn_12"
                                            class="btn btn-sm btn-danger {{ $item->status == 1 ? 'btn-primary' : 'btn-danger' }}"
                                            onclick="StatusChange(12)">
                                            <i class="fa fa-check-circle m-0" style="font-size: 12px"></i>
                                        </a>

                                        <a href="./social-edit.html" class="btn btn-sm btn-info" title="Edit Data">
                                            <i class="fas fa-edit m-0" style="font-size: 12px"></i>
                                        </a>

                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal12">
                                            <i class="fa fa-trash m-0" style="font-size: 12px"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal12" tabindex="-1"
                                            aria-labelledby="exampleModal12Label" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModal12Label">
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
                                                        <button type="button" class="btn btn-sm btn-danger"
                                                            data-bs-dismiss="modal" onclick="deleteData(12)">
                                                            Yes
                                                        </button>
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
                                <tr>
                                    <td>1</td>
                                    <td>THE HIGHCLERE</td>
                                    <td>
                                        fa fa-facebook
                                    </td>
                                    <td>Climate controlled outdoor shaded terrace</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" id="status_btn_12"
                                            class="btn btn-sm btn-danger {{ $item->status == 1 ? 'btn-primary' : 'btn-danger' }}"
                                            onclick="StatusChange(12)">
                                            <i class="fa fa-check-circle m-0" style="font-size: 12px"></i>
                                        </a>

                                        <a href="./social-edit.html" class="btn btn-sm btn-info" title="Edit Data">
                                            <i class="fas fa-edit m-0" style="font-size: 12px"></i>
                                        </a>

                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal12">
                                            <i class="fa fa-trash m-0" style="font-size: 12px"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal12" tabindex="-1"
                                            aria-labelledby="exampleModal12Label" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModal12Label">
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
                                                        <button type="button" class="btn btn-sm btn-danger"
                                                            data-bs-dismiss="modal" onclick="deleteData(12)">
                                                            Yes
                                                        </button>
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
                            </tbody>

                            <tfooter>
                                <tr class="text-white" style="background-color: teal">
                                    <th width="5%">Sl</th>
                                    <th width="15%">Properties Name</th>
                                    <th width="10%">Icon Class</th>
                                    <th width="60%">Features & Amenities</th>
                                    <th width="10%" style="text-align: center">Action</th>
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
@endsection
