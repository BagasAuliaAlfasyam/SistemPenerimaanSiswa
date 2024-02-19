@extends('admin.layout.app')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>
            @include('sweetalert::alert')
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Data Siswa</h2>
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
                                                @foreach ($users as $no => $sis)
                                                    <tr>
                                                        <td>{{ ++$no }}</td>
                                                        <td>{{ $sis->name }}</td>
                                                        <td>{{ $sis->email }}</td>
                                                        <td>{{ $sis->jk }}</td>
                                                        <td>{{ $sis->no_tlp }}</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-primary"><a
                                                                    href="{{ route('admin.data_siswa.reset', ['id' => $sis->id]) }}">Reset</button>
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
