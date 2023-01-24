@extends('Layouts.template')

@section('title')
    Evoba Admin | Tambah Food Blogger
@endsection

@section('body')
    <div class="container" style="padding-bottom: 2rem">

        <div class="mt-3 mb-3">
            <form action="{{ route('manageFoodBlogger') }}" style="background-color: border-radius:25px">
                <button type="submit" class="btn"
                    style="color: #FFFFFF; font-weight:bold; background-color: #0D3B66;">Kembali</button>
            </form>
        </div>

        <div class="card p-4" style="color: #0D3B66">
            <h2><b>Tambah Food Blogger</b></h2>

            <form action="{{ route('addFoodBloggerLogic') }}" class="fw-bold" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mt-2">
                    <label class="fw-bold mb-2">Nama Food Blogger<span style="color: red">*</label>
                    <input type="" class="form-control @error('food_blogger_name') is-invalid @enderror"
                        value="{{ old('food_blogger_name') }}" id="" name="food_blogger_name">
                    @error('food_blogger_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label class="fw-bold mb-2">Deskripsi Food Blogger<span style="color: red">*</label>
                    <textarea type="long text" class="form-control @error('food_blogger_description') is-invalid @enderror" id="" rows="5" name="food_blogger_description">{{ old('food_blogger_description') }}</textarea>
                    @error('food_blogger_description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label class="fw-bold mb-2">Link Instagram</label>
                    <input type="url" class="form-control" value="{{ old('food_blogger_ig_link') }}" id=""
                        name="food_blogger_ig_link">
                </div>

                <div class="form-group mt-2">
                    <label class="fw-bold mb-2">Link Tiktok</label>
                    <input type="url" class="form-control" value="{{ old('food_blogger_tiktok_link') }}" id=""
                        name="food_blogger_tiktok_link">
                </div>

                <div class="form-group mt-2">
                    <label class="fw-bold mb-2">Link Youtube</label>
                    <input type="url" class="form-control" value="{{ old('food_blogger_youtube_link') }}" id=""
                        name="food_blogger_youtube_link">
                </div>

                <div class="form-group mt-2">
                    <label for="restaurant_image" class="mb-2 fw-bold">Foto Restoran<span style="color: red">* </span> <br>
                        Tipe File:
                        .jpg/.jpeg/.png</label>
                    <input class="form-control" type="file" id="" name="food_blogger_image">
                    @error('food_blogger_image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn tambah mt-3 mb-3 fw-bold" style="border-color:#0D3B66">Tambah Food
                    Blogger</button>
            </form>
        </div>
    </div>
@endsection
