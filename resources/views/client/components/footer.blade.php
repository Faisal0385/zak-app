<!-- Top Section -->
<div class="top-section">
    <div class="container" style="background: #031123; padding: 50px; border-radius: 10px;">
        <!-- Logo and Tagline Row -->
        <div class="row align-items-center mb-4">
            <div class="col-12 col-md-2 text-center text-md-start">
                <span class="logo">
                    <img class="img-fluid mb-2" src="./assets/images/footer-logo.png" alt=""
                        style="width: 100px; height:100px;">
                </span>
            </div>
            <div class="col-12 col-md-10 tagline text-md-start">
                <h1>ZAK REALTY</h1>
                We are proudly selling luxury properties for more than 25 years.<br>
                We'll fulfill your dreams more than anything else.
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
                    <i class="fas fa-map-marker-alt icon"></i> Business Bay, Dubai
                </p>
                <p>
                    <i class="fas fa-envelope icon"></i> info@zakrealty.ae
                </p>
                <p>
                    <i class="fas fa-phone icon"></i> +971-50-582-1322 &nbsp; +971-56-430-0409
                </p>
                <p>
                    <i class="fas fa-clock icon"></i> Working Days:
                    <br>Monday to Friday <br>10.00 AM to 5:00 PM
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
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <!-- Right Side: Copyright Text -->
            <div class="col-12 col-md-6 text-center text-md-end">
                <p class="footer-text">©2025 ZAK Realty Powered by KAF TECH BD</p>
            </div>
        </div>
    </div>
</footer>