@section('title')
    Evoba | Detail Food Blogger
@endsection

@extends('template')

@section('body')
<div class="container">
    <div class="card mx-auto my-auto mt-5" style="width: 1000px; background-color: #EF8354">
        <div class="row no-gutters">
            <div class="col-md-3 mx-auto my-auto">
                <img src="{{$foodBlogger->food_blogger_image}}" class="card-img" alt="">
            </div>
            <div class="col-md-8">
                <div class="card-body text-white">
                    <h5 class="card-title">{{$foodBlogger->food_blogger_name}}</h5>
                    <div class="card-text">
                        {{$foodBlogger->food_blogger_description}}
                    </div>
                </div>
            </div>
            {{-- Bakal nampilin button kalo ada linknya, kalo NULL gak muncul buttonnya --}}
            @if ($foodBlogger->food_blogger_ig_link != NULL)
                <a href="{{$foodBlogger->food_blogger_ig_link}}" target="_blank" class="btn btn-light"><i class="bi bi-instagram"></i> Instagram</a>
            @endif
            @if ($foodBlogger->food_blogger_tiktok_link != NULL)
                <a href="{{$foodBlogger->food_blogger_tiktok_link}}" target="_blank" class="btn btn-dark"><i class="bi bi-tiktok"></i> TikTok</a>
            @endif
            @if ($foodBlogger->food_blogger_youtube_link != NULL)
                <a href="{{$foodBlogger->ffood_blogger_youtube_link}}" target="_blank" class="btn btn-danger"><i class="bi bi-youtube"></i> YouTube</a>
            @endif
        </div>
    </div>
    <div class="d-flex flex-row mb-3">
        @if (count($foodBloggerRec) < 1)
            <h2>Maaf, Belum Ada Restoran yang Bisa Ditampilkan untuk Saat Ini. Terima Kasih.</h2>
        @else
            <div class="row pt-1">
                @foreach ($foodBloggerRec as $fcr)
                    <div class="card mx-2 mt-2 mb-4 px-0" style="width: 15rem;">
                        <a href="{{route('restaurantDetail', ['id' => $fcr->restaurant_id])}}"><img src="{{$fcr->restaurant->restaurant_image}}" class="card-img-top" width="100px" height="250px"></a>
                        <div class="card-body">
                            <h5 class="card-title" style="color: #0D3B66">{{Str::limit($fcr->restaurant->restaurant_name, 15)}}</h5>
                            <p class="card-text"  style="color: #0D3B66">{{$fcr->restaurant->category->category_name}}</p>
                            <p class="card-text" style="color: #0D3B66">{{$fcr->restaurant->restaurant_city}}</p>
                            <p class="card-text" style="color: #0D3B66"><i class="bi bi-hand-thumbs-up-fill"></i> Direkomendasikan oleh {{$fcr->foodBlogger->food_blogger_name}}</p>
                            <a href="{{route('restaurantDetail', ['id' => $fcr->restaurant_id])}}" class="btn btn-outline-primary btn-block flex-wrap d-flex justify-content-center">Detail Restoran</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection
