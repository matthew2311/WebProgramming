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

        @if (count($loc1) > 0)
            <h2 style="color: #0D3B66; font-weight: bold">Restoran di Jakarta Utara</h2>
            <div class="row row-cols-5">
            @foreach ($loc1 as $lc1)
                @foreach ($lc1 as $l1)
                    <div class="col-sm-4 mb-4 d-flex">
                        <a href="{{ route('restaurantDetail', ['id' => $l1->restaurant_id]) }}"
                            style="text-decoration: none">
                            <div class="card home br-2" style="width: 100%">
                                <img class="card-img-top" src="{{ asset($l1->restaurant->restaurant_image) }}"
                                    height="250px">
                                <div class="card-body" style="background-color: #EAEAEA">
                                    <h5 class="card-title" style="color: #0D3B66; margin-bottom: 0.3rem">
                                        <b>{{ Str::limit($l1->restaurant->restaurant_name, 30) }}</b>
                                    </h5>
                                    <p class="card-text fs-6" style="color: #0D3B66; margin-bottom: 0.1rem">
                                        {{ $l1->restaurant->category->category_name }} </p>
                                    <p class="card-text fs-6" style="color: #0D3B66; margin-bottom: 0.1rem">
                                        {{ $l1->restaurant->restaurant_city }} </p>
                                    <div class="card-text d-flex fs-6" style="color: #0D3B66; margin-bottom: 0.1rem">
                                        <img src="https://cdn-icons-png.flaticon.com/512/411/411724.png" height="25px"
                                            width="25px">
                                        <p class="card-text" style="margin-top: 1.5px; margin-left: 3px;">
                                            <b>Direkomendasikan oleh {{ $l1->foodBlogger->food_blogger_name }}</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endforeach
            </div>
        @endif

        @if (count($loc2) > 0)
            <h2 style="color: #0D3B66; font-weight: bold">Restoran di Jakarta Pusat</h2>
            <div class="row row-cols-5">
                @foreach ($loc2 as $lc2)
                    @foreach ($lc2 as $l2)
                        <div class="col-sm-4 mb-4">
                            <a href="{{ route('restaurantDetail', ['id' => $l2->restaurant_id]) }}"
                                style="text-decoration: none">
                                <div class="card home br-2" style="width: 100%">
                                    <img class="card-img-top" src="{{ asset($l2->restaurant->restaurant_image) }}"
                                        height="250px">
                                    <div class="card-body" style="background-color: #EAEAEA">
                                        <h5 class="card-title" style="color: #0D3B66; margin-bottom: 0.3rem">
                                            <b>{{ Str::limit($l2->restaurant->restaurant_name, 30) }}</b>
                                        </h5>
                                        <p class="card-text fs-6" style="color: #0D3B66; margin-bottom: 0.1rem">
                                            {{ $l2->restaurant->category->category_name }} </p>
                                        <p class="card-text fs-6" style="color: #0D3B66; margin-bottom: 0.1rem">
                                            {{ $l2->restaurant->restaurant_city }} </p>
                                        <div class="card-text d-flex" style="color: #0D3B66; margin-bottom: 0.1rem">
                                            <img src="https://cdn-icons-png.flaticon.com/512/411/411724.png"
                                                height="25px" width="25px">
                                            <p class="card-text fs-6" style="margin-top: 1.5px; margin-left: 3px;">
                                                <b>Direkomendasikan oleh {{ $l2->foodBlogger->food_blogger_name }}</b>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endforeach
            </div>
        @endif

        @if (count($loc3) > 0)
            <h2 style="color: #0D3B66; font-weight: bold">Restoran di Jakarta Barat</h2>
            <div class="row row-cols-5">
            @foreach ($loc3 as $lc3)
                @foreach ($lc3 as $l3)
                    <div class="col-sm-4 mb-4 d-flex">
                        <a href="{{ route('restaurantDetail', ['id' => $l3->restaurant_id]) }}"
                            style="text-decoration: none">
                            <div class="card home br-2" style="width: 100%">
                                <img class="card-img-top" src="{{ asset($l3->restaurant->restaurant_image) }}"
                                    height="250px">
                                <div class="card-body" style="background-color: #EAEAEA">
                                    <h5 class="card-title" style="color: #0D3B66; margin-bottom: 0.3rem">
                                        <b>{{ Str::limit($l3->restaurant->restaurant_name, 30) }}</b>
                                    </h5>
                                    <p class="card-text fs-6" style="color: #0D3B66; margin-bottom: 0.1rem">
                                        {{ $l3->restaurant->category->category_name }} </p>
                                    <p class="card-text fs-6" style="color: #0D3B66; margin-bottom: 0.1rem">
                                        {{ $l3->restaurant->restaurant_city }} </p>
                                    <div class="card-text d-flex" style="color: #0D3B66; margin-bottom: 0.1rem">
                                        <img src="https://cdn-icons-png.flaticon.com/512/411/411724.png" height="25px"
                                            width="25px">
                                        <p class="card-text fs-6" style="margin-top: 1.5px; margin-left: 3px;">
                                            <b>Direkomendasikan oleh {{ $l3->foodBlogger->food_blogger_name }}</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endforeach
            </div>
        @endif


    </div>
@endsection
