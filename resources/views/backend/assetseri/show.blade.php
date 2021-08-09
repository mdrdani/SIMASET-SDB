@extends('layouts.main')

@section('title')
    Lihat Asset Seri
@endsection

@section('body')
    <div class="right_col" role="main">
        
        <div class="title_left">
				<h3>Referensi</h3>
		    </div>

        <div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Asset Seri <b>{{ $asset->merk_judul }}</b> <br></h2>
									<ul class="nav navbar-right panel_toolbox">
                                        <a href="{{ route('assetassetseri.index', $asset->assets->id) }}" class="btn btn-sm btn-info mb-2">Kembali</a>
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nomor_seri">Asset Nomor Seri :
											</label>
											<div class="col-md-6 col-sm-6 ">
												<h2>{{ $asset->assets->kode }}-{{ $asset->nomor_seri }}</h2>
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nomor_seri">Serial Number :
											</label>
											<div class="col-md-6 col-sm-6 ">
												<h2>{{ $asset->sn }}</h2>
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nomor_seri">Nomor Pembelian :
											</label>
											<div class="col-md-6 col-sm-6 ">
												<h2>{{ $asset->nomor_pembelian }}</h2>
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nomor_seri">Lokasi Barang :
											</label>
											<div class="col-md-6 col-sm-6 ">
												<h2>{{ $asset->sub_lokasi_duas->name }}</h2>
											</div>
										</div>
                                        
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nomor_seri">Sumber Dana Pembelian :
											</label>
											<div class="col-md-6 col-sm-6 ">
												<h2>{{ $asset->sumber_danas->name }}</h2>
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nomor_seri">Departemen :
											</label>
											<div class="col-md-6 col-sm-6 ">
												<h2>{{ $asset->departements->name }}</h2>
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nomor_seri">Harga Beli :
											</label>
											<div class="col-md-6 col-sm-6 ">
                                                @if ($asset->harga_beli == NULL)
                                                    <h2>Rp. -</h2>
                                                @else
                                                    <h2>Rp. @currency($asset->harga_beli)</h2>
                                                @endif
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nomor_seri">Harga Sekarang :
											</label>
											<div class="col-md-6 col-sm-6 ">
                                                @if ($asset->harga_sekarang == NULL)
                                                    <h2>Rp. -</h2>
                                                @else
                                                    <h2>Rp. {{ $asset->harga_sekarang }}</h2>
                                                @endif
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nomor_seri">Harga Minimum :
											</label>
											<div class="col-md-6 col-sm-6 ">
                                                @if ($asset->harga_minimum == NULL)
                                                    <h2>Rp. -</h2>
                                                @else
                                                    <h2>Rp. {{ $asset->harga_minimum }}</h2>
                                                @endif
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nomor_seri">Nilai Penyusutan :
											</label>
											<div class="col-md-6 col-sm-6 ">
                                                @if ($asset->nilai_penyusutan == NULL)
                                                    <h2>Rp. -</h2>
                                                @else
                                                    <h2>Rp. {{ $asset->nilai_penyusutan }}</h2>
                                                @endif
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nomor_seri">Kondisi Barang :
											</label>
											<div class="col-md-6 col-sm-6 ">
                                                <h2>{{ $asset->kondisi }}</h2>
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nomor_seri">Tanggal Pembelian :
											</label>
											<div class="col-md-6 col-sm-6 ">
                                                <h2>{{ Carbon\Carbon::parse($asset->tanggal_beli)->locale('id')->isoFormat('LL') }}</h2>
											</div>
										</div>
								</div>
							</div>
						</div>
					</div>
    </div>
@endsection