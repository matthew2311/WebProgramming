@extends('Layouts.template')

@section('title')
    Evoba Admin | Kelola Rekomendasi
@endsection

@section('body')
<div class="container mt-4">
    {{-- <form action="{{ route('searchFoodBlogger') }}" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3"
        style="margin-bottom: 1.25rem !important" role="search">
        <input type="search" class="form-control" name="search_food_blogger_name" placeholder="Cari Food Blogger"
            aria-label="Search">
    </form> --}}

    {{-- ADD PRODUCT blm dihubungkan dengan add page --}}
    <div class="d-grid gap-2 d-md-flex justify-content-md-center" style="margin-bottom: 1.25rem !important">
        <form action="{{ route('addRecommendationView') }}" style="border-radius:25px">
            <button type="submit" class="btn" style="color: #FFFFFF; font-weight:bold; background-color: #0C3459">
                Tambah Rekomendasi </button>
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

    @foreach ($recommendations as $rc)
        <div class="card mx-auto my-auto mt-2" style="max-width: 700px;">
            <div class="row no-gutters p-4">
                <div class="col-md-4">
                    <img src="{{ asset($rc->restaurant->restaurant_image) }}" class="card-img" alt="{{ $rc->restaurant->restaurant_name }}"
                        style="height: 200px !important; width: 200px !important">
                </div>
                <div class="col">
                    <div class="card-body">
                        <h2 class="card-title" style="color: #0D3B66; font-weight:bold">
                            <b>{{ $rc->restaurant->restaurant_name }}</b>
                        </h2>
                        <h5 class="card-title" style="color: #0D3B66; font-weight:bold">
                            <b>Direkomendasikan oleh</b>
                        </h5>
                        <h4 class="card-title" style="color: #0D3B66; font-weight:bold">
                            <b>{{ $rc->foodBlogger->food_blogger_name }}</b>
                        </h4>
                        <br>

                        <div class="d-grid gap-2 d-md-flex justify-content-md">
                            {{-- EDIT --}}
                            {{-- blm dihubungkan dengan edit page --}}
                            <form action="{{ route('updateRecommendationView', ['id' => $rc->id]) }}" style="background-color: #FDB221; border-radius: 25px">
                                <button type="submit" class="btn white-link text-decoration-none bg-warning fs-5"
                                    style="color: #0D3B66; font-weight:bold">Edit Rekomendasi</button>
                            </form>

                            {{-- DELETE --}}
                            <form action="{{ route('deleteRecommendation', ['id' => $rc->id]) }}"
                                style="background-color: #FF0000; border-radius: 25px" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger fs-5" type="submit"
                                    style="color: #FFFFFF; font-weight:bold">
                                    Hapus Rekomendasi
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <br>
    <div class="justify-content-center d-flex">
        {{ $recommendations->links() }}
    </div>
</div>
@endsection
