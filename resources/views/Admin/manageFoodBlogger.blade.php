@extends('Layouts.template')

@section('title')
    Evoba Admin | Kelola Food Blogger
@endsection

@section('body')
    <div class="container mt-4">
        <form action="{{ route('searchFoodBlogger') }}" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control" name="search_food_blogger_name" placeholder="Cari Food Blogger"
                aria-label="Search">
        </form>

        <br>

        {{-- ADD PRODUCT blm dihubungkan dengan add page --}}
        <div class="d-grid gap-2 d-md-flex justify-content-md-center" style="margin-bottom: 1.25rem !important">
            <form action="{{ route('addFoodBloggerView') }}" style="border-radius:25px">
                <button type="submit" class="btn" style="color: #FFFFFF; font-weight:bold; background-color: #0C3459">
                    Tambah Food Blogger </button>
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
                    {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>

        <div class="row pt-1 justify-content-center">
            @foreach ($foodBloggers as $fb)
                <div class="card mb-4 p-4"
                    style="width: 575px; {{ $loop->iteration % 2 == 0 ? 'margin-left: 1.25rem' : 'margin-right: 1.25rem' }}">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset($fb->food_blogger_image) }}" class="card-img"
                                alt="{{ $fb->food_blogger_image }}"
                                style="height: 150px !important; width: 150px !important">
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="card-body" style="padding: 0px">
                                <h2 class="card-title mb-4" style="color: #0D3B66; font-weight:bold">
                                    {{ $fb->food_blogger_name }}</h2>

                                <div class="d-grid gap-2 d-md-flex justify-content-md">
                                    <form action="{{ route('updateFoodBloggerView', ['id' => $fb->id]) }}"
                                        style="background-color: #FDB221; border-radius: 25px">
                                        <button type="submit" class="btn white-link text-decoration-none bg-warning fs-6"
                                            style="color: #0D3B66; font-weight:bold">Edit Food
                                            Blogger</button>
                                    </form>

                                    {{-- DELETE --}}
                                    <form action="{{ route('deleteFoodBlogger', ['id' => $fb->id]) }}"
                                        style="background-color: #FF0000; border-radius: 25px" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger fs-6" type="submit"
                                            style="color: #FFFFFF; font-weight:bold">
                                            Hapus Food Blogger
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
            {{ $foodBloggers->links() }}
        </div>
    </div>
@endsection
