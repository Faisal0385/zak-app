<div class="tab-pane fade" id="pills-gallery" role="tabpanel" aria-labelledby="pills-gallery-tab">
    <div class="shadow-sm p-2">
        <form method="POST" action="{{ route('properties.gallery.image', $properties->id) }}"
            enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="gallery_image" class="mb-2">Gallery Images</label>
                <input type="file" class="mb-2 form-control form-control-sm" id="gallery_image" name="gallery_image"
                    accept="image/png, image/jpg, image/jpeg, image/svg+xml, image/webp" />
                <div class="preview">
                    <img src="{{ asset('no_image.jpg') }}" class="img img-thumbnail" id="file-ip-1-preview"
                        width="150px" height="80px" />
                </div>
            </div>
            <input type="submit" class="btn btn-sm btn-info waves-effect waves-light" value="Add" />
        </form>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Gallery Images</h4>
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
                                <th>Gallery Image</th>
                                <th style="text-align: center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($propertyGalleryImages as $propertyGalleryImage)
                                <tr>
                                    <td>
                                        <img class="img img-thumbnail"
                                            src="{{ asset($propertyGalleryImage->gallery_image) }}" alt="gallery image"
                                            width="200px" height="100px">
                                    </td>
                                    <td class="text-center">

                                        <!-- Delete Button Trigger -->
                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-gimage{{ $propertyGalleryImage->id }}">
                                            <i class="fa fa-trash m-0" style="font-size: 12px"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal-gimage{{ $propertyGalleryImage->id }}"
                                            tabindex="-1"
                                            aria-labelledby="exampleModal-gimage{{ $propertyGalleryImage->id }}Label"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="exampleModal-gimage{{ $propertyGalleryImage->id }}Label">
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
                                                        <form
                                                            action="{{ route('properties.gallery.delete', $propertyGalleryImage->id) }}"
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
                                <th>Gallery Image</th>
                                <th style="width: 10%; text-align: center">
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



</div>
