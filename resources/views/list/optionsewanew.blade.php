
    {{-- <input type="hidden" value="" name="hargasan[{{$totalll}}]">
    <input type="hidden" value="{{$waktu[$totalll]}}" name="waktusan[{{$totalll}}]">
    <input type="hidden" value="{{$satuan[$totalll]}}" name="satuansan[{{$totalll}}]"> --}}
    <div class="row" >
        <div class="col-md-12">
            <label for="">Paket Harga</label>
        </div>
        <div class="hargakun">
            <button class="buttonhargakun" disabled>RP</button>
            <input type="text" name="paket[{{$totalll}}][harga]" class="inputhargakun numHarga">
            
        </div>
        <div class="hargakun" style="float: right">
            <button class="spanhargakun" disabled>Per</button>
            <input type="number" class="inputhargakun2" name="paket[{{$totalll}}][num]" min="1" value="1"> 
            
            <select class="buttonhargakun2" name="paket[{{$totalll}}][per]" id="">
                <option value="Jam">Jam</option>
                <option value="Hari">Hari</option>
                <option value="Minggu">Minggu</option>
                <option value="Bulan">Bulan</option>
                <option value="Tahun">Tahun</option>
                <option value="Tiket">Tiket</option>
            </select>
        </div>
        <div class="box-hapusin">
            <div class="itemhapusin">
                <button type="button" class="btnhapusin hapusPaket">X</button>
            </div>
        </div>
    </div>