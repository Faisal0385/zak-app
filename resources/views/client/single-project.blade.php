@extends('client.master-layout')

@section('content')
    <div class="container-fluid p-0">
        <div class="row m-1">
            <div class="col-lg-12 p-0">
                <div id="propertyCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/images/kingsbridge/KB_Images-for-web-app-4-BED-TH-FRONT.webp') }}"
                                class="d-block w-100 rounded" alt="Knightsbridge" />
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/images/kingsbridge/nautrax5.webp') }}" class="d-block w-100 rounded"
                                alt="Knightsbridge" />
                        </div>
                        <!-- Add more carousel items as needed -->
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
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <section class="text-center p-5">
                    <div class="container">
                        <h1 class="section-header mb-3">Properties Found ({{ $count }})</h1>
                        <p class="lead">
                            Looking to buy a new property? Have doubt in which city to settle.
                            Do not hesitate, search properties in all cities. Choose a better
                            one for you.
                        </p>
                    </div>
                </section>
            </div>
        </div>


        <div class="row m-5">
            @foreach ($properties as $property)
                <div class="col-lg-4">
                    <div class="card shadow-sm m-1">
                        <div class="position-relative">
                            <img src="{{ asset($property->featured_image) }}" class="card-img-top" alt="Property Image" />
                            @if ($property->is_featured == 1)
                                <span
                                    class="badge badge-featured position-absolute top-0 end-0 m-2 text-white">Featured</span>
                            @endif
                            <div class="position-absolute bottom-0 start-0 m-2 d-flex gap-2">
                                <button class="btn btn-danger btn-sm">
                                    <i class="fa fa-heart"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text mb-1">{{ $property->propertyType?->name }}</p>
                            <h5 class="card-title">{{ $property->property_name }}</h5>
                            <p class="card-text mb-2">
                                <i class="fa fa-bed me-1"></i> {{ $property->bedroom }} Bedrooms
                                {{ $property->propertyType?->name }}
                            </p>
                            <p class="price mb-2">Starting Price: {{ $property->before_price_label }} {{ $property->price }}
                                {{ $property->price_unit }}</p>
                            <p class="price mb-2"></p>
                            <p class="card-text mb-2">
                                <i class="bi bi-geo-alt"></i> {{ $property->city?->name }}
                            </p>
                            <hr />
                            <div class="mt-2">
                                <a href="{{ route('property.detail', $property->id) }}" class="btn custom-secondary-btn">
                                    Details
                                </a>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-person-circle me-1"></i>
                                    <small>{{ $property->project?->developer_name }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
