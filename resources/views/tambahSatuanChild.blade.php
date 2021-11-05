@extends('layouts.master')
@section('content')
@parent
<div class="container-fluid">
    <h1>
        Tambah Data 
    </h1>
    <p>Periksa kembali sebelum menyimpan data.</p>
    <div class="card shadow mb-4">
        <div class="card-header mb-4">
            <h6 class="m-0 font-wight-bold text-primary">Input Data Satuan Produk Baru</h6>
        </div>
        <div class="card-body">
            <form action="CreateSatuan" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Nama Satuan Produk </label>
                <input type="text" class="form-control" 
                required="required" name="namaSatuan"></br>
            </div>
            <div class="form-group" id="only-number">
                <label for="content">Nilai Satuan Produk (Jumlah dalam Toples)</label>
                <input id="number" placeholder="Masukkan Angka" type="number" class="form-control" 
                required="required" name="nilaiSatuan"></br>
            </div>
                <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
            </form>

        </div>
        <a href="SatuanProduk" type="button" name="add" class="btn btn-primary float-left">Kembali</a>
    </div>

    
        
</div>


@endsection