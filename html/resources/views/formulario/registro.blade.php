<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro Alumnos</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <style>
        *{ 
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
            box-sizing: border-box;
        }

        main {
            background-color: #3EADA2;
        }

        .faces {
            display: none;
        }

        .form-section {
            display: grid;
            grid-template-columns: 1fr 3fr;
            padding: 5% 10%;
            gap: 5%;
            height: 100vh;
        }

        .form-questions {
            background-color: white;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            padding: 5% 10%;   
            box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        }

        .label_input label {
            margin-bottom: 1%;
        }

        .label_input {
            font-weight: 200;
            display: flex;
            flex-direction: column;
            margin-bottom: 4%;
            width: 100%;
        }

        .label_input_part {
            display: flex;
            justify-content: space-between;
            gap: 5%;
        }

        .form-part-title {
            color: #012060;
            font-weight: 700;
            font-size: 1.4rem;
            text-transform: uppercase;
            margin-bottom: 4%;
        }

        .input-box {
            height: 45px;
            border: solid #012060 1px;
            
        }

        .title-section-page {
            padding-top: 30vh;
            text-align: right;
            text-transform: uppercase;
        }

        .part-title {
            font-weight: 700;
            color: gray;
        }
        
        .title-text-section {
            font-weight: 900;          
            font-size: 2.5rem;
            color:white;
        }

        .label_input input::placeholder {
            padding-left: 1%;
            font-weight: 200;
            font-size: 0.8rem;
            color: gray;
        }

        input[type="radio"] {
            /* Add if not using autoprefixer */
            -webkit-appearance: none;
            /* Remove most all native input styles */
            appearance: none;
            /* For iOS < 15 */
            background-color: var(--form-background);
            /* Not removed via appearance */
            margin: 0 5px;
            width: 1.15em;
            height: 1.15em;
            border: 1px solid #012060;
            border-radius: 50%;
            transform: translateY(-0.075em);
            display: grid;
            place-content: center;
            cursor: pointer;
        }

        input[type="radio"]::before {
            content: "";
            width: 0.65em;
            height: 0.65em;
            border-radius: 50%;
            transform: scale(0);
            transition: 120ms transform ease-in-out;
            box-shadow: inset 1em 1em var(--form-control-color);
            background-color: #012060;
        }

        input[type="radio"]:checked::before {
            transform: scale(1);
        } 

        .radio-control {
            display: flex;
            width: 80%;
        }

        .radio-control-option {
            display: flex;
            align-items: center;
            margin-top: 10px;
            margin-right: 10px;
            padding: 2% 3% 1% 2%;
            border-radius: 20px;
            border: 1px solid #012060;
            background-color: white;
            cursor: pointer;
        }
    </style>    
</head>
<body>
    <div class="principal "> 
        <main> 

        <div class="faces">
            <div class="border step0"><label>Parte 1/5</label></div>
            <div class="border step1"><label>Parte 2/5</label></div>
            <div class="border step2" ><label>Parte 3/5</label></div>
            <div class="border step3"><label>Parte 4/5</label></div>
            <div class="border step4"><label>Parte 5/5</label></div>
        </div>
        
        <div class="formulario">
            <form action="{{ route('guardar_registro') }}" method="POST" class="employee-form">
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
            <div class="form-section">

                <div class="title-section-page">
                    <p class="part-title">Parte 1/5</p>
                    <h2 class="title-text-section">Datos personales</h2> 
                </div>

                <div class="form-questions">
                    <div class="form-part-title">
                        <p>Parte 1/5</p>
                    </div>
                    
                    <!--campo 1-->
                    <div class="label_input">
                        <label for="nombre">Nombres</label>
                        <input class="input-box form-control" type="text" id= "nombre" name="nombre" placeholder="Maria Esperanza" required value="">
                    </div>

                    <!--campo 2-->
                    <div class="label_input">
                        <label for="apellido">Apellidos</label>
                        <input class="input-box form-control" type="text" placeholder="Perez Sanchez" required id= "apellido" name="apellido" value="">
                    </div>
                    

                    <div class="label_input_part">
                        <!--campo 3-->
                        <div class="label_input">
                            <label for="email">Email</label>
                            <input  class="input-box form-control" type="email" placeholder="email@example.com" id= "email" name="email" value="">
                        </div>

                        <!--campo 4-->
                        <div class="label_input">
                            <label for="dni">DNI/NIE/Pasaporte</label>
                            <input class="input-box form-control" type="text" placeholder="12345678X" required id= "dni" name="dni" value="">
                        </div>
                    </div>
   
                    <div class="label_input_part">
                        <!--campo 5-->
                        <div class="label_input">
                            <label for="telefono">Teléfono </label>
                            <input class="input-box form-control" type="text" placeholder="+34 666 66 66 66" id= "telefono" name="telefono" value="">
                        </div> 
                        
                        <!--campo 6-->  
                        <div class="label_input">
                            <label for="vivesE">¿resides en España?
                                <div class="form-control radio-control">
                                    <div class="radio-control-option">
                                       <input type="radio" name="vivesE" id="si" value="si" checked>Si  
                                    </div>

                                    <div class="radio-control-option">
                                      <input type="radio" name="vivesE" id="no" value="no">No  
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>               
                </div>
            </div>

            <div class="form-section">
      
                <div class="title-section-page">
                    <p class="part-title">Parte 2/5</p>
                    <h2 class="title-text-section">Datos personales</h2> 
                </div>

                <div class="form-questions">

                    <div class="form-part-title step1">
                        <label>Parte 2/5</label>
                    </div>

                    <!--campo 7-->  
                    <div class="label_input">
                        <label class="form-control -mb-3" for="residencia">Ciudad de Residencia</label>
                            <!--lista desplegable de provincias de españa -->
                        <select name="residencia" id="residencia">                
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

                    <!--campo 8-->  
                    <div class="label_input">
                        <label for="pnacimiento">País de nacimiento</label>
                        <!--lista de paises --> 
                        <select class="form-control -mb-3" name="pnacimiento" id="pnacimiento">                
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

                    <!--definir que tipo de campo pedimos aqui-->
                    <!--campo 9-->  
                    <div class="label_input">
                        <label for="fnacimiento">Año de nacimiento</label>
                        <input class="form-control -mb-3" type="date" id= "fnacimiento" name="fnacimiento" value="">
                    </div>

                    <!--campo 10-->
                    <div class="label_input">
                        <label for="gender">¿con qué género te identificas?
                            <div class="form-control radio-control">
                                <div class="radio-control-option">      
                                    <input type="radio" class="form-control" name="gender" id="mujer" value="mujer">Mujer
                                </div>

                                <div class="radio-control-option">
                                    <input type="radio" class="form-control" name="gender" id="hombre" value="hombre">Hombre
                                </div>

                                <div class="radio-control-option">
                                    <input type="radio" class="form-control" id="nb" name="gender" value="nb">No binario
                                </div>

                                <div class="radio-control-option">
                                    <input type="radio" class="form-control" id="otra" name="gender" value="otra">Otra
                                </div>

                                <div class="radio-control-option">
                                    <input type="radio" class="form-control" id="no-responde" name="gender" value="no-responde">Prefiero no responder
                                </div>
                        </label>
                    </div>
                </div>                   
            </div>
       
            <div class="form-section">

                <div class="title-section-page">
                    <p class="part-title">Parte 3/5</p>
                    <h2 class="title-text-section">Datos profesionales</h2> 
                </div>

                <div class="form-questions">

                    <!--campo 11-->
                    <div class="label_input">
                    <label for="programa">¿Qué programa te interesa?</label>
                        <select class="form-control" name="programa" id="programa">
                            <option value="analisisDatos">Certificado de Analisis de Datos</option>
                            <option value="SoporteTI">Certificado de Soporte en TI</option>
                        </select>
                    </div>

                    <!--campo 12-->
                    <div class="label_input">
                    <label for="cprograma">¿Como has conocido este programa?</label>
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

                    <!--campo 13-->
                    <div class="label_input">
                        <label for="sprofesional">¿Situación profecional actual?  </label>   
                            <select class="form-control -mb-3" name="sprofesional" id="sprofesional">
                                <option value="desempleado">Desempleado, en busca de trabajo</option>
                                <option value="empleado">Empleado a tiempo completo</option>
                            </select>
                    </div>
                </div>

                <div class="form-section">

                    <div class="title-section-page">
                        <p class="part-title">Parte 4/5</p>
                        <h2 class="title-text-section">Datos profesionales</h2> 
                    </div>
                    
                    <div class="form-questions">
                        <!--campo 14-->
                        <div class="label_input">
                            <label for="situacion">¿Que situación que define mejor? </label>
                                <!--lista desplegable varias opciones -->
                            <select class="form-control -mb-3" name="situacion" id="situacion">
                                    <option value="expectativas">No tengo expectativas profesionales</option>
                                    <option value="prefiero">Prefiero no decirlo</option>
                                    <option value="acceso">Tengo acceso limitado a la educación superior</option>
                                    <option value="cuidado">Cuido a un miembro de mi familia</option>
                                    <option value="origen">Tengo origen migrante</option>                     
                            </select>
                        </div>

                        <!--campo 15-->
                        <div class="label_input">
                            <label for="neducacion">Nivel de educación </label>
                            <select class="form-control -mb-3" name="neducacion" id="neducacion">
                                <!-- no coinciden los campos comprobar y si tiene que seleccionar dos opciones
                                    o crear otro campo-->
                                    <option value="completo">Empleado a tiempo completo</option>
                                    <option value="parcial">Empleado a tiempo parcial</option>
                                    <option value="trabajo">Desempleado, en busca de trabajo</option>
                                    <option value="formacion">Formación Profesional</option>
                                    <option value="eso">Secundaria (ESO)</option>
                                    <option value="estudios">Estudios Universitarios</option>
                                    <option value="master">Máster</option>
                                </select>
                        </div>
                
                        <!--campo 16-->
                        <div class="label_input">
                            <label for="permisoTrabajo">¿Tienes permiso de trabajo en Españ? </label>
                                <!--lista desplegable -->
                                <select class="form-control -mb-3" name="permisoTrabajo" id="permisoTrabajo">
                                    <option value="permisosi">Si</option>
                                    <option value="permisono">No</option>
                                </select>
                        </div>

                        <!--campo 17-->
                        <div class="label_input">
                            <label for="tienes_ordenador">¿Tienes Ordenador/tablet/wifi? </label>
                                <select class="form-control" name="tienes_ordenador" id="tienes_ordenador">
                                    <option value="ordenadorsi">Si</option>
                                    <option value="ordenadorno">No</option>
                                </select>    
                        </div>
                    </div>

                    <!--campo 18-->
                    <div class="label_input">
                        <label for="cingles">¿Conocimientos de ingles? </label>
                            <select class="form-control" name="cingles" id="cingles">
                                    <option value="inglessi">Si</option>
                                    <option value="inglesno">No</option>
                            </select>    
                    </div>

                 <!--campo 19-->
                <div class="label_input">
                    <label for="disponibilidad">¿Disponibilidad? </label>
                        <select class="form-control" name="disponibilidad" id="disponibilidad">
                                <option value="tarde">Tarde</option>
                                <option value="mañana">Mañana</option>
                                <option value="ambas">Ambas</option>
                        </select>    
                </div> 
             

                <div class="enviar form-navigation">
                    <input class="previous btn btn-primary" type="button" class="" value="Previous">
                    <input class="next btn btn-primary" type="button" class="" value="Continuar">
                    <input  class="btn btn-success" type="submit" value="Enviar">
                                       
                </div>
            </form>
        </div>
    </main>
    </div>

    <script>

        $(function() {
        var $sections = $('.form-section');

        function navigateTo(registro) {
            $sections.removeClass('current').eq(registro).addClass('current');

            $('.form-navigation .previous').toggle(registro > 0);
            var atTheEnd = registro >= $sections.length - 1;
            $('.form-navigation .next').toggle(!atTheEnd);
            $('.form-navigation [type=submit]').toggle(atTheEnd);

            // Corregir el selector: querySelector en lugar de querSelector
            const step = document.querySelector('.step' + registro);
            step.style.backgroundColor = "#17a2b8";
            step.style.color = "white";
        }

        function curIndex() {
            // Corregir el uso de index() en lugar de registro()
            return $sections.index($sections.filter('.current'));
        }

        $('.form-navigation .previous').click(function() {
            navigateTo(curIndex() - 1);
        });

        $('.form-navigation .next').click(function() {
            // Corregir el selector: $('.employee-form') en lugar de $('.employee-form')
            $('.employee-form').parsley().whenValidate({
            group: 'block-' + curIndex()
            }).done(function() {
            navigateTo(curIndex() + 1);
            });
        });

        $sections.each(function(registro, section) {
            // Corregir el atributo: 'date-parsley-group' en lugar de 'date-parsley-group'
            $(section).find(':input').attr('data-parsley-group', 'block-' + registro);
        });

        navigateTo(0);
        });

    </script>

</body>
</html>