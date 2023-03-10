@extends('Layouts.template')

@section('title')
    Evoba Admin | Tambah Restaurant
@endsection

@section('body')
    <div class="container" style="padding-bottom: 2rem">
        <div class="mt-3 mb-3">
            <form action="{{ route('manageRestaurant') }}" style="background-color: border-radius:25px">
                <button type="submit" class="btn"
                    style="color: #FFFFFF; font-weight:bold; background-color: #0D3B66;">Kembali</button>
            </form>
        </div>

        <div class="card p-4" style="color: #0D3B66">
            <h2> <b>Tambah Restoran     </b></h2>
            <form action="{{ route('addRestaurantLogic') }}" style="font-weight: bold" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-2">
                    <label class="mb-2">Nama Restoran<span style="color: red">*</label>
                    <input type="text" class="form-control @error('restaurant_name') is-invalid @enderror" id=""
                        name="restaurant_name" value="{{ old('restaurant_name') }}">
                    @error('restaurant_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label class="mb-2">Alamat Restoran<span style="color: red">*</label>
                    <textarea type="long text" class="form-control @error('restaurant_address') is-invalid @enderror" id=""
                        rows="3" name="restaurant_address">{{ old('restaurant_address') }}</textarea>
                    @error('restaurant_address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-2 mt-2">
                    <label for="" class="form-label">Kota Restoran<span style="color: red">*</label>
                    <select id="inputState" class="form-select @error('restaurant_city') is-invalid @enderror"
                        name="restaurant_city">
                        <option value="">Pilih Kota Restoran</option>
                        <option value="Jakarta Barat" @if (old('restaurant_city') == 'Jakarta Barat') {{ 'selected' }} @endif>Jakarta
                            Barat</option>
                        <option value="Jakarta Pusat" @if (old('restaurant_city') == 'Jakarta Pusat') {{ 'selected' }} @endif>Jakarta
                            Pusat</option>
                        <option value="Jakarta Selatan" @if (old('restaurant_city') == 'Jakarta Selatan') {{ 'selected' }} @endif>Jakarta
                            Selatan</option>
                        <option value="Jakarta Timur" @if (old('restaurant_city') == 'Jakarta Timur') {{ 'selected' }} @endif>Jakarta
                            Timur</option>
                        <option value="Jakarta Utara" @if (old('restaurant_city') == 'Jakarta Utara') {{ 'selected' }} @endif>Jakarta
                            Utara</option>
                    </select>
                    @error('restaurant_city')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-2 mt-2">
                    <label for="" class="form-label">Kategori Restoran<span style="color: red">*</label>
                    <select id="inputState" class="form-select @error('restaurant_category_id') is-invalid @enderror"
                        name="restaurant_category_id">
                        <option value="">Pilih Kategori Restoran</option>
                        <option value=1 @if (old('restaurant_category_id') == 1) {{ 'selected' }} @endif>Indonesian Food
                        </option>
                        <option value=2 @if (old('restaurant_category_id') == 2) {{ 'selected' }} @endif>Chinese Food</option>
                        <option value=3 @if (old('restaurant_category_id') == 3) {{ 'selected' }} @endif>Japanese Food
                        </option>
                        <option value=4 @if (old('restaurant_category_id') == 4) {{ 'selected' }} @endif>Western Food</option>
                        <option value=5 @if (old('restaurant_category_id') == 5) {{ 'selected' }} @endif>Italian Food</option>
                        <option value=6 @if (old('restaurant_category_id') == 6) {{ 'selected' }} @endif>Dessert</option>
                    </select>
                    @error('restaurant_category_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label class="mb-2">Link Google Maps<span style="color: red">*</label>
                    <input type="url" class="form-control @error('restaurant_gmaps') is-invalid @enderror"
                        value="{{ old('restaurant_gmaps') }}" name="restaurant_gmaps" id="">
                    @error('restaurant_gmaps')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label class="mb-2">Link WhatsApp<span style="color: red">*</label>
                    <input type="url" class="form-control @error('restaurant_whatsapp_link') is-invalid @enderror"
                        value="{{ old('restaurant_whatsapp_link') }}" name="restaurant_whatsapp_link" id="">
                    @error('restaurant_whatsapp_link')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label class="mb-2">Link Instagram</label>
                    <input type="url" class="form-control" value="{{ old('restaurant_instagram_link') }}"
                        name="restaurant_instagram_link" id="">
                </div>
                <div class="form-group mt-2">
                    <label class="mb-2">Link Tiktok</label>
                    <input type="url" class="form-control" value="{{ old('restaurant_tiktok_link') }}"
                        name="restaurant_tiktok_link" id="">
                </div>
                <div class="form-group mt-2">
                    <label class="mb-2">Link GoFood</label>
                    <input type="url" class="form-control" value="{{ old('restaurant_gofood') }}"
                        name="restaurant_gofood" id="">
                </div>
                <div class="form-group mt-2">
                    <label class="mb-2">Link GrabFood</label>
                    <input type="url" class="form-control" value="{{ old('restaurant_grabfood') }}"
                        name="restaurant_grabfood" id="">
                </div>

                <div class="form-group mt-2">
                    <label for="restaurant_image" class="mb-2">Foto Restoran<span style="color: red">* </span> <br>
                        Tipe File:
                        .jpg/.jpeg/.png</label>
                    <input class="form-control" type="file" id="restaurant_image" name="restaurant_image">
                    @error('restaurant_image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" style="border-color: #0D3B66" class="btn mt-3 mb-3 tambah"><b>Tambah
                        Restoran</b></button>
            </form>
        </div>
    </div>
@endsection
