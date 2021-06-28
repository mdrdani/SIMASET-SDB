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
									<h2>Departemen<small>form input</small></h2>
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
									<form  action="{{ route('assetassetseri.store') }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
                    					@csrf

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nomor_seri">Asset Nomor Seri <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="nomor_seri" name="nomor_seri" required="required" class="form-control ">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nomor_pembelian">Nomor Pembelian <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="nomor_pembelian" name="nomor_pembelian" required="required" class="form-control ">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="lokasi">Lokasi <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<select name="lokasi_id" id="lokasi" class="select2_group form-control">
                                                    <option value="Kelas_Archimides">Kelas Archimides</option>
                                                    <option value="Kelas_Sparta">Kelas Archimides</option>
                                                </select>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="sumber_dana">Sumber Dana <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<select name="sumberdana_id" id="sumber_dana" class="select2_group form-control">
                                                    <option value="">Dana BOS SD</option>
                                                    <option value="">Dana Bos SMP</option>
                                                </select>
											</div>
										</div>
										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="departemen">Departemen <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<select name="departemen_id" id="departemen" class="select2_group form-control">
                                                    <option value="">SMP</option>
                                                    <option value="">SMA</option>
                                                </select>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="merk_judul">Merk / Judul <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="merk_judul" name="merk_judul" required="required" class="form-control ">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="harga_beli">Harga Beli <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="harga_beli" name="harga_beli" required="required" class="form-control ">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="harga_sekarang">Harga Sekarang <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="harga_sekarang" name="harga_sekarang" required="required" class="form-control ">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="harga_minimum">Harga minimum <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="harga_minimum" name="harga_minimum" required="required" class="form-control ">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nilai_penyusutan">Nilai Penyusutan Per Tahun<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="nilai_penyusutan" name="nilai_penyusutan" required="required" class="form-control ">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="kondisi">Kondisi <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<select name="kondisi" id="kondisi" class="select2_group form-control">
                                                    <option value="">Baik</option>
                                                    <option value="">Rusak</option>
													<option value="">Setengah Baik</option>
                                                </select>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="tanggal_beli">Tanggal Beli<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="date" id="tanggal_beli" name="tanggal_beli" required="required" class="form-control ">
											</div>
										</div>
										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="serial_number">Serial Number<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="serial_number" name="serial_number" required="required" class="form-control ">
											</div>
										</div>
										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
                                                <a href="{{ route('assetassetseri.index') }}" class="btn btn-info">Batal</a>
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