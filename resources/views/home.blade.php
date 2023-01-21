@section('title')
    Evoba | Home
@endsection

@extends('template')

@section('body')
    <main class="background">
        <section class="py-5 container text-center">
            <div class="row py-lg-5">
                <div class="col-lg-7 col-md-8 mx-auto teks" style="color: white;">
                    <h1 style="font-weight: bolder; font-size: 40px;">Temukan Makanan dan Minuman Terbaik Setiap Harinya</h1>
                </div>
                <div class="input-group py-3 mb-4">
                    <input type="search" class="form-control" placeholder="Search" aria-label="Search"
                        aria-describedby="search-addon" />
                    <button type="button" class="btn btn-danger">Search</button>
                </div>
            </div>
        </section>

    </main>

    <div class="container py-3 px-15">
        <p class="text-desc">
            Sekarang mencari tempat hangout menjadi
            jauh lebih mudah dengan Evoba! Temukan tempat makan yang direkomendasi dan dikurasi khusus untuk kamu oleh food
            bloggers favoritmu
        </p>

        <div class="row align-items-md-stretch mb-5">
            <div class="col-md-6">
                <div class="h-90 p-4 border rounded-4" style="background-color: #EF8354">
                    <p style="color: white; font-size: 22px">Lihat Rekomendasi Food Blogger!</p>
                    <a href="{{route('restaurantIndex')}}" class="btn btn-light"><span style="font-weight: bold">Lihat</span></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-90 p-4 border rounded-4" style="background-color: #EF8354">
                    <p style="color: white; font-size: 22px">Cari Food Blogger Favoritmu Di Sini!</p>
                    <a href="{{route('foodBloggerIndex')}}" class="btn btn-light"><span style="font-weight: bold">Cari</span></a>
                </div>
            </div>
        </div>

        <h2 class="mb-3" style="color: #B63D42; font-weight: bold">Tempat Populer Saat Ini</h2>

        <div class="row align-items-md-stretch mb-5">
            <div class="col-md-6 mb-4">
                <div class="h-80 p-4 border rounded-4 flex" style="background-color: #F1F1F1">
                    <p>Jakarta Utara</p>
                    <a href="{{route('restaurantLocation', ['loc' => "Jakarta Utara"])}}" class="btn btn-light"><span style="font-weight: bold">Lihat</span></a>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="h-80 p-4 border rounded-4" style="background-color: #F1F1F1">
                    <p>Jakarta Selatan</p>
                    <a href="{{route('restaurantLocation', ['loc' => "Jakarta Selatan"])}}" class="btn btn-light"><span style="font-weight: bold">Lihat</span></a>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="h-80 p-4 border rounded-4" style="background-color: #F1F1F1">
                    <p>Jakarta Barat</p>
                    <a href="{{route('restaurantLocation', ['loc' => "Jakarta Barat"])}}" class="btn btn-light"><span style="font-weight: bold">Lihat</span></a>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="h-80 p-4 border rounded-4" style="background-color: #F1F1F1">
                    <p>Jakarta Timur</p>
                    <a href="{{route('restaurantLocation', ['loc' => "Jakarta Timur"])}}" class="btn btn-light"><span style="font-weight: bold">Lihat</span></a>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="h-80 p-4 border rounded-4" style="background-color: #F1F1F1">
                    <p>Jakarta Pusat</p>
                    <a href="{{route('restaurantLocation', ['loc' => "Jakarta Pusat"])}}" class="btn btn-light"><span style="font-weight: bold">Lihat</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
