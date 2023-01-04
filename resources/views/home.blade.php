@section('title')
    Evoba | Home
@endsection

@extends('template')

@section('body')
    <div class="container">
        <div
            class="input-group d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline-primary">search</button>
        </div>
    </div>
@endsection
