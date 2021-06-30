@extends('layouts.main')

@section('title')
    Lokasi
@endsection

@section('body')
    <div class="right_col" role="main">
        <div class="title_left">
				<h3>Referensi</h3>
		</div>

        <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lokasi <small>Data Lengkap</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <a href="{{ route('referensilokasi.create') }}" class="btn btn-sm btn-info">Tambah Data</a>
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
                        @foreach ($datas as $index => $data)
                            <tr>
                          <th scope="row">{{ $index+1 }}</th>
                          <td>{{ $data->name }}</td>
                          <td>{{ $data->luas }}</td>
                          <td>{{ $data->status }}</td>
                          <td>
                            @if ($data->status === "TIDAK DIGUNAKAN")                              
                                <a href="#" class="btn btn-info btn-sm disabled">Sub Lokasi</a>
                            @else
                              <a href="{{ route('referensisublokasi.index', $data->id) }}" class="btn btn-info btn-sm">Sub Lokasi</a>
                            @endif
                            <a href="{{ route('referensilokasi.edit', $data->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <form action="{{ route('referensilokasi.destroy', $data->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Yakin Menghapus Data ini?')">
                            @csrf
                            <input type="hidden" value="DELETE" name="_method">
                                <input type="submit" class="btn btn-info btn-sm" value="Hapus">
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
    </div>
@endsection