<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Inscripciones</title>


    <link rel="stylesheet" href="{{asset('style/foundation/foundation.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/styleIncripciones.css')}}">
    <link rel="icon" type="image/png" href="img/favicon.png" />

    
</head>

<body>
    <header>
        <div class="logo-header">
        </div>
    </header>

    <section class="row container">

        <!--<div class="item instrucciones">-->
        <div class="item small-12 large-12 columns">

            <div class="contador">
                <div id='contador'>
                </div>
            </div>


            <figure>
                <img href="index.html" class="flogo" src="img/banner.jpg" alt="">
            </figure>
        </div>

    </section>

    <section class="row container">

        <div class="item instrucciones small-12 large-12 columns">

            <p class="text-center">Lamentablemente las inscripciones se han cerrado. Gracias por tu interés!!!</p>
            <p class="text-center">Sin embargo te invitamos a seguir el evento en vivo vía Facebook Live (Búscanos como: untrm.sedebagua)</p>
            <p class="text-center">Te recordamos que estés atento a nuestros futuros eventos a través de nuestra web institucional o nuestro facepage (untrmbagua).</strong></p>


            <p class="text-center"><strong>Inscripción Virtual</strong></p>
            <p>¡Gracias por tu interés en formar parte del II Congreso Internacional de Ingeniería de Sistemas - UNTRM 2020. Para que formes parte, sigue las siguientes indicaciones:</p>
            <ul>
                <li>Llenar los datos que se piden de forma correcta.</li>
                <li>Escribir un email activo y vigente, ya que se usará para remitir la confirmación de la inscripción.</li>

            </ul>
            <br>
            <p><b>Cierre de inscripciones: Lunes 14 de Diciembre - 11:59:00 PM</b></p>




            <p class="text-center">Y eso no es todo... próximamente:</p>
            <p class="text-center"><strong>II Congreso Internacional de Ingeniería de Sistemas - UNTRM</strong></p>

            <p class="text-center"><strong>Indicaciones Generales</strong></p>
            <ul>
                <li>Se dará tolerancia de 5 min. como máximo para ingresar a la sala de videoconferencia.</li>
                <li>Desactivar la cámara y el audio de entrada.</li>
                <li>El moderador establecerá las reglas de participación durante el evento.</li>
                <li>Para tener derecho al certificado de asistencia, se considerará la presencia en al menos el 75% del tiempo total del evento. Para lo cual registrarán su asistencia en el formulario respectivo que se habilitará en el transcurso del evento.</li>

            </ul>


            <p class="text-center"><strong>Información General para ponentes</strong></p>
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
            </ul>

        </div>



        <!--<div class="item">-->
        <!--style="display:none"-->
        <div class="item small-12 large-6 columns">

            <form id="formprincipal" name="frmprincipal" class="" action="guardarSesion.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <div class="encabezado">
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



                <div class="form_autor">
                    <div class="row">
                        <div class="small-12 large-12 columns">
                            <label for="">Apellidos:</label>
                            <input type="text" name="Apellidos[]" maxlength="200" value="" required>
                        </div>
                        <div class="small-12 large-12 columns">
                            <label for="">Nombres:</label>
                            <input type="text" name="Nombres[]" maxlength="200" value="" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 large-12 columns">

                            <label for="">E-mail:</label>
                            <input type="text" id="email" name="Email[]" maxlength="200" value="" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required>
                            <!-- onblur=ValidarEmail(this) -->
                        </div>
                        <div class="small-12 large-12 columns">
                            <label for="">Teléfono:</label>
                            <input type="text" name="Telefono[]" value="" placeholder="(Código del País, Teléfono)">
                        </div>

                    </div>

                    <div class="row">
                        <div class="small-12 large-12 columns">
                            <label for="">Documento de Identidad:</label>
                            <input type="text" name="Documento[]" value="" placeholder="" required>
                        </div>

                        <div class="small-12 large-12 columns">
                            <input type="radio" name="TipoDocumento[]" value="D" checked>
                            <label for="">DNI</label>
                            <input type="radio" name="TipoDocumento[]" value="C">
                            <label for="">Carnet Extranjería</label>
                        </div>

                    </div>
                    <div class="row">
                        <div class="column ">
                            <label for="">Institución de Procedencia</label>
                            <input type="text" name="Institucion[]" maxlength="200" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 large-12 columns">
                            <label for="">País:</label>

                            <select name="Pais[]" value="" placeholder="" required>
                                <option value="AF">Afganistán</option>
                                <option value="AL">Albania</option>
                                <option value="DE">Alemania</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antártida</option>
                                <option value="AG">Antigua y Barbuda</option>
                                <option value="AN">Antillas Holandesas</option>
                                <option value="SA">Arabia Saudí</option>
                                <option value="DZ">Argelia</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaiyán</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrein</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BE">Bélgica</option>
                                <option value="BZ">Belice</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermudas</option>
                                <option value="BY">Bielorrusia</option>
                                <option value="MM">Birmania</option>
                                <option value="BO">Bolivia</option>
                                <option value="BA">Bosnia y Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BR">Brasil</option>
                                <option value="BN">Brunei</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="BT">Bután</option>
                                <option value="CV">Cabo Verde</option>
                                <option value="KH">Camboya</option>
                                <option value="CM">Camerún</option>
                                <option value="CA">Canadá</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CY">Chipre</option>
                                <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comores</option>
                                <option value="CG">Congo</option>
                                <option value="CD">Congo, República Democrática del</option>
                                <option value="KR">Corea</option>
                                <option value="KP">Corea del Norte</option>
                                <option value="CI">Costa de Marfíl</option>
                                <option value="CR">Costa Rica</option>
                                <option value="HR">Croacia (Hrvatska)</option>
                                <option value="CU">Cuba</option>
                                <option value="DK">Dinamarca</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egipto</option>
                                <option value="SV">El Salvador</option>
                                <option value="AE">Emiratos Árabes Unidos</option>
                                <option value="ER">Eritrea</option>
                                <option value="SI">Eslovenia</option>
                                <option value="ES">España</option>
                                <option value="US">Estados Unidos</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Etiopía</option>
                                <option value="FJ">Fiji</option>
                                <option value="PH">Filipinas</option>
                                <option value="FI">Finlandia</option>
                                <option value="FR">Francia</option>
                                <option value="GA">Gabón</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GD">Granada</option>
                                <option value="GR">Grecia</option>
                                <option value="GL">Groenlandia</option>
                                <option value="GP">Guadalupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GY">Guayana</option>
                                <option value="GF">Guayana Francesa</option>
                                <option value="GN">Guinea</option>
                                <option value="GQ">Guinea Ecuatorial</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="HT">Haití</option>
                                <option value="HN">Honduras</option>
                                <option value="HU">Hungría</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IQ">Irak</option>
                                <option value="IR">Irán</option>
                                <option value="IE">Irlanda</option>
                                <option value="BV">Isla Bouvet</option>
                                <option value="CX">Isla de Christmas</option>
                                <option value="IS">Islandia</option>
                                <option value="KY">Islas Caimán</option>
                                <option value="CK">Islas Cook</option>
                                <option value="CC">Islas de Cocos o Keeling</option>
                                <option value="FO">Islas Faroe</option>
                                <option value="HM">Islas Heard y McDonald</option>
                                <option value="FK">Islas Malvinas</option>
                                <option value="MP">Islas Marianas del Norte</option>
                                <option value="MH">Islas Marshall</option>
                                <option value="UM">Islas menores de Estados Unidos</option>
                                <option value="PW">Islas Palau</option>
                                <option value="SB">Islas Salomón</option>
                                <option value="SJ">Islas Svalbard y Jan Mayen</option>
                                <option value="TK">Islas Tokelau</option>
                                <option value="TC">Islas Turks y Caicos</option>
                                <option value="VI">Islas Vírgenes (EEUU)</option>
                                <option value="VG">Islas Vírgenes (Reino Unido)</option>
                                <option value="WF">Islas Wallis y Futuna</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italia</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japón</option>
                                <option value="JO">Jordania</option>
                                <option value="KZ">Kazajistán</option>
                                <option value="KE">Kenia</option>
                                <option value="KG">Kirguizistán</option>
                                <option value="KI">Kiribati</option>
                                <option value="KW">Kuwait</option>
                                <option value="LA">Laos</option>
                                <option value="LS">Lesotho</option>
                                <option value="LV">Letonia</option>
                                <option value="LB">Líbano</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libia</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lituania</option>
                                <option value="LU">Luxemburgo</option>
                                <option value="MK">Macedonia, Ex-República Yugoslava de</option>
                                <option value="MG">Madagascar</option>
                                <option value="MY">Malasia</option>
                                <option value="MW">Malawi</option>
                                <option value="MV">Maldivas</option>
                                <option value="ML">Malí</option>
                                <option value="MT">Malta</option>
                                <option value="MA">Marruecos</option>
                                <option value="MQ">Martinica</option>
                                <option value="MU">Mauricio</option>
                                <option value="MR">Mauritania</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">México</option>
                                <option value="FM">Micronesia</option>
                                <option value="MD">Moldavia</option>
                                <option value="MC">Mónaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="MS">Montserrat</option>
                                <option value="MZ">Mozambique</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Níger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk</option>
                                <option value="NO">Noruega</option>
                                <option value="NC">Nueva Caledonia</option>
                                <option value="NZ">Nueva Zelanda</option>
                                <option value="OM">Omán</option>
                                <option value="NL">Países Bajos</option>
                                <option value="PA">Panamá</option>
                                <option value="PG">Papúa Nueva Guinea</option>
                                <option value="PK">Paquistán</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE" selected>Perú</option>
                                <option value="PN">Pitcairn</option>
                                <option value="PF">Polinesia Francesa</option>
                                <option value="PL">Polonia</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="UK">Reino Unido</option>
                                <option value="CF">República Centroafricana</option>
                                <option value="CZ">República Checa</option>
                                <option value="ZA">República de Sudáfrica</option>
                                <option value="DO">República Dominicana</option>
                                <option value="SK">República Eslovaca</option>
                                <option value="RE">Reunión</option>
                                <option value="RW">Ruanda</option>
                                <option value="RO">Rumania</option>
                                <option value="RU">Rusia</option>
                                <option value="EH">Sahara Occidental</option>
                                <option value="KN">Saint Kitts y Nevis</option>
                                <option value="WS">Samoa</option>
                                <option value="AS">Samoa Americana</option>
                                <option value="SM">San Marino</option>
                                <option value="VC">San Vicente y Granadinas</option>
                                <option value="SH">Santa Helena</option>
                                <option value="LC">Santa Lucía</option>
                                <option value="ST">Santo Tomé y Príncipe</option>
                                <option value="SN">Senegal</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leona</option>
                                <option value="SG">Singapur</option>
                                <option value="SY">Siria</option>
                                <option value="SO">Somalia</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="PM">St Pierre y Miquelon</option>
                                <option value="SZ">Suazilandia</option>
                                <option value="SD">Sudán</option>
                                <option value="SE">Suecia</option>
                                <option value="CH">Suiza</option>
                                <option value="SR">Surinam</option>
                                <option value="TH">Tailandia</option>
                                <option value="TW">Taiwán</option>
                                <option value="TZ">Tanzania</option>
                                <option value="TJ">Tayikistán</option>
                                <option value="TF">Territorios franceses del Sur</option>
                                <option value="TP">Timor Oriental</option>
                                <option value="TG">Togo</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad y Tobago</option>
                                <option value="TN">Túnez</option>
                                <option value="TM">Turkmenistán</option>
                                <option value="TR">Turquía</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UA">Ucrania</option>
                                <option value="UG">Uganda</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistán</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Vietnam</option>
                                <option value="YE">Yemen</option>
                                <option value="YU">Yugoslavia</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabue</option>
                            </select>

                        </div>




                        <div class="small-12 large-12 columns">
                            <label for="">Ciudad:</label>
                            <input type="text" name="Ciudad[]" maxlength="50" value="" placeholder="">
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


                <div class="form_proyecto">

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

                </div>



                <div class="text-center">
                    <input type="submit" name="registrar" id="registrar" value="Registrar Inscripción" class="button alert">
                    <img src="img/loaderIcon.gif" id="loaderIcon" style="display:none" />
                </div>

                <input type="hidden" id="token" name="token" />



            </form>
        </div>

    </section>


    <script src="{{asset('lib/js/jquery.js')}}"></script>
    <script src="{{asset('lib/js/foundation.min.js')}}"></script>
    <script>
        $(document).foundation();
    </script>
</body>

</html>