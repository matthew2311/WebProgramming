@extends('Layouts.template')

@section('title')
    Evoba | Detail Restoran
@endsection

@section('body')
    <div class="container">
        {{-- <h3 class="mt-5 ml-3">{{$restaurant_detail->restaurant_name}}</h3> --}}
        @foreach ($restaurant_detail as $rd)
            <div class="card mx-auto my-auto mt-5" style="width: 1000px; background-color: #EF8354">
                <div class="row no-gutters">
                    <div class="col-md-3 mx-auto my-auto">
                        <img src="{{ $rd->restaurant->restaurant_image }}" class="card-img" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body text-white">
                            <h5 class="card-title">{{ $rd->restaurant->restaurant_name }}</h5>
                            <div class="card-text">
                                Kategori: {{ $rd->restaurant->category->category_name }}
                            </div>
                            <br>
                            <div class="card-text">
                                Alamat:
                                <br>
                                {{ $rd->restaurant->restaurant_address }}
                            </div>
                            <br>
                            <div class="card-text">
                                {{-- Cek yang rekomendasiin ada berapa orang --}}
                                @if (count($restaurant_detail) < 2)
                                    {{-- cuma satu yang rekomendasiin restorannya --}}
                                    @foreach ($restaurant_detail as $rd1)
                                        Direkomendasikan oleh: {{ $rd1->foodBlogger->food_blogger_name }}
                                        <br>
                                    @endforeach
                                @else
                                    {{-- lebih dari satu yang rekomendasiin restorannya --}}
                                    Direkomendasikan oleh:
                                    <br>
                                    @foreach ($restaurant_detail as $rd1)
                                        - {{ $rd1->foodBlogger->food_blogger_name }}
                                        <br>
                                    @endforeach
                                @endif

                            </div>
                            <br>

                            {{-- Ini mau pake Opening Hour sama Price?? Kalo mau berarti tambahin di DB sama Seeder --}}
                            {{-- <div class="card-text">
                            Opening Hours:
                            <br>
                            Monday - Wednesday (12.00 - 15.00, 17.00 - 23.00)
                            <br>
                            Thursday - Sunday (12.00 - 15.00, 17.00 - 02.00)
                        </div>
                        <br>
                        <div class="card-text">
                            Price Range: Di atas Rp200.000,-/orang
                        </div> --}}
                        </div>
                    </div>
                </div>

                {{-- Bakal nampilin button kalo ada linknya, kalo NULL gak muncul buttonnya --}}
                @if ($rd->restaurant->restaurant_whatsapp_link != null)
                    <a href="{{ $rd->restaurant->restaurant_whatsapp_link }}" target="_blank" class="btn btn-success"><i
                            class="bi bi-whatsapp"></i> WhatsApp</a>
                @endif
                @if ($rd->restaurant->restaurant_instagram_link != null)
                    <a href="{{ $rd->restaurant->restaurant_instagram_link }}" target="_blank" class="btn btn-light"><i
                            class="bi bi-instagram"></i> Instagram</a>
                @endif
                @if ($rd->restaurant->restaurant_tiktok_link != null)
                    <a href="{{ $rd->restaurant->restaurant_tiktok_link }}" target="_blank" class="btn btn-dark"><i
                            class="bi bi-tiktok"></i> TikTok</a>
                @endif
                @if ($rd->restaurant->restaurant_gofood != null)
                    <a href="{{ $rd->restaurant->restaurant_gofood }}" target="_blank" class="btn btn-success">GoFood</a>
                @endif
                @if ($rd->restaurant_grabfood != null)
                    <a href="{{ $rd->restaurant->restaurant_grabfood }}" target="_blank" class="btn btn-success">Grab
                        Food</a>
                @endif

            </div>
        @break
    @endforeach
</div>
@endsection
