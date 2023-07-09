<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Titulo de pagina -->
    <title>INCO ACADEMY | Inscribete a nuestras formaciones</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" class="rel">
     
</head>

<body>
    <div class="container-form">
        <div class="container-progress-bar">

            <div class="progress-bar">
                <div class="step">
                    <p>Datos personales</p>

                    <div class="bullet">
                        <span>1</span>
                    </div>

                    <div class="check fas fa-check">
                    </div>
                </div>
            </div>

            <div class="progress-bar">
                <div class="step">
                    <p>Datos personales</p>

                    <div class="bullet">
                        <span>2</span>
                    </div>

                    <div class="check fas fa-check">                        
                    </div>
                </div>
            </div>    

            <div class="progress-bar">
                <div class="step">
                    <p>Datos profesionales</p>

                    <div class="bullet">
                        <span>3</span>
                    </div>

                    <div class="check fas fa-check">                       
                    </div>
                </div>
            </div>

            <div class="progress-bar">
                <div class="step">
                    <p>Datos profesionales</p>

                    <div class="bullet">
                        <span>4</span>
                    </div>

                    <div class="check fas fa-check">
                    </div>
                </div>
            </div>

            <div class="progress-bar">
                <div class="step">
                    <p>Datos adicionales</p>

                    <div class="bullet">
                        <span>5</span>
                    </div>
                    <div class="check fas fa-check">
                    </div>
                </div>
            </div>

        </div>

        <div class="form-outer">
            <form action="{{ route('guardar_registro') }}" method="POST">
                <!--para verificar si pasan todos los registros a la base de datos--> 
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @csrf 
                <!-- pagina 1 -->
                <div class="page slide-page">

                    <div class="title-page">
                        <p>1/5</p>
                        <h2>Datos personales</h2>
                    </div>

                    <div class="form-content">

                        <div class="page-step-title">
                            <p>Rellena todos los campos</p>
                        </div>

                        <!--campo 1-->
                        <div class="field">
                            
                            <div class="label_input">
                                <label for="nombres">Nombres</label>
                                <input class="input-box" type="text" id= "nombres" name="nombres" placeholder="Escribe tu nombre" value="">
                            </div>
                        </div>

                        <!--campo 2-->              
                        <div class="field">
                            
                            <div class="label_input">
                                <label for="apellidos">Apellidos</label>
                                <input class="input-box" type="text" placeholder="Escribe tu nombre" required id= "apellidos" name="apellidos" value="">
                            </div>
                        </div>

                        <div class="label_field_part">
                            <!--campo 3-->
                            <div class="field">
                                <div class="label_input">
                                    <label for="email">Email</label>
                                    <input  class="input-box" type="email" placeholder="email@example.com" id= "email" name="email" value="">
                                </div> 
                            </div>

                            <!--campo 4-->
                            <div class="field">
                                <div class="label_input">
                                    <label for="dni_nie_pasaporte">DNI/NIE/Pasaporte</label>
                                    <input class="input-box" type="text" placeholder="12345678X" required id= "dni_nie_pasaporte" name="dni_nie_pasaporte" value="">
                                </div>
                            </div>
                        </div>

                        <div class="label_field_part">
                            <!--campo 5-->
                            <div class="field">
                                <div class="label_input">
                                    <label for="telefono">Teléfono </label>
                                    <input class="input-box" type="text" placeholder="+34 666 66 66 66" id= "telefono" name="telefono" value="">
                                </div> 
                            </div>

                            <!--campo 6-->
                            <div class="field">
                                <div class="label_input">
                                    <label for="residente">¿resides en España?
                                        <div class="radio-control">
                                            <div class="radio-control-option">
                                                <input type="radio" name="residente" id="si" value="si" checked>Si  
                                            </div>

                                            <div class="radio-control-option">
                                                <input type="radio" name="residente" id="no" value="no">No  
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="field btns">
                            <button class="prev-1 prev">Anterior</button>
                            <button class="next-1 next">Siguiente</button>
                        </div>
                    </div>
                </div>

                <!-- pagina 2 -->
                <div class="page">

                    <div class="title-page">
                        <p>2/5</p>
                        <h2>Datos personales</h2>
                    </div>

                    <div class="form-content">

                        <div class="page-step-title">
                            <p>Rellena todos los campos</p>
                        </div>

                        <!--campo 7-->
                        <div class="field">
                            <div class="label_input">
                                <label for="ciudad_residencia">Ciudad de Residencia</label>
                                <!--lista desplegable de provincias de españa -->
                                <select name="ciudad_residencia" id="ciudad_residencia">
                                    <option value="" disabled selected>Selecciona una ciudad</option>               
                                    <option value="Álava/Araba">Álava/Araba</option>
                                    <option value="Albacete">Albacete</option>
                                    <option value="Alicante">Alicante</option>
                                    <option value="Almería">Almería</option>
                                    <option value="Asturias">Asturias</option>
                                    <option value="Ávila">Ávila</option>
                                    <option value="Badajoz">Badajoz</option>
                                    <option value="Baleares">Baleares</option>
                                    <option value="Barcelona">Barcelona</option>
                                    <option value="Burgos">Burgos</option>
                                    <option value="Cáceres">Cáceres</option>
                                    <option value="Cádiz">Cádiz</option>
                                    <option value="Cantabria">Cantabria</option>
                                    <option value="Castellón">Castellón</option>
                                    <option value="Ceuta">Ceuta</option>
                                    <option value="Ciudad Real">Ciudad Real</option>
                                    <option value="Córdoba">Córdoba</option>
                                    <option value="Cuenca">Cuenca</option>
                                    <option value="Gerona/Girona">Gerona/Girona</option>
                                    <option value="Granada">Granada</option>
                                    <option value="Guadalajara">Guadalajara</option>
                                    <option value="Guipúzcoa/Gipuzkoa">Guipúzcoa/Gipuzkoa</option>
                                    <option value="Huelva">Huelva</option>
                                    <option value="Huesca">Huesca</option>
                                    <option value="Jaén">Jaén</option>
                                    <option value="La Coruña/A Coruña">La Coruña/A Coruña</option>
                                    <option value="La Rioja">La Rioja</option>
                                    <option value="Las Palmas">Las Palmas</option>
                                    <option value="León">León</option>
                                    <option value="Lérida/Lleida">Lérida/Lleida</option>
                                    <option value="Lugo">Lugo</option>
                                    <option value="Madrid">Madrid</option>
                                    <option value="Málaga">Málaga</option>
                                    <option value="Melilla">Melilla</option>
                                    <option value="Murcia">Murcia</option>
                                    <option value="Navarra">Navarra</option>
                                    <option value="Orense/Ourense">Orense/Ourense</option>
                                    <option value="Palencia">Palencia</option>
                                    <option value="Pontevedra">Pontevedra</option>
                                    <option value="Salamanca">Salamanca</option>
                                    <option value="Segovia">Segovia</option>
                                    <option value="Sevilla">Sevilla</option>
                                    <option value="Soria">Soria</option>
                                    <option value="Tarragona">Tarragona</option>
                                    <option value="Tenerife">Tenerife</option>
                                    <option value="Teruel">Teruel</option>
                                    <option value="Toledo">Toledo</option>
                                    <option value="Valencia">Valencia</option>
                                    <option value="Valladolid">Valladolid</option>
                                    <option value="Vizcaya/Bizkaia">Vizcaya/Bizkaia</option>
                                    <option value="Zamora">Zamora</option>
                                    <option value="Zaragoza">Zaragoza</option>
                                </select>            
                            </div>
                        </div>

                        <!--campo 8-->
                        <div class="field">
                            <div class="label_input">
                                <label for="pais_nacimiento">País de nacimiento</label>
                                <!--lista de paises --> 
                                <select class="form-control" name="pais_nacimiento" id="pais_nacimiento">                
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
                                    <option value="ES" selected>España</option>
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
                                    <option value="PE">Perú</option>
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
                        </div>

                        <!--campo 9-->
                        <div class="field">
                            <div class="label_input">
                                <label for="rango_edad">¿cuál es tu edad?</label>
                                    <div class="radio-control">
                                        <div class="radio-control-option">
                                            <input type="radio" name="rango_edad" id="15-25" value="15-25" checked>15-25 
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="rango_edad" id="26-35" value="26-35">26-35
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="rango_edad" id="36-45" value="36-45">36-45
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="rango_edad" id="46-a-mas" value="46-a-mas">46 a más
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <!--campo 10-->
                        <div class="field">
                            <div class="label_input">
                                <label for="genero">¿con qué género te identificas?
                                    <div class="radio-control">
                                        <div class="radio-control-option">      
                                            <input type="radio" name="genero" id="mujer" value="mujer">Mujer
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="genero" id="hombre" value="hombre">Hombre
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" id="nb" name="genero" value="nb">No binario
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" id="otra" name="genero" value="otra">Otra
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" id="no-responde" name="genero" value="no-responde">Prefiero no responder
                                        </div>
                                    </div>
                                </label>            
                            </div>
                        </div>

                        <div class="field btns">
                            <button class="prev-2 prev">Anterior</button>
                            <button class="next-2 next">Siguiente</button>
                        </div>

                    </div>
                </div>

                <!-- pagina 3 -->
                <div class="page">

                    <div class="title-page">
                        <p>4/5</p>
                        <h2>Datos profesionales</h2>
                    </div>

                    <div class="form-content">

                        <div class="page-step-title">
                            <p>Rellena todos los campos</p>
                        </div>

                        <!--campo 11-->
                        <div class="field">
                            <div class="label_input">
                                <label for="programa_elegido">¿qué programa te interesa?</label>
                                    <div class="radio-control">
                                        <div class="radio-control-option">
                                            <input type="radio" name="programa_elegido" id="analisis-de-datos" value="analisis-de-datos" checked>Certificado de Análisis de Datos
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="programa_elegido" id="soporte-de-ti" value="soporte-de-ti">Certificado de Soporte en TI
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <!--campo 12-->
                        <div class="field">
                            <div class="label_input">
                                <label for="canal_captacion">¿cómo has conocido este programa?</label>
                                    <div class="radio-control">
                                        <div class="radio-control-option">
                                            <input type="radio" name="canal_captacion" id="influencer-veritechie" value="influencer-veritechie" checked>Influencer - @veritechie
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="canal_captacion" id="influencer-chicageek" value="influencer-chicageek">Influencer - @ChicaGeek
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="canal_captacion" id="amigo-familiar" value="amigo-familiar">Por un amigo/familiar
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="canal_captacion" id="ong-fundacion-asociacion" value="ong-fundacion-asociacion">ONG/Fundación/Asociación
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="canal_captacion" id="anuncio-fb-ig-linkedin" value="anuncio-fb-ig-linkedin">Anuncio en FB/IG/LinkedIN
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="canal_captacion" id="grupo-facebook" value="grupo-facebook">Grupo en Facebook
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="canal_captacion" id="busqueda-internet" value="busqueda-internet">Búsqueda en internet
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="canal_captacion" id="antiguo-alumno" value="antiguo-alumno">Por un antiguo alumno
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="canal_captacion" id="inco-academy-espana" value="inco-academy-espana">Por INCO Academy España
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="canal_captacion" id="otro" value="otro">Otro
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <!--campo 13-->
                        <div class="field">
                            <div class="label_input">
                                <label for="situacion_profesional">¿cuál es tu situación profesional actual</label>
                                    <div class="radio-control">
                                        <div class="radio-control-option">
                                            <input type="radio" name="situacion_profesional" id="desempleado-busca-trabajo" value="desempleado-busca-trabajo" checked>Desempleado, en busca de trabajo
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="situacion_profesional" id="autonomo" value="autonomo">Autónomo
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="situacion_profesional" id="empleado-tiempo-completo" value="empleado-tiempo-completo">Empleado a tiempo completo
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="situacion_profesional" id="empleado-tiempo-parcial" value="empleado-tiempo-parcial">Empleado a tiempo parcial
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="situacion_profesional" id="becario-aprendiz" value="becario-aprendiz">Becario/Aprendiz
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="situacion_profesional" id="fp-universidad" value="fp-universidad">Estudio FP/ Voy a la universidad
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="situacion_profesional" id="programa-de-formacion" value="programa-de-formacion">Participo en un programa de formación
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="situacion_profesional" id="otro" value="otro">Otro
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <div class="field btns">
                            <button class="prev-3 prev">Anterior</button>
                            <button class="next-3 next">Siguiente</button>
                        </div>
                    </div>              
                </div>

                <!-- pagina 4 -->
                <div class="page">

                    <div class="title-page">
                        <p>4/5</p>
                        <h2>Datos profesionales</h2>
                    </div>

                    <div class="form-content">
                        <div class="page-step-title">
                            <p>Rellena todos los campos</p>
                        </div>

                        <!--campo 14-->
                        <div class="field">
                            <div class="label_input">
                                <label for="situacion_actual">¿Que situación que define mejor? 
                                    <div class="radio-control">
                                        <div class="radio-control-option">
                                            <input type="radio" name="situacion_actual" id="acceso-limitado-a-educacion" value="acceso-limitado-a-educacion" checked>Tengo acceso limitado a la educación superior
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="situacion_actual" id="origen-migrante" value="origen-migrante">Tengo origen migrante
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="situacion_actual" id="sin-expectativas-profesionales" value="sin-expectativas-profesionales">No tengo expectativas profesionales
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="situacion_actual" id="cuido-miembro-de-familia" value="cuido-miembro-de-familia">Cuido a un miembro de mi familia
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="situacion_actual" id="madre-padre-soltero" value="madre-padre-soltero">Soy madre/padre soltero
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="situacion_actual" id="mundo-rural" value="mundo-rural">Vivo en el mundo rural
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="situacion_actual" id="prefiero-no-decir" value="prefiero-no-decir">Prefiero no decirlo
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- campo 15 -->
                        <div class="field">
                            <div class="label_input">
                                <label for="nivel_educacion">¿cuál es tu nivel de educación?
                                    <div class="radio-control">
                                        <div class="radio-control-option">
                                            <input type="radio" name="nivel_educacion" id="sin-estudios-primaria-incompleta" value="sin-estudios-primaria-incompleta" checked>Sin estudios o enseñanza primaria incompleta
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="nivel_educacion" id="secundaria-eso" value="secundaria-eso">Secundaria (ESO)
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="nivel_educacion" id="formacion-profesional" value="formacion-profesional">Formación profesional
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="nivel_educacion" id="estudios-universitarios" value="estudios-universitarios">Estudios universitarios
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="nivel_educacion" id="master" value="master">Máster
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="nivel_educacion" id="doctorado" value="doctorado">Doctorado
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="label_field_part">
                            <!--campo 16-->
                            <div class="field">
                                <div class="label_input">
                                    <label for="disponibilidad_ordenador">¿tienes ordenador/tablet y conexión a internet? 
                                        <div class="radio-control">
                                            <div class="radio-control-option">
                                                <input type="radio" name="disponibilidad_ordenador" id="si" value="si" checked>Si  
                                            </div>

                                            <div class="radio-control-option">
                                                <input type="radio" name="disponibilidad_ordenador" id="no" value="no">No  
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <!-- campo 17 -->  
                            <div class="field">
                                <div class="label_input">
                                    <label for="permiso_trabajo_Es">¿Tienes permiso de trabajo en España?
                                        <div class="radio-control">
                                            <div class="radio-control-option">
                                                <input type="radio" name="permiso_trabajo_Es" id="si" value="si" checked>Si  
                                            </div>

                                            <div class="radio-control-option">
                                                <input type="radio" name="permiso_trabajo_Es" id="no" value="no">No  
                                            </div>

                                            <div class="radio-control-option">
                                                <input type="radio" name="permiso_trabajo_Es" id="no" value="no">No, en proceso
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="field btns">
                            <button class="prev-4 prev">Anterior</button>
                            <button class="next-4 next">Siguiente</button>
                        </div>
                    </div>
                </div>

                <!-- pagina 5 -->
                <div class="page">

                    <div class="title-page">
                        <p>5/5</p>
                        <h2>Datos adicionales</h2>
                    </div>

                    <div class="form-content">

                        <div class="page-step-title">
                            <p>Rellena todos los campos</p>
                        </div>

                        <!--campo 17-->
                        <div class="field">
                            <div class="label_input">
                                <label for="disponibilidad_horaria">Como parte del programa ofrecemos sesiones prácticas técnicas y de habilidades sociales en directo: ¿Qué horario se ajustaría más a tu disponibilidad?
                                    <div class="radio-control">
                                        <div class="radio-control-option">
                                            <input type="radio" name="disponibilidad_horaria" id="mananas" value="mananas" checked>Mañanas
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="disponibilidad_horaria" id="tardes" value="tardes">Tardes
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="disponibilidad_horaria" id="ambas" value="ambas">Ambas
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!--campo 18-->
                        <div class="field">
                            <div class="label_input">
                                <label for="nivel_ingles">Para realizar este programa NO es necesario hablar inglés, todos los materiales tienen su versión en español. Sin embargo, en ocasiones organizamos eventos a nivel global en inglés: ¿te sientes cómodo participando en una sesión en inglés?
                                    <div class="radio-control">
                                        <div class="radio-control-option">
                                            <input type="radio" name="nivel_ingles" id="mananas" value="mananas" checked>¡Si!
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="nivel_ingles" id="algo-de-ingles" value="algo-de-ingles">No entiendo al 100% pero puedo hacerme entender.
                                        </div>

                                        <div class="radio-control-option">
                                            <input type="radio" name="nivel_ingles" id="no-sabe-ingles" value="no-sabe-ingles">No, no me siento cómodo para participar en una sesión en inglés
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!--campo 19-->
                        <div class="field">
                            <div class="label_input">
                                <label for="presentacion_breve">Cuéntanos en menos de 300 palabras por qué quieres entrar en el programa</label>
                                <textarea name="presentacion_breve" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>

                        <div class="field btns">
                            <button class="prev-5 prev">Anterior</button>
                            <button class="submit">Enviar</button>  

                        </div>
                </div>
            </form>
        </div>
    </div>          

    <script>
        const slidePage = document.querySelector(".slide-page");
        const nextBtnFirst = document.querySelector(".firstNext");
        const prevBtnSec = document.querySelector(".prev-1");
        const nextBtnSec = document.querySelector(".next-1");
        const prevBtnThird = document.querySelector(".prev-2");
        const nextBtnThird = document.querySelector(".next-2");
        const prevBtnFourth = document.querySelector(".prev-3");
        const nextBtnFourth = document.querySelector(".next-3");
        const prevBtnFifth = document.querySelector(".prev-4");
        const nextBtnFifth = document.querySelector(".next-4");
        const prevBtnSixth = document.querySelector(".prev-5");
        const submitBtn = document.querySelector(".submit");
        const progressText = document.querySelectorAll(".step p");
        const progressCheck = document.querySelectorAll(".step .check");
        const bullet = document.querySelectorAll(".step .bullet");
        let current = 1;

        nextBtnFirst.addEventListener("click", function(event) {
            event.preventDefault();
            slidePage.style.marginLeft = "-25%";
            bullet[current - 1].classList.add("active");
            progressCheck[current - 1].classList.add("active");
            progressText[current - 1].classList.add("active");
            current += 1;
        });

        nextBtnSec.addEventListener("click", function(event) {
            event.preventDefault();
            slidePage.style.marginLeft = "-50%";
            bullet[current - 1].classList.add("active");
            progressCheck[current - 1].classList.add("active");
            progressText[current - 1].classList.add("active");
            current += 1;
        });

        nextBtnThird.addEventListener("click", function(event) {
            event.preventDefault();
            slidePage.style.marginLeft = "-75%";
            bullet[current - 1].classList.add("active");
            progressCheck[current - 1].classList.add("active");
            progressText[current - 1].classList.add("active");
            current += 1;
        });

        submitBtn.addEventListener("click", function() {
            bullet[current - 1].classList.add("active");
            progressCheck[current - 1].classList.add("active");
            progressText[current - 1].classList.add("active");
            current += 1;
            setTimeout(function(){
                alert("Has rellenado correctamente el formulario!");
                location.reload();
            },800);
        });

        prevBtnSec.addEventListener("click", function(event) {
            event.preventDefault();
            slidePage.style.marginLeft = "0%";
            bullet[current - 2].classList.remove("active");
            progressCheck[current - 2].classList.remove("active");
            progressText[current - 2].classList.remove("active");
            current -= 1;
        });

        prevBtnThird.addEventListener("click", function(event) {
            event.preventDefault();
            slidePage.style.marginLeft = "-25%";
            bullet[current - 2].classList.remove("active");
            progressCheck[current - 2].classList.remove("active");
            progressText[current - 2].classList.remove("active");
            current -= 1;
        });

        prevBtnFourth.addEventListener("click", function(event){
            event.preventDefault();
            slidePage.style.marginLeft = "-50%";
            bullet[current - 2].classList.remove("active");
            progressCheck[current - 2].classList.remove("active");
            progressText[current - 2].classList.remove("active");
            current -= 1;
        });
    </script>
</body>
</html>