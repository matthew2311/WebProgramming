@extends('Layouts.template')

@section('title')
    Evoba Admin | Kelola Rekomendasi
@endsection

@section('body')
    <div class="container mt-4">
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

        <div class="row pt-1 justify-content-center">
            @foreach ($recommendations as $rc)
                <div class="card mb-4 p-4"
                    style="width: 575px; {{ $loop->iteration % 2 == 0 ? 'margin-left: 1.25rem' : 'margin-right: 1.25rem' }}">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset($rc->restaurant->restaurant_image) }}" class="card-img"
                                alt="{{ $rc->restaurant->restaurant_name }}"
                                style="height: 150px !important; width: 150px !important">
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="card-body" style="padding: 0px">
                                <h2 class="card-title" style="color: #0D3B66; font-weight:bold">
                                    {{ $rc->restaurant->restaurant_name }}
                                </h2>

                                <h5 class="card-title d-flex mb-3" style="color: #0D3B66; font-weight:bold">
                                    <img src="https://cdn-icons-png.flaticon.com/512/411/411724.png" height="25px"
                                        width="25px">
                                    <p class="card-text" style="margin-top: 1.5px; margin-left: 3px;">
                                        <b>Direkomendasikan oleh {{ $rc->foodBlogger->food_blogger_name }}</b>
                                    </p>
                                </h5>

                                <div class="d-grid gap-2 d-md-flex justify-content-md">
                                    {{-- DELETE --}}
                                    <form action="{{ route('deleteRecommendation', ['id' => $rc->id]) }}"
                                        style="background-color: #FF0000; border-radius: 25px" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger fs-6" type="submit"
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
        </div>

        <div class="justify-content-center d-flex mt-2">
            {{ $recommendations->links() }}
        </div>
    </div>
@endsection
