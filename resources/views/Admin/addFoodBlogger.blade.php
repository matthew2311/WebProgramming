@extends('Layouts.template')

@section('title')
    Evoba Admin | Tambah Food Blogger
@endsection

@section('body')
    <div class="container">
        <div class="p-2">
            <form action="{{ route('manageFoodBlogger') }}" style="background-color: border-radius:25px">
                <button type="submit" class="btn btn-primary" style="color: #FFFFFF; font-weight:bold"> Back </button>
            </form>
        </div>
        <form action="{{ route('addFoodBloggerLogic') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Nama Food Blogger<span style="color: red">*</label>
                <input type="" class="form-control @error('food_blogger_name') is-invalid @enderror"  value="{{ old('food_blogger_name') }}" id="" name="food_blogger_name">
                @error('food_blogger_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Deskripsi Food Blogger<span style="color: red">*</label>
                <textarea type="long text" class="form-control" id="" rows="5" name="food_blogger_description">{{ old('food_blogger_description') }}</textarea>
            </div>
            <div class="form-group">
                <label>Link Instagram</label>
                <input type="url" class="form-control"  value="{{ old('food_blogger_ig_link') }}" id="" name="food_blogger_ig_link">
            </div>
            <div class="form-group">
                <label>Link Tiktok</label>
                <input type="url" class="form-control"  value="{{ old('food_blogger_tiktok_link') }}" id="" name="food_blogger_tiktok_link">
            </div>
            <div class="form-group">
                <label>Link Youtube</label>
                <input type="url" class="form-control"  value="{{ old('food_blogger_youtube_link') }}" id="" name="food_blogger_youtube_link">
            </div>
            <div class="form-group">
                <div class="row">
                    <label>Foto Food Blogger<span style="color: red">*</label>
                    <label for="exampleFormControlFile1"><span style="font-weight: bold">Tipe File: .jpg/.jpeg/.png</span></label>
                    <input type="file" class="form-control-file" id="" name="food_blogger_image">
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-warning">Tambah Food Blogger</button>
            <br>
        </form>
    </div>
@endsection
