@extends('layouts.main')

@section('title')
    Laporan Lokasi Asset
@endsection


@section('body')
    <div class="right_col" role="main">
        <div class="title_left">
				<h3>Laporan Lokasi Asset</h3>
		</div>
       
       
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                      <form action="{{ route('assetlokasiasset.filter') }}" method="GET">
                          <div class="col-md-4 col-sm-4 mb-4">
                                <select name="sub_lokasi_duas_id" class="form-control " id="input">
                                    <option value="0">Pilih Lokasi</option>
                                        @foreach ($allloks as $lokasi)
                                            <option value="{{ $lokasi->id }}">
                                            {{ $lokasi->name }}
                                            </option>
                                        @endforeach
                                </select>
                          </div>
                          <input type="submit" class="btn btn-info" value="Filter">
                      </form>

                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                            <th>No</th>
                          <th>Lokasi</th>
                          <th>Kode Asset</th>
                          <th>Nama Asset</th>
                          {{-- <th>Jumlah</th> --}}
                          {{-- <th>No Seri Asset</th> --}}
                        </tr>
                      </thead>
                      <tbody>
                          @php
                            $no=1;
                          @endphp
                          @foreach ($lokasis as $lok)
                           @php
                          $a = '';
                           @endphp
                              @foreach ($lok->asset_seris as $assets)
                              <tr>
                                <td>{{ $loop->index == 0 || $a!=$lok->name?$no:''}}</td>
                                <td>{{  $loop->index == 0 || $a!=$lok->name ? $lok->name : ''}}</td>
                                <td>{{ $assets->assets->kode }} - {{ $assets->nomor_seri }}</td>
                                <td>{{ $assets->merk_judul }}</td>
                                 {{-- <td>{{ '' }}</td> --}}
                                {{-- <td>{{  ''}}</td> --}}
                              </tr>  
                              @php     
                               $a = $lok->name;   
                               @endphp
                              @endforeach       
                                 @php
                                  $no++;
                                 @endphp     
                          @endforeach
                          {{-- <tr>
                            <td>1</td>
                            <td>Gedung A</td>
                            <td>002</td>
                            <td>Kursi</td>
                            <td>10</td>
                            <td>002-001,002-002,002-003</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td>004</td>
                            <td>Lemari</td>
                            <td>11</td>
                            <td>004-001,004-002,004-003</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Gedung B</td>
                            <td>003</td>
                            <td>Meja</td>
                            <td>10</td>
                            <td>003-001,003-002,003-003</td>
                          </tr> --}}
                          
                      </tbody>
                    </table>
                  </div>
                </div>
        </div>
        
    </div>
@endsection

