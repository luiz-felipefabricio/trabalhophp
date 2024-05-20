<?php
    $banco = new mysqli(
        "localhost", "root", "", "projeto", "3306"
    );
    if($banco->connect_errno){
        echo "Erro ao conectar no banco de dados";
    }else{
        echo "Conectado com sucesso!";
    }
    //$banco->close();
?>