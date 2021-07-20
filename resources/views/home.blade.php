@extends('layouts.main')

@section('title')
    Home
@endsection

@section('body')
    <!-- page content -->
    <div class="right_col" role="main">

      <div class="title_left">
              <h3><b>Kondisi Asset</b></h3>
          </div>

          {{-- Widget --}}
         <div class="row" style="display: inline-block;">
          <div class="tile_count">
            <div class="col-md-4 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Setengah Baik</span>
              <div><a class="count" href="#">8.577</a></div>
              <span class="count_bottom"> Asset Sekolah Darma Bangsa</span>
            </div>
            <div class="col-md-4 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Kondisi Baik</span>
              <div><a class="count green" href="">2,500</a></div>
              <span class="count_bottom">Asset Sekolah Darma Bangsa</span>
            </div>
            <div class="col-md-4 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Kondisi Rusak</span>
              <div><a class="count red" href="#">8.577</a></div>
              <span class="count_bottom">Asset Sekolah Darma Bangsa</span>
            </div>
          </div>
        </div>
          {{-- End Widget --}}

          <div class="title_left">
                <h3><b>Nilai Asset</b></h3>
          </div>

          {{-- Widget --}}
          <div class="row top_tiles mb-3" style="margin: 10px 0;">
                      <div class="col-md-2.5 tile mb-2 mr-1" style="border: 3px solid; border-radius: 10px; padding: 10px 10px 3px 10px">
                        <span>Dana BOS SD</span>
                        <h5><b>Rp. 85.365.462</b></h5>
                        <span class="sparkline_two" style="height: 100px;">
                            <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                        </span>
                      </div>
                      <div class="col-md-2.5 tile mb-2 mr-1" style="border: 3px solid; border-radius: 10px; padding: 10px 10px 3px 10px">
                        <span>Dana BOS SMP</span>
                        <h5><b>Rp. 74.934.996</b></h5>
                        <span class="sparkline_two" style="height: 50px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>
                      </div>
                      <div class="col-md-2.5 tile mb-2 mr-1" style="border: 3px solid; border-radius: 10px; padding: 10px 10px 3px 10px">
                        <span>Dana BOS SMA</span>
                        <h5><b>Rp. 29.340.000</b></h5>
                        <span class="sparkline_two" style="height: 50px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>
                      </div>
                      <div class="col-md-2.5 tile mb-2 mr-1" style="border: 3px solid; border-radius: 10px; padding: 10px 10px 3px 10px">
                        <span>Dana Owner Jakarta</span>
                        <h5><b>Rp. 466.260.000</b></h5>
                        <span class="sparkline_two" style="height: 160px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>
                      </div>
                      <div class="col-md-2.5 tile mb-2 mr-1" style="border: 3px solid; border-radius: 10px; padding: 10px 10px 3px 10px">
                        <span>Dana Pribadi</span>
                        <h5><b>Rp. 5.680.250</b></h5>
                        <span class="sparkline_two" style="height: 160px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>
                      </div>

                      <div class="col-md-2.5 tile mb-2 mr-1" style="border: 3px solid; border-radius: 10px; padding: 10px 10px 3px 10px">
                        <span>Dana SDB</span>
                        <h5><b>Rp. 27.563.965.533</b></h5>
                        <span class="sparkline_two" style="height: 50px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>
                      </div>

                      <div class="col-md-2.5 tile mb-2 mr-1" style="border: 3px solid; border-radius: 10px; padding: 10px 10px 3px 10px">
                        <span>Total Dana</span>
                        <h5><b>Rp. 28.225.546.241</b></h5>
                        <span class="sparkline_two" style="height: 50px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>
                      </div>
          </div>
          {{-- End Widget --}}

          
            <div class="title_left">
                <h3><b>Jumlah Asset</b></h3>
            </div>

            {{-- Widget --}}
          <div class="row top_tiles mb-3 " style="margin: 10px 0;">
                      <div class="col-md-2.5 tile mb-2 mr-1" style="border: 3px solid; border-radius: 10px; padding: 10px 10px 3px 10px">
                        <span>Dana BOS SD</span>
                        <h5><b>124 Buah</b></h5>
                        <span class="sparkline_three" style="height: 100px;">
                            <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                        </span>
                      </div>
                      <div class="col-md-2.5 tile mb-2 mr-1" style="border: 3px solid; border-radius: 10px; padding: 10px 10px 3px 10px">
                        <span>Dana BOS SMP</span>
                        <h5><b>25 Buah</b></h5>
                        <span class="sparkline_three" style="height: 50px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>
                      </div>
                      <div class="col-md-2.5 tile mb-2 mr-1" style="border: 3px solid; border-radius: 10px; padding: 10px 10px 3px 10px">
                        <span>Dana BOS SMA</span>
                        <h5><b>82 Buah</b></h5>
                        <span class="sparkline_three" style="height: 50px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>
                      </div>
                      <div class="col-md-2.5 tile mb-2 mr-1" style="border: 3px solid; border-radius: 10px; padding: 10px 10px 3px 10px">
                        <span>Dana Owner Jakarta</span>
                        <h5><b>88 Buah</b></h5>
                        <span class="sparkline_three" style="height: 160px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>
                      </div>
                      <div class="col-md-2.5 tile mb-2 mr-1" style="border: 3px solid; border-radius: 10px; padding: 10px 10px 3px 10px">
                        <span>Dana Pribadi</span>
                        <h5><b>11 Buah</b></h5>
                        <span class="sparkline_three" style="height: 160px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>
                      </div>

                      <div class="col-md-2.5 tile mb-2 mr-1" style="border: 3px solid; border-radius: 10px; padding: 10px 10px 3px 10px">
                        <span>Dana SDB</span>
                        <h5><b>5.416 Buah</b></h5>
                        <span class="sparkline_three" style="height: 160px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 50px; height: 30px;"></canvas>
                                  </span>
                      </div>

                      <div class="col-md-2.5 tile mb-2 mr-1" style="border: 3px solid; border-radius: 10px; padding: 10px 10px 3px 10px">
                        <span>Total Asset</span>
                        <h5><b>5.746 Buah</b></h5>
                        <span class="sparkline_three" style="height: 160px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 50px; height: 30px;"></canvas>
                                  </span>
                      </div>
          </div>
          {{-- End Widget --}}

          <div class="title_left">
              <h3>Grafik Bar Dana Asset Sekolah Darma Bangsa</h3>
          </div>
  
          <div class="row">
            <div class="col-md-12">
              <div class="x_panel" style="">
                  <div class="x_title">
                    <h2>Bar graph <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="mybarChart"></canvas>
                  </div>
            </div>
            
            </div>
                <div class="clearfix"></div>
          </div>
          
</div>


         <!-- /page content -->
@endsection

@section('js')
    <!-- jQuery Sparklines -->
    <script src="{{ asset("vendors/jquery-sparkline/dist/jquery.sparkline.min.js") }}"></script>
@endsection