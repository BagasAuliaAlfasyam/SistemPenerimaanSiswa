@extends('admin.layout.app')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Laporan Panitia</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">

                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>NO</th>
                          <th>Tanggal Daftar</th>
                          <th>NAMA</th>
                          <th>EMAIL</th>
                          <th>JK</th>
                          <th>NO.TLP</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($users as $no =>$pn)  
                        <tr>
                          <td>{{ ++$no }}</td>
                          <td>{{ \Carbon\Carbon::parse( $pn->created_at)->format('d-m-Y') }}</td>
                          <td>{{ $pn->name }}</td>
                          <td>{{$pn->email}}</td>
                          <td>{{$pn->jk}}</td>
                          <td>{{$pn->no_tlp}}</td>
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