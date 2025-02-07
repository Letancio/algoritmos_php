<?php

function buscaBinaria($array, $valor) {
    $inicio = 0;
    $fim = count($array) - 1;

    while ($inicio <= $fim) {
        $meio = floor(($inicio + $fim) / 2);

        if ($array[$meio] == $valor) {
            return "Valor encontrado na posição: $meio";
        }
        if ($array[$meio] < $valor) {
            $inicio = $meio + 1;
        } else {
            $fim = $meio - 1;
        }
    }
    return "Valor não encontrado";
}

// Exemplo de uso
$listaOrdenada = [10, 20, 30, 40, 50];
echo buscaBinaria($listaOrdenada, 30); // Saída: Valor encontrado na posição: 2
