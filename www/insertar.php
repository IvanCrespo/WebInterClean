<?php
//Conexion
$conexion = mysqli_connect("localhost", "intercle_admin", "Soporte=2020-2", "intercle_intranet");
//Form Empleado
$nombreCompleto = $_POST["nombreCompleto"];
$telefono = $_POST["telefono"];
$vacantes = $_POST["vacantes"];

$estado = $_POST["estado"];
$ciudad = $_POST["ciudad"];


    //Insert DATA;
    //Form Empleado
        $insertarSQL = "INSERT INTO WebInempleos(nombreCompleto, telefono, vacantes, estado, ciudad) VALUES ('$nombreCompleto', '$telefono', '$vacantes', '$estado', '$ciudad')";
        $resultado = mysqli_query($conexion, $insertarSQL);
        if ($resultado) {
            echo '<script type="text/javascript">window.alert("se ha enviado correctamente"); window.location.href="empleo.html";</script>';

        } else{
            printf("Errormessage: %s\n", mysqli_error($conexion));
            echo "Error";
        }

        
        


?>
