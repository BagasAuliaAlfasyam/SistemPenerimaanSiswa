@extends('admin.layout.app')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="clearfix"></div>
        @include('sweetalert::alert')
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <a href="{{ route('admin.tambah.berita') }}" class="btn btn-primary" role="button">Tambah
                            Data</a>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h2>Data Berita</h2>
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <!-- <th>ID Berita</th> -->
                                                <th>Judul Berita</th>
                                                <th>Author</th>
                                                <th>Tanggal Publish</th>
                                                <th>Kategori</th>
                                                <th>Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($berita as $b)
                                                <tr>
                                                    <td>{{ $b->id }}</td>
                                                    <td>{{ $b->judul }}</td>
                                                    <td>{{ $b->author }}</td>
                                                    <td>{{ $b->tanggal }}</td>
                                                    <td>{{ $b->nama_kategori }}</td>
                                                    <td><img src="{{ asset('storage/' . $b->foto) }}" alt=""
                                                            class="img-responsive" width="140px"></td>
                                                    <td align="center">
                                                        <button type="button" class="btn btn-outline-success"><a
                                                                href="{{ route('admin.berita.detail', ['id' => $b->id]) }}">Detail</button>
                                                        <button type="button" class="btn btn-outline-primary"><a
                                                                href="{{ route('admin.berita.edit', ['id' => $b->id]) }}">Edit</button>
                                                        <button type="button" class="btn btn-outline-danger">
                                                            <a href="{{ route('admin.berita.delete', ['id' => $b->id]) }}"
                                                                onclick="return confirm('Yakin Hapus data')">Hapus</button>

                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
