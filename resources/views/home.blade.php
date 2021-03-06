@extends('layouts.master')
@section('content')
@parent
<div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
                    
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h2 class="h4 mb-0 text-gray-800">Informasi Stok Produk</h2>
                        <h2></h2>

                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        @foreach($produk as $p)
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                {{$p->nama_produk}}</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$p->jumlahStok}} {{$p->satuan->nama_satuan}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="50" height="50"viewBox="0 0 172 172"style=" fill:#000000;">
                                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                                        <g fill="#cccccc"><path d="M85.6775,13.6525c-0.1075,0.02688 -0.215,0.06719 -0.3225,0.1075h-47.515c-0.1075,0 -0.215,0 -0.3225,0c-0.1075,0 -0.215,0 -0.3225,0c-0.55094,0.12094 -1.075,0.37625 -1.505,0.7525l-20.3175,16.985l-0.3225,0.215c-0.14781,0.09406 -0.29562,0.20156 -0.43,0.3225c-0.04031,0.04031 -0.06719,0.06719 -0.1075,0.1075c0,0.04031 0,0.06719 0,0.1075c-0.04031,0 -0.06719,0 -0.1075,0c0,0.06719 0,0.14781 0,0.215c-0.08062,0.1075 -0.14781,0.215 -0.215,0.3225c-0.13437,0.20156 -0.24187,0.41656 -0.3225,0.645c-0.05375,0.215 -0.09406,0.43 -0.1075,0.645c-0.02687,0.215 -0.02687,0.43 0,0.645v120.0775c0,1.89469 1.54531,3.44 3.44,3.44h137.6c1.89469,0 3.44,-1.54531 3.44,-3.44v-119.8625c0.01344,-0.17469 0.01344,-0.36281 0,-0.5375c0,-0.06719 0,-0.14781 0,-0.215c0,-0.04031 0,-0.06719 0,-0.1075c0,-0.06719 0,-0.14781 0,-0.215c-0.04031,-0.04031 -0.06719,-0.06719 -0.1075,-0.1075c0,-0.06719 0,-0.14781 0,-0.215c0,-0.04031 0,-0.06719 0,-0.1075c-0.02687,-0.06719 -0.06719,-0.14781 -0.1075,-0.215c-0.04031,-0.04031 -0.06719,-0.06719 -0.1075,-0.1075c0,-0.06719 0,-0.14781 0,-0.215c-0.04031,-0.04031 -0.06719,-0.06719 -0.1075,-0.1075c-0.02687,-0.06719 -0.06719,-0.14781 -0.1075,-0.215c-0.04031,-0.04031 -0.06719,-0.06719 -0.1075,-0.1075c-0.04031,-0.04031 -0.06719,-0.06719 -0.1075,-0.1075c-0.02687,-0.06719 -0.06719,-0.14781 -0.1075,-0.215c-0.04031,-0.04031 -0.06719,-0.06719 -0.1075,-0.1075c-0.04031,-0.04031 -0.06719,-0.06719 -0.1075,-0.1075c-0.04031,-0.04031 -0.06719,-0.06719 -0.1075,-0.1075c-0.04031,-0.04031 -0.06719,-0.06719 -0.1075,-0.1075l-0.3225,-0.215c-0.06719,-0.08062 -0.13437,-0.14781 -0.215,-0.215l-20.1025,-16.77c-0.60469,-0.48375 -1.37062,-0.7525 -2.15,-0.7525h-47.4075c-0.34937,-0.09406 -0.71219,-0.13437 -1.075,-0.1075zM39.13,20.64h43.43v10.32h-55.7925zM89.44,20.64h43.43l12.3625,10.32h-55.7925zM20.64,37.84h130.72v113.52h-130.72zM73.96,51.6c-4.75687,0 -8.6,3.84313 -8.6,8.6c0,4.75688 3.84313,8.6 8.6,8.6h24.08c4.75688,0 8.6,-3.84312 8.6,-8.6c0,-4.75687 -3.84312,-8.6 -8.6,-8.6zM73.96,58.48h24.08c0.73906,0 1.72,0.98094 1.72,1.72c0,0.73906 -0.98094,1.72 -1.72,1.72h-24.08c-0.73906,0 -1.72,-0.98094 -1.72,-1.72c0,-0.73906 0.98094,-1.72 1.72,-1.72zM106.64,106.64l-10.32,10.32h6.88v13.76h6.88v-13.76h6.88zM130.72,106.64l-10.32,10.32h6.88v13.76h6.88v-13.76h6.88zM96.32,134.16v6.88h44.72v-6.88z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <img  src="{{asset('asset/img/dashboard.svg')}}"alt="...">    
                    </div>
                    
                    
                </div>
                <!-- /.container-fluid -->

            </div>
@endsection
        