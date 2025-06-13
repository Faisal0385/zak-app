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
    </style>

    <!-- Header -->
    <div class="header-bg">
        <div>
            <h1>{{ $project->project_name }}</h1>
            <p>
                <a href="{{ route('home') }}" class="text-white">{{ $siteSettings->company_name }}</a>
            </p>
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
                            <p class="price mb-2">Starting Price: {{ $property->before_price_label }}
                                {{ $property->price }}
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
