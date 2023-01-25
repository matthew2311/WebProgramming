@extends('Layouts.template')

@section('title')
    Evoba | Detail Restoran
@endsection

@section('body')
    <div class="container">
        <div class="mt-4">
            <h2 style="color: #0D3B66"><b>Detail Restoran</b></h2>
        </div>

        @foreach ($restaurant_detail as $rd)
            <div class="card mx-auto my-auto mt-3 p-3" style="width: 1000px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset($rd->restaurant->restaurant_image) }}"
                            style="height: 420px !important; width: 450px !important" class="img-fluid rounded-3"
                            alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body" style="color: #0D3B66">
                            <h3 class="card-title"><b>{{ $rd->restaurant->restaurant_name }}</b></h3>
                            <p class="card-text fs-4">

                            <h5 class="pb-3"><b>Kategori:</b></h5>
                            {{ $rd->restaurant->category->category_name }}
                            <hr>

                            <h5 class="pb-3"><b>Alamat:</b></h5>
                            {{ $rd->restaurant->restaurant_address }}
                            <hr>
                            </p>
                            <div>
                                @if ($rd->restaurant->restaurant_instagram_link != null)
                                    <a href="{{ $rd->restaurant->restaurant_instagram_link }}" target="_blank"
                                        style="color:white; margin-right: 3px">
                                        <img src="https://www.svgrepo.com/show/452229/instagram-1.svg" width="35px"
                                            height="35px" style="margin-top: 5px; margin-bottom: 10px">
                                    </a>
                                @endif
                                @if ($rd->restaurant->restaurant_tiktok_link != null)
                                    <a href="{{ $rd->restaurant->restaurant_tiktok_link }}" target="_blank"
                                        style="color:white; margin-right: 3px">
                                        <img src="https://www.svgrepo.com/show/303260/tiktok-logo-logo.svg" width="31px"
                                            height="31px" style="margin-top: 5px; margin-bottom: 10px">
                                    </a>
                                @endif
                                @if ($rd->restaurant->restaurant_gofood != null)
                                    <a href="{{ $rd->restaurant->restaurant_gofood }}" target="_blank"
                                        style="color:white; margin-right: 3px">
                                        <img src="https://www.svgrepo.com/show/349382/gojek.svg" width="31px"
                                            height="31px" style="margin-top: 5px; margin-bottom: 10px">
                                    </a>
                                @endif
                                @if ($rd->restaurant->restaurant_grabfood != null)
                                    <a href="{{ $rd->restaurant->restaurant_grabfood }}" target="_blank"
                                        style="color:white; margin-right: 3px">
                                        <img src="https://iconape.com/wp-content/png_logo_vector/grab.png" width="31px"
                                            height="31px" style="margin-top: 5px; margin-bottom: 10px">
                                    </a>
                                @endif
                                @if ($rd->restaurant->restaurant_gmaps != null)
                                    <a href="{{ $rd->restaurant->restaurant_gmaps }}" target="_blank"
                                        style="color:white; margin-right: 3px">
                                        <img src="https://www.svgrepo.com/show/349391/google-maps-old.svg" width="31px"
                                            height="31px" style="margin-top: 5px; margin-bottom: 10px">
                                    </a>
                                @endif
                                <br>
                            </div>
                            @if ($rd->restaurant->restaurant_whatsapp_link != null)
                                <a href="{{ $rd->restaurant->restaurant_whatsapp_link }}" target="_blank"
                                    class="btn btn-success"><i class="bi bi-whatsapp"></i><b>Hubungi Restoran via
                                        WhatsApp</b></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
