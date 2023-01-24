@extends('Layouts.template')

@section('title')
    Evoba Admin | Hasil Pencarin Food Blogger
@endsection

@section('body')
    <div class="container mb-3">
        <div class="mt-4 mb-3">
            <h2 style="color: #0D3B66"> <b>Hasil Pencarian Food Blogger</b></h2>
        </div>
        <form action="{{ route('searchFoodBlogger') }}" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control" name="search_food_blogger_name" placeholder="Cari Food Blogger"
                aria-label="Search">
        </form>
        <div style="max-width: 86.5%;" class="mx-auto my-auto mt-3">
            @if (Session::get('success'))
                @if (Session::get('success'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ Session::get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
        </div>
        @endif
    </div>

    @if (count($search_results) < 1)
        <h2 class="mt-3 text-center"><b></b> Maaf, Kami Tidak Dapat Menemukan Food Blogger yang Anda Cari.</h2>
    @else
        <div class="d-flex flex-row mb-1 mt-4 {{ count($search_results) <= 2 ? 'justify-content-center' : '' }}">
            <div class="row pt-1 justify-content-center">
                @foreach ($search_results as $sr)
                    <div class="card mb-4 p-4"
                        style="width: 540px; {{ $loop->iteration % 2 == 0 ? 'margin-left: 1.25rem' : 'margin-right: 1.25rem' }}">
                        <div class="row no-gutters">
                            <div class="col-md-4 mx-auto my-auto">
                                <img src="{{ asset($sr->food_blogger_image) }}" class="card-img"
                                    alt="{{ $sr->food_blogger_name }}" style="height: 150px; width: 150px">
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                                <div class="card-body">
                                    <h2 class="card-title mb-4" style="color: #0D3B66; font-weight:bold">
                                        {{ $sr->food_blogger_name }}</h2>

                                    <div class="d-grid gap-2 d-md-flex justify-content-md">
                                        {{-- EDIT --}}
                                        {{-- blm dihubungkan dengan edit page --}}
                                        <form action="#" style="background-color: #FDB221; border-radius: 25px">
                                            <button type="submit" class="btn white-link text-decoration-none bg-warning"
                                                style="color: #0D3B66; font-weight:bold">Edit Blogger</button>
                                        </form>

                                        {{-- DELETE --}}
                                        <form action="{{ route('deleteFoodBlogger', ['id' => $sr->id]) }}"
                                            style="background-color: #FF0000; border-radius: 25px" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger" type="submit"
                                                style="color: #FFFFFF; font-weight:bold">
                                                Remove Blogger
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

    <div class="justify-content-center d-flex {{ count($search_results) == 0 ? 'admin'  : '' }}">
        {{ $search_results->links() }}
    </div>

    </div>
@endsection
