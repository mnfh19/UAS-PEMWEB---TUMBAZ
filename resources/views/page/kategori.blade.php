@extends('template.head')
@section('content')

<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Your cart</h4>
        <div class="site-pagination">
            <a href="">Home</a> /
            <a href="">Your cart</a>
        </div>
    </div>
</div>
<!-- Page info end -->


<section class="cart-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <section class="features-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 p-0 clicky feature2">
                                <a href="{{url("jual/Mobil")}}">
                                    <div class="feature-inner">
                                        
                                        <div class="feature-icon">
                                            <img src="img/icons/1.png" alt="#">
                                        </div>
                                        <h2>Mobil</h2>
                                    </div>
                                    
                                </a>
                            </div>
                            <div class="col-md-4 p-0 clicky feature2 specialfeat">
                                <a href="{{url('jual/Motor')}}">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img src="img/icons/2.png" alt="#">
                                        </div>
                                        <h2>Motor</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 p-0 clicky feature2">
                                <a href="{{url("jual/Elektronik")}}">
                                    <div class="feature-inner">
                                        
                                        <div class="feature-icon">
                                            <img src="img/icons/1.png" alt="#">
                                        </div>
                                        <h2>Elektronik & Gadget</h2>
                                    </div>
                                    
                                </a>
                            </div>
                            <div class="col-md-4 p-0 clicky feature2 specialfeat">
                                <a href="{{url('jual')}}">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img src="img/icons/2.png" alt="#">
                                        </div>
                                        <h2>Hobi & Olahraga</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 p-0 clicky feature2">
                                <a href="{{url("jual")}}">
                                    <div class="feature-inner">
                                        
                                        <div class="feature-icon">
                                            <img src="img/icons/1.png" alt="#">
                                        </div>
                                        <h2>Rumah Tangga</h2>
                                    </div>
                                    
                                </a>
                            </div>
                            <div class="col-md-4 p-0 clicky feature2 specialfeat">
                                <a href="{{url('jual')}}">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img src="img/icons/2.png" alt="#">
                                        </div>
                                        <h2>Keperluan Pribadi</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 p-0 clicky feature2">
                                <a href="{{url("jual")}}">
                                    <div class="feature-inner">
                                        
                                        <div class="feature-icon">
                                            <img src="img/icons/1.png" alt="#">
                                        </div>
                                        <h2>Perlengkapan Bayi & Anak</h2>
                                    </div>
                                    
                                </a>
                            </div>
                            <div class="col-md-4 p-0 clicky feature2 specialfeat">
                                <a href="{{url('jual')}}">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img src="img/icons/2.png" alt="#">
                                        </div>
                                        <h2>Kantor & Industri</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 p-0 clicky feature2">
                                <a href="{{url("jual")}}">
                                    <div class="feature-inner">
                                        
                                        <div class="feature-icon">
                                            <img src="img/icons/1.png" alt="#">
                                        </div>
                                        <h2>Fast Secure Payments</h2>
                                    </div>
                                    
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </section>


            </div>
            
        </div>
    </div>
</section>




@include('template.footer')

<script>
    $(document).ready(function() {
        // $(".clicky").click(function(){
        //     $(this).addClass("specialfeat").siblings().removeClass("specialfeat");
        // });
    });
</script>

@endsection