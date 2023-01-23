@extends('Layouts.template')

@section('title')
    Evoba Admin | Hasil Pencarin Food Blogger
@endsection

@section('body')
<div class="container">
    <div class="mt-4 mb-3">
        <h2 style="color: #0D3B66">Hasil Pencarian Food Blogger</h2>
    </div>
    <form action="{{route('searchFoodBlogger')}}" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control" name="search_food_blogger_name" placeholder="Cari Food Blogger" aria-label="Search">
    </form>
    <div class="d-flex flex-row mb-3">
        @if (count($search_results) < 1)
            <h2 class="mt-3">Maaf, Kami Tidak Dapat Menemukan Food Blogger yang Anda Cari.</h2>
        @else
            <div class="row pt-1">
                @foreach ($search_results as $sr)
                    <div class="card mx-2 mt-2 mb-4 px-0" style="width: 15rem;">
                        <a href="{{ route('foodBloggerDetail', ['id' => $sr->id]) }}"><img
                                src="{{ asset($sr->food_blogger_image) }}" class="card-img-top" width="100px"
                                height="250px"></a>
                        <div class="card-body">
                            <h5 class="card-title" style="color: #0D3B66">{{ $sr->food_blogger_name }}</h5>
                            <div class="d-grid gap-2 d-md-flex justify-content-md">
                                {{-- EDIT --}}
                                {{-- blm dihubungkan dengan edit page --}}
                                <form action="#" style="background-color: #FDB221; border-radius: 25px">
                                    <button type="submit" class="btn white-link text-decoration-none bg-warning" style="color: #0D3B66; font-weight:bold">Edit Restaurant</button>
                                </form>

                                {{-- DELETE --}}
                                {{-- blm dihubungkan dengan remove page --}}
                                <form action="#" style="background-color: #FF0000; border-radius: 25px" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger" type="submit" style="color: #FFFFFF; font-weight:bold">
                                        Remove Restaurant
                                        </button>
                                </form>
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
