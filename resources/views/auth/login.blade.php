@include('shareable.header')
@include('shareable.navbar')

<x-guest-layout>
    <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="h-32 md:h-auto md:w-1/2">
            <img aria-hidden="true" class="object-cover w-full h-full"
                 src="{{ asset('images/login-office.jpeg') }}"
                 alt="Office"/>
        </div>
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
                <h1 class="mb-4 text-xl font-semibold text-gray-700">
                    Login
                </h1>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <x-input-error :messages="$errors->get('xemail')" class="mt-2" />

                    <!-- Input[ype="email"] -->
                    <div class="mt-4">
                        <x-input-label :value="__('Email')"/>
                        <x-text-input type="email"
                                 id="email"
                                 name="email"
                                 value="{{ old('email') }}"
                                 class="block w-full"
                                 required
                                 autofocus/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Input[ype="password"] -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')"/>
                        <x-text-input type="password"
                                 id="password"
                                 name="password"
                                 class="block w-full focus:border-orange-500"/>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex mt-6 text-sm">
                        <label class="flex items-center dark:text-gray-400">
                            <input type="checkbox"
                                    style="width:10px; padding:5px; color:orange;"
                                   name="remember"
                                   class="form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple">
                            <span class="ml-2">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    

                    <div class="mt-4">
                        <x-primary-button class="block w-full" style="background-color:orange;">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>

                <hr class="my-8"/>
                <div class="row">
                    <div class="col-6">
                        @if (Route::has('password.request'))
                            <p class="mt-4">
                                <a class="text-sm font-medium text-primary-600 hover:underline"
                                href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            </p>
                        @endif
                   </div>
                   <div class="col-6"
                   >
                    <p class="mt-4"
                    
                    >
                                <a class="registerHere float-right text-sm font-medium text-primary-600 hover:underline"
                                            style="color:black; border:1px solid orange; padding:5px;"
                                            href="/register">
                                          {{ __(' Register Here') }}
                                </a>
                    </p>
                   </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
@include('shareable.footer')
@include('shareable.scripts')