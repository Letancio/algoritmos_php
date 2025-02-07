<?php 

class GeradorDeSenha {
    
    private $caracteres;
    
    public function __construct() {
        $this->caracteres = [
            'letrasMinusculas' => 'abcdefghijklmnopqrstuvwxyz',
            'letrasMaiusculas' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            'numeros' => '0123456789',
            'simbolos' => '!@#$%^&*()-_=+<>?'
        ];
    }

    public function gerarSenha($tamanho = 12, $incluirNumeros = true, $incluirSimbolos = true) {
        $pool = $this->caracteres['letrasMinusculas'] . $this->caracteres['letrasMaiusculas'];

        if ($incluirNumeros) {
            $pool .= $this->caracteres['numeros'];
        }
        if ($incluirSimbolos) {
            $pool .= $this->caracteres['simbolos'];
        }

        $senha = '';
        $ultimoCaractere = '';

        for ($i = 0; $i < $tamanho; $i++) {
            do {
                $novoCaractere = $pool[random_int(0, strlen($pool) - 1)];
            } while ($novoCaractere === $ultimoCaractere); // Evita repetição consecutiva

            $senha .= $novoCaractere;
            $ultimoCaractere = $novoCaractere;
        }

        return $senha;
    }
}

// Exemplo de uso:
$gerador = new GeradorDeSenha();
echo "Senha segura: " . $gerador->gerarSenha(16, true, true) . "\n";

?>
