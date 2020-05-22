
@switch($type1)
    @case("Properti")
    <option value="all"> ~ Pilih Kategori ~</option>
    <option value="Akomondasi">Akomondasi</option>
    <option value="Sarana">Sarana</option>
        @break
    @case("Kendaraan")
    <option value="all"> ~ Pilih Kategori ~</option>
    <option value="Kendaraan Darat">Kendaraan Darat</option>
    <option value="Konstruksi">Konstruksi</option>
    <option value="Kendaraan Laut">Kendaraan Laut</option>
    <option value="Kendaraan Udara">Kendaraan Udara</option>                                        
        @break
    @case("Barang")
    <option value="all"> ~ Pilih Kategori ~</option>
    <option value="Fashion">Fashion</option>
    <option value="Akomodasi" >Akomodasi</option>
    <option value="Elektronik">Elektronik</option>
    <option value="Barang Anak" >Barang Anak</option>
    <option value="Sarana">Sarana</option>
    <option value="Peralatan">Peralatan</option>
    <option value="Hobi">Hobi</option>
    <option value="Dekorasi">Dekorasi</option>
    <option value="Kantor & Industri">Kantor & Industri</option>
        @break
    @default
        
@endswitch

