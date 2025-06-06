<div class="tab-pane fade" id="pills-property-amenities" role="tabpanel" aria-labelledby="pills-property-amenities-tab">
    <div class="row m-1">
        @foreach ($propertyAmenities as $propertyAmenity)
            <div class="col-3 p-2">
                <div class="form-group">
                    <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured">
                    <label class="form-check-label" for="is_featured">
                        {{ $propertyAmenity->name }}
                    </label>
                </div>
            </div>
        @endforeach
    </div>
</div>
