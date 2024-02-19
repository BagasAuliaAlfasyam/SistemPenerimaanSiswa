@extends('admin.layout.app')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row" style="display: contents;">
            <div class="tile_count">
                <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Panitia</span>
                    <div class="count">{{ $panitia->total_user }}</div>
                </div>

                <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Siswa</span>
                    <div class="count">{{ $siswa->total_user }}</div>
                </div>
                <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-clock-o"></i> Total Berita</span>
                    <div class="count">{{ $berita->total_berita }}</div>
                </div>
                <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Jurusan</span>
                    <div class="count green">{{ $jurusan->total_jurusan }}</div>
                </div>
                <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Galeri</span>
                    <div class="count">{{ $galeri->total_galeri }}</div>
                </div>
                <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Kontak</span>
                    <div class="count">{{ $kontak->total_kontak }}</div>
                </div>

            </div>
        </div>
    </div>
@endsection
