<?php
//Conexion
$conexion = mysqli_connect("localhost", "intercle_admin", "Soporte=2020-2", "intercle_intranet");
//Datos Personales
$nombreCompleto = $_POST["nombreCompleto"];
$telefono = $_POST["telefono"];
$vacantes = $_POST["vacantes"];



    //Insert DATA;
        $insertarSQL = "INSERT INTO WebInempleos(nombreCompleto, telefono, vacantes) VALUES ('$nombreCompleto', '$telefono', '$vacantes')";
        $resultado = mysqli_query($conexion, $insertarSQL);
        if ($resultado) {
            echo '<script type="text/javascript">window.alert("se ha enviado correctamente");</script>';

        } else{
            printf("Errormessage: %s\n", mysqli_error($conexion));
            echo "Error";
        }
        

        


?>