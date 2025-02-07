<?php 

class Base64 {

    function codificar($valorpadrao) {
        $valorConvertido = base64_encode($valorpadrao);
        echo 'Valor Criptografado: ' . $valorConvertido . "\n";
        return $valorConvertido; // Retorna o valor codificado
    }

    function decodificar($valorConvertido) {
        $valorOriginal = base64_decode($valorConvertido);
        echo 'Valor Original: ' . $valorOriginal . "\n";
    }
}

$valorpadrao = 'eu amo php';
$init = new Base64();

// Armazena o valor codificado para depois decodificar corretamente
$valorConvertido = $init->codificar($valorpadrao);
$init->decodificar($valorConvertido);
