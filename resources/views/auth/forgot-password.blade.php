<x-frontend-layout title="Forgot Password Page">
    <x-frontend.breadcrumb title="Forgot Password" subtitle="forgot password" link="{{ route('password.request') }}"
        linkText="forgot password" />

    {{-- <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div> --}}

    <!-- Session Status -->
    {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

    <section class="fp__signin" style="background: url({{ asset('frontend/images/login_bg.jpg') }});">
        <div class="fp__signin_overlay pt_125 xs_pt_95 pb_100 xs_pb_70">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-duration="1s">
                    <div class="col-xxl-5 col-xl-6 col-md-9 col-lg-7 m-auto">
                        <div class="fp__login_area">
                            <h2>{{ __('Forgot Password') }}</h2>
                            <p>
                                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                            </p>

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div>
                                    <x-input-label for="email" :value="__('Email')" />
                                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                                        required autofocus />
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <button type="submit" class="common_btn">{{ __('Email Password Reset Link') }}</button>
                                </div>
                            </form>
                            <p class="create_account d-flex justify-content-between">
                                <a href="{{ route('login') }}">login</a>
                                <a href="{{ route('register') }}">Create Account</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-frontend-layout>
