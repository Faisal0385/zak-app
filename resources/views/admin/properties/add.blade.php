@extends('admin.master-layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <a class="btn btn-sm btn-primary" href="{{ route('properties.index') }}">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
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
            <div class="col-12">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
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
                                <div class="shadow-sm p-2">
                                    <form id="myForm" enctype="multipart/form-data">
                                        <div class="row">

                                            <div class="col-3">
                                                <label for="property_id" class="col-form-label">Property ID</label>
                                                <div class="form-group">
                                                    <input type="text" name="property_id" id="property_id"
                                                        class="form-control form-control-sm" placeholder="Property ID" />
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="price" class="col-form-label">Price</label>
                                                <div class="form-group">
                                                    <input type="text" name="price" id="price"
                                                        class="form-control form-control-sm" placeholder="Price" />
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="before_price_label" class="col-form-label">Before Price Label
                                                </label>
                                                <div class="form-group">
                                                    <input type="text" name="before_price_label"
                                                        id="before_price_label" class="form-control form-control-sm"
                                                        placeholder="Example: Start From, AED" />
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="after_price_label" class="col-form-label">After Price
                                                    Label</label>
                                                <div class="form-group">
                                                    <input type="text" name="after_price_label" id="after_price_label"
                                                        class="form-control form-control-sm"
                                                        placeholder="Example: Per Month" />
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label class="col-form-label">Price Unit </label>
                                                <div class="form-group">
                                                    <select name="price_unit"
                                                        class="form-select form-select-sm js-select-all"
                                                        aria-label="Default select example">
                                                        <option value="" selected>Pls Select Price Unit</option>
                                                        <option value="Thousand">Thousand</option>
                                                        <option value="Million">Million</option>
                                                        <option value="Billion">Billion</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label class="col-form-label">Price on Call? </label>
                                                <div class="form-group">
                                                    <input class="form-check-input" type="checkbox" id="price_on_call"
                                                        name="price_on_call">
                                                    <label class="form-check-label" for="price_on_call">
                                                        Yes
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row">
                                            <div class="col-3">
                                                <label for="size" class="col-form-label">Size (sq. ft.) </label>
                                                <div class="form-group">
                                                    <input type="text" name="size" id="size"
                                                        class="form-control form-control-sm"
                                                        placeholder="Size (sq. ft.)" />
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="land" class="col-form-label">Land (sq. ft.) </label>
                                                <div class="form-group">
                                                    <input type="text" name="land" id="land"
                                                        class="form-control form-control-sm"
                                                        placeholder="Land (sq. ft.)" />
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="room" class="col-form-label">Room</label>
                                                <div class="form-group">
                                                    <input type="text" name="room" id="room"
                                                        class="form-control form-control-sm" placeholder="Room" />
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="bedroom" class="col-form-label">Bedroom</label>
                                                <div class="form-group">
                                                    <input type="text" name="bedroom" id="bedroom"
                                                        class="form-control form-control-sm" placeholder="Bedroom" />
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="bathroom" class="col-form-label">Bathroom</label>
                                                <div class="form-group">
                                                    <input type="text" name="bathroom" id="bathroom"
                                                        class="form-control form-control-sm" placeholder="Bathroom" />
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="garages" class="col-form-label">Garages </label>
                                                <div class="form-group">
                                                    <input type="text" name="garages" id="garages"
                                                        class="form-control form-control-sm" placeholder="Garages" />
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="garages_size" class="col-form-label">Garages Size(sq. ft.)
                                                </label>
                                                <div class="form-group">
                                                    <input type="text" name="garages_size" id="garages_size"
                                                        class="form-control form-control-sm"
                                                        placeholder="Garages Size(sq. ft.)" />
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="year_built" class="col-form-label">Year Built</label>
                                                <div class="form-group">
                                                    <input type="text" name="year_built" id="year_built"
                                                        class="form-control form-control-sm" placeholder="Year Built" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <label class="col-form-label">City </label>
                                                <div class="form-group">
                                                    <select name="city_id"
                                                        class="form-select form-select-sm js-select-all"
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
                                                    <select name="province_id"
                                                        class="form-select form-select-sm js-select-all"
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
                                                    <select name="country_id"
                                                        class="form-select form-select-sm js-select-all"
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
                                                <label for="description" class="col-form-label">Description</label>
                                                <div class="form-group">
                                                    <textarea type="text" name="description" id="description" class="form-control form-control-sm"
                                                        placeholder="Description"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <input type="submit" class="btn btn-sm btn-info waves-effect waves-light"
                                            value="Add" />
                                    </form>
                                </div>
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
                                <div class="shadow-sm p-2">
                                    {{-- <form method="POST" action="{{ route('properties.status', $properties->id) }}">
                                        @csrf --}}
                                    <div class="row m-1">
                                        <div class="col-2 p-0">
                                            <div class="form-group">
                                                <input class="form-check-input" type="checkbox" id="for_rent"
                                                    name="for_rent" {{ $properties->for_rent ? 'checked' : '' }}
                                                    onclick="updateForRent('{{ $properties->id }}')">
                                                <label class="form-check-label" for="for_rent">For Rent</label>
                                            </div>
                                        </div>

                                        <div class="col-2 p-0">
                                            <div class="form-group">
                                                <input class="form-check-input" type="checkbox" id="for_sale"
                                                    name="for_sale" {{ $properties->for_sale ? 'checked' : '' }}>
                                                <label class="form-check-label" for="for_sale">For Sale</label>
                                            </div>
                                        </div>
                                        <div class="col-2 p-2">
                                            <div class="form-group">
                                                <input class="form-check-input" type="checkbox" id="hot_offer"
                                                    name="hot_offer">
                                                <label class="form-check-label" for="hot_offer">
                                                    Hot Offer
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-2 p-2">
                                            <div class="form-group">
                                                <input class="form-check-input" type="checkbox" id="sale"
                                                    name="sale">
                                                <label class="form-check-label" for="sale">
                                                    Sale
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-2 p-2">
                                            <div class="form-group">
                                                <input class="form-check-input" type="checkbox" id="sold"
                                                    name="sold">
                                                <label class="form-check-label" for="sold">
                                                    Sold
                                                </label>
                                            </div>
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

                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="shadow-sm p-2">

                                    <form method="POST" action="{{ route('properties.location', $properties->id) }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <label for="address" class="col-form-label">Address</label>
                                                <div class="form-group">
                                                    <textarea type="text" name="address" id="address" class="form-control form-control-sm" placeholder="Address">{{ $properties->address }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="google_map" class="col-form-label">Google Map</label>
                                                <div class="form-group">
                                                    <textarea type="text" name="google_map" id="google_map" rows="5" class="form-control form-control-sm"
                                                        placeholder="Google Map">{{ $properties->google_map }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <input type="submit" class="btn btn-sm btn-info waves-effect waves-light"
                                            value="Add" />
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-property-video" role="tabpanel"
                                aria-labelledby="pills-property-video-tab">
                                <div class="shadow-sm p-2">
                                    <form method="POST" action="{{ route('properties.video', $properties->id) }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <label for="video_url" class="col-form-label">Video URL</label>
                                                <div class="form-group">
                                                    <textarea type="text" name="video_url" id="video_url" rows="5" class="form-control form-control-sm"
                                                        placeholder="Video URL">{{ $properties->video_url }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <input type="submit" class="btn btn-sm btn-info waves-effect waves-light"
                                            value="Add" />
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-property-featured" role="tabpanel"
                                aria-labelledby="pills-property-featured-tab">
                                <div class="shadow-sm p-2">
                                    <form method="POST"
                                        action="{{ route('properties.featured.image', $properties->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="featured_image" class="mb-2">Featured Image</label>
                                            <input type="file" class="mb-2 form-control form-control-sm"
                                                id="featured_image" name="featured_image"
                                                accept="image/png, image/jpg, image/jpeg, image/svg+xml, image/webp"
                                                onchange="showPreview(event)" />
                                            <div class="preview">
                                                <img src="{{ $properties->featured_image ? asset($properties->featured_image) : asset('no_image.jpg') }}"
                                                    class="img img-thumbnail" id="file-ip-1-preview" width="150px"
                                                    height="80px" />
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
                                    <form method="POST" action="{{ route('properties.file', $properties->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="pdf_attachment" class="col-form-label">PDF Attachment</label>
                                            <input type="file" class="mb-2 form-control form-control-sm"
                                                id="pdf_attachment" name="pdf_attachment" accept="application/pdf" />

                                            @error('pdf_attachment')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <input type="submit" class="btn btn-sm btn-info waves-effect waves-light"
                                            value="Add" />
                                    </form>
                                </div>
                                <hr>
                                <div>
                                    @if ($properties->file_attachment)
                                        <a href="{{ asset($properties->file_attachment) }}" target="_blank"
                                            class="btn btn-sm btn-success">
                                            View PDF
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
    </div>

    <script>
        async function updateForRent(propertyId) {
            console.log('====================================');
            console.log("Updating status...");
            console.log('====================================');

            const forRent = document.getElementById('for_rent').checked ? 1 : 0;

            try {
                const response = await fetch(`/properties/${propertyId}/status`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content')
                    },
                    body: JSON.stringify({
                        for_rent: forRent
                    })
                });

                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }

                const data = await response.json();
                alert(data.message || 'Status updated successfully!');
            } catch (error) {
                console.error('Error:', error);
                alert('Failed to update status.');
            }

        }
    </script>

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
