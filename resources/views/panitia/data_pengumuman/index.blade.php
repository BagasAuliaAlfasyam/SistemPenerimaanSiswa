@extends('panitia.layout.app')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>DATA PENGUMUMAN</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable-responsive"
                                        class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>ID PENGUMUMAN</th>
                                                <th>NAMA SISWA</th>
                                                <th>Email</th>
                                                <th>No.TLP</th>
                                                <th>STATUS</th>
                                                <th>JUDUL PENGUMUMAN</th>
                                                <th>DESKRIPSI PENGUMUMAN</th>
                                                <th>Nama Panitia</th>
                                                <th>AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pengumuman as $no => $pn)
                                                <tr>
                                                    <td>{{ ++$no }}</td>
                                                    <td>{{ $pn->kode_pgn }}</td>
                                                    <td>{{ $pn->nama_siswa }}</td>
                                                    <td>{{ $pn->email }}</td>
                                                    <td>{{ $pn->no_tlp }}</td>
                                                    <td>{{ $pn->status }}</td>
                                                    <td>{{ $pn->judul_pengumuman }}</td>
                                                    <td>{{ $pn->deskripsi }}</td>
                                                    <td>{{ $pn->nama_panitia }}</td>
                                                    <td><button type="button" class="btn btn-outline-success">
                                                            <a
                                                                href="{{ route('panitia.edit.pengumuman', ['id' => $pn->id]) }}">EDIT</button>
                                                        <button type="button" class="btn btn-outline-success">
                                                            <a
                                                                href="{{ route('panitia.pesan', ['id' => $pn->id]) }}">PESAN</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /page content -->
                @endsection
