<?php 

class Linear {
    function buscaLinear($array, $valor) {
        foreach ($array as $indice => $item) {
            if ($item == $valor) {
                return "Valor encontrado na posição: $indice";
            }
        }
        return "Valor não encontrado";
    }
}

// Criando um objeto da classe
$busca = new Linear();

// Exemplo de uso
$lista = [10, 20, 30, 40, 50];
echo $busca->buscaLinear($lista, 20); // Saída: Valor encontrado na posição: 2
