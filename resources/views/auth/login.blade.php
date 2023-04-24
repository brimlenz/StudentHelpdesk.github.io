{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}

<x-guest-layout>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="index.html" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">

                                    <svg class="svg-icon"
                                        style="width: 3em; height: 3em;vertical-align: middle;fill: currentColor;overflow: hidden;"
                                        viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M507.36 103C279.84 103 94.73 288.12 94.73 515.66a422.41 422.41 0 0 0 6.48 70.61c0 0.14 0.25 0.08 0.3 0.2a13.58 13.58 0 0 0 13 10.06 13.76 13.76 0 0 0 13.75-13.76 11.88 11.88 0 0 0-0.27-1.32l0.24-0.11a386 386 0 0 1-6-65.66c0-212.7 172.43-385.13 385.12-385.13S892.49 303 892.49 515.68 720.06 900.8 507.36 900.8c-142.14 0-266-77.22-332.69-191.79 0-0.07-0.09-0.11-0.11-0.18-0.18-0.3-0.38-0.59-0.55-0.89a13.61 13.61 0 0 0-12-7.37 13.76 13.76 0 0 0-13.75 13.75 13.42 13.42 0 0 0 2.74 7.83l-0.23 0.14c71.53 123 204.41 206 356.61 206C734.89 928.29 920 743.2 920 515.66S734.89 103 507.36 103z"
                                            fill="#3585F9" />
                                        <path
                                            d="M507.37 570.43c82.32 0 149.31 67 149.31 149.31h27.51c0-97.49-79.32-176.82-176.82-176.82s-176.83 79.33-176.83 176.82h27.51c0-82.33 66.95-149.31 149.32-149.31z"
                                            fill="#3585F9" />
                                        <path
                                            d="M344.29 719.74m-13.75 0a13.75 13.75 0 1 0 27.5 0 13.75 13.75 0 1 0-27.5 0Z"
                                            fill="#3585F9" />
                                        <path
                                            d="M670.43 719.74m-13.75 0a13.75 13.75 0 1 0 27.5 0 13.75 13.75 0 1 0-27.5 0Z"
                                            fill="#3585F9" />
                                        <path
                                            d="M531.854464 448.620636m-76.926146 76.926147a108.79 108.79 0 1 0 153.852293-153.852294 108.79 108.79 0 1 0-153.852293 153.852294Z"
                                            fill="#BAD4FF" />
                                        <path
                                            d="M507.36 570.42c-75.15 0-136.29-61.14-136.29-136.3s61.14-136.3 136.29-136.3 136.3 61.15 136.3 136.3-61.14 136.3-136.3 136.3z m0-245.09a108.8 108.8 0 1 0 108.8 108.79 108.92 108.92 0 0 0-108.8-108.79z"
                                            fill="#3585F9" />
                                    </svg>
                                </span>
                                <span class="app-brand-text demo text-body fw-bolder">Help Desk</span>
                            </a>
                        </div>

                        
                      
                        <form id="formAuthentication" class="mb-3"  method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="emailreg" class="form-label">Email or Registration number</label>
                                <input type="text" class="form-control" type="text" name="emailreg" :value="old('emailreg')" required autofocus autocomplete="username"
                                    placeholder="Enter your email or registration number" autofocus />

                                    @error('emailreg')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                            </div>


                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                    <a href="auth-forgot-password-basic.html">
                                        <small>Forgot Password?</small>
                                    </a>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                            </div>
                        </form>

                        
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>

</x-guest-layout>
