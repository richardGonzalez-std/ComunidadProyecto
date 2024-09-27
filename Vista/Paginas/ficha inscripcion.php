
<?php
    require "../../Controlador/RegistroControlador.php";
    require "../../Modelo/Register_login.controlador.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Recursos/css/gid_style.css">
    <title>Ficha de Inscripción</title>
</head>
<body>
    
    <div class="form-container">
        <form method="POST">
               <header>
                <div class="logo">
            <img src="Recursos/img/Logo Peru de Lacroix.png" alt=""/><br><br> 
         <p><strong>REPÚBLICA BOLIVARIANA DE VENEZUELA</strong><br>
            <strong>MINISTERIO DEL PODER POPULAR PARA LA EDUCACIÓN </strong><br>
            <strong>U.E.N. "PERÚ DE LACROIX"</strong><br>
            <strong>LIDICE- CARACAS<strong><br> 
            <strong>TELÉFONO: 0212.8635278</strong></p>
            </div>
        </header>
            <div class="documentos">
                <fieldset class="carnet">
                    <h3>Carnet de la Patria</h3>
                    Código: <input type="text" name="codigo_carnet"><br><br>
                    Serial: <input type="text" name="serial_carnet">
                </fieldset>
                <fieldset class="cedula_identidad">
                    FOTOCOPIA DE LA CEDULA DE IDENTIDAD DEL ESTUDIANTE <br><br><br><input type="file" accept=".png, .jpg" name="" id="">
            </fieldset>
            </div>
            <div class="grid-container">
                <div><input type="file" accept=".png, .jpg"><br>FOTO DEL REPRESENTANTE</div>
                <div><input type="file" accept=".png, .jpg"><br>FOTO DEL ESTUDIANTE</div>
                <div><input type="file" accept=".png, .jpg"><br>FOTO DEL ESTUDIANTE</div>
                <div><input type="file" accept=".png, .jpg"><br>FOTO DEL ESTUDIANTE</div>
                <div><input type="file" accept=".png, .jpg"><br>FOTO DEL ESTUDIANTE</div>
                <div><input type="file" accept=".png, .jpg"><br>FOTO DEL ESTUDIANTE</div>
            </div>

            <div class="personal-info">
                <p>Tallas:</p>
                <p>Estatura: <input type="text" class="info_1"></p>
                <p>Peso: <input type="text" class="info_2"></p>
                <p>Camisa: <input type="text" class="info_3"></p>
                <p>Estatura: <input type="text" class="info_4"></p>
                <p>Pantalón: <input type="text" class="info_5"></p>
                <p>Zapatos: <input type="text" class="info_6"></p>
            </div>
            <div class="scholar_info">
                <p>C.I.N°: <input type="text" class="scholar1" name="Cedula" required></p>
                <p>Cedula Escolar: <input type="text" class="scholar2"></p>
                <p>Posición según Parto (S): <input type="text" class="scholar3"></p>
            </div>
            <div class="fill">
                <p>Docente que Revisa los Documentos: <input type="text" class="fill_1"></p>
                <p>Docente que Realiza la Inscripción: <input type="text" class="fill_2"></p>
                <p>Plantel de Procedencia: <input type="text" class="fill_3"></p>  
            </div>
            <div class="personal-student-info">
                <h3>DATOS PERSONALES DEL ESTUDIANTE:</h3>
                <span>Apellidos: <input type="text" name="registroApellido" class="personal_1" required></span><span> Nombres: <input type="text" name="registroNombre" class="personal_2" required></span>
                <p>Lugar y Fecha de Nacimiento: <input type="text" name="lugar" class="personal_3" required> <input name="fecha" type="date" required></span><span> Edad: <input type="text" name="edad">
                    Sexo:
                     <select name="sexo">
                        <option value="M">M</option>
                        <option value="F">F</option>
                     </select>
                    </span>
                </p>
                <br>
                <span>Estado: <input type="text" class="personal_4"></span>, <span>País: <input type="text" class="personal_5"></span><span> Dirección: <input type="text" class="personal_6"></span>
                <p>Correo Electrónico (Legible): <input type="text" class="personal_7"></p>
                <p>Tiene Hermanos estudiando en la Institución.  Si <input type="radio" name="" id=""> No<input type="radio" name="" id=""> Número (s): <input type="text"></p>
                <p>Apellidos y Nombres <input type="text">. Año a Cursar: <input type="text">.  Repitiente: Si <input type="radio" name="" id=""> No <input type="radio" name="" id=""></p>
                <p>Apellidos y Nombres <input type="text">. Año a Cursar: <input type="text">.  Repitiente: Si <input type="radio" name="" id=""> No <input type="radio" name="" id=""></p>
                <p>Apellidos y Nombres <input type="text">. Año a Cursar: <input type="text">.  Repitiente: Si <input type="radio" name="" id=""> No <input type="radio" name="" id=""></p>
                <p>Quien Sera el representante legal del estudiante: Madre <input type="radio" name="" id=""> Padre <input type="radio" name="" id=""> Otro <input type="radio" name="" id=""> Especifique: <input type="text"></p>
                <p>Tiene permiso de la LOPNA. SI<input type="radio" name="" id=""> NO<input type="radio" name="" id="">.  Fecha de Vencimiento <input type="text" class="personal_8"></p>
                <p><b>RECIBIÓ VACUNA COVID-19.  SI<input type="radio" name="" id=""> NO<input type="radio" name="" id=""> 1RA DOSIS <input type="text"> 2DA DOSIS <input type="text"> 3RA DOSIS <input type="text" class="covid_info"></b></p>

                <div class="mother-info">
                    <h3>A. DATOS DE LA MADRE:</h3>
                    <p> Apellidos y Nombres: <input type="text" class="mother-info_1"> Edad: <input type="text" class="mother-info_2"> C.I N°: <input type="text" class="mother-info_3"></p>
                    <p> Nacionalidad: <input type="text" class="mother-info_4"> Parentesco: <input type="text" class="mother-info_5"> Ocupación: <input type="text" class="mother-info_6"></p>
                    <p>Grado de Instrucción: <input type="text" class="mother-info_7"> Teléfono: <input type="tel" name="" id=""> Teléfono de Habitación: <input type="tel" name="" id=""></p>
                    <p>En caso de emergencia llamar a: <input type="text" class="mother-info_8"></p>
                    <p>Correo (Legible): <input type="email" class="mother-info_9"></p>
                </div>
                <div class="dad-info">
                    <h3>A. DATOS DEL PADRE:</h3>
                    <p> Apellidos y Nombres: <input type="text" class="mother-info_1"> Edad: <input type="text" class="mother-info_2"> C.I N°: <input type="text" class="mother-info_3"></p>
                    <p> Nacionalidad: <input type="text" class="mother-info_4"> Parentesco: <input type="text" class="mother-info_5"> Ocupación: <input type="text" class="mother-info_6"></p>
                    <p>Grado de Instrucción: <input type="text" class="mother-info_7"> Teléfono: <input type="tel" name="" id=""> Teléfono de Habitación: <input type="tel" name="" id=""></p>
                    <p>En caso de emergencia llamar a: <input type="text" class="mother-info_8"></p>
                    <p>Correo (Legible): <input type="email" class="mother-info_9"></p>
                </div>
                
            </div>
            <?php
                $estudiante = RegistroEstudiante::ctrRegistroEstudiante();
                if(!isset($_POST["ci"])){
                if ($estudiante == "ok") {
                
                    echo '<script>
                        if(window.history.replaceState){
                            window.history.replaceState(null, null, window.location.href);
                        }
                    </script>';
    
                    echo '<div class="alert alert-success">El estudiante ha sido registrado</div>';
                }
            }else{
                $estudiante["ci"] = $_POST["ci"];
                echo '<script>
                        if(window.history.replaceState){
                            window.history.replaceState(null, null, window.location.href);
                        }
                    </script>';
    
                    echo '<div class="alert alert-success">El estudiante ha sido registrado</div>';
                
            }
            ?>
            <div class="btn-container"><button type="submit">FINALIZAR INSCRIPCIÓN</button></div>
            
            
            
        </form>

    </div>
</body>
</html>
