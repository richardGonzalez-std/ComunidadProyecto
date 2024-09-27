<?php

    if(isset($_GET["id"])){
            $item = "id";
            $valor = $_GET["id"];
            $usuario = ControladorUsuario::ctrSeleccionarRegistros($item,$valor);
    }
?>
<div  style="margin: 0 auto;" class="d-flex text-center justify-content-center">
    <form class="p-5 bg-light" method="post">
        <div class="form-group">

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                </div>
                <input style="width: 15rem; height: 2rem; border-radius: 20px; text-align: center; font-family: Unicode; margin-top: 2rem;" type="text" class="form-control" value="<?php echo $usuario["nombre"] ?>" placeholder="Escriba su nombre"  id="nombre" name="actualizarNombre">
            </div>

        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa-solid fa-at"></i></span></div>
                 <input style="width: 15rem; height: 2rem; border-radius: 20px; text-align: center; font-family: Unicode; margin-top: 2rem;" type="text" class="form-control" value="<?php echo $usuario["correo"]?>" placeholder="Escriba su Apellido"  id="apellido_student" name="actualizarApellido">
            </div>
        </div> 
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa-solid fa-at"></i></span></div>
                 <input style="width: 15rem; height: 2rem; border-radius: 20px; text-align: center; font-family: Unicode; margin-top: 2rem;" type="hidden" class="form-control" value="<?php echo $usuario["password"]?>" placeholder="Escriba su cedula"  id="apellido_student" name="actualizarCI">
            </div>
        </div>


        <?php
            $actualizar = ControladorUsuario::ctrActualizarUsuario();
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