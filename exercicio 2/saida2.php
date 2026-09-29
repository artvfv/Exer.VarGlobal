<?php
    if ($_POST['cidade'] == "Curitiba") {
         echo "Olá, " . $_POST['nome'] . "! Você é Curitibano!";
    } else {
        echo "Olá, " . $_POST['nome'] . " de " . $_POST['cidade'] . "!";
    }
   
?>