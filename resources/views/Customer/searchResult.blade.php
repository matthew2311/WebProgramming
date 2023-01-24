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
                    <div class="col-sm-4 mb-4" style="width: 15rem;">
                        <a href="{{ route('foodBloggerDetail', ['id' => $sr->id]) }}">
                            <img src="{{ $sr->food_blogger_image }}" class="card-img-top" width="100px" height="250px"></a>
                        <div class="card-body">
                            <h5 class="card-title" style="color: #0D3B66">{{ $sr->food_blogger_name }}</h5>
                            <a href="{{ route('foodBloggerDetail', ['id' => $sr->id]) }}"
                                class="btn btn-outline-primary btn-block flex-wrap d-flex justify-content-center">Detail
                                Food Blogger</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="justify-content-center d-flex">
            {{ $search_results->links() }}
        </div>
    </div>
@endsection
