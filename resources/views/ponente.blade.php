@extends('layouts.app')

@section('content')
<!--==========================
    Header
  ============================-->
<header id="header" class="header-fixed">
  <div class="container">

    <div id="logo" class="pull-left">
      <!-- texto logo o imagen --> <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
      <h1><a href="{{route('welcome.index')}}">CIIS <span>Bagua</span></a></h1>
      <!--<a href="index.html#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a>-->
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">

        <li class="menu-active"><a href="{{route('welcome.index')}}">Inicio</a></li>
        <li><a href="{{route('welcome.index')}}#about">Info</a></li>
        <li><a href="{{route('welcome.index')}}#speakers">Ponentes</a></li>
        <li><a href="{{route('welcome.index')}}#schedule">Calendario</a></li>
        <li><a href="{{route('welcome.index')}}#gallery">Galería</a></li>
        <li><a href="{{route('welcome.index')}}#venue">Ubicación</a></li>

        <li class="buy-tickets"><a href="/inscripciones">Inscribirse</a></li>
        <!---li class="buy-tickets"><a href="/dashboard">Iniciar sesión</a></li---->

      </ul>
    </nav>

  </div>
</header><!-- #header -->

<main id="main" class="main-page">

  <!--==========================
      Detalles
    ============================-->
  <section id="speakers-details" class="wow fadeIn">
    <div class="container">
      <div class="section-header">
        <h2>Sobre el Ponente</h2>
        <p>Hoja de Vida</p>
      </div>

      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('storage/' . $ponente->img_path) }}" alt="{{ $ponente->nombres }}" class="img-fluid">
        </div>

        <div class="col-md-6">
          <div class="details">
            <h2>{{$ponente->gerundio. ' '.$ponente->nombres}}</h2>
            <!--<div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>-->
            <p>
              {!! $ponente->descripcion_larga !!}
            </p>
          </div>
        </div>

      </div>
    </div>

  </section>

</main>


<!--==========================
    Footer
  ============================-->
<footer id="footer">

  <!--<div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/logo.png" alt="II Congreso Internacional de Ingeniería de Sistemas">
            <p>Facultad de Ingeniería de Sistemas y Mecánica Eléctrica - FISME</p>
            <p>Universidad Nacional Toribio Rodríguez de Mendoza de Amazonas - UNTRM</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Enlaces:</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Inicio</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>-->

  <div class="container">
    <div class="copyright">
      &copy; UNTRM <strong>Facultad de Ingeniería de Sistemas y Mecánica Eléctrica</strong>. Bagua, Amazonas, Perú. {{date('Y')}}
    </div>
    <center>
      <div class="social-links mt-3">
        <!--<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>-->
        <a target="_blank" href="https://www.facebook.com/untrmbagua" class="facebook"><i class="fa fa-facebook"></i></a>
        <a target="_blank" href="https://www.youtube.com/user/UNTRM" class="youtube"><i class="fa fa-youtube"></i></a>
        <!--<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>-->
      </div>
    </center>
  </div>

</footer>
@endsection