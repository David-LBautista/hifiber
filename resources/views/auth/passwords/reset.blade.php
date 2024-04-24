@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column flex-root auth-body" id="kt_app_root">
        <!--begin::Page bg image-->

        <!--end::Page bg image-->
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-column-fluid flex-lg-row">
            <!--begin::Aside-->
            <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
                <!--begin::Aside-->
                <div class="d-flex flex-center flex-lg-start flex-column">
                    <!--begin::Logo-->
                    <a href="/" class="mb-7">
                        <img alt="Logo" width="300" src="{{ asset('assets/img/hifiber_logo.png') }}">
                    </a>
                    <!--end::Logo-->
                    <!--begin::Title-->

                    <!--end::Title-->
                </div>
                <!--begin::Aside-->
            </div>
            <!--begin::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-center w-lg-50 p-10">
                <!--begin::Card-->
                <div class="card rounded-3 w-md-550px">
                    <!--begin::Card body-->
                    <div class="card-body p-10 p-lg-20">
                        <!--begin::Form-->
                        <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate"
                            method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <!--begin::Heading-->
                            <div class="text-center mb-11">
                                <!--begin::Title-->
                                <h1 class="text-dark fw-bolder mb-3">{{ __('Reset Password') }}</h1>
                                <!--end::Title-->
                                <!--begin::Subtitle-->

                                <!--end::Subtitle=-->
                            </div>
                            <!--begin::Heading-->

                            <!--begin::Input group=-->
                            <div class="fv-row mb-8 fv-plugins-icon-container">
                                <!--begin::Email-->
                                <input type="email" placeholder="{{ __('Email') }}" name="email" id="email"
                                    autocomplete="email"
                                    class="form-control bg-transparent  
                                    @error('email') is-invalid @enderror"
                                    value="{{ $email ?? old('email') }}">
                                <!--end::Email-->
                                @error('email')
                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!--end::Input group=-->
                            <div class="fv-row mb-8 fv-plugins-icon-container">

                                <!--begin::Password-->
                                <input type="password" placeholder="{{ __('Contraseña') }}" name="password" id="password"
                                    autocomplete="new-password"
                                    class="form-control bg-transparent @error('password') is-invalid @enderror">
                                <!--end::Password-->
                                @error('password')
                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!--end::Input group=-->

                            <!--end::Input group=-->
                            <div class="fv-row mb-8 fv-plugins-icon-container">

                                <!--begin::Password-->
                                <input type="password" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" id="password-confirmation"
                                    autocomplete="new-password"
                                    class="form-control bg-transparent @error('password') is-invalid @enderror">
                                <!--end::Password-->
                                @error('password_confirmation')
                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!--end::Input group=-->

                            <!--begin::Submit button-->
                            <div class="d-grid mb-10">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-black">
                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">{{ __('Reset Password') }}</span>
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->
                                    <span class="indicator-progress">Espere un momento...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    <!--end::Indicator progress-->
                                </button>
                            </div>
                            <!--end::Submit button-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
@endsection
