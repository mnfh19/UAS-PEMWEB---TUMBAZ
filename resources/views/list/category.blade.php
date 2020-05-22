<input type="hidden" id="counted" value="{{$count}}">
@foreach ($barang as $d)

<div class="col-lg-4 col-sm-6">
    <div class="product-item">
        <div class="pi-pic">
            @if ($d->status_barang == 0)
                <div class="tag-new">Jual</div>
            @else
                <div class="tag-sale">Sewa</div>
            @endif
            
            <img src="{{url('img/single-product/'.$firstImg[$d->id_barang] )}}" alt="">
            {{-- <img src="./img/product/13.jpg" alt=""> --}}
            <div class="pi-links">
                <a href="{{url('product/'.$d->id_barang)}}" class="add-card"><i class="flaticon-bag"></i><span>LIHAT DETAIL</span></a>
                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
            </div>
        </div>
        <div class="pi-text">
            <h6>Rp {{$harga[$d->id_barang]}}</h6>
            <p class="limited">{{$d->nama_barang}}</p>
        </div>
    </div>
</div>

@endforeach