<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        @vite(['resources/js/app.js','resources/css/app.css'])
        <title>@yield('title','Serumpun Ngablak')</title>
        {{-- Font Awesome --}}
        <script src="https://kit.fontawesome.com/669eae9cd0.js" crossorigin="anonymous"></script>
        {{-- Google Font and Icons --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24..48,100..700,0..1,-50..200" />
    </head>
    <body>
        <header class="sticky top-0 inset-x-0 flex flex-wrap sm:justify-start sm:flex-nowrap z-[48] w-full bg-white border-b text-sm py-2.5 sm:py-4 lg:ps-64">
            <nav class="flex basis-full items-center w-full mx-auto px-4 sm:px-6" aria-label="Global">
                <div class="me-5 lg:me-0 lg:hidden">
                    <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80" href="../templates/admin/index.html" aria-label="Preline">
                        <svg class="w-28 h-auto" width="116" height="32" viewBox="0 0 116 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- SVG Path -->
                        </svg>
                    </a>
                </div>
                <div class="w-full flex items-center justify-between sm:justify-start sm:gap-x-3 sm:order-3">
                </div>
                <div class="flex items-center gap-2 ms-auto sm:ms-0 sm:gap-x-3 sm:order-3">
                    <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>
                                        <div class="ms-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>
                                <x-slot name="content">
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div id="application-sidebar" class="hs-overlay [--auto-close:lg]
            hs-overlay-open:translate-x-0
            -translate-x-full transition-all duration-300 transform
            w-[260px]
            hidden
            fixed inset-y-0 start-0 z-[60]
            bg-white border-e border-gray-200
            lg:block lg:translate-x-0 lg:end-auto lg:bottom-0">
            <div class="px-8 pt-4 ">
                <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80" href="../templates/admin/index.html" aria-label="Preline">
                    <img style="scale: 90%" src="../media/logo.png" alt="logo">
                </a>
            </div>
            <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
            <ul class="space-y-1.5">
                <li>
                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 bg-gray-100 text-sm text-neutral-700 rounded-lg hover:bg-gray-100" href="#">
                        <span class="material-symbols-rounded">
                            home
                        </span>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100" href="#">
                        <span class="material-symbols-rounded">
                            potted_plant
                        </span>
                        Monitoring Tumbuhan
                    </a>
                    </li>
                <li>
                    <a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100" href="#">
                        <span class="material-symbols-rounded">
                            charger
                        </span>
                        Monitoring Power
                    </a>
                </li>
            </ul>
            </nav>
        </div>
        <div class="w-full lg:ps-64">
            <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
                @yield('content')
              </div>
        </div>
    </body>
  </html>
