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
									<form  action="{{ route('assetpemindahan.update', $assets->id) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
                    					@csrf
                                        @method('PUT')

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
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="tanggal_beli">Tanggal Pindah
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="date" id="tgl_pindah" name="tgl_pindah" class="form-control ">
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="tanggal_beli">Keterangan
											</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea name="keterangan" class="form-control" id="" cols="30" rows="10"></textarea>
											</div>
										</div>
										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
                                                <a href="{{ route('assetpemindahan.index') }}" class="btn btn-info">Batal</a>
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