@extends('Layouts.template')

@section('title')
    Evoba | Lokasi
@endsection

@section('body')
    <div class="container py-3 px-15">
        <div class="mt-4 mb-3">
            <h2 style="color: #B63D42; font-weight: bold">Tempat Populer Saat Ini</h2>
        </div>

        <div class="row align-items-md-stretch">
            <a href="{{ route('restaurantLocation', ['loc' => 'jakarta-utara']) }}"
                style="text-decoration: none !important;width: 50%" class="mb-4">
                <div class="h-80 p-4 border rounded-4 d-flex"
                    style="background-color: #F1F1F1; justify-content: space-between;">
                    <div style="color: black">Jakarta Utara</div>
                    <div style="justify-content: center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#1C1C1C" width="15" height="15"
                            viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img"
                            class="sc-rbbb40-0 jKmKoK">
                            <title>chevron-right</title>
                            <path
                                d="M6.98 15.94c-0.3-0.28-0.3-0.76 0-1.060l4.46-4.46-4.46-4.48c-0.3-0.28-0.3-0.76 0-1.060s0.76-0.28 1.060 0l5 5c0.28 0.3 0.28 0.78 0 1.060l-5 5c-0.3 0.3-0.78 0.3-1.060 0z">
                            </path>
                        </svg>
                    </div>
                </div>
            </a>
            <a href="{{ route('restaurantLocation', ['loc' => 'jakarta-selatan']) }}"
                style="text-decoration: none !important;width: 50%" class="mb-4">
                <div class="h-80 p-4 border rounded-4 d-flex"
                    style="background-color: #F1F1F1; justify-content: space-between;">
                    <div style="color: black">Jakarta Selatan</div>
                    <div style="justify-content: center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#1C1C1C" width="15" height="15"
                            viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img"
                            class="sc-rbbb40-0 jKmKoK">
                            <title>chevron-right</title>
                            <path
                                d="M6.98 15.94c-0.3-0.28-0.3-0.76 0-1.060l4.46-4.46-4.46-4.48c-0.3-0.28-0.3-0.76 0-1.060s0.76-0.28 1.060 0l5 5c0.28 0.3 0.28 0.78 0 1.060l-5 5c-0.3 0.3-0.78 0.3-1.060 0z">
                            </path>
                        </svg>
                    </div>
                </div>
            </a>
            <a href="{{ route('restaurantLocation', ['loc' => 'jakarta-barat']) }}"
                style="text-decoration: none !important;width: 50%" class="mb-4">
                <div class="h-80 p-4 border rounded-4 d-flex"
                    style="background-color: #F1F1F1; justify-content: space-between;">
                    <div style="color: black">Jakarta Barat</div>
                    <div style="justify-content: center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#1C1C1C" width="15" height="15"
                            viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img"
                            class="sc-rbbb40-0 jKmKoK">
                            <title>chevron-right</title>
                            <path
                                d="M6.98 15.94c-0.3-0.28-0.3-0.76 0-1.060l4.46-4.46-4.46-4.48c-0.3-0.28-0.3-0.76 0-1.060s0.76-0.28 1.060 0l5 5c0.28 0.3 0.28 0.78 0 1.060l-5 5c-0.3 0.3-0.78 0.3-1.060 0z">
                            </path>
                        </svg>
                    </div>
                </div>
            </a>
            <a href="{{ route('restaurantLocation', ['loc' => 'jakarta-timur']) }}"
                style="text-decoration: none !important;width: 50%" class="mb-4">
                <div class="h-80 p-4 border rounded-4 d-flex"
                    style="background-color: #F1F1F1; justify-content: space-between;">
                    <div style="color: black">Jakarta Timur</div>
                    <div style="justify-content: center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#1C1C1C" width="15" height="15"
                            viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img"
                            class="sc-rbbb40-0 jKmKoK">
                            <title>chevron-right</title>
                            <path
                                d="M6.98 15.94c-0.3-0.28-0.3-0.76 0-1.060l4.46-4.46-4.46-4.48c-0.3-0.28-0.3-0.76 0-1.060s0.76-0.28 1.060 0l5 5c0.28 0.3 0.28 0.78 0 1.060l-5 5c-0.3 0.3-0.78 0.3-1.060 0z">
                            </path>
                        </svg>
                    </div>
                </div>
            </a>
            <a href="{{ route('restaurantLocation', ['loc' => 'jakarta-pusat']) }}"
                style="text-decoration: none !important;width: 50%" class="mb-4">
                <div class="h-80 p-4 border rounded-4 d-flex"
                    style="background-color: #F1F1F1; justify-content: space-between;">
                    <div style="color: black">Jakarta Pusat</div>
                    <div style="justify-content: center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#1C1C1C" width="15" height="15"
                            viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img"
                            class="sc-rbbb40-0 jKmKoK">
                            <title>chevron-right</title>
                            <path
                                d="M6.98 15.94c-0.3-0.28-0.3-0.76 0-1.060l4.46-4.46-4.46-4.48c-0.3-0.28-0.3-0.76 0-1.060s0.76-0.28 1.060 0l5 5c0.28 0.3 0.28 0.78 0 1.060l-5 5c-0.3 0.3-0.78 0.3-1.060 0z">
                            </path>
                        </svg>
                    </div>
                </div>
            </a>
        </div>

        <h2 style="color: #0D3B66; font-weight: bold">Restoran di Jakarta Utara</h2>


        <h2 style="color: #0D3B66; font-weight: bold">Restoran di Jakarta Pusat</h2>

    </div>
@endsection
