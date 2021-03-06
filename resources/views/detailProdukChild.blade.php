@extends('layouts.master')
@section('content')
@parent
<!-- Custom styles for this page -->
<link href="{{asset('asset/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Detail Produk</h1>
                    <p class="mb-4">Detail Produk berisikan List Produk yang di produksi perusahaan<a target="_blank"
                            

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Detail Produk</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id Produk</th>
                                            <th>Nama Produk</th>
                                            <th>jumlah Stok</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id Produk</th>
                                            <th>Nama Produk</th>
                                            <th>jumlah Stok</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($produk as $pr)
                                        <tr>
                                            <td>{{$pr->id}}</td>
                                            <td>{{$pr->nama_produk}}</td>
                                            <td>{{$pr->jumlahStok}} {{$pr->satuan->nama_satuan}}</td>
                                            <td>
                                            <a href="ubah_produk_{{$pr->id}}" type="button" class="btn btn-warning btn-sm">Ubah</a>
                                            <a href="delete_produk_{{$pr->id}}" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <a href='tambah_produk' class="btn btn-success btn-lg btn-block"  role="button">Tambah Produk Baru</a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('asset/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('asset/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('asset/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('asset/js/demo/datatables-demo.js')}}"></script> 

@endsection
        