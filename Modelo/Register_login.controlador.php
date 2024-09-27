<?php

    require_once "ConexionBD.php";

class Registro_login{

    static public function registroMdl($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, correo, usuario, password, priv_user) VALUES (:nombre, :correo, :usuario, :password, :priv_user)");

        $stmt->bindParam(":nombre",$datos["nombre"],PDO::PARAM_STR);
        $stmt->bindParam(":correo",$datos["correo"],PDO::PARAM_STR);
        $stmt->bindParam(":usuario",$datos["usuario"],PDO::PARAM_STR);
        $stmt->bindParam(":password",$datos["password"],PDO::PARAM_STR);
        $stmt->bindParam(":priv_user",$datos["priv_user"],PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt = null;
    }

    static public function mdlSeleccionarRegistros($tabla, $item, $valor){
        
        if($item == null && $valor == null){
            $stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha, '%m/%Y') AS fecha FROM $tabla ORDER BY id DESC");

            $stmt->execute();

            return $stmt->fetchAll();

        }else{
            
                $stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha, '%m/%Y') AS fecha FROM $tabla WHERE 
                $item= :$item ORDER BY id DESC");

                $stmt->bindParam(":".$item,$valor, PDO::PARAM_STR);
    
                $stmt->execute();
    
                return $stmt->fetch();
            

        }
    }

}
    class registro_estudiante{

        static public function mdlStudent($tabla,$datos){
            $form_student = Conexion::conectar()->prepare("INSERT INTO $tabla (ci, apellido_student, nombre_student, 
            lugar_nacimiento, fecha_nacimiento,sexo,edad) 
            VALUES (:ci, :apellido_student, :nombre_student, :lugar_nacimiento, :fecha_nacimiento, :sexo, :edad)");
            
            $form_student->bindParam(":ci",$datos["ci"],PDO::PARAM_STR_CHAR);
            $form_student->bindParam(":apellido_student",$datos["apellido_student"],PDO::PARAM_STR);
            $form_student->bindParam(":nombre_student",$datos["nombre_student"],PDO::PARAM_STR);
            $form_student->bindParam(":lugar_nacimiento",$datos["lugar_nacimiento"],PDO::PARAM_STR);
            $form_student->bindParam(":fecha_nacimiento",$datos["fecha_nacimiento"],PDO::PARAM_STR);
            $form_student->bindParam(":sexo",$datos["sexo"],PDO::PARAM_STR);
            $form_student->bindParam(":edad",$datos["edad"],PDO::PARAM_STR);
            if($form_student->execute()){
                
                return "ok";
            }else{
                print_r(Conexion::conectar()->errorInfo());
            }


        }

        static public function mdlSeleccionarEstudiante($tabla, $item, $valor){

            if($item == null && $valor == null){

                $form_student = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha_registro, '%m/%Y') AS fecha_registro FROM $tabla ORDER BY ci DESC");

                $form_student->execute();

                return $form_student->fetchAll();
            }else{
                $form_student = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha_registro, '%m/%Y') AS fecha_registro FROM $tabla WHERE 
                $item= :$item ORDER BY ci DESC");

                $form_student->bindParam(":".$item,$valor, PDO::PARAM_STR);

                $form_student->execute();

                return $form_student->fetch();
                
            }
        }

        static public function  mdlActualizarEstudiante($tabla,$datos){
       
            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre_student=:nombre_student, apellido_student=:apellido_student, lugar_nacimiento=:lugar_nacimiento, edad=:edad, fecha_nacimiento=:fecha_nacimiento WHERE ci=:ci");
    
           
            $stmt->bindParam(":nombre_student",$datos['nombre_student'], PDO::PARAM_STR);
            $stmt->bindParam(":apellido_student",$datos['apellido_student'], PDO::PARAM_STR);
            $stmt->bindParam(":ci",$datos['ci'], PDO::PARAM_INT);
            $stmt->bindParam(":lugar_nacimiento",$datos['lugar_nacimiento'], PDO::PARAM_STR);
            $stmt->bindParam(":edad",$datos['edad'], PDO::PARAM_STR);
            $stmt->bindParam(":fecha_nacimiento",$datos['fecha_nacimiento'], PDO::PARAM_STR);
    
    
            if ($stmt->execute()) {
    
                return "ok";
            }else{
                print_r(Conexion::conectar()->errorInfo());
            }
    
            $stmt = null;
        }

        static public function mdlEliminarEstudiante($tabla,$valor){
            $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE ci = :ci");

            $stmt->bindParam(":ci", $valor, PDO::PARAM_INT);


            if($stmt->execute()){
                return "ok";
            }else{
                print_r(Conexion::conectar()->errorInfo());
            }
            
        }
    }
