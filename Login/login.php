<?php
require 'Usuario.class.php';

$sucesso = $usuario = new Usuario();
if( $sucesso ){
    echo "<h1>Show de bola</h1>";
}else{
    echo "<h1>Não deu</h1>"; 
}