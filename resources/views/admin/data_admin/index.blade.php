@extends('admin.layout.app')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="clearfix"></div>
        @include('sweetalert::alert')
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <a href="{{ route('admin.data_admin.tambah') }}" class="btn btn-primary" role="button">Tambah Data</a>
                    <div class="x_title">
                        <h2>Data Admin</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">

                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>NAMA</th>
                                                <th>EMAIL</th>
                                                <th>JK</th>
                                                <th>NO.TLP</th>
                                                <th>AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $no => $adm)
                                                <tr>
                                                    <td>{{ ++$no }}</td>
                                                    <td>{{ $adm->name }}</td>
                                                    <td>{{ $adm->email }}</td>
                                                    <td>{{ $adm->jk }}</td>
                                                    <td>{{ $adm->no_tlp }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-outline-primary"><a
                                                                href="{{ route('admin.data_admin.edit', ['id' => $adm->id]) }}">Edit</button>
                                                        <button type="button" class="btn btn-outline-danger">
                                                            <a href="{{ route('admin.data_admin.delete', ['id' => $adm->id]) }}"
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
