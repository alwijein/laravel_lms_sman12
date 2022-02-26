@extends('layouts.auth')

@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v2">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo-->
                        <a class="brand-logo" href="#">
                            <img src="{{ asset('app-assets/images/logo/logo.png') }}" width="40rem" alt="">
                            <h2 class="brand-text text-primary ms-1">SMAN 12</h2>
                        </a>
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img
                                    class="img-fluid"
                                    src={{ asset('app-assets/images/illustrator/teaching_illustrator.svg') }}
                                    alt="Register V2" /></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Register-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <h2 class="card-title fw-bold mb-1">Login dan Mulai Belajar 🚀</h2>
                                <p class="card-text mb-2">Masukkan email dan password anda!</p>
                                <form class="auth-register-form mt-2" action="{{ route('login') }}" method="POST">
                                    @csrf

                                    <div class="mb-1">
                                        <label class="form-label" for="email">Email</label>
                                        <input class="form-control" id="email" type="text" name="email"
                                            placeholder="asep@example.com" aria-describedby="email" tabindex="2" value="{{old('email')}}"/>
                                        @error('email')
                                            <div class="text-danger mt-1">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" id="password" type="password"
                                                name="password" placeholder="············"
                                                aria-describedby="register-password" tabindex="3" value="{{old('password')}}"/><span
                                                class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>

                                        </div>
                                        @error('password')
                                            <div class="text-danger mt-1">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    {{-- <div class="mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" id="register-privacy-policy" type="checkbox"
                                                tabindex="4" />
                                            <label class="form-check-label" for="register-privacy-policy">I agree to<a
                                                    href="#">&nbsp;privacy policy & terms</a></label>
                                        </div>
                                    </div> --}}
                                    <button class="btn btn-primary w-100" tabindex="5" type="submit">Sign up</button>
                                </form>
                            </div>
                        </div>
                        <!-- /Register-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
