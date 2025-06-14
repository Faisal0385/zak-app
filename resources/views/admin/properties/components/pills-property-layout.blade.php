<div class="tab-pane fade" id="pills-property-layout" role="tabpanel" aria-labelledby="pills-property-layout-tab">

    <div class="row m-3">
        <h5>Add Floor Layout</h5>
        <div class="shadow-sm p-2">
            <form id="myForm" method="POST" action="{{ route('properties.create.layout', $properties->id) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-4">
                        <label for="floor_name" class="col-form-label">Floor Name</label>
                        <div class="form-group">
                            <input type="text" name="floor_name" id="floor_name" class="form-control form-control-sm"
                                placeholder="Floor Name" />
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="floor_price" class="col-form-label">Floor Price</label>
                        <div class="form-group">
                            <input type="text" name="floor_price" id="floor_price"
                                class="form-control form-control-sm" placeholder="Floor Price" />
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="price_postfix" class="col-form-label"> Price Postfix </label>
                        <div class="form-group">
                            <input type="text" name="price_postfix" id="price_postfix"
                                class="form-control form-control-sm" placeholder="Example: Per Month" />
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-4">
                        <label for="floor_size" class="col-form-label">Floor Size (sq. ft.) </label>
                        <div class="form-group">
                            <input type="text" name="floor_size" id="floor_size" class="form-control form-control-sm"
                                placeholder="Floor Size (sq. ft.)" />
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="bedroom" class="col-form-label">Bedroom</label>
                        <div class="form-group">
                            <input type="text" name="bedroom" id="bedroom" class="form-control form-control-sm"
                                placeholder="Bedroom" />
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="bathroom" class="col-form-label">Bathroom</label>
                        <div class="form-group">
                            <input type="text" name="bathroom" id="bathroom" class="form-control form-control-sm"
                                placeholder="Bathroom" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-3">
                        <label for="description" class="col-form-label">Description</label>
                        <div class="form-group">
                            <textarea type="text" name="description" id="description" class="form-control form-control-sm"
                                placeholder="Description"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="floor_layout_image" class="mb-2">Floor Plan Image</label>
                            <input type="file" class="mb-2 form-control form-control-sm" id="floor_layout_image"
                                name="floor_layout_image"
                                accept="image/png, image/jpg, image/jpeg, image/svg+xml, image/webp"
                                onchange="showPreview(event)" />
                            <div class="preview">
                                <img src="{{ $properties->floor_layout_image ? asset($properties->floor_layout_image) : asset('no_image.jpg') }}"
                                    class="img img-thumbnail" id="file-ip-1-preview" width="150px" height="80px" />
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <input type="submit" class="btn btn-sm btn-info waves-effect waves-light" value="Add" />
            </form>
        </div>
    </div>
    @if ($editLayout ?? false)
        <div class="row m-3">
            <h5>Edit Floor Layout</h5>
            <div class="shadow-sm p-2">
                <form method="POST" action="{{ route('properties.update.layout', $editLayout->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-4">
                            <label for="floor_name" class="col-form-label">Floor Name</label>
                            <input type="text" name="floor_name" class="form-control form-control-sm"
                                value="{{ $editLayout->floor_name }}" placeholder="Floor Name" />
                        </div>
                        <div class="col-4">
                            <label for="floor_price" class="col-form-label">Floor Price</label>
                            <input type="text" name="floor_price" class="form-control form-control-sm"
                                value="{{ $editLayout->floor_price }}" placeholder="Floor Price" />
                        </div>
                        <div class="col-4">
                            <label for="price_postfix" class="col-form-label">Price Postfix</label>
                            <input type="text" name="price_postfix" class="form-control form-control-sm"
                                value="{{ $editLayout->price_postfix }}" placeholder="e.g. Per Month" />
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-4">
                            <label for="floor_size" class="col-form-label">Floor Size (sq. ft.)</label>
                            <input type="text" name="floor_size" class="form-control form-control-sm"
                                value="{{ $editLayout->floor_size }}" placeholder="Floor Size" />
                        </div>
                        <div class="col-4">
                            <label for="bedroom" class="col-form-label">Bedroom</label>
                            <input type="text" name="bedroom" class="form-control form-control-sm"
                                value="{{ $editLayout->bedroom }}" placeholder="Bedroom" />
                        </div>
                        <div class="col-4">
                            <label for="bathroom" class="col-form-label">Bathroom</label>
                            <input type="text" name="bathroom" class="form-control form-control-sm"
                                value="{{ $editLayout->bathroom }}" placeholder="Bathroom" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="description" class="col-form-label">Description</label>
                            <textarea name="description" class="form-control form-control-sm" placeholder="Description">{{ $editLayout->description }}</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mt-3">
                            <label for="floor_layout_image" class="mb-2">Floor Plan Image</label>
                            <input type="file" class="form-control form-control-sm mb-2" name="floor_layout_image"
                                accept="image/*" onchange="showPreview(event)" />

                            <div class="preview">
                                <img src="{{ $editLayout->floor_layout_image ? asset($editLayout->floor_layout_image) : asset('no_image.jpg') }}"
                                    class="img img-thumbnail" id="file-ip-1-preview" width="150px"
                                    height="80px" />
                            </div>
                        </div>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-sm btn-success">Update</button>
                </form>
            </div>
        </div>
    @endif


    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Floor Layouts</h4>
                    <div class="row">
                        @foreach ($propertyFloorLayouts as $layout)
                            <div class="col-md-6 mb-4">
                                <div class="card shadow-sm h-100">
                                    @if ($layout->floor_layout_image)
                                        <!-- Image trigger -->
                                        <a href="#" data-bs-toggle="modal"
                                            data-bs-target="#imageModal{{ $layout->id }}">
                                            <img src="{{ asset($layout->floor_layout_image ?? 'no_image.jpg') }}"
                                                class="card-img-top" alt="Floor Image"
                                                style="height: 180px; object-fit: cover;">
                                        </a>

                                        <!-- Image View Modal -->
                                        <div class="modal fade" id="imageModal{{ $layout->id }}" tabindex="-1"
                                            aria-labelledby="imageModalLabel{{ $layout->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body p-0">
                                                        <img src="{{ asset($layout->floor_layout_image ?? 'no_image.jpg') }}"
                                                            class="img-fluid w-100" alt="Floor Full Image">
                                                    </div>
                                                    <div class="modal-footer py-2">
                                                        <button type="button" class="btn btn-secondary btn-sm"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <img src="{{ asset('no_image.jpg') }}" class="card-img-top" alt="No Image"
                                            style="height: 180px; object-fit: cover;">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $layout->floor_name }}</h5>
                                        <p class="card-text">
                                            <strong>Price:</strong> {{ $layout->floor_price }}
                                            {{ $layout->price_postfix }}<br>
                                            <strong>Size:</strong> {{ $layout->floor_size }} sq. ft.<br>
                                            <strong>Bedrooms:</strong> {{ $layout->bedroom }}<br>
                                            <strong>Bathrooms:</strong> {{ $layout->bathroom }}
                                        </p>
                                        <p class="text-muted" style="font-size: 14px;">
                                            {{ $layout->description }}
                                        </p>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between">
                                        <a href="{{ route('properties.edit.layout', $layout->id) }}"
                                            class="btn btn-sm btn-info">
                                            <i class="fas fa-edit" style="font-size:1rem"></i> Edit
                                        </a>

                                        <!-- Delete Trigger -->
                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $layout->id }}">
                                            <i class="fa fa-trash" style="font-size:1rem"></i> Delete
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Delete Modal -->
                            <div class="modal fade" id="deleteModal{{ $layout->id }}" tabindex="-1"
                                aria-labelledby="deleteModalLabel{{ $layout->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Delete Floor Layout</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this floor layout?
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('properties.delete.layout', $layout->id) }}"
                                                method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">Yes,
                                                    Delete</button>
                                            </form>
                                            <button type="button" class="btn btn-secondary btn-sm"
                                                data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
