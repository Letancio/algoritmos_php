<?php 

class md5{

    function gerar_md5($entrada){

        $valorConvertido = md5($entrada);

        echo $valorConvertido;

    }
}

$entrada = 'seu valor que será convertido';

$init = new md5();
$init->gerar_md5($entrada);