<!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">

                  <li>
                    <a href="{{ route('home') }}"><i class="fa fa-home"></i> Dashboard </a>
								</li>
                  
                  {{-- Referensi --}}
                  <li><a><i class="fa fa-edit"></i> Referensi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('referensisumberdana.index') }}">Sumber Dana</a></li>
                      <li><a href="{{ route('referensilokasi.index') }}">Lokasi</a></li>
                      <li><a href="{{ route('referensidepartemen.index') }}">Departemen</a></li>
                    </ul>
                  </li>
                {{-- end referensi --}}

                  {{-- Asset --}}
                  <li><a><i class="fa fa-edit"></i> Asset <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('assetkategori.index') }}">Kategori</a></li>
                      <li><a href="{{ route('assetasset.index') }}">Asset</a></li>
                    </ul>
                  </li>
                  {{-- Asset --}}

                  {{-- Asset Seri --}}
                  <li><a><i class="fa fa-edit"></i> Asset Seri <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">Pembaharuan</a></li>
                      <li><a href="form_advanced.html">Pemindahan</a></li>
                      <li><a href="form_validation.html">Perbaikan</a></li>
                      <li><a href="form_validation.html">Pemusnahan</a></li>
                      <li><a href="form_validation.html">Riwayat</a></li>
                      <li><a href="form_validation.html">Info Nomor Seri</a></li>
                    </ul>
                  </li>
                  {{-- end asset seri --}}

                  {{-- Laporan --}}
                  <li><a><i class="fa fa-bar-chart-o"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Nilai Jumlah Asset</a></li>
                      <li><a href="chartjs2.html">Lokasi Asset</a></li>
                      <li><a href="morisjs.html">Sumber Dana Asset</a></li>
                      <li><a href="echarts.html">Kondisi Asset</a></li>
                      <li><a href="other_charts.html">Asset Transaksi</a></li>
                    </ul>
                  </li>
                  {{-- End Laporan --}}

                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->