@extends('layouts.master')
@section('content')
@parent
<!-- Custom styles for this page -->
<link href="{{asset('asset/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Satuan Produk</h1>
                    <p class="mb-4">Laporan Keluar Masuk Data <a target="_blank"
                            

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Laporan Keluar Masuk Produk</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Satuan</th>
                                            <th>Nilai dalam Biji</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Satuan</th>
                                            <th>Nilai dalam Biji</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($satuan as $s)
                                        <tr>
                                            <td>{{$s->nama_satuan}}</td>
                                            <td>{{$s->nilai}}</td>
                                            <td>
                                            <button type="button" class="btn btn-warning btn-sm">Ubah</button>
                                            <button type="button" class="btn btn-danger btn-sm">Danger</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <button type="button" class="btn btn-success btn-lg btn-block">Tambah nilai Satuan</button>
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
        