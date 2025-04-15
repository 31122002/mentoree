@extends('layouts.homeframe')

@section('authenticator-main')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">

                @if (Session::has('success'))
                <div class="alert alert-success text-center w-100">
                    {{ Session::get('success') }}
                </div>
                @endif

                @if (Session::has('error'))
                <div class="alert alert-danger text-center w-100">
                    {{ Session::get('error') }}
                </div>
                @endif

                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">

                        <div class="row">
                            <div class="brand-logo col-6">
                                <img src="../assets/images/logo-2.png" style="width: 150px;">
                            </div>
                            <div class="col-6 mt-3">
                                <h4>Hello! Let’s get started</h4>
                                <h6 class="font-weight-light">Sign in to continue.</h6>
                            </div>
                        </div>

                        <!-- Tabs -->
                        <div class="container mt-3">
                            <ul class="nav nav-pills d-flex justify-content-evenly mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item col-6 text-center" role="presentation">
                                    <button class="nav-link active" id="pills-mentee-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-mentee" type="button" role="tab" aria-controls="pills-mentee"
                                        aria-selected="true">I'm a Mentee</button>
                                </li>
                                <li class="nav-item col-6 text-center" role="presentation">
                                    <button class="nav-link" id="pills-mentor-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-mentor" type="button" role="tab" aria-controls="pills-mentor"
                                        aria-selected="false">I'm a Mentor</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">
                                <!-- Mentee Tab -->
                                <div class="tab-pane fade show active" id="pills-mentee" role="tabpanel" aria-labelledby="pills-mentee-tab">
                                    <form class="pt-3" action="" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="text" name="email" value="{{ old('email') }}"
                                                class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                id="email" placeholder="Username">
                                            @error('email')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="password">Password:</label>
                                            <input type="password" name="password"
                                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                id="password" placeholder="Password">
                                            @error('password')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="mt-3">
                                            <button type="submit"
                                                class="btn btn-gradient-primary btn-lg w-100 font-weight-medium auth-form-btn">
                                                Submit
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <!-- Mentor Tab -->
                                <div class="tab-pane fade" id="pills-mentor" role="tabpanel" aria-labelledby="pills-mentor-tab">
                                    <form class="pt-3" action="" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="email_mentor">Email:</label>
                                            <input type="text" name="email" value="{{ old('email') }}"
                                                class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                id="email_mentor" placeholder="Username">
                                            @error('email')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="password_mentor">Password:</label>
                                            <input type="password" name="password"
                                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                id="password_mentor" placeholder="Password">
                                            @error('password')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="mt-3">
                                            <button type="submit"
                                                class="btn btn-gradient-primary btn-lg w-100 font-weight-medium auth-form-btn">
                                                Submit
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- tab-content -->
                        </div> <!-- container -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection