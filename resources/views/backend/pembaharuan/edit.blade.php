@extends('layouts.main')

@section('title')
    Pembaharuan Asset
@endsection

@section('body')
    <div class="right_col" role="main">
        
        <div class="title_left">
				<h3>Asset Seri</h3>
		    </div>

        <div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Asset Seri {{ $assets->merk_judul }} - {{ $assets->nomor_seri }}<small>form input</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form  action="{{ route('assetpembaharuanupdate', $assets->id) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
                    					@csrf
                                        @method('PUT')

										<input type="hidden" value="{{ $assets->assets_id }}" name="assets_id">
										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nomor_seri">Asset Nomor Seri <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="nomor_seri" name="nomor_seri" required="required" class="form-control {{ $errors->first('nomor_seri') ? "is-invalid" : "" }}" value="{{ $assets->nomor_seri }}" disabled>
												<div class="invalid-feedback">
													{{ $errors->first('nomor_seri') }}
												</div>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="serial_number">Serial Number
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="serial_number" name="sn" required="required" class="form-control {{ $errors->first('sn') ? "is-invalid" : "" }}" value="{{ $assets->sn }}">
												<div class="invalid-feedback">
													{{ $errors->first('sn') }}
												</div>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nomor_pembelian">Nomor Pembelian
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="nomor_pembelian" name="nomor_pembelian" class="form-control " value="{{ $assets->nomor_pembelian }}">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="lokasi">Lokasi <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												 <select name="sub_lokasi_duas_id" id="lokasi"  class="select2_group form-control">
                                                     <option value="{{ $assets->sub_lokasi_duas_id }}">{{ $assets->sub_lokasi_duas->name }}</option>
                                                 </select>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="sumber_dana">Sumber Dana <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<select name="sumber_danas_id" id="sumber_dana" class="select2_group form-control">
                                                    <option value="{{ $assets->sumber_danas_id }}">{{ $assets->sumber_danas->name }}</option>
                                                    <option value="">----------------------</option>
													@foreach ($sumberdanas as $dana)
                                                    			<option value="{{ $dana->id }}">{{ $dana->name }}</option>
													@endforeach
                                                </select>
											</div>
										</div>
										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="departemen">Departemen <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<select name="departements_id" id="departemen" class="select2_group form-control">
                                                    <option value="{{ $assets->departements_id }}">{{ $assets->departements->name }}</option>
                                                    <option value="">---------------------</option>
													@foreach ($departements as $dep)						
                                                    	<option value="{{ $dep->id }}">{{ $dep->name }}</option>
													@endforeach
                                                </select>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="merk_judul">Merk / Judul <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="merk_judul" name="merk_judul" required="required" class="form-control {{ $errors->first('merk_judul') ? "is-invalid" : "" }}" value="{{ $assets->merk_judul }}">
												<div class="invalid-feedback">
													{{ $errors->first('merk_judul') }}
												</div>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="harga_beli">Harga Beli
											</label>
											<div class="col-md-6 col-sm-6  form-group has-feedback">
													<input type="number" class="form-control has-feedback-left" id="harga_beli" name="harga_beli" placeholder="1.***.***" value="{{ $assets->harga_beli }}">
													<span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="harga_sekarang">Harga Sekarang
											</label>
											<div class="col-md-6 col-sm-6  form-group has-feedback">
													<input type="number" class="form-control has-feedback-left" id="harga_sekarang" name="harga_sekarang" placeholder="1.***.***" value="{{ $assets->harga_sekarang }}">
													<span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="harga_minimum">Harga minimum
											</label>
											<div class="col-md-6 col-sm-6  form-group has-feedback">
													<input type="number" class="form-control has-feedback-left" id="harga_minimum" name="harga_minimum" placeholder="1.***.***" value="{{ $assets->harga_minimum }}">
													<span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nilai_penyusutan">Nilai Penyusutan Per Tahun
											</label>
											<div class="col-md-6 col-sm-6  form-group has-feedback">
													<input type="number" class="form-control has-feedback-left" id="nilai_penyusutan" name="nilai_penyusutan" placeholder="1.***.***" value="{{ $assets->nilai_penyusutan }}">
													<span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="kondisi">Kondisi <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<select name="kondisi" id="kondisi" class="select2_group form-control">
                                                    <option value="{{ $assets->kondisi }}">{{ $assets->kondisi }}</option>
                                                    <option value="">--------------------------</option>
                                                    <option value="Baik">Baik</option>
                                                    <option value="Rusak">Rusak</option>
													<option value="Setengah Baik">Setengah Baik</option>
                                                </select>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="tanggal_beli">Tanggal Beli
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="date" id="tanggal_beli" name="tanggal_beli" class="form-control " value="{{ $assets->tanggal_beli }}">
											</div>
										</div>
										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
                                                <a href="{{ route('assetpembaharuanindex') }}" class="btn btn-info">Batal</a>
												<button class="btn btn-info" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Update</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
    </div>
@endsection

@section('js')
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
	<script>
		$('#lokasi').select2({
			ajax: {
				url : '/ajax/lokasi/search',
				processResults: function(data) {
					return {
						results: data.map(function(item) {return {id: item.id, text:item.name}})
					}
				}
			}
		});
	</script>
@endsection