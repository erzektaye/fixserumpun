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
        <div class="flex flex-col bg-white border shadow-sm rounded-xl col-span-3">
            <div class="p-4 md:p-5">
                <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase">No</th>
                                        <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase">Suhu</th>
                                        <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase">Kelembapan Tanah</th>
                                        <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase">Humidity</th>
                                        <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                                        <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase">Jam</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    @php $no = ($tabtanaman->currentPage() - 1) * $tabtanaman->perPage() + 1; @endphp
                                    @foreach ($tabtanaman as $data)
                                    <tr class="text-center">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{ $no++ }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{ number_format($data->avg_suhu,2) }} °C</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{number_format($data->avg_soil,2) }} %</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">{{ number_format($data->avg_humidity,2)}} %</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">{{ date('d-M-Y', strtotime($data->tanggal)) }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">{{ $data->waktu }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <nav class="flex items-center gap-x-1 mt-4 justify-center">
                            @if ($tabtanaman->onFirstPage())
                            <button type="button" class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm rounded-lg text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" disabled>
                                <svg aria-hidden="true" class="hidden flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m15 18-6-6 6-6"></path>
                                </svg>
                                <span>Previous</span>
                            </button>
                            @else
                            <a href="{{ $tabtanaman->previousPageUrl() }}" class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm rounded-lg text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">
                                <svg aria-hidden="true" class="hidden flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m15 18-6-6 6-6"></path>
                                </svg>
                                <span>Previous</span>
                            </a>
                            @endif

                            <div class="flex items-center gap-x-1">
                                @for ($i = 1; $i <= $tabtanaman->lastPage(); $i++)
                                <button type="button" class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-lg focus:outline-none focus:bg-gray-100 {{ $tabtanaman->currentPage() === $i ? 'bg-gray-100' : '' }}" aria-current="{{ $tabtanaman->currentPage() === $i ? 'page' : '' }}">{{ $i }}</button>
                                @endfor
                            </div>

                            @if ($tabtanaman->hasMorePages())
                            <a href="{{ $tabtanaman->nextPageUrl() }}" class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm rounded-lg text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">
                                <span>Next</span>
                                <svg aria-hidden="true" class="hidden flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg>
                            </a>
                            @else
                            <button type="button" class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm rounded-lg text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" disabled>
                                <span>Next</span>
                                <svg aria-hidden="true" class="hidden flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg>
                            </button>
                            @endif
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>`

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
