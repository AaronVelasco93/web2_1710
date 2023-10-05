<?php

    $dato1= $_POST["txtnombre"]; // usamos un arreglo para almacenar  

    if ($dato1=="aaron"){
        echo "<h1>Hola</h1> " . $dato1;
        echo '<a href="Formulario.php">aquí</a>';

    }else {
        echo "eres alguien diferente";
        echo "<br>";
        echo '<a href="Formulario.php">aquí</a>';
        
    }

        
?>