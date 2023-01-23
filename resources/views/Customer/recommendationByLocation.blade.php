@extends('Layouts.template')

@section('title')
    Evoba | Rekomendasi Restoran
@endsection

@section('body')
    <div class="container">
        <div class="mt-4 mb-3">
            <h2>Restoran di {{ $loc }}</h2>
        </div>

        @if (count($restaurantLoc) < 1)
            <h2 class="mt-3">Maaf, Kami Belum Dapat Menampilkan Restoran di {{ $loc }} untuk Saat Ini.</h2>
        @else
            <div class="row row-cols-5">
                @foreach ($restaurantLoc as $rl)
                    <div class="col-sm-4 mb-4">
                        <a href="{{ route('restaurantDetail', ['id' => $rl->id]) }}" style="text-decoration: none">
                            <div class="card home br-2" style="width: 400px">
                                <img class="card-img-top" src="{{ asset($rl->restaurant_image) }}" height="250px">
                                <div class="card-body" style="background-color: #EAEAEA">
                                    <h5 class="card-title" style="color: #0D3B66; margin-bottom: 0.3rem">
                                        <b>{{ Str::limit($rl->restaurant_name, 40) }}</b>
                                    </h5>
                                    <p class="card-text" style="color: #0D3B66; margin-bottom: 0.1rem">
                                        {{ $rl->category->category_name }} </p>
                                    <p class="card-text" style="color: #0D3B66; margin-bottom: 0.1rem">
                                        {{ $rl->restaurant_city }} </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="justify-content-center d-flex">
            {{ $restaurantLoc->links() }}
        </div>

    </div>
@endsection
