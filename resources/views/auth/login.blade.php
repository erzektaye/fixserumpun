<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/js/app.js','resources/css/app.css'])
        <title>@yield('title','Login Admin - Serumpun Ngablak')</title>
        {{-- Jquery --}}
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        {{-- Font Awesome --}}
        <script src="https://kit.fontawesome.com/669eae9cd0.js" crossorigin="anonymous"></script>
        {{-- Google Font and Icons --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24..48,100..700,0..1,-50..200" />
        {{-- Scroll Reveal  --}}
        <script src="https://unpkg.com/scrollreveal"></script>
    </head>
    <body>
        <section class="py-10" id="beranda">
            <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                    <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm lg:col-start-2 sm:col-start-auto">
                        <div class="p-4 sm:p-7">
                            <div class="text-center">
                                <img class="pb-4" src="media/logo.png" alt="">
                                <h1 class="block text-2xl font-bold text-gray-800">Log in</h1>
                                <p class="mt-2 text-sm text-gray-600">
                                    Hai. Selamat datang, Silahkan login untuk mengakses panel admin
                                </p>
                            </div>
                            <div class="mt-5">
                                <!-- Form -->
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <!-- Email Address -->
                                    <div>
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <!-- Password -->
                                    <div class="mt-4">
                                        <x-input-label for="password" :value="__('Password')" />

                                        <x-text-input id="password" class="block mt-1 w-full"
                                                        type="password"
                                                        name="password"
                                                        required autocomplete="current-password" />

                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                    <!-- Remember Me -->
                                    <div class="block mt-4">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center justify-end mt-4">
                                        <x-primary-button class="ms-3">
                                            {{ __('Log in') }}
                                        </x-primary-button>
                                    </div>
                                </form>
                                <!-- End Form -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </body>
</html>


