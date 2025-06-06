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
</div>
