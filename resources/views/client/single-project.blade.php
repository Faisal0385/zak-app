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
        <!-- <div class="carousel-caption d-none d-md-block">
      <h5>Knightsbridge</h5>
      <p class="price">
      AED8M <span class="text-white">For Sale</span>
      </p>
      <p><i class="bi bi-geo-alt"></i> Meydan, District 11</p>
      </div> -->
        </div>
        <div class="carousel-item">
        <img src="{{ asset('assets/images/kingsbridge/nautrax5.webp') }}" class="d-block w-100 rounded"
          alt="Knightsbridge" />
        <!-- <div class="carousel-caption d-none d-md-block">
      <h5>Knightsbridge</h5>
      <p class="price">
      AED8M <span class="text-white">For Sale</span>
      </p>
      <p><i class="bi bi-geo-alt"></i> Meydan, District 11</p>
      </div> -->
        </div>
        <!-- Add more carousel items as needed -->
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#propertyCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#propertyCarousel" data-bs-slide="next">
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



    <!-- <div class="col-lg-4">
      <div class="card shadow-sm m-1">
      <div class="position-relative">
      <img src="{{ asset('assets/images/kingsbridge/KB_Images-for-web-app-4-BED-TH-FRONT.webp') }}" class="card-img-top"
      alt="Property Image" style="height: 250px;" />
      <span class="badge badge-featured position-absolute top-0 start-0 m-2 text-white">Featured</span>
      <span class="badge badge-rent position-absolute top-0 end-0 m-2 text-white">For Sale</span>
      <div class="position-absolute bottom-0 start-0 m-2 d-flex gap-2">
      <button class="btn btn-dark btn-sm">
      <i class="fa fa-image"></i>
      </button>
      <button class="btn btn-dark btn-sm">
      <i class="fa fa-star"></i>
      </button>
      <button class="btn btn-dark btn-sm">
      <i class="fa fa-arrow-right"></i>
      </button>
      </div>
      </div>
      <div class="card-body">
      <p class="card-text mb-1">Townhouse</p>
      <h5 class="card-title">THE HIGHCLERE</h5>
      <p class="card-text mb-2">
      <i class="bi bi-geo-alt"></i> 4 Bedrooms Townhouse
      </p>
      <p class="price mb-2">Starting Price: AED 7.94M</p>
      <hr />
      <div class="mt-2">
      <a href="./PD THE HIGHCLERE.html" class="btn custom-secondary-btn">
      Details
      </a>
      </div>
      </div>
      <div class="card-footer">
      <div class="d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center">
      <i class="bi bi-person-circle me-1"></i>
      <small>LEOS Developer</small>
      </div>
      <small>KNIGHTSBRIDGE</small>
      </div>
      </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="card shadow-sm m-1">
      <div class="position-relative">
      <img src="{{ asset('assets/images/kingsbridge/KB_Images-for-web-app-5-BEDS-VILLA-FRONT-P1.webp') }}" class="card-img-top"
      alt="Property Image" style="height: 250px;" />
      <span class="badge badge-featured position-absolute top-0 start-0 m-2 text-white">Featured</span>
      <span class="badge badge-rent position-absolute top-0 end-0 m-2 text-white">For Sale</span>
      <div class="position-absolute bottom-0 start-0 m-2 d-flex gap-2">
      <button class="btn btn-dark btn-sm">
      <i class="fa fa-image"></i>
      </button>
      <button class="btn btn-dark btn-sm">
      <i class="fa fa-star"></i>
      </button>
      <button class="btn btn-dark btn-sm">
      <i class="fa fa-arrow-right"></i>
      </button>
      </div>
      </div>
      <div class="card-body">
      <p class="card-text mb-1">Villa</p>
      <h5 class="card-title">THE GROSVENOR</h5>
      <p class="card-text mb-2">
      <i class="bi bi-geo-alt"></i> 5 Bedrooms Villa
      </p>
      <p class="price mb-2">Starting Price: AED 12.05M</p>
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
      <small>LEOS Developer</small>
      </div>
      <small>KNIGHTSBRIDGE</small>
      </div>
      </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="card shadow-sm m-1">
      <div class="position-relative">
      <img src="{{ asset('assets/images/kingsbridge/KB_Images-for-web-app-6-BEDS-VILLA-FRONT-P1.webp') }}" class="card-img-top"
      alt="Property Image" style="height: 250px;" />
      <span class="badge badge-featured position-absolute top-0 start-0 m-2 text-white">Featured</span>
      <span class="badge badge-rent position-absolute top-0 end-0 m-2 text-white">For Sale</span>
      <div class="position-absolute bottom-0 start-0 m-2 d-flex gap-2">
      <button class="btn btn-dark btn-sm">
      <i class="fa fa-image"></i>
      </button>
      <button class="btn btn-dark btn-sm">
      <i class="fa fa-star"></i>
      </button>
      <button class="btn btn-dark btn-sm">
      <i class="fa fa-arrow-right"></i>
      </button>
      </div>
      </div>
      <div class="card-body">
      <p class="card-text mb-1">Villa</p>
      <h5 class="card-title">THE BALMORAL</h5>
      <p class="card-text mb-2">
      <i class="bi bi-geo-alt"></i> Signature 6 Bedrooms Villa
      </p>
      <p class="price mb-2">Starting Price: AED 16.34M</p>
      <hr />
      <div class="mt-2">
      <a href="./PD THE BALMORAL.html" class="btn custom-secondary-btn">
      Details
      </a>
      </div>
      </div>
      <div class="card-footer">
      <div class="d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center">
      <i class="bi bi-person-circle me-1"></i>
      <small>LEOS Developer</small>
      </div>
      <small>KNIGHTSBRIDGE</small>
      </div>
      </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="card shadow-sm m-1">
      <div class="position-relative">
      <img src="{{ asset('assets/images/kingsbridge/nautrax1.webp') }}" class="card-img-top" alt="Property Image"
      style="height: 250px;" />
      <span class="badge badge-featured position-absolute top-0 start-0 m-2 text-white">Featured</span>
      <span class="badge badge-rent position-absolute top-0 end-0 m-2 text-white">For Sale</span>
      <div class="position-absolute bottom-0 start-0 m-2 d-flex gap-2">
      <button class="btn btn-dark btn-sm">
      <i class="fa fa-image"></i>
      </button>
      <button class="btn btn-dark btn-sm">
      <i class="fa fa-star"></i>
      </button>
      <button class="btn btn-dark btn-sm">
      <i class="fa fa-arrow-right"></i>
      </button>
      </div>
      </div>
      <div class="card-body">
      <p class="card-text mb-1">Villa</p>
      <h5 class="card-title">THE CHATSWORTH</h5>
      <p class="card-text mb-2">
      <i class="bi bi-geo-alt"></i> 5 Bedrooms Villa
      </p>
      <p class="price mb-2">Starting Price: AED 13.8M</p>
      <hr />
      <div class="mt-2">
      <a href="./PD THE CHATSWORTH.html" class="btn custom-secondary-btn">
      Details
      </a>
      </div>
      </div>
      <div class="card-footer">
      <div class="d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center">
      <i class="bi bi-person-circle me-1"></i>
      <small>LEOS Developer</small>
      </div>
      <small>KNIGHTSBRIDGE</small>
      </div>
      </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="card shadow-sm m-1">
      <div class="position-relative">
      <img src="{{ asset('assets/images/kingsbridge/nautrax4.webp') }}" class="card-img-top" alt="Property Image"
      style="height: 250px;" />
      <span class="badge badge-featured position-absolute top-0 start-0 m-2 text-white">Featured</span>
      <span class="badge badge-rent position-absolute top-0 end-0 m-2 text-white">For Sale</span>
      <div class="position-absolute bottom-0 start-0 m-2 d-flex gap-2">
      <button class="btn btn-dark btn-sm">
      <i class="fa fa-image"></i>
      </button>
      <button class="btn btn-dark btn-sm">
      <i class="fa fa-star"></i>
      </button>
      <button class="btn btn-dark btn-sm">
      <i class="fa fa-arrow-right"></i>
      </button>
      </div>
      </div>
      <div class="card-body">
      <p class="card-text mb-1">Villa</p>
      <h5 class="card-title">THE BLENHEIM</h5>
      <p class="card-text mb-2">
      <i class="bi bi-geo-alt"></i> 6 Bedrooms Signature Villa
      </p>
      <p class="price mb-2">Starting Price: AED 21.6M</p>
      <hr />
      <div class="mt-2">
      <a href="./PD THE BLENHEIM.html" class="btn custom-secondary-btn">
      Details
      </a>
      </div>
      </div>
      <div class="card-footer">
      <div class="d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center">
      <i class="bi bi-person-circle me-1"></i>
      <small>LEOS Developer</small>
      </div>
      <small>KNIGHTSBRIDGE</small>
      </div>
      </div>
      </div>
    </div> -->

    </div>
  </div>

@endsection