<?php 

    class indentificar{

        function descobrir_par_ou_impar($numero){

            //condicional
            if($numero %2 == 0){
                echo $numero.' é par';
            }elseif($numero %2 == 1){
                echo $numero.' é impar';
            }

        }

    }

    $numero = '88';

    $inicio = new indentificar();
    $inicio->descobrir_par_ou_impar($numero);