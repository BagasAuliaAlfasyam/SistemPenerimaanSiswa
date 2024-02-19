@extends('admin.layout.app')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Laporan Jurusan</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">

                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Tanggal Daftar</th>
                          <th>Jurusan</th>
                          <th>Kuota</th>
                          
                        </tr>
                      </thead>
                      
                      <tbody>
                      @foreach($jurusan as $no =>$j)
                        <tr>
                          <td>{{ ++$no}}</td>
                          <td>{{ \Carbon\Carbon::parse( $j->created_at)->format('d-m-Y') }}</td>
                          <td>{{ $j->nama }} </td>
                          <td>{{ $j->kuota }}</td>
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