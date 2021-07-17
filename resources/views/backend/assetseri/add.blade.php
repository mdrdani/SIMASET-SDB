@extends('layouts.main')

@section('title')
    Tambah Data
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
									<h2>Asset Seri {{ $assets->name }} - {{ $assets->kode }}<small>form input</small></h2>
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
									<form  action="{{ route('assetassetseri.store', $assets->id) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
                    					@csrf

										<input type="hidden" value="{{ $assets->id }}" name="assets_id">
										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nomor_seri">Asset Nomor Seri <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="nomor_seri" name="nomor_seri" required="required" class="form-control {{ $errors->first('nomor_seri') ? "is-invalid" : "" }}" value="{{ old('nomor_seri') }}">
												<div class="invalid-feedback">
													{{ $errors->first('nomor_seri') }}
												</div>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="serial_number">Serial Number
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="serial_number" name="sn" required="required" class="form-control {{ $errors->first('sn') ? "is-invalid" : "" }}" value="{{ old('sn') }}">
												<div class="invalid-feedback">
													{{ $errors->first('sn') }}
												</div>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nomor_pembelian">Nomor Pembelian
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="nomor_pembelian" name="nomor_pembelian" class="form-control ">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="lokasi">Lokasi <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												 <select name="sub_lokasi_duas_id" id="lokasi"  class="select2_group form-control"></select>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="sumber_dana">Sumber Dana <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<select name="sumber_danas_id" id="sumber_dana" class="select2_group form-control">
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
												<input type="text" id="merk_judul" name="merk_judul" required="required" class="form-control {{ $errors->first('merk_judul') ? "is-invalid" : "" }}" value="{{ old('merk_judul') }}">
												<div class="invalid-feedback">
													{{ $errors->first('merk_judul') }}
												</div>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="harga_beli">Harga Beli
											</label>
											<div class="col-md-6 col-sm-6  form-group has-feedback">
													<input type="number" class="form-control has-feedback-left" id="harga_beli" name="harga_beli" placeholder="1.***.***">
													<span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="harga_sekarang">Harga Sekarang
											</label>
											<div class="col-md-6 col-sm-6  form-group has-feedback">
													<input type="number" class="form-control has-feedback-left" id="harga_sekarang" name="harga_sekarang" placeholder="1.***.***">
													<span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="harga_minimum">Harga minimum
											</label>
											<div class="col-md-6 col-sm-6  form-group has-feedback">
													<input type="number" class="form-control has-feedback-left" id="harga_minimum" name="harga_minimum" placeholder="1.***.***">
													<span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nilai_penyusutan">Nilai Penyusutan Per Tahun
											</label>
											<div class="col-md-6 col-sm-6  form-group has-feedback">
													<input type="number" class="form-control has-feedback-left" id="nilai_penyusutan" name="nilai_penyusutan" placeholder="1.***.***">
													<span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="kondisi">Kondisi <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<select name="kondisi" id="kondisi" class="select2_group form-control">
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
												<input type="date" id="tanggal_beli" name="tanggal_beli" class="form-control ">
											</div>
										</div>
										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
                                                <a href="{{ route('assetassetseri.index', ['id' => $assets->id]) }}" class="btn btn-info">Batal</a>
												<button class="btn btn-info" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Simpan</button>
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