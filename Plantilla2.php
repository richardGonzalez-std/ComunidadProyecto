<?php
    require_once "Controlador/RegistroControlador.php";
    require_once "Modelo/Register_login.controlador.php";
    session_start();
    if(!isset($_SESSION["Usuario"])){
        echo '<script>window.location = "./index.php";</script>';
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Informático de la U.E.N"Perú de Lacroix"</title>
    <link rel="stylesheet" href="Recursos/css/css_estilo1.css">    
</head>
<body>

<section class="header">
  <img src="Recursos/img/Logo Peru de Lacroix.png" alt="U.E.N Perú de Lacroix" id="miLogo">
  <h1>U.E.N "PERÚ DE LACROIX"</h1>
</section> 

        <nav>
            <ul>

<?php if (isset($_GET["pagina"])): ?>

        <?php if($_GET["pagina"]=="inicio"): ?>

            <li ><a id="active" href="plantilla2.php?pagina=inicio">INICIO</a></li>

            <?php else: ?>

                <li  class="nav-item"><a id="active" class="nav-link" href="plantilla2.php?pagina=inicio">INICIO</a></li>

        <?php endif ?>
    
        <?php if($_GET["pagina"]=="usuarios"): ?>

            <li ><a id="active" href="plantilla2.php?pagina=usuarios">USUARIOS</a></li>

            <?php else: ?>

                <li  class="nav-item"><a id="active" class="nav-link" href="plantilla2.php?pagina=usuarios">USUARIOS</a></li>

        <?php endif ?>

    

        <?php if($_GET["pagina"]=="mision"): ?>

            <li class="nav-item"><a class="nav-link active" href="plantilla2.php?pagina=mision">MISIÓN</a></li>

        <?php else: ?>

            <li class="nav-item"><a class="nav-link" href="plantilla2.php?pagina=mision">MISIÓN</a></li>

        <?php endif ?>
    
    

        <?php if($_GET["pagina"]=="cursos"): ?>

            <li class="nav-item"><a class="nav-link active" href="plantilla2.php?pagina=cursos">CURSOS</a></li>

            <?php else: ?>

                <li class="nav-item"><a class="nav-link" href="plantilla2.php?pagina=cursos">CURSOS</a></li>

        <?php endif ?>

        <?php if($_GET["pagina"]=="ficha inscripcion"): ?>
        <li class="nav-item"><a class="nav-link active" href="plantilla2.php?pagina=nomina">NÓMINA</a></li>


            <?php else: ?>

                <li class="nav-item"><a class="nav-link" href="plantilla2.php?pagina=nomina">NÓMINA</a></li>

        <?php endif ?>  
        
        <?php if($_GET["pagina"]=="contactos"): ?>
        <li class="nav-item"><a class="nav-link active" href="plantilla2.php?pagina=contactos">CONTACTOS</a></li>


            <?php else: ?>

                <li class="nav-item"><a class="nav-link" href="plantilla2.php?pagina=contactos">CONTACTOS</a></li>

        <?php endif ?>  

        

        <?php if($_GET["pagina"]=="salir"): ?>
        <li class="nav-item"><a class="nav-link active" href="plantilla2.php?pagina=salir">SALIR</a></li>


            <?php else: ?>

                <li class="nav-item"><a class="nav-link" href="plantilla2.php?pagina=salir">SALIR</a></li>

        <?php endif ?>                            

     <?php else:?>
        <li class="nav-item"><a class="nav-link active" href="plantilla2.php?pagina=inicio">INICIO</a></li>
        <li class="nav-item"><a class="nav-link" href="plantilla2.php?pagina=mision">MISIÓN</a></li>
        <li class="nav-item"><a class="nav-link" href="plantilla2.php?pagina=cursos">CURSOS</a></li>
        <li class="nav-item"><a class="nav-link" href="plantilla2.php?pagina=nomina">NÓMINA</a></li>
        <li class="nav-item"><a class="nav-link" href="plantilla2.php?pagina=contactos">CONTACTOS</a></li>
        <li class="nav-item"><a class="nav-link" href="plantilla2.php?pagina=salir">SALIR</a></li>

<?php endif ?>
            </ul>
        </nav>
<?php
    if(isset($_GET["pagina"])){

        if($_GET["pagina"]=="inicio" ||
        $_GET["pagina"]=="usuarios" ||
        $_GET["pagina"]=="mision" ||
        $_GET["pagina"]=="cursos" ||
        $_GET["pagina"]=="nomina" ||
        $_GET["pagina"]=="ficha inscripcion" ||
        $_GET["pagina"]=="ficha inscripcion_actualizar" ||
        $_GET["pagina"]=="contactos" ||
        $_GET["pagina"]=="eliminar"||
        $_GET["pagina"]=="salir"){

            include "Vista/Paginas/".$_GET["pagina"].".php";   
        }
        else{
            include "Vista/Paginas/error404.php";
        }
    }
?>
  

  
<section id="footer">
  <p>U.E.N "Perú de Lacroix</p>
  <p>2022-2023</p>
  <p>Política de Privacidad</p>
  <p>Política de Cookies</p>
  <p>Término de Uso</p>
</section>
</body>
</html>