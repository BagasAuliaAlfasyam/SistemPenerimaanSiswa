@extends('admin.layout.app')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <!-- <div class="page-title">
              <div class="title_left">
                <h3>Users <small>Some examples to get you started</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div> -->

        <div class="clearfix"></div>
        @include('sweetalert::alert')
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                  <!-- <a href="{{ route ('admin.tambah.berita') }}" class="btn btn-primary"  role="button">Tambah Data</a> -->

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                            <h2>Data Kontak</h2>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <!-- <th>ID Berita</th> -->
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Judul</th>
                          <th>Komentar</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      @foreach($kontak as $k)
                      <tbody>
                        <tr>
                          <td>{{ $k->id }}</td>
                          <td>{{ $k->nama }} </td>
                          <td>{{ $k->email }}</td>
                          <td>{{ $k->judul }}</td>
                          <td>{{ $k->komentar }}</td>
                          <td>
                          <button type="button" class="btn btn-outline-danger">
                            <a href="{{ route('admin.kontak.delete',['id'=>$k->id]) }}" onclick="return confirm('Yakin Hapus data')">Hapus</button>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
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