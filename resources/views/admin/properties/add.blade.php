@extends('admin.master-layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <a class="btn btn-sm btn-primary" href="{{ route('properties.index') }}">Back</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="color: black">
                            <b>Property Name: {{ $properties->property_name }}</b>
                        </h4>
                        <hr class="m-1" />

                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-0 m-1 active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Basic Information</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-0 m-1" id="pills-property-type-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-property-type" type="button" role="tab"
                                    aria-controls="pills-property-type" aria-selected="false">Property Type</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-0 m-1" id="pills-property-feature-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-property-feature" type="button" role="tab"
                                    aria-controls="pills-property-feature" aria-selected="false">Property Amenities</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-0 m-1" id="pills-property-status-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-property-status" type="button" role="tab"
                                    aria-controls="pills-property-status" aria-selected="false">Property Status</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-0 m-1" id="pills-property-label-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-property-label" type="button" role="tab"
                                    aria-controls="pills-property-label" aria-selected="false">Property Label</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-0 m-1" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Location</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-0 m-1" id="pills-property-video-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-property-video" type="button" role="tab"
                                    aria-controls="pills-property-video" aria-selected="false">Video URL</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-0 m-1" id="pills-property-featured-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-property-featured" type="button" role="tab"
                                    aria-controls="pills-property-featured" aria-selected="false">Featured Images</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-0 m-1" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Gallery Images</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-0 m-1" id="pills-property-file-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-property-file" type="button" role="tab"
                                    aria-controls="pills-property-file" aria-selected="false">File Attachment</button>
                            </li>
                        </ul>


                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <form id="myForm" enctype="multipart/form-data">
                                    <div class="row">

                                        <div class="col-3">
                                            <label for="icon_class" class="col-form-label">Property ID</label>
                                            <div class="form-group">
                                                <input type="text" name="icon_class" id="icon_class"
                                                    class="form-control form-control-sm" placeholder="Property ID" />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label for="icon_class" class="col-form-label">Price</label>
                                            <div class="form-group">
                                                <input type="text" name="icon_class" id="icon_class"
                                                    class="form-control form-control-sm" placeholder="Price" />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label for="amenities" class="col-form-label">Before Price Label </label>
                                            <div class="form-group">
                                                <input type="text" name="amenities" id="amenities"
                                                    class="form-control form-control-sm"
                                                    placeholder="Example: Start From, AED" />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label for="icon_class" class="col-form-label">After Price Label</label>
                                            <div class="form-group">
                                                <input type="text" name="icon_class" id="icon_class"
                                                    class="form-control form-control-sm"
                                                    placeholder="Example: Per Month" />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label class="col-form-label">Price Unit </label>
                                            <div class="form-group">
                                                <select id="property_id" class="form-select form-select-sm js-select-all"
                                                    aria-label="Default select example">
                                                    <option value="" selected>Pls Select Price Unit</option>
                                                    <option value="12">Thousand</option>
                                                    <option value="12">Million</option>
                                                    <option value="12">Billion</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label class="col-form-label">Price on Call? </label>
                                            <div class="form-group">
                                                <input class="form-check-input" type="checkbox" id="is_featured"
                                                    name="is_featured">
                                                <label class="form-check-label" for="is_featured">
                                                    Yes
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-3">
                                            <label for="icon_class" class="col-form-label">Size (sq. ft.) </label>
                                            <div class="form-group">
                                                <input type="text" name="icon_class" id="icon_class"
                                                    class="form-control form-control-sm" placeholder="Size (sq. ft.)" />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label for="amenities" class="col-form-label">Land (sq. ft.) </label>
                                            <div class="form-group">
                                                <input type="text" name="amenities" id="amenities"
                                                    class="form-control form-control-sm" placeholder="Land (sq. ft.)" />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label for="icon_class" class="col-form-label">Room</label>
                                            <div class="form-group">
                                                <input type="text" name="icon_class" id="icon_class"
                                                    class="form-control form-control-sm" placeholder="Room" />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label for="amenities" class="col-form-label">Bedroom</label>
                                            <div class="form-group">
                                                <input type="text" name="amenities" id="amenities"
                                                    class="form-control form-control-sm" placeholder="Bedroom" />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label for="amenities" class="col-form-label">Bathroom</label>
                                            <div class="form-group">
                                                <input type="text" name="amenities" id="amenities"
                                                    class="form-control form-control-sm" placeholder="Bathroom" />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label for="icon_class" class="col-form-label">Garages </label>
                                            <div class="form-group">
                                                <input type="text" name="icon_class" id="icon_class"
                                                    class="form-control form-control-sm" placeholder="Garages" />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label for="amenities" class="col-form-label">Garages Size(sq. ft.) </label>
                                            <div class="form-group">
                                                <input type="text" name="amenities" id="amenities"
                                                    class="form-control form-control-sm"
                                                    placeholder="Garages Size(sq. ft.)" />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label for="icon_class" class="col-form-label">Year Built</label>
                                            <div class="form-group">
                                                <input type="text" name="icon_class" id="icon_class"
                                                    class="form-control form-control-sm" placeholder="Year Built" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <label class="col-form-label">City </label>
                                            <div class="form-group">
                                                <select id="property_id" class="form-select form-select-sm js-select-all"
                                                    aria-label="Default select example">
                                                    <option value="" selected>Pls Select City</option>
                                                    <option value="12">THE HIGHCLERE</option>
                                                    <option value="12">THE HIGHCLERE</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label class="col-form-label">Province/Sate </label>
                                            <div class="form-group">
                                                <select id="property_id" class="form-select form-select-sm js-select-all"
                                                    aria-label="Default select example">
                                                    <option value="" selected>Pls Select Province/Sate</option>
                                                    <option value="12">THE HIGHCLERE</option>
                                                    <option value="12">THE HIGHCLERE</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label class="col-form-label">Country</label>
                                            <div class="form-group">
                                                <select id="property_id" class="form-select form-select-sm js-select-all"
                                                    aria-label="Default select example">
                                                    <option value="" selected>Pls Select Country
                                                    </option>
                                                    <option value="12">THE HIGHCLERE</option>
                                                    <option value="12">THE HIGHCLERE</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label for="icon_class" class="col-form-label">Description</label>
                                            <div class="form-group">
                                                <textarea type="text" name="icon_class" id="icon_class" class="form-control form-control-sm"
                                                    placeholder="Description"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <input type="submit" class="btn btn-sm btn-info waves-effect waves-light"
                                        value="Add" />
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-property-type" role="tabpanel"
                                aria-labelledby="pills-property-type-tab">
                                <div class="row m-1">
                                    @foreach ($propertyTypes as $propertyType)
                                        <div class="col-3 p-2">
                                            <div class="form-group">
                                                <input class="form-check-input" type="checkbox" id="is_featured"
                                                    name="is_featured">
                                                <label class="form-check-label" for="is_featured">
                                                    {{ $propertyType->name }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-property-status" role="tabpanel"
                                aria-labelledby="pills-property-status-tab">
                                <div class="row m-1">
                                    <div class="col-3 p-2">
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" id="is_featured"
                                                name="is_featured">
                                            <label class="form-check-label" for="is_featured">
                                                For Rent
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3 p-2">
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" id="is_featured"
                                                name="is_featured">
                                            <label class="form-check-label" for="is_featured">
                                                For Sale
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-property-feature" role="tabpanel"
                                aria-labelledby="pills-property-feature-tab">
                                <div class="row m-1">
                                    @foreach ($propertyAmenities as $propertyAmenity)
                                        <div class="col-3 p-2">
                                            <div class="form-group">
                                                <input class="form-check-input" type="checkbox" id="is_featured"
                                                    name="is_featured">
                                                <label class="form-check-label" for="is_featured">
                                                    {{ $propertyAmenity->name }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-property-label" role="tabpanel"
                                aria-labelledby="pills-property-label-tab">
                                <div class="row m-1">
                                    <div class="col-3 p-2">
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" id="is_featured"
                                                name="is_featured">
                                            <label class="form-check-label" for="is_featured">
                                                Hot Offer
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3 p-2">
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" id="is_featured"
                                                name="is_featured">
                                            <label class="form-check-label" for="is_featured">
                                                Sale
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3 p-2">
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" id="is_featured"
                                                name="is_featured">
                                            <label class="form-check-label" for="is_featured">
                                                Sold
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <form>
                                    <div class="row">
                                        <div class="col">
                                            <label for="icon_class" class="col-form-label">Address</label>
                                            <div class="form-group">
                                                <textarea type="text" name="icon_class" id="icon_class" class="form-control form-control-sm"
                                                    placeholder="Address"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="icon_class" class="col-form-label">Google Map</label>
                                            <div class="form-group">
                                                <textarea type="text" name="icon_class" id="icon_class" rows="5" class="form-control form-control-sm"
                                                    placeholder="Google Map"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <input type="submit" class="btn btn-sm btn-info waves-effect waves-light"
                                        value="Add" />
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-property-video" role="tabpanel"
                                aria-labelledby="pills-property-video-tab">
                                <form>
                                    <div class="row">
                                        <div class="col">
                                            <label for="icon_class" class="col-form-label">Video URL</label>
                                            <div class="form-group">
                                                <textarea type="text" name="icon_class" id="icon_class" rows="5" class="form-control form-control-sm"
                                                    placeholder="Video URL"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <input type="submit" class="btn btn-sm btn-info waves-effect waves-light"
                                        value="Add" />
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-property-featured" role="tabpanel"
                                aria-labelledby="pills-property-featured-tab">
                                <div class="shadow-sm p-2">
                                    <form enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="image" class="mb-2">Featured Image</label>
                                            <input type="file" class="mb-2 form-control form-control-sm"
                                                id="image" name="cat_img"
                                                accept="image/png, image/jpg, image/jpeg, image/svg+xml, image/webp"
                                                onchange="showPreview(event)" />
                                            <div class="preview">
                                                <img src="{{ asset('no_image.jpg') }}" class="img img-thumbnail"
                                                    id="file-ip-1-preview" width="150px" height="80px" />
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-sm btn-info waves-effect waves-light"
                                            value="Add" />
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <div class="shadow-sm p-2">
                                    <form enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="image" class="mb-2">Gallery Images</label>
                                            <input type="file" class="mb-2 form-control form-control-sm"
                                                id="image" name="cat_img"
                                                accept="image/png, image/jpg, image/jpeg, image/svg+xml, image/webp"
                                                onchange="showPreview(event)" />
                                            <div class="preview">
                                                <img src="{{ asset('no_image.jpg') }}" class="img img-thumbnail"
                                                    id="file-ip-1-preview" width="150px" height="80px" />
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-sm btn-info waves-effect waves-light"
                                            value="Add" />
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-property-file" role="tabpanel"
                                aria-labelledby="pills-property-file-tab">
                                <div class="shadow-sm p-2">
                                    <form enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="icon_class" class="col-form-label">File Attachment</label>
                                            <input type="file" class="mb-2 form-control form-control-sm"
                                                id="image" name="cat_img"
                                                accept="image/png, image/jpg, image/jpeg, image/svg+xml, image/webp" />
                                        </div>
                                        <input type="submit" class="btn btn-sm btn-info waves-effect waves-light"
                                            value="Add" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
    </div>

    <script type="text/javascript">
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>
@endsection
