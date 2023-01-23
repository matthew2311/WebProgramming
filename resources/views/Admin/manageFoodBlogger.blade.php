@extends('Layouts.template')

@section('title')
    Evoba Admin | Kelola Food Blogger
@endsection

@section('body')

<div class="container">
    <form action="{{route('searchFoodBlogger')}}" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control" name="search_food_blogger_name" placeholder="Cari Food Blogger" aria-label="Search">
    </form>

    <br>

    <form action="#">
        <button type="submit" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Tambah Food Blogger</button>
    </form>
</div>

@endsection
