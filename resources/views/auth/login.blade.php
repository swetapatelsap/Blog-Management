@extends('layouts.auth-master')

@section('content')
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                         class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="post" action="{{ route('login.perform') }}">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0"></p>
                        </div>
                        @include('layouts.partials.messages')
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="text" class="form-control form-control-lg" name="email"
                                   value="{{ old('email') }}" placeholder="email" required="required" autofocus>
                            <label class="form-label" for="form3Example3">Email address</label>
                            @if ($errors->has('email'))
                                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                            @endif

                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" class="form-control form-control-lg" name="password"
                                   value="{{ old('password') }}" placeholder="Password" required="required">
                            <label class="form-label" for="form3Example4">Password</label>
                            @if ($errors->has('password'))
                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                            @endif

                        </div>


                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login
                            </button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a
                                    href="{{route('register.show')}}"
                                    class="link-danger">Register</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div
            class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                @include('auth.partials.copy')
            </div>
            <!-- Copyright -->
        </div>
    </section>
@endsection
