<?php

class imc
{
    private float $peso;
    private float $altura;

    public function __construct($peso, $altura)
    {
        $this->peso = $peso;
        $this->altura = $altura;
    }

    // Método que calcula o valor do IMC
    public function calculo(): float
    {
        $alturaCalculo = $this->altura * $this->altura;
        return round($this->peso / $alturaCalculo, 2);
    }

    // Método que retorna a classificação com base no valor do IMC
    public function classificacao(): string
    {
        $imc = $this->calculo();

        if ($imc < 18.5) {
            return "Magreza (Grau 0)";
        } elseif ($imc < 25) {
            return "Normal (Grau 0)";
        } elseif ($imc < 30) {
            return "Sobrepeso (Grau I)";
        } elseif ($imc < 40) {
            return "Obesidade (Grau II)";
        } else {
            return "Obesidade Grave (Grau III)";
        }
    }
}

$peso = 97;
$altura = 1.62;

$calculoReturn = new imc($peso, $altura);

echo "IMC: " . $calculoReturn->calculo() . "\n";
echo "Classificação: " . $calculoReturn->classificacao();
