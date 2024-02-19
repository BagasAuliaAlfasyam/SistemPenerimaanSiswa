@extends('panitia.layout.app')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row" style="display: contents;">
            <div class="tile_count row-gap-3">
                <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Calon Siswa</span>
                    <div class="count">{{ $siswa->total_user }}</div>
                </div>
                <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-clock-o"></i> Total Pengumuman</span>
                    <div class="count">{{ $pengumuman->total_pengumuman }}</div>
                </div>
                <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Registrasi</span>
                    <div class="count green">{{ $registrasi->total_registrasi }}</div>
                </div>
                <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Tidak Lulus</span>
                    <div class="count">{{ $pengumuman_tidak->total_tidak }}</div>
                </div>
                <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Di Terima</span>
                    <div class="count">{{ $pengumuman_terima->total_terima }}</div>
                </div>
                <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Seleksi</span>
                    <div class="count">{{ $seleksi->total_seleksi }}</div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
    </div>
    </div>
@endsection
