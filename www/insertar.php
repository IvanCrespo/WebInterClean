<?php
//Conexion
$conexion = mysqli_connect("localhost", "intercle_admin", "Soporte=2020-2", "intercle_intranet");
//Datos Personales
$nombreCompleto = $_POST["nombreCompleto"];
$telefono = $_POST["telefono"];
$vacantes = $_POST["vacantes"]; 
$correo= $_POST["correo"]; 
$telefono= $_POST["telefono"]; 
$archivo= $_POST["archivo"]; 
$mensaje= $_POST["mensaje"];


    //Insert DATA;
        $insertarSQL = "INSERT INTO WebInempleos(nombreCompleto, telefono, vacantes) VALUES ('$nombreCompleto', '$telefono', '$vacantes')";
        $resultado = mysqli_query($conexion, $insertarSQL);
        if ($resultado) {
            echo '<script type="text/javascript">window.alert("se ha enviado correctamente"); window.location.href="empleo.html";</script>';

        } else{
            printf("Errormessage: %s\n", mysqli_error($conexion));
            echo "Error";
        }

        //Insert DATA;
        $insertarSQL = "INSERT INTO WebIncotizaciones(nombreCompleto, correo, telefono, archivo, mensaje) VALUES ('$nombreCompleto', '$telefono', '$archivo','$mensaje')";
        $resultado = mysqli_query($conexion, $insertarSQL);
        if ($resultado) {
            echo '<script type="text/javascript">window.alert("se ha enviado correctamente");</script>';

        } else{
            printf("Errormessage: %s\n", mysqli_error($conexion));
            echo "Error";
        }
        /* ejecutar multi consulta */
        if ($mysqli->multi_query($insertarSQL)) {
            do {
                /* almacenar primer juego de resultados */
                if ($resultado = $mysqli->store_result()) {
                    while ($row = $resultado->fetch_row()) {
                        printf("%s\n", $row[0]);
                    }
                    $result->free();
                }
                /* mostrar divisor */
                if ($mysqli->more_results()) {
                    printf("-----------------\n");
                }
            } while ($mysqli->next_result());
        }

        


?>