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
                      <a href="{{ route('referensisublokasi.create', $data->id) }}" class="btn btn-sm btn-info">Tambah Data</a>
                      <a href="{{ route('referensilokasi.index') }}" class="btn btn-sm btn-info">Kembali</a>
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
                      @foreach ($items as $index => $item)
                            <tr>
                          <th scope="row">{{ $index }}</th>
                          <td>{{ $item->name }}</td>
                          <td>{{ $item->luas }}</td>
                          <td>{{ $item->status }}</td>
                          <td>
                              <a href="{{ route('referensisublokasidua.index', $item->id) }}" class="btn btn-info btn-sm">Sub Lokasi</a>
                            <a href="{{ route('referensisublokasi.edit', ['id' => $item->lokasis->id, 'sublokasi' => $item->id]) }}" class="btn btn-info btn-sm">Edit</a>
                            <form action="{{ route('referensisublokasi.destroy' , ['id' => $item->lokasis->id, 'sublokasi' => $item->id]) }}" class="d-inline" method="POST" onsubmit="return confirm('Yakin Menghapus Data ini?')">
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