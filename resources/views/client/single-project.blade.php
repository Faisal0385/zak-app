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
    </style>

    @if (!session('lead_submitted') || session('lead_expires_at') < now()->timestamp)
        <!-- Modal with Form -->
        <div class="modal fade" id="accessFormModal" tabindex="-1" aria-labelledby="accessFormModalLabel" aria-hidden="true"
            data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-top">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="accessFormModalLabel">
                            Please Fill Out the Form
                        </h5>
                    </div>
                    <div class="row">
                        <div class="col">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Validation Error:</strong>
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="modal-body">
                        <form id="accessForm" action="{{ route('lead.form.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" required
                                    placeholder="Enter your name" />
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter your email" />
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" class="form-control" name="phone" required
                                    placeholder="Enter your phone number" />
                            </div>
                            <div class="mb-3">
                                <label for="property_type_id" class="form-label">Property Type</label>
                                <select name="property_type_id" class="form-control" required>
                                    <option value="">-- Select --</option>
                                    @foreach ($propertyTypes as $propertyType)
                                        <option value="{{ $propertyType->id }}">{{ $propertyType->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="budget" class="form-label">Budget</label>
                                <select name="budget" class="form-control" required>
                                    <option value="">-- Select Budget --</option>
                                    <option value="Under 500K AED">Under 500K AED</option>
                                    <option value="500K - 1M AED">500K - 1M AED</option>
                                    <option value="1M - 2M AED">1M - 2M AED</option>
                                    <option value="Above 2M AED">Above 2M AED</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Header -->
    <div class="header-bg">
        <div>
            <h1>{{ $project->project_name }}</h1>
            <p>
                <a href="{{ route('home') }}" class="text-white">{{ $siteSettings->company_name }}</a>
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <section class="text-center p-5">
                    <div class="container">
                        <h1 class="section-header mb-3">Properties Found ({{ $count }})</h1>
                        <p class="lead">
                            Looking to buy a new property? Have doubt in which city to settle.
                            Do not hesitate, search properties in all cities. Choose a better
                            one for you.
                        </p>
                    </div>
                </section>
            </div>
        </div>


        <div class="row m-5">
            @foreach ($properties as $property)
                <div class="col-lg-4">
                    <div class="card shadow-sm m-1">
                        <div class="position-relative">
                            <img src="{{ !empty($property->featured_image) ? asset($property->featured_image) : asset('no_image.jpg') }}"
                                class="card-img-top" alt="Property Image" />
                            @if ($property->is_featured == 1)
                                <span
                                    class="badge badge-featured position-absolute top-0 end-0 m-2 text-white">Featured</span>
                            @endif
                            <div class="position-absolute bottom-0 start-0 m-2 d-flex gap-2">
                                <button class="btn btn-danger btn-sm">
                                    <i class="fa fa-heart"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text mb-1">{{ $property->propertyType?->name }}</p>
                            <h5 class="card-title">{{ $property->property_name }}</h5>
                            <p class="card-text mb-2">
                                <i class="fa fa-bed me-1"></i> {{ $property->bedroom }} Bedrooms
                                {{ $property->propertyType?->name }}
                            </p>
                            {{-- --}}
                            @if ($property->price_on_call == 'yes')
                                <p class="price mb-2">Call For Price</p>
                            @else
                                <p class="price mb-2">Starting Price: {{ $property->before_price_label }}
                                    {{ $property->price }}
                                    {{ $property->price_unit }}
                                </p>
                            @endif

                            <p class="price mb-2"></p>
                            <p class="card-text mb-2">
                                <i class="bi bi-geo-alt"></i> {{ $property->city?->name }}
                            </p>
                            <hr />
                            <div class="mt-2">
                                <a href="{{ route('property.detail', $property->id) }}" class="btn custom-secondary-btn">
                                    Details
                                </a>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-person-circle me-1"></i>
                                    <small>{{ $property->project?->developer_name }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        // Show modal on page load
        document.addEventListener("DOMContentLoaded", function() {
            const modal = new bootstrap.Modal(
                document.getElementById("accessFormModal"), {
                    backdrop: "static",
                    keyboard: false,
                }
            );
            modal.show();
        });
    </script>
@endsection
