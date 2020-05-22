@switch($isi)
    @case("Handphone")
    <label for="">Merek</label>
    <select name="merek" id="first" class="selectkun">
        <option value="all">~ Pilih Merek ~</option>
        <option value="Apple">Apple</option>
        <option value="Blackberry">Blackberry</option>
        <option value="HTC">HTC</option>
        <option value="Huawei">Huawei</option>
        <option value="Lenovo">Lenovo</option>
        <option value="LG">LG</option>
        <option value="Motorola">Motorola</option>
        <option value="Nexian">Nexian</option>
        <option value="Nokia">Nokia</option>
        <option value="Samsung">Samsung</option>
        <option value="Sony">Sony</option>
        <option value="Asus">Asus</option>
        <option value="Cross">Cross</option>
        <option value="IMO">IMO</option>
        <option value="Mito">Mito</option>
        <option value="Oppo">Oppo</option>
        <option value="Xiaomi">Xiaomi</option>
        <option value="Evercoss">Evercoss</option>
        <option value="Advan">Advan</option>
        <option value="Acer">Acer</option>
        <option value="Smartfren">Smartfren</option>
        <option value="Lain-lain">Lain-lain</option>
    </select>

        @break
    @case("Tablet")
    <label for="">Merek</label>
    <select name="merek" id="first" class="selectkun">
        <option value="all">~ Pilih Merek ~</option>
        <option value="Apple">Apple</option>
        <option value="Acer">Acer</option>
        <option value="Advan">Advan</option>
        <option value="Asus">Asus</option>
        <option value="Huawei">Huawei</option>
        <option value="Samsung">Samsung</option>
        <option value="Smartfren">Smartfren</option>
        <option value="Cross">Cross</option>
        <option value="Evercoss">Evercoss</option>
        <option value="LG">LG</option>
        <option value="Lenovo">Lenovo</option>
        <option value="Sony">Sony</option>
        <option value="IMO">IMO</option>
        <option value="Mito">Mito</option>
        <option value="Xiaomi">Xiaomi</option>
        <option value="HP">HP</option>
        <option value="Lain-lain">Lain-lain</option>
    </select>
        @break
    @case("Aksesoris HP & Tablet")
    <label for="">Tipe</label>
    <select name="type" id="first" class="selectkun">
        <option value="all">~ Pilih Tipe ~</option>
        <option value="Casing">Casing</option>
        <option value="Baterai">Baterai</option>
        <option value="Charger">Charger</option>
        <option value="Head Set">Head Set</option>
        <option value="Kartu Memory">Kartu Memory</option>
        <option value="Kartu Sim">Kartu Sim</option>
        <option value="Aksesoris Lainnya">Aksesoris Lainnya</option>
    </select>
        @break
    @case("Fotorafi")
    <label for="">Tipe</label>
    <select name="type" id="first" class="selectkun">
        <option value="all">~ Pilih Tipe ~</option>
        <option value="Kamera Digital">Kamera Digital</option>
        <option value="Kamera DSLR">Kamera DSLR</option>
        <option value="Lensa">Lensa</option>
        <option value="Perlengkapan Kamera Pro">Perlengkapan Kamera Pro</option>
        <option value="Aksesoris">Aksesoris</option>
        <option value="Teleskop">Teleskop</option>
        <option value="Kamera Lainnya">Kamera Lainnya</option>
    </select>
        @break
    @case("Elektronik Rumah Tangga")
    <label for="">Tipe</label>
    <select name="type" id="first" class="selectkun">
        <option value="all">~ Pilih Tipe ~</option>
        <option value="Peralatan Elektronik">Peralatan Elektronik</option>
        <option value="Mesin Cuci">Mesin Cuci</option>
        <option value="Alat Dapur">Alat Dapur</option>
        <option value="Kulkas & Freezer">Kulkas & Freezer</option>
        <option value="Kipas Angin, AC & Exhaust">Kipas Angin, AC & Exhaust</option>
        <option value="Alat Listrik">Alat Listrik</option>
        <option value="Telekom">Telekom</option>
        <option value="Lain-lain">Lain-lain</option>
    </select>
        @break
    @case("Games & Console")
    <label for="">Tipe</label>
    <select name="type" id="first" class="selectkun">
        <option value="all">~ Pilih Tipe ~</option>
        <option value="Console">Console</option>
        <option value="Portable">Portable</option>
        <option value="Games">Games</option>
        <option value="Aksesoris">Aksesoris</option>
    </select>
        @break
    @case("Komputer")
    <label for="">Tipe</label>
    <select name="type" id="first" class="selectkun">
        <option value="all">~ Pilih Tipe ~</option>
        <option value="Laptop">Laptop</option>
        <option value="Komputer Desktop">Komputer Desktop</option>
        <option value="Printer, tinta & Scanner">Printer, tinta & Scanner</option>
        <option value="Monitor">Monitor</option>
        <option value="Keyboard & Mouse">Keyboard & Mouse</option>
        <option value="Komponen">Komponen</option>
        <option value="Memory">Memory</option>
        <option value="Modem & Router">Modem & Router</option>
        <option value="Flashdisk">Flashdisk</option>
        <option value="Hard disk">Hard disk</option>
        <option value="Proyektor">Proyektor</option>
        <option value="Kamera">Kamera</option>
        <option value="Software">Software</option>
        <option value="Aksesoris">Aksesoris</option>
        <option value="Server">Server</option>
    </select>
        @break
    @case("TV & Audio, Video")
    <label for="">Tipe</label>
    <select name="type" id="first" class="selectkun">
        <option value="all">~ Pilih Tipe ~</option>
        <option value="Televisi">Televisi</option>
        <option value="Home Theater & Speaker">Home Theater & Speaker</option>
        <option value="Video Player">Video Player</option>
        <option value="Pemutar Musik Portable">Pemutar Musik Portable</option>
        <option value="Audio Player & Rec">Audio Player & Rec</option>
        <option value="Headphone">Headphone</option>
        <option value="Kamera Video">Kamera Video</option>
        <option value="Antena">Antena</option>
        <option value="Aksesoris & Kabel">Aksesoris & Kabel</option>
    </select>
        @break
    @default

        
@endswitch