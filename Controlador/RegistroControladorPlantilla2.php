<?php

class ControladorUsuario{

    static public function ctrRegistro()
    {
        if(isset($_POST["RegistroUsuario"])){

            $tabla = "registro_usuario";

            $datos = array(
                'nombre' => $_POST["nombre_completo"],
                'usuario' => $_POST["RegistroUsuario"],
                'correo' => $_POST["RegistroCorreo"],
                'password' => $_POST["RegistroPassword"],
                'priv_user' => $_POST["cargo"]
            );
            
            $respuesta = Registro_login::registroMdl($tabla, $datos);

            return $respuesta;
        }
    }

    static public function ctrSeleccionarRegistros($item, $valor)
    {

        $tabla = "registro_usuario";

        $respuesta = Registro_login::mdlSeleccionarRegistros($tabla, $item, $valor);

        return $respuesta;
    }

     public function ctrIngreso(){
        
        if(isset($_POST["IngresoUsuario"])){
            $tabla = "registro_usuario";

            $item = "usuario";

            $valor = $_POST["IngresoUsuario"];

            $respuesta = Registro_login::mdlSeleccionarRegistros($tabla, $item, $valor);

            if(is_array($respuesta)){
            if($respuesta["usuario"]==$_POST["IngresoUsuario"] &&  $respuesta["password"]==$_POST["IngresoPassword"]){
                $_SESSION["Usuario"] = $respuesta["usuario"];
                $_SESSION["Priv"] = $respuesta["priv_user"];
                if($_SESSION["Priv"]==1){
                    echo "<script>
                        if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                        }
                        window.location='Plantilla2.php?pagina2=inicio';
                    </script>";
                }else{
                    echo "<script>
                        if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                        }
                        window.location='Plantilla.php?pagina=inicio';
                    </script>";
                }
                    
                return;
            }else  if($respuesta["usuario"]==$_POST["IngresoUsuario"] || $respuesta["password"]!=$_POST["IngresoPassword"]){
                echo "<script>
                    if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                </script>";
                echo "<script>alert('Contraseña Incorrecta')</script>";
                return;}

            
            }else if(!is_array($respuesta)){
                echo "<script>
                    if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                </script>";
                echo "<script>alert('USUARIO NO REGISTRADO')</script>";
                return;
            }
        }
    }

    
    
}

class RegistroEstudiante{

    static public function ctrRegistroEstudiante(){
        if(isset($_POST["registroApellido"])){
            $tabla = "datos_planilla";
            $datos = array(
                "ci" => $_POST["Cedula"],
                "apellido_student" => $_POST["registroApellido"],
                "nombre_student" => $_POST["registroNombre"],
                "lugar_nacimiento" => $_POST["lugar"],
                "fecha_nacimiento" => $_POST["fecha"],
                "sexo" => $_POST["sexo"],
                "edad" => $_POST["edad"]
                
            );
            
            $respuesta = registro_estudiante::mdlStudent($tabla, $datos);
            if($respuesta){
                echo "<script>
                        alert('Estudiante Registrado');
                        if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                        }
                    </script>";
            }
            return $respuesta;
        }
    }

    static public function ctrSeleccionarEstudiante($item, $valor)
    {
        $tabla = "datos_planilla";
        $respuesta = registro_estudiante::mdlSeleccionarEstudiante($tabla, $item, $valor);

        return $respuesta;
    }

    static public function ctrActualizarEstudiante(){
        if(isset($_POST["actualizarNombre"])){
            if($_POST["actualizarCI"]!=""){
                $ci = $_POST["actualizarCI"];
            }else{
                $ci = $_POST["ci"];
            }

            $tabla="datos_planilla";
            $datos = array(
                'ci' => $ci,
                "nombre_student" => $_POST["actualizarNombre"],
                "apellido_student" => $_POST["actualizarApellido"],
                "lugar_nacimiento" => $_POST["actualizarLugar"],
                "edad" => $_POST["actualizarEdad"],
                "fecha_nacimiento" => $_POST["actualizarFecha"]
            );

            $respuesta = registro_estudiante::mdlActualizarEstudiante($tabla, $datos);

            return $respuesta;
        }
    }

    public function ctrEliminarEstudiante(){
        if(isset($_POST["ci"])){
            $tabla = "datos_planilla";
            $valor = $_POST["ci"];
            $respuesta = registro_estudiante::mdlEliminarEstudiante($tabla, $valor);

            if($respuesta == "ok"){
                echo "<script>
                    alert('Usuario Eliminado');
                    if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                   window.location='/comunidadfinal/Plantilla2.php?pagina2=nomina';
                    }
                </script>";
            }
        }
    }
    
}