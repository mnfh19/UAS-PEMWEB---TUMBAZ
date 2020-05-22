
{{-- SUB KATEGORI --}}

@switch($type2)
    @case("Akomondasi")
    <option value="all"> ~ Pilih Sub Kategori ~</option>
    <option value="Rumah">Rumah</option>
    <option value="Villa">Villa</option>
    <option value="Apartment">Apartment</option>
    <option value="Kost/Kamar">Kost/Kamar</option>
        @break
    @case("Sarana")
    <option value="all"> ~ Pilih Sub Kategori ~</option>
    <option value="Olahraga">Olahraga</option>
    <option value="Studio">Studio</option>
    <option value="Ruangan">Ruangan</option>
        @break


    @case("Kendaraan Darat")
    <option value="all"> ~ Pilih Sub Kategori ~</option>
    <option value="Mobil">Mobil</option>
    <option value="Motor">Motor</option>
    <option value="Truk / Pickup">Truk / Pickup</option>
    <option value="Bus">Bus</option>
    <option value="Sepeda">Sepeda</option>
        @break
    @case("Konstruksi")
        <option value="all"> ~ Pilih Sub Kategori ~</option>
        <option value="Alat Berat">Alat Berat</option>
        <option value="Peralatan Bangunan">Peralatan Bangunan</option>
        <option value="Kontainer">Kontainer</option>
        @break
    @case("Kendaraan Laut")
        <option value="all"> ~ Pilih Sub Kategori ~</option>
        <option value="Kapal">Kapal</option>
        @break
    @case("Kendaraan Udara")
        <option value="all"> ~ Pilih Sub Kategori ~</option>
        <option value="54">Helikopter</option>
        <option value="55">Pesawat</option>
        @break



    @case("Fashion")
        <option value="all"> ~ Pilih Sub Kategori ~</option>
        <option value="Baju Pengantin">Baju Pengantin</option>
        <option value="Kostum">Kostum</option>
        <option value="Baju Adat">Baju Adat</option>
        <option value="Aksesoris">Aksesoris</option>
        @break
    @case("Elektronik")
        <option value="all"> ~ Pilih Sub Kategori ~</option>
        <option value="Kamera">Kamera</option>
        <option value="Komputer">Komputer</option>
        <option value="Audio">Audio</option>
        <option value="Display/Proyektor">Display/Proyektor</option>
        @break
    @case("Barang Anak")
        <option value="all"> ~ Pilih Sub Kategori ~</option>
        <option value="Mainan Anak">Mainan Anak</option>
        <option value="Peralatan Bayi">Peralatan Bayi</option>
        @break
    @case("Peralatan")
        <option value="all"> ~ Pilih Sub Kategori ~</option>
        <option value="Peralatan Rumah Tangga">Peralatan Rumah Tangga</option>
        <option value="Outdoor/Camping">Outdoor/Camping</option>
        @break
    @case("Hobi")
        <option value="all"> ~ Pilih Sub Kategori ~</option>
        <option value="Mainan/Game">Mainan/Game</option>
        <option value="Alat Musik">Alat Musik</option>
        <option value="Alat Olahraga">Alat Olahraga</option>
        <option value="Alat Kerajinan Tangan">Alat Kerajinan Tangan</option>
        <option value="Buku">Buku</option>
        <option value="CD/Kaset">CD/Kaset</option>
        @break
    @case("Dekorasi")
        <option value="all"> ~ Pilih Sub Kategori ~</option>
        <option value="Furniture">Furniture</option>
        <option value="Tenda Event">Tenda Event</option>
        <option value="Stand/Booth">Stand/Booth</option>
        @break
    @case("Kantor & Industri")
        <option value="all"> ~ Pilih Sub Kategori ~</option>
        <option value="Peralatan Medis">Peralatan Medis</option>
        <option value="Peralatan Pabrik">Peralatan Pabrik</option>
        <option value="Peralatan Teknik">Peralatan Teknik</option>
        <option value="Peralatan Kantor">Peralatan Kantor</option>
        @break


        
    @default
        
@endswitch