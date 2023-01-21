@section('title')
    Evoba | Detail Restoran
@endsection

@extends('template')

@section('body')
<div class="container">
    <h3 class="mt-5 ml-3">Carbon Restaurant</h3>
    <div class="card mx-auto my-auto mt-5 bg-secondary" style="width: 1000px;">
        <div class="row no-gutters">
            <div class="col-md-3 mx-auto my-auto">
                <img src="https://broonet.com/wp-content/uploads/2020/03/mewarnai-gambar-kartun-9.jpg" class="card-img" alt="">
            </div>
            <div class="col-md-8">
                <div class="card-body text-white">
                    <h5 class="card-title">Carbon Restaurant</h5>
                    <div class="card-text">
                        Kategori: Latin-American
                    </div>
                    <br>
                    <div class="card-text">
                        Alamat:
                        <br>
                        MD Place, MD Place, Jl. Setia Budi Selatan No.7, RT.5/RW.1, Kuningan, Setia Budi, Jakarta, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12910
                    </div>
                    <br>
                    <div class="card-text">
                        Opening Hours:
                        <br>
                        Monday - Wednesday (12.00 - 15.00, 17.00 - 23.00)
                        <br>
                        Thursday - Sunday (12.00 - 15.00, 17.00 - 02.00)
                    </div>
                    <br>
                    <div class="card-text">
                        Price Range: Di atas Rp200.000,-/orang
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<form action="" method="POST">
    @csrf
    <div class="card mx-auto mt-5 bg-success" style="width: 1000px">
        <button type="submit" name="purchase" class="btn btn-outline-secondary text-white">Book Now via WhatsApp</button>
    </div>
</form>


@endsection
