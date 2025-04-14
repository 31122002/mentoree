@extends('layouts.homeframe')

@section('authenticator-main')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                @if (Session::has('success'))
                <div class="alert text-center alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif
                @if (Session::has('error'))
                <div class="alert text-center alert-danger">
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
                                <h4>Hello! let's get started</h4>
                                <h6 class="font-weight-light">Sign in to continue.</h6>
                            </div>
                        </div>
                        <form class="pt-3" action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="email" value="{{ old('email') }}"
                                    class="form-control form-control-lg @error('email') is-invalid  @enderror"
                                    id="email" placeholder="Username">
                                @error('email')
                                <p class="invalid-feedback">{{ $message }} </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid  @enderror"
                                    id="password" placeholder="Password">
                                @error('password')
                                <p class="invalid-feedback">{{ $message }} </p>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <button type="submit"
                                    class="btn w-100 btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@endsection