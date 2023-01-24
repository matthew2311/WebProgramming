@extends('Layouts.template')

@section('title')
    Evoba | Rekomendasi Restoran
@endsection

@section('body')
    <div class="container">
        <div class="mt-4 mb-3">
            <h2 style="color: #0D3B66"><b>Semua Restoran Rekomendasi Food Blogger</b></h2>
        </div>

        @if (count($restaurants) < 1)
            <h2 class="mt-3 text-center">Maaf, Belum Ada Restoran yang Bisa Ditampilkan untuk Saat Ini. Terima Kasih.</h2>
        @else
            <div class="row pt-1">
                @foreach ($restaurants as $r)
                    <div class="col-sm-4 mb-4" style="min-width: 440px">
                        <a href="{{ route('restaurantDetail', ['id' => $r->restaurant_id]) }}" style="text-decoration: none">
                            <div class="card home br-2" style="width: 100%">
                                <img class="card-img-top" src="{{ asset($r->restaurant->restaurant_image) }}"
                                    height="250px">
                                <div class="card-body" style="background-color: #EAEAEA;">
                                    <h5 class="card-title" style="color: #0D3B66; margin-bottom: 0.3rem">
                                        <b>{{ Str::limit($r->restaurant->restaurant_name, 30) }}</b>
                                    </h5>
                                    <p class="card-text" style="color: #0D3B66; margin-bottom: 0.1rem">
                                        {{ $r->restaurant->category->category_name }} </p>
                                    <p class="card-text" style="color: #0D3B66; margin-bottom: 0.1rem">
                                        {{ $r->restaurant->restaurant_city }} </p>
                                    <div class="card-text d-flex" style="color: #0D3B66; margin-bottom: 0.1rem">
                                        <img src="https://cdn-icons-png.flaticon.com/512/411/411724.png" height="25px"
                                            width="25px">
                                        <p class="card-text" style="margin-top: 1.5px; margin-left: 3px;">
                                            <b>Direkomendasikan oleh {{ $r->foodBlogger->food_blogger_name }}</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="justify-content-center d-flex">
            {{ $restaurants->links() }}
        </div>
    </div>
@endsection
