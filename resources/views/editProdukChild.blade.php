@extends('layouts.master')
@section('content')
@parent
<div class="container-fluid">
    <h1>
        Ubah Data 
    </h1>
    <p>Periksa kembali sebelum menyimpan data.</p>
    <div class="card shadow mb-4">
        <div class="card-header mb-4">
            <h6 class="m-0 font-wight-bold text-primary">Ubah Data Produk</h6>
        </div>
        <div class="card-body">
            <form action="update_produk_{{$produk->id}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Nama Produk </label>
                <input value="{{$produk->nama_produk}}" type="text" class="form-control" 
                required="required" name="nama_produk"></br>
            </div>
                <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
            </form>
        </div>
    </div>    
</div>
@endsection