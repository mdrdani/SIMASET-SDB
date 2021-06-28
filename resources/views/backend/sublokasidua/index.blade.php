@extends('layouts.main')

@section('title')
    Sub Lokasi
@endsection

@section('body')
    <div class="right_col" role="main">
        <div class="title_left">
				<h3>Referensi</h3>
		</div>

        <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Sub Lokasi <small>Data Lengkap</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <a href="{{ route('referensisublokasidua.create') }}" class="btn btn-sm btn-info">Tambah Data</a>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Luas</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Lorem ipsum dolor sit amet</td>
                          <td>120 m2</td>
                          <td>DIGUNAKAN</td>
                          <td>
                            <a href="#" class="btn btn-info btn-sm">Edit</a>
                            <a href="#" class="btn btn-info btn-sm">Hapus</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
    </div>
@endsection