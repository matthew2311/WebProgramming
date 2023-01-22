@extends('Layouts.template')

@section('title')
    Evoba | Rekomendasi Restoran
@endsection

@section('body')
    <div class="container">
        <div class="mt-4 mb-3">
            <h2 style="color: #0D3B66">Semua Restoran Rekomendasi Food Blogger</h2>
        </div>

        <div class="d-flex flex-row mb-3">
            @if (count($restaurants) < 1)
                <h2>Maaf, Belum Ada Restoran yang Bisa Ditampilkan untuk Saat Ini. Terima Kasih.</h2>
            @else
                <div class="row pt-1">
                    @foreach ($restaurants as $r)
                        <div class="card mx-2 mt-2 mb-4 px-0" style="width: 15rem;">
                            <a href="{{ route('restaurantDetail', ['id' => $r->restaurant_id]) }}"><img
                                    src="{{ $r->restaurant->restaurant_image }}" class="card-img-top" width="100px"
                                    height="250px"></a>
                            <div class="card-body">
                                <h5 class="card-title" style="color: #0D3B66">
                                    {{ Str::limit($r->restaurant->restaurant_name, 15) }}</h5>
                                <p class="card-text" style="color: #0D3B66">{{ $r->restaurant->category->category_name }}
                                </p>
                                <p class="card-text" style="color: #0D3B66">{{ $r->restaurant->restaurant_city }}</p>
                                <p class="card-text" style="color: #0D3B66"><i class="bi bi-hand-thumbs-up-fill"></i>
                                    Direkomendasikan oleh {{ $r->foodBlogger->food_blogger_name }}</p>
                                <a href="{{ route('restaurantDetail', ['id' => $r->restaurant_id]) }}"
                                    class="btn btn-outline-primary btn-block flex-wrap d-flex justify-content-center">Detail
                                    Restoran</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="justify-content-center d-flex">
            {{ $restaurants->links() }}
        </div>
    </div>
@endsection
