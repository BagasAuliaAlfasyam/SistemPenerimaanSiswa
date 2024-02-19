@extends('admin.layout.app')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Laporan Berita</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">

                                    <table id="datatable-buttons" class="table table-striped table-bordered"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <!-- <th>ID Berita</th> -->
                                                <th>Tanggal Publish</th>
                                                <th>Judul Berita</th>
                                                <th>Author</th>

                                                <th>Kategori</th>
                                                <th>Gambar</th>

                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach ($berita as $b)
                                                <tr>
                                                    <td>{{ $b->id }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($b->tanggal)->format('d-m-Y') }}</td>
                                                    <td>{{ $b->judul }}</td>
                                                    <td>{{ $b->author }}</td>
                                                    <td>{{ $b->nama_kategori }}</td>
                                                    <td><img src="{{ asset('storage/' . $b->foto) }}" alt=""
                                                            class="img-responsive" width="140px"></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page content -->
            @endsection
