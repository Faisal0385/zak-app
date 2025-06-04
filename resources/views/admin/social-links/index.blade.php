@extends('admin.master-layout')
@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Social Links Page</h4>
                    <a href="{{ route('social.link.create') }}" class="btn btn-dark btn-sm waves-effect waves-light"
                        style="float: right">
                        <i class="fas fa-plus-circle" style="font-size: 15px"></i> Add Social Links
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @if (session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
        <!-- end page title -->
        <br />
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Social Links List</h4>
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
                                    <th width="15%">Icon Class</th>
                                    <th width="5%">Platform Name</th>
                                    <th width="65%">Url</th>
                                    <th width="10%" style="text-align: center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($links as $key => $link)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            {{ $link->icon_class }}
                                        </td>
                                        <td>{{ $link->platform }}</td>
                                        <td>{{ $link->url }}</td>
                                        <td class="text-center">

                                            <a href="{{ route('social.link.edit', $link->id) }}" class="btn btn-sm btn-info"
                                                title="Edit Data">
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
                                                            <form action="{{ route('social.link.destroy', $link->id) }}"
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
                                    <th width="15%">Icon Class</th>
                                    <th width="5%">Platform Name</th>
                                    <th width="65%">Url</th>
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
    <!--end page wrapper -->
@endsection
