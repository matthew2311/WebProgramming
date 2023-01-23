@extends('Layouts.template')

@section('title')
    Evoba | Daftar Food Blogger
@endsection

@section('body')
    <div class="container">
        <div class="mt-4 mb-3">
            <h2 style="color: #0D3B66"><b>Semua Food Blogger Favoritmu</b></h2>
        </div>

        <div class="d-flex flex-row mb-3">
            @if (count($foodBloggers) < 1)
                <h2 class="mt-3">Maaf, Belum Ada Food Blogger yang Bisa Ditampilkan untuk Saat Ini. Terima Kasih.</h2>
            @else
                <div class="row pt-1">
                    @foreach ($foodBloggers as $fb)
                        <div class="col-sm-4 mb-4">
                            <a href="{{ route('foodBloggerDetail', ['id' => $fb->id]) }}" style="text-decoration: none">
                                <div class="card home br-2" style="width: 100%">
                                    <img class="card-img-top" src="{{ asset($fb->food_blogger_image) }}" height="250px">
                                    <div class="card-body" style="background-color: #EAEAEA">
                                        <h5 class="card-title" style="color: #0D3B66"><b>{{ $fb->food_blogger_name }}</b></h5>
                                        @foreach ($recommend as $r)
                                            @if ($r->foodBloggerID == $fb->id)
                                                <p class="card-text" style="color: #0D3B66">{{ $r->recommendationTotal }}
                                                    rekomendasi</p>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{-- <div class="card mx-2 mt-2 mb-4 px-0" style="width: 15rem;">
                            <a href="{{ route('foodBloggerDetail', ['id' => $fb->id]) }}"><img
                                    src="{{ $fb->food_blogger_image }}" class="card-img-top" width="100px"
                                    height="250px"></a>
                            <div class="card-body">
                                <h5 class="card-title" style="color: #0D3B66">{{ $fb->food_blogger_name }}</h5>
                                @foreach ($recommend as $r)
                                    @if ($r->foodBloggerID == $fb->id)
                                        <p class="card-text" style="color: #0D3B66">{{ $r->recommendationTotal }}
                                            rekomendasi</p>
                                    @break
                                @endif
                            @endforeach
                        </div>
                        <a href="{{ route('foodBloggerDetail', ['id' => $fb->id]) }}"
                            class="btn btn-outline-primary btn-block flex-wrap d-flex justify-content-center">Detail
                            Food Blogger</a> --}}
                    @endforeach
            @endif
        </div>
    </div>
@endsection
