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
									<h2>Sub Lokasi<small>form input</small></h2>
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
									<form  action="{{ route('referensisumberdana.store') }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
                    					@csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Nama <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="name" name="name" required="required" class="form-control ">
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="alias">Alias <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="alias" name="alias" required="required" class="form-control ">
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="luas">Luas <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="name" name="luas" required="required" class="form-control ">
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="status">Status <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<select name="status" id="status" class="select2_group form-control">
                                                    <option value="DIGUNAKAN">Di Gunakan</option>
                                                    <option value="TIDAK DIGUNAKAN">Tidak Di Gunakan</option>
                                                </select>
											</div>
										</div>
										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
                                                <a href="{{ route('referensisublokasi.index') }}" class="btn btn-info">Batal</a>
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