<div class="tab-pane fade" id="pills-property-featured-image" role="tabpanel"
    aria-labelledby="pills-property-featured-image-tab">
    <div class="shadow-sm p-2">
        <form method="POST" action="{{ route('properties.featured.image', $properties->id) }}"
            enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="featured_image" class="mb-2">Featured Image</label>
                <input type="file" class="mb-2 form-control form-control-sm" id="featured_image"
                    name="featured_image" accept="image/png, image/jpg, image/jpeg, image/svg+xml, image/webp"
                    onchange="showPreview(event)" />
                <div class="preview">
                    <img src="{{ $properties->featured_image ? asset($properties->featured_image) : asset('no_image.jpg') }}"
                        class="img img-thumbnail" id="file-ip-1-preview" width="150px" height="80px" />
                </div>
            </div>
            <input type="submit" class="btn btn-sm btn-info waves-effect waves-light" value="Add" />
        </form>
    </div>
</div>
