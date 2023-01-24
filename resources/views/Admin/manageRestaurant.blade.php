@extends('Layouts.template')

@section('title')
    Evoba Admin | Kelola Restoran
@endsection

@section('body')
    <div class="container mt-4">
        <form action="{{ route('searchRestaurant') }}" class="col-12 col-lg-auto mb-lg-0 me-lg-3"
            style="margin-bottom: 1.25rem !important" role="search">
            <input type="search" class="form-control" name="search_restaurant_name" placeholder="Cari Restoran"
                aria-label="Search">
        </form>

        {{-- ADD PRODUCT blm dihubungkan dengan add page --}}
        <div class="d-grid gap-2 d-md-flex justify-content-md-center" style="margin-bottom: 1.25rem !important">
            <form action="{{ route('addRestaurantView') }}" style="border-radius:25px">
                <button type="submit" class="btn" style="color: #FFFFFF; font-weight:bold; background-color: #0C3459">
                    Tambah Restoran </button>
            </form>
        </div>

        {{-- Success Message --}}
        <div style="max-width: 700px;" class="mx-auto my-auto">
            @if (Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>

        <div style="max-width: 700px;" class="mx-auto my-auto">
            @if (Session::get('success2'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ Session::get('success2') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>

        <div class="row pt-1 justify-content-center">
            @foreach ($restaurants as $rs)
                <div class="card mb-4 p-4"
                    style="width: 575px; {{ $loop->iteration % 2 == 0 ? 'margin-left: 1.25rem' : 'margin-right: 1.25rem' }}">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset($rs->restaurant_image) }}" class="card-img" alt="{{ $rs->restaurant_name }}"
                                style="height: 150px !important; width: 150px !important">
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="card-body" style="padding: 0px">
                                <h2 class="card-title mb-4" style="color: #0D3B66; font-weight:bold">
                                    {{ $rs->restaurant_name }}</h2>

                                <div class="d-grid gap-2 d-md-flex justify-content-md">
                                    {{-- EDIT --}}
                                    {{-- blm dihubungkan dengan edit page --}}
                                    <form action="{{ route('updateRestaurantView', ['id' => $rs->id]) }}" style="background-color: #FDB221; border-radius: 25px">
                                        <button type="submit" class="btn white-link text-decoration-none bg-warning"
                                            style="color: #0D3B66; font-weight:bold">Edit Restoran</button>
                                    </form>

                                    {{-- DELETE --}}
                                    <form action="{{ route('deleteRestaurant', ['id' => $rs->id]) }}"
                                        style="background-color: #FF0000; border-radius: 25px" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" type="submit"
                                            style="color: #FFFFFF; font-weight:bold">
                                            Hapus Restoran
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="justify-content-center d-flex mt-2">
            {{ $restaurants->links() }}
        </div>
    </div>
@endsection
