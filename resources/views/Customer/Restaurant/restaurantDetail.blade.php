@extends('Layouts.template')

@section('title')
    Evoba | Detail Restoran
@endsection

@section('body')
    <div class="container">
        <div class="mt-4">
            <h2 style="color: #0D3B66"><b>Detail Food</b></h2>
        </div>
        {{-- <h3 class="mt-5 ml-3">{{$restaurant_detail->restaurant_name}}</h3> --}}
        @foreach ($restaurant_detail as $rd)
            <div class="card mx-auto my-auto mt-3 p-3" style="width: 1000px; background-color: #EF8354">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset($rd->restaurant->restaurant_image) }}"
                            style="height: 400px !important; width: 400px !important" class="img-fluid rounded-3"
                            alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body" style="color: white">
                            <h2 class="card-title"><b>{{ $rd->restaurant->restaurant_name }}</b></h2>
                            <p class="card-text fs-4">

                            <h5 class="pb-3"><b>Kategori:</b></h5>
                            {{ $rd->restaurant->category->category_name }}
                            <hr>

                            <h5 class="pb-3"><b>Alamat:</b></h5>
                            {{ $rd->restaurant->restaurant_address }}
                            <hr>
                            <div>
                                @if ($rd->restaurant->restaurant_instagram_link != null)
                                    <a href="{{ $rd->restaurant->restaurant_instagram_link }}" target="_blank"
                                        style="color:#EF8354; margin-right: 3px">
                                        <img src="https://www.svgrepo.com/show/452229/instagram-1.svg" width="35px"
                                            height="35px" style="margin-top: 5px; margin-bottom: 10px">
                                    </a>
                                @endif
                                @if ($rd->restaurant->restaurant_gofood != null)
                                    <a href="{{ $rd->restaurant->restaurant_gofood }}" target="_blank"
                                        style="color:#EF8354; margin-right: 3px">
                                        <img src="https://www.svgrepo.com/show/349382/gojek.svg" width="35px"
                                            height="35px" style="margin-top: 5px; margin-bottom: 10px">
                                    </a>
                                @endif
                                <br>
                            </div>
                            @if ($rd->restaurant->restaurant_whatsapp_link != null)
                                <a href="{{ $rd->restaurant->restaurant_whatsapp_link }}" target="_blank"
                                    class="btn btn-success"><i class="bi bi-whatsapp"></i><b>Book Now via WhatsApp</b></a>
                            @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
