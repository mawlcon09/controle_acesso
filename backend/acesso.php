<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    $idade = $_POST["idade"];

    if ($idade < 16) {

        echo "Acesso proibido";

    } elseif ( ($idade >= 16 && $idade <= 17)) {
        echo "Acesso permitido com responsaveis";

    }
}
?>