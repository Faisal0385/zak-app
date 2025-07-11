@extends('admin.master-layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <a class="btn btn-sm btn-primary" href="{{ route('social.link.index') }}">Back</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
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
            <div class="col-lg-8">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="color: black">
                            <b>Add Social Links</b>
                        </h4>
                        <hr class="m-1" />
                        <form id="myForm" method="POST" action="{{ route('social.link.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <label for="icon_class" class="col-form-label">Icon Class</label>
                                    <div class="form-group">
                                        <input type="text" name="icon_class" id="icon_class"
                                            class="form-control form-control-sm" placeholder="Icon Class" />
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="platform" class="col-form-label">Platform</label>
                                    <div class="form-group">
                                        <input type="text" name="platform" id="platform"
                                            class="form-control form-control-sm" placeholder="Platform" />
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="url" class="col-form-label">URL</label>
                                <div class="form-group">
                                    <textarea name="url" id="url" class="form-control form-control-sm" placeholder="URL">#</textarea>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-sm btn-info waves-effect waves-light" value="Add" />
                        </form>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
    </div>
    <!--end page wrapper -->
@endsection
