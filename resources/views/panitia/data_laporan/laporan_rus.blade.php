@extends('panitia.layout.app')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Registrasi Ulang Siswa</h2>
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
                                                <th>TGL REGISTRASI</th>
                                                <th>ID REGISTRASI</th>
                                                <th>Nama Siswa</th>
                                                <th>NO. SERI IJAZAH</th>
                                                <th>NAMA AYAH</th>
                                                <th>PEKERJAAN AYAH</th>
                                                <th>NAMA IBU</th>
                                                <th>PEKERJAAN IBU :</th>
                                                <th>ALAMAT ORANGTUA :</th>
                                                <th>NAMA WALI :</th>
                                                <th>ALAMAT WALI :</th>
                                                <th>TINGGAL BERSAMA :</th>
                                                <th>ASAL KELURAHAN :</th>
                                                <th>ASAL KECEMATAN :</th>
                                                <th>ASAL KABUPATEN :</th>
                                                <th>ASAL PROVINSI :</th>
                                                <th>RT :</th>
                                                <th>RW :</th>
                                                <th>GOLONGAN DARAH :</th>
                                                <th>JUMLAH SAUDARA KANDUNG :</th>
                                                <th>FILE :</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($registrasi as $no => $r)
                                                <tr>
                                                    <td>{{ ++$no }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($r->tgl_registrasi)->format('d-m-Y') }}
                                                    </td>
                                                    <td>{{ $r->kode_rus }}</td>
                                                    <td>{{ $r->nama_siswa }}</td>
                                                    <td>{{ $r->no_seri_ijazah }}</td>
                                                    <td>{{ $r->nama_ayah }}</td>
                                                    <td>{{ $r->pekerjaan_ayah }}</td>
                                                    <td>{{ $r->nama_ibu }}</td>
                                                    <td>{{ $r->pekerjaan_ibu }}</td>
                                                    <td>{{ $r->alamat_ortu }}</td>
                                                    <td>{{ $r->nama_wali }}</td>
                                                    <td>{{ $r->alamat_wali }}</td>
                                                    <td>{{ $r->tinggal_bersama }}</td>
                                                    <td>{{ $r->asal_kelurahan }}</td>
                                                    <td>{{ $r->asal_kecematan }}</td>

                                                    <td>{{ $r->asal_kabupaten }}</td>
                                                    <td>{{ $r->asal_provinsi }}</td>
                                                    <td>{{ $r->rt }}</td>
                                                    <td>{{ $r->rw }}</td>
                                                    <td>{{ $r->golongan_darah }}</td>
                                                    <td>{{ $r->jmlh_saudara_kandung }}</td>
                                                    <td><img src="{{ asset('storage/' . $r->file_skhun) }}" alt=""
                                                            class="img-responsive" width="100%"></td>

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
