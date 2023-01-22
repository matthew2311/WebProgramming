@section('title')
    Evoba | Rekomendasi Restoran
@endsection

@extends('template')

@section('body')
<div class="container">
    <header class="d-flex justify-content-center py-2">
        <h1 style="color: 0D3B66">Restoran di {{$loc}}</h1>
    </header>

    @if (count($restaurantLoc) < 1)
        <h2 class="mt-3">Maaf, Kami Belum Dapat Menampilkan Restoran di {{$loc}} untuk Saat Ini.</h2>
    @else
        <div class="row row-cols-5">
            @foreach ($restaurantLoc as $rl)
                <div class="card mx-2 mt-2 mb-4 px-0" style="width: 15rem;">
                    <a href="{{route('restaurantDetail', ['id' => $rl->id])}}"><img src="{{$rl->restaurant_image}}" class="card-img-top" width="100px" height="250px"></a>
                    <div class="card-body">
                        <h5 class="card-title" style="color: #0D3B66">{{Str::limit($rl->restaurant_name, 15)}}</h5>
                        <p class="card-text"  style="color: #0D3B66">{{$rl->category->category_name}}</p>
                        <p class="card-text" style="color: #0D3B66">{{$rl->restaurant_city}}</p>
                        <a href="{{route('restaurantDetail', ['id' => $rl->id])}}" class="btn btn-outline-primary btn-block flex-wrap d-flex justify-content-center">Detail Restoran</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <div style="margin: 2rem">
        {{$restaurantLoc->links()}}
    </div>

</div>
@endsection
