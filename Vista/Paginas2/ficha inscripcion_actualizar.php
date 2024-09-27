<?php

    if(isset($_GET["ci"])){
            $item = "ci";
            $valor = $_GET["ci"];
            $estudiant = RegistroEstudiante::ctrSeleccionarEstudiante($item, $valor);
    }
?>
<div  style="margin: 0 auto;" class="d-flex text-center justify-content-center">
    <form class="p-5 bg-light" method="post">
        <div class="form-group">

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                </div>
                <input style="width: 15rem; height: 2rem; border-radius: 20px; text-align: center; font-family: Unicode; margin-top: 2rem;" type="text" class="form-control" value="<?php echo $estudiant["nombre_student"] ?>" placeholder="Escriba su nombre"  id="nombre" name="actualizarNombre">
            </div>

        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa-solid fa-at"></i></span></div>
                 <input style="width: 15rem; height: 2rem; border-radius: 20px; text-align: center; font-family: Unicode; margin-top: 2rem;" type="text" class="form-control" value="<?php echo $estudiant["apellido_student"]?>" placeholder="Escriba su Apellido"  id="apellido_student" name="actualizarApellido">
            </div>
        </div> 
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa-solid fa-at"></i></span></div>
                 <input style="width: 15rem; height: 2rem; border-radius: 20px; text-align: center; font-family: Unicode; margin-top: 2rem;" type="hidden" class="form-control" value="<?php echo $estudiant["ci"]?>" placeholder="Escriba su cedula"  id="apellido_student" name="actualizarCI">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa-solid fa-at"></i></span></div>
                 <input style="width: 15rem; height: 2rem; border-radius: 20px; text-align: center; font-family: Unicode; margin-top: 2rem;" type="text" class="form-control" value="<?php echo $estudiant["lugar_nacimiento"]?>" placeholder="Escriba su Lugar de nacimiento"  id="apellido_student" name="actualizarLugar">
            </div>
        </div> 
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa-solid fa-at"></i></span></div>
                 <input style="width: 15rem; height: 2rem; border-radius: 20px; text-align: center; font-family: Unicode; margin-top: 2rem;" type="text" class="form-control" value="<?php echo $estudiant["edad"]?>" placeholder="Escriba su Edad"  id="apellido_student" name="actualizarEdad">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa-solid fa-at"></i></span></div>
                 <input style="width: 15rem; height: 2rem; border-radius: 20px; text-align: center; font-family: Unicode; margin-top: 2rem;" type="date" class="form-control" value="<?php echo $estudiant["fecha_nacimiento"]?>" placeholder="Escriba su Edad"  id="apellido_student" name="actualizarFecha">
            </div>
        </div> 
        

        <?php
            $actualizar = RegistroEstudiante::ctrActualizarEstudiante();
            if($actualizar  == "ok"){
                echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                    alert("El usuario ha sido actualizado");
                    
                }
            </script>';

            echo '
            
                <script>
                    setTimeout(function(){
                        window.location = "plantilla.php?pagina=nomina";
                    },1);
                </script>
            '
            ;
            }
        ?>
        <button style="margin-top:3rem;margin-left: 4.2rem;border-radius:5px; width: 7rem; height: 2rem;background-color:rgba(0,160,0,0.5)" type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>