<x-guest-layout>
    <x-auth-card>
        {{-- <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot> --}}

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        {{-- <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form> --}}
        <div class="squares square1 "></div>
        <div class="squares square2 "></div>
        <div class="squares square3 "></div>
        <div class="squares square4 "></div>
        <div class="squares square5 "></div>
        <div class="squares square6 "></div>
        <div class="page-header">
            <div class="page-header-image"></div>
            <div class="container">
                <div class="col-lg-5 col-md-8 mx-auto">
                    <div class="card card-login">
                        <form class="form" method action>
                            <div class="card-header">
                                <img class="card-img" src="{{ asset('img/square-purple-1.png') }}" alt="Card image">
                                <h4 class="card-title">Login</h4>
                            </div>
                            <div class="card-body">
                                <div class="input-group input-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="tim-icons icon-single-02"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="First Name...">
                                </div>
                                <div class="input-group input-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="tim-icons icon-caps-small"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Last Name...">
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#pablo" class="btn btn-primary btn-round btn-lg btn-block">Get Started</a>
                            </div>
                            <div class="pull-left ml-3 mb-3">
                                <h6>
                                    <a href="#pablo" class="link footer-link">Create Account</a>
                                </h6>
                            </div>
                            <div class="pull-right mr-3 mb-3">
                                <h6>
                                    <a href="#pablo" class="link footer-link">Need Help?</a>
                                </h6>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </x-auth-card>
</x-guest-layout>



<script src="{{ asset('js/core/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>

<script src="{{ asset('js/plugins/bootstrap-switch.js') }}"></script>

<script src="{{ asset('js/plugins/nouislider.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('js/plugins/slick.js') }}" type="text/javascript"></script>

<script src="{{ asset('js/plugins/anime.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('js/plugins/chartjs.min.js') }}"></script>

<script src="{{ asset('js/plugins/moment.min.js') }}"></script>

<script src="{{ asset('js/plugins/bootstrap-tagsinput.js') }}"></script>

<script src="{{ asset('js/plugins/bootstrap-selectpicker.js') }}" type="text/javascript"></script>

<script src="{{ asset('js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>

<script src="{{ asset('js/plugins/jasny-bootstrap.min.js') }}"></script>

<script src="{{ asset('demo/demo.js') }}"></script>


{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script> --}}

<script async defer src="{{ asset('buttons.github.io/buttons.js') }}"></script>
<script src="{{ asset('js/blk-design-system-pro.mine209.js?v=1.0.0') }}" type="text/javascript"></script>

<script src="{{ asset('demo/jquery.sharrre.js') }}"></script>
