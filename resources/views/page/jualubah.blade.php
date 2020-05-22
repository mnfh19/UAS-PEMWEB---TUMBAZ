@extends('template.head')
@section('content')

<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Ubah Iklan Jual Barang Bekas</h4>
        <div class="site-pagination">
            <a href="">Ubah Iklan</a> /
            <a href="">Jual Kategori {{$tipe}}</a>
        </div>
    </div>
</div>
<!-- Page info end -->

	<!-- checkout section  -->
	<section class="checkout-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 order-2 order-lg-1">
                    <form class="checkout-form" id="ubahin" method="POST" action="{{url('jual/update')}}">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{$tipe}}" name="tipe">
                        <div class="cf-title" style="margin-bottom:30px;">Tentang Iklan</div>
                        <div class="row contact-form">
							<div class="col-md-12">
								<input type="text" name="judul" placeholder="Judul Iklan">
                                <input type="text" name="harga" placeholder="Harga">
								<textarea name="desc" placeholder="Deskripsi">{{$iklan->desc_barang}}</textarea>
							</div>
							<div class="col-md-6">
								
							</div>
						</div>
                        
                        {{-- DETAIL BARANG --}}
                        <div class="cf-title" style="margin-bottom:30px;">Detail Barang</div>
                        @switch($tipe)
                            @case("Mobil")
                                <div class="row address-inputs">
                                    <div class="col-md-12">
                                        <label for="">Merek</label>
                                        <select name="merek" class="selectkun">
                                            <option value="all">~ Pilih Merek ~</option>
                                            <option value="Aston Martin">Aston Martin</option>
                                            <option value="Audi">Audi</option>
                                            <option value="Bentley">Bentley</option>
                                            <option value="BMW">BMW</option>
                                            <option value="Cadillac">Cadillac</option>
                                            <option value="Chery">Chery</option>
                                            <option value="Chevrolet">Chevrolet</option>
                                            <option value="Chrysler">Chrysler</option>
                                            <option value="Citroen">Citroen</option>
                                            <option value="Daewoo">Daewoo</option>
                                            <option value="Daihatsu">Daihatsu</option>
                                            <option value="Datsun">Datsun</option>
                                            <option value="DFSK (Dongfeng Sokon)">DFSK (Dongfeng Sokon)</option>
                                            <option value="Dodge">Dodge</option>
                                            <option value="Ferrari">Ferrari</option>
                                            <option value="Fiat">Fiat</option>
                                            <option value="Ford">Ford</option>
                                            <option value="Foton">Foton</option>
                                            <option value="Geely">Geely</option>
                                            <option value="Hino">Hino</option>
                                            <option value="Holden">Holden</option>
                                            <option value="Honda">Honda</option>
                                            <option value="Hummer">Hummer</option>
                                            <option value="Hyundai">Hyundai</option>
                                            <option value="Infiniti">Infiniti</option>
                                            <option value="Isuzu">Isuzu</option>
                                            <option value="Jaguar">Jaguar</option>
                                            <option value="Jeep">Jeep</option>
                                            <option value="KIA">KIA</option>
                                            <option value="Klasik dan Antik">Klasik dan Antik</option>
                                            <option value="Lain-lain">Lain-lain</option>
                                            <option value="Lamborghini">Lamborghini</option>
                                            <option value="Land Rover">Land Rover</option>
                                            <option value="Lexus">Lexus</option>
                                            <option value="Maserati">Maserati</option>
                                            <option value="Mazda">Mazda</option>
                                            <option value="Mercedes-Benz">Mercedes-Benz</option>
                                            <option value="Mini Cooper">Mini Cooper</option>
                                            <option value="Mitsubishi">Mitsubishi</option>
                                            <option value="Mobil CBU">Mobil CBU</option>
                                            <option value="Nissan">Nissan</option>
                                            <option value="Opel">Opel</option>
                                            <option value="Porsche">Porsche</option>
                                            <option value="Proton">Proton</option>
                                            <option value="Renault">Renault</option>
                                            <option value="Roll-Royce">Roll-Royce</option>
                                            <option value="Smart">Smart</option>
                                            <option value="Ssang Yong">Ssang Yong</option>
                                            <option value="Subaru">Subaru</option>
                                            <option value="Suzuki">Suzuki</option>
                                            <option value="Tata">Tata</option>
                                            <option value="Tesla">Tesla</option>
                                            <option value="Timor">Timor</option>
                                            <option value="Toyota">Toyota</option>
                                            <option value="Volkswagen">Volkswagen</option>
                                            <option value="Volvo">Volvo</option>
                                            <option value="Wuling">Wuling</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Tahun</label>
                                        <select name="tahun" class="selectkun"><option value="all">~ Pilih Tahun Keluaran ~</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">&lt;1986</option></select>
                                    </div>
                                    <div class="col-md-12 product-details">
                                        <div class="fw-rad-choose">
                                            <p>Tipe Bahan Bakar</p>
                                            <div style="margin-top:-15px; padding-bottom:10px;">
                                                <div class="sc-item">
                                                    <input type="radio" value="Diesel" name="bahan" id="Diesel" checked="">
                                                    <label for="Diesel">Diesel</label>
                                                </div>
                                                <div class="sc-item">
                                                    <input type="radio" value="Bensin" name="bahan" id="Bensin" checked="">
                                                    <label for="Bensin">Bensin</label>
                                                </div>
                                                <div class="sc-item">
                                                    <input type="radio" value="Hybird" name="bahan" id="Hybird" checked="">
                                                    <label for="Hybird">Hybird</label>
                                                </div>
                                                <div class="sc-item">
                                                    <input type="radio" value="Listrik" name="bahan" id="Listrik" checked="">
                                                    <label for="Listrik">Listrik</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Warna</label>
                                        <select name="warna" class="selectkun">
                                            <option value="all">~ Pilih Warna ~</option>
                                            <option value="Hitam">Hitam</option>
                                            <option value="Biru">Biru</option>
                                            <option value="Coklat">Coklat</option>
                                            <option value="Emas">Emas</option>
                                            <option value="Abu-abu">Abu-abu</option>
                                            <option value="Silver">Silver</option>
                                            <option value="Hijau">Hijau</option>
                                            <option value="Oranye">Oranye</option>
                                            <option value="Ungu">Ungu</option>
                                            <option value="Merah">Merah</option>
                                            <option value="Putih">Putih</option>
                                            <option value="Kuning">Kuning</option>
                                            <option value="Marun">Marun</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 product-details">
                                        <div class="fw-rad-choose">
                                            <p>Tipe Penjual</p>
                                            <div style="margin-top:-15px; padding-bottom:10px;">
                                                <div class="sc-item">
                                                    <input type="radio" value="Individu" name="penjual" id="Individu" checked="">
                                                    <label for="Individu">Individu</label>
                                                </div>
                                                <div class="sc-item">
                                                    <input type="radio" value="Dealer" name="penjual" id="Dealer" checked="">
                                                    <label for="Dealer">Dealer</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Jarak Tempuh</label>
                                        <select name="jarak" class="selectkun">
                                            <option value="all">~ Pilih Jarak Tempuh</option>
                                            <option value="0-5.000">0-5.000</option>
                                            <option value="5.000-10.000">5.000-10.000</option>
                                            <option value="10.000-15.000">10.000-15.000</option>
                                            <option value="15.000-20.000">15.000-20.000</option>
                                            <option value="20.000-25.000">20.000-25.000</option>
                                            <option value="25.000-30.000">25.000-30.000</option>
                                            <option value="30.000-35.000">30.000-35.000</option>
                                            <option value="35.000-40.000">35.000-40.000</option>
                                            <option value="40.000-45.000">40.000-45.000</option>
                                            <option value="45.000-50.000">45.000-50.000</option>
                                            <option value="50.000-55.000">50.000-55.000</option>
                                            <option value="55.000-60.000">55.000-60.000</option>
                                            <option value="60.000-65.000">60.000-65.000</option>
                                            <option value="65.000-70.000">65.000-70.000</option>
                                            <option value="70.000-75.000">70.000-75.000</option>
                                            <option value="75.000-80.000">75.000-80.000</option>
                                            <option value="80.000-85.000">80.000-85.000</option>
                                            <option value="85.000-90.000">85.000-90.000</option>
                                            <option value="90.000-95.000">90.000-95.000</option>
                                            <option value="95.000-100.000">95.000-100.000</option>
                                            <option value="100.000-105.000">100.000-105.000</option>
                                            <option value="105.000-110.000">105.000-110.000</option>
                                            <option value="110.000-115.000">110.000-115.000</option>
                                            <option value="115.000-120.000">115.000-120.000</option>
                                            <option value="120.000-125.000">120.000-125.000</option>
                                            <option value="125.000-130.000">125.000-130.000</option>
                                            <option value="130.000-135.000">130.000-135.000</option>
                                            <option value="135.000-140.000">135.000-140.000</option>
                                            <option value="140.000-145.000">140.000-145.000</option>
                                            <option value="145.000-150.000">145.000-150.000</option>
                                            <option value="150.000-155.000">150.000-155.000</option>
                                            <option value="155.000-160.000">155.000-160.000</option>
                                            <option value="160.000-165.000">160.000-165.000</option>
                                            <option value="165.000-170.000">165.000-170.000</option>
                                            <option value="170.000-175.000">170.000-175.000</option>
                                            <option value="175.000-180.000">175.000-180.000</option>
                                            <option value="180.000-185.000">180.000-185.000</option>
                                            <option value="185.000-190.000">185.000-190.000</option>
                                            <option value="190.000-195.000">190.000-195.000</option>
                                            <option value="195.000-200.000">195.000-200.000</option>
                                            <option value="200.000-205.000">200.000-205.000</option>
                                            <option value="205.000-210.000">205.000-210.000</option>
                                            <option value="210.000-215.000">210.000-215.000</option>
                                            <option value="215.000-220.000">215.000-220.000</option>
                                            <option value="220.000-225.000">220.000-225.000</option>
                                            <option value="225.000-230.000">225.000-230.000</option>
                                            <option value="230.000-235.000">230.000-235.000</option>
                                            <option value="235.000-240.000">235.000-240.000</option>
                                            <option value="240.000-245.000">240.000-245.000</option>
                                            <option value="245.000-250.000">245.000-250.000</option>
                                            <option value="250.000-255.000">250.000-255.000</option>
                                            <option value="255.000-260.000">255.000-260.000</option>
                                            <option value="260.000-265.000">260.000-265.000</option>
                                            <option value="265.000-270.000">265.000-270.000</option>
                                            <option value="270.000-275.000">270.000-275.000</option>
                                            <option value="275.000-280.000">275.000-280.000</option>
                                            <option value="280.000-285.000">280.000-285.000</option>
                                            <option value="285.000-290.000">285.000-290.000</option>
                                            <option value="290.000-295.000">290.000-295.000</option>
                                            <option value="295.000-300.000">295.000-300.000</option>
                                            <option value="&gt;300.000">&gt;300.000</option>
                                        </select>
                                    </div>
                                </div>
                                
                                @break
                            @case("Motor")
                            <div class="row address-inputs">
                                <div class="col-md-12">
                                    <label for="">Merek</label>
                                    <select name="merek" class="selectkun">
                                        <option value="all">~ Pilih Merek ~</option>
                                        <option value="Aprilia">Aprilia</option>
                                        <option value="Bajaj">Bajaj</option>
                                        <option value="Benelli">Benelli</option>
                                        <option value="BMW">BMW</option>
                                        <option value="Ducati">Ducati</option>
                                        <option value="Gilera">Gilera</option>
                                        <option value="Harley Davidson">Harley Davidson</option>
                                        <option value="Honda">Honda</option>
                                        <option value="Husqvarna">Husqvarna</option>
                                        <option value="Hyosung">Hyosung</option>
                                        <option value="Jialing">Jialing</option>
                                        <option value="Kanzen">Kanzen</option>
                                        <option value="Kawasaki">Kawasaki</option>
                                        <option value="Kreidler">Kreidler</option>
                                        <option value="KTM">KTM</option>
                                        <option value="Kymco">Kymco</option>
                                        <option value="Minerva">Minerva</option>
                                        <option value="Off-Road dan Auto-Cross">Off-Road dan Auto-Cross</option>
                                        <option value="Piaggio">Piaggio</option>
                                        <option value="Quads dan Trikes">Quads dan Trikes</option>
                                        <option value="Sanex">Sanex</option>
                                        <option value="Suzuki">Suzuki</option>
                                        <option value="Tossa">Tossa</option>
                                        <option value="Triumph">Triumph</option>
                                        <option value="TVS">TVS</option>
                                        <option value="Viar">Viar</option>
                                        <option value="Victory">Victory</option>
                                        <option value="Yamaha">Yamaha</option>
                                        <option value="Zundapp">Zundapp</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="">Tahun</label>
                                    <select name="tahun" class="selectkun"><option value="all">~ Pilih Tahun Keluaran ~</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">&lt;1986</option></select>
                                </div>
                                <div class="col-md-12 product-details">
                                    <div class="fw-rad-choose">
                                        <p>Tipe Penjual</p>
                                        <div style="margin-top:-15px; padding-bottom:10px;">
                                            <div class="sc-item">
                                                <input type="radio" value="Individu" name="penjual" id="Individu" checked="">
                                                <label for="Individu">Individu</label>
                                            </div>
                                            <div class="sc-item">
                                                <input type="radio" value="Dealer" name="penjual" id="Dealer" checked="">
                                                <label for="Dealer">Dealer</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="">Warna</label>
                                    <select name="warna" class="selectkun">
                                        <option value="all">~ Pilih Warna ~</option>
                                        <option value="Hitam">Hitam</option>
                                        <option value="Biru">Biru</option>
                                        <option value="Coklat">Coklat</option>
                                        <option value="Emas">Emas</option>
                                        <option value="Abu-abu">Abu-abu</option>
                                        <option value="Silver">Silver</option>
                                        <option value="Hijau">Hijau</option>
                                        <option value="Oranye">Oranye</option>
                                        <option value="Ungu">Ungu</option>
                                        <option value="Merah">Merah</option>
                                        <option value="Putih">Putih</option>
                                        <option value="Kuning">Kuning</option>
                                        <option value="Marun">Marun</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="">Jarak Tempuh</label>
                                    <select name="jarak" class="selectkun">
                                        <option value="all">~ Pilih Jarak Tempuh</option>
                                        <option value="0-5.000">0-5.000</option>
                                        <option value="5.000-10.000">5.000-10.000</option>
                                        <option value="10.000-15.000">10.000-15.000</option>
                                        <option value="15.000-20.000">15.000-20.000</option>
                                        <option value="20.000-25.000">20.000-25.000</option>
                                        <option value="25.000-30.000">25.000-30.000</option>
                                        <option value="30.000-35.000">30.000-35.000</option>
                                        <option value="35.000-40.000">35.000-40.000</option>
                                        <option value="40.000-45.000">40.000-45.000</option>
                                        <option value="45.000-50.000">45.000-50.000</option>
                                        <option value="50.000-55.000">50.000-55.000</option>
                                        <option value="55.000-60.000">55.000-60.000</option>
                                        <option value="60.000-65.000">60.000-65.000</option>
                                        <option value="65.000-70.000">65.000-70.000</option>
                                        <option value="70.000-75.000">70.000-75.000</option>
                                        <option value="75.000-80.000">75.000-80.000</option>
                                        <option value="80.000-85.000">80.000-85.000</option>
                                        <option value="85.000-90.000">85.000-90.000</option>
                                        <option value="90.000-95.000">90.000-95.000</option>
                                        <option value="95.000-100.000">95.000-100.000</option>
                                        <option value="100.000-105.000">100.000-105.000</option>
                                        <option value="105.000-110.000">105.000-110.000</option>
                                        <option value="110.000-115.000">110.000-115.000</option>
                                        <option value="115.000-120.000">115.000-120.000</option>
                                        <option value="120.000-125.000">120.000-125.000</option>
                                        <option value="125.000-130.000">125.000-130.000</option>
                                        <option value="130.000-135.000">130.000-135.000</option>
                                        <option value="135.000-140.000">135.000-140.000</option>
                                        <option value="140.000-145.000">140.000-145.000</option>
                                        <option value="145.000-150.000">145.000-150.000</option>
                                        <option value="150.000-155.000">150.000-155.000</option>
                                        <option value="155.000-160.000">155.000-160.000</option>
                                        <option value="160.000-165.000">160.000-165.000</option>
                                        <option value="165.000-170.000">165.000-170.000</option>
                                        <option value="170.000-175.000">170.000-175.000</option>
                                        <option value="175.000-180.000">175.000-180.000</option>
                                        <option value="180.000-185.000">180.000-185.000</option>
                                        <option value="185.000-190.000">185.000-190.000</option>
                                        <option value="190.000-195.000">190.000-195.000</option>
                                        <option value="195.000-200.000">195.000-200.000</option>
                                        <option value="200.000-205.000">200.000-205.000</option>
                                        <option value="205.000-210.000">205.000-210.000</option>
                                        <option value="210.000-215.000">210.000-215.000</option>
                                        <option value="215.000-220.000">215.000-220.000</option>
                                        <option value="220.000-225.000">220.000-225.000</option>
                                        <option value="225.000-230.000">225.000-230.000</option>
                                        <option value="230.000-235.000">230.000-235.000</option>
                                        <option value="235.000-240.000">235.000-240.000</option>
                                        <option value="240.000-245.000">240.000-245.000</option>
                                        <option value="245.000-250.000">245.000-250.000</option>
                                        <option value="250.000-255.000">250.000-255.000</option>
                                        <option value="255.000-260.000">255.000-260.000</option>
                                        <option value="260.000-265.000">260.000-265.000</option>
                                        <option value="265.000-270.000">265.000-270.000</option>
                                        <option value="270.000-275.000">270.000-275.000</option>
                                        <option value="275.000-280.000">275.000-280.000</option>
                                        <option value="280.000-285.000">280.000-285.000</option>
                                        <option value="285.000-290.000">285.000-290.000</option>
                                        <option value="290.000-295.000">290.000-295.000</option>
                                        <option value="295.000-300.000">295.000-300.000</option>
                                        <option value="&gt;300.000">&gt;300.000</option>
                                    </select>
                                </div>
                            </div>
                                @break
                            @case("Elektronik")
                            <div class="row address-inputs">
                                <div class="col-md-12">
                                    <label for="">Jenis Elektronik & Gadget</label>
                                    <select name="jenis" id="jenis" class="selectkun">
                                        <option value="all">~ Pilih Jenis Elektronik & Gadget ~</option>
                                        <option value="Handphone">Handphone</option>
                                        <option value="Tablet">Tablet</option>
                                        <option value="Aksesoris HP & Tablet">Aksesoris HP &amp; Tablet</option>
                                        <option value="Fotorafi">Fotorafi</option>
                                        <option value="Elektronik Rumah Tangga">Elektronik Rumah Tangga</option>
                                        <option value="Games & Console">Games & Console</option>
                                        <option value="Komputer">Komputer</option>
                                        <option value="Lampu">Lampu</option>
                                        <option value="TV & Audio, Video">TV &amp; Audio, Video</option>
                                    </select>
                                </div>
                                <div class="col-md-12 product-details">
                                    <div class="fw-rad-choose">
                                        <p>Kondisi</p>
                                        <div style="margin-top:-15px; padding-bottom:10px;">
                                            <div class="sc-item">
                                                <input type="radio" value="Baru" name="kondisi" id="Baru" checked="">
                                                <label for="Baru">Baru</label>
                                            </div>
                                            <div class="sc-item">
                                                <input type="radio" value="Bekas" name="kondisi" id="Bekas" checked="">
                                                <label for="Bekas">Bekas</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 tiada" id="pilihMerk">
                                    @include("list.optionelek")
                                </div>
                            </div>
                                @break
                            @default
                                
                        @endswitch

						<div class="cf-title" style="margin-bottom:30px;">Lokasi Iklan</div>
						<div class="row address-inputs">
							<div class="col-md-12">
								<select class="selectkun" name="provinsi" id="provinsi">
                                        <option select="all">~ Pilih Provinsi ~</option>
                                        @foreach ($pro as $d)
                                            <option value="{{$d->id}}">{{$d->name}}</option>
                                        @endforeach
                                  </select>
                            </div>

                            <div class="col-md-12 tiada" id="pilihKabu">
								<select class="selectkun" name="kabupaten" id="kabupaten">
                                    <option value="all">~ Pilih Kabupaten ~</option>
                                    @foreach ($kabu as $d)
                                            <option value="{{$d->id}}">{{$d->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-12 tiada" id="pilihKeca">
								<select class="selectkun" name="kecamatan" id="kecamatan">
                                    <option value="all">~ Pilih Kecamatan ~</option>
                                    @foreach ($keca as $d)
                                        <option value="{{$d->id}}">{{$d->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                        </div>
                        
						
                        <button type="submit" class="site-btn submit-order-btn" id="simpanData">Simpan</button>
					</form>
				</div>
				<div class="col-lg-4 order-1 order-lg-2">
					<div class="checkout-cart">
						<h3>Upload Gambar</h3>
						<form method="post" enctype="multipart/form-data"
                            class="dropzone" id="dropzone">
                            @csrf
                        </form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- checkout section end -->

    @include('template.footer')

    <script type="text/javascript">

        var $dropZone = $("#dropzone").dropzone(
            {
                url: "{{url('jual/upload')}}",
                maxFilesize: 12,
                renameFile: function (file) {
                    var dt = new Date();
                    var time = dt.getTime();
                    return time + file.name;
                },
                autoProcessQueue: false,
                parallelUploads: 10,
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                addRemoveLinks: true,
                timeout: 50000,
                init: function(){
                    var myDropzone = this;
                    var id = "{{$iklan->id_barang}}";
                    $.ajax({
                        type: "GET",
                        url: "{{ url('jual/getUploaded') }}/"+id,
                        dataType: "JSON",
                        success: function(data){
                            
                            jQuery.each(data, function(index, item) {
                                var mockFile = { name: item.name, size: item.size };
                                
                                myDropzone.options.addedfile.call(myDropzone, mockFile);
                
                                myDropzone.options.thumbnail.call(myDropzone, mockFile, "{{url('img/single-product')}}/"+item.name);
                            });                                     
                        },error: function(){
                            console.log('error');
                        }
                    });
                },
                removedfile: function (file) {
                    var imgName = file.name;
                    $.ajax({
                        type: 'POST',
                        url: '{{ url("jual/deleteUp") }}',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            filename: imgName,
                            id: "{{$iklan->id_barang}}"},
                        success: function (data) {
                            console.log("File has been successfully removed!!");
                        },
                        error: function (e) {
                            console.log(e);
                        }
                    });
                    var fileRef;
                    return (fileRef = file.previewElement) != null ?
                        fileRef.parentNode.removeChild(file.previewElement) : void 0;
                },
                success: function (file, response) {
                    console.log(response);
                },
                error: function (file, response) {
                    return false;
                }
            });

        $(document).ready(function() {

            setData();

            function setData(){
                var tipe = "{{$iklan->tipe_barang}}";
                $("input[name='judul']").val("{{$iklan->nama_barang}}");
                $("input[name='tipe']").val("{{$iklan->tipe_barang}}");

                $("#pilihKabu").removeClass('tiada');
                $("#pilihKabu").addClass('ada');  
                $("#pilihKeca").removeClass('tiada');
                $("#pilihKeca").addClass('ada');  
                $("#pilihMerk").removeClass('tiada');
                $("#pilihMerk").addClass('ada');  

                

                $("select[name='provinsi']").val("{{$lokasi->id_provinsi}}");
                $("select[name='kabupaten']").val("{{$lokasi->id_kabupaten}}");
                $("select[name='kecamatan']").val("{{$lokasi->id_kecamatan}}");
                $("input[name='harga']").val("{{$iklan->harga_beli}}");
                
                switch (tipe) {
                    case "Mobil":
                        $("select[name='merek']").val("{{$detail->merek_mobil}}");
                        $("select[name='tahun']").val("{{$detail->tahun_mobil}}");
                        $("input:radio[name='bahan']").filter("[value='{{$detail->bahan_mobil}}']").prop('checked', true);
                        $("select[name='warna']").val("{{$detail->warna_mobil}}");
                        $("input:radio[name='penjual']").filter("[value='{{$detail->tipe_penjual}}']").prop('checked', true);
                        $("select[name='jarak']").val("{{$detail->jarak_mobil}}");
                        break;
                    case "Motor":
                        $("select[name='merek']").val("{{$detail->merek_motor}}");
                        $("select[name='tahun']").val("{{$detail->tahun_motor}}");
                        $("select[name='warna']").val("{{$detail->warna_motor}}");
                        $("input:radio[name='penjual']").filter("[value='{{$detail->tipe_penjual}}']").prop('checked', true);
                        $("select[name='jarak']").val("{{$detail->jarak_motor}}");
                        break;
                    case "Elektronik":
                        var jenis = "{{$detail->jenis_elektronik}}";
                        var type = "{{$detail->tipe_elektronik}}";
                        var merk = "{{$detail->merek_elektronik}}";
                        var a = jenis.replace('&amp;', '&');
                        var b = type.replace('&amp;', '&');
                        var c = merk.replace('&amp;', '&');
                        $("select[name='jenis']").val(a);
                        $("select[name='type']").val(b);
                        $("select[name='merek']").val(c);
                        $("input:radio[name='kondisi']").filter("[value='{{$detail->kondisi_elektronik}}']").prop('checked', true);
                        break;
                    default:
                        break;
                }

                
            }


            $("#ubahin").submit(function(e){
                e.preventDefault();
                var id = "{{$iklan->id_barang}}";
                var req = new FormData(this);
                $.ajax({
                    url: "{{ url('jual/update') }}/"+id,
                    method: "POST",
                    data: req,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data){
                        if(data == "sukses"){
                            console.log(data);
                            $dropZone[0].dropzone.processQueue();
                                swal.fire('Berhasil Ubah Iklan!',
                                            'Data iklan telah diubah',
                                            'success').then(function(){ 
                                                     location.reload();
                                            });

                            
                        }else {
                            console.log(data);
                          swal.fire('Gagal Ubah Iklan !', 'Terjadi Error', 'error');
                        }
                    }
                });
              

          });

            $("#provinsi").change(function(){
                var id = $(this).val(); 
                getKabu(id);               
            });  

            

            $("#kabupaten").change(function(){
                var id = $(this).val(); 
                getKeca(id);        
            });  

            function getKabu(id){
                $.ajax({
                    type: "GET",
                    url: "{{ url('getKabu') }}/"+id,
                    success: function(data){
                        $("#pilihKabu").removeClass('tiada');
                        $("#pilihKabu").addClass('ada');  
                        $("#pilihKeca").removeClass('ada');
                        $("#pilihKeca").addClass('tiada');  
                        // alert(data); 
                        $('#kabupaten').html(data);                                              
                    },error: function(){
                        console.log('error');
                    }
                }); 
            }
            
            function getKeca(id){
                $.ajax({
                    type: "GET",
                    url: "{{ url('getKeca') }}/"+id,
                    success: function(data){
                        $("#pilihKeca").removeClass('tiada');
                        $("#pilihKeca").addClass('ada');  
                        // alert(data); 
                        $('#kecamatan').html(data);                                              
                    },error: function(){
                        console.log('error');
                    }
                });
            }

            $("input[name='harga']").keyup(function(event) {

                // skip for arrow keys
                if(event.which >= 37 && event.which <= 40) return;

                // format number
                $(this).val(function(index, value) {
                return value
                .replace(/\D/g, "")
                .replace(/\B(?=(\d{3})+(?!\d))/g, ".")
                ;
                });
            });


            $("#jenis").change(function(){
                var id = $(this).val(); 
                $.ajax({
                    type: "GET",
                    url: "{{ url('jual/getJenis') }}/"+id,
                    success: function(data){
                        $("#pilihMerk").removeClass('tiada');
                        $("#pilihMerk").addClass('ada');  
                        // alert(data); 
                        $('#pilihMerk').html(data);   
                                                               
                    },error: function(){
                        console.log('error');
                    }
                });                    
            }); 

            

        });

        
    </script>
    
    
    @endsection