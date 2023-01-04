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
            </div>
        </section>
    </main>
    <div class="container">
        <div
            class="input-group d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline-primary">search</button>
        </div>
    </div>
@endsection
