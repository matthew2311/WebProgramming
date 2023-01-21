@section('title')
    Evoba | Lokasi
@endsection

@extends('template')

@section('body')
<div class="container py-3 px-15">
    <h2 class="mb-3" style="color: #B63D42; font-weight: bold">Tempat Populer Saat Ini</h2>

    <div class="row align-items-md-stretch mb-5">
        <div class="col-md-6 mb-4">
            <div class="h-80 p-4 border rounded-4 flex" style="background-color: #F1F1F1">
                <p>Jakarta Utara</p>
                <a href="{{route('restaurantLocation', ['loc' => "Jakarta Utara"])}}" class="btn btn-light"><span style="font-weight: bold">Lihat</span></a>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="h-80 p-4 border rounded-4" style="background-color: #F1F1F1">
                <p>Jakarta Selatan</p>
                <a href="{{route('restaurantLocation', ['loc' => "Jakarta Selatan"])}}" class="btn btn-light"><span style="font-weight: bold">Lihat</span></a>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="h-80 p-4 border rounded-4" style="background-color: #F1F1F1">
                <p>Jakarta Barat</p>
                <a href="{{route('restaurantLocation', ['loc' => "Jakarta Barat"])}}" class="btn btn-light"><span style="font-weight: bold">Lihat</span></a>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="h-80 p-4 border rounded-4" style="background-color: #F1F1F1">
                <p>Jakarta Timur</p>
                <a href="{{route('restaurantLocation', ['loc' => "Jakarta Timur"])}}" class="btn btn-light"><span style="font-weight: bold">Lihat</span></a>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="h-80 p-4 border rounded-4" style="background-color: #F1F1F1">
                <p>Jakarta Pusat</p>
                <a href="{{route('restaurantLocation', ['loc' => "Jakarta Pusat"])}}" class="btn btn-light"><span style="font-weight: bold">Lihat</span></a>
            </div>
        </div>
    </div>

    
</div>
@endsection
