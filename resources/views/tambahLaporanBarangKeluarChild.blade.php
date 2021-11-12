@extends('layouts.master')
@section('content')
@parent
<div class="container-fluid">
    <h1>
        Tambah Data Transaksi
    </h1>
    <p>Pastikan data yang dimasukkan sudah benar.</p>
    <div class="card shadow mb-4">
        <div class="card-header mb-4">
            <h6 class="m-0 font-wight-bold text-primary">Input Data </h6>
        </div>
        <div class="card-body">
            <form action="create_laporan_barang_keluar" method="post">
            @csrf
            <div class="form-group">
                <input type="hidden" class="form-control" 
                required="required" name="uraian" value="Produk Keluar">
                <label for="title">Produk</label>
                
                <select name="produk_id" class="form-control">
                @foreach($produk as $s)    
                    <option value="{{$s->id}}">{{$s->nama_produk}} | Tersedia : {{$s->jumlahStok}} </option>
                @endforeach    
                </select><br>
                <label for="title">Jumlah Produk Keluar </label>
                
                <input type="number" class="form-control" 
                required="required" name="produk_keluar"></br>
                <input type="hidden" class="form-control" 
                required="required" name="produk_masuk" value="0">
                <input type="hidden" class="form-control" 
                required="required" name="user_id" value="{{ Auth::user()->id }}">
                <label for="title">Produk</label>
                <select name="satuan_id" class="form-control">
                    @foreach($satuan as $s)
                    <option value="{{$s->id}}">{{$s->nama_satuan}}</option>
                    @endforeach
                </select><br>
                 

            </div>

                <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
            </form>
            </form>
        </div>
    </div>
    
        
</div>

@endsection