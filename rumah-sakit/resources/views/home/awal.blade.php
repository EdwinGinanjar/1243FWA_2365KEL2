@extends('awal')
@section('container')
  <section class="slider" id="home">
        <div class="container-fluid">
            <div class="row">
                <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="header-backup"></div>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="doctor/img/slide-one.jpg" alt="">
                            <div class="carousel-caption">
                                <br>
                                <br>
                                <br>
                                <br>
                                
                                <h2>Selamat Datang di Website Rumah Sakit Kita</h2>
                                <p>Kami siap melayani anda kapanpun</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="doctor/img/1.jpg" alt="">
                            <div class="carousel-caption">
                                <h1>Menjamin kenyamanan</h1>
                                <p>Dengan Fasilitas yang kami sediakan</p>
                                
                            </div>
                        </div>
                        <div class="item">
                            <img src="doctor/img/2.jpg" alt="">
                            <div class="carousel-caption">
                                <h1>Menjadikan Kesehatan anda lebih berarti</h1>
                                <p>Kesehatan di awali dengan kebiasaan pola hidup sehat</p>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section><!-- end of slider section -->
   
   
@stop	
										