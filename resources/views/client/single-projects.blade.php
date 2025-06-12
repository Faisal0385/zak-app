<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ZakRealty</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />

  <style>
    body {
      font-family: "Poppins", sans-serif;
      font-weight: 400;
      font-style: normal;
    }

    /* Custom styles for the section */
    .about-section {
      background-image: url("./assets/images/about-us.webp");
      background-size: cover;
      background-position: center;
      height: 400px;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      text-align: center;
      background-color: rgba(0, 0, 0, 0.5);
      background-blend-mode: overlay;
    }

    .about-section h1 {
      font-size: 3rem;
      font-weight: bold;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .card-img-top {
      height: 200px;
      object-fit: cover;
    }

    .badge-featured {
      background-color: #007bff;
    }

    .badge-rent {
      background-color: #343a40;
    }

    .price {
      color: #007bff;
      font-weight: bold;
    }

    .carousel-item img {
      height: 60vh;
      object-fit: cover;
    }

    .carousel-caption {
      background-color: rgba(0, 0, 0, 0.7);
      padding: 10px;
      border-radius: 5px;
    }

    /* Hide content initially */
    #main-content {
      display: none;
    }

    /* Modal backdrop styling */
    .modal-backdrop {
      z-index: 1040 !important;
    }

    .modal {
      z-index: 1050 !important;
    }

    .custom-secondary-btn {
      width: 100%;
      border: 2px solid #2e7d7d;
      color: #2e7d7d;
      background-color: transparent;
      border-radius: 5px;
      padding: 8px 20px;
      font-size: 16px;
      font-weight: 400;
      transition: all 0.3s ease;
    }

    .custom-secondary-btn:hover {
      background-color: #2e7d7d;
      color: white;
      text-decoration: none;
    }

    .footer-categories li a {
      color: white;
      text-decoration: none;
    }
  </style>
</head>

<body style="background-color: #f9f1e0">

  <!-- Main Content -->
  <nav class="navbar navbar-expand-lg" style="background-color: #011835">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="./assets/images/main-logo.png" alt="" height="60px" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
        style="background-color: #faf1e0">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-white active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="./about-us.html">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Our Properties</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="./contact.html">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid p-0">
    <div class="row m-1">
      <div class="col-lg-12 p-0">
        <div id="propertyCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./assets/images/kingsbridge/KB_Images-for-web-app-4-BED-TH-FRONT.webp"
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
              <img src="./assets/images/kingsbridge/nautrax5.webp" class="d-block w-100 rounded" alt="Knightsbridge" />
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
      <section class="text-center p-5">
        <div class="container">
          <h1 class="section-header mb-3">Recently Added Properties</h1>
          <p class="lead">
            Looking to buy a new property? Have doubt in which city to settle.
            Do not hesitate, search properties in all cities. Choose a better
            one for you.
          </p>
        </div>
      </section>
    </div>
    <div class="row m-5">
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

      <div class="col-lg-4">
        <div class="card shadow-sm m-1">
          <div class="position-relative">
            <img src="./assets/images/kingsbridge/KB_Images-for-web-app-5-BEDS-VILLA-FRONT-P1.webp" class="card-img-top"
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
            <img src="./assets/images/kingsbridge/KB_Images-for-web-app-6-BEDS-VILLA-FRONT-P1.webp" class="card-img-top"
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
            <img src="./assets/images/kingsbridge/nautrax1.webp" class="card-img-top" alt="Property Image"
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
            <img src="./assets/images/kingsbridge/nautrax4.webp" class="card-img-top" alt="Property Image"
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
      </div>

    </div>
  </div>

  <!-- Footer Section -->
  <div class="container-fliud text-white p-5" style="background-color: #011835">
    <div class="row">
      <!-- Logo Section -->
      <div class="col-md-4 logo-section">
        <h1>ZAK REALTY</h1>
        <img class="img-fluid mb-2" src="./assets/images/footer-logo.png" alt="" style="width: 100px; height:100px;">
        <p>
          We are proudly selling luxury properties for more than 25 years. We fulfil your dreams more than anything
          else.
        </p>
        <p>
          <strong>Corporate Office:</strong> Floor-1, Al Diyar Business Centre. Business Bay, Dubai.<br />
          <strong>Email:</strong> info@zakrealty.co<br />
          <strong>Mobile:</strong> +971-50-582-1332, +971-56-430-4059<br />
          <strong>Working Days:</strong> Monday to Friday 10:00 AM to 5:00 PM
        </p>
      </div>

      <!-- About Us Section -->
      <div class="col-md-4 about-us">
        <h2>About Us</h2>
        <p style="text-align: justify;">Founded by an Emirati investor with over a decade of experience in Dubai’s
          dynamic real estate market, ZAK
          Realty is a trusted brokerage specializing in off-plan and secondary market properties. With deep local
          expertise and a client-focused approach, we provide tailored investment solutions, ensuring seamless
          transactions and maximum returns.</p>
        <p>Your Vision. Our Expertise. Dubai’s Future.</p>
        <p>Welcome to ZAK Realty – Where Real Estate Dreams Take Shape.</p>
      </div>

      <!-- Categories Section -->
      <div class="col-md-4 categories">
        <h2>Our Categories</h2>
        <ul class="footer-categories">
          <li><a href="#">Apartment</a></li>
          <li><a href="#">Clients</a></li>
          <li><a href="#">Green</a></li>
          <li><a href="#">Mountain</a></li>
          <li><a href="#">Real Estates</a></li>
          <li><a href="#">Uncategorized</a></li>
          <li><a href="#">Villa</a></li>
        </ul>
        <div class="search-bar d-flex px-3">
          <input type="text" class="form-control" placeholder="What are you looking?" />
          <button class="btn btn-warning mx-1">Search</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Section -->
  <footer class="bg-dark text-white text-center p-3">
    <div class="container">
      <p class="mb-0">©2025 ZAK Realty Powered by KAF TECH BD</p>
      <div class="mt-2">
        <a href="https://www.instagram.com/zakrealty.uae/" class="text-white me-3" target="_blank"><i
            class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/zakrealty.uae/" class="text-white me-3" target="_blank"><i
            class="fab fa-facebook"></i></a>
        <a href="#" class="text-white me-3"><i class="fab fa-linkedin"></i></a>
        <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
      </div>
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.js"></script>

</body>

</html>