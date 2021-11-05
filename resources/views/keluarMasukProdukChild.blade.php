@extends('layouts.master')
@section('content')
@parent
<!-- Custom styles for this page -->
<link href="{{asset('asset/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Keluar Masuk Produk</h1>
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
                                            <th>Id Laporan</th>
                                            <th>Uraian</th>
                                            <th>Produk</th>
                                            <th>Produk Masuk</th>
                                            <th>Produk Keluar</th>
                                            <th>User</th> 
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id Laporan</th>
                                            <th>Uraian</th>
                                            <th>Produk</th>
                                            <th>Produk Masuk</th>
                                            <th>Produk Keluar</th>
                                            <th>User</th> 
                                            <th>Tanggal</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($laporan as $l)
                                        <tr>
                                            <td>{{$l->id}}</td>
                                            <td>{{$l->uraian}}</td>
                                            <td>{{$l->id_produk}}</td>
                                            <td>{{$l->produk_masuk}}</td>
                                            <td>{{$l->produk_keluar}}</td>
                                            <td>{{$l->id_user}}</td>
                                            <td>{{$l->updated_at}}</td> 
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Input Data
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="tambah_laporan_produk_masuk">Produk Masuk</a>
    <a class="dropdown-item" href="#">Produk Keluar</a>
   
</div>
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
        