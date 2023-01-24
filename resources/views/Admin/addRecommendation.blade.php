@extends('Layouts.template')

@section('title')
    Evoba Admin | Tambah Rekomendasi
@endsection

@section('body')
    <div class="container" style="padding-bottom: 2rem">
        <div class="mt-3 mb-3">
            <form action="{{ route('manageRecommendation') }}" style="border-radius:25px;">
                <button type="submit" class="btn"
                    style="color: #FFFFFF; font-weight:bold; background-color: #0D3B66;">Kembali</button>
            </form>
        </div>

        <div class="card p-4 fw-bold" style="color: #0D3B66">
            <h2><b>Tambah Rekomendasi</b></h2>

            <form action="{{ route('addRecommendationLogic') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mt-2">
                    <label for="" class="form-label mb-2">Nama Restoran<span style="color: red">*</label>
                    <select id="inputState" class="form-select @error('restaurant_id') is-invalid @enderror"
                        name="restaurant_id">
                        <option value="">Pilih Restoran</option>
                        @foreach ($restaurants as $r)
                            <option value={{ $r->id }} @if (old('restaurant_id') == $r->restaurant_name) {{ 'selected' }} @endif>
                                {{ $r->restaurant_name }}</option>
                        @endforeach
                    </select>
                    @error('restaurant_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mt-2">
                    <label for="" class="form-label mb-2">Nama Food Blogger<span style="color: red">*</label>
                    <select id="inputState" class="form-select @error('food_blogger_id') is-invalid @enderror"
                        name="food_blogger_id">
                        <option value="">Pilih Food Blogger</option>
                        @foreach ($foodBloggers as $fb)
                            <option value={{ $fb->id }} @if (old('food_blogger_id') == $fb->food_blogger_name) {{ 'selected' }} @endif>
                                {{ $fb->food_blogger_name }}</option>
                        @endforeach
                    </select>
                    @error('food_blogger_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn tambah mt-3 mb-3 fw-bold" style="border-color:#0D3B66">Tambah
                    Rekomendasi</button>
            </form>
        </div>

    </div>
@endsection
