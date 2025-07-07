<nav class="navbar navbar-expand-lg" style="background-color: #011835">
    <div class="container-fluid">
        <a class="navbar-brand mx-2" href="/">
            <img src="{{ !empty($siteSettings?->header_logo) ? asset($siteSettings?->header_logo) : asset('no_image.jpg') }}"
                alt="" height="60px" />
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
                    <a class="nav-link text-white" href="{{ route('about.index') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('properties.list') }}">Our Properties</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('contact.view') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
