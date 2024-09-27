<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link rel="stylesheet" href="Recursos/css/css_estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <main>

        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar a la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>

                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>

            <!--Formulario de login y registro-->
            <div class="contenedor__login-register">
                <!--login-->
                <form  method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Ingrese su usuario" name="IngresoUsuario">
                    <input type="password" placeholder="Contraseña" name="IngresoPassword">
                    <?php
                        $ingreso = new ControladorUsuario();
                        $ingreso ->ctrIngreso();
                    ?>
                    <button type="submit">Entrar</button>
                </form>
                <!--Registro-->
                <form method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo" required>
                    <input type="text" placeholder="Correo Electronico" name="RegistroCorreo" required>
                    <input type="text" placeholder="Usuario" name="RegistroUsuario" required>
                    <input type="password" placeholder="Contraseña" name="RegistroPassword" required>
                    <br>
                    <br>
                    <select name="cargo" id="cargo">
                        <option value="NdN">-----------</option>
                        <option value="1">DIRECCIÓN</option>
                        <option value="2">COORDINACIÓN Y PROFESORES</option>
                        <option value="3">CONTROL DE ESTUDIOS</option>
                    </select>
                    <?php
                    $registro = ControladorUsuario::ctrRegistro();

                    if($registro =="ok"){

                        echo "<script>
                            if(window.history.replaceState){
                                window.history.replaceState(null, null, window.location.href);
                            }
                        </script>";

                        echo"<script>
                        alert('Usuario Registrado');
                        </script>";
                    }
                    ?>
                    <button type="submit">Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="Recursos/js_script.js"></script>
</body>
</html>