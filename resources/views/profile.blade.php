@extends('layouts.app')

@section('page_title', 'Profile')

@section('page_styles')

@endsection

@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">Profile</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('profile') }}">Profile</a>
                            </li>
                            <li class="breadcrumb-item active">Index
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Kick start -->
        <div class="">
            <!-- Basic table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-0">
                            <div class="row">
                                <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                                    <!-- User Card -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="user-avatar-section">
                                                <div class="d-flex align-items-center flex-column">
                                                    <img class="img-fluid rounded mt-3 mb-2"
                                                        src="{{ asset($user->profile != null ? $user->profile : 'app-assets/images/portrait/small/avatar-s-11.jpg') }}"
                                                        height="110" width="110" alt="User avatar" />
                                                    <div class="user-info text-center">
                                                        <h4 class="text-capitalize">{{ $user->first_name }}
                                                            {{ $user->last_name }}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <h4 class="fw-bolder border-bottom pb-50 mb-1">Details</h4>
                                            <div class="info-container">
                                                <ul class="list-unstyled">
                                                    <li class="mb-75">
                                                        <span class="fw-bolder me-25">Name:</span>
                                                        <span>{{ $user->first_name }} {{ $user->last_name }}</span>
                                                    </li>
                                                    <li class="mb-75">
                                                        <span class="fw-bolder me-25">Email:</span>
                                                        <span>{{ $user->email }}</span>
                                                    </li>
                                                    <li class="mb-75">
                                                        <span class="fw-bolder me-25">Contact:</span>
                                                        <span>{{ $user->phone }}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-body">

                                            <div>

                                                <form class="form-horizontal" method="POST"
                                                    action="{{ route('profile-update') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-12 col-md-6 mb-2">
                                                            <label class="form-label" for="first_name">First Name</label>
                                                            <input type="text" id="first_name" name="first_name"
                                                                class="form-control" placeholder="John"
                                                                value="{{ $user->first_name ?? '' }}" />
                                                            @error('first_name')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12 col-md-6 mb-2">
                                                            <label class="form-label" for="last_name">Last Name</label>
                                                            <input type="text" id="last_name" name="last_name"
                                                                class="form-control" placeholder="John"
                                                                value="{{ $user->last_name ?? '' }}" />
                                                            @error('last_name')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12 mb-2">
                                                            <label class="form-label" for="phone">Phone
                                                                Number</label>
                                                            <input type="tel" id="phone" name="phone"
                                                                class="form-control" placeholder="Phone"
                                                                value="{{ $user->phone ?? '' }}" />
                                                            @error('phone')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12 mb-2">
                                                            <div class="mb-1">
                                                                <label for="customFile" class="form-label">Profile
                                                                    pic</label>
                                                                <input class="form-control" type="file" id="customFile"
                                                                    name="profile">
                                                                @error('profile')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                            <!-- /.tab-pane -->

                                            <!-- /.tab-content -->
                                        </div><!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.col -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection

@section('pagelevel_scripts')
    <script src="{{ asset('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        })
    </script>

@endsection
