@extends('template')
@section('title','Create Detail Obat')
@section('container')
<div class="card" style="margin-top: 20px;">
    <div class="card-body">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Add Medicine</h2>
            </div>
        </div>
        <div class="card" style="margin-top: 20px;">

            <form action="{{ route('tambah') }}" method="POST">
                {{ csrf_field() }}


                <div class="form-group">
                    <label for="id">Id Obat</label>
                    <input type="number" name="id" class="form-control" id="id" aria-describedby="id" placeholder="Masukan id produk">
                </div>
                <div class="form-group">
                    <label for="nama_obat">Nama Obat</label>
                    <input type="text" name="nama_obat" class="form-control" id="nama_obat" aria-describedby="nama_obat" placeholder="Masukan Nama Obat">
                </div>
                <div class="form-group">
                    <label for="tahun_exp">Tahun Exp</label>
                    <input type="text" name="tahun_exp" class="form-control" id="tahun_exp" aria-describedby="tahun_exp" placeholder="Masukan Exp Obat">
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" name="kategori" class="form-control" id="kategori" aria-describedby="kategori" placeholder="Masukan kategori obat">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection