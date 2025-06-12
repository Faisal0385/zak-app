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
    <h1>The Highclere Townhouse</h1>
    <p>
      <a href="#" class="text-white">ZAK Realty</a> >
      <a href="#" class="text-white">KNIGHTSBRIDGE</a>
    </p>
    </div>
  </div>

  <!-- Property Section -->
  <div class="container my-5">
    <div class="row">
    <div class="col-12">
      <h2>THE HIGHCLERE 4 Bedrooms Townhouse</h2>
      <p><i class="bi bi-geo-alt"></i> Meydan, District 11</p>
      <p>Property ID: 786</p>
    </div>
    </div>
    <div class="row">
    <div class="col-12">
      <div id="propertyCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{ asset('assets/images/kingsbridge/KB_Images-for-web-app-4-BED-TH-FRONT.webp') }}"
          class="d-block w-100" alt="Property Image 1" />
        </div>
        <div class="carousel-item">
        <img src="{{ asset('assets/images/kingsbridge/KB_Images-for-web-app-4-BED-TH-BACK.webp') }}"
          class="d-block w-100" alt="Property Image 2" />
        </div>
        <div class="carousel-item">
        <img src="{{ asset('assets/images/kingsbridge/KB_Images-for-web-app-4-BED-TH-STREET-VIEW.webp') }}"
          class="d-block w-100" alt="Property Image 3" />
        </div>
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
      <div class="carousel-thumbnails d-flex flex-wrap mt-3">
      <img src="{{ asset('assets/images/kingsbridge/KB_Images-for-web-app-4-BED-TH-FRONT.webp') }}"
        data-bs-target="#propertyCarousel" data-bs-slide-to="0" alt="Thumbnail 1" />
      <img src="{{ asset('assets/images/kingsbridge/KB_Images-for-web-app-4-BED-TH-BACK.webp') }}"
        data-bs-target="#propertyCarousel" data-bs-slide-to="1" alt="Thumbnail 2" />
      <img src="{{ asset('assets/images/kingsbridge/KB_Images-for-web-app-4-BED-TH-STREET-VIEW.webp') }}"
        data-bs-target="#propertyCarousel" data-bs-slide-to="2" alt="Thumbnail 3" />
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
        data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="true">
        Overview
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link rounded text-white" id="features-tab" data-bs-toggle="tab" data-bs-target="#features"
        type="button" role="tab" aria-controls="features" aria-selected="false">
        Features
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link rounded text-white" id="layout-tab" data-bs-toggle="tab" data-bs-target="#layout"
        type="button" role="tab" aria-controls="layout" aria-selected="false">
        Layout
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link rounded text-white" id="video-tab" data-bs-toggle="tab" data-bs-target="#video"
        type="button" role="tab" aria-controls="video" aria-selected="false">
        Video
        </button>
      </li>
      </ul>
      <div class="tab-content" id="propertyTabsContent">
      <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
        <div class="p-2 my-2 border rounded-2">
        <h4 style="font-size: 35px">Description</h4>
        <p>4 Bedroom Townhouse</p>
        <h4 style="font-size: 35px">Address</h4>
        <p>
          Meydan, District 11 <br />
          City: Dubai <br />
          Country: United Arab Emirates
        </p>


        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="bg-white p-2 m-1 rounded">
            <strong>Property ID: </strong>
            <span>786</span>
          </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="bg-white p-2 m-1 rounded">
            <strong>Property Type: </strong>
            <span>For Sale</span>
          </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="bg-white p-2 m-1 rounded">
            <strong>Price: </strong>
            <span>For Sale</span>
          </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="bg-white p-2 m-1 rounded">
            <strong>Bedrooms: </strong>
            <span>3</span>
          </div>
          </div>
        </div>

        <div class="table-responsive mt-3">

          <!-- <table class="table">

        <tr>
        <th>Property ID</th>
        <td>786</td>
        <th>Property Type</th>
        <td>For Sale</td>
        </tr>
        <tr>
        <th>Price</th>
        <td>AED 8 M</td>
        <th>Property Type</th>
        <td>The Highstone Townhouse</td>
        </tr>
        <tr>
        <th>Property Type</th>
        <td>The Grosvenor Villa</td>
        <th>Property Type</th>
        <td>The Balmoral Villa</td>
        </tr>
        <tr>
        <th>Bedrooms</th>
        <td>4</td>
        <th>Bedrooms</th>
        <td>6</td>
        </tr>
        </table> -->
        </div>
        </div>
      </div>
      <div class="tab-pane fade" id="features" role="tabpanel" aria-labelledby="features-tab">
        <div class="container">
        <div class="row amenity-row">
          <div class="container mt-2 rounded-3">
          <h2 class="mb-4">Features and Amenities</h2>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
            <i class="fa fa-water"></i> Waterfront wellness
            community
            </div>
            <div class="col">
            <i class="fa fa-leaf"></i> Biodiversity
            </div>
            <div class="col">
            <i class="fa fa-tree"></i> Re-oxygenating water features
            </div>
            <div class="col">
            <i class="fa fa-umbrella-beach"></i> Climate controlled
            outdoor shaded terrace
            </div>
            <div class="col">
            <i class="fa fa-seedling"></i> Karesansui Balcony garden
            </div>

            <div class="col">
            <i class="fa fa-charging-station"></i> EV charging
            facilities
            </div>
            <div class="col">
            <i class="fa fa-solar-panel"></i> Solar water heater
            </div>
            <div class="col">
            <i class="fa fa-lightbulb"></i> Energy efficient LED
            lighting
            </div>
            <div class="col">
            <i class="fa fa-window-restore"></i> UV-proof double
            glazing
            </div>
            <div class="col">
            <i class="fa fa-vial"></i> Chemical treatment and
            filtration for lake water
            </div>

            <div class="col">
            <i class="fa fa-water"></i> Smart irrigation system
            </div>
            <div class="col">
            <i class="fa fa-car"></i> Shaded parking spaces
            </div>
            <div class="col">
            <i class="fa fa-city"></i> Self-shading building facade
            </div>
            <div class="col">
            <i class="fa fa-tree-city"></i> Maximise green spaces
            </div>
            <div class="col">
            <i class="fa fa-bolt"></i> Energy & water efficiency
            </div>

            <div class="col">
            <i class="fa fa-house"></i> Smart home system
            </div>
            <div class="col">
            <i class="fa fa-snowflake"></i> Insulated building
            envelope
            </div>
            <div class="col">
            <i class="fa fa-shield-alt"></i> Waterproofing With 10
            Years Warranty
            </div>
            <div class="col">
            <i class="fa fa-wine-bottle"></i> Beverage Chiller
            </div>
            <div class="col">
            <i class="fa fa-tint"></i> Enhanced Drainage System
            </div>
          </div>
          </div>
        </div>
        </div>
      </div>
      <div class="tab-pane fade" id="layout" role="tabpanel" aria-labelledby="layout-tab">
        <div class="container">
        <div class="row amenity-row">
          <div class="container mt-2 rounded-3">
          <h2 class="mb-4">Layout</h2>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
            <i class="fa fa-water"></i> Waterfront wellness
            community
            </div>
          </div>
          </div>
        </div>
        </div>
      </div>
      <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
        <iframe width="100%" height="450" src="https://www.youtube.com/embed/luDqXPm8z5k?si=0zKrLiH5ub8uyixf"
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
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7224.329489895229!2d55.349745928515816!3d25.130120541815838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f65ea424d2979%3A0x89827b3c2b1db1a6!2sKnightsbridge%20Meydan!5e0!3m2!1sen!2sbd!4v1747580277141!5m2!1sen!2sbd"
        width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    </div>

    <div class="row mt-3">
    <div class="col-12 text-muted">
      <small>January 20, 2025 • 2,385 views</small>
    </div>
    </div>
  </div>


  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

@endsection