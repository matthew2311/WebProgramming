@extends('Layouts.template')

@section('title')
    Evoba Admin | Kelola Food Blogger
@endsection

@section('body')

<div class="container mt-4">
    <form action="{{route('searchFoodBlogger')}}" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control" name="search_food_blogger_name" placeholder="Cari Food Blogger" aria-label="Search">
    </form>

    <br>

    {{-- ADD PRODUCT blm dihubungkan dengan add page --}}
    <div class="d-grid gap-2 d-md-flex justify-content-md-center" style="margin-bottom: 1.25rem !important">
        <form action="#" style="border-radius:25px">
            <button type="submit" class="btn" style="color: #FFFFFF; font-weight:bold; background-color: #0C3459">
                Tambah Food Blogger </button>
        </form>
    </div>

    @foreach ( $foodBloggers as $fb )
    <div class="card mx-auto my-auto mt-2" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-3 mx-auto my-auto">
                <img src="{{asset($fb->food_blogger_image)}}" class="card-img" alt="{{ $fb->food_blogger_name }}" style="height: 100px">
            </div>
            <div class="col-lg-8">
                <div class="card-body">
                    <h5 class="card-title" style="color: #0D3B66; font-weight:bold">{{ $fb->food_blogger_name}}</h5>
                    <br>

                    <div class="d-grid gap-2 d-md-flex justify-content-md">
                        {{-- EDIT --}}
                        {{-- blm dihubungkan dengan edit page --}}
                        <form action="#" style="background-color: #FDB221; border-radius: 25px">
                            <button type="submit" class="btn white-link text-decoration-none bg-warning" style="color: #0D3B66; font-weight:bold">Edit Blogger</button>
                        </form>

                        {{-- DELETE --}}
                        <form action="{{ route('deleteFoodBlogger', ['id'=> $fb->id]) }}" style="background-color: #FF0000; border-radius: 25px" method="POST">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" type="submit" style="color: #FFFFFF; font-weight:bold">
                                Remove Blogger
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
        {{ $foodBloggers->links() }}
    </div>
</div>


@endsection
