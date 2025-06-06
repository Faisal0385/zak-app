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
                                <button class="nav-link border-0 m-1" id="pills-property-amenities-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-property-amenities" type="button"
                                    role="tab" aria-controls="pills-property-amenities" aria-selected="false">Property
                                    Amenities</button>
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
                                <button class="nav-link border-0 m-1" id="pills-location-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-location" type="button" role="tab"
                                    aria-controls="pills-location" aria-selected="false">Location</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-0 m-1" id="pills-property-video-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-property-video" type="button" role="tab"
                                    aria-controls="pills-property-video" aria-selected="false">Video URL</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-0 m-1" id="pills-property-featured-image-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-property-featured-image" type="button"
                                    role="tab" aria-controls="pills-property-featured-image"
                                    aria-selected="false">Featured Images</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-0 m-1" id="pills-gallery-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-gallery" type="button" role="tab"
                                    aria-controls="pills-gallery" aria-selected="false">Gallery Images</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-0 m-1" id="pills-property-file-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-property-file" type="button" role="tab"
                                    aria-controls="pills-property-file" aria-selected="false">File Attachment</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            @include('admin.properties.components.pills-home')
                            @include('admin.properties.components.pills-property-type')
                            @include('admin.properties.components.pills-property-status')
                            @include('admin.properties.components.pills-property-featured-image')
                            @include('admin.properties.components.pills-property-label')
                            @include('admin.properties.components.pills-property-video')
                            @include('admin.properties.components.pills-property-file')
                            @include('admin.properties.components.pills-property-amenities')
                            @include('admin.properties.components.pills-location')
                            @include('admin.properties.components.pills-gallery')
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
