@extends('admin.master-layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <a class="btn btn-sm btn-primary" href="./category.html">Back</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="color: black;"><b>Edit Features & Amenities Page </b>
                        </h4>
                        <hr class="m-1" />
                        <form id="myForm" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col">
                                    <label class="col-form-label">Property Name <sup class="text-danger">*</sup></label>
                                    <div class="form-group">
                                        <select id="property_id" class="form-select form-select-sm js-select-all"
                                            aria-label="Default select example">
                                            <option value="" selected>Pls Select Property Name
                                            </option>
                                            <option value="12">THE HIGHCLERE</option>
                                            <option value="12">THE HIGHCLERE</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="icon_class" class="col-form-label">Icon Class <sup
                                            class="text-danger">*</sup></label>
                                    <div class="form-group">
                                        <input type="text" name="icon_class" id="icon_class"
                                            class="form-control form-control-sm" placeholder="Icon Class" />
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="amenities" class="col-form-label">Features & Amenities <sup
                                            class="text-danger">*</sup></label>
                                    <div class="form-group">
                                        <input type="text" name="amenities" id="amenities"
                                            class="form-control form-control-sm" placeholder="Features & Amenities" />
                                    </div>
                                </div>
                            </div>
                            <br>
                            <input type="submit" class="btn btn-sm btn-info waves-effect waves-light" value="Add" />
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
@endsection
