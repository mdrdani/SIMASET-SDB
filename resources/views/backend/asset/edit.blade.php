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
									<h2>Asset<small>form input</small></h2>
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
									<form  action="{{ route('assetasset.update', $data->id) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                    					@csrf
                                        @method('PUT')
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="kategori">Kategori <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<select name="categories_id" id="kategori" class="select2_group form-control">
                                                    <option value="{{ $data->categories->id }}">{{ $data->categories->name }}</option>
                                                    <option value="">
														---------------------------------------------
													</option>
                                                </select>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="kode">Kode <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="kode" name="kode" required="required" class="form-control" value="{{ $data->kode }}">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Nama <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="name" name="name" required="required" class="form-control " value="{{ $data->name }}">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="ukuran">Ukuran
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="ukuran" name="ukuran" class="form-control " value="{{ $data->ukuran }}">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="foto">Foto 
											</label>
											<div class="col-md-6 col-sm-6 ">
                                                <img src="{{ url('storage/foto_asset/' . $data->foto) }}" alt="" width="100px">
												<input type="file" id="foto" name="foto" class="form-control ">
											</div>
										</div>
										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
                                                <a href="{{ route('assetasset.index') }}" class="btn btn-info">Batal</a>
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
		$('#kategori').select2({
			ajax: {
				url : '/ajax/kategori/search',
				processResults: function(data) {
					return {
						results: data.map(function(item) {return {id: item.id, text:item.name}})
					}
				}
			}
		});
	</script>
@endsection