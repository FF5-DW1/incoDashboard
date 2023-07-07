<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro Alumnos</title>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <style>
        .principal{
            width: 80%;
            margin: auto;
            -border: 1px solid #701616;
            
        }
        main{
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
            align-items: center;
        }
        .formulario{
            
            background-color: #012060;
            color: white;
            padding: 2rem;
            font-size: 18px;
        
        } 
        .titulo{
            padding: 2rem;
            letter-spacing: 1rem;
        }
        .formulario, .faces, .titulo{
            width: 50%;
            
        }
        .faces{
            border: 2px solid  #012060;
            text-align: center;
            font-size: 18px;
            text-align: center;
            display: flex;
            flex-direction:row;
            justify-content:space-between ;
            
        }
        .label_input{
            padding-bottom: 1rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;

        } 
        .enviar{
            display: flex;
            flex-direction:row;
            justify-content:space-between ;
            margin-top: 1rem;
        }  
       
        
        
        .titulo h1{
            color: #212e9e;
            font-size: 45px;
            text-align: center;

            border: #212e9e;
        } 
        .label_input input, select{
            padding : 5px 10px;
            border-radius: 5px;
            -padding-left: 10px;
        }
        
        /*------nuevo css*/
        
        .border{
            color: #012060;
            padding: 1rem;
            width: 25%;
            border: 1px solid #327016;

        }
        .form-section{
            display: none
        }

        .form-section.current{
            display: inline;
        }
        .parsley-error-list{
            color: red;
        }
        .btn{
            background: white;
            color: #012060;
            border-radius: 5px;
            padding : 5px 10px;
            -letter-spacing: 1rem;
            transition: .1s ease all;
        }
        .btn-success {
            float: left;
        }
        .btn-primary {
        float: left;
        }

        .btn-primary {
            float: right;
        }
        .btn-success,.btn-primary:hover {
            box-shadow: 1px 0px 30px rgb(186, 145, 98);
        }
        .form-control{
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        /* version mobil*/  

    @media screen and (max-width: 800px) {
    .label_input {
        grid-template-columns: 1fr;
    } 

    .enviar,.label_input {
        width: 100%; 
    }
    .bt_enviar{
    -width: 100%;
    -padding-left: 10px;
    }
    }
</style>
</head>
<body>
    <div class="principal "> 
        <main>   
        <div class="titulo">
            <h1 class="text-danger text-center mt-3 mb4">Inscripcion</h1> 
        </div>

        <div class="faces">
            <div class="border step0"><label >Uno</label></div>
            <div class="border step1"><label >Dos</label></div>
            <div class="border  step2" ><label >Tres</label></div>
            <div class="border step3"><label >Cuatro</label></div>
        </div>
        
        <div class="formulario">
            
            
            
            <form action="{{ route('guardar_registro') }}" method="POST" class="employee-form">
            <!--para verificar si pasan todos lo regisro a la base de datos--> 
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

            <div class="form-section">
                <div class="label_input">
                    <label for="nombre">Nombre</label>
                    <input class="form-control " type="text" id= "nombre" name="nombre" required value="">
                </div>
                
                <div class="label_input">
                    <label for="apellido">Apellidos</label>
                    <input class="form-control " type="text"  required id= "apellido" name="apellido" value="">
                </div>
                
                <div class="label_input">
                    <label for="email">Email</label>
                    <input  class="form-control" type="email" id= "email" name="email" value="">
                </div>
                
                <div class="label_input">
                    <label for="telefono">Telefono </label>
                        <input class="form-control" type="text" id= "telefono" name="telefono" value="">
                </div>

                <div class="label_input">
                    <label for="vivesE">¿Vives es España?</label>
                    <select class="form-control " name="vivesE" id="vivesE" value=" "  onchange="validateVivesE(this)">
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
                    <p  id="salirBtn" style="display: none"> Lo siento no puede continuar</p>
                </div>
            </div>
            
            <div class="form-section">
                <div class="label_input">
                    <label for="programa">¿Qué programa te interesa?</label>
                        <select class="form-control" name="programa" id="programa">
                            <option value="analisisDatos">Certificado de Analisis de Dato</option>
                            <option value="SoporteTI">Certificado de Soporte en TI</option>
                        </select>
                </div>
                
                <div class="label_input">
                    <label for="cprograma">¿Como as conocido este programa?</label>
                        <select class="form-control -mb-3" name="cprograma" id="cprograma">
                            <option value="google">Búsqueda en Google</option>
                            <option value="amigosFamilia">De un amigo/familiar</option>
                            <option value="asociacion">Asociación</option>
                            <option value="centroS">Centre Sant Jaume</option>
                            <option value="chicaGeek">Influencer - @ChicaGeek</option>
                            <option value="ong">ONG/Fundación/Asociación</option>
                            <option value="facebook">Grupo en Facebook</option>
                            <option value="inco">Por INCO Academy España</option>
                            <option value="anuncio">Anuncio en FB / IG / LinkedIN</option>
                            <option value="internet">Búsqueda en internet</option>
                            <option value="instagram">Instagram</option>
                            <option value="fundacion">ONG/Fundación/Asociación</option>
                            <option value="veritechie">Influencer - @veritechie</option>
                        </select>
                </div>
            
                
                
                <div class="label_input">
                    <label for="fnacimiento">Fecha nacimeinto</label>
                    <input class="form-control -mb-3" type="date" id= "fnacimiento" name="fnacimiento" value="">
                </div>
            </div>
            
            <div class="form-section">
                <div class="label_input">
                    <label class="form-control -mb-3" for="residencia">Ciudad de Residencia</label>
                        <!--lista desplegable de provinciasde españa -->
                        <select name="residencia" id="residencia"> 
                            @foreach($provincias as $provincia)
                                <option value="{{ $provincias->id }}">{{ $provincia->nombre }}</option>
                            @endforeach               
                            <option value="Álava/Araba">Álava/Araba</option>
                            <!--<option value="Albacete">Albacete</option>
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
                            <option value="Zaragoza">Zaragoza</option>-->
                        </select>
                </div>
                
                <div class="label_input">
                    <label for="pnacimiento">País de nacimieneto</label>
                    <!--lista de paises --> 
                    <select class="form-control -mb-3" name="pnacimiento" id="pnacimiento">                
                        @foreach($paises as $pais)
                        <option value="{{ $paises->id }}">{{ $pais->nombre }}</option>
                    @endforeach
                        
                        <!--<option value="AF">Afganistán</option>
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
                            <option value="ZW">Zimbabue</option>-->
                        </select>
                </div>
    
                <div class="label_input">
                    <label for="sprofesional">¿Situación profecional actual?  </label>   
                        <select class="form-control -mb-3" name="sprofesional" id="sprofesional">
                            <option value="desempleado">Desempleado, en busca de trabajo</option>
                            <option value="empleado">Empleado a tiempo completo</option>
                        </select>
                </div>
            
                <div class="label_input">
                    <label for="situacion">¿Que situacón que define mejor? </label>
                        <!--lista desplegable varias opciones -->
                    <select class="form-control -mb-3" name="situacion" id="situacion">
                            <option value="expectativas">No tengo expectativas profesionales</option>
                            <option value="prefiero">Prefiero no decirlo</option>
                            <option value="acceso">Tengo acceso limitado a la educación superior</option>
                            <option value="cuidado">Cuido a un miembro de mi familia</option>
                            <option value="origen">Tengo origen migrante</option>
                            
                    </select>
                </div>
            </div>

            <div class="form-section">
                <div class="label_input">
                    <label for="neducacion">Nivel de educación </label>
                    <select class="form-control -mb-3" name="neducacion" id="neducacion">
                        <!-- no coinciden los campos comprobar y si tiene que seleccionar dos opciones
                            oh crear otro campo-->
                            <option value="completo">Empleado a tiempo completo</option>
                            <option value="parcial">Empleado a tiempo parcial</option>
                            <option value="trabajo">Desempleado, en busca de trabajo</option>
                            <option value="formacion">Formación Profesional</option>
                            <option value="eso">Secundaria (ESO)</option>
                            <option value="estudios">Estudios Universitarios</option>
                            <option value="master">Máster</option>
                        </select>
                </div>
                
                <div class="label_input">
                    <label for="permisoTrabajo">¿Tienes permiso de trabajo en Españ? </label>
                        <!--lista desplegable -->
                        <select class="form-control -mb-3" name="permisoTrabajo" id="permisoTrabajo">
                            <option value="permisosi">Si</option>
                            <option value="permisono">No</option>
                        </select>
                </div>
                
                <div class="label_input">
                    <label for="tienes_ordenador">¿Tienes Ordenador/tablet/wifi? </label>
                        <select class="form-control -mb-3" name="tienes_ordenador" id="tienes_ordenador">
                            <option value="ordenadorsi">Si</option>
                            <option value="ordenadorno">No</option>
                        </select>    
                </div>
                
                <div class="label_input">
                    <label for="cingles">¿Conocimientos de ingles? </label>
                        <select class="form-control -mb-3" name="cingles" id="cingles">
                                <option value="inglessi">Si</option>
                                <option value="inglesno">No</option>
                        </select>    
                </div>
                <div class="label_input">
                    <label for="disponibilidad">¿Disponibilidad? </label>
                        <select class="form-control -mb-3" name="disponibilidad" id="disponibilidad">
                                <option value="tarde">Tarde</option>
                                <option value="mañana">Mañana</option>
                                <option value="ambas">Ambas</option>
                        </select>    
                </div> 
            </div>   

                <div class="enviar form-navigation -mt-3 ">
                    <input class="previous btn btn-primary" type="button"  value="Previous">
                    <input class="next btn btn-primary" type="button" id="next1" value="Next">
                    <input  class="btn btn-success" type="submit" value="Submit">
                    <input class=" btn" type="button" id="salir" value="salir" style="display: none" >                 
                </div>
            </form>
        </div>
    </main>
    </div>

    
    <script>
        function validateVivesE(selectElement) {
                if (selectElement.value === 'no') {
                    //alert('Lo siento, no puedes continuar si no vives en España');
                    document.getElementById('salirBtn').style.display = 'block';
                    document.getElementById('next1').style.display = 'none';
                    document.getElementById('salir').style.display = 'block';
                } else {
                    document.getElementById('next1').style.display = 'block';
                    document.getElementById('salirBtn').style.display = 'none';
                    document.getElementById('salir').style.display = 'none'; 
                }
            }

        $(function() {
        var $sections = $('.form-section');

        function navigateTo(registro) {
            $sections.removeClass('current').eq(registro).addClass('current');

            $('.form-navigation .previous').toggle(registro > 0);
            var atTheEnd = registro >= $sections.length - 1;
            $('.form-navigation .next').toggle(!atTheEnd);
            $('.form-navigation [type=submit]').toggle(atTheEnd);

            const step = document.querySelector('.step' + registro);
            step.style.backgroundColor = "#17a2b8";
            step.style.color = "white";
        }

        function curIndex() {
            return $sections.index($sections.filter('.current'));
        }

        $('.form-navigation .previous').click(function() {
            navigateTo(curIndex() - 1);
        });

        $('.form-navigation .next').click(function() {
            $('.employee-form').parsley().whenValidate({
            group: 'block-' + curIndex()
            }).done(function() {
            navigateTo(curIndex() + 1);
            });
        });

        $sections.each(function(registro, section) {
            $(section).find(':input').attr('data-parsley-group', 'block-' + registro);
        });

        navigateTo(0);
        });

    </script>

</body>
</html>

