@extends('layouts.app')

@section('title', 'Create New product')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <div class="section-header-back">
                    <a href="features-products.html"
                        class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <h1>Create New product</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">products</a></div>
                    <div class="breadcrumb-item">Create New product</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Create New product</h2>
                <p class="section-lead">
                    On this page you can create a new product and fill in all fields.
                </p>

                <div class="row">
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="col-12 ">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h4>Input Text</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Product name</label>
                                    <input type="text" name="name"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="description"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Product Stock</label>
                                    <input type="number" name="stock"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Product Price</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                $
                                            </div>
                                        </div>
                                        <input type="text" name="price"
                                            class="form-control currency">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-form-label text-md-right ">Thumbnail</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div id="image-preview"
                                            class="image-preview">
                                            <label for="image-upload"
                                                id="image-label">Choose File</label>
                                            <input type="file"
                                                name="image"
                                                id="image-upload" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12"></label>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Create product</button>
                                    </div>
                                </div>

                            </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/summernote/dist/summernote-bs4.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/upload-preview/upload-preview.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-product-create.js') }}"></script>
@endpush
