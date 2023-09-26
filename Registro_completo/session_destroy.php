<?php
session_start();
$_SESSION['u_nombre']='text';
$_SESSION['n_usuario'] ='123456';
$_SESSION['g_usuario'] ='123456';
session_destroy();
        
header('location: ./index.php');
?>