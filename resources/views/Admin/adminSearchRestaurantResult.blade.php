@extends('Layouts.template')

@section('title')
    Evoba Admin | Hasil Pencarian Restoran
@endsection

@section('body')
    <div class="container">
        <div class="mt-4 mb-3">
            <h2 style="color: #0D3B66"><b>Hasil Pencarian Restoran</b></h2>
        </div>

        <form action="{{ route('searchRestaurant') }}" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control" name="search_restaurant_name" placeholder="Cari Restoran"
                aria-label="Search">
        </form>

        <div style="max-width: 86.5%;" class="mx-auto my-auto mt-3">
            @if (Session::get('success'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>

        @if (count($search_results) < 1)
            <h2 class="mt-3 text-center">Maaf, Kami Tidak Dapat Menemukan restoran yang Anda Cari.</h2>
        @else
            <div class="row pt-1 justify-content-center">
                @foreach ($search_results as $sr)
                    <div class="card mb-4 p-4"
                        style="width: 575px; {{ $loop->iteration % 2 == 0 ? 'margin-left: 1.25rem' : 'margin-right: 1.25rem' }}">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ asset($sr->restaurant_image) }}" class="card-img"
                                    alt="{{ $sr->restaurant_name }}"
                                    style="height: 150px !important; width: 150px !important">
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                                <div class="card-body">
                                    <h2 class="card-title mb-4" style="color: #0D3B66; font-weight:bold">
                                        {{ $sr->restaurant_name }}</h2>

                                    <div class="d-grid gap-2 d-md-flex justify-content-md">
                                        {{-- EDIT --}}
                                        {{-- blm dihubungkan dengan edit page --}}
                                        <form action="#" style="background-color: #FDB221; border-radius: 25px">
                                            <button type="submit" class="btn white-link text-decoration-none bg-warning"
                                                style="color: #0D3B66; font-weight:bold">Edit Restaurant</button>
                                        </form>

                                        {{-- DELETE --}}
                                        <form action="{{ route('deleteRestaurant', ['id' => $sr->id]) }}"
                                            style="background-color: #FF0000; border-radius: 25px" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger" type="submit"
                                                style="color: #FFFFFF; font-weight:bold">
                                                Hapus Restaurant
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
        <div class="justify-content-center d-flex mt-3">
            {{ $search_results->links() }}
        </div>
    </div>
@endsection
