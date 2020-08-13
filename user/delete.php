<?php
    require_once('functions.php');

    if(issets($_GET['id_user'])){
        delete($_GET['id_user']);
    } else {
        die("ERRO: ID não definido.");
    }
?>