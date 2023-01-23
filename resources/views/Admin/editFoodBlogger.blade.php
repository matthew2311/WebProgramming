@extends('Layouts.template')

@section('title')
    Evoba Admin | Edit Food Blogger
@endsection

@section('body')
<div class="container">
    <div class="p-2">
        <form action="#" style="background-color: #0C3459; border-radius:25px">
            <button type="submit" class="btn btn-primary" style="color: #FFFFFF; font-weight:bold"> Back </button>
        </form>
        <form>
            <div class="form-group">
                <label>name</label><br>
                <input type="" class="form-control" id="">
            </div>
            <div class="form-group">
                <label>Description</label><br>
                <textarea class="form-control" id="" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label>Instagram Link</label><br>
                <input type="" class="form-control" id="">
            </div>
            <div class="form-group">
                <label>Tiktok Link</label><br>
                <input type="" class="form-control" id="">
            </div>
            <div class="form-group">
                <label>Youtube Link</label><br>
                <input type="" class="form-control" id="">
            </div>
            <div class="form-group">
                <label>Photo</label><br>
                <input type="file" class="form-control-file" id="">
            </div>
            <br>
            <button>Save</button>
            <br>
        </form>
    </div>
</div>
@endsection
