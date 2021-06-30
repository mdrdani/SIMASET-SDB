@extends('layouts.main')

@section('title')
    Kategori
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
                    <h2>Kategori <small>Data Lengkap</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <a href="{{ route('assetkategori.create') }}" class="btn btn-sm btn-info">Tambah Data</a>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($datas as $index => $data)
                            <tr>
                          <th scope="row">{{ $index+1 }}</th>
                          <td>{{ $data->name }}</td>
                          <td>
                            <a href="{{ route('assetkategori.edit', $data->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <form action="{{ route('assetkategori.destroy', $data->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Anda Yakin Menghapus Data Ini?')">
                            @csrf
                            <input type="hidden" value="DELETE" name="_method">
                              <input type="submit" class="btn btn-sm btn-info" value="Hapus">
                            </form>
                        </tr>
                        @endforeach
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