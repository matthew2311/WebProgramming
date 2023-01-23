@extends('Layouts.template')

@section('title')
    Evoba | Detail Food Blogger
@endsection

@section('body')
    <div class="container">
        <div class="mt-4">
            <h2 style="color: #0D3B66"><b>Detail Food Blogger</b></h2>
        </div>

        <div class="card mx-auto my-auto mt-3 p-3" style="width: 1000px; background-color: #EF8354">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset($foodBlogger->food_blogger_image) }}" style="height: 400px !important; width: 400px !important" class="img-fluid rounded-3" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body" style="color: white">
                        <h2 class="card-title"><b>{{ $foodBlogger->food_blogger_name }}</b></h2>
                        <p class="card-text fs-4">
                            {{ $foodBlogger->food_blogger_description }} <br>
                            @if ($foodBlogger->food_blogger_ig_link != null)
                                <a href="{{ $foodBlogger->food_blogger_ig_link }}" target="_blank"
                                    style="color:#EF8354; margin-right: 3px">
                                    <img src="https://www.svgrepo.com/show/452229/instagram-1.svg" width="35px"
                                        height="35px" style="margin-top: 5px">
                                </a>
                            @endif
                            @if ($foodBlogger->food_blogger_tiktok_link != null)
                                <a href="{{ $foodBlogger->food_blogger_tiktok_link }}" target="_blank"
                                    style="margin-right: 3px; color:#EF8354">
                                    <img src="https://www.svgrepo.com/show/303260/tiktok-logo-logo.svg" width="30px"
                                        height="30px" style="margin-top: 5px">
                                </a>
                            @endif
                            @if ($foodBlogger->food_blogger_youtube_link != null)
                                <a href="{{ $foodBlogger->food_blogger_youtube_link }}" target="_blank">
                                    <img src="https://www.svgrepo.com/show/448261/youtube.svg" width="40px"
                                        height="40px" style="margin-top: 5px">
                                </a>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-row mb-3">
            @if (count($foodBloggerRec) < 1)
                <h2>Maaf, Belum Ada Restoran yang Bisa Ditampilkan untuk Saat Ini. Terima Kasih.</h2>
            @else
                <div class="row pt-1 mt-4">
                    @foreach ($foodBloggerRec as $fcr)
                        <div class="col-sm-4 mb-4" style="min-width: 440px">
                            <a href="{{ route('restaurantDetail', ['id' => $fcr->restaurant_id]) }}"
                                style="text-decoration: none">
                                <div class="card home br-2" style="width: 100%">
                                    <img class="card-img-top" src="{{ asset($fcr->restaurant->restaurant_image) }}"
                                        height="250px">
                                    <div class="card-body" style="background-color: #EAEAEA">
                                        <h5 class="card-title" style="color: #0D3B66; margin-bottom: 0.3rem">
                                            <b>{{ Str::limit($fcr->restaurant->restaurant_name, 30) }}</b>
                                        </h5>
                                        <p class="card-text" style="color: #0D3B66; margin-bottom: 0.1rem">
                                            {{ $fcr->restaurant->category->category_name }} </p>
                                        <p class="card-text" style="color: #0D3B66; margin-bottom: 0.1rem">
                                            {{ $fcr->restaurant->restaurant_city }} </p>
                                        <div class="card-text d-flex" style="color: #0D3B66; margin-bottom: 0.1rem">
                                            <img src="https://cdn-icons-png.flaticon.com/512/411/411724.png" height="25px"
                                                width="25px">
                                            <p class="card-text" style="margin-top: 1.5px; margin-left: 3px;">
                                                <b>Direkomendasikan oleh {{ $fcr->foodBlogger->food_blogger_name }}</b>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection
