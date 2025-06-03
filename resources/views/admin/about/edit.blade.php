@extends('admin.master-layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="color: black">
                            <b>About </b>
                        </h4>
                        <hr class="m-1" />
                        <form id="myForm" enctype="multipart/form-data" method="POST"
                            action="{{ route('about.update', $aboutpage->id) }}">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="col-form-label">Page Title</label>
                                <div class="form-group">
                                    <input type="text" name="title" id="title" class="form-control form-control-sm"
                                        placeholder="Page Title" value="{{ $aboutpage->page_title }}" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="our_story" class="col-form-label">Our Story</label>
                                <div class="form-group">
                                    <textarea type="text" name="our_story" id="our_story" class="form-control form-control-sm" placeholder="Our Story">{{ $aboutpage->our_story }}</textarea>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="mission" class="col-form-label">Mission</label>
                                <div class="form-group">
                                    <textarea type="text" name="mission" id="mission" class="form-control form-control-sm" placeholder="Mission">{{ $aboutpage->mission }}</textarea>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="vision" class="col-form-label">Vision</label>
                                <div class="form-group">
                                    <textarea type="text" name="vision" id="vision" class="form-control form-control-sm" placeholder="Vision">{{ $aboutpage->vision }}</textarea>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="video_link" class="col-form-label">Video Link</label>
                                <div class="form-group">
                                    <textarea type="text" name="video_link" id="video_link" class="form-control form-control-sm"
                                        placeholder="Video Link">{{ $aboutpage->video_link }}</textarea>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="banner_image" class="mb-2">Banner Image</label>
                                <input type="file" class="mb-2 form-control form-control-sm" id="image"
                                    name="banner_image" accept="image/png, image/jpg, image/jpeg, image/svg+xml, image/webp"
                                    onchange="showPreview(event)" />
                                <div class="preview">
                                    <img src="{{ $aboutpage->banner_image ? asset($aboutpage->banner_image) : asset('no_image.jpg') }}"
                                        class="img img-thumbnail" id="file-ip-1-preview" width="150px" height="80px" />
                                </div>
                            </div>

                            <input type="submit" class="btn btn-sm btn-info waves-effect waves-light" value="Update" />
                        </form>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
    </div>
@endsection
