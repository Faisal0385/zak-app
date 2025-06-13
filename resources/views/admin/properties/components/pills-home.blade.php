<div class="tab-pane " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <div class="shadow-sm p-2">
        <form id="myForm" method="POST" action="{{ route('properties.update.info', $properties->id) }}">
            @csrf
            <div class="row">

                <div class="col-3">
                    <label for="property_id" class="col-form-label">Property ID</label>
                    <div class="form-group">
                        <input type="text" name="property_id" id="property_id" class="form-control form-control-sm"
                            value="{{ $properties->property_id }}" placeholder="Property ID" />
                    </div>
                </div>
                <div class="col-3">
                    <label for="price" class="col-form-label">Price</label>
                    <div class="form-group">
                        <input type="text" name="price" id="price" class="form-control form-control-sm"
                            value="{{ $properties->price }}" placeholder="Price" />
                    </div>
                </div>
                <div class="col-3">
                    <label for="before_price_label" class="col-form-label">Before Price
                        Label
                    </label>
                    <div class="form-group">
                        <input type="text" name="before_price_label" id="before_price_label"
                            class="form-control form-control-sm" value="{{ $properties->before_price_label }}"
                            placeholder="Example: Start From, AED" />
                    </div>
                </div>
                <div class="col-3">
                    <label for="after_price_label" class="col-form-label">After Price
                        Label</label>
                    <div class="form-group">
                        <input type="text" name="after_price_label" id="after_price_label"
                            class="form-control form-control-sm" value="{{ $properties->after_price_label }}"
                            placeholder="Example: Per Month" />
                    </div>
                </div>
                <div class="col-3">
                    <label class="col-form-label">Price Unit </label>
                    <div class="form-group">
                        <select name="price_unit" class="form-select form-select-sm js-select-all"
                            aria-label="Default select example">
                            <option value="" selected>Pls Select Price Unit</option>
                            <option {{ $properties->price_unit == 'Thousand' ? 'selected' : '' }} value="Thousand">
                                Thousand
                            </option>
                            <option {{ $properties->price_unit == 'Million' ? 'selected' : '' }} value="Million">Million
                            </option>
                            <option {{ $properties->price_unit == 'Billion' ? 'selected' : '' }} value="Billion">Billion
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <label class="col-form-label">Price on Call? </label>
                    <div class="form-group">
                        <input class="form-check-input" type="checkbox" id="price_on_call" name="price_on_call"
                            {{ $properties->price_on_call == 'yes' ? 'checked' : '' }}>
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
                        <input type="text" name="size" id="size" class="form-control form-control-sm"
                            value="{{ $properties->size }}" placeholder="Size (sq. ft.)" />
                    </div>
                </div>
                <div class="col-3">
                    <label for="land" class="col-form-label">Land (sq. ft.) </label>
                    <div class="form-group">
                        <input type="text" name="land" id="land" class="form-control form-control-sm"
                            value="{{ $properties->land }}" placeholder="Land (sq. ft.)" />
                    </div>
                </div>
                <div class="col-3">
                    <label for="room" class="col-form-label">Room</label>
                    <div class="form-group">
                        <input type="text" name="room" id="room" class="form-control form-control-sm"
                            value="{{ $properties->room }}" placeholder="Room" />
                    </div>
                </div>
                <div class="col-3">
                    <label for="bedroom" class="col-form-label">Bedroom</label>
                    <div class="form-group">
                        <input type="text" name="bedroom" id="bedroom" class="form-control form-control-sm"
                            value="{{ $properties->bedroom }}" placeholder="Bedroom" />
                    </div>
                </div>
                <div class="col-3">
                    <label for="bathroom" class="col-form-label">Bathroom</label>
                    <div class="form-group">
                        <input type="text" name="bathroom" id="bathroom" class="form-control form-control-sm"
                            value="{{ $properties->bathroom }}" placeholder="Bathroom" />
                    </div>
                </div>
                <div class="col-3">
                    <label for="garages" class="col-form-label">Garages </label>
                    <div class="form-group">
                        <input type="text" name="garages" id="garages" class="form-control form-control-sm"
                            value="{{ $properties->garages }}" placeholder="Garages" />
                    </div>
                </div>
                <div class="col-3">
                    <label for="garages_size" class="col-form-label">Garages Size(sq. ft.)
                    </label>
                    <div class="form-group">
                        <input type="text" name="garages_size" id="garages_size"
                            class="form-control form-control-sm" value="{{ $properties->garages_size }}"
                            placeholder="Garages Size(sq. ft.)" />
                    </div>
                </div>
                <div class="col-3">
                    <label for="year_built" class="col-form-label">Year Built</label>
                    <div class="form-group">
                        <input type="text" name="year_built" id="year_built" class="form-control form-control-sm"
                            value="{{ $properties->year_built }}" placeholder="Year Built" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label class="col-form-label">City </label>
                    <div class="form-group">
                        <select name="city_id" class="form-select form-select-sm js-select-all"
                            aria-label="Default select example">
                            <option value="" selected>Pls Select City</option>
                            @foreach ($cities as $city)
                                <option {{ $city->id == $properties->city_id ? 'selected' : '' }}
                                    value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <label class="col-form-label">Province/Sate </label>
                    <div class="form-group">
                        <select name="state_id" class="form-select form-select-sm js-select-all"
                            aria-label="Default select example">
                            <option value="" selected>Pls Select Province/Sate
                            </option>
                            @foreach ($states as $state)
                                <option {{ $state->id == $properties->state_id ? 'selected' : '' }}
                                    value="{{ $state->id }}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <label class="col-form-label">Country</label>
                    <div class="form-group">
                        <select name="country_id" class="form-select form-select-sm js-select-all"
                            aria-label="Default select example">
                            <option value="" selected>Pls Select Country
                            </option>
                            @foreach ($countries as $country)
                                <option {{ $country->id == $properties->country_id ? 'selected' : '' }}
                                    value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="description" class="col-form-label">Description</label>
                    <div class="form-group">
                        <textarea type="text" name="description" id="description" class="form-control form-control-sm"
                            placeholder="Description">{{ $properties->description }}</textarea>
                    </div>
                </div>
            </div>

            <br>
            <input type="submit" class="btn btn-sm btn-info waves-effect waves-light" value="Add" />
        </form>
    </div>
</div>
