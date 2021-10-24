<?php
include "conexion.php";
// Agregar Trabajador a entrada
if (!empty($_POST)) {
    $alert = "";
    if (!empty($_POST['titulo']) || !empty($_POST['autor']) ) {
        $titulo =$_POST['titulo'];
        $autor=$_POST['autor'];
        $edicion=$_POST['edicion'];
        $fecha_publicacion=$_POST['fecha_publicacion'];
        $num_paginas=$_POST['num_paginas'];
        $cant_ejemplares=$_POST['cant_ejemplares'];
        $editorial=$_POST['editorial'];
        $tipo_libro=$_POST['tipo_libro'];
        $tema_libro=$_POST['tema_libro'];
        $estado_libro=$_POST['estado_libro'];
        $pais_publicacion=$_POST['pais_publicacion'];
        $idioma=$_POST['idioma'];
        
        //Sentencia para inserci�n
        $sql= "INSERT INTO libro(id_libro,titulo,autor,edicion,fecha_publicacion,num_paginas,cant_ejemplares,editorial,tipo_libro,tema_libro,estado_libro,pais_publicacion,idioma) VALUES ('','$titulo','$autor',$edicion,'$fecha_publicacion','$num_paginas','$cant_ejemplares','$editorial','$tipo_libro','$tema_libro','$estado_libro','$pais_publicacion','$idioma')";
        if ($query_insert = mysqli_query($conexion,$sql))
            {
               echo "Libro agregado";
            }
        else {
            echo "Libro no agregado";
        }
        mysqli_close($conexion);
    } else {
        echo "Campos vacios";
    }
}
?>