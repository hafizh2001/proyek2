@extends('layouts.master')
@section('content')
@parent
<!-- Custom styles for this page -->
<link href="{{asset('asset/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Barang Masuk</h1>
                            

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Produk</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id Transaksi</th>
                                            <th>Nama Produk</th>
                                            <th>Jumlah</th>
                                            <th>Satuan</th>
                                            <th>User</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id Transaksi</th>
                                            <th>Nama Produk</th>
                                            <th>Jumlah</th>
                                            <th>Satuan</th>
                                            <th>User</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($barang_masuk as $pr)
                                        <tr>
                                            <td>{{$pr->id_laporan}}</td>
                                            <td>{{$pr->nama_produk}}</td>
                                            <td>{{$pr->jumlah}}</td>
                                            <td>{{$pr->id_satuan}}</td>
                                            <td>{{$pr->id_user}}</td>
                                            <td>{{$pr->updated_at}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                               
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
        