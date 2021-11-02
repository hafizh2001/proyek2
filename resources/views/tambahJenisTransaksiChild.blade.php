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
            <h6 class="m-0 font-wight-bold text-primary">Input Data Jenis Transaksi Baru</h6>
        </div>
        <div class="card-body">
            <form action="create_jenis_transaksi" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Nama Jenis Transaksi</label>
                <input type="text" class="form-control" 
                required="required" name="jenis_transaksi"></br>
            </div>
            <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data Jenis Transaksi Baru</button>
            </form>
        </div>
    </div>
    
        
</div>


@endsection
