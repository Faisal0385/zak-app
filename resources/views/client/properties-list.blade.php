@extends('client.master-layout')

@section('content')

  <div class="container-fluid mx-0 px-0">
    <!-- About Us Section -->
    <section class="about-section" style="background-image: url('{{ asset('assets/images/about-us.webp') }}');">
    <h1>All Property List</h1>
    </section>
  </div>

  <div class="container">
    <div class="row">
    <section class="text-center p-5">
      <div class="container">
      <h1 class="section-header mb-3">Properties Found: {{ $count }}</h1>
      <p class="lead">
        Looking to buy a new property? Have doubt in which city to settle.
        Do not hesitate, search properties in all cities. Choose a better
        one for you.
      </p>
      </div>
    </section>
    </div>

    <div class="row m-5">


    @foreach ($properties as $property)
    <div class="col-lg-4">
      <div class="card shadow-sm m-1">
      <div class="position-relative">
      <img src="{{ asset('assets/images/kingsbridge/KB_Images-for-web-app-4-BED-TH-FRONT.webp') }}"
      class="card-img-top" alt="Property Image" />
      @if ($property->is_featured == 1)
      <span class="badge badge-featured position-absolute top-0 end-0 m-2 text-white">Featured</span>
      @endif
      <div class="position-absolute bottom-0 start-0 m-2 d-flex gap-2">
      <button class="btn btn-danger btn-sm">
        <i class="fa fa-heart"></i>
      </button>
      </div>
      </div>
      <div class="card-body">
      <p class="card-text mb-1">{{ $property->propertyType }}</p>
      <h5 class="card-title">{{ $property->property_name }}</h5>
      <p class="card-text mb-2">
      <i class="fa fa-bed me-1"></i> {{ $property->bedroom }} Bedrooms {{ $property->bedroom }}
      </p>
      <p class="price mb-2">Starting Price: AED 12.05M</p>
      <p class="price mb-2"></p>
      <p class="card-text mb-2">
      <i class="bi bi-geo-alt"></i> {{ $property->city?->name }}
      </p>
      <hr />
      <div class="mt-2">
      <a href="./PD THE GROSVENOR.html" class="btn custom-secondary-btn">
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