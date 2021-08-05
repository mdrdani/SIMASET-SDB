@extends('layouts.main')

@section('title')
    Informasi Nomor Seri
@endsection


@section('body')
    <div class="right_col" role="main">
        <div class="title_left">
				<h3>Informasi Nomor Seri</h3>
		</div>
       
        @foreach ($categories as $category)
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>{{ $category->name }}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Kode</th>
                          <th>Nomor Seri Terakhir</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($category->assets as $asset)
                            <tr>
                              <td>{{ $asset->name }}</td>
                              <td>{{ $asset->kode }}</td>
                              @foreach ($asset->asset_seris as $seri)
                                  @if($asset->asset_seris->last() == $seri)
                                        <td>{{ $asset->kode}}-{{ $seri->nomor_seri }}</td>
                                @endif
                              @endforeach
                            </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
        </div>
        @endforeach
    </div>
@endsection

