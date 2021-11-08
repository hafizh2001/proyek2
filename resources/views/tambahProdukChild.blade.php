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
            <h6 class="m-0 font-wight-bold text-primary">Input Data Produk Baru</h6>
        </div>
        <div class="card-body">
            <form action="create_produk" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Nama Produk</label>
                <input type="text" class="form-control" 
                required="required" name="nama_produk"></br>
                <input type="hidden" class="form-control" 
                required="required" name="jumlahStok" value="0"></br>
                <label for="title">Satuan</label>
                <select name="id_satuan" class="form-control">
                    @foreach($satuan as $s)
                    <option value="{{$s->id}}">{{$s->nama_satuan}}</option>
                    @endforeach
                </select>
            </div>

                <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
            </form>
        </div>
    </div>
    
        
</div>


@endsection