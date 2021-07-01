<?php
//Conexion
$conexion = mysqli_connect("localhost", "intercle_admin", "Soporte=2020-2", "intercle_intranet");
//Form Cotizacion 
$nombreCompleto = $_POST["nombreCompleto"];
$correo= $_POST["correo"]; 
$telefono= $_POST["telefono"]; 
//$archivo= $_POST["archivo"]; 
$mensaje= $_POST["mensaje"];


        //Insert DATA;
        //Form Cotizacion 
        $insertarSQL = "INSERT INTO WebIncotizaciones(nombreCompleto, correo, telefono, mensaje) VALUES ('$nombreCompleto', '$correo', '$telefono','$mensaje')";
        $resultado = mysqli_query($conexion, $insertarSQL);
        if ($resultado) {
            echo '<script type="text/javascript">window.alert("se ha enviado correctamente");</script>';

        } else{
            printf("Errormessage: %s\n", mysqli_error($conexion));
            echo "Error";
        }
        

?>