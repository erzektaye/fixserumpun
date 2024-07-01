<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                        <button id="hs-dropdown-with-header" type="button" class="w-[2.375rem] h-[2.375rem] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                            <span class="material-symbols-rounded">
                                account_circle
                            </span>
                        </button>
                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-2" aria-labelledby="hs-dropdown-with-header">
                            <div class="py-3 px-5 -m-2 bg-gray-100 rounded-t-lg">
                                <p class="text-sm text-gray-500">Signed in as</p>
                                <p class="text-sm font-medium text-gray-800">james@site.com</p>
                            </div>
                            <div class="mt-2 py-2 first:pt-0 last:pb-0">
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500" href="#">
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
                                    Logout
                                </a>
                                <!-- Other dropdown menu items -->
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Breadcrumb -->
        <div class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 md:px-8 lg:hidden">
            <div class="flex justify-between items-center py-2">
            <ol class="ms-3 flex items-center whitespace-nowrap">
                <li class="flex items-center text-sm text-gray-800">
                    Admin
                <svg class="flex-shrink-0 mx-3 overflow-visible size-2.5 text-gray-400" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                </li>
                <li class="text-sm font-semibold text-gray-800 truncate" aria-current="page">
                    Dashboard
                </li>
            </ol>
            <button type="button" class="py-2 px-3 flex justify-center items-center gap-x-1.5 text-xs rounded-lg border border-gray-200 text-gray-500 hover:text-gray-600" data-hs-overlay="#application-sidebar" aria-controls="application-sidebar" aria-label="Sidebar">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 8L21 12L17 16M3 12H13M3 6H13M3 18H13"/></svg>
                <span class="sr-only">Sidebar</span>
            </button>
            </div>
        </div>
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
                    <img style="scale: 90%" src="media/logo.png" alt="logo">
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
