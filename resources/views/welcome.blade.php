@extends('layouts.app')

@section('content')

@include('layouts.header')


<!--==========================
    Intro
  ============================-->
<section id="intro">

  <div class="intro-container wow fadeIn">
    <!--<a href="#about" class="about-btn scrollto">English</a>-->
    <h1 class="mb-4 pb-0">{{$congreso->numeracion}}<br><span>{{$congreso->nombre_1}} </span> <br>{{$congreso->nombre_2}}</h1>
    <p class="mb-4 pb-0">{{$congreso->tag_fecha}}, {{$congreso->tag_lugar}}</p>
    <a href="https://www.youtube.com/watch?v=5AVP6bJf4fE" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>

  </div>
</section>

<main id="main">

  <!--==========================
      Acerca
    ============================-->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2>"{{$congreso->tema}}"</h2>
          <p>{{$congreso->descripcion}}</p>
        </div>
        <div class="col-lg-3">
          <h3><i class="fa fa-map-marker"></i> Lugar:</h3>
          <p>Plataforma digital FISME (Youtube)<br>Transmisión en vivo</p>
          <div class="linksocial">
            <a href="https://www.youtube.com/user/UNTRM"><i class="fa fa-youtube"></i></a>
            <a href="https://www.facebook.com/untrmbagua"><i class="fa fa-facebook"></i></a>
          </div>

        </div>
        <div class="col-lg-3">
          <h3><i class="fa fa-calendar"></i> Horario:</h3>
          <p>{{$congreso->tag_fecha}}<br>{{$congreso->tag_horario}}</p>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
      Speakers Section
    ============================-->
  <section id="speakers" class="wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h2>Ponentes Invitados</h2>
        <p>Reconocidos profesionales con amplia experiencia en investigación tecnológica y tecnologías emergentes</p>
      </div>

      <div class="row">

        @foreach ($ponentes as $item)
        <div class="col-lg-4 col-md-6">
          <div class="speaker">
            <img src="{{asset('storage/'.$item->img_path)}}" alt="{{$item->nombres}}" class="img-fluid">
            <div class="details">
              <h3><a href="{{route('welcome.show-ponente',['ponente'=>$item])}}">{{$item->gerundio.' '.$item->nombres}}</a></h3>
              <p>{{$item->descripcion_breve}}</p>

            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>

  </section>

  <!--==========================
      Calendario
    ============================-->
  <section id="schedule" class="section-with-bg">
    <div class="container wow fadeInUp">
      <div class="section-header">
        <!--<h2>II Congreso Internacional<br>de Ingeniería de Sistemas<br>UNTRM - FISME 2020</h2>
          <center><h3>Programa Oficial</h3></center> -->

        <h2>Programa Oficial</h2>
        <p>Horarios de ponencias - UNTRM FISME</p>
      </div>

      <ul class="nav nav-tabs" role="tablist">
        @foreach ($programacion as $key => $item)
        <!--Recorrer encabezados--->
        <li class="nav-item">
          <a class="nav-link {{$key==0? 'active' : ''}}" href="#day-{{$key+1}}" role="tab" data-toggle="tab">
            {{$item->encabezado}}
          </a>
        </li>
        @endforeach
      </ul>

      <!--<h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius
          necessitatibus voluptatem quis labore perspiciatis quia.</h3>-->

      <div class="tab-content row justify-content-center">

        @foreach ($programacion as $key => $item )
        <!---Recorrer programación--->
        <div role="tabpanel" class="col-lg-9 tab-pane fade show {{$key==0? 'active' : ''}}" id="day-{{$key+1}}">

          @foreach ($item->actividades as $actividad)

          @if ($actividad->es_ponencia === false)
          <!---Si es una actividad ---->
          <div class="row schedule-item">
            <div class="col-md-2"><time>{{$actividad->hora_inicio}}</time><time>{{$actividad->hora_fin}}</time></div>
            <div class="col-md-10">
              <h4>{{$actividad->encabezado}}</h4>
              <p>{{$actividad->descripcion}}</p>
            </div>
          </div>
          @else
          <!-----Si es una ponencia---->
          <div class="row schedule-item">
            <div class="col-md-2"><time>{{$actividad->hora_inicio}}</time><time>{{$actividad->hora_fin}}</time></div>
            <div class="col-md-10">
              <div class="speaker">
                <img src="{{asset('storage/'.$actividad->img_bandera_path)}}" alt="Bandera de país">
              </div>
              <h4>Ponencia: <span>"{{$actividad->encabezado}}"</span></h4>
              <p>{{$actividad->ponente->gerundio. ' '.$actividad->ponente->nombres}}</p>
              <p>{{$actividad->ponente->centro_estudios}}</p>
            </div>
          </div>
          @endif

          @endforeach

        </div>
        @endforeach

      </div>

    </div>

  </section>


  <!--==========================
      Hospedajes 
    ============================-->
  <!--<section id="hotels" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Hotels</h2>
          <p>Her are some nearby hotels</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="img/hotels/1.jpg" alt="Hotel 1" class="img-fluid">
              </div>
              <h3><a href="#">Hotel 1</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>0.4 Mile from the Venue</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="img/hotels/2.jpg" alt="Hotel 2" class="img-fluid">
              </div>
              <h3><a href="#">Hotel 2</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
              </div>
              <p>0.5 Mile from the Venue</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="img/hotels/3.jpg" alt="Hotel 3" class="img-fluid">
              </div>
              <h3><a href="#">Hotel 3</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>0.6 Mile from the Venue</p>
            </div>
          </div>

        </div>
      </div>

    </section>-->

  <!--==========================
      Galeria 
    ============================-->
  <section id="gallery" class="wow fadeInUp">

    <div class="container">
      <div class="section-header">
        <h2>Galería de fotos</h2>
        <p>Imágenes del evento anterior</p>
      </div>
    </div>

    <div class="owl-carousel gallery-carousel">
      @foreach ($galeria as $item)
      <a href="{{asset('storage/'.$item->img_path)}}" class="venobox" data-gall="gallery-carousel">
        <img src="{{asset('storage/'.$item->img_path)}}" alt="{{$item->descripcion}}">
      </a>
      @endforeach
      <!--a href="img/galeria/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/galeria/1.jpg" alt=""></a>
      <a href="img/galeria/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/galeria/2.jpg" alt=""></a>
      <a href="img/galeria/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/galeria/3.jpg" alt=""></a>
      <a href="img/galeria/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/galeria/4.jpg" alt=""></a>
      <a href="img/galeria/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/galeria/5.jpg" alt=""></a>
      <a href="img/galeria/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/galeria/6.jpg" alt=""></a>
      <a href="img/galeria/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/galeria/7.jpg" alt=""></a>
      <a href="img/galeria/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/galeria/8.jpg" alt=""></a---->
    </div>

  </section>


  <!--==========================
      Preguntas
    ============================-->
  <!---section id="faq" class="wow fadeInUp">

    <div class="container">

      <div class="section-header">
        <h2>Preguntas e Información</h2>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-9">
          <ul id="faq-list">

            <li>
              <a data-toggle="collapse" class="collapsed" href="#faq1">¿Cuál es el costo para participar en el evento? <i class="fa fa-minus-circle"></i></a>
              <div id="faq1" class="collapse" data-parent="#faq-list">
                <p>
                  La inscripción es totalmente gratuita. Se desarrollará bajo modalidad virtual.
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#faq2" class="collapsed">¿Dónde se desarrollará el evento? <i class="fa fa-minus-circle"></i></a>
              <div id="faq2" class="collapse" data-parent="#faq-list">
                <p>
                  Se desarrollará en los canales virtuales que daremos a conocer oportunamente.
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#faq3" class="collapsed">¿Se entregarán certificados físicos o virtuales? <i class="fa fa-minus-circle"></i></a>
              <div id="faq3" class="collapse" data-parent="#faq-list">
                <p>
                  Los certificados serán virtuales, con un valor de 50 horas.
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#faq4" class="collapsed">¿Se entregarán materiales multimedia sobre el desarrollo del evento? <i class="fa fa-minus-circle"></i></a>
              <div id="faq4" class="collapse" data-parent="#faq-list">
                <p>
                  Sí. Una vez terminado el evento se enviará el material de las ponencias a sus respectivos correos (con los cuales se inscribieron).
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#faq5" class="collapsed">¿Qué tengo que hacer si deseo certificado físico? <i class="fa fa-minus-circle"></i></a>
              <div id="faq5" class="collapse" data-parent="#faq-list">
                <p>
                  xxxxxxxxxx
                </p>
              </div>
            </li>


          </ul>
        </div>
      </div>

    </div>

  </section---->


  <!--==========================
      Subscribete
    ============================-->
  <!--<section id="subscribe">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Newsletter</h2>
          <p>Rerum numquam illum recusandae quia mollitia consequatur.</p>
        </div>

        <form method="POST" action="#">
          <div class="form-row justify-content-center">
            <div class="col-auto">
              <input type="text" class="form-control" placeholder="Enter your Email">
            </div>
            <div class="col-auto">
              <button type="submit">Subscribe</button>
            </div>
          </div>
        </form>

      </div>
    </section>-->

  <!--==========================
      Buy Ticket Section
    ============================-->
  <!--<section id="buy-tickets" class="section-with-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Buy Tickets</h2>
          <p>Velit consequatur consequatur inventore iste fugit unde omnis eum aut.</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Standard Access</h5>
                <h6 class="card-price text-center">$150</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Community Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Pro Access</h5>
                <h6 class="card-price text-center">$250</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="pro-access">Buy Now</button>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Premium Access</h5>
                <h6 class="card-price text-center">$350</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Workshop Access</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="premium-access">Buy Now</button>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>

      
      <div id="buy-ticket-modal" class="modal fade">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Buy Tickets</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="#">
                <div class="form-group">
                  <input type="text" class="form-control" name="your-name" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="your-email" placeholder="Your Email">
                </div>
                <div class="form-group">
                  <select id="ticket-type" name="ticket-type" class="form-control" >
                    <option value="">-- Select Your Ticket Type --</option>
                    <option value="standard-access">Standard Access</option>
                    <option value="pro-access">Pro Access</option>
                    <option value="premium-access">Premium Access</option>
                  </select>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn">Buy Now</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </section>-->

  <!--==========================
      Contact Section
    ============================-->
  <!--<section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Contacto</h2>
          <p>Escríbenos si tienes alguna duda o inquietud.</p>
        </div>

        <div class="form">
          <div id="sendmessage">Su mensaje ha sido enviado. Gracias!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Su nombre" data-rule="minlen:10" data-msg="Por favor ingresar 10 caracteres como mínimo." />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Su correo electrónico" data-rule="email" data-msg="Por favor ingresar un email válido." />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:10" data-msg="Por favor ingresar 10 caracteres como mínimo." />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Debes escribir algo." placeholder="Escriba el mensaje"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Enviar mensaje</button></div>
          </form>
        </div>

      </div>
    </section>-->

</main>


<!--==========================
      Ubicacion Section
    ============================-->
<section id="venue" class="wow fadeInUp">

  <div class="container-fluid">

    <div class="section-header">
      <h2>¿Dónde estamos?</h2>
    </div>

    <div class="row no-gutters">
      <div class="col-lg-6 venue-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2015.9917407255273!2d-78.52411182932826!3d-5.6431931282665335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91b4534b224815e3%3A0xc2ba66f00257b86b!2sUniversidad%20Nacional%20Toribio%20Rodr%C3%ADguez%20de%20Mendoza%20de%20Amazonas!5e1!3m2!1ses!2spe!4v1569942129690!5m2!1ses!2spe" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-lg-6 venue-info">
        <div class="row justify-content-center">
          <div class="col-11 col-lg-8">
            <h3>Facultad de Ingeniería de Sistemas y Mecánica Eléctrica - FISME</h3>
            <h5><i class="fa fa-map-marker"></i>Jr. Libertad 1300- Bagua Capital - Amazonas - Perú</h5>
            <h5><i class="fa fa-phone"></i><a href="tel:+51041310116"> (+51)(041)310116 </a><i class="fa fa-phone"></i><a href="tel:+51962905120"> (+51)962905120 </a></h5>
            <h5><i class="fa fa-envelope"></i><a href="mailto:fisme@untrm.edu.pe"> fisme@untrm.edu.pe</a></h5>


            <p>6 años al servicio de la comunidad amazonense.</p>
            <p>Somos parte de la UNTRM. Facultad licenciada, próximamente con 3 nuevas carreras: Ingeniería Mecánica, Ingeniería Empresarial e Ingeniería Industrial</p>

          </div>
        </div>
      </div>
    </div>

  </div>


</section>



<!--==========================
      Patrocinadores
    ============================-->
<section id="sponsors" class="section-with-bg wow fadeInUp">

  <div class="container">
    <div class="section-header">
      <h2>Patrocinadores</h2>
    </div>

    <div class="row no-gutters sponsors-wrap clearfix">

      @foreach ($patrocinadores as $item)
      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="sponsor-logo">
          <img src="{{asset('storage/'.$item->img_path)}}" class="img-fluid" alt="{{$item->descripcion}}">
        </div>
      </div>
      @endforeach

    </div>

  </div>

</section>


@include('layouts.footer')

@endsection