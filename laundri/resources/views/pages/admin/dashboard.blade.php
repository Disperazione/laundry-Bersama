@extends('master.template')
@section('title', 'Dashboard')
@section('main')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <span class="h2 mb-0">1</span>
                                    <p class="small text-muted mb-0">Total Outlet</p>
                                    <span class="badge badge-pill badge-success">+15.5%</span>
                                </div>
                                <div class="col-auto">
                                    <span class="fe fe-32 fe-layers text-muted mb-0"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <span class="h2 mb-0">186</span>
                                    <p class="small text-muted mb-0">Total Pelanggan</p>
                                    <span class="badge badge-pill badge-warning">+1.5%</span>
                                </div>
                                <div class="col-auto">
                                    <span class="fe fe-32 fe-users text-muted mb-0"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <span class="h2 mb-0">1K+</span>
                                    <p class="small text-muted mb-0">Total Transaksi</p>
                                    <span class="badge badge-pill badge-success">+16.5%</span>
                                </div>
                                <div class="col-auto">
                                    <span class="fe fe-32 fe-shopping-bag text-muted mb-0"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <span class="h2 mb-0">5</span>
                                    <p class="small text-muted mb-0">Kasir</p>
                                    <span class="badge badge-pill badge-warning">+1.5%</span>
                                </div>
                                <div class="col-auto">
                                    <span class="fe fe-32 fe-user text-muted mb-0"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .row-->

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <strong class="card-title">Transaksi Terbaru</strong>
                            <a class="float-right small text-muted" href="#!">View all</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Outlet</th>
                                        <th>Kode Invoice</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Enim Limited</td>
                                        <td>3224</td>
                                        <td>Keith Baird</td>
                                        <td>Apr 24, 2019</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- / .card-body -->
                    </div> <!-- / .card -->
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="chart-widget">
                                <div id="columnChartWidget" width="300" height="200"></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6 text-center mb-3 border-right">
                                    <p class="text-muted mb-1">Total</p>
                                    <h6 class="mb-1">830</h6>
                                    <p class="text-muted mb-2">+5.5%</p>
                                </div>
                                <div class="col-6 text-center mb-3">
                                    <p class="text-muted mb-1">Target</p>
                                    <h6 class="mb-1">4,830</h6>
                                    <p class="text-muted">-5.5%</p>
                                </div>
                                <div class="col-6 text-center border-right">
                                    <p class="text-muted mb-1">Total</p>
                                    <h6 class="mb-1">680</h6>
                                    <p class="text-muted mb-2">+5.5%</p>
                                </div>
                                <div class="col-6 text-center">
                                    <p class="text-muted mb-1">Target</p>
                                    <h6 class="mb-1">430</h6>
                                    <p class="text-muted">-5.5%</p>
                                </div>
                            </div>
                        </div> <!-- .card-body -->
                    </div>
                </div>

            </div>

        </div> <!-- .col-12 -->
    </div>
@endsection
@push('js')
    <script src="{{ asset('js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/apexcharts.custom.js') }}"></script>

@endpush
