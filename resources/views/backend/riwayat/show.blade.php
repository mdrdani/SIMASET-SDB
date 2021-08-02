@extends('layouts.main')

@section('title')
    Riwayat Log Asset
@endsection


@section('body')
    <div class="right_col" role="main">
        <div class="title_left">
				<h3>Riwayat Log Asset Seri</h3>
		</div>
       
        <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Asset Seri <small>Data Lengkap</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <a href="{{ route('assetriwayat.index') }}" class="btn btn-sm btn-info mb-2">Kembali</a>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>User</th>
                          <th>Method</th>
                          <th>Pindah Lokasi</th>
                          <th>Tgl Pindah</th>
                          <th>Tgl Perbaikan</th>
                          <th>Keterangan</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($histories as $index => $history)
                            <tr>
                          <td>{{ $index+1 }}</td>
                          <td>{{ $history->users->name }}</td>
                          <td><b>{{ $history->method }}</b> ( {{ Carbon\Carbon::parse($history->created_at)->locale('id')->isoFormat('LLL') }})</td>
                          <td>{{ optional($history->sub_lokasi_duas)->name }}</td>
                          <td>
                          @if ($history->tgl_pindah != NULL)
                              {{ Carbon\Carbon::parse($history->tgl_pindah)->locale('id')->isoFormat('LL') }}
                          @else
                              -
                          @endif
                          </td>
                          <td>
                          @if ($history->tgl_perbaikan != NULL)
                              {{ Carbon\Carbon::parse($history->tgl_perbaikan)->locale('id')->isoFormat('LL') }}
                          @else
                              -
                          @endif
                          </td>
                          <td>{{ $history->keterangan }}</td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
    
    </div>
@endsection

