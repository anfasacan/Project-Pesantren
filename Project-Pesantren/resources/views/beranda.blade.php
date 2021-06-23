@extends('layout.master')

@section('title', 'Beranda Pondok Pesantren Al-Muttaqin')

@section('warnaaktif')
<ul class="nav navbar-nav navbar-right">
    <li class="active"><a href="/">Beranda</a></li>
    <li><a href="/berita">Berita</a></li>
    <li><a href="/agenda">Agenda Kegiatan</a></li>
    <li><a href="/guru">Guru</a></li>
    <li><a href="/gallery">Gallery Pesantren</a></li>
    <li><a href="/tentang">Tentang Pesantren</a></li>
</ul>
@endsection


@section('isi')

<br>
<section class="flexslider">
  <ul class="slides">
    <li style="background-image: url(img/poto/bg11.jpeg)">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="probootstrap-slider-text text-center">
            </div>
          </div>
        </div>
      </div>
    </li>
    <li style="background-image: url(img/poto/bg2.jpeg)" class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="probootstrap-slider-text text-center">
            </div>
          </div>
        </div>
      </div>
      
    </li>
    <li style="background-image: url(img/poto/bg3.jpeg)" class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="probootstrap-slider-text text-center">
            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>
</section>

<section class="probootstrap-section probootstrap-section-colored">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-left section-heading probootstrap-animate">
          <marquee><h2>Assalamu`alaikum Wr. Wb. Selamat Datang di Pondok Pesantren Yatim Piatu & Dhuafa AL MUTTAQIN!</h2></marquee>
      </div>
    </div>
  </div>
</section>

<section class="probootstrap-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="probootstrap-flex-block">
          <div class="probootstrap-text probootstrap-animate">
            <h3>Tentang Pondok Pesantren Al-Muttaqin</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis explicabo veniam labore ratione illo vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas error non rerum temporibus optio accusantium!</p>
          </div>
          <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider_3.jpg)">
            <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- pengaturan icon --}}
<section class="probootstrap-section" id="probootstrap-counter">
  <div class="container">
    
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
        <div class="probootstrap-counter-wrap">
          <div class="probootstrap-icon">
            <i class="icon-users2"></i>
          </div>
          <div class="probootstrap-text">
            <span class="probootstrap-counter">
              <span class="js-counter" data-from="0" data-to="500" data-speed="5000" data-refresh-interval="50">1</span>
            </span>
            <span class="probootstrap-counter-label">Peserta Didik</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
        <div class="probootstrap-counter-wrap">
          <div class="probootstrap-icon">
            <i class="icon-user-tie"></i>
          </div>
          <div class="probootstrap-text">
            <span class="probootstrap-counter">
              <span class="js-counter" data-from="0" data-to="30" data-speed="5000" data-refresh-interval="50">1</span>
            </span>
            <span class="probootstrap-counter-label">Pengajar</span>
          </div>
        </div>
      </div>
      <div class="clearfix visible-sm-block visible-xs-block"></div>
      <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
        <div class="probootstrap-counter-wrap">
          <div class="probootstrap-icon">
            <i class="icon-book"></i>
          </div>
          <div class="probootstrap-text">
            <span class="probootstrap-counter">
              <span class="js-counter" data-from="0" data-to="25" data-speed="5000" data-refresh-interval="50">1</span>
            </span>
            <span class="probootstrap-counter-label">Pelajaran</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
         
         <div class="probootstrap-counter-wrap">
          <div class="probootstrap-icon">
            <i class="icon-trophy"></i>
          </div>
          <div class="probootstrap-text">
            <span class="probootstrap-counter">
              <span class="js-counter" data-from="0" data-to="20" data-speed="5000" data-refresh-interval="50">1</span>
            </span>
            <span class="probootstrap-counter-label">Prestasi</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- end --}}

<section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-image: url(img/slider_2.jpg)">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center section-heading probootstrap-animate">
        <h2 class="mb0">Berita dan Informasi</h2>
      </div>
    </div>
  </div>
</section>

<section class="probootstrap-section probootstrap-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        
        <div class="tab-content">

          <div id="featured-news" class="tab-pane fade in active">
            <div class="row">
              <div class="col-md-12">
                <div class="owl-carousel" id="owl1">
                  <div class="item">
                    <a href="#" class="probootstrap-featured-news-box">
                      <figure class="probootstrap-media"><img src="img/img_sm_1.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                      <div class="probootstrap-text">
                        <h3>Tempora consectetur unde nisi</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, ut.</p>
                        <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                        
                      </div>
                    </a>
                  </div>
                  <!-- END item -->
                  <div class="item">
                    <a href="#" class="probootstrap-featured-news-box">
                      <figure class="probootstrap-media"><img src="img/img_sm_1.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                      <div class="probootstrap-text">
                        <h3>Tempora consectetur unde nisi</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, officia.</p>
                        <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                        
                      </div>
                    </a>
                  </div>
                  <!-- END item -->
                  <div class="item">
                    <a href="#" class="probootstrap-featured-news-box">
                      <figure class="probootstrap-media"><img src="img/img_sm_2.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                      <div class="probootstrap-text">
                        <h3>Tempora consectetur unde nisi</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, dolores.</p>
                        <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                        
                      </div>
                    </a>
                  </div>
                  <!-- END item -->
                </div>
              </div>
            </div>
            <!-- END row -->
            <div class="row">
              <div class="col-md-12 text-center">
                <p><a href="/berita" class="btn btn-primary">Lihat Semua Berita</a></p>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Guru guru --}}
<section class="probootstrap-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
        <h2>Bertemu Dengan Guru Berkualitas</h2>
        <p class="lead">Mengenal lebih dekat dengan Pengajar Pondok Pesantren Al-Muttaqqin</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-teacher text-center probootstrap-animate">
          <figure class="media">
            <img src="img/person_1.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
          </figure>
          <div class="text">
            <h3>Guru 1</h3>
            <p>Physical Education</p>
            <ul class="probootstrap-footer-social">
              <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
              <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
              <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
              <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-teacher text-center probootstrap-animate">
          <figure class="media">
            <img src="img/person_5.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
          </figure>
          <div class="text">
            <h3>Guru 2</h3>
            <p>English Teacher</p>
            <ul class="probootstrap-footer-social">
              <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
              <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
              <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
              <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="clearfix visible-sm-block visible-xs-block"></div>
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-teacher text-center probootstrap-animate">
          <figure class="media">
            <img src="img/person_6.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
          </figure>
          <div class="text">
            <h3>Guru 3</h3>
            <p>Math Teacher</p>
            <ul class="probootstrap-footer-social">
              <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
              <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
              <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
              <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-teacher text-center probootstrap-animate">
          <figure class="media">
            <img src="img/person_7.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
          </figure>
          <div class="text">
            <h3>Guru 4</h3>
            <p>Physics Teacher</p>
            <ul class="probootstrap-footer-social">
              <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
              <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
              <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
              <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
{{-- end --}}

{{-- alumni testimoni --}}
<section class="probootstrap-section probootstrap-bg probootstrap-section-colored probootstrap-testimonial" style="background-image: url(img/slider_4.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
        <h2>Visi dan Misi Pondok Pesantren Al-Muttaqin</h2>
        <p class="lead"></p>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12 probootstrap-animate">
        <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
          <div class="item">

            <div class="probootstrap-testimony-wrap text-center">
                  <h3>VISI</h3> &mdash;
              <blockquote class="quote">&ldquo;Terbentuknya generasi muslim yang siap mengabdi kepada masyarakat yang dibekali kekokohan aqidah, kedalaman spiritual, keluhuran akhlaq, keluasan Ilmu dan kematangan mental, serta menjadi penggerak kemajuan masyarakat.&rdquo;</blockquote>
            </div>

          </div>
          <div class="item">
            <div class="probootstrap-testimony-wrap text-center">
                <h3>MISI</h3> &mdash;
              <blockquote class="quote">&ldquo;Menumbuhkembangkan sikap, perilaku dan amaliah yang agamis di Pesantren Melaksanakan bimbingan dan pembelajaran secara aktif, kreatif, efektif dan menyenangkan, 
                sehingga setiap santri dapat berkembang secara optimal, sesuai dengan potensi yang dimiliki. Menumbuhkan semangat keunggulan secara intensif dan daya saing yang sehat kepada seluruh masyarakat baik dalam prestasi akademik maupun non akademik.
                Mendorong, membantu dan memfasilitasi santri dengan berbagai kegiatan ekstrakurikuler untuk mengembangkan kemampuan, minat, bakat dan kemandirian, sehingga dapat dikembangkan secara lebih optimal dan memiliki daya saing yang tinggi.
                Menciptakan lingkungan Pesantren yang sehat, bersih dan indah.
                Mengembangkan sikap kepekaan terhadap lingkungan.
                Mewujudkan Pesantren sebagai lembaga pendidikan yang mendapatkan kepercayaan dari masyarakat.&rdquo;</blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- end --}}

{{-- kenapa memilih --}}
<section class="probootstrap-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
        <h2>Kenapa Memilih Pondok Pesantren Al-Muttaqqin ?</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="service left-icon probootstrap-animate">
          <div class="icon"><i class="icon-checkmark"></i></div>
          <div class="text">
            <h3>Consectetur Adipisicing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
          </div>  
        </div>
        <div class="service left-icon probootstrap-animate">
          <div class="icon"><i class="icon-checkmark"></i></div>
          <div class="text">
            <h3>Aliquid Dolorum Saepe</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
          </div>
        </div>
        <div class="service left-icon probootstrap-animate">
          <div class="icon"><i class="icon-checkmark"></i></div>
          <div class="text">
            <h3>Eveniet Tempora Anisi</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="service left-icon probootstrap-animate">
          <div class="icon"><i class="icon-checkmark"></i></div>
          <div class="text">
            <h3>Laboriosam Quod Dignissimos</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
          </div>  
        </div>
        
        <div class="service left-icon probootstrap-animate">
          <div class="icon"><i class="icon-checkmark"></i></div>
          <div class="text">
            <h3>Asperiores Maxime Modi</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
          </div>
        </div>
        
        <div class="service left-icon probootstrap-animate">
          <div class="icon"><i class="icon-checkmark"></i></div>
          <div class="text">
            <h3>Libero Maxime Molestiae</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- end -->

@endsection
