@extends('layout.sidebar')

@section('title','Admin - Serumpun Ngablak')
@section('content')
<ol class="flex items-center whitespace-nowrap">
    <li class="inline-flex items-center">
        <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600" href="#">
            Admin
        </a>
        <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m9 18 6-6-6-6"></path>
        </svg>
    </li>
    <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate" aria-current="page">
        Dashboard
    </li>
</ol>
<div>
    <h1 class="font-medium text-2xl text-gray-800 pb-5 text-center lg:text-start py-2 sm:indent-0 lg:indent-2">
        Monitoring<span class="text-green-500"> Tanaman</span>
    </h1>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
        <div class="flex flex-col bg-white border shadow-sm rounded-xl">
            <div class="p-4 md:p-5">
                <div class="flex items-center gap-x-2">
                    <p class="text-xs uppercase tracking-wide text-gray-500">
                        Temperatur Udara
                    </p>
                </div>
                <div class="mt-1 flex items-center gap-x-2">
                    <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                        {{ $tanaman->temp }} °C
                    </h3>
                    <div>
                        @if ($tanaman->temp >= 20.00 && $tanaman->temp <= 35.00)
                            <span class="py-1 px-2 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full">
                            <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                            Normal
                            </span>
                        @elseif ($tanaman->temp < 20.00)
                            <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full">
                            <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path>
                                <path d="M12 9v4"></path>
                                <path d="M12 17h.01"></path>
                            </svg>
                            Suhu Rendah
                            </span>
                        @elseif ($tanaman->temp > 35.00)
                            <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">
                            <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path>
                                <path d="M12 9v4"></path>
                                <path d="M12 17h.01"></path>
                            </svg>
                            Suhu Tinggi
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col bg-white border shadow-sm rounded-xl">
            <div class="p-4 md:p-5">
                <div class="flex items-center gap-x-2">
                    <p class="text-xs uppercase tracking-wide text-gray-500">
                        Kelembapan Udara
                    </p>
                </div>
                <div class="mt-1 flex items-center gap-x-2">
                    <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                        {{ $tanaman->humidity }} %
                    </h3>
                    <div>
                        @if ($tanaman->humidity >= 50.00 && $tanaman->humidity <= 70.00)
                            <span class="py-1 px-2 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full">
                            <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                                Normal
                            </span>
                        @elseif ($tanaman->humidity < 50.00)
                            <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full">
                            <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path>
                                <path d="M12 9v4"></path>
                                <path d="M12 17h.01"></path>
                            </svg>
                                Humidity Rendah
                            </span>
                            @elseif ($tanaman->humidity > 70.00)
                            <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">
                            <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path>
                                <path d="M12 9v4"></path>
                                <path d="M12 17h.01"></path>
                            </svg>
                                Humidity Tinggi
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col bg-white border shadow-sm rounded-xl">
            <div class="p-4 md:p-5">
                <div class="flex items-center gap-x-2">
                    <p class="text-xs uppercase tracking-wide text-gray-500">
                        Kelembapan Tanah
                    </p>
                </div>
                <div class="mt-1 flex items-center gap-x-2">
                    <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                        {{ $tanaman->soil }} %
                    </h3>
                    <div>
                        @if ($tanaman->soil >= 40 && $tanaman->soil <= 60)
                            <span class="py-1 px-2 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full">
                            <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                                Normal
                            </span>
                        @elseif ($tanaman->soil < 40.00)
                            <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full">
                            <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path>
                                <path d="M12 9v4"></path>
                                <path d="M12 17h.01"></path>
                            </svg>
                                Tanah Kering
                            </span>
                        @elseif ($tanaman->soil > 35.00)
                            <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">
                            <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path>
                                <path d="M12 9v4"></path>
                                <path d="M12 17h.01"></path>
                            </svg>
                                Tanah Basah
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <h1 class="font-medium text-2xl text-gray-800 pb-5 text-center lg:text-start py-2 sm:indent-0 lg:indent-2">
        Monitoring<span class="text-green-500"> Power Input</span>
    </h1>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
        <div class="flex flex-col bg-white border shadow-sm rounded-xl">
            <div class="p-4 md:p-5">
                <div class="flex items-center gap-x-2">
                    <p class="text-xs uppercase tracking-wide text-gray-500">
                        Tegangan (Voltage)
                    </p>
                </div>
                <div class="mt-1 flex items-center gap-x-2">
                    <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                        {{ $power->voltage }} Volt
                    </h3>
                    <div>
                        @if ($power->voltage >= 11.40 && $power->voltage <= 12.00)
                            <span class="py-1 px-2 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full">
                            <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                            Normal
                            </span>
                        @elseif ($power->voltage < 11.40)
                            <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full">
                            <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path>
                                <path d="M12 9v4"></path>
                                <path d="M12 17h.01"></path>
                            </svg>
                            Low Voltage
                            </span>
                        @elseif ($power->voltage > 12.00)
                            <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full">
                            <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path>
                                <path d="M12 9v4"></path>
                                <path d="M12 17h.01"></path>
                            </svg>
                            High Voltage
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col bg-white border shadow-sm rounded-xl">
            <div class="p-4 md:p-5">
                <div class="flex items-center gap-x-2">
                    <p class="text-xs uppercase tracking-wide text-gray-500">
                        Arus (Current)
                    </p>
                </div>
                <div class="mt-1 flex items-center gap-x-2">
                    <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                        {{ $power->current }} Ampere
                    </h3>
                </div>
            </div>
        </div>
        <div class="flex flex-col bg-white border shadow-sm rounded-xl">
            <div class="p-4 md:p-5">
                <div class="flex items-center gap-x-2">
                    <p class="text-xs uppercase tracking-wide text-gray-500">
                        Power
                    </p>
                </div>
                <div class="mt-1 flex items-center gap-x-2">
                    <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                        {{ $power->power }} Watt
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#dataForm').submit(function(event) {
            event.preventDefault();

            var temperature = $('#temperature').val();
            var humidity = $('#humidity').val();
            var soil = $('#soil_moisture').val();

            $.ajax({
                url: '/api/post/tanaman',
                type: 'POST',
                dataType: 'json',
                data: {
                    suhu: temperature,
                    kelembapan: humidity,
                    soil: soil_moisture
                },
                success: function(response) {
                    console.log(response.message);
                    // Tambahkan kode lain di sini jika perlu
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });
    });
</script>
@endsection
