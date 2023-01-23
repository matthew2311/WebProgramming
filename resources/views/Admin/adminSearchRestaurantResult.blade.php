@extends('Layouts.template')

@section('title')
    Evoba Admin | Hasil Pencarian Restoran
@endsection

@section('body')
    <div class="container">
        <div class="mt-4 mb-3">
            <h2 style="color: #0D3B66">Hasil Pencarian Restoran</h2>
        </div>
        <form action="{{ route('searchRestaurant') }}" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control" name="search_restaurant_name" placeholder="Cari Restoran"
                aria-label="Search">
        </form>
        <div class="d-flex flex-row mb-3">
            @if (count($search_results) < 1)
                <h2 class="mt-3">Maaf, Kami Tidak Dapat Menemukan restoran yang Anda Cari.</h2>
            @else
                <div class="row pt-1">
                    @foreach ($search_results as $sr)
                        <div class="card mx-auto my-auto mt-2" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-3 mx-auto my-auto ">
                                    <img src="{{ asset($sr->restaurant_image) }}" class="card-img"
                                        alt="{{ $sr->restaurant_name }}" style="height: 100px">
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #0D3B66; font-weight:bold">
                                            {{ $sr->restaurant_name }}</h5>
                                        <br>

                                        <div class="d-grid gap-2 d-md-flex justify-content-md">
                                            {{-- EDIT --}}
                                            {{-- blm dihubungkan dengan edit page --}}
                                            <form action="#" style="background-color: #FDB221; border-radius: 25px">
                                                <button type="submit"
                                                    class="btn white-link text-decoration-none bg-warning"
                                                    style="color: #0D3B66; font-weight:bold">Edit Restaurant</button>
                                            </form>

                                            {{-- DELETE --}}
                                            <form action="{{ route('deleteRestaurant', ['id' => $sr->id]) }}"
                                                style="background-color: #FF0000; border-radius: 25px" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger" type="submit"
                                                    style="color: #FFFFFF; font-weight:bold">
                                                    Remove Restaurant
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        <div style="margin: 2rem">
            {{ $search_results->links() }}
        </div>
    </div>
@endsection
