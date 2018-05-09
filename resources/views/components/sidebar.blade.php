<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title">
                <img src="images/logo.jpg" alt="logo" style="height:45px;">
                <span>STARKEY</span>
            </a>
        </div>

        <div class="clearfix"></div>

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li>
                        <a href="{{ url('/home') }}">
                            <i class="fa fa-home"></i> Home
                        </a>
                    </li>
                    <li>
                        <a>
                            <i class="fa fa-database"></i> Master Data
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="{{ url('/supplier') }}">Supplier</a>
                            </li>
                            <li>
                                <a href="{{ url('/karyawan') }}">Karyawan</a>
                            </li>
                            <li>
                                <a href="{{ url('/kategori_barang') }}">Kategori Barang</a>
                            </li>
                            <li>
                                <a href="{{ url('/merk') }}">Merk</a>
                            </li>
                            <li>
                                <a href="{{ url('/barang') }}">Barang</a>
                            </li>
                            <li>
                                <a href="{{ url('/mitra_teknisi') }}">Mitra Teknisi</a>
                            </li>
                            <li>
                                <a href="{{ url('/mitra_laundry') }}">Mitra Laundry</a>
                            </li>
                            <li>
                                <a href="{{ url('/mitra_stempel') }}">Mitra Stempel</a>
                            </li>
                            <li>
                                <a href="{{ url('/pelanggan') }}">Pelanggan</a>
                            </li>
                            <li>
                                <a href="{{ url('/admin_aplikasi') }}">Admin Aplikasi</a>
                            </li>
                            <li>
                                <a href="{{ url('/data_layanan') }}">Data Layanan</a>
                            </li>
                            <li>
                                <a href="{{ url('/biaya_dasar_layanan') }}">Biaya Dasar Layanan</a>
                            </li>
                        </ul>
                    </li>

                    <li class="">

                     <li>
                        <a>
                            <i class="fa fa-shopping-cart"></i> Transaksi Komersial
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="{{ url('/pembelian') }}">Pembelian</a>
                            </li>
                            <li>
                                <a href="{{ url('/penjualan') }}">Penjualan</a>
                            </li>
                            <li>
                                <a href="{{ url('/deposit_mitra') }}">Deposit Mitra</a>
                            </li>
                            <li>
                                <a href="{{ url('/setoran_tunai_mitra') }}">Setoran Tunai Mitra</a>
                            </li>
                            <li>
                                <a href="{{ url('/setoran_tunai_deposit_mitra') }}">Setoran Tunai Deposit Mitra</a>
                            </li>
                        </ul>
                    </li>
                   
                    <li>
                        <a>
                            <i class="fa fa-leaf"></i> Trans Non Komersial<span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu" style="display: none;">

                            <li class="current-page">
                                <a href="{{url('open_periode')}}">Open &amp; Closing Periode</a>
                            </li>

                            <li>
                                <a href="{{url('kas_masuk')}}">Kas Masuk &amp; Kas Keluar</a>
                            </li>
                        
                        </ul>
                    </li>

                  <li><a><i class="fa fa-group"></i> Rekrutmen Mitra Teknisi<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('parameter_teknisi')}}">Parameter</a></li>
                      <li><a href="{{url('register_teknisi')}}">Register Teknisi</a></li>
                      <li><a href="{{url('data_rekruitment_teknisi')}}">Data Rekruitment Teknisi</a></li>

                    </ul>
                  </li>

                  <li><a><i class="fa fa-group"></i> Rekrutmen Mitra Stempel<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('parameter_stempel')}}">Parameter</a></li>
                      <li><a href="{{url('register_stempel')}}">Register Stempel</a></li>
                       <li><a href="{{url('data_rekruitment_stempel')}}">Data Rekruitment Stempel</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-group"></i> Rekrutmen Mitra Laundry<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('parameter_laundry')}}">Parameter</a></li>
                      <li><a href="{{url('register_laundry')}}">Register Laundry</a></li>
                       <li><a href="{{url('data_rekruitment_laundry')}}">Data Rekruitment Laundry</a></li>

                    </ul>
                  </li>

                  <li class=""><a><i class="fa fa-bar-chart"></i> Laporan Akuntansi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none;">
                      <li><a href="{{url('jurnalumum')}}">Jurnal Umum</a></li>
                      <li><a href="http://tatayanna.com/starkey/arus_kas">Arus Kas</a></li>
                      <li><a href="http://tatayanna.com/starkey/buku_besar">Buku Besar</a></li>
                      <li><a href="http://tatayanna.com/starkey/laba_rugi">Laba Rugi</a></li>
                      <li><a href="http://tatayanna.com/starkey/perubahan_modal">Perubahan Modal</a></li>
                      <li><a href="http://tatayanna.com/starkey/neraca">Neraca</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-list-alt"></i> Laporan  Lainnya<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="">
                      <li><a href="http://tatayanna.com/starkey/laporan_pelanggan">Data Pelanggan</a></li>
                      <li><a href="http://tatayanna.com/starkey/laporan_barang">Data Barang</a></li>
                      <li><a href="http://tatayanna.com/starkey/laporan_karyawan">Data Karyawan</a></li>
                     <li><a href="http://tatayanna.com/starkey/harga_fifo">Data Harga (FIFO)</a></li>
                      <li><a href="http://tatayanna.com/starkey/laporan_pembelian">Data Pembelian</a></li>
                      <li><a href="http://tatayanna.com/starkey/laporan_penjualan">Data Penjualan</a></li>
                       <li><a href="http://tatayanna.com/starkey/hutang">Data Hiutang</a></li>
                    
                      
                        <li><a href="http://tatayanna.com/starkey/piutang">Data Piutang</a></li>
                      <li><a href="http://tatayanna.com/starkey/ratting">Ratting Dan summary kerja teknisi</a></li>                      
                      <li><a href="http://tatayanna.com/starkey/ratting_stempel">Ratting dan summary kerja mitra stempel</a></li>
                       <li><a href="http://tatayanna.com/starkey/ratting_laundry"> Ratting dan summary kerja mitra laundry</a></li>
                       <li><a href="http://tatayanna.com/starkey/royal"> Pelanggan loyal</a></li>
                      
                    </ul>
                  </li>

                 

               <li><a><i class="fa fa-gear"></i> Setting<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="">
               <li><a href="http://tatayanna.com/starkey/limit">Setting limit stock barang (warning untuk segera melakukan order jika qty barang sudah mencapai limit stock)</a></li>
               <li><a href="http://tatayanna.com/starkey/tambahan_biaya">Setting tambahan biaya per kilometer</a></li>
               <li><a href="http://tatayanna.com/starkey/prosentase">Setting prosentase pengurangan deposit teknisi</a></li>
               <li><a href="http://tatayanna.com/starkey/setting_minimal">Setting prosentase pengurangan deposit teknisi</a></li>
             </ul>
           </li>
           <li><a href="http://tatayanna.com/starkey/sms"><i class="fa fa-envelope"></i> SMS Geteway</a>
            
          </li>
                   
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
    </div>
</div>