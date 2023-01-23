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
                <h2 class="mt-3 text-center">Maaf, Tidak Ada Restoran untuk Kategori {{ $categoryName->category_name }}.</h2>
            @else
                <div class="row row-cols-5">
                    @foreach ($restaurantCategory as $res_cat)
                        @foreach ($res_cat as $rc)
                            <div class="col-sm-4 mb-4" style="width: 440px">
                                <a href="{{ route('restaurantDetail', ['id' => $rc->restaurant_id]) }}"
                                    style="text-decoration: none">
                                    <div class="card home br-2" style="width: 100%">
                                        <img class="card-img-top" src="{{ asset($rc->restaurant->restaurant_image) }}"
                                            height="250px">
                                        <div class="card-body" style="background-color: #EAEAEA">
                                            <h5 class="card-title" style="color: #0D3B66; margin-bottom: 0.3rem">
                                                <b>{{ Str::limit($rc->restaurant->restaurant_name, 25) }}</b>
                                            </h5>
                                            <p class="card-text" style="color: #0D3B66; margin-bottom: 0.1rem">
                                                {{ $rc->restaurant->category->category_name }} </p>
                                            <p class="card-text" style="color: #0D3B66; margin-bottom: 0.1rem">
                                                {{ $rc->restaurant->restaurant_city }} </p>
                                            <div class="card-text d-flex" style="color: #0D3B66; margin-bottom: 0.1rem">
                                                <img src="https://cdn-icons-png.flaticon.com/512/411/411724.png"
                                                    height="25px" width="25px">
                                                <p class="card-text" style="margin-top: 1.5px; margin-left: 3px;">
                                                    <b>Direkomendasikan oleh {{ $rc->foodBlogger->food_blogger_name }}</b>
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
    </div>
@endsection
