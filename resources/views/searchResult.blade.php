@section('title')
    Evoba | Hasil Pencarian
@endsection

@extends('template')

@section('body')
    <div class="container">
        <header class="d-flex mt-2 justify-content-between">
            <h2 style="color: #0D3B66">Hasil Pencarianmu</h2>
        </header>

        <div class="d-flex flex-row mb-3">
            @if (count($search_results) < 1)
                <h2 class="mt-3">Maaf, Kami Tidak Dapat Menemukan Food Blogger yang Anda Cari.</h2>
            @else
                <div class="row pt-1">
                    @foreach ($search_results as $sr)
                    <div class="card mx-2 mt-2 mb-4 px-0" style="width: 15rem;">
                        <a href="{{route('foodBloggerDetail', ['id' => $sr->id])}}"><img src="{{$sr->food_blogger_image}}" class="card-img-top" width="100px" height="250px"></a>
                        <div class="card-body">
                            <h5 class="card-title" style="color: #0D3B66">{{$sr->food_blogger_name}}</h5>
                            <a href="{{route('foodBloggerDetail', ['id' => $sr->id])}}" class="btn btn-outline-primary btn-block flex-wrap d-flex justify-content-center">Detail Food Blogger</a>
                        </div>
                    </div>
                @endforeach
                </div>
            @endif
        </div>

        <div style="margin: 2rem">
            {{$search_results->links()}}
        </div>
    </div>
@endsection
