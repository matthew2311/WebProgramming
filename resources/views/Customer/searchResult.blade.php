@extends('Layouts.template')

@section('title')
    Evoba | Hasil Pencarian
@endsection

@section('body')
    <div class="container">
        <div class="mt-4 mb-3">
            <h2 style="color: #0D3B66"><b>Hasil Pencarianmu</b></h2>
        </div>

        @if (count($search_results) < 1)
            <h2 class="mt-3 text-center">Maaf, Kami Tidak Dapat Menemukan Food Blogger yang Anda Cari.</h2>
        @else
            <div class="row pt-1">
                @foreach ($search_results as $sr)
                    <div class="col-sm-4 mb-4">
                        <a href="{{ route('foodBloggerDetail', ['id' => $sr->id]) }}" style="text-decoration: none">
                            <div class="card home br-2" style="width: 100%">
                                <img class="card-img-top" src="{{ asset($sr->food_blogger_image) }}" height="250px">
                                <div class="card-body" style="background-color: #EAEAEA">
                                    <h5 class="card-title" style="color: #0D3B66"><b>{{ $sr->food_blogger_name }}</b>
                                    </h5>
                                    @foreach ($recommend as $r)
                                        @if ($r->foodBloggerID == $sr->id)
                                            <p class="card-text" style="color: #0D3B66">{{ $r->recommendationTotal }}
                                                rekomendasi</p>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
        @endif

        <div class="justify-content-center d-flex">
            {{ $search_results->links() }}
        </div>
    </div>
@endsection
