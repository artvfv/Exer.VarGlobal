   <?php
    session_start();
    $_SESSION['nome'] = $_POST['nome'];
    echo "Olá, " . $_SESSION['nome'] . "! Seja bem vindo(a)!";
  ?>