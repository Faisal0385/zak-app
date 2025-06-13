    <div class="container-fluid p-0">
        <div class="row m-1">
            <div class="col-lg-12 p-0">
                <div id="propertyCarousel" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">
                        @foreach ($sliders as $key => $slider)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <img src="{{ asset($slider->image) }}" class="d-block w-100 rounded"
                                    alt="{{ $slider->title }}" />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{ $slider->title }}</h5>
                                    <p><i class="fa-solid fa-magnifying-glass"></i> {{ $slider->sub_title }}</p>
                                </div>
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
            </div>
        </div>
    </div>
