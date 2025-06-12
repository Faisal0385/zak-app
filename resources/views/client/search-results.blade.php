@extends('client.master-layout')

@section('content')

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


    @foreach ($results as $result)
    <div class="col-lg-4">
      <div class="card shadow-sm m-1">
        <div class="position-relative">
        <img src="./assets/images/kingsbridge/KB_Images-for-web-app-4-BED-TH-FRONT.webp" class="card-img-top"
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
    @endforeach



    </div>
  </div>

@endsection