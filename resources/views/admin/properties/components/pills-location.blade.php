<div class="tab-pane fade" id="pills-location" role="tabpanel" aria-labelledby="pills-location-tab">
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
            <input type="submit" class="btn btn-sm btn-info waves-effect waves-light" value="Add" />
        </form>
    </div>
</div>
