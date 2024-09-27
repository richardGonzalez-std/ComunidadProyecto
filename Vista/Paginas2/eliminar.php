<?php
    if(isset($_GET["ci"])){
            $item = "ci";
            $valor = $_GET["ci"];
            $estudiant = RegistroEstudiante::ctrSeleccionarEstudiante($item, $valor);
    }
?>
<p style="text-align:center; margin-top: 2rem; font-weight:800;">ESTA SEGURO QUE DESEA ELIMINAR A <?php echo $estudiant["nombre_student"]." ". $estudiant["apellido_student"]?>?</p>

<div style="margin: 0 auto; margin-top: 10rem; border-radius: 1rem;">
<form  method="post">
<button value="<?php echo $estudiant["ci"]?>" name="ci" style="width:10rem;border-radius: 1rem; height: 2rem; background-color:rgb(160,0,0);color:white;" type="submit">ELIMINAR</button>
<?php
    $eliminar = new RegistroEstudiante();
    $eliminar->ctrEliminarEstudiante();
?>
</form>
</div>
