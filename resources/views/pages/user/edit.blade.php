@extends('layouts.app')

@section('title', 'Edit User')

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
                    <a href="features-posts.html"
                        class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <h1>Edit User</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Posts</a></div>
                    <div class="breadcrumb-item">Edit User</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Edit User</h2>
                <p class="section-lead">
                    On this page you can create a new post and fill in all fields.
                </p>

                <div class="row">
                    <form action="{{ route('user.update', $user->id) }}" method="POST" class="col-12 ">
                        @method('PUT')
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h4>Input Text</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" value="{{ $user->name }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Your E-mail</label>
                                    <input type="email" name="email" value="{{ $user->email }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number (US Format)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                        </div>
                                        <input type="number" name="phone" value="{{ $user->phone }}"
                                            class="form-control phone-number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-lock"></i>
                                            </div>
                                        </div>
                                        <input type="password" name="password"
                                            class="form-control pwstrength"
                                            data-indicator="pwindicator">
                                    </div>
                                    <div id="pwindicator"
                                        class="pwindicator">
                                        <div class="bar"></div>
                                        <div class="label"></div>
                                    </div>
                                </div>
                                <div class="section-title">Select User Role</div>
                                <div class="form-group">
                                    <label class="form-label"></label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio"
                                                name="role"
                                                value="user"
                                                class="selectgroup-input"
                                                @if($user->role == 'user')
                                                checked
                                                @endif>
                                            <span class="selectgroup-button">user</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio"
                                                name="role"
                                                value="staff"
                                                class="selectgroup-input"
                                                @if($user->role == 'staff')
                                                checked
                                                @endif>
                                            <span class="selectgroup-button">staff</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio"
                                                name="role"
                                                value="admin"
                                                class="selectgroup-input"
                                                @if($user->role == 'admin')
                                                checked
                                                @endif>
                                            <span class="selectgroup-button">admin</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12"></label>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Create Post</button>
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
    <script src="{{ asset('js/page/features-post-create.js') }}"></script>
@endpush
