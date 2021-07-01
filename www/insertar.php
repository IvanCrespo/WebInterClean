<?php
//Conexion
$conexion = mysqli_connect("localhost", "intercle_admin", "Soporte=2020-2", "intercle_intranet");
//Datos Personales
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$vacante = $_POST["vacante"];



    //Insert DATA;
        $insertarSQL = "INSERT INTO WebInempleos(nombre, telefono, vacante) VALUES ('$nombre', '$telefono', '$vacante')";
        $resultado = mysqli_query($conexion, $insertarSQL);
        if ($resultado) {
            echo '<script type="text/javascript">window.alert("se ha enviado correctamente");</script>';

        } else{
            printf("Errormessage: %s\n", mysqli_error($conexion));
        }
        

        


?>