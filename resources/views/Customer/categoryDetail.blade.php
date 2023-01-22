@extends('Layouts.template')

@section('title')
    Evoba | Detail Kategori
@endsection


@section('body')
    <div class="container">
        <div class="mt-4 mb-3">
            <h2 style="color: #0D3B66"><b>{{ $categoryName->category_name }}</b></h2>
        </div>

        <div class="d-flex flex-row mb-3 mt-3">
            @if (count($restaurantCategory) < 1)
                <h2 class="mt-3">Maaf, Tidak Ada Restoran untuk Kategori {{ $categoryName->category_name }}.</h2>
            @else
                <div class="row row-cols-5">
                    @foreach ($restaurantCategory as $rc)
                        <div class="card mx-2 mt-2 mb-4 px-0" style="width: 15rem;">
                            <a href="{{ route('restaurantDetail', ['id' => $rc->id]) }}"><img
                                    src="{{ $rc->restaurant_image }}" class="card-img-top" width="100px" height="250px"></a>
                            <div class="card-body">
                                <h5 class="card-title" style="color: #0D3B66">{{ Str::limit($rc->restaurant_name, 15) }}
                                </h5>
                                <p class="card-text" style="color: #0D3B66">{{ $rc->category->category_name }}</p>
                                <p class="card-text" style="color: #0D3B66">{{ $rc->restaurant_city }}</p>
                                <a href="{{ route('restaurantDetail', ['id' => $rc->id]) }}"
                                    class="btn btn-outline-primary btn-block flex-wrap d-flex justify-content-center">Detail
                                    Restoran</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection
