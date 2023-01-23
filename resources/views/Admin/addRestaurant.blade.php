@extends('Layouts.template')

@section('title')
    Evoba Admin | Tambah Restaurant
@endsection

@section('body')
<div class="container">
    <div class="p-2">
        <form action="#" style="background-color: #0C3459; border-radius:25px">
            <button type="submit" class="btn btn-primary" style="color: #FFFFFF; font-weight:bold"> Back </button>
        </form>
    </div>

    <div>
        <form>
            <div class="form-group">
                <label>name</label>
                <input type="" class="form-control" id="">
            </div>
            <div class="form-group">
                <label>Restaurant Address</label>
                <textarea class="form-control" id="" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label>Google Maps</label>
                <input type="" class="form-control" id="">
            </div>
            <div class="form-group">
                <label>WhatsApp Link</label>
                <input type="" class="form-control" id="">
            </div>
            <div class="form-group">
                <label>Instagram Link</label>
                <input type="" class="form-control" id="">
            </div>
            <div class="form-group">
                <label>Tiktok Link</label>
                <input type="" class="form-control" id="">
            </div>
            <div class="form-group">
                <label>GoFood Link</label>
                <input type="" class="form-control" id="">
            </div>
            <div class="form-group">
                <label>GrabFood Link</label>
                <input type="" class="form-control" id="">
            </div>
            <div class="form-group">
                <label>Photo</label>
                <input type="file" class="form-control-file" id="">
            </div>
            <br>
            <button>Add</button>
            <br>
        </form>
    </div>
</div>
@endsection
