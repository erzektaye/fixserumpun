@extends('layout.navbar')

@section('title','Home - Serumpun Ngablak')
@section('content')
{{-- Section Welcome --}}
<section class="py-10" id="beranda">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
            <div>
                <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight">Website Penelitian <span class="text-green-600">Monitoring Smart Farming</span> Desa Pandean</h1>
                <p class="mt-3 text-lg text-gray-800">Penelitian Sistem Smart Farming and Precision Tumbuhan Cabai Berbasis Mikrokontroller dan Internet of Things dengan PLTS disertai Monitoring ecamatan Ngablak, Kabupaten Magelang.</p>
                <div class="mt-7 grid gap-3 w-full sm:inline-flex">
                <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 disabled:opacity-50 disabled:pointer-events-none" href="#monitoring">
                    Pelajari Lebih Lanjut
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </a>
                </div>
            </div>
            <div class="relative">
                <img class="w-full rounded-md" src="media/start.jpg" alt="Image Description">
                <div class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 size-full rounded-md mt-4 -mb-4 me-4 -ms-4 lg:mt-6 lg:-mb-6 lg:me-6 lg:-ms-6"></div>
            </div>
            </div>
    </div>
</section>

{{-- Section Monitoring --}}
<section class="py-10 text-center" id="monitoring">
    <div class="max-w-[85rem] px-4 py-3 sm:px-6 lg:px-8 lg:py-7 mx-auto">
        <h1 class="text-5xl text-gray-800 font-bold lg:text-4xl align-middle">
            Monitoring Terkini
        </h1>
        <p class="mt-1 text-green-500 text-lg">
            Data Monitoring Tumbuhan Berbasis Internet of Things
        </p>
    </div>
    <div class="max-w-[85rem] px-4 py-3 sm:px-6 lg:px-8 lg:py-7 mx-auto">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
            <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                <div class="p-4 md:p-5 flex justify-between gap-x-3">
                <div>
                    <p class="text-xs text-start uppercase tracking-wide text-gray-500">
                        Kelembapan Udara
                    </p>
                    <div class="mt-1 flex items-center gap-x-2">
                    <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                        {{ $tanaman->temp }} °C
                    </h3>
                    </div>
                </div>
                    <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-green-500 text-white rounded-full">
                        <span class="material-symbols-rounded">
                            thermometer
                        </span>
                    </div>
                </div>
            </div>
            {{-- Break --}}
            <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                <div class="p-4 md:p-5 flex justify-between gap-x-3">
                <div>
                    <p class="text-xs uppercase tracking-wide text-gray-500">
                        Kelembapan Udara
                    </p>
                    <div class="mt-1 flex items-center gap-x-2">
                    <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                            {{ $tanaman->humidity }}%
                    </h3>
                    </div>
                </div>
                    <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-green-500 text-white rounded-full">
                        <span class="material-symbols-rounded">
                            dew_point
                        </span>
                    </div>
                </div>
            </div>
            {{-- Break --}}
            <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                <div class="p-4 md:p-5 flex justify-between gap-x-3">
                <div>
                    <p class="text-xs uppercase tracking-wide text-gray-500">
                        Kelembapan Tanah
                    </p>
                    <div class="mt-1 flex items-center gap-x-2">
                    <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                            {{ $tanaman->soil }}%
                    </h3>
                    </div>
                </div>
                    <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-green-500 text-white rounded-full">
                        <span class="material-symbols-rounded">
                            grass
                        </span>
                    </div>
                </div>
            </div>
            {{-- Break --}}
            <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                <div class="p-4 md:p-5 flex justify-between gap-x-3">
                <div>
                    <p class="text-xs text-start uppercase tracking-wide text-gray-500">
                        Tengangan
                    </p>
                    <div class="mt-1 flex items-center gap-x-2">
                    <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                        {{ $power->voltage }} V
                    </h3>
                    </div>
                </div>
                    <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-green-500 text-white rounded-full">
                        <span class="material-symbols-rounded">
                            battery_charging_full
                        </span>
                    </div>
                </div>
            </div>
            {{-- Break --}}
            <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                <div class="p-4 md:p-5 flex justify-between gap-x-3">
                    <div>
                        <p class="text-xs text-start uppercase tracking-wide text-gray-500">
                            Arus
                        </p>
                        <div class="mt-1 flex items-center gap-x-2">
                        <h3 class="mt-1 text-xl font-medium text-gray-800">
                            {{ $power->current }} A
                        </h3>
                        </div>
                    </div>
                    <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-green-500 text-white rounded-full">
                        <span class="material-symbols-rounded">
                            power_input
                        </span>
                    </div>
                </div>
            </div>
            {{-- Break --}}
            <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                <div class="p-4 md:p-5 flex justify-between gap-x-3">
                    <div>
                        <p class="text-xs text-start uppercase tracking-wide text-gray-500">
                            Daya
                        </p>
                        <div class="mt-1 flex items-center gap-x-2">
                        <h3 class="mt-1 text-xl font-medium text-gray-800">
                            {{ $power->power }} Watt
                        </h3>
                        </div>
                    </div>
                    <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-green-500 text-white rounded-full">
                        <span class="material-symbols-rounded">
                            charger
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section Desa --}}
<section class="judul pt-5 text-center page-section " id="desa">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Grid -->
        <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20">
            <div data-hs-carousel='{
                "loadingClasses": "opacity-0",
                "isAutoPlay": true
            }' class="relative">
                <div class="hs-carousel relative overflow-hidden w-full min-h-96 bg-white rounded-lg">
                    <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                        <div class="hs-carousel-slide">
                            <div class="flex justify-center w-full bg-gray-100">
                                <img src="media/bg.jpg" alt="">
                            </div>
                        </div>
                        <div class="hs-carousel-slide">
                            <div class="flex justify-center h-full bg-gray-200">
                                <img src="media/start.jpg" alt="">
                            </div>
                        </div>
                        <div class="hs-carousel-slide">
                            <div class="flex justify-center h-full bg-gray-300">
                                <img src="media/bg.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="hs-carousel-prev  hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-green-600 hover:bg-gray-600/10 rounded-s-lg">
                    <span class="text-2xl " aria-hidden="true">
                    <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6"></path>
                    </svg>
                    </span>
                    <span class="sr-only">Previous</span>
                </button>
                <button type="button" class="hs-carousel-next hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-green-600 hover:bg-gray-600/10 rounded-e-lg">
                    <span class="sr-only">Next</span>
                    <span class="text-2xl" aria-hidden="true">
                    <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                    </span>
                </button>
                <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2">
                    <span class="hs-carousel-active:bg-green-600 hs-carousel-active:border-green-600 size-3 border border-gray-400 rounded-full cursor-pointer"></span>
                    <span class="hs-carousel-active:bg-green-600 hs-carousel-active:border-green-600 size-3 border border-gray-400 rounded-full cursor-pointer"></span>
                    <span class="hs-carousel-active:bg-green-600 hs-carousel-active:border-green-600 size-3 border border-gray-400 rounded-full cursor-pointer"></span>
                </div>
            </div>
            <div>
                <h1 class=" text-5xl md:text-2xl sm:text-xl text-gray-800 font-bold lg:text-4xl text-start">
                    Desa <span class="text-green-600">Agrikultur dan Wisata</span> Pandean, Ngablak, Magelang
                </h1>
                <p class="mt-5 text-gray-500 text-md text-justify indent-10">
                    Desa Pandean merupakan salah satu desa yang berada di Kecamatan Ngablak, Kabupaten Magelang. Lokasinya yang berada di dataran tinggi kaki dekat dengan Gunung Andong dan Gunung Telomoyo memiliki potensi tinggi dalam pengolahan komoditas pertanian. Mayoritas penduduk Desa Pandean yang bermatapencaharian sebagai petani memanfaatkan kondisi lingkungan untuk menanam tanaman hortikultura.
                </p>
                <p class="mt-1 text-gray-500 text-md text-justify indent-10">
                    Dalam upaya mengenalkan dan memajukan pertanian presisi dan cerdas, Tim Hibah MBKM 767 UNS melakukan penelitian terkait sistem otomasisasi cerdas di bidang pertanian yang mendukung pemantauan kesehatan tanaman hortikultura masyarakat Desa Pandean.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Section EBT dan IoT --}}
<section class="pt-5 pb-10" id="penelitian">
    <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="mt-5 lg:mt-16 grid lg:grid-cols-3 gap-8 lg:gap-12">
            <div class="lg:col-span-1">
                <h1 class="font-bold text-2xl md:text-3xl text-gray-800">
                    Kegiatan <span class="text-green-600">Pengabdian dan Penelitian </span> Hibah MBKM
                </h1>
                <p class="mt-2 pb-2 md:mt-4 text-gray-500 text-justify">
                    Kegiatan ini dilakukan dalam rangka pengabdian dengan mengembangkan alat menggunakan sistem internet of things untuk melakukan pertanian cerdas dan presisi dilengkapi dengan monitoring kesehatan tanaman.
                </p>
                <a class="inline-flex items-center gap-x-1 font-medium text-green-500" href="#">
                    Lebih Lanjut
                    <svg class="flex-shrink-0 size-4 transition ease-in-out group-hover:translate-x-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </a>
            </div>
            <div class="lg:col-span-2">
                <div class="grid sm:grid-cols-2 gap-8 md:gap-12">
                    <div class="flex gap-x-5">
                        <div class="justify-content">
                            <span class="flex-shrink-0 mt-1 fa-xl text-green-600 material-symbols-rounded scale-150">
                                monitoring
                            </span>
                        </div>
                        <div class="grow">
                            <h3 class="text-lg font-semibold text-gray-800">
                                Live Monitoring
                            </h3>
                        <p class="mt-1 text-gray-600">
                            Monitoring secara <span class="italic">real-time</span> berbasis website dan mobile app untuk memantau kesehatan tumbuhan.
                        </p>
                        </div>
                    </div>
                    <div class="flex gap-x-5">
                        <div class="justify-content">
                            <span class="flex-shrink-0 mt-1 fa-xl text-green-600 material-symbols-rounded scale-150">
                                cycle
                            </span>
                        </div>
                        <div class="grow">
                        <h3 class="text-lg font-semibold text-gray-800">
                            Sistem Otomatisasi
                        </h3>
                        <p class="mt-1 text-gray-600">
                            Sistem penyiraman otomatis berdasarkan indikator threshold dari kelembapan tanah dan kelembapan udara.
                        </p>
                        </div>
                    </div>
                    <div class="flex gap-x-5">
                        <div class="justify-content">
                            <span class="flex-shrink-0 mt-1 fa-xl text-green-600 material-symbols-rounded scale-150">
                                light_mode
                            </span>
                        </div>
                        <div class="grow">
                        <h3 class="text-lg font-semibold text-gray-800">
                            Sumber Daya Matahari (PV)
                        </h3>
                        <p class="mt-1 text-gray-600">
                            Pemasangan panel surya sebagai pemasok energi listrik dari alat dan sistem yang dikembangkan guna mendukung energi baru terbarukan.
                        </p>
                        </div>
                    </div>
                    <div class="flex gap-x-5">
                        <div class="justify-content">
                            <span class="flex-shrink-0 mt-1 fa-xl text-green-600 material-symbols-rounded scale-150">
                                memory
                            </span>
                        </div>
                        <div class="grow">
                        <h3 class="text-lg font-semibold text-gray-800">
                            Penggunaan Mikrokontroller
                        </h3>
                        <p class="mt-1 text-gray-600">
                            Penggunaan Esp32 sebagai kontrol sistem otomatisasi dan pengiriman data <span class="italic">real-time</span> menuju database.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section Team --}}
<section class="pt-10 pb-10" id="team">
    <div class="text-center">
        <div class="max-w-[85rem] px-4 py-3 sm:px-6 lg:px-8 lg:py-7 mx-auto">
            <h1 class=" text-5xl text-gray-800 font-bold lg:text-4xl align-middle">
                Tim Penelitian
            </h1>
            <p class="mt-1 text-green-500 text-lg">
                Kelompok 767 Hibah MBKM Proyek di Desa
            </p>
        </div>
        <div class="max-w-[85rem] px-4 py-3 sm:px-6 lg:px-8 lg:py-7 mx-auto">
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                {{-- <div class="flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-lg transition">
                    <img class="w-full h-auto rounded-t-xl" src="media/0-warindi.png" alt="Image Description">
                    <div class="px-2 md:pt-2">
                        <h3 class="text-lg font-bold text-gray-800">
                            Dr. Warindi, S.T., M.Eng.
                        </h3>
                        <p class="text-gray-400 text-sm">
                            Dosen Pembimbing
                        </p>
                        </h3>
                        <p class="my-1 mb-2 text-green-500 italic text-sm">
                            Bidang Keahlian : Sistem Tenaga Listrik
                        </p>
                    </div>
                </div> --}}
                <div class="flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-lg transition">
                    <img class="w-full h-auto rounded-t-xl" src="media/1-ilham.png" alt="Image Description">
                    <div class="px-2 md:pt-2">
                        <h3 class="text-lg font-bold text-gray-800">
                            Ilham Dwi Rahayu
                        </h3>
                        <p class="text-gray-400 text-sm">
                            Ketua Tim Penelitian
                        </p>
                        </h3>
                        <p class="my-1 mb-2 text-green-500 italic text-sm">
                            Konfigurasi Panel Surya dan Penyimpanan Daya Baterai, Peminatan Sistem Tenaga Listrik
                        </p>
                    </div>
                </div>
                <div class="flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-lg transition ">
                    <img class="w-full h-auto rounded-t-xl" src="media/2-dava.png" alt="Image Description">
                    <div class="px-2 md:pt-2">
                        <h3 class="text-lg font-bold text-gray-800">
                            Dava Kamal Hakim
                        </h3>
                        <p class="text-gray-400 text-sm">
                            Divisi Power dan Panel Surya
                        </p>
                        </h3>
                        <p class="my-1 mb-2 text-green-500 italic text-sm">
                            Konfigurasi Panel Surya dan Penyimpanan Daya Baterai, Peminatan Sistem Tenaga Listrik
                        </p>
                    </div>
                </div>
                <div class="flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-lg transition">
                    <img class="w-full h-auto rounded-t-xl" src="media/3-raihan.png" alt="Image Description">
                    <div class="px-2 md:pt-2">
                        <h3 class="text-lg font-bold text-gray-800">
                            Raihan Fonda Pratama
                        </h3>
                        <p class="text-gray-400 text-sm">
                            Divisi Power dan Panel Surya
                        </p>
                        </h3>
                        <p class="my-1 mb-2 text-green-500 italic text-sm">
                            Konfigurasi Panel Surya dan Penyimpanan Daya Baterai, Peminatan Sistem Tenaga Listrik
                        </p>
                    </div>
                </div>
                <div class="flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-lg transition">
                    <img class="w-full h-auto rounded-t-xl" src="media/4-syifa.png" alt="Image Description">
                    <div class="px-2 md:pt-2">
                        <h3 class="text-lg font-bold text-gray-800">
                            Syifa Hauna Nur Syahidah
                        </h3>
                        <p class="text-gray-400 text-sm">
                            Divisi Power dan Panel Surya
                        </p>
                        </h3>
                        <p class="my-1 mb-2 text-green-500 italic text-sm">
                            Konfigurasi Panel Surya dan Penyimpanan Daya Baterai, Peminatan Sistem Tenaga Listrik
                        </p>
                    </div>
                </div>
                <div class="flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-lg transition">
                    <img class="w-full h-auto rounded-t-xl" src="media/5-riyadh.png" alt="Image Description">
                    <div class="px-2 md:pt-2">
                        <h3 class="text-lg font-bold text-gray-800">
                            Riyadh Pratama Saputra
                        </h3>
                        <p class="text-gray-400 text-sm">
                            Divisi Kontrol dan Logika Prototype
                        </p>
                        </h3>
                        <p class="my-1 mb-2 text-green-500 italic text-sm">
                            Konfigurasi Mikrokontroller dan Solar Panel, Peminatan Sistem Tenaga Listrik
                        </p>
                    </div>
                </div>
                <div class="flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-lg transition">
                    <img class="w-full h-auto rounded-t-xl" src="media/6-ilham.png" alt="Image Description">
                    <div class="px-2 md:pt-2">
                        <h3 class="text-lg font-bold text-gray-800">
                            Muhammad Ilham Alghifari
                        </h3>
                        <p class="text-gray-400 text-sm">
                            Divisi Kontrol dan Logika Prototype
                        </p>
                        </h3>
                        <p class="my-1 mb-2 text-green-500 italic text-sm">
                            Konfigurasi Mikrokontroller dan Solar Panel, Peminatan Mekatronika
                        </p>
                    </div>
                </div>
                <div class="flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-lg transition">
                    <img class="w-full h-auto rounded-t-xl" src="media/7-heri.png" alt="Image Description">
                    <div class="px-2 md:pt-2">
                        <h3 class="text-lg font-bold text-gray-800">
                            Wahyu Herianto
                        </h3>
                        <p class="text-gray-400 text-sm">
                            Divisi Website dan Mobile Development
                        </p>
                        </h3>
                        <p class="my-1 mb-2 text-green-500 italic text-sm">
                            Pengembangan Website dan Mobile App, Peminatan Teknik Komputer dan Telekomunikasi
                        </p>
                    </div>
                </div>
                <div class="flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-lg transition">
                    <img class="w-full h-auto rounded-t-xl" src="media/8-nuri.png" alt="Image Description">
                    <div class="px-2 md:pt-2">
                        <h3 class="text-lg font-bold text-gray-800">
                            Nury Rachma Fitriani
                        </h3>
                        <p class="text-gray-400 text-sm">
                            Divisi Website dan Mobile Development
                        </p>
                        </h3>
                        <p class="my-1 mb-2 text-green-500 italic text-sm">
                            Pengembangan Website dan Mobile App, Peminatan Teknik Komputer dan Telekomunikasi
                        </p>
                    </div>
                </div>
                <div class="flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-lg transition lg:col-start-2 sm:col-start-auto">
                    <img class="w-full h-auto rounded-t-xl" src="media/9-reihan.png" alt="Image Description">
                    <div class="px-2 md:pt-2">
                        <h3 class="text-lg font-bold text-gray-800">
                            Reihan Dhimas Putra Hendra
                        </h3>
                        <p class="text-gray-400 text-sm">
                            Divisi Website dan Mobile Development
                        </p>
                        </h3>
                        <p class="my-1 mb-2 text-green-500 italic text-sm">
                            Pengembangan Website dan Mobile App, Peminatan Teknik Komputer dan Telekomunikasi
                        </p>
                    </div>
                </div>
                <div class="flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-lg transition">
                    <img class="w-full h-auto rounded-t-xl" src="media/10-alif.png" alt="Image Description">
                    <div class="px-2 md:pt-2">
                        <h3 class="text-lg font-bold text-gray-800">
                            Muhammad Alif Rizky Naufal
                        </h3>
                        <p class="text-gray-400 text-sm">
                            Divisi Website dan Mobile Development
                        </p>
                        </h3>
                        <p class="my-1 mb-2 text-green-500 italic text-sm">
                            Pengembangan Website dan Mobile App, Peminatan Teknik Komputer dan Telekomunikasi
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section class="pt-10 pb-10" id="team">

{{-- Footer --}}
<section class="pt-5 pb-10" id="footer">
    <footer class="mt-auto w-full max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
        <div class=" grid lg:grid-cols-3 gap-8 lg:gap-12">
            <div>
                <div class="text-start">
                    <div>
                        <h1 class="font-bold text-2xl md:text-3xl text-gray-800">
                            Serumpun Ngablak
                        </h1>
                    </div>
                    <div class="mt-2">
                        <p class="text-gray-500">Bekerja Sama dengan <a class="font-semibold text-green-500 hover:text-green-600" href="https://desapandean.magelangkab.go.id/First/">Pemerintahan Desa Pandean</a> Kecamatan Ngablak, Kabupaten Magelang</p>
                    </div>
                    <div class="mt-2">
                        <p class="text-gray-500"><span class="text-green-500">Alamat Kantor Desa : </span>Jl. Ngablak Grabag KM 4 Kantor Desa Pandean, Kec. Ngablak Kab. Magelang 56194</p>
                    </div>
                    <div class="mt-2">
                        <p class="text-gray-500"><span class="text-green-500">Email Kantor Desa : </span>kantordesapandean@gmail.com</p>
                        <p class="text-gray-500"><span class="text-green-500">Email : </span>kknmbkm767@gmail.com</p>
                    </div>
                    <div class="flex justify-start pt-5">
                        <img class="w-auto h-16 mx-4 sm:mx-2 lg:mx-2" src="media/uns.png" alt="UNS">
                        <img class="w-auto h-16 mx-4 sm:mx-2 lg:mx-2" src="media/mgl.png" alt="Kab Magelang">
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2">
                <div>
                    <iframe class="rounded-xl w-full justify-end" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15827.1584687831!2d110.39152653480421!3d-7.377460391335187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a7e995d2b9993%3A0xd2a7ac3eb50ad560!2sPandean%2C%20Ngablak%2C%20Magelang%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1719742046140!5m2!1sen!2sid" width="847" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </footer>
</section>
<hr class="border-green-500">

{{-- Copyright --}}
<section class="py-5" id="footer">
    <div class="mt-auto w-full max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
        <p class="text-center"> © 2024 Hibah MBKM Kelompok 767 Desa Pandean, Ngablak, Magelang</p>
    </div>
</section>

<script>
    ScrollReveal({ reset: true });

    ScrollReveal().reveal('.judul',{origin:'left'});
</script>

@endsection

