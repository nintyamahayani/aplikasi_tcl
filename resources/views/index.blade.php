@extends('template')
@section('title','Create Detail Obat')
@section('container')
<div class="card" style="margin-top: 20px;">
    <div class="card-body">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-left">TRANSACTION APPLICATION</h2>
            </div>
            <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
                <a class="btn btn-info float-left" href="create"> Add Medicine</a>
            </div>
        </div>

        @if($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
        @endif


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id Obat</th>
                    <th>Nama Obat</th>
                    <th>Tahun Exp</th>
                    <th>Kategori</th>
                    {{-- <th width="280px">More</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach($obat as $flm)
                <tr>

                    <td>{{ $flm->id }}</td>
                    <td>{{ $flm->nama_obat }}</td>
                    <td>{{ $flm->tahun_exp }}</td>
                    <td>{{ $flm->kategori }}</td>

                </tr>
                @endforeach
            </tbody>

        </table>

        {{-- <div class="alert alert-alert">Start Adding to the Database.</div> --}}

    </div>
</div>
@endsection