<div class="tab-pane fade" id="pills-property-amenities" role="tabpanel" aria-labelledby="pills-property-amenities-tab">
    <form action="{{ route('properties.update.amenities', $properties->id) }}" method="POST">
        @csrf
        <div class="row mt-1">
            <div class="col-4">
                <label class="col-form-label">Property Amenities</label>
                <div class="form-group">
                    <select name="property_amenity_id" class="form-select form-select-sm js-select-all"
                        aria-label="Default select example">
                        <option value="" selected>Pls Select Property Amenities</option>
                        @foreach ($propertyAmenities as $propertyAmenity)
                            <option value="{{ $propertyAmenity->id }}">{{ $propertyAmenity->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-lg-12 mt-2">
                <button type="submit" class="btn btn-sm btn-primary">Update</button>
            </div>
        </div>
    </form>
    <hr>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Property Amenities List</h4>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="
                        border-collapse: collapse;
                        border-spacing: 0;
                        width: 100%;
                        margin-top: 20px
                      ">
                        <thead>
                            <tr class="text-white" style="background-color: teal">
                                <th>Property Amenities</th>
                                <th style="text-align: center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($propertyAmenitiesLists as $key => $result)
                                <tr>
                                    <td>{{ $result->amenity?->name ?? 'No Data' }}</td>
                                    <td class="text-center">

                                        <!-- Delete Button Trigger -->
                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal{{ $result->id }}">
                                            <i class="fa fa-trash m-0" style="font-size: 12px"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{ $result->id }}" tabindex="-1"
                                            aria-labelledby="exampleModal{{ $result->id }}Label" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="exampleModal{{ $result->id }}Label">
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
                                                            action="{{ route('properties.delete.amenities', $result->id) }}"
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
                                <th>Property Amenities</th>
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
