<?php

    $dato1= $_POST["txtnombre"]; // usamos un arreglo para almacenar  

    if ($dato1=="aaron"){
        echo "<h1>Hola</h1> " . $dato1;
        echo "<h1>
        <hr>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates velit, non amet eius sit quia quibusdam libero repudiandae veritatis obcaecati magnam quas reiciendis est, exercitationem nulla, doloremque nemo tempore aut.</p>
    </h1>";

    ?>
        <pre>
        hola
        como 
        estas 
                    tu
    </pre>
    <?php
        echo "<br>";
        echo '<a href="Formulario.php">aquí</a>';

    }else {
        echo "eres alguien diferente";
        echo "<br>";
        echo '<a href="Formulario.php">aquí</a>';
        
    }

        
?>