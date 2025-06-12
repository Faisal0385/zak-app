@extends('client.master-layout')

@section('content')
    @include('client.home.carousel')
    <div class="container">
        <div class="row">
            <section class="text-center p-5">
                <div class="container">
                    <h1 class="section-header mb-3">Browse Properties By Categories</h1>
                    <p class="lead">
                        Looking to buy a new property? Have doubt in which city to settle.
                        Do not hesitate, search properties in all cities. Choose a better
                        one for you.
                    </p>
                </div>
            </section>
        </div>
        <div class="row">
            <div class="container bg-white p-4 rounded">
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-3 mb-1">
                        <div class="row g-0 shadow-sm p-1 rounded">
                            <div class="col-md-4">
                                <img src="./assets/images/properties-by-cities.png" class="img-fluid rounded mr-5" alt="..."
                                    style="height: 100%;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-3">
                                    <h6 class="card-title mb-0">Villa</h6>
                                    <p class="card-text"><small class="text-body-secondary">5 properties</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 mb-1">
                        <div class="row g-0 shadow-sm p-1 rounded">
                            <div class="col-md-4">
                                <img src="./assets/images/properties-by-cities-2.png" class="img-fluid rounded mr-5"
                                    alt="..." style="height: 100%;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-3">
                                    <h6 class="card-title mb-0">Townhouse</h6>
                                    <p class="card-text"><small class="text-body-secondary">5 properties</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 mb-1">
                        <div class="row g-0 shadow-sm p-1 rounded">
                            <div class="col-md-4">
                                <img src="./assets/images/properties-by-cities.png" class="img-fluid rounded mr-5" alt="..."
                                    style="height: 100%;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-3">
                                    <h6 class="card-title mb-0">Apartment</h6>
                                    <p class="card-text"><small class="text-body-secondary">5 properties</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 mb-1">
                        <div class="row g-0 shadow-sm p-1 rounded">
                            <div class="col-md-4">
                                <img src="./assets/images/properties-by-cities-2.png" class="img-fluid rounded mr-5"
                                    alt="..." style="height: 100%;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-3">
                                    <h6 class="card-title mb-0">Beachfront</h6>
                                    <p class="card-text"><small class="text-body-secondary">5 properties</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        We have thousands of properties ready for sale, browse your
                        favorite home and book immediately
                    </p>
                </div>
            </section>
        </div>
        <div class="row mb-3">

            @foreach ($projects as $project)
                <div class="col-lg-4">
                    <div class="card shadow-sm m-1">
                        <div class="position-relative">
                            <img src="./assets/images/project-img.png" class="card-img-top" alt="Property Image" />
                            @if ($project->is_featured == 1)
                            <!-- <span class="badge badge-featured position-absolute top-0 start-0 m-2 text-white">Featured</span> -->
                            <span class="badge badge-featured position-absolute top-0 end-0 m-2 text-white">Featured</span>
                            @endif
                            <!-- <span class="badge badge-rent position-absolute top-0 end-0 m-2 text-white">For Sale</span> -->
                            <div class="position-absolute bottom-0 start-0 m-2 d-flex gap-2">
                                <!-- <button class="btn btn-dark btn-sm">
                                    <i class="fa fa-image"></i>
                                </button> -->
                                <button class="btn btn-danger btn-sm">
                                    <i class="fa fa-heart"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->project_name  }}</h5>
                            <!-- <p class="card-text mb-2">
                                <i class="bi bi-geo-alt"></i> MEYDAN DISTRICT 11
                            </p> -->
                            <hr />
                            <div class="mt-2">
                                <a href="{{ route('single.property.list', $project->slug) }}" class="btn custom-secondary-btn">
                                    Details
                                </a>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-person-circle me-1"></i>
                                    <small>{{ $project->developer_name  }}</small>
                                </div>
                                <!-- <small>January 20, 2017</small> -->
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach




            <!-- <div class="col-lg-4">
                        <div class="card shadow-sm m-1">
                            <div class="position-relative">
                                <img src="./assets/images/project-img.png" class="card-img-top" alt="Property Image" />
                                <span class="badge badge-featured position-absolute top-0 start-0 m-2 text-white">Featured</span>
                                <span class="badge badge-rent position-absolute top-0 end-0 m-2 text-white">For Sale</span>
                                <div class="position-absolute bottom-0 start-0 m-2 d-flex gap-2">
                                    <button class="btn btn-dark btn-sm">
                                        <i class="fa fa-image"></i>
                                    </button>
                                    <button class="btn btn-dark btn-sm">
                                        <i class="fa fa-star"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">KNIGHTSBRIDGE</h5>
                                <p class="card-text mb-2">
                                    <i class="bi bi-geo-alt"></i> MEYDAN DISTRICT 11
                                </p>
                                <hr />
                                <div class="mt-2">
                                    <a href="./single-projects.html" class="btn custom-secondary-btn">
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
                                    <small>January 20, 2017</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card shadow-sm m-1">
                            <div class="position-relative">
                                <img src="./assets/images/Chelsea_Residences-Homepage_Hero_16x9.jpg" class="card-img-top"
                                    alt="Property Image" />
                                <span class="badge badge-featured position-absolute top-0 start-0 m-2 text-white">Featured</span>
                                <span class="badge badge-rent position-absolute top-0 end-0 m-2 text-white">For Sale</span>
                                <div class="position-absolute bottom-0 start-0 m-2 d-flex gap-2">
                                    <button class="btn btn-dark btn-sm">
                                        <i class="fa fa-image"></i>
                                    </button>
                                    <button class="btn btn-dark btn-sm">
                                        <i class="fa fa-star"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Chelsea Residences</h5>
                                <p class="card-text mb-2">
                                    <i class="bi bi-geo-alt"></i> Dubai Maritime City - Dubai
                                </p>
                                <hr />
                                <div class="mt-2">
                                    <a href="./single-projects-chelsea.html" class="btn custom-secondary-btn">
                                        Details
                                    </a>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person-circle me-1"></i>
                                        <small>DAMAC PROPERT IES </small>
                                    </div>
                                    <small>January 20, 2017</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow-sm m-1">
                            <div class="position-relative">
                                <img src="./assets/images/REEF-999.jpg" class="card-img-top" alt="Property Image" />
                                <span class="badge badge-featured position-absolute top-0 start-0 m-2 text-white">Featured</span>
                                <span class="badge badge-rent position-absolute top-0 end-0 m-2 text-white">For Sale</span>
                                <div class="position-absolute bottom-0 start-0 m-2 d-flex gap-2">
                                    <button class="btn btn-dark btn-sm">
                                        <i class="fa fa-image"></i>
                                    </button>
                                    <button class="btn btn-dark btn-sm">
                                        <i class="fa fa-star"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">REEF 999</h5>
                                <p class="card-text mb-2">
                                    <i class="bi bi-geo-alt"></i> AL Furjan, Dubai
                                </p>
                                <hr />
                                <div class="mt-2">
                                    <a href="./single-projects-reef.html" class="btn custom-secondary-btn">
                                        Details
                                    </a>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person-circle me-1"></i>
                                        <small>REEF Developer</small>
                                    </div>
                                    <small>January 20, 2017</small>
                                </div>
                            </div>
                        </div>
                    </div> -->
        </div>
    </div>
@endsection