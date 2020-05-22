{{-- @extends('main.head')
@section('content') --}}

<table>
    <tr>
        <th colspan="2">Aktiva</th>
    </tr>
    
        @foreach ($kewajiban as $d)
        <tr>
            <td>{{$d->nama_akun}}</td>
            <?php
            $tot = 0;
            $tot = $debit[$d->nomor_akun] - $kredit[$d->nomor_akun]
            
            ?>
            <td>{{ $tot }}</td>
        </tr>

        @endforeach

        {{-- @foreach ($kewajiban as $d)
        <tr>
            <td>{{$d->nama_akun}}</td>
        </tr>

        @endforeach --}}
    

</table>



{{-- @include('main.footer') --}}



{{-- <script>
    $(document).ready(function(){
        function fetch_data(page, type, sort, query, filt){
            $.ajax({
                url: "/pilihSekolah/p?page="+page+"&sort="+sort+"&type="+type+"&query="+query+"&filt="+filt,
                success: function(data){
                    $("#listData").html('');
                    $("#listData").html(data);
                }
            });
        }
    });
    
</script> --}}




  {{-- @endsection --}}