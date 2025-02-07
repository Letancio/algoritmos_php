<?php 

class AlgoritmosMatematicos {
    
    // Verifica se um número é primo
    function ehPrimo($numero) {
        if ($numero < 2) return false;
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }

    // Calcula o Máximo Divisor Comum (MDC) usando o algoritmo de Euclides
    function mdc($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }

    // Calcula o Mínimo Múltiplo Comum (MMC)
    function mmc($a, $b) {
        return ($a * $b) / $this->mdc($a, $b);
    }

    // Retorna a sequência de Fibonacci até um determinado número de termos
    function fibonacci($n) {
        $sequencia = [0, 1];
        for ($i = 2; $i < $n; $i++) {
            $sequencia[] = $sequencia[$i - 1] + $sequencia[$i - 2];
        }
        return $sequencia;
    }
}

// Exemplo de uso
$algoritmos = new AlgoritmosMatematicos();

echo "É primo? " . ($algoritmos->ehPrimo(7) ? "Sim" : "Não") . "\n";
echo "MDC de 48 e 18: " . $algoritmos->mdc(48, 18) . "\n";
echo "MMC de 12 e 15: " . $algoritmos->mmc(12, 15) . "\n";
echo "Sequência de Fibonacci (10 termos): " . implode(", ", $algoritmos->fibonacci(10)) . "\n";

?>
