@extends('client.master-layout')

@section('content')
    <div class="container-fluid mx-0 px-0">
        <!-- contact Us Section -->
        <section class="about-section" style="background-image: url('{{ asset($siteSettings->banner_image) }}');">
            <h1>Contact Us</h1>
        </section>
    </div>

    <div class="container my-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-2">
                    <div class="card-body">
                        <h5 class="card-title">{{ $siteSettings->company_name }}</h5>
                        <p>
                            <strong>Corporate Office:</strong> {{ $siteSettings->office_address }}<br />
                            <strong>Email:</strong> {{ $siteSettings->email }}<br />
                            <strong>Mobile:</strong> {{ $siteSettings->mobile }}
                        </p>
                        <div class="map-section">
                            <!-- Placeholder for map -->
                            <iframe src="{{ $siteSettings->google_map_iframe }}" width="100%" height="450"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Contact us</h5>
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Full Name" required />
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Mobile Number" required />
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email Address" required />
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" placeholder="Your Message" rows="4" required></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Type: 4316" required />
                                <p class="text-danger">
                                    Please type the number 4316 in the box below to accept your
                                    submission.
                                </p>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
