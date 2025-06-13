<!-- Top Section -->
<div class="top-section">
    <div class="container" style="background: #031123; padding: 50px; border-radius: 10px;">
        <!-- Logo and Tagline Row -->
        <div class="row align-items-center mb-4">
            <div class="col-12 col-md-2 text-center text-md-start">
                <span class="logo">
                    <img class="img-fluid mb-2" src="{{ asset($siteSettings->footer_logo) }}" alt="footer logo"
                        style="width: 100px; height:100px;">
                </span>
            </div>
            <div class="col-12 col-md-10 tagline text-md-start">
                <h1>{{ $siteSettings->company_name }}</h1>
                <p>{{ $siteSettings->company_subtitle }}</p>
            </div>
        </div>
        <div class="row">
            <hr>
        </div>
        <!-- Main Content Row -->
        <div class="row">
            <!-- Column 1: Corporate Office -->
            <div class="col-12 col-md-4 mb-4">
                <div class="section-title">Corporate Office</div>
                <p>
                    <i class="fas fa-map-marker-alt icon"></i> {{ $siteSettings->office_address }}
                </p>
                <p>
                    <i class="fas fa-envelope icon"></i> {{ $siteSettings->email }}
                </p>
                <p>
                    <i class="fas fa-phone icon"></i> {{ $siteSettings->mobile }}
                </p>
                <p>
                    <i class="fas fa-clock icon"></i> Working Days:
                    <br>{{ $siteSettings->working_days }} <br>{{ $siteSettings->working_hours }}
                </p>
            </div>
            <!-- Column 2: About Us -->
            <div class="col-12 col-md-4 mb-4">
                <div class="section-title">About Us</div>
                <p style="text-align:justify">
                    Founded by an Emirati investor with over a decade of experience in Dubai’s dynamic real estate
                    market, ZAK Realty is a trusted brokerage specializing in off-plan and secondary market properties.
                    With deep local expertise and a client-focused approach, we provide tailored investment solutions,
                    ensuring seamless transactions and maximum returns.
                </p>
            </div>
            <!-- Column 3: Our Categories and Search Bar -->
            <div class="col-12 col-md-4 mb-4">
                <div class="section-title">Our Category</div>
                <ul class="category-list">
                    <li>Apartment</li>
                    <li>Beachfront</li>
                    <li>Gated community</li>
                    <li>Undeveloped</li>
                    <li>Villa</li>
                </ul>
                <div class="search-bar">
                    <form action="{{ route('search') }}" method="GET">
                        <input type="text" name="query" placeholder="Search properties...">
                        <button type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <hr>
        </div>
    </div>
</div>
<!-- Footer Section -->
<footer>
    <div class="container" style="background: #031123; padding: 50px; border-radius: 10px;">
        <div class="row align-items-center">
            <!-- Left Side: Social Media Icons -->
            <div class="col-12 col-md-6 text-center text-md-start">
                @foreach ($socialLinks as $link)
                    <a href="{{ $link->url }}" target="_blank"><i class="{{ $link->icon_class }}"></i></a>
                @endforeach
            </div>
            <!-- Right Side: Copyright Text -->
            <div class="col-12 col-md-6 text-center text-md-end">
                <p class="footer-text">© {{ date('Y') }} {{ $siteSettings->company_name }} Powered by
                    {{ $siteSettings->powered_by }}</p>
            </div>
        </div>
    </div>
</footer>
