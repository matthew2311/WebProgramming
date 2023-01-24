@extends('Layouts.template')

@section('title')
    Evoba | Home
@endsection

@section('body')
    <main class="background">
        <section class="py-5 container text-center">
            <div class="row py-lg-5 mt-5">
                <div class="col-lg-7 col-md-8 mx-auto teks" style="color: white;">
                    <h1 style="font-weight: bolder; font-size: 40px;">Temukan Makanan dan Minuman Terbaik Setiap Harinya</h1>
                </div>
                <div class="py-3 mb-4 justify-content-center d-flex">
                    <form action="{{ route('search') }}" class="d-flex" style="width: 50%;">
                        @csrf
                        <input type="search" class="form-control" placeholder="Cari Food Blogger Favorit Anda"
                            aria-label="Search" aria-describedby="search-addon" name="search_food_blogger_name">
                        <button type="submit" class="btn btn-danger">Cari</button>
                    </form>

                </div>
            </div>
        </section>

    </main>

    <div class="container py-3 px-15">
        <p class="text-desc mb-3">
            Sekarang mencari tempat hangout menjadi
            jauh lebih mudah dengan Evoba! Temukan tempat makan yang direkomendasi dan dikurasi khusus untuk kamu oleh food
            bloggers favoritmu
        </p>

        <div class="row align-items-md-stretch mb-4">
            <div class="col-md-6 home" style="padding-right: 0px; padding-left: 0px;">
                <a href="{{ route('restaurantIndex') }}" class="btn">
                    <div class="h-90 p-4 border rounded-4" style="background-color: #EF8354">
                        <p style="color: white; font-size: 26px; text-align: left"><b>Lihat Semua Rekomendasi Food
                                Bloggers!</b></p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 home" style="padding-right: 0px; padding-left: 0px;">
                <a href="{{ route('foodBloggerIndex') }}" class="btn">
                    <div class="h-90 p-4 border rounded-4" style="background-color: #EF8354">
                        <p style="color: white; font-size: 26px; text-align: left"><b>Cari Food Blogger Favoritmu Di
                                Sini!</b></p>
                    </div>
                </a>
            </div>
        </div>

        <h2 class="mb-4" style="color: #B63D42; font-weight: bold">Tempat Populer Saat Ini</h2>

        <div class="row align-items-md-stretch justify-content-center">
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
    </div>
@endsection
