<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en">

<head>
 <title>Registrar Usuario</title>
  <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <?php include('./styles.php') //acarreo de los estilos ?>
 <!--Materialize files-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/estilos.css">    
</head>


<script>
    function valida(e){
        tecla = (document.all) ? e.keyCode : e.which;
        //Tecla de retroceso para borrar, siempre la permite
        if (tecla==8){
            return true;
        }

        //patron de entrada, en este caso solo acepta numero
        patron =/[0-9]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }
</script>

<body>

 <header>
 <h1 style="text-align:center" >Registro </h1>
 </header>
<div class="row" style="margin-top:50px">
<div class="col s6 offset-s3">
 <form action="submit_registrar_usuario.php" method="post">

 <hr />
 <h3>Crea una cuenta</h3>

 <!--Nombre-->
<div>     
 <label for="nombre">Nombre Completo:</label><br>
 <input type="text" name="username" maxlength="255" required>
 <br/><br/>
</div>
<!-- Carrera -->
<label for="carrera">Carrera:</label><br>
<input type="text" name="carrera" maxlength="255" required>
<br/><br/>
<!-- No_Cuenta -->
<label for="no_cuenta">No_Cuenta:</label><br>
<input type="text" name="no_cuenta" maxlength="10" required>
<br/><br/>
<!-- Direcion -->
<label for="direcion">Direccion:</label><br>
<input type="text" name="direccion" maxlength="255" required>
<br/><br/>
<!-- Telefono -->
<label for="telefono">Telefono:</label><br>
<input type="text" onkeypress="return valida(event) "name="telefono" maxlength="15" required>
<br/><br/>
<!-- Institucion -->
<label for="institucion">Institucion:</label><br>
<input type="text" name="institucion" maxlength="35" required>
<br/><br/>
<!-- Email -->
<label for="correo">Email:</label><br>
<input type="email" name="correo" maxlength="35" required>
<br/><br/>
<!--Password-->
<label for="pass">Password:</label><br>
<input type="password" name="password" maxlength="8" required>

 <br/><br/>
<input type="submit" name="submit" class="btn btn-primary" value="Registrarme">
<input type="reset" name="clear" class="btn btn-primary" value="Borrar">
<button type="button" class="btn" style="background-color:black"> <a href="./login.php" ><font color="white">Login</font></a></button>

   

 </form>
    </div>
    </div>
<hr /><br />

<footer>
 &copy;2018 <a href="http://www.aragon.unam.mx/aragon/index.html">www.aragon.unam.mx</a>
</footer>
 <!--Script de nav pasarlo a un php-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.js"></script>
<script type="text/javascript">$(".brand-logo").sideNav();</script> 
    
 </body>
</html>
