<div class="tab-pane fade" id="pills-property-status" role="tabpanel" aria-labelledby="pills-property-status-tab">
    <div class="shadow-sm p-2">
        <div class="row m-1">
            <div class="col-2 p-0">
                <div class="form-group">
                    <input class="form-check-input" type="checkbox" id="for_rent" name="for_rent"
                        {{ $properties->for_rent ? 'checked' : '' }} onclick="updateForRent('{{ $properties->id }}')">
                    <label class="form-check-label" for="for_rent">For Rent</label>
                </div>
            </div>

            <div class="col-2 p-0">
                <div class="form-group">
                    <input class="form-check-input" type="checkbox" id="for_sale" name="for_sale"
                        {{ $properties->for_sale ? 'checked' : '' }}>
                    <label class="form-check-label" for="for_sale">For Sale</label>
                </div>
            </div>
            <div class="col-2 p-2">
                <div class="form-group">
                    <input class="form-check-input" type="checkbox" id="hot_offer" name="hot_offer">
                    <label class="form-check-label" for="hot_offer">
                        Hot Offer
                    </label>
                </div>
            </div>
            <div class="col-2 p-2">
                <div class="form-group">
                    <input class="form-check-input" type="checkbox" id="sale" name="sale">
                    <label class="form-check-label" for="sale">
                        Sale
                    </label>
                </div>
            </div>
            <div class="col-2 p-2">
                <div class="form-group">
                    <input class="form-check-input" type="checkbox" id="sold" name="sold">
                    <label class="form-check-label" for="sold">
                        Sold
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
