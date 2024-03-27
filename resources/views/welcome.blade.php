<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="congreso, ingenieria, sistemas, fisme, untrm, ti, tecnologia" name="keywords">
    <meta content="Congresos Internacionales de Ingeniería de Sistemas, organizado por la Facultad de 
    Ingeniería de Sistemas y Mecánica Eléctrica - Universidad Nacional Toribio Rodríguez de Mendoza de
    Amazonas - Perú." name="description">

    <link href="img/favicon.png" rel="icon">

    <title>II Congreso Internacional de Ingeniería de Sistemas - UNTRM FISME 2020</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!--BootStrap--->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!---Icons--->
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!----Others--->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <link href="{{asset('style/styles.css')}}" rel="stylesheet">

</head>

<body>

    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <!-- logo de texto o imagen -->
                <h1><a href="#intro">CIIS <span>Bagua</span></a></h1>
                <!--<a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a>-->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">

                    <li class="menu-active"><a href="#intro">Inicio</a></li>
                    <li><a href="#about">Info</a></li>
                    <li><a href="#speakers">Ponentes</a></li>
                    <li><a href="#schedule">Programa</a></li>
                    <li><a href="#gallery">Galería</a></li>
                    <li><a href="#venue">Ubicación</a></li>
                    <!--<li><a href="#hotels">Hotels</a></li>-->

                    <!--<li><a href="#sponsors">Sponsors</a></li>-->
                    <!--<li><a href="#contact">Contacto</a></li>-->
                    <li class="buy-tickets"><a href="/inscripciones">Inscribirse</a></li>
                    <li class="buy-tickets"><a href="/dashboard">Iniciar sesión</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    <!--==========================
    Intro
  ============================-->

    <section id="intro">

        <div class="intro-container wow fadeIn">
            <!--<a href="#about" class="about-btn scrollto">English</a>-->
            <h1 class="mb-4 pb-0">II<br><span>Congreso Internacional de </span> <br>Ingeniería de Sistemas</h1>
            <p class="mb-4 pb-0">15, 16 y 17 de Diciembre, Bagua - Amazonas - Perú</p>
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
                        <h2>"Tecnologías Emergentes para el Desarrollo Sostenible"</h2>
                        <p>En tiempos difíciles, los desafíos deben ser transfomados en retos y los retos en soluciones.
                            Las Tecnologías de la Información, nuestra mejor herramienta.</p>
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
                        <p>15, 16 y 17 de Diciembre<br>8:00 am - 1:40 pm</p>
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
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker">
                            <img src="img/ponentes/caeg.jpg" alt="Ponente" class="img-fluid">
                            <div class="details">
                                <h3><a href="/ponente">Ing. Christopher Alan Estrada Gonzalez</a></h3>
                                <p>Profesional con habilidades en proyectos de
                                    emprendimiento, mentoreo de startups, desarrollo de software y
                                    algoritmos de machine learning e inteligencia artificial.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker">
                            <img src="img/ponentes/jdgg.jpg" alt="Ponente" class="img-fluid">
                            <div class="details">
                                <h3><a href="/ponente">José David Garnica García</a></h3>
                                <p>Especialista en generación de soluciones innovadoras y de valor, buscando la participación activa de los usuario finales y el uso instensivo de Tecnologías de Información.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker">
                            <img src="img/ponentes/glam.jpg" alt="Ponente" class="img-fluid">
                            <div class="details">
                                <h3><a href="/ponente">Gloria de Lourdes Arcos Medina</a></h3>
                                <p>Especialista en E-learning. Con amplia experiencia en tópicos tecnológicos como calidad del software, ingeniería del software y metodologías de desarrollo aplicadas a la educación.</p>
                            </div>
                        </div>
                    </div>




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
                    <p>Horarios de ponencias - II CIIS 2020 - UNTRM FISME</p>
                </div>

                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Martes 15</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Miércoles 16</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">Jueves 17</a>
                    </li>
                </ul>

                <!--<h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius
          necessitatibus voluptatem quis labore perspiciatis quia.</h3>-->

                <div class="tab-content row justify-content-center">

                    <!-- Schdule Day 1 -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>08:00 AM</time><time>08:10 AM</time></div>
                            <div class="col-md-10">
                                <h4>Palabras de Bienvenida</h4>
                                <p>A cargo del Rector de la UNTRM, Dr. Policarpio Chauca Valqui</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>08:15 AM</time><time>08:30 AM</time></div>
                            <div class="col-md-10">
                                <h4>Apertura del II Congreso Internacional de Ingeniería de Sistemas - UNTRM 2020</h4>
                                <p>A cargo del Vicerrector Académico de la UNTRM, Dr. Miguel Angel Barrena Gurbillón.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>09:00 AM</time><time>09:50 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/ponentes/mexico.png" alt="México">
                                </div>
                                <h4>Ponencia: <span>"Tendencias de la inteligencia artificial para la innovacion y emprendimiento."</span></h4>
                                <p>Ing. Christopher Alan Estrada Gonzalez</p>
                                <p>Universidad Tecnológica de Nayarit</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>10:00 AM</time><time>10:50 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/ponentes/mexico.png" alt="México">
                                </div>
                                <h4>Ponencia: <span>"Generación de soluciones tecnológicas enfocadas en UX, Metodologías Ágiles y Services BluePrints."</span></h4>
                                <p>Ing. José David Garnica García</p>
                                <p>Instituto Tecnológico de León</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>11:00 AM</time><time>11:50 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/ponentes/ecuador.png" alt="Ecuador">
                                </div>
                                <h4>Ponencia: <span>"Influencia de las Prácticas Ágiles en la Calidad del Producto de Software."</span></h4>
                                <p>Mg. Gloria de Lourdes Arcos Medina</p>
                                <p>Escuela Superior Politécnica de Chimborazo</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>12:00 AM</time><time>12:50 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/ponentes/peru.png" alt="Perú">
                                </div>
                                <h4>Ponencia: <span>"Impacto de CMMI y el Enfoque Ágil en Fábricas de Software."</span></h4>
                                <p>Mg. Sandra Wong Durand</p>
                                <p>Universidad Peruana de Ciencias Aplicadas</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>12:50 PM</time><time>1:40 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/ponentes/canada.png" alt="Canadá">
                                </div>
                                <!--Software Iceberg: Técnica de estimación de tamaño temprano con puntos de función COSMIC-->
                                <h4>Ponencia: <span>"Software Iceberg Early Sizing Estimation technique with COSMIC Function Points"</span></h4>
                                <p>Dr. Alain Abran</p>
                                <p>École de technologie supérieure Montreal</p>
                            </div>
                        </div>


                    </div>
                    <!-- Fin dia 1 -->

                    <!-- Calendario Dia 2 -->
                    <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>08:00 AM</time><time>08:50 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/ponentes/peru.png" alt="Perú">
                                </div>
                                <h4>Ponencia: <span>"Robotic process automation (RPA): Un cambio de perspectiva."</span></h4>
                                <p>Dr. Edward Haro Maldonado</p>
                                <p>Universidad Nacional Pedro Ruiz Gallo</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>09:00 AM</time><time>09:50 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/ponentes/argentina.png" alt="Argentina">
                                </div>
                                <h4>Ponencia: <span>"Enfoques ágiles SCRUM"</span></h4>
                                <p>Lic. Cecilia Boggi</p>
                                <p>Universidad de Buenos Aires</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>10:00 AM</time><time>10:50 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/ponentes/chile.png" alt="Chile">
                                </div>
                                <h4>Ponencia: <span>"Internet de las cosas en agricultura y análisis de datos para tomar mejores decisiones en agricultura de precisión."</span></h4>
                                <p>Dr. Pedro Enrique Alberti Villalobos</p>
                                <p>Unversidad de Magallanes</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>11:00 AM</time><time>11:50 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/ponentes/mexico.png" alt="Perú">
                                </div>
                                <h4>Ponencia: <span>"Innovación centrada en la Formación de Ingenieros del Siglo XXI."</span></h4>
                                <p>Dr. Rodolfo Rosales Herrera</p>
                                <p>Universidad Tecnológica de Nayarit</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>12:00 AM</time><time>12:50 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/ponentes/mexico.png" alt="Mexico">
                                </div>
                                <h4>Ponencia: <span>"Ingeniería de Software: La Relación entre la Teoría y la Práctica."</span></h4>
                                <p>Dr. José Reyes Juárez Ramírez</p>
                                <p>Universidad Autónoma de Baja California - Tijuana</p>
                            </div>
                        </div>


                    </div>
                    <!-- Fin Day 2 -->

                    <!-- Calendario dia 3 -->
                    <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>08:00 AM</time><time>08:50 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/ponentes/peru.png" alt="Perú">
                                </div>
                                <h4>Ponencia: <span>"Los desafíos del Cloud Computing en tiempos modernos."</span></h4>
                                <p>Dr. Ítalo Maldonado Ramírez</p>
                                <p>Universidad Nacional Toribio Rodríguez de Mendoza.</p>
                            </div>
                        </div>


                        <div class="row schedule-item">
                            <div class="col-md-2"><time>09:00 AM</time><time>09:50 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/ponentes/inglaterra.png" alt="Inglaterra">
                                </div>
                                <!--Enfoques del diseño indígena y aceptación de las tecnologías basadas en el lenguaje por parte de los usuarios-->
                                <h4>Ponencia: <span>"Approaches to indigenous design and user acceptance of language based technologies"</span></h4>
                                <p>Dr. Raj Ramachandran</p>
                                <p>University of West of England</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>10:00 AM</time><time>10:50 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/ponentes/mexico.png" alt="Mexico">
                                </div>
                                <h4>Ponencia: <span>"Un Financiamiento Para Tu Negocio."</span></h4>
                                <p>Federico Arellano</p>
                                <p>Instituto Tecnológico Autónomo de México</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>11:00 AM</time><time>11:50 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/ponentes/india.png" alt="India">
                                </div>
                                <!--¿Qué tipo de alumno eres?-->
                                <h4>Ponencia: <span>"What kind of learner are you?"</span></h4>
                                <p>Ing. MBA Gurpreet Singh</p>
                                <p>Saurer Textile Solutions PVT LTD.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>12:00 AM</time><time>12:50 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/ponentes/colombia.png" alt="Colombia">
                                </div>
                                <h4>Ponencia: <span>"La Cuarta Revolución Industrial."</span></h4>
                                <p>Mg. Frey de Jesús Castro Ramírez</p>
                                <p>Corporación Universitaria Americana</p>
                            </div>
                        </div>


                        <div class="row schedule-item">
                            <div class="col-md-2"><time>12:50 PM</time><time>1:40 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/ponentes/peru.png" alt="Perú">
                                </div>
                                <h4>Ponencia: <span>"Biotecnología: Descifrando un sistema integrado de comunicación, producción e información."</span></h4>
                                <p>Ph. D. Carlos Sialer Guerrero</p>
                                <p>Universidad de Oviedo - España</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>1:40 PM</time><time>1:50 PM</time></div>
                            <div class="col-md-10">
                                <h4>Clausura</h4>
                                <p>A cargo de la Vicerrectora de Investigación de la UNTRM, Dra. Flor Teresa García Huamán.</p>
                            </div>
                        </div>


                    </div>
                    <!-- End Schdule Day 2 -->

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
                <a href="img/galeria/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/galeria/1.jpg" alt=""></a>
                <a href="img/galeria/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/galeria/2.jpg" alt=""></a>
                <a href="img/galeria/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/galeria/3.jpg" alt=""></a>
                <a href="img/galeria/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/galeria/4.jpg" alt=""></a>
                <a href="img/galeria/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/galeria/5.jpg" alt=""></a>
                <a href="img/galeria/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/galeria/6.jpg" alt=""></a>
                <a href="img/galeria/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/galeria/7.jpg" alt=""></a>
                <a href="img/galeria/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/galeria/8.jpg" alt=""></a>
            </div>

        </section>


        <!--==========================
      Preguntas
    ============================-->
        <section id="faq" class="wow fadeInUp">

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

        </section>


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

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="sponsor-logo">
                        <img src="img/sponsors/1.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="sponsor-logo">
                        <img src="img/sponsors/1.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="sponsor-logo">
                        <img src="img/sponsors/1.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="sponsor-logo">
                        <img src="img/sponsors/1.png" class="img-fluid" alt="">
                    </div>
                </div>


            </div>

        </div>

    </section>





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
            <div>
                <img src="img/fisme.jpg" class="img-fluid" alt="">
            </div>
            <div class="copyright">
                &copy; UNTRM <strong>Facultad de Ingeniería de Sistemas y Mecánica Eléctrica</strong>. Bagua, Amazonas, Perú. 2020
            </div>
            <center>
                <div class="social-links">
                    <!--<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>-->
                    <a href="https://www.facebook.com/untrmbagua" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.youtube.com/user/UNTRM" class="youtube"><i class="fa fa-youtube"></i></a>
                    <!--<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>-->
                </div>
            </center>
        </div>


    </footer>

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
    <script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Contact Form JavaScript File -->
    <!---script src="contactform/contactform.js"></script----->

    <!-- Template Main Javascript File -->
    <script src="{{asset('lib/js/main.js')}}"></script>
</body>

</html>