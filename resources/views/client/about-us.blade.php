@extends('client.master-layout')

@section('content')
  <div class="container-fluid mx-0 px-0">
    <!-- About Us Section -->
    <section class="about-section" style="background-image: url('{{ asset('assets/images/about-us.webp') }}');">
    <h1>About Us</h1>
    </section>
  </div>

  <div class="container py-5">
    <div class="text-center mb-4">
    <h2 class="about-us-title">Our Story</h2>
    <p class="text-muted">
      <img src="./assets/images/download.png" alt="">
    </p>
    </div>
    <div class="row">
    <div class="col-12 mb-4">
      <p style="text-align: justify;">{{ $aboutDetails->mission }}</p>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6">
      <h3 class="about-us-title">Mission</h3>
      <p style="text-align: justify;">{{ $aboutDetails->mission }}</p>
    </div>

    <div class="col-md-6">
      <h3 class="about-us-title">Vision</h3>
      <p style="text-align: justify;">{{ $aboutDetails->vision }}</p>
    </div>
    </div>
  </div>

  <!-- <div class="container py-3">
          <div class="text-center mb-4">
            <h2 class="about-us-title">Meet our Management</h2>
            <p class="text-muted">
            <img src="./assets/images/download.png" alt="">
            </p>
          </div>
          <div class="row">
            <div class="col-md-3 text-center mb-4">
            <div class="managment border rounded-2 p-2 bg-white">
            <img src="./assets/images/Abdullah-Syed.webp" width="100%" height="350" class="rounded mb-3" alt="Osman Syed">
            <h5>Osman Syed</h5>
            <p class="text-muted">Managing Director</p>
            <div>
            <a href="#" class="text-primary me-2"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-primary me-2"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-danger"><i class="fab fa-youtube"></i></a>
            </div>
            </div>
            </div>
            <div class="col-md-3 text-center mb-4">
            <div class="managment border rounded-2 p-2 bg-white">
            <img src="./assets/images/Abdullah-Syed.webp" width="100%" height="350" class="rounded mb-3" alt="Osman Syed">
            <h5>Osman Syed</h5>
            <p class="text-muted">Managing Director</p>
            <div>
            <a href="#" class="text-primary me-2"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-primary me-2"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-danger"><i class="fab fa-youtube"></i></a>
            </div>
            </div>
            </div>
            <div class="col-md-3 text-center mb-4">
            <div class="managment border rounded-2 p-2 bg-white">
            <img src="./assets/images/Abdullah-Syed.webp" width="100%" height="350" class="rounded mb-3" alt="Osman Syed">
            <h5>Osman Syed</h5>
            <p class="text-muted">Managing Director</p>
            <div>
            <a href="#" class="text-primary me-2"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-primary me-2"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-danger"><i class="fab fa-youtube"></i></a>
            </div>
            </div>
            </div>
            <div class="col-md-3 text-center mb-4">
            <div class="managment border rounded-2 p-2 bg-white">
            <img src="./assets/images/Abdullah-Syed.webp" width="100%" height="350" class="rounded mb-3" alt="Osman Syed">
            <h5>Osman Syed</h5>
            <p class="text-muted">Managing Director</p>
            <div>
            <a href="#" class="text-primary me-2"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-primary me-2"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-danger"><i class="fab fa-youtube"></i></a>
            </div>
            </div>
            </div>
          </div>
          </div> -->


  <div class="container py-3">
    <div class="text-center mb-4">
    <h2 class="about-us-title">Experience ZAK Realty</h2>
    <p class="text-muted">
      <img src="./assets/images/download.png" alt="">
    </p>
    </div>
    <div class="row">
    <div class="col-lg-12">
      <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
        <div class="ratio ratio-16x9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $aboutDetails->video_link }}"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen>
          </iframe>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
@endsection