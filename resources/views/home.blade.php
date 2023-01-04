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
    </div>
@endsection
