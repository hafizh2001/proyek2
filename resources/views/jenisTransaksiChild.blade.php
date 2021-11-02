@extends('layouts.master')
@section('content')
@parent
<!-- Custom styles for this page -->
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Jenis Transaksi</h1>
                    <p class="mb-4">Berisikan Jenis transaksi yang ada di gudang (barang keluar dan barang masuk), digunakan sebagai penentuan jenis transaksi barang </p><a target="_blank"></a>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Jenis Transaksi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Jenis Transaksi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Jenis Transaksi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($jenis_transaksi as $j)
                                        <tr>
                                            <td>{{$j->jenis_transaksi}}</td>
                                            <td>
                                            <a href="edit_transaksi_{{$j->id}}" type="button" class="btn btn-warning btn-sm">Ubah</a>
                                            <a href="delete_transaksi_{{$j->id}}" type="button" class="btn btn-danger btn-sm">hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                               <!-- <a href='TambahJenisTransaksi'> -->
                                
                               <a href='tambah_jenis_transaksi' type="button" class="btn btn-success btn-lg btn-block">Tambah Transaksi</a>
                                 
                                
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
        