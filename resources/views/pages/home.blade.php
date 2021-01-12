@extends('layouts.default')
@section('content')

<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active" style="background-image:url(images/slider/bg1.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</h1>
                                <h2 class="animation animated-item-2">Assalamualaikum warohmatullahi wabarakatu selamat
                                    datang di KUYAMAL</h2>
                            </div>
                        </div>
                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="images/slider/img1.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image:url(images/slider/bg2.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Kajian KUYAMAL</h1>
                                <h2 class="animation animated-item-2">“Siapa yang membangun masjid karena Allah, maka Allah akan membangun
                                    baginya semisal itu di surga.” (HR. Bukhari no. 450 dan Muslim no. 533)</h2>
                            </div>
                        </div>
                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="images/slider/img2.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image:url(images/slider/bg3.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Berlombalah Dalam Beramal Sholeh</h1>
                                <h2 class="animation animated-item-2">Berlomba- lomba dalam hal kebaikan ini telah tertulis dalam
                                    Al- Qur’an di surat Al- Baqarah yang artinya “Dan, setiap umat mempunyai kiblat yang dia menghadap
                                    kepadanya. Maka berlomba- lombalah kamu dalam kebaikan. Dimana saja kamu berada, pasti Allah akan
                                    mengumpulkan kamu semuanya. Sungguh, Allah Maha Kuasa atas segala sesuatu”. (Q.S. Al- Baqarah: 148)
                                </h2>
                            </div>
                        </div>
                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="images/slider/img3.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section>

{{-- <section id="partner">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Anggota</h2>
            <p class="lead">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم<br> Selamat datang di aplikasi SIKARAM yang mana
                membantu pengguna untuk melihat jadwal kajian , masjid dan mubaligh</p>
        </div>
        <div class="partners">
            <ul>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms"
                            data-wow-delay="300ms" src="images/partners/partner1.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms"
                            data-wow-delay="600ms" src="images/partners/partner2.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms"
                            data-wow-delay="900ms" src="images/partners/partner3.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms"
                            data-wow-delay="1200ms" src="images/partners/partner4.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms"
                            data-wow-delay="1500ms" src="images/partners/partner5.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms"
                            data-wow-delay="1800ms" src="images/partners/partner6.png"></a></li>
            </ul>
        </div>
    </div>
</section> --}}
<section id="conatcat-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/service/phone.png" width="60" height="60" alt="Phone">
                    </div>
                    <div class="media-body">
                        <h2>Apakah ada pertanyaan atau masukan untuk website ini ?</h2>
                        <p>بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم<br>Kontak kami di 0812 3456 7890</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
