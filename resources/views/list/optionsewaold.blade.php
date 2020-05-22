


@foreach ($paketan as $d)
    <?php
        $totalll = 1;
        $p = explode(" ", $d->waktu_paket);
    ?>


    <div class="row" >
        <div class="col-md-12">
            <label for="">Paket Harga</label>
        </div>
        <div class="hargakun">
            <button class="buttonhargakun" disabled>RP</button>
            <input type="text" value="{{$d->harga_paket}}"  name="paket[{{$totalll}}][harga]" class="inputhargakun numHarga">
            
        </div>
        <div class="hargakun" style="float: right">
            <button class="spanhargakun" disabled>Per</button>
            <input type="number" class="inputhargakun2" name="paket[{{$totalll}}][num]" min="1" value="{{$p[1]}}"> 
            
            <input type="hidden" value="{{$p[2]}}">
            <select class="buttonhargakun2" name="paket[{{$totalll}}][per]" id="">
                <?php 
                $a = " "; 
                $b = " "; 
                $c = " "; 
                $d = " "; 
                $e = " "; 
                $f = " ";
                ?>
                @if ($p[2] == "Jam")
                    <?php $a = "selected"?>  
                @elseif($p[2] == "Hari")
                    <?php $b = "selected"?>
                @elseif($p[2] == "Bulan")
                    <?php $c = "selected"?>
                @elseif($p[2] == "Tahun")
                    <?php $d = "selected"?>
                @elseif($p[2] == "Tiket")
                    <?php $e = "selected"?>
                @elseif($p[2] == "Minggu")
                    <?php $f = "selected"?>
                @else 
                
                @endif
                <option value="Jam" {{$a}}>Jam</option>
                <option value="Hari" {{$b}}>Hari</option>
                <option value="Minggu" {{$f}}>Minggu</option>
                <option value="Bulan" {{$c}}>Bulan</option>
                <option value="Tahun" {{$d}}>Tahun</option>
                <option value="Tiket" {{$e}}>Tiket</option>
            </select>
        </div>
        <div class="box-hapusin">
            <div class="itemhapusin">
                <button type="button" class="btnhapusin hapusPaket">X</button>
            </div>
        </div>
    </div>
    <?php
        $totalll++;
    ?>
@endforeach


