@extends('Layouts.template')

@section('title')
    Evoba Admin | Edit Rekomendasi
@endsection

@section('body')
<div class="container">
    <div class="p-2">
        <form action="{{ route('manageRecommendation') }}" style="background-color: border-radius:25px">
            <button type="submit" class="btn btn-primary" style="color: #FFFFFF; font-weight:bold">Kembali</button>
        </form>
    </div>
    <form action="{{ route('updateRecommendationLogic', ['id' => $recommendation->id]) }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div>
            <label for="" class="form-label">Nama Restoran<span style="color: red">*</label>
            <label for="" class="form-label">Restoran Sekarang: {{$recommendation->restaurant->restaurant_name}}</label>
            <select id="inputState" class="form-select @error('restaurant_id') is-invalid @enderror"
                name="restaurant_id">
                <option>Pilih Restoran</option>
                @foreach ($restaurants as $r)
                    <option value={{ $r->id }} @if (old('restaurant_id') == $r->restaurant_name) {{ 'selected' }} @endif>{{ $r->restaurant_name }}</option>
                @endforeach
            </select>
            @error('restaurant_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <label for="" class="form-label">Nama Food Blogger<span style="color: red">*</label>
            <label for="" class="form-label">Food Blogger Sekarang: {{$recommendation->foodBlogger->food_blogger_name}}</label>
            <select id="inputState" class="form-select @error('food_blogger_id') is-invalid @enderror"
                name="food_blogger_id">
                <option>Pilih Food Blogger</option>
                @foreach ($foodBloggers as $fb)
                    <option value={{ $fb->id }} @if (old('food_blogger_id') == $fb->food_blogger_name) {{ 'selected' }} @endif>{{ $fb->food_blogger_name }}</option>
                @endforeach
            </select>
            @error('food_blogger_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <br>
        <button type="submit" class="btn btn-warning">Perbarui Data Rekomendasi</button>
        <br>
    </form>
</div>
@endsection
