<?php

        $pesop = $_POST['peso'];
        $estaturas = $_POST['estatura'];
    
        $imc = $pesop / ($estaturas * $estaturas);
    
        echo "El IMC es: $imc\n";
    
        if ($imc < 18.5) {
            echo "\nBAJO PESO";
        } elseif ($imc >= 18.5 && $imc <= 24.9) {
            echo "\nNORMAL";
        } elseif ($imc >= 25 && $imc <= 29.9) {
            echo "\nSOBREPESO";
        } elseif ($imc >= 30 && $imc <= 34.9) {
            echo "\nOBESIDAD I";
        } elseif ($imc >= 35 && $imc <= 39.9) {
            echo "\nOBESIDAD II";
        } else {
            echo "\nOBESIDAD III";
        }

?>