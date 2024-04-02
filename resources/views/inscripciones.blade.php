@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{asset('style/foundation/foundation.min.css')}}">
<link rel="stylesheet" href="{{asset('style/styleIncripciones.css')}}">
@endsection

@section('content')
<header>
    <div class="logo-header">
    </div>
</header>

<!----section class="row container">

   
    <div class="item small-12 large-12 columns">

        <div class="contador">
            <div id='contador'>
            </div>
        </div>


        <figure>
            <img href="index.html" class="flogo" src="img/banner.jpg" alt="">
        </figure>
    </div>

</section---->

<section class="row container">

    <div class="item instrucciones small-12 large-12 columns">

        <p class="text-center"><strong>INSCRIPCIÓN VIRTUAL</strong></p>
        <p>¡Gracias por tu interés en formar parte del {{$congreso->numeracion.' '.$congreso->nombre_1.' '.$congreso->nombre_2}} - UNTRM {{date('Y')}}. Para que formes parte, sigue las siguientes indicaciones:</p>
        <ul>
            <li>Llenar los datos que se piden de forma correcta.</li>
            <li>Escribir un email activo y vigente, ya que se usará para remitir la confirmación de la inscripción.</li>
            <li>Se dará tolerancia de 5 min. como máximo para ingresar a la sala de videoconferencia.</li>
            <li>Desactivar la cámara y el audio de entrada.</li>
            <li>El moderador establecerá las reglas de participación durante el evento.</li>
            <li>Para tener derecho al certificado de asistencia, se considerará la presencia en al menos el 75% del tiempo total del evento. Para lo cual registrarán su asistencia en el formulario respectivo que se habilitará en el transcurso del evento.</li>

        </ul>
        <br>

        <!--p class="text-center"><strong>Información General para ponentes</strong></p>
        <ul>
            <li>El envío del artículo científico no garantiza su aceptación, en caso de haber sido observado y no haber subsanado las observaciones realizadas.</li>
            <li>El voucher de inscripción debe ser enviado en formato jpg o png (resolución máx. 1Mb), cuyo nombre de archivo deberá ser el número de documento de identidad. Deberá presentar el original del voucher al momento de registrar su ingreso al evento.</li>
            <li>El formato de archivos aceptado para los documentos es Microsoft Word.</li>
            <li>Los artículos científicos recibidos deberán ceñirse a lo establecido en las opciones de Consideraciones de Esquema y Formato.</li>
            <br>
            <div class=" text-center">
                <a href="#" data-open='ce' class="button">Consideraciones sobre el Esquema</a>
                <div class='reveal descripcionTema' id='ce' data-reveal>
                    <div class='text-center'><img src='img/estructura.png'></div>
                    <h1 class='text-center'>Esquema del Artículo Científico</h1>
                    <p>Título (en español y en inglés)</p>
                    <p>Apellidos y Nombres de los Autores.</p>
                    <p>Afiliación de los autores</p>
                    <p>Resumen (en español)</p>
                    <p>Abstract (en inglés)</p>
                    <p>Introducción</p>
                    <p>Material y método</p>
                    <p>Resultados</p>
                    <p>Discusión</p>
                    <p>Conclusiones</p>
                    <p>Referencias bibliográficas</p>
                    <button class='close-button' data-close aria-label='Close reveal' type='button'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div>

            <div class=" text-center">
                <a href="#" data-open='cf' class="button">Consideraciones sobre el Formato</a>
                <div class='reveal descripcionTema' id='cf' data-reveal>
                    <div class='text-center'><img src='img/formato.png'></div>
                    <h1 class='text-center'>Reglas sobre el formato:</h1>
                    <p>Tipo de letra: Times New Roman</p>
                    <p>Tamaño: 12pt</p>
                    <p>Espaciado: 1.5</p>
                    <p>Sangría francesa</p>
                    <p>Resumen: 250 palabras</p>
                    <p>Palabras clave: De 3 a 5</p>
                    <p>N° de páginas: Hasta 10</p>
                    <p>Márgenes: 3cm (izquierda), 3cm (derecha), 2.5cm (superior e inferior)</p>
                    <button class='close-button' data-close aria-label='Close reveal' type='button'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div>

            <li>Las propuestas serán revisadas y seleccionadas por nuestro Comité Evaluador.</li>
            <li>El tiempo de exposición será de 20 minutos.</li>
        </ul---->

    </div>



    <!--<div class="item">-->
    <!--style="display:none"-->
    <div class="item small-12 large-12 columns">

        <form class="" action="{{route('welcome.save-inscripciones')}}" method="POST">
            @csrf
            <fieldset>
                <div class="encabezado text-center">
                    Ingrese sus Datos:
                </div>
            </fieldset>

            <!--<div class="row ">
              <div class="small-12 large-4 columns">
                <input type="radio" name="Modalidad" value="Asistente" id="asistente" checked> Asistente
              </div>
              <div class="small-12 large-8 columns">
                <input type="radio" name="Modalidad" value="Ponente" id="ponente" > Ponente
              </div>
            </div>-->

            <div class="">
                <div class="row">
                    <div class=" col-md-6">
                        <label for="nombres">Nombres: <span class="text-danger">*</span></label>
                        <input type="text" id="nombres" name="nombres" maxlength="200" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="apellidos">Apellidos:<span class="text-danger">*</span></label>
                        <input type="text" id="apellidos" name="apellidos" maxlength="200" value="" required>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="email">Correo electrónico:<span class="text-danger">*</span></label>
                        <input type="email" id="email" name="email" maxlength="200" value="" required autocomplete="off">
                    </div>
                    <div class="col-md-6">
                        <label for="telefono">Teléfono:<span class="text-danger">*</span></label>
                        <input type="text" id="telefono" name="telefono" value="" placeholder="(Código del País, Teléfono)" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="tipo_documento">Tipo de documento:<span class="text-danger">*</span></label>
                        <select name="tipo_documento" id="tipo_documento" required>
                            <option value="" selected disabled>Seleccione:</option>
                            <option value="dni">DNI</option>
                            <option value="carnet extranjeria">Carnet extranjería</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="numero_documento">Número de documento:<span class="text-danger">*</span></label>
                        <input type="text" id="numero_documento" name="numero_documento" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="institucion">Institución de Procedencia:<span class="text-danger">*</span></label>
                        <input type="text" id="institucion" name="institucion" maxlength="200" value="" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="pais">País:<span class="text-danger">*</span></label>
                        <input type="text" name="pais" id="pais" required>
                    </div>

                    <div class="col-md-6">
                        <label for="ciudad">Ciudad:<span class="text-danger">*</span></label>
                        <input type="text" id="ciudad" name="ciudad" maxlength="50" required>
                    </div>
                </div>

                <!--<div class="row column">
                <label for="">Voucher de pago: </label>
                <input type="file" name="Voucher[]" value="" required accept="image/png, .jpeg, .jpg">
              </div>-->

            </div>


            <!--<div class="ocultar" id="btnAgregar">
              <div class="row column text-center" id="">
                <button type="button" name="Autor" class="button alert addButton " id="autor"><i class="fi-plus"></i> Añadir otro participante</button>
              </div>
            </div>
            <div class="nuevo">
            </div>-->


            <!---div class="form_proyecto">

                <div class=" encabezado">
                    Datos del Proyecto:
                </div>

                <div class="row">
                    <div class="small-12 large-12 columns">
                        <div class=" text-center">
                            <a href="#" data-open='ce' class="button">Consideraciones sobre el Esquema</a>
                            <div class='reveal descripcionTema' id='ce' data-reveal>
                                <div class='text-center'><img src='img/estructura.png'></div>
                                <h1 class='text-center'>Esquema del Artículo Científico</h1>
                                <p>Título (en español y en inglés)</p>
                                <p>Apellidos y Nombres de los Autores.</p>
                                <p>Afiliación de los autores</p>
                                <p>Resumen (en español)</p>
                                <p>Abstract (en inglés)</p>
                                <p>Introducción</p>
                                <p>Material y método</p>
                                <p>Resultados</p>
                                <p>Discusión</p>
                                <p>Conclusiones</p>
                                <p>Referencias bibliográficas</p>
                                <button class='close-button' data-close aria-label='Close reveal' type='button'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="small-12 large-12 columns">
                        <div class=" text-center">
                            <a href="#" data-open='cf' class="button">Consideraciones sobre el Formato</a>
                            <div class='reveal descripcionTema' id='cf' data-reveal>
                                <div class='text-center'><img src='img/formato.png'></div>
                                <h1 class='text-center'>Reglas sobre el formato:</h1>
                                <p>Tipo de letra: Times New Roman</p>
                                <p>Tamaño: 12pt</p>
                                <p>Espaciado: 1.5</p>
                                <p>Sangría francesa</p>
                                <p>Resumen: 250 palabras</p>
                                <p>Palabras clave: De 3 a 5</p>
                                <p>N° de páginas: Hasta 10</p>
                                <p>Márgenes: 3cm (izquierda), 3cm (derecha), 2.5cm (superior e inferior)</p>
                                <button class='close-button' data-close aria-label='Close reveal' type='button'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row column">
                    <label for="">Agregar Artículo Científico completo (formato Word):</label>
                    <input type="file" name="Archivo" id="Archivo" value="" accept=".docx, .doc">
                </div>


                <div class="row column">
                    <label for="">Título (en español):</label>
                    <input type="text" name="Titulo" id="Titulo" value="">
                </div>
                <div class="row column">
                    <label for="">Resumen (250 palabras máximo):</label>
                    <textarea name="Resumen" id="Resumen" rows="3" cols="83" placeholder=""></textarea>
                </div>
                <div class="row column">
                    <label for="">Palabras Clave:</label>
                    <textarea name="Palabras" id="Palabras" rows="1" cols="80" placeholder="Keywords del proyecto."></textarea>
                </div>
                <div class="row column">
                    <label for="">Título (en inglés):</label>
                    <input type="text" name="Title" id="Title" value="">
                </div>
                <div class="row column">
                    <label for="">Abstract:</label>
                    <textarea name="Abstract" id="Abstract" rows="3" cols="83" placeholder=""></textarea>
                </div>
                <div class="row column">
                    <label for="">Keywords:</label>
                    <textarea name="Keywords" id="Keywords" rows="1" cols="80" placeholder="Keywords of the project."></textarea>
                </div>

                <div class="row column">
                    <label for="">Afiliación Profesional:</label>
                    <input type="text" name="Afiliacion" id="Afiliacion" value="" maxlength="100">
                </div>

            </div---->

            <div class="text-center mt-3 mb-5">
                <input type="submit" value="Registrar Inscripción" class="btn btn-primary">
                <!--img src="img/loaderIcon.gif" id="loaderIcon" style="display:none" /---->
            </div>

        </form>
    </div>

</section>
@endsection


@push('scripts')
<script src="{{asset('lib/js/jquery.js')}}"></script>
<script src="{{asset('lib/js/foundation.min.js')}}"></script>
<script>
    $(document).foundation();
</script>

@endpush