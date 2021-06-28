@extends('layouts.main')

@section('title')
    Asset Seri
@endsection

@section('css')
     <!-- Datatables -->
    
    <link href="{{ asset("vendors/datatables.net-bs/css/dataTables.bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css") }}" rel="stylesheet">
@endsection

@section('body')
    <div class="right_col" role="main">
        <div class="title_left">
				<h3>Asset</h3>
		</div>

        <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Asset Seri<small>Data Lengkap</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <a href="{{ route('assetassetseri.create') }}" class="btn btn-sm btn-info mb-2">Tambah Data</a>
                      <a href="{{ route('assetasset.index') }}" class="btn btn-sm btn-info mb-2">Kembali</a>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nomor Seri</th>
                          <th>Lokasi</th>
                          <th>Kondisi</th>
                          <th>Tanggal Beli</th>
                          <th>SN</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>HSJDG1122</td>
                          <td>Gedung B Lantai 2</td>
                          <td>Baik</td>
                          <td>12 Desember 2020</td>
                          <td>SDHJNJ234</td>
                          <td>
                            <a href="#" class="btn btn-info btn-sm">Lihat</a>
                            <a href="#" class="btn btn-info btn-sm">Edit</a>
                            <a href="#" class="btn btn-info btn-sm">Hapus</a></td>
                        </tr>

                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
    </div>
@endsection

@section('js')
    <!-- Datatables -->
    <script src="{{ asset("vendors/datatables.net/js/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-bs/js/dataTables.bootstrap.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-buttons/js/dataTables.buttons.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-buttons/js/buttons.flash.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-buttons/js/buttons.html5.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-buttons/js/buttons.print.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-keytable/js/dataTables.keyTable.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-responsive/js/dataTables.responsive.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-scroller/js/dataTables.scroller.min.js") }}"></script>
@endsection