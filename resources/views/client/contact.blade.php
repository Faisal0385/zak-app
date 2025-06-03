@extends('client.master-layout')

@section('content')
    <div class="container-fluid mx-0 px-0">
        <!-- contact Us Section -->
        <section class="about-section" style="background-image: url('{{ asset('assets/images/about-us.webp') }}');">
            <h1>Contact Us</h1>
        </section>
    </div>

    <div class="container my-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-2">
                    <div class="card-body">
                        <h5 class="card-title">Zak Realty</h5>
                        <p>
                            <strong>Corporate Office:</strong> Floor-1, Al Diyar Business Centre. Business Bay, Dubai.<br />
                            <strong>Email:</strong> info@zakrealty.co<br />
                            <strong>Mobile:</strong> +971-50-582-1332, +971-56-430-4059
                        </p>
                        <div class="map-section">
                            <!-- Placeholder for map -->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57783.170644027916!2d55.24021836953121!3d25.154340938278512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f682def25f457%3A0x3dd4c4097970950e!2sBusiness%20Bay%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sbd!4v1746889057209!5m2!1sen!2sbd"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
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
