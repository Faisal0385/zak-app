@extends('client.master-layout')

@section('content')
    <style>
        .header-bg {
            background-image: url("{{ asset('assets/images/properties-image.png') }}");
            background-size: cover;
            background-position: center;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            position: relative;
        }

        .header-bg::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .header-bg h1,
        .header-bg p {
            position: relative;
            z-index: 1;
        }

        .carousel-item img {
            height: 500px;
            object-fit: cover;
        }

        .carousel-thumbnails img {
            height: 100px;
            object-fit: cover;
            cursor: pointer;
            margin: 5px;
        }

        .nav-tabs .nav-link.active {
            color: #0e6b78;
            background-color: #dbb032;
            border: none;
            margin-right: 5px;
        }
    </style>

    <!-- Header -->
    <div class="header-bg">
        <div>
            <h1>{{ $properties->property_name }}</h1>
            <p>
                <a href="{{ route('home') }}" class="text-white">{{ $siteSettings->company_name }}</a> >
                <a href="{{ route('single.property.list', $properties->project?->slug) }}"
                    class="text-white">{{ $properties->project?->project_name }}</a>
            </p>
        </div>
    </div>

    <!-- Property Section -->
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2>{{ $properties->property_name }} 4 Bedrooms Townhouse</h2>
                <p><i class="bi bi-geo-alt"></i>{{ $properties->address }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="propertyCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($propertyGalleryImages as $key => $image)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <img src="{{ asset($image->gallery_image) }}" class="d-block w-100"
                                    alt="Property Image {{ $key + 1 }}" />
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#propertyCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#propertyCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="carousel-thumbnails d-flex flex-wrap mt-3">
                    @foreach ($propertyGalleryImages as $key => $image)
                        <img src="{{ asset($image->gallery_image) }}" data-bs-target="#propertyCarousel"
                            data-bs-slide-to="{{ $key }}" alt="Thumbnail {{ $key + 1 }}"
                            style="width: 100px; height: auto; cursor: pointer; margin-right: 5px;" />
                    @endforeach
                </div>
            </div>
        </div>


        <!-- Tabs Section -->
        <div class="row mt-5">
            <div class="col-12">
                <ul class="nav nav-tabs" id="propertyTabs" role="tablist"
                    style="background: #222222; padding: 15px; border-radius: 10px">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded text-white active" id="overview-tab" data-bs-toggle="tab"
                            data-bs-target="#overview" type="button" role="tab" aria-controls="overview"
                            aria-selected="true">
                            Overview
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded text-white" id="features-tab" data-bs-toggle="tab"
                            data-bs-target="#features" type="button" role="tab" aria-controls="features"
                            aria-selected="false">
                            Features
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded text-white" id="layout-tab" data-bs-toggle="tab"
                            data-bs-target="#layout" type="button" role="tab" aria-controls="layout"
                            aria-selected="false">
                            Layout
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded text-white" id="video-tab" data-bs-toggle="tab"
                            data-bs-target="#video" type="button" role="tab" aria-controls="video"
                            aria-selected="false">
                            Video
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="propertyTabsContent">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                        <div class="p-3 my-2 shadow rounded-2">
                            <h4 style="font-size: 35px">Description</h4>
                            <p>{{ $properties->description }}</p>
                            <h4 style="font-size: 35px">Address</h4>
                            <p>
                                {{ $properties->address }} <br />
                                <strong> City:</strong> {{ $properties->city?->name }}<br />
                                <strong>Country:</strong> {{ $properties->country?->name }}<br />
                                <hr />
                            </p>


                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="bg-white p-2 m-1 rounded">
                                        <strong>Property ID: </strong>
                                        <span>{{ $properties->property_id }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="bg-white p-2 m-1 rounded">
                                        <strong>Property Type: </strong>
                                        <span>{{ $properties->propertyTypes }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="bg-white p-2 m-1 rounded">
                                        <strong>Floor Size (sq. ft.): </strong>
                                        <span>{{ $properties->size }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="bg-white p-2 m-1 rounded">
                                        <strong>Land (sq. ft.): </strong>
                                        <span>{{ $properties->land }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="bg-white p-2 m-1 rounded">
                                        <strong>Price: </strong>
                                        <span>{{ $properties->before_price_label }} {{ $properties->price }}
                                            {{ $properties->after_price_label }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="bg-white p-2 m-1 rounded">
                                        <strong>Bedroom: </strong>
                                        <span>{{ $properties->bedroom }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="bg-white p-2 m-1 rounded">
                                        <strong>Bathroom: </strong>
                                        <span>{{ $properties->bathroom }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="bg-white p-2 m-1 rounded">
                                        <strong>Garages: </strong>
                                        <span>{{ $properties->Garages }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="bg-white p-2 m-1 rounded">
                                        <strong>Garages Size: </strong>
                                        <span>{{ $properties->garages_size }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="bg-white p-2 m-1 rounded">
                                        <strong>Year Built: </strong>
                                        <span>{{ $properties->year_built }}</span>
                                    </div>
                                </div>
                                @if ($properties->file_attachment)
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="bg-white p-2 m-1 rounded">
                                            <strong>PDF File: </strong>
                                            <a href="{{ asset($properties->file_attachment) }}" target="_blank"
                                                class="btn btn-sm btn-success ">
                                                View PDF
                                            </a><br />
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="features" role="tabpanel" aria-labelledby="features-tab">
                        <div class="container">
                            <div class="row amenity-row">
                                <div class="container mt-2 rounded-3">
                                    <h2 class="mb-4">Features and Amenities</h2>
                                    <div class="row row-cols-1 row-cols-md-3 g-4">

                                        @foreach ($propertyAmenitiesLists as $propertyAmenitiesList)
                                            <div class="col">
                                                <i class="{{ $propertyAmenitiesList->amenity->icon_class }}"></i>
                                                {{ $propertyAmenitiesList->amenity->name }}
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="layout" role="tabpanel" aria-labelledby="layout-tab">
                        <div class="container">
                            <div class="row amenity-row">
                                <div class="container shadow mt-2 rounded-3">
                                    <h2 class="mb-4">Layout</h2>
                                    @foreach ($propertyFloorLayouts as $propertyFloorLayout)
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="bg-white p-2 m-1 rounded">
                                                    <strong>Floor Name: </strong>
                                                    <span>{{ $propertyFloorLayout->floor_name }}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="bg-white p-2 m-1 rounded">
                                                    <strong>Floor Price: </strong>
                                                    <span>{{ $propertyFloorLayout->floor_price }}
                                                        {{ $propertyFloorLayout->price_postfix }}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="bg-white p-2 m-1 rounded">
                                                    <strong>Floor Size (sq. ft.): </strong>
                                                    <span>{{ $propertyFloorLayout->floor_size }}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="bg-white p-2 m-1 rounded">
                                                    <strong>Bedroom: </strong>
                                                    <span>{{ $propertyFloorLayout->bedroom }}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="bg-white p-2 m-1 rounded">
                                                    <strong>Bathroom: </strong>
                                                    <span>{{ $propertyFloorLayout->bathroom }}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="bg-white p-2 m-1 rounded">
                                                    <strong>Description: </strong>
                                                    <span>{{ $propertyFloorLayout->description }}</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="bg-white p-2 m-1 rounded">
                                                    <strong>Image: </strong>
                                                    <hr />
                                                    <span><img class="img img-thumbnail"
                                                            src="{{ asset($propertyFloorLayout->floor_layout_image) }}"
                                                            alt="floor image"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
                        <iframe width="100%" height="450" src="{{ $properties->video_url }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Get Directions -->
        <div class="row mt-5">
            <div class="col-12">
                <h4>Get Directions</h4>
                <div class="alert bg-white text-center">
                    <iframe src="{{ $properties->google_map }}" width="100%" height="450" style="border: 0"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        {{-- <div class="row mt-3">
            <div class="col-12 text-muted">
                <small>January 20, 2025 • 2,385 views</small>
            </div>
        </div> --}}
    </div>


    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection
